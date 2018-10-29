<?php
require_once "connect.php";
session_start();
	$id = $_GET['id'];
	$restaurant = $_GET['restaurant'];

	$row=mysqli_fetch_array(mysqli_query($conn,"SELECT sell FROM restaurant WHERE name='".$restaurant."'"));
	$sell=$row['sell']+$_GET['sell'];
	$date=date("Y-m-d");
	mysqli_query($conn,"UPDATE restaurant SET sell = ".$sell." WHERE name='".$restaurant."'");
	mysqli_query($conn,'INSERT INTO sells(restaurant,sell,date)  VALUES("'.$restaurant.'","'.$_GET['sell'].'","'.$date.'")');
	mysqli_query($conn,"DELETE FROM cart WHERE sl='".$id."'");
	header("location:success.php?ref=5");
?>