<?php
if (isset($_POST['submit'])) {


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

    $sql = "INSERT INTO pagini SET 
        `name`='" . $_POST['name'] . "',
        `continut`='" . $_POST['continut'] . "',
        `data`='" . $_POST['data'] . "'
    ";
    $result = $conn->query($sql);
    echo 'Success.';
} else {
?>
    <form action="contact.php" method="post">

        <label for="fname">Name</label>
        <input type="text" id="fname" name="name" placeholder="Page name" />

        <label for="lname">Content</label>
        <input type="text" id="lname" name="continut" placeholder="Content" />

        <label for="data">Data</label>
        <input type="date" id="lname" name="data" />

        <input type="submit" value="Submit" name="submit" />

    </form>

<?php
}
?>