<?php
	require_once 'connect.php';
	mysql_query("DELETE FROM `hall` WHERE `hall_id` = '$_REQUEST[hall_id]'") or die(mysql_error());
	header("location:hall.php");
?>