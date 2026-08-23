<?php
session_start();

// Authentication
$password = 'growautoai';
$error = '';

if (isset($_POST['login'])) {
    if ($_POST['password'] === $password) {
        $_SESSION['inquiry_logged_in'] = true;
        header("Location: allinquiry.php");
        exit;
    } else {
        $error = 'Invalid password.';
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: allinquiry.php");
    exit;
}

if (!isset($_SESSION['inquiry_logged_in']) || $_SESSION['inquiry_logged_in'] !== true) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inquiry Dashboard Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Inquiry Dashboard</h2>
        <?php if($error): ?>
            <div class="bg-red-50 text-red-600 p-3 rounded-lg mb-4 text-sm"><?= $error ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Enter Password</label>
                <input type="password" name="password" required class="w-full border-gray-300 rounded-xl px-4 py-3 border focus:ring-blue-500 focus:border-blue-500 outline-none">
            </div>
            <button type="submit" name="login" class="w-full bg-blue-600 text-white font-bold py-3 rounded-xl hover:bg-blue-700 transition">Access Inquiries</button>
        </form>
    </div>

    <!-- jQuery and DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.tailwindcss.js"></script>
    <script>
        $(document).ready(function() {
            $('#inquiryTable').DataTable({
                order: [[ 0, 'desc' ]], // Sort by Date descending by default
                pageLength: 25,
                language: {
                    search: 'Quick Search: ',
                    lengthMenu: 'Show _MENU_ entries'
                }
            });
        });
    </script>
</body>
</html>
<?php
    exit;
}

// Fetch Data
$dataFile = __DIR__ . '/PHPMailerData/inquiries.json';
$inquiries = [];
if (file_exists($dataFile)) {
    $inquiries = json_decode(file_get_contents($dataFile), true) ?? [];
}

// Handle Deletion
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $inquiries = array_filter($inquiries, function($inq) use ($delete_id) {
        return isset($inq['id']) && $inq['id'] !== $delete_id;
    });
    $inquiries = array_values($inquiries);
    file_put_contents($dataFile, json_encode($inquiries, JSON_PRETTY_PRINT));
    
    // Redirect to remove delete_id from URL
    $params = $_GET;
    unset($params['delete_id']);
    $url = 'allinquiry.php';
    if (!empty($params)) {
        $url .= '?' . http_build_query($params);
    }
    header("Location: $url");
    exit;
}

// Handle basic PHP filtering
$filter = $_GET['filter'] ?? 'all';
$start_date = $_GET['start_date'] ?? '';
$end_date = $_GET['end_date'] ?? '';
$filteredInquiries = [];
$today = date('Y-m-d');
$yesterday = date('Y-m-d', strtotime('-1 day'));
$week_start = date('Y-m-d', strtotime('-7 days'));
$month_start = date('Y-m-01');
$year_start = date('Y-01-01');

foreach ($inquiries as $inq) {
    $inqDate = date('Y-m-d', strtotime($inq['date']));
    $match = false;
    
    if ($filter == 'all') $match = true;
    elseif ($filter == 'today' && $inqDate == $today) $match = true;
    elseif ($filter == 'yesterday' && $inqDate == $yesterday) $match = true;
    elseif ($filter == 'week' && $inqDate >= $week_start) $match = true;
    elseif ($filter == 'month' && $inqDate >= $month_start) $match = true;
    elseif ($filter == 'year' && $inqDate >= $year_start) $match = true;
    elseif ($filter == 'custom') {
        $match = true;
        if (!empty($start_date) && $inqDate < $start_date) $match = false;
        if (!empty($end_date) && $inqDate > $end_date) $match = false;
    }
    
    if ($match) {
        $filteredInquiries[] = $inq;
    }
}

