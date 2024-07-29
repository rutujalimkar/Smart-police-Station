<?php
include('../db/db.php');
$fir_id =  $_POST['fir_id'];


$sql_chk = "SELECT * FROM fir WHERE fir_id  = '$fir_id'";
$result_chk = mysqli_query($conn, $sql_chk);
if (mysqli_num_rows($result_chk) > 0) {
  foreach ($result_chk as $row) {
  	if ($row['status'] == '1') {
  		
  		$sql_update = "UPDATE fir SET status = '0' WHERE fir_id = '$fir_id'";
  		mysqli_query($conn, $sql_update);


  	}
  	else{
  		$sql_update = "UPDATE fir SET status = '1' WHERE fir_id = '$fir_id'";
  		mysqli_query($conn, $sql_update);

  	}
  }
}




?>