<?php
session_start();

if (!isset($_SESSION['page_refresh_count'])) {
    $_SESSION['page_refresh_count'] = 0;
}

$_SESSION['page_refresh_count']++;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page Counter</title>
</head>
<body>
    <h2>Task 7: Website Counter on Refresh</h2>
    
    <h3>Page Refresh Counter:</h3>
    <p><strong>Number of times this page has been refreshed:</strong> <?php echo $_SESSION['page_refresh_count']; ?></p>
    
    <p><strong>Note:</strong> This counter resets when you close the browser or clear the session.</p>
    
    <form method="POST" action="">
        <button type="submit" name="refresh">Refresh Page</button>
    </form>
    
    <p><a href="page_counter.php">Click here to refresh</a></p>
    
    <?php
    if (isset($_POST['reset'])) {
        $_SESSION['page_refresh_count'] = 0;
        header("Location: page_counter.php");
        exit();
    }
    ?>
    
    <form method="POST" action="">
        <button type="submit" name="reset">Reset Counter</button>
    </form>
</body>
</html>
