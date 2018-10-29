<?php
include_once 'connect.php';

  if(isset($_POST['submit_reg']) != 0 ){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $image=addslashes(file_get_contents($_FILES['image']['tmp_name'])) ;
    $image_name=addslashes($_FILES['image']['name']) ;

    if ((strlen($fname) == 0) || (strlen($lname) == 0) || (strlen($address) == 0) || (strlen($email) == 0) || (strlen($phone) == 0) || (strlen($username) == 0) || (strlen($password) == 0)) {
      echo '<script language="javascript">';
      echo 'alert("Please fill all the fields")';
      echo '</script>';
    }

    else {
  // check username exist or not
    $query = "SELECT username FROM user WHERE username='$username'";
    $result = mysqli_query($conn,$query);
    
    $count = mysqli_num_rows($result);
    
    if ($count==0) {

      $query = 'INSERT INTO user(fname, lname, address, email, phone, username, password, image, imagename) VALUES ("'.$fname.'","'.$lname.'","'.$address.'","'.$email.'","'.$phone.'","'.$username.'","'.$password.'","'.$image.'","'.$image_name.'")';

      mysqli_query($conn,$query);
      
      echo "Registration Successful!";
      header('Refresh: 2; URL = sign_in.php');
    }
    else {
      echo "Sorry username already in use :( Please try a different username.";
      header('Refresh: 2; URL = sign_up.php');
    }
  }

  }
?>