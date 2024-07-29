<?php

include('../db/db.php');

$police_station_id = $_POST['police_Station_name'];
$name2 = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$skine_tone = $_POST['skine_tone'];
$height = $_POST['height'];
$body_type = $_POST['body_type'];
$wearing = $_POST['wearing'];
$missing_data = $_POST['missing_data'];
    

$name = mysqli_real_escape_string($conn, $_FILES['file']['name']);
  $target_dir = "../img/missing/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);




$sql = "INSERT INTO missing_person (police_Station_name, name, age, gender, skine_tone, height, body_type, wearing, missing_data, photo, status) VALUES ('$police_station_id', '$name2', '$age', '$gender', '$skine_tone', '$height', '$body_type', '$wearing', '$missing_data', '".$name."', '1')";
mysqli_query($conn, $sql);

  move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);


?>