<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo "PHP Version: " . phpversion();

phpinfo();

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



echo "Tomorrow I'll learn PHP global variables.";
echo "<br>";
echo "This is a bad command: del c:\\*.*";


echo"<br>";
echo"<br>";
/*   هاي بدي اخليها لحالها بالصفحه عشان تشتغل
<form method="post">
    <label>Enter your name:</label><br>
    <input type="text" name="username" required>
    <br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"];
    echo "Hello, " . $name;
}
    */

$ipAddress = $_SERVER['REMOTE_ADDR'];
echo "Client IP Address: " . $ipAddress;

//q5
echo"<br>";
echo"<br>";

$currentFile = basename($_SERVER['PHP_SELF']);
echo "Current file name: " . $currentFile;

echo"<br>";
echo"<br>";

$dom = new DOMDocument();

$dom->loadHTML("<html><body><h1>Hello World</h1></body></html>");

echo $dom->saveHTML();

echo"<br>";

$dom = new DOMDocument();
$dom->loadHTML("<html>
<body> <ul>
<li>1</li>
<li>2</li>
<li>3</li>
</ul> </body>
</html>
");

$items = $dom->getElementsByTagName("li");

$items->item(2)->nodeValue = "";

echo $dom->saveHTML();

echo"<br>";

session_start(); 

$_SESSION["userRole"] = "admin";

echo "Session userRole has been created.";


<?php
session_start(); 

if (isset($_SESSION["userRole"])) {
    echo "User Role is: " . $_SESSION["userRole"];
} else {
    echo "No session found.";
}

session_destroy();

?>

</body>
</html>

