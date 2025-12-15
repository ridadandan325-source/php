<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Script Information</title>
</head>
<body>
    <h2>Task 5: Project Name and Script Name</h2>
    
    <h3>Script Information:</h3>
    <p><strong>Script Name:</strong> <?php echo basename($_SERVER['PHP_SELF']); ?></p>
    <p><strong>Script Path:</strong> <?php echo $_SERVER['PHP_SELF']; ?></p>
    <p><strong>Full File Path:</strong> <?php echo __FILE__; ?></p>
    <p><strong>Project Directory:</strong> <?php echo dirname(__FILE__); ?></p>
    <p><strong>Server Document Root:</strong> <?php echo $_SERVER['DOCUMENT_ROOT']; ?></p>
    
    <h3>Server Information:</h3>
    <p><strong>Server Name:</strong> <?php echo $_SERVER['SERVER_NAME']; ?></p>
    <p><strong>Server Software:</strong> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
    <p><strong>Request URI:</strong> <?php echo $_SERVER['REQUEST_URI']; ?></p>
    <p><strong>Script Filename:</strong> <?php echo $_SERVER['SCRIPT_FILENAME']; ?></p>
</body>
</html>
