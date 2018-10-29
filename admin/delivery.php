<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Delivery
                    </h1>

                </div>
            </div>

            <?php
            if(isset($_SESSION['valid'])==True){?>
            <div class="row">

                <div class="col-lg-6" style="width: 100%">
                    <h2>Delivery Items</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>Item</th>
                                    <th>Restaurant</th>
                                    <th>Price</th>
                                    <th>Customer</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $sql = 'SELECT * FROM cart WHERE delivery = 1';

                                $result = mysqli_query($conn,$sql);

                                $response = array();
                                $count = 1;

                                while($row = mysqli_fetch_array($result))
                                {
                                    echo "<tr>
                                    <td>".$count."</td>
                                    <td>".$row[3]."</td>
                                    <td>".$row[2]."</td>
                                    <td>".$row[4] * $row[5]."</td>
                                    <td>".$row[1]."</td>
                                    <td><form method=\"post\" action=\"deliver.php\"><a href=\"deliver.php?id=".$row['0']."&restaurant=".$row[2]."&sell=".$row[4] * $row[5]."\" class=\"delete\"><input type=\"button\" class=\"btn btn-default\" value=\"Deliver\"></a></form></td>
                                </tr>";
                                $count++;
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>