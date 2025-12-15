<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create_cookie'])) {
    $cookie_name = $_POST['cookie_name'] ?? 'test_cookie';
    $cookie_value = $_POST['cookie_value'] ?? 'test_value';
    $expiry_time = isset($_POST['expiry_time']) ? (int)$_POST['expiry_time'] : time() + 3600;
    $cookie_path = $_POST['cookie_path'] ?? '/';
    $domain = $_POST['domain'] ?? '';
    $secure = isset($_POST['secure']) ? true : false;
    $httponly = isset($_POST['httponly']) ? true : false;
    
    setcookie($cookie_name, $cookie_value, $expiry_time, $cookie_path, $domain, $secure, $httponly);
    $message = "Cookie '$cookie_name' created successfully!";
}

if (isset($_GET['delete'])) {
    $cookie_name = $_GET['delete'];
    setcookie($cookie_name, '', time() - 3600, '/');
    $message = "Cookie '$cookie_name' deleted!";
    header("Location: cookie_manager.php");
    exit();
}

if (isset($_GET['delete_all'])) {
    foreach ($_COOKIE as $name => $value) {
        setcookie($name, '', time() - 3600, '/');
    }
    $message = "All cookies deleted!";
    header("Location: cookie_manager.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie Manager</title>
</head>
<body>
    <h2>Task 9: Cookie Manager (Create, Retrieve, Delete)</h2>
    
    <?php if ($message): ?>
        <p style="color: green;"><strong><?php echo $message; ?></strong></p>
    <?php endif; ?>
    
    <h3>Create Cookie:</h3>
    <form method="POST" action="">
        <label>Cookie Name:</label>
        <input type="text" name="cookie_name" value="test_cookie" required><br><br>
        
        <label>Cookie Value:</label>
        <input type="text" name="cookie_value" value="test_value" required><br><br>
        
        <label>Expiry Time (seconds from now):</label>
        <input type="number" name="expiry_time" value="3600" min="1"><br><br>
        
        <label>Cookie Path:</label>
        <input type="text" name="cookie_path" value="/"><br><br>
        
        <label>Domain (optional):</label>
        <input type="text" name="domain" value=""><br><br>
        
        <label>
            <input type="checkbox" name="secure"> Secure (HTTPS only)
        </label><br><br>
        
        <label>
            <input type="checkbox" name="httponly" checked> HttpOnly (JavaScript cannot access)
        </label><br><br>
        
        <button type="submit" name="create_cookie">Create Cookie</button>
    </form>
    
    <h3>All Cookies:</h3>
    <?php if (empty($_COOKIE)): ?>
        <p>No cookies found.</p>
    <?php else: ?>
        <table border="1" cellpadding="5">
            <tr>
                <th>Cookie Name</th>
                <th>Cookie Value</th>
                <th>Action</th>
            </tr>
            <?php foreach ($_COOKIE as $name => $value): ?>
                <tr>
                    <td><?php echo htmlspecialchars($name); ?></td>
                    <td><?php echo htmlspecialchars($value); ?></td>
                    <td><a href="?delete=<?php echo urlencode($name); ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>
        <a href="?delete_all=1" onclick="return confirm('Delete all cookies?')">Delete All Cookies</a>
    <?php endif; ?>
    
    <h3>Cookie Information:</h3>
    <p><strong>Total Cookies:</strong> <?php echo count($_COOKIE); ?></p>
    <p><strong>Cookie Array:</strong></p>
    <pre><?php print_r($_COOKIE); ?></pre>
</body>
</html>
