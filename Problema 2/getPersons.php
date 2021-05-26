<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "USE ajax";
if($conn->query($sql) === TRUE){

}
else{
    die("Cannot execute query");
}

$sql = "SELECT Nume, Prenume, Telefon, Email FROM persons";
$result = $conn->query($sql);
$pers = "";
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $pers .= $row["Nume"] . ", " . $row["Prenume"]
            . ", " . $row["Telefon"] . ", " . $row["Email"] .";";

    }
}

echo $pers;

?>