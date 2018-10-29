<?php
require_once "connect.php";
session_start();
	$id = $_GET['id'];
	mysqli_query($conn,"DELETE FROM restaurant WHERE sl='".$id."'");
	header("location:success.php?ref=2");
?>