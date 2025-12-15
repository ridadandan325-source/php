<?php
$counter_file = 'visitor_count.txt';

$count = 0;
if (file_exists($counter_file)) {
    $count = (int)file_get_contents($counter_file);
}

session_start();
if (!isset($_SESSION['visited'])) {
    $count++;
    file_put_contents($counter_file, $count);
    $_SESSION['visited'] = true;
}

$visitor_ip = $_SERVER['REMOTE_ADDR'];
$visitor_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
$visit_time = date('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Visitor Counter</title>
</head>
<body>
    <h2>Task 8: Number of Visitors</h2>
    
    <h3>Visitor Statistics:</h3>
    <p><strong>Total Number of Visitors:</strong> <?php echo $count; ?></p>
    
    <h3>Your Visit Information:</h3>
    <p><strong>Your IP Address:</strong> <?php echo htmlspecialchars($visitor_ip); ?></p>
    <p><strong>Visit Time:</strong> <?php echo $visit_time; ?></p>
    <p><strong>User Agent:</strong> <?php echo htmlspecialchars($visitor_agent); ?></p>
    
    <p><strong>Note:</strong> Each unique visitor session is counted once. Refresh the page won't increase the counter.</p>
    
    <?php
    if (isset($_POST['reset_counter'])) {
        file_put_contents($counter_file, '0');
        header("Location: visitor_counter.php");
        exit();
    }
    ?>
    
    <form method="POST" action="">
        <button type="submit" name="reset_counter" onclick="return confirm('Reset visitor counter?')">Reset Counter</button>
    </form>
</body>
</html>
