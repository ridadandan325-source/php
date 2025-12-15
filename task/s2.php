<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: s.php");
    exit();
}

if ($_SESSION['role'] !== 'user' && $_SESSION['role'] !== 'admin') {
    header("Location: s1.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>user page</title>
</head>
<body>
    <h1>user page</h1>
    
    <div>
        wellcom<strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>
        <br>
    </div>
    
    <div>
        <a href="s1.php">home page </a>
        <?php if ($_SESSION['role'] === 'admin'): ?>
            <a href="s3.php"> admin page</a>
        <?php endif; ?>
        <a href="s4.php">log out </a>
    </div>
    
    <div>
        <h2> wellcom user page</h2>
        </div>
    </div>
</body>
</html>
