<?php

include('../db/db.php');
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO user_details (user_name, password, user_type, status) VALUES ('$username', '$password', 'user', '1')";
mysqli_query($conn, $sql);















?>