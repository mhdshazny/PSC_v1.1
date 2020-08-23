<head>

    <title>Confirm Issue Orders</title>


    <!--    Resources -->

    <?php
    include("../Common/Header.php");
    //    include ("../Common/config.php");
    ?>
    <script src="../Plugins/bootstrap/js/bootstrap.min.js">  </script>
    <style>
        hr.style1{
            border-top: 1px solid #8c8b8b;
        }

    </style>
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
        <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">Confirm Issue Orders</p>
        <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">Order Details</p>

    </div>

    <?php
    $Priority = 'AdminUserReg';
    ?>
    <FORM action="confirmIssueOrders_dB.php" method="POST" enctype="multipart/form-data">
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
                        <label for="customer" class="col-sm-4 control-label">Customer</label>
                        <div class="col-sm-9">
                            <input type="text" id="customer" name="customer" placeholder="Customer Name" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="PaddyType" class="col-sm-4 control-label">Paddy Type</label>
                        <div class="col-sm-9">
                            <input type="text" id="paddyType" name="paddyType" placeholder="Paddy Type" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="unitPrice" class="col-sm-3 control-label">Unit Price</label>
                        <div class="col-sm-9">
                            <input type="text" id="unitPrice" name="unitPrice" placeholder="Unit Price" class="form-control" autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="dateOn" class="col-sm-6 control-label">Confirmed Date</label>
                        <div class="col-sm-9">
                            <input type="date" id="confirmDateOn" name="confirmDateOn" placeholder="Date" class="form-control" autofocus>
                            <!--                            </div>-->
                        </div>
                    </div>

                </div>
                <!--                Next column -->
                <div class="col-sm-5">
                    <div class="form-group">
                        <!--                        <div class="col-sm-9">-->
<!--                        <div class="form-group">-->

                            <label for="orderDateOn" class="col-sm-6 control-label">Ordered Date</label>
                            <div class="col-sm-9">
                                <input type="date" id="orderDateOn" name="orderDateOn" placeholder="Date" class="form-control" autofocus>
                            </div>
                            <!--                            </div>-->
<!--                        </div>-->

                    </div>
                    <div class="form-group">
                        <!--                        <div class="col-sm-10">-->
                        <label for="region" class="col-sm-5 control-label">Region</label>
                        <div class="col-sm-9">
                            <input type="text" id="region" name="region" placeholder="Region" class="form-control" autofocus>
                            <!--                        </div>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="quantity" class="col-sm-3 control-label">Quantity</label>
                            <div class="col-sm-9">
                                <input type="text" id="quantity" name="quantity" placeholder="Paddy Quantity" class="form-control" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="netTotal" class="col-sm-3 control-label">Net Total</label>
                            <div class="col-sm-9">
                                <input type="text" id="netTotal" name="netTotal" placeholder="Net Total" class="form-control" autofocus>
                            </div>
                        </div>

                        <!--                        <div class="col-sm-9">-->


                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <span class="help-block">* Required fields</span>
                            </div>
                        </div>


                    </div>

                    <br>
                </div>

            </div>
        </div>

<!--    </FORM>-->

    <!--Center Details-->
<!--    <div class="container-fluid" style=" min-height:150px; width: 100%; left: 20%">-->

        <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">Center and Vehicle Details</p>

<!--    </div>-->
<!--    <FORM action="confirmIssueOrders_dB.php" method="POST" enctype="multipart/form-data">-->
        <div class="container-fluid" style="width: 80%">
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="centerID" class="col-sm-4 control-label">Center ID</label>
                        <div class="col-sm-9">
                            <input type="text" id="centerID" name="centerID" placeholder="Center ID need to add find option" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="vehicleID" class="col-sm-4 control-label">Vehicle ID</label>
                        <div class="col-sm-9">
                            <input type="text" id="vehicleID" name="vehicleID" placeholder="Vehicle ID need to add find option" class="form-control" >
                        </div>
                    </div>

                </div>
                <!--                Next column -->
                <div class="col-sm-5">
                    <div class="form-group">


                        <div class="form-group">
                            <label for="region" class="col-sm-4 control-label">Center Region</label>
                            <div class="col-sm-9">
                                <input type="text" id="region" name="region" placeholder="Region" class="form-control" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="capacity" class="col-sm-5 control-label">Vehicle Capacity</label>
                            <div class="col-sm-9">
                                <input type="text" id="capacity" name="capacity" placeholder="Capacity" class="form-control" autofocus>
                            </div>
                        </div>



                        <div class="container" style="margin-left: 30%">
                            <button type="submit" name="confirmIssueOrder" id="confirmIssueOrder" class="btn btn-primary btn-block" style="width: 50%; align-content: center">Confirm Issue Order</button>
                        </div>
                    </div>

                    <br>
                </div>



            </div>
        </div>
    </FORM>


    <div class="row">
        <div class="col-md-8" style="left: 10%">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Issue Order ID</th>
                    <th>Paddy Type</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Net Total</th>
                    <th>Order Placed Date</th>
                    <th>Description</th>



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
