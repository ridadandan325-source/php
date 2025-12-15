<?php
$result = "";
$num1 = "";
$num2 = "";
$operation = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'] ?? "";
    $num2 = $_POST['num2'] ?? "";
    $operation = $_POST['operation'] ?? "";
    
    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operation) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero!";
                }
                break;
            default:
                $result = "Please select an operation!";
        }
    } else {
        $result = "Please enter valid numbers!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
    <h2>Task 3: Calculator</h2>
    
    <form method="POST" action="">
        <label>Number 1:</label>
        <input type="number" name="num1" step="any" value="<?php echo htmlspecialchars($num1); ?>" required><br><br>
        
        <label>Operation:</label>
        <select name="operation" required>
            <option value="">Select Operation</option>
            <option value="+" <?php echo ($operation == '+') ? 'selected' : ''; ?>>+ (Addition)</option>
            <option value="-" <?php echo ($operation == '-') ? 'selected' : ''; ?>>- (Subtraction)</option>
            <option value="*" <?php echo ($operation == '*') ? 'selected' : ''; ?>>* (Multiplication)</option>
            <option value="/" <?php echo ($operation == '/') ? 'selected' : ''; ?>>/ (Division)</option>
        </select><br><br>
        
        <label>Number 2:</label>
        <input type="number" name="num2" step="any" value="<?php echo htmlspecialchars($num2); ?>" required><br><br>
        
        <button type="submit">Calculate</button>
    </form>
    
    <?php if ($result !== ""): ?>
        <h3>Result: <?php echo htmlspecialchars($result); ?></h3>
    <?php endif; ?>
</body>
</html>