// Export logic
if (isset($_GET['export']) && $_GET['export'] == 'csv') {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="inquiries_' . date('Y-m-d') . '.csv"');
    $output = fopen('php://output', 'w');
    fputcsv($output, ['Date', 'Source', 'Name', 'Email', 'Phone', 'Service/Position', 'Message', 'Resume Link']);
    
    foreach ($filteredInquiries as $inq) {
        $resumeLink = !empty($inq['resume']) ? 'http://' . $_SERVER['HTTP_HOST'] . '/' . $inq['resume'] : 'N/A';
        fputcsv($output, [
            $inq['date'],
            $inq['source'],
            $inq['name'],
            $inq['email'],
            $inq['phone'],
            $inq['service_position'],
            $inq['message'],
            $resumeLink
        ]);
    }
    fclose($output);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Inquiries | Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- DataTables Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.tailwindcss.css">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        /* Minor fixes for Tailwind datatables */
        .dt-container { padding: 1.5rem; }
        div.dt-container div.dt-layout-row { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem; }
        .dt-search input, .dt-length select { border: 1px solid #e5e7eb !important; border-radius: 0.5rem !important; padding: 0.35rem 0.75rem !important; }
        table.dataTable { border-collapse: collapse !important; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Lead & Inquiry Dashboard</h1>
            <p class="text-gray-500 mt-1">Manage your website contacts, footer inquiries, and career applications.</p>
        </div>
        <div class="flex items-center gap-3">
            <a href="?<?= http_build_query(array_merge($_GET, ['export' => 'csv'])) ?>" class="bg-green-600 text-white hover:bg-green-700 px-4 py-2 rounded-lg font-semibold transition flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                Export CSV
            </a>
            <a href="?logout=true" class="bg-red-50 text-red-600 hover:bg-red-100 px-4 py-2 rounded-lg font-semibold transition">Logout</a>
        </div>
    </div>

    <!-- Filters -->
    <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 mb-6 flex flex-wrap gap-2">
        <span class="py-2 text-sm font-semibold text-gray-500 mr-2">Filter by Date:</span>
        <a href="?filter=all" class="<?= $filter=='all' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' ?> px-4 py-2 rounded-lg text-sm font-medium transition">All Time</a>
        <a href="?filter=today" class="<?= $filter=='today' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' ?> px-4 py-2 rounded-lg text-sm font-medium transition">Today</a>
        <a href="?filter=yesterday" class="<?= $filter=='yesterday' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' ?> px-4 py-2 rounded-lg text-sm font-medium transition">Yesterday</a>
        <a href="?filter=week" class="<?= $filter=='week' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' ?> px-4 py-2 rounded-lg text-sm font-medium transition">Last 7 Days</a>
        <a href="?filter=month" class="<?= $filter=='month' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' ?> px-4 py-2 rounded-lg text-sm font-medium transition">This Month</a>
        <a href="?filter=year" class="<?= $filter=='year' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' ?> px-4 py-2 rounded-lg text-sm font-medium transition">This Year</a>
        
        <form method="GET" class="flex items-center gap-2 ml-auto border-l border-gray-200 pl-4">
            <input type="hidden" name="filter" value="custom">
            <input type="date" name="start_date" value="<?= htmlspecialchars($start_date) ?>" class="border border-gray-200 rounded-lg px-2 py-1.5 text-sm outline-none focus:border-blue-500 text-gray-600">
            <span class="text-gray-400 text-sm">to</span>
            <input type="date" name="end_date" value="<?= htmlspecialchars($end_date) ?>" class="border border-gray-200 rounded-lg px-2 py-1.5 text-sm outline-none focus:border-blue-500 text-gray-600">
            <button type="submit" class="bg-blue-600 text-white px-3 py-1.5 rounded-lg text-sm font-bold hover:bg-blue-700 transition">Go</button>
        </form>
    </div>

    <!-- Table -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table id="inquiryTable" class="w-full text-left border-collapse display dt-column-order">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-100 text-gray-500 text-xs uppercase tracking-wider">
                        <th class="p-4 font-semibold">Date & Time</th>
                        <th class="p-4 font-semibold">Source</th>
                        <th class="p-4 font-semibold">Contact Info</th>
                        <th class="p-4 font-semibold">Service / Position</th>
                        <th class="p-4 font-semibold">Message</th>
                        <th class="p-4 font-semibold">Attachment</th>
                        <th class="p-4 font-semibold text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm">
                    <?php if (count($filteredInquiries) > 0): ?>
                        <?php foreach($filteredInquiries as $inq): ?>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="p-4 whitespace-nowrap text-gray-600">
                                <?= date('d M Y, h:i A', strtotime($inq['date'])) ?>
                            </td>
                            <td class="p-4">
                                <?php 
                                    $src = $inq['source'];
                                    $badge = 'bg-gray-100 text-gray-600';
                                    if(strpos($src, 'Careers') !== false) $badge = 'bg-purple-100 text-purple-700';
                                    elseif(strpos($src, 'Footer') !== false) $badge = 'bg-orange-100 text-orange-700';
                                    elseif(strpos($src, 'Contact') !== false) $badge = 'bg-blue-100 text-blue-700';
                                ?>
                                <span class="<?= $badge ?> px-2.5 py-1 rounded-full text-xs font-bold"><?= $src ?></span>
                            </td>
                            <td class="p-4">
                                <div class="font-bold text-gray-900"><?= htmlspecialchars($inq['name']) ?></div>
                                <div class="text-blue-600"><a href="mailto:<?= htmlspecialchars($inq['email']) ?>"><?= htmlspecialchars($inq['email']) ?></a></div>
                                <div class="text-gray-500"><?= htmlspecialchars($inq['phone']) ?></div>
                            </td>
                            <td class="p-4 font-medium text-gray-700">
                                <?= htmlspecialchars($inq['service_position']) ?>
                            </td>
                            <td class="p-4 text-gray-600 max-w-xs truncate" title="<?= htmlspecialchars($inq['message']) ?>">
                                <?= htmlspecialchars($inq['message']) ?: '<em class="text-gray-400">No message</em>' ?>
                            </td>
                            <td class="p-4">
                                <?php if(!empty($inq['resume'])): ?>
                                    <a href="<?= htmlspecialchars($inq['resume']) ?>" target="_blank" class="inline-flex items-center gap-1 text-sm font-semibold text-blue-600 hover:text-blue-800 bg-blue-50 px-3 py-1.5 rounded-lg transition">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                        View File
                                    </a>
                                <?php else: ?>
                                    <span class="text-gray-400 text-xs">N/A</span>
                                <?php endif; ?>
                            </td>
                            <td class="p-4 text-center">
                                <?php if(isset($inq['id'])): ?>
                                <a href="?delete_id=<?= urlencode($inq['id']) ?>&<?= http_build_query(array_diff_key($_GET, ['delete_id'=>''])) ?>" class="text-red-500 hover:text-red-700 transition" onclick="return confirm('Are you sure you want to delete this entry?');" title="Delete">
                                    <svg class="w-5 h-5 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </a>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="p-8 text-center text-gray-500">
                                No inquiries found for the selected filter.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


    <!-- jQuery and DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.tailwindcss.js"></script>
    <script>
        $(document).ready(function() {
            $('#inquiryTable').DataTable({
                order: [[ 0, 'desc' ]], // Sort by Date descending by default
                pageLength: 25,
                language: {
                    search: 'Quick Search: ',
                    lengthMenu: 'Show _MENU_ entries'
                }
            });
        });
    </script>
</body>
</html>






