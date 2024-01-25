<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);

    if($conn->connect_error){
        die( "Connection failed: " . $conn->connect_error);
    }
    $sql = "USE ajax";
    if($conn->query($sql) === TRUE){

    }else{
        die("Cannot execute query");
    }

    $fctIndex =  $_GET['g'];
    if($fctIndex == 1){

    $sql = "SELECT id FROM laptops";
    $result = $conn->query($sql);
    $ids = "";
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $ids .= $row["id"] . ",";
        }
    }

    echo $ids;
    }
    if($fctIndex == 2){
        $id = $_GET['id'];

        $sql = "SELECT name, procesor, memory, hdd, graphicsCard FROM laptops WHERE id = " . $id;
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $laptop = $row['name'] . "," . $row['procesor'] . "," . $row['memory'] . "," . $row['hdd'] . "," . $row['graphicsCard'];

        echo $laptop;

    }
    if($fctIndex == 3){
        $id = $_GET['id'];
        $name = $_GET['name'];
        $procesor = $_GET['procesor'];
        $memory = $_GET['memory'];
        $hdd = $_GET['hdd'];
        $graphicsCard = $_GET['graphicsCard'];

        $sql = "UPDATE laptops SET name = '" . $name ."',procesor = '" . $procesor ."',memory='" . $memory . "',hdd='" . $hdd . "',graphicsCard='" . $graphicsCard ."' WHERE id=" . $id;
        $result = $conn->query($sql);

    }
    $conn->close();

?>
