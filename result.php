<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Foodie</title>

  </head>

  <body>

<?php
include "nav.php";
?>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('images/c_image_01.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3></h3>
              <p></p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/c_image_02.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3></h3>
              <p></p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/c_image_03.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3></h3>
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </header>


    

        <!--Search Button-->
    <br>
    
    <div class ="col-md-3"></div>
    <div class="col-md-">
    <?php
include "search.php";
?>
    </div>
    <br>

    <div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title">Search Results</h1>
        </div>

        <br/>


          <?php
                if(isset($_POST['search']) != 0 ){
                  $location = $_POST['area'];

                  if ($location==NULL) {
                  }
                  else{
                    $search = mysqli_real_escape_string($conn, trim($location));
                    $sql = "SELECT * FROM restaurant WHERE location LIKE '%$search%'";
                    $fetch = mysqli_query($conn,$sql);
                    $restaurant = mysqli_fetch_assoc($fetch);
                    if ($restaurant!=0) {
                      $sql = "SELECT * FROM restaurant WHERE location LIKE '%$search%'";
                      $result = mysqli_query($conn,$sql);
                      $response = array();
                      while($row = mysqli_fetch_array($result))
                      {
                        echo '<img src="data:images/jpeg;base64,'.base64_encode($row['image']).'" height="100" width="100" />';
                        echo "<br><a href=\"restaurant.php?id=$row[0]\">";
                        
                        ?>
                      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                        <?php
                      echo "<p>".$row['name']."</p>";
                      ?>
                      </div>  </a>
                      <?php
                      }
                    }
                    else{
                      echo "Nothing found!";
                    }
                  }                  
                }
              ?>  
            
            
            <!-- <a href="kfc_menu.html">
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="images/kfc.png" height="200" width="200">
            </div>  </a>



            <a href="takeout_menu.html">
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="images/takeout.png" height="200" width="200" >
            </div>
              </a>


            <a href="pizzahut_menu.html">
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="images/pizzahut.png" height="200" width="200">
            </div>
          </a> -->

            
        </div>
    </div>





    <!-- Pagination-->
    
    <!-- <div class="container col-md-5" style="margin-left: 900px">
      <ul class="pagination">
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      </ul>
    </div> -->

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
<!-- <link href="assets/css/profile.css" rel="stylesheet"> -->
<!-- <link href="assets/css/result.css" rel="stylesheet"> -->
<!-- <link href="assets/css/review.css" rel="stylesheet"> -->
<!-- <link href="assets/css/sign_in.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/sign_up.css" rel="stylesheet"> -->