<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['url'])) {
    $url = trim($_POST['url']);
    
    if (!empty($url)) {
        if (!preg_match('/^https?:\/\//', $url)) {
            $url = 'http://' . $url;
        }
        
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            header("Location: " . $url);
            exit();
        } else {
            $message = "Invalid URL!";
        }
    } else {
        $message = "Please enter a URL!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>URL Redirect - Search Engine</title>
</head>
<body>
    <h2>Task 2: URL Redirect Search Engine</h2>
    
    <form method="POST" action="">
        <label>Enter URL:</label>
        <input type="text" name="url" placeholder="www.example.com" required>
        <button type="submit" name="go">GO</button>
    </form>
    
    <?php if ($message): ?>
        <p style="color: red;"><?php echo $message; ?></p>
    <?php endif; ?>
    
    <p><strong>Examples:</strong> google.com, www.w3schools.com, https://github.com</p>
</body>
</html>
