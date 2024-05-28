<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "exo4";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST) && $_POST['country'] != "") {
    $country = $_POST['country'];

    $sql = "SELECT DISTINCT state FROM states WHERE country = '$country'";
    $result = $conn->query($sql);

    $states = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $states[] = $row['state'];
        }
    }

    echo json_encode($states);
}

$conn->close();