<?php
// Question 1
$numbers = range(1, 10);
echo implode('-', $numbers) . "<br><br>";

// Question 2
$total = 0;
for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}
echo "Total from 0 to 30 = {$total}<br><br>";

// Question 3
echo "<pre>";
for ($row = 1; $row <= 5; $row++) {
    for ($col = 1; $col <= 5; $col++) {
        $char = chr(64 + $row); // 1->A, 2->B, ...
        if ($row < $col) {
            $char = chr(65 + $col - 1);
        }
        // Adjust to match expected pattern
        $outputChar = match (true) {
            $row === 1 => 'A',
            $row === 2 && $col <= 3 => 'A',
            $row === 2 && $col > 3 => 'B',
            $row === 3 && $col <= 2 => 'A',
            $row === 3 && $col > 2 => 'C',
            $row === 4 && $col === 1 => 'A',
            $row === 4 && $col > 1 => 'D',
            $row === 5 => 'E',
            default => $char,
        };
        echo $outputChar . ' ';
    }
    echo PHP_EOL;
}
echo "</pre><br>";

// Question 4
echo "<pre>";
for ($row = 1; $row <= 5; $row++) {
    for ($col = 1; $col <= 5; $col++) {
        $value = match (true) {
            $row === 1 => 1,
            $row === 2 && $col <= 3 => 1,
            $row === 2 && $col > 3 => 2,
            $row === 3 && $col <= 2 => 1,
            $row === 3 && $col > 2 => 3,
            $row === 4 && $col === 1 => 1,
            $row === 4 && $col > 1 => 4,
            $row === 5 => 5,
            default => 0,
        };
        echo $value . ' ';
    }
    echo PHP_EOL;
}
echo "</pre><br>";

// Question 5
echo "<pre>";
for ($row = 1; $row <= 5; $row++) {
    for ($col = 1; $col <= 5; $col++) {
        echo ($row === $col) ? $row . ' ' : "0 ";
    }
    echo PHP_EOL;
}
echo "</pre><br>";

// Question 6
$n = 5;
$factorial = 1;
for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i;
}
echo "Factorial of {$n} = {$factorial}<br><br>";

// Question 7
echo "<strong>Fibonacci sequence:</strong><br>";
$fibCount = 10; // first 10 numbers
$fib = [];
for ($i = 0; $i < $fibCount; $i++) {
    if ($i === 0) {
        $fib[] = 0;
    } elseif ($i === 1) {
        $fib[] = 1;
    } else {
        $fib[] = $fib[$i - 1] + $fib[$i - 2];
    }
}
echo implode(', ', $fib) . "<br><br>";

// Question 8
$text = "Orange Coding Academy";
$cCount = substr_count(strtolower($text), 'c');
echo "Number of 'c' or 'C' in \"{$text}\" = {$cCount}<br><br>";

// Question 9
echo "<strong>Multiplication Table 1-6 x 1-5</strong><br>";
echo '<table border="1" cellpadding="3px" cellspacing="0px">';
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo "<tr><td>{$i} * {$j} = " . ($i * $j) . "</td></tr>";
    }
}
echo "</table><br>";

// Question 10
echo "<strong>Q10: FizzBuzz 1 to 50</strong><br>";
$fizzBuzz = [];
for ($i = 1; $i <= 50; $i++) {
    if ($i % 15 === 0) {
        $fizzBuzz[] = "FizzBuzz";
    } elseif ($i % 3 === 0) {
        $fizzBuzz[] = "Fizz";
    } elseif ($i % 5 === 0) {
        $fizzBuzz[] = "Buzz";
    } else {
        $fizzBuzz[] = $i;
    }
}
echo implode(' ', $fizzBuzz) . "<br><br>";

// Question 11
echo "<strong>Q11: Floyd Triangle (first 5 lines)</strong><br>";
$lines = 5;
$num = 1;
echo "<pre>";
for ($row = 1; $row <= $lines; $row++) {
    for ($col = 1; $col <= $row; $col++) {
        echo $num++ . ' ';
    }
    echo PHP_EOL;
}
echo "</pre><br>";

// Question 12
echo "<strong>Q12:</strong><br>";
$height = 5;
echo "<pre>";
// Top half including middle
for ($row = 1; $row <= $height; $row++) {
    echo str_repeat(' ', $height - $row);
    for ($col = 0; $col < $row; $col++) {
        echo chr(65 + $col) . ' ';
    }
    echo PHP_EOL;
}
// Bottom half
for ($row = $height - 1; $row >= 1; $row--) {
    echo str_repeat(' ', $height - $row);
    for ($col = 0; $col < $row; $col++) {
        echo chr(65 + $col) . ' ';
    }
    echo PHP_EOL;
}
echo "</pre>";
?>

