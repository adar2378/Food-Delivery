<!doctype html>
<html>
<head>
    <meta charset="utf-8">

    <title>Pure CSS - Custom styled radio- and checkboxes</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Titillium+Web:400,700,400italic,700italic|Open+Sans">
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/fontawesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/check-radio.css">



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


<form class="Form" action="profile.html">
    
    <h2>Billing Information</h2>
    <p>
        Shipping Address
        <br>
        
        <br><input type="text" name="zip" placeholder="Zip code">
        <br>
    
        <br><input type="text" name="rd" placeholder="Road no.">
        <br>
        <br><input type="text" name="area" placeholder="Area">
        <br>
        <br><input type="text" name="area" placeholder="Area">
        <br>
        <br><input type="text" name="flat" placeholder="flat">
        
        </textarea>
    </p>
    <div class="Form-section">
        <span class="Form-title"><label>Payment Method</label></span>
        <label class="Form-label--tick">
            <input type="radio" value="M" name="SomeRadio" class="Form-label-radio" checked>
            <span class="Form-label-text">Credit Card</span>
        </label>
        <input type="text" name="credit" placeholder="Credit card no.">
        <br>
        <label class="Form-label--tick">
            <input type="radio" value="F" name="SomeRadio" class="Form-label-radio">
            <span class="Form-label-text">Cash on Delivery</span>
        </label>
        <br>
        <label class="Form-label--tick">
            <input type="radio" value="U" name="SomeRadio" class="Form-label-radio">
            <span class="Form-label-text">Bkash</span>
        </label>
        <input type="text" name="bkash" placeholder="Bkash no.">
    </div>
        
        <div class ="col-md-9"></div>
       
        <div class="form-group col-mid-9" >
          <button type="submit" class="btn btn-xl btn-danger"> Place Order</button>
        </div>
</form>


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
    <script src="assets/js/payment.js"></script>
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
    <link href="assets/css/check-radio.css" rel="stylesheet">
    <!-- <link href="assets/css/contact_us.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/delivery.css" rel="stylesheet"> -->
    <link href="assets/css/half-slider.css" rel="stylesheet">
    <link href="assets/css/index.css" rel="stylesheet">
    <!-- <link href="assets/css/payment.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/profile.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/result.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/review.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/sign_in.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/sign_up.css" rel="stylesheet"> -->