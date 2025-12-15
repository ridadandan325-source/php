<?php
$request_time = $_SERVER['REQUEST_TIME'];
$request_time_formatted = date('Y-m-d H:i:s', $request_time);
$request_time_micro = microtime(true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page Requested Time</title>
</head>
<body>
    <h2>Task 6: Page Requested Time</h2>
    
    <h3>Request Time Information:</h3>
    <p><strong>Request Time (Unix Timestamp):</strong> <?php echo $request_time; ?></p>
    <p><strong>Request Time (Formatted):</strong> <?php echo $request_time_formatted; ?></p>
    <p><strong>Request Time (Microseconds):</strong> <?php echo number_format($request_time_micro, 6); ?></p>
    <p><strong>Current Time:</strong> <?php echo date('Y-m-d H:i:s'); ?></p>
    <p><strong>Time Zone:</strong> <?php echo date_default_timezone_get(); ?></p>
    
    <h3>Additional Time Information:</h3>
    <p><strong>Date:</strong> <?php echo date('Y-m-d'); ?></p>
    <p><strong>Time:</strong> <?php echo date('H:i:s'); ?></p>
    <p><strong>Day of Week:</strong> <?php echo date('l'); ?></p>
    <p><strong>Day of Year:</strong> <?php echo date('z'); ?></p>
    
    <p><a href="request_time.php">Refresh Page</a> to see updated time</p>
</body>
</html>
