<head>

    <title>Accept Issue Orders</title>


    <!--    Resources -->

    <?php
    include("../Common/Header.php");
    //    include ("../Common/config.php");
    ?>
    <script src="../Plugins/bootstrap/js/bootstrap.min.js">  </script>
</head>
<body class="bg-dark">

<!--<div class="container">-->
<!--    <main role="main" class="pb-3 bg-dark">-->
<!---->
<!--    </main>-->
<!---->
<!--</div>-->
<?php
include("../Common/TopNavBar.php");
?>
<div class="container-fluid bg-light" style="width: 100%;min-height: 87%">

    <div class="container-fluid" style=" min-height:150px; width: 100%; left: 20%">
        <br>
        <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">Accept Issue Orders</p>

    </div>

    <?php
    $Priority = 'AdminUserReg';
    ?>
    <FORM action="acceptIssueOrders_dB.php" method="POST" enctype="multipart/form-data">
        <div class="container-fluid" style="width: 80%">
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="issueOrderID" class="col-sm-4 control-label">Issue Order ID</label>
                        <div class="col-sm-9">
                            <input type="text" id="issueOrderID" name="issueOrderID" placeholder="Issue Order ID" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="paddyType" class="col-sm-4   control-label">Paddy Type</label>
                        <div class="col-sm-9">

                            <select class="form-control" id="paddyType" name="paddyType">
                                <option value ="Basmathi Rice">Basmathi Rice</option>
                                <option value ="Nadu Rice">Nadu Rice</option>
                                <option value ="Kekulu Rice">Kekulu Rice</option>
                                <option value ="Samba Rice">Samba Rice</option>
                                <option value ="Red Rice">Red Rice</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="vehicleID" class="col-sm-3 control-label">Vehicle ID</label>
                        <div class="col-sm-9">
                            <input type="text" id="vehicleID" name="vehicleID" placeholder="Vehicle ID" class="form-control" autofocus>
                        </div>
                    </div>

                </div>
                <!--                Next column -->
                <div class="col-sm-5">
                    <div class="form-group">
<!--                        <div class="col-sm-9">-->
                            <div class="form-group">
                                <label for="orderDateOn" class="col-sm-6 control-label">Ordered Date</label>
                                <div class="col-sm-9">
                                    <input type="date" id="orderDateOn" name="orderDateOn" placeholder="Date" class="form-control" autofocus>
                                </div>
<!--                            </div>-->
                        </div>

                    </div>
                    <div class="form-group">
<!--                        <div class="col-sm-10">-->
                        <label for="quantity" class="col-sm-5 control-label">Quantity (Kg)</label>
                        <div class="col-sm-9">
                            <input type="text" id="quantity" name="quantity" placeholder="Quantity" class="form-control" autofocus>
<!--                        </div>-->
                    </div>
                    </div>
                    <div class="form-group">

<!--                        <div class="col-sm-9">-->
                            <label for="acceptDateOn" class="col-sm-6 control-label">Accepted Date</label>
                            <div class="col-sm-9">
                                <input type="date" id="acceptDateOn" name="acceptDateOn" placeholder="Date" class="form-control" autofocus>
<!--                            </div>-->
                    </div>

                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <span class="help-block">* Required fields</span>
                        </div>
                    </div>

                        <div class="container" style="margin-left: 30%">
                            <button type="submit" name="acceptIssueOrder" id="acceptIssueOrder" class="btn btn-primary btn-block" style="width: 50%; align-content: center">Accept Issue Order</button>
                        </div>
                </div>

                <br>
            </div>



            </div>
        </div>

        <br><br>


        <br><br>
    </FORM>

    <div class="row">
        <div class="col-md-8" style="left: 10%">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Issue Order ID</th>
                    <th>Paddy Type</th>
                    <th>Quantity</th>
                    <th>Vehicle ID</th>
                    <th>Order Approved Date</th>


                </tr>
                </thead>
                <tbody>


                <?php
                include("../Common/config.php");
                $loadTable = "SELECT * FROM `tbl_roles`";
                $result = $con->query($loadTable);
                if ($result) {
                    foreach ($result as $row) {

                        ?>
                        <tr>
                            <td><?= $row['roleID']; ?></td>
                            <td><?= $row['roleName']; ?></td>
                            <td>
                                <button class="btn-danger btn-sm">Delete</button>
                                <button class="btn-info btn-sm">Edit</button>

                            </td>
                            <td><?= $row['roleID']; ?></td>
                            <td><?= $row['roleName']; ?></td>

                        </tr>

                        <?php
                    }

                }

                ?>
                </tbody>

            </table>
        </div>
    </div>

</div>


<?php
include("../Common/Footer.php");
include("../Common/Scripts.php");
?>

</body>
