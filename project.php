<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$name = "rida";
$age = 22;
echo "my name is $name and iam $age years old" . "<br>";

$age = 30;  

if ($age > 18 && $age < 60) {
    echo "Age is between 18 and 60";
} 
else {
    echo "Age is NOT between 18 and 60";
}
echo  "<br>";

//********************* 
$role = "admin";

if ($role == "admin" || $role == "editor") {
    echo "You have access";
}
 else {
    echo "Access denied";
}
echo  "<br>";


 // *******************
$user = array(
    ["rida",22,"jordan"],
    ["abd",22,"syira"],
    ["kiswani",23,"libya"]
);
echo $user[1][2]; 
echo  "<br>";
//******************
$fullName = "Rida dandan";

echo strlen($fullName);

echo "<br>";

//******************* 

echo "<table border='1' cellpadding='10'>";

echo "<tr>";
echo "<td>Salary of Mr. A is</td>";
echo "<td>1000$</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Salary of Mr. B is</td>";
echo "<td>1200$</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Salary of Mr. C is</td>";
echo "<td>1400$</td>";
echo "</tr>";

echo "</table>";

echo "<br>";


$filename = "project.php";

if (file_exists($filename)) {

    $last = filemtime($filename);
    echo "Last modified: " . date("l, jS F, Y, h:ia", $last);
echo "project.php";
} 
else {
    echo "File not found!";
}




echo"<br>";


$filename = "project.php"; 

if (file_exists($filename)) {

    $count = 0;
    $file = fopen($filename, "r");

    while (!feof($file)) {
        $line = fgets($file);
        if ($line !== false) {
            $count++;
        }
    }

    fclose($file);

    echo "Number of lines = " . $count;

} else {
    echo "File not found!";
}

echo"<br>";
//*********** 









// برجعلو عشان احط ستايل 
$colors = ["red", "green", "white"];

echo "The memory of that scene for me is like a frame of film forever frozen at that moment: 
 the $colors[0] carpet,
 the $colors[1] lawn, 
 the $colors[2] house, 
 the leaden sky. 
The new president and his first lady. - Richard M. Nixon";











$colors = array('white', 'green', 'red');

echo "<ul>";

foreach ($colors as $color) {
    echo "<li>$color</li>";
}

echo "</ul>";



$cities = array(
    "Italy"=>"Rome",
    "Luxembourg"=>"Luxembourg",
    "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen",
    "Finland"=>"Helsinki",
    "France" => "Paris",
    "Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam",
    "Portugal"=>"Lisbon",
    "Spain"=>"Madrid"
);

//asort ترتيب ابجدي 
asort($cities);

foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital<br>";
}


//**************** 

$color = array (4 => 'white', 6 => 'green', 11 => 'red');

echo array_shift($color);


$arr = array(1, 2, 3, 4, 5);

$location = 3; 
$newItem = "$";

array_splice($arr, $location, 0, $newItem); 

foreach ($arr as $value) {
    echo $value . " ";
}

//***************************************************************************
echo "<br>";

$number = 10; 

if ($number > 0) {
    echo "The number is positive.";
} elseif ($number < 0) {
    echo "The number is negative.";
} else {
    echo "The number is zero.";
}

echo"<br>";

$fruit = "apple";   

switch ($fruit) {
    case "apple":
        echo "This is an apple.";
        break;

    case "banana":
        echo "This is a banana.";
        break;

    case "mango":
        echo "This is a mango.";
        break;

    default:
        echo "Unknown fruit.";
        break;
}

echo"<br>";

for ($i = 1; $i <= 10; $i++) {
    echo ($i * 2) . "<br>";
}

echo"<br>";

$movies = [
    "x",
    "y",
    "z",
    "c",
    "p"
];

foreach ($movies as $movie) {
    echo $movie . "<br>";
}

echo"<br>";

for ($i = 1; $i <= 10; $i++) {

    
    if ($i == 5) {
        continue;
    }

    if ($i == 8) {
        break;
    }

    echo $i . "<br>";
}

echo"<br>";
//slid 2 Q6

$fruits = array(
    "d" => "lemon",
    "a" => "orange",
    "b" => "banana",
    "c" => "apple"
);

ksort($fruits);

foreach ($fruits as $key => $value) {
    echo "$key = $value<br>";
}


echo"<br>";
//Q7


$temps = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 
          76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
          74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$average = array_sum($temps) / count($temps);
echo "Average Temperature is: " . round($average, 1) . "<br><br>";

sort($temps);

$lowest = array_slice($temps, 0, 5);

