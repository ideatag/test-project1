<?php
require('header.php');
require('functions.php');

$result = '';
$number1 = '';
$number2 = '';

if (isset($_POST['submit_calculator'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
    $result = calculate($number1, $number2, $operation);
}
?>

<form method="post" name="calculator" action="calculator.php">
    <input type="number" name="number1" placeholder="Numar 1" required value="<?php echo isset($number1) ? htmlspecialchars($number1) : ''; ?>">
    <select name="operation" required>
        <option value="+" <?php echo (isset($operation) && $operation == '+') ? 'selected' : ''; ?>>+</option>
        <option value="-" <?php echo (isset($operation) && $operation == '-') ? 'selected' : ''; ?>>-</option>
        <option value="*" <?php echo (isset($operation) && $operation == '*') ? 'selected' : ''; ?>>*</option>
        <option value="/" <?php echo (isset($operation) && $operation == '/') ? 'selected' : ''; ?>>/</option>
    </select>
    <input type="number" name="number2" placeholder="Numar 2" required value="<?php echo isset($number2) ? htmlspecialchars($number2) : ''; ?>">
    <input type="submit" name="submit_calculator" value="=">
    <input type="text" name="result" placeholder="Rezultat" readonly value="<?php echo isset($result) ? htmlspecialchars($result) : ''; ?>">
</form>

<?php
require('footer.php');
?>