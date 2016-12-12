<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dname = "Ranking";

$connect = new mysqli($servername, $username, $password, $dname);

if ($connect -> connect_error){
	die("Connection failed:" . $connect -> connect_error);
}

$sql = "SELECT * FROM `Rankings`";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<i><h3>Ranking:</h3></i>" . $row ["Ranking"]. "  " . "<br><img src=" . $row["Picture"] . "> <br><h4>Name:</h4>" . $row["Name"] . "<br><h4>Location:</h4>" . $row["Location"] ."<br>";
    }
} else {
    echo "0 results";
}
$connect->close();
?>
<html>
<style>
img{
	width: 75%;
	height: 5%;
	border-radius: 10%;
	border: 2px red solid;
}
h3{
	color: blue;
}

</style>