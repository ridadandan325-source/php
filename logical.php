<?php

$year = 2013;
if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "This year is a leap year<br>";
} else {
    echo "This year is not a leap year<br>";
}

echo"<br>";
$temperature = 27;
if ($temperature < 20) {
    echo "It is wintertime!<br>";
} else {
    echo "It is summertime!<br>";
}

echo"<br>";
$firstInteger = 2;
$secondInteger = 2;
$sum = $firstInteger + $secondInteger;
if ($firstInteger == $secondInteger) {
    echo "($firstInteger + $secondInteger) * 3 = " . ($sum * 3) . "<br>";
} else {
    echo "$firstInteger + $secondInteger = $sum<br>";
}

echo"<br>";
$firstInteger = 10;
$secondInteger = 10;
$sum = $firstInteger + $secondInteger;
if ($sum == 30) {
    echo $sum . "<br>";
} else {
    echo "false<br>";
}

echo"<br>";
$number = 20;
if ($number > 0 && $number % 3 == 0) {
    echo "true<br>";
} else {
    echo "false<br>";
}

echo"<br>";
$number = 50;
if ($number >= 20 && $number <= 50) {
    echo "true<br>";
} else {
    echo "false<br>";
}

echo"<br>";
$num1 = 1;
$num2 = 5;
$num3 = 9;
if ($num1 >= $num2 && $num1 >= $num3) {
    echo $num1 . "<br>";
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    echo $num2 . "<br>";
} else {
    echo $num3 . "<br>";
}

echo"<br>";

$units = 100;
$bill = 0;
if ($units <= 50) {
    $bill = $units * 2.50;
} elseif ($units <= 150) {
    $bill = (50 * 2.50) + (($units - 50) * 5.00);
} elseif ($units <= 250) {
    $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
} else {
    $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
}
echo number_format($bill, 2) . " JOD<br>";

echo"<br>"; 

$num1 = 10;
$num2 = 5;
$operation = '+';
switch ($operation) {
    case '+':
        echo $num1 + $num2 . "<br>";
        break;
    case '-':
        echo $num1 - $num2 . "<br>";
        break;
    case '*':
        echo $num1 * $num2 . "<br>";
        break;
    case '/':
        if ($num2 != 0) {
            echo $num1 / $num2 . "<br>";
        } else {
            echo "Error: Division by zero<br>";
        }
        break;
    default:
        echo "Invalid operation<br>";
}

echo"<br>";
$age = 15;
if ($age >= 18) {
    echo "is eligible to vote<br>";
} else {
    echo "is no eligible to vote<br>";
}

echo"<br>";

$number = -60;
if ($number > 0) {
    echo "Positive<br>";
} elseif ($number < 0) {
    echo "Negative<br>";
} else {
    echo "Zero<br>";
}

echo"<br>";
$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
$average = array_sum($scores) / count($scores);
if ($average < 60) {
    echo "F<br>";
} elseif ($average < 70) {
    echo "D<br>";
} elseif ($average < 80) {
    echo "C<br>";
} elseif ($average < 90) {
    echo "B<br>";
} else {
    echo "A<br>";
}
?>
