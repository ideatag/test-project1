<?php
require('header.php');
require('functions.php');

$dateOfBirth = '';
$zodiacSign = '';

if (isset($_POST['data-nastere'])) {
    $dateOfBirth = $_POST['data-nastere'];
    $zodiacSign = getZodiacSign($dateOfBirth);
    var_dump(strtotime($_POST['data-nastere']));
}

?>

<form method="post" name="zodiac" action="zodiac.php">
    <p style="display:inline;">Selecteaza data nasterii:</p>
    <input type="date" name="data-nastere" placeholder="Data Nastere" required value="<?php echo isset($dateOfBirth) ? htmlspecialchars($dateOfBirth) : ''; ?>">
    <input style="display:flex;" type="submit" name="submit" value="Afiseaza zodia">
    <input style="display:flex; margin-top: 8px;" type="text" name="zodie" placeholder="Zodia" value="<?php echo isset($zodiacSign) ? htmlspecialchars($zodiacSign) : ''; ?>" readonly>
</form>

<?php
require('footer.php');
?>