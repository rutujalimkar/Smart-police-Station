<?php
session_start();

if (!isset($_SESSION['police_user_id'])) {
	header('location:./');
}
?>