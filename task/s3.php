<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: s.php");
    exit();
}

if ($_SESSION['role'] !== 'admin') {
    header("Location: s1.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title> admin page</title>
</head>
<body>
<h1>admin page</h1>    
    <div>
        hello <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>
        <div>admin</div>
    </div>
    
    <div>
        <a href="s1.php"> admin page</a>
        <a href="s2.php">user page </a>
        <a href="s4.php">log out </a>
    </div>
    
    <div>
        <h2>just admin </h2>
    </div>
</body>
</html>
