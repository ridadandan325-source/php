<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: s.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title> home page</title>
</head>
<body>
    <h1> home page</h1>
    
    <div>
        hello <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>
        <br>
        <small>:x <?php echo htmlspecialchars($_SESSION['role']); ?></small>
    </div>
    
    <div>
        <?php if ($_SESSION['role'] === 'admin'): ?>
            <a href="s3.php">admin page </a>
        <?php endif; ?>
        <a href="s2.php">user page </a>
        <a href="s4.php">log out </a>
    </div>
    
    <div>
        <h2>wellcom home page</h2>
        <p>next page</p>
    </div>
</body>
</html>
