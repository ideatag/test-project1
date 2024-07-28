<?php
require("header.php");
if (isset($_GET['id']) && $_GET['id'] > 0) {
    require("mysql.inc.php");

    $sql = "SELECT * FROM pagini WHERE id='" . $_GET['id'] . "'";
    $result = $conn->query($sql);
    // pentru ca astept un singur rand nu mai fac while
    $row = $result->fetch_assoc();

    echo '<h1>' . $row['name'] . '</h1>';
    echo '<div>' . $row['continut'] . '</div>';
    echo '<div><small>' . $row['data'] . '</small></div>';
} else {
    echo 'Hai ma lasi...???';
}

require("footer.php");
