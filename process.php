<?php
include "nav.php";
include_once 'connect.php';

if(isset($_POST['order']) != 0){
if(!empty($_POST['ordered_item'])) {
// $checked_count = count($_POST['ordered_item']);
foreach($_POST['ordered_item'] as $selected) {
$temp = explode("x", $selected);

$sl = $temp[0];
$q = $temp[1];

$sql = "SELECT * FROM menu WHERE sl = '$sl'" ;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$user=$_SESSION['username'];
$item=$row['item'];
$price=$row['price'];
$restaurant=$row['restaurant'];
$quantity=$_POST['quantity'][$q];
$image_name=$row['imagename'];

$query = 'INSERT INTO cart(username, restaurant, item, price, quantity, imagename) VALUES ("'.$user.'","'.$restaurant.'","'.$item.'","'.$price.'","'.$quantity.'","'.$image_name.'")';
mysqli_query($conn,$query);
}
header('Location: checkout.php');
}
else{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
}
?>