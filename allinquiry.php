<?php
session_start();

// Authentication
$password = 'rajeshrshiv@gmail.com';
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
                <label class="block text-sm font-medium text-gray-700 mb-1">Enter Password (Email ID)</label>
                <input type="password" name="password" required class="w-full border-gray-300 rounded-xl px-4 py-3 border focus:ring-blue-500 focus:border-blue-500 outline-none">
            </div>
            <button type="submit" name="login" class="w-full bg-blue-600 text-white font-bold py-3 rounded-xl hover:bg-blue-700 transition">Access Inquiries</button>
        </form>
    </div>
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

// Handle basic PHP filtering
$filter = $_GET['filter'] ?? 'all';
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
    
    if ($match) {
        $filteredInquiries[] = $inq;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Inquiries | Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Lead & Inquiry Dashboard</h1>
            <p class="text-gray-500 mt-1">Manage your website contacts, footer inquiries, and career applications.</p>
        </div>
        <a href="?logout=true" class="bg-red-50 text-red-600 hover:bg-red-100 px-4 py-2 rounded-lg font-semibold transition">Logout</a>
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
    </div>

    <!-- Table -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-100 text-gray-500 text-xs uppercase tracking-wider">
                        <th class="p-4 font-semibold">Date & Time</th>
                        <th class="p-4 font-semibold">Source</th>
                        <th class="p-4 font-semibold">Contact Info</th>
                        <th class="p-4 font-semibold">Service / Position</th>
                        <th class="p-4 font-semibold">Message</th>
                        <th class="p-4 font-semibold">Attachment</th>
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
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="p-8 text-center text-gray-500">
                                No inquiries found for the selected filter.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
