<?php
require("mysql.inc.php");
$sql = "SELECT `id`,`name` FROM pagini";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="width:100%; border:1px solid black; margin-bottom:40px;">
        <ul>
            <li style="display:inline; margin-right: 8px;"><a href="zodiac.php">Zodiac</a></li>
            <li style="display:inline; margin-right: 8px;"><a href="calculator.php">Calculator</a></li>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<li style="display:inline; margin-right: 8px;">
                        <a href="pagina.php?id=' . $row['id'] . '">' . $row['name'] . '</a>
                        </li>';
                }
            }
            ?>
        </ul>
    </div>