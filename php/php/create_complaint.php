<?php
include('../db/db.php');


$sql = "INSERT INTO complaint (f_name, m_name, l_name, your_address, c_f_name, c_m_name, c_l_name, c_address, complaint, your_mobile, status) VALUES ('".$_POST['f_name']."', '".$_POST['m_name']."', '".$_POST['l_name']."', '".$_POST['your_address']."', '".$_POST['c_f_name']."', '".$_POST['c_m_name']."', '".$_POST['c_l_name']."', '".$_POST['c_address']."', '".$_POST['complaint']."', '".$_POST['your_mobile']."', '0')";

mysqli_query($conn, $sql);
 echo $last_id = $conn->insert_id;


?> 