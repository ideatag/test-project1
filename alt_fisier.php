<?php

// VERSIUNEA 1 este sa dai echo sau print. Eu folosesc echo

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "razvan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `id`,`name`,`data` FROM pagini";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo '<table style="width:100%;" border="1">
    <thead>
        <th>ID</th>
        <th>Nume</th>
        <th>Data</th>
    </thead>
    <tbody>
    ';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>
            <td>' . $row['id'] . '</td>
            <td>' . $row['name'] . '</td>
            <td>' . $row['data'] . '</td>
        </tr>';
    }
    echo '</tbody>
    </table>';
} else {
    echo "0 results";
}
$conn->close();
