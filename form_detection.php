<?php
$method = "";
$email = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['email'])) {
    $method = "GET";
    $email = $_GET['email'];
    $password = $_GET['password'] ?? "";
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $method = "POST";
    $email = $_POST['email'];
    $password = $_POST['password'] ?? "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Detection - GET or POST</title>
</head>
<body>
    <h2>Task 1: Form Detection (GET or POST)</h2>
    
    <h3>Submit using GET method:</h3>
    <form method="GET" action="">
        <label>Email:</label>
        <input type="email" name="email" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit">Submit (GET)</button>
    </form>
    
    <h3>Submit using POST method:</h3>
    <form method="POST" action="">
        <label>Email:</label>
        <input type="email" name="email" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit">Submit (POST)</button>
    </form>
    
    <?php if ($method): ?>
        <h3>Result:</h3>
        <p><strong>Method used:</strong> <?php echo $method; ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
        <p><strong>Password:</strong> <?php echo htmlspecialchars($password); ?></p>
    <?php endif; ?>
</body>
</html>
