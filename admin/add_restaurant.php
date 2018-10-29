    <?php
    if(isset($_SESSION['valid'])==True){?>

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Add a new restaurant
                    </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">

                    <form role="form" action="add_restaurant.php" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Restaurant Name</label>
                            <input name="restaurant_name" class="form-control" placeholder="Enter Restaurant Name">
                        </div>

                        <div class="form-group">
                            <label>Location (separate with a comma)</label>
                            <input name="location" class="form-control" placeholder="Enter Location(s)">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input id="uploadBtn" type="file" class="upload" name="image" accept="image/*"/>
                        </div>

                        <input type="submit" class="btn btn-default" name="btn-resadd" value="Submit">

                    </form>

                </div>
                
            </div>

    <?php
}
?>
</div>

<?php
include_once 'connect.php';

if(isset($_POST['btn-resadd']) != 0 ){

    $name = $_POST['restaurant_name'];
    $location = $_POST['location'];
    $image=addslashes(file_get_contents($_FILES['image']['tmp_name'])) ;
    $image_name=addslashes($_FILES['image']['name']) ;

    if ((strlen($name) == 0) || (strlen($location) == 0)) {
        echo '<script language="javascript">';
        echo 'alert("Please fill all the fields")';
        echo '</script>';
    }
    else {
        $query = "SELECT name FROM restaurant WHERE name='$name'";
        $result = mysqli_query($conn,$query);
        
        $count = mysqli_num_rows($result);
        
        if ($count==0) {

            $query = 'INSERT INTO restaurant(name, location, image, imagename) VALUES ("'.$name.'","'.$location.'","'.$image.'","'.$image_name.'")';

            mysqli_query($conn,$query);
            
            header("location:success.php?ref=3");
        }
        else {
            echo '<script language="javascript">';
            echo 'alert("Sorry the restaurant already exists.")';
            echo '</script>';
        }
    }
}
?>