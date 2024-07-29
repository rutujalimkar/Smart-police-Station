<?php
include('../db/db.php');
echo $police_station_name = $_POST['police_station_name'];
$victim_name = $_POST['vicitim_name'];
$complaint_type = $_POST['complaint_type'];
$description = $_POST['description'];
$complaint_against_person = $_POST['complaint_against_person'];
$address = $_POST['address'];



$sql = "INSERT INTO fir(police_station_id, victim_name, compaint_type, description, compaint_person_name, address, status) VALUES ('$police_station_name', '$victim_name', '$complaint_type', '$description', '$complaint_against_person', '$address', '0')";
if (mysqli_query($conn, $sql)) {
	echo "1";
}
else{
	echo "0";
}


?>