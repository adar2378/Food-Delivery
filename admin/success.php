<?php
require_once "connect.php";
session_start();
	$ref = $_GET['ref'];
	if ($ref==5) {
	echo "Item Successfully Sent for Delivery!";
	header("Refresh: 1; URL = index.php?adp=".$ref."");
	}

	elseif ($ref==4) {
	echo "Item Successfully Added!";
	header("Refresh: 1; URL = index.php?adp=".$ref."");
	}

	elseif ($ref==3) {
	echo "Restaurant Added Successfully!";
	header("Refresh: 1; URL = index.php?adp=".$ref."");
	}

	elseif ($ref==2) {
	echo "Restaurant Deleted Successfully!";
	header("Refresh: 1; URL = index.php?adp=".$ref."");
	}

	elseif ($ref==1) {
	echo "User Deleted Successfully!";
	header("Refresh: 1; URL = index.php?adp=".$ref."");
	}
?>