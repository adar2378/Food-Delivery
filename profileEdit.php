<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Foodie</title>

<!-- Custom styles for this profile page -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

  </head>

  <body>

       <?php
include "nav.php";
?>

    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
        
    <!--profile code-->
    <div class="container">
    <div class="fb-profile">
        
        <div class="fb-profile-text">

<?php
include_once 'connect.php';
$sql = "SELECT * FROM user WHERE username = '$_SESSION[username]'" ;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
?>
            <h1><?php echo "$row[fname]"; ?>'s Profile</h1>
            <form action="editProcess.php" method="post">
            <table style="border: none; font-family:Arial;font-weight: bold">
            	<tr>
            		<td> First name:</td>
            		<td>
                        <input type="text" name="fname" value="<?php echo " $row[fname]"; ?>">
                    </td>
            	</tr>
                <tr>
                    <td> Last name:</td>
                    <td>
                        <input type="text" name="lname" value="<?php echo " $row[lname]"; ?>">
                    </td>
                </tr>
            	<tr>
            		<td> Email:</td>
            		<td>
                        <input type="text" name="email" value="<?php echo " $row[email]"; ?>">
                    </td>
            	</tr>
            	<tr>
                    <td> Phone:</td>
                    <td><input type="text" name="phone" value="<?php echo " $row[phone]"; ?>"></td>
                </tr>
                <tr>
                    <td> Address:</td>
                    <td><input type="text" name="address" value="<?php echo " $row[address]"; ?>"></td>
                </tr>
	        </table>
            <button type="submit" class="btn btn-xl btn-danger" name="update" value="update">Update</button>
        </form>
        </div>
    </div>
</div> <!-- /container -->  
	<div class ="col-md-3"></div>
    <div class="col-md-3">
    <form class="form-inline" role="form" class="pagination-right">
    <div class="form-group" align="right">
        
          <!-- <button type="submit" class="btn btn-xl btn-danger"> Edit</button> -->
      
    </form>
    </div>
</div></section>



<?php
include "footer.php";
?>

  </body>

</html>

<!-- assets -->    
    
    <!-- <script src="assets/js/bootstrap.bundle.js"></script> -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="assets/js/bootstrap.js"></script> -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/source.bootstrap.min.js"></script>
    <!-- <script src="assets/js/contact_us.js"></script> -->
    <!-- <script src="assets/js/dropdown.js"></script> -->
    <!-- <script src="assets/js/jquery.js"></script> -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- <script src="assets/js/payment.js"></script> -->
    <!-- <script src="assets/js/restaurant.js"></script> -->
    <!-- <script src="assets/js/result.js"></script> -->
    <!-- <script src="assets/js/review.js"></script> -->
    <!-- <script src="assets/js/sign_in.js"></script> -->
    <!-- <script src="assets/js/sign_up.js"></script> -->

    <!-- <link href="assets/css/account_header.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/animate.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/bootstrap.css" rel="stylesheet"> -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/source.bootstrap.min.css" rel="stylesheet">
    <!-- <link href="assets/css/bootstrap-grid.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/bootstrap-grid.min.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/bootstrap-reboot.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/bootstrap-reboot.min.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/checkout.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/check-radio.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/contact_us.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/delivery.css" rel="stylesheet"> -->
    <link href="assets/css/half-slider.css" rel="stylesheet">
    <link href="assets/css/index.css" rel="stylesheet">
    <!-- <link href="assets/css/payment.css" rel="stylesheet"> -->
    <link href="assets/css/profile.css" rel="stylesheet">
    <!-- <link href="assets/css/result.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/review.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/sign_in.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/sign_up.css" rel="stylesheet"> -->