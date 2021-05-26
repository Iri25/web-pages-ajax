<?php

$servername = "localhost";
$username = "root";
$password = "";

$q = "";

$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully\n";
$q .= "Connected successfully\n";
$sql = "USE ajax";

if ($conn->query($sql) === TRUE) {
    $q .= "Database changed\n";
    //echo "Database used\n";
} else {
    //echo "Error using db: " . $conn->error;
    $q .= "Error using db\n";
}

if($_GET['g']==0) {

    $sql = "SELECT startCity FROM trains";
    $result = $conn->query($sql);
    $start = "";
    $stop = "";

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $start .= $row["startCity"] . ",";

        }
    } else {
        echo "0 rows";
    }

    $sql = "SELECT stopCity FROM trains";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $stop .= $row["stopCity"] . ",";
        }
    } else {
        echo "0 rows";
    }
    $cities = $start . ";" . $stop;

}
else{
    $stop = "";
    $city = $_GET['city'];
    $sql = "SELECT stopCity FROM trains WHERE startCity = '" . $city . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $stop .= $row["stopCity"] . ",";
        }
    } else {
        echo "0 rows";
    }
    $cities = $stop;

}

echo $cities;
$conn->close();
?>