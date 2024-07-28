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

$sql = "SELECT * FROM pagini";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
<<<HEREDOC
    <table style="width:100%;" border="1">
        <thead>
            <th>ID</th>
            <th>Nume</th>
            <th>Continut</th>
            <th>Data</th>
        </thead>
        <tbody>
HEREDOC;
            while ($row = $result->fetch_assoc()) {
            <<<HEREDOC1
                <tr>
                    <td>$row['id']</td>
                    <td>$row['name']</td>
                    <td>$row['continut']</td>
                    <td>$row['data']</td>
                </tr>
            HEREDOC1;
            }
            <<<HEREDOC2
        </tbody>
    </table>
    HEREDOC2;
} else {
    echo "0 results";
}
$conn->close();
