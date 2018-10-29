<?php
include_once 'connect.php';

if(isset($_POST['btn-adminreg']) != 0 ){

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ((strlen($fullname) == 0) || (strlen($username) == 0) || (strlen($password) == 0)) {
        echo '<script language="javascript">';
        echo 'alert("Please fill all the fields")';
        echo '</script>';
    }
    else {
        $query = "SELECT username FROM admin WHERE username='$username'";
        $result = mysqli_query($conn,$query);
        
        $count = mysqli_num_rows($result); // if username not found then proceed
        
        if ($count==0) {

            $query = 'INSERT INTO admin(fullname, username, password) VALUES ("'.$fullname.'","'.$username.'","'.$password.'")';
            mysqli_query($conn,$query);

            echo '<script language="javascript">';
            echo 'alert("Registration Successful!")';
            echo '</script>';
            header('Refresh: 0; URL = index.php');
        }

        else {
            echo '<script language="javascript">';
            echo 'alert("Sorry username already in use :( Please try a different username.")';
            echo '</script>';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register as admin</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/sb-admin.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <div id="wrapper">

            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Admin</a>
                </div>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">


                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Register as an admin
                        </h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" action="adminreg.php" method="POST">

                            <div class="form-group">
                                <label>Full Name</label>
                                <input name="fullname" class="form-control" placeholder="Enter Full Name">
                            </div>

                            <div class="form-group">
                                <label>Username</label>
                                <input name="username" class="form-control" placeholder="Enter Username">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" type="password" class="form-control" placeholder="Enter Phone Number">
                            </div>

                            <input type="submit" class="btn btn-default" name="btn-adminreg" value="Submit">

                        </form>

                    </div>
                    
                </div>

            </div>

        </div>

    </div>

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>
