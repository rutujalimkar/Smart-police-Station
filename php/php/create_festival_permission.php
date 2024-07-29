<?php
include('../db/db.php');


$police_station_name = $_POST['police_station_name'];
$name = $_POST['name'];
$permission_for = $_POST['permission_for'];
$address = $_POST['address'];
$permission_date = $_POST['permission_date'];
$description = $_POST['description'];


$sql = "INSERT INTO festival_permission (police_station_id, name, address, permission_date, permission_for, description, status) VALUES ('$police_station_name', '$name', '$address', '$permission_date', '$permission_for', '$description', '1')";
if (mysqli_query($conn, $sql)) {
	echo "1";
}
else{
	echo "0";
}



?>