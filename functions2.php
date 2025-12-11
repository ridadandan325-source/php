<?php

function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    
    return true;
}

$num1 = 3;
if (isPrime($num1)) {
    echo "$num1 is a prime number";
} else {
    echo "$num1 is not a prime number";
}

echo "<br>";
echo "<br>";

function reverseString($str) {
    return strrev($str);
}

$str2 = "remove";
echo reverseString($str2);

echo "<br>";
echo "<br>";

function isAllLowerCase($str) {
    return $str === strtolower($str) && $str !== strtoupper($str);
}

$str3 = "remove";
if (isAllLowerCase($str3)) {
    echo "Your String is Ok";
} else {
    echo "Your String contains uppercase characters";
}

echo "<br>";
echo "<br>";

function swap(&$x, &$y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}

$x = 12;
$y = 10;
echo "Before swap: x = $x, y = $y<br>";
swap($x, $y);
echo "After swap: y = $y, x = $x";

echo "<br>";
echo "<br>";

$x2 = 12;
$y2 = 10;
echo "Before swap: x = $x2, y = $y2<br>";
swap($x2, $y2);
echo "After swap: y = $y2, x = $x2";

echo "<br>";
echo "<br>";

function isArmstrong($number) {
    $sum = 0;
    $temp = $number;
    $digits = strlen((string)$number);
    
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $digits);
        $temp = (int)($temp / 10);
    }
    
    return $sum === $number;
}

$num6 = 407;
if (isArmstrong($num6)) {
    echo "$num6 is Armstrong Number";
} else {
    echo "$num6 is not an Armstrong Number";
}

echo "<br>";
echo "<br>";

function isPalindrome($str) {
    $cleaned = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($str));
    $reversed = strrev($cleaned);
    
    return $cleaned === $reversed;
}

$str7 = "Eva, can I see bees in a cave?";
if (isPalindrome($str7)) {
    echo "Yes it is a palindrome";
} else {
    echo "No, it is not a palindrome";
}

echo "<br>";
echo "<br>";

function removeDuplicates($array) {
    return array_values(array_unique($array));
}

$array1 = array(2, 4, 7, 4, 8, 4);
echo "Original array: ";
print_r($array1);
echo "<br>";

$array1 = removeDuplicates($array1);
echo "After removing duplicates: ";
print_r($array1);

?>

