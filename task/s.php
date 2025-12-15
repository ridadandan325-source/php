<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: s1.php");
    exit();
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $users = [
        'admin' => ['password' => 'admin123', 'role' => 'admin'],
        'user' => ['password' => 'user123', 'role' => 'user'],
        'ahmed' => ['password' => '123456', 'role' => 'user']
    ];
    
    if (isset($users[$username]) && $users[$username]['password'] === $password) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $users[$username]['role'];
        header("Location: s1.php");
        exit();
    } else {
        $error = " error !";
    }
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>login </title>
</head>
<body>
    <h2>login </h2>
    
    <?php if ($error): ?>
        <div><?php echo $error; ?></div>
    <?php endif; ?>
    
    <form method="POST" action="">
        <div>
            <label for="username">username :</label>
            <input type="text" id="username" name="username" required>
        </div>
        
        <div>
            <label for="password">password :</label>
            <input type="password" id="password" name="password" required>
        </div>
        
        <button type="submit">login </button>
    </form>
    
</body>
</html>
