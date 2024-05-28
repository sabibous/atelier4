<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "exo4";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST) && $_POST['state'] != "" && $_POST['country'] != "") {
    $state = $_POST['state'];
    $country = $_POST['country'];

    $sql = "SELECT city FROM cities WHERE state = '$state' AND country = '$country'";
    $result = $conn->query($sql);

    $cities = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $cities[] = $row['city'];
        }
    }

    echo json_encode($cities);
}

$conn->close();