$highest = array_slice($temps, -5);

echo "List of five lowest temperatures: " . implode(", ", $lowest) . "<br>";
echo "List of five highest temperatures: " . implode(", ", $highest) . "<br>";

echo"<br>";
//Q8


$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$result = array_merge($array1, $array2);

print_r($result);

echo"<br>";
//Q9


function toUpperCaseArray($array) {
    return array_map('strtoupper', $array);
}

$colors = array("red", "blue", "white", "yellow");

$result = toUpperCaseArray($colors);

print_r($result);

//Q10
echo"<br>";
$colors = array("RED", "BLUE", "WHITE", "YELLOW");

foreach ($colors as $color) {
    echo strtolower($color) . "<br>";
}

//Q11 

for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0) {
        echo $i . ",";
    }
}

echo"<br>";

//q12 

$words = array("abcd", "abc", "de", "hjjj", "g", "wer");

$lengths = array_map('strlen', $words);   

$shortest = min($lengths);
$longest  = max($lengths);

echo "The shortest array length is $shortest. The longest array length is $longest.";



echo"<br>";
//q13 

$min = 11;
$max = 20;

$rangeArray = range($min, $max);

shuffle($rangeArray);

for ($i = 0; $i < 10; $i++) {
    echo $rangeArray[$i] . " ";
}


echo"<br>";
//q14


$array1 = array(2, 0, 10, 12, 6);

$filtered = array_filter($array1, function($num){
    return $num != 0;
});

$lowest = min($filtered);

echo $lowest;

echo"<br>";

//slide 3 
//q1


$str = "hello world from php";

echo "Original String: $str<br><br>";

echo "Uppercase: " . strtoupper($str) . "<br>";

echo "Lowercase: " . strtolower($str) . "<br>";

echo "First letter uppercase: " . ucfirst($str) . "<br>";

echo "Each word capitalized: " . ucwords($str) . "<br>";



echo"<br>";

//q2


$time = "085119";

$hour   = substr($time, 0, 2);
$minute = substr($time, 2, 2);
$second = substr($time, 4, 2);

echo "$hour:$minute:$second";

echo"<br>";
//*********************** 

//q3
$sentence = "I am a full stack developer at orange coding academy";
$word     = "Orange";

if (stripos($sentence, $word) !== false) {
    echo "Word Found!";
} else {
    echo "Word Not Found!";
}

echo"<br>";
//********************* 

//Q4

$url = "www.orange.com/project.php";

$filename = basename($url);

echo $filename;

echo"<br>";
//********************** 


$email = "info@orange.com";
echo strstr($email, '@', true) . "<br><br>";

$str = "info@orange.com";
echo substr($str, -3) . "<br><br>";

$chars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
echo substr(str_shuffle($chars), 0, 10) . "<br><br>";

$sentence = "That new trainee is so genius.";
$words = explode(" ", $sentence);
$words[0] = "Our";
echo implode(" ", $words) . "<br><br>";

$str1 = "dragonball";
$str2 = "dragonboll";
$len = min(strlen($str1), strlen($str2));
for ($i = 0; $i < $len; $i++) {
    if ($str1[$i] !== $str2[$i]) {
        echo "First difference between two strings at position $i: \"$str1[$i]\" vs \"$str2[$i]\"";
        break;
    }
}
echo "<br><br>";

$str = "Twinkle, twinkle, little star.";
$arr = explode(" ", $str);
var_dump($arr);
echo "<br><br>";

$char = 'z';
echo ($char == 'z') ? 'a' : chr(ord($char) + 1);
echo "<br><br>";

$str = "The brown fox";
echo str_replace("The ", "The quick ", $str) . "<br><br>";

$str = "The quick brown fox";
echo explode(" ", $str)[0] . "<br><br>";

echo str_replace("0", "", "0000657022.24") . "<br><br>";

$str = "The quick brown fox jumps over the lazy dog";
echo str_replace("fox ", "", $str) . "<br><br>";

$str = "The quick brown fox jumps over the lazy dog---";
echo rtrim($str, "-") . "<br><br>";

$str = '\"\1+2/3*2:2-3/4*3';
echo trim(preg_replace('/[^0-9]+/', ' ', $str)) . "<br><br>";

$str = "The quick brown fox jumps over the lazy dog";
echo implode(" ", array_slice(explode(" ", $str), 0, 5)) . "<br><br>";

echo str_replace(",", "", "2,543.12") . "<br><br>";


foreach (range('a', 'z') as $ch) echo $ch . " ";




?>


</body>
</html>