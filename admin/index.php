<?php
session_start();
include_once 'connect.php';
if(isset($_POST['btn-login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $type = "admin";
    $query = "SELECT * FROM admin where username = '$username' ";
    $result = mysqli_query($conn,$query);

    $row = mysqli_fetch_assoc($result);

    $db_username = $row['username'];
    $db_password = $row['password'];

    if ($username === $db_username && $password === $db_password)
    {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = $username;
        $_SESSION['type'] = $type;
        header("location:index.php?adp=0");

    }
    
    else
    {
        echo '<script language="javascript">';
        echo 'alert("Invalid username or password!")';
        echo '</script>';

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

    <title>Admin Panel</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/sb-admin.css" rel="stylesheet">

    <link href="css/plugins/morris.css" rel="stylesheet">

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
                    <a class="navbar-brand" href="?adp=0">Admin</a>
                </div>
                <?php
                if(isset($_SESSION['valid'])==True && ($_SESSION['type'])=="admin"){            
                    echo "<ul class=\"nav navbar-right top-nav\">
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> ".$_SESSION['username']." <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"#\"><i class=\"fa fa-fw fa-user\"></i> Profile</a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"logout.php\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>";

            }
            ?>

            <?php
            if(isset($_SESSION['valid'])==True && ($_SESSION['type'])=="admin"){?>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="?adp=0"><i class="fa fa-fw fa-dashboard"></i> Welcome</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Manage <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="?adp=1"><i class="fa fa-fw fa-table"></i> View Users</a>
                            </li>
                            <li>
                                <a href="?adp=2"><i class="fa fa-fw fa-table"></i> View Restaurant</a>
                            </li>
                            <li>
                                <a href="?adp=3"><i class="fa fa-fw fa-edit"></i> Add Restaurant</a>
                            </li>
                            <li>
                                <a href="?adp=4"><i class="fa fa-fw fa-edit"></i> Add Menu Item</a>
                            </li>
                            <li>
                                <a href="?adp=5"><i class="fa fa-fw fa-edit"></i> Delivery</a>
                            </li>
                            <li>
                                <a href="?adp=6"><i class="fa fa-fw fa-edit"></i> View Sells</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <?php
        }
        ?>
    </nav>

<div id="page-wrapper">
    <?php
    if(isset($_SESSION['valid'])==True && ($_SESSION['type'])=="admin"){
    $page = $_GET['adp'];

    if ($page=='1') {
        include "viewuser.php";
    }
    elseif ($page=='2') {
        include "viewRestaurant.php";
    }
    elseif ($page=='3') {
        include "add_restaurant.php";
    }
    elseif ($page=='4') {
        include "add_menu_item.php";
    }
    elseif ($page=='5') {
        include "delivery.php";
    }
    elseif ($page=='6') {
        include "sells.php";
    }

    else{
        echo "<div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">
                        Welcome
                    </h1>
                </div>
            </div>
        </div>";
    }

}

else{
    ?>

        <div class="container-fluid">


            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Sign in
                    </h1>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6">

                    <form role="form" action="index.php" method="POST">

                        <div class="form-group">
                            <label>Username</label>
                            <input name="username" class="form-control" placeholder="Enter Username">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="password" class="form-control" placeholder="Enter Password">
                        </div>

                        <input type="submit" class="btn btn-default" name="btn-login" value="Login">

                    </form>

                </div>

            </div>

        </div>
    <?php
}
?>
</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
