<head>

    <title>Purchases</title>


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
        <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">Purchases</p>

    </div>


    <FORM action="setPurchaseOrder_dB.php" method="POST" enctype="multipart/form-data">
        <div class="container-fluid" style="width: 80%">
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="date" class="col-sm-9 control-label">Purchased date </label>
                        <div class="col-sm-7">
                            <input type="date" id="date" name="date" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="PurchaseOrderID" class="col-sm-9 control-label">Purchase Order ID</label>
                        <div class="col-sm-7">
                            <input type="text"  id="PoID" name="PoID" placeholder="PurchaseOrder ID" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="StockID" class="col-sm-9  control-label">Stock ID</label>
                        <div class="col-sm-7">
                            <input type="text" id="StockID" name="StockID" placeholder="Stock ID" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="FarmerID" class="col-sm-9  control-label">Farmer ID</label>
                        <div class="col-sm-7">
                            <input type="text" id="FarmerID" name="FarmerID" placeholder="Farmer ID" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="PaddyType" class="col-sm-9   control-label" >Paddy Type</label>
                        <div class="col-sm-7">
                            <input type="text" id="PaddyType" name="PaddyType" placeholder="PaddyType" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Quantity" class="col-sm-9  control-label">Quantity</label>
                        <div class="col-sm-7">
                            <input type="text" id="Quantity" name="Quantity" placeholder="Quantity" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="UnitPrice" class="col-sm-9  control-label">Unit Price</label>
                        <div class="col-sm-7">
                            <input type="text" id="UnitPrice" name="UnitPrice" placeholder="Unit Price" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Description" class="col-sm-9  control-label"> Description</label>
                        <div class="col-sm-7">
                            <input type="textarea" id="Description" name="Description" placeholder="Description" height="500" class="form-control" readonly>
                        </div>
                    </div>



                </div>
                <!--                Next column -->


                <div class="col-sm-7">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Stock_ID</th>
                            <th>Paddy Type</th>
                            <th>Quantity</th>


                        </tr>
                        </thead>
                        <tbody>


                        <?php
                        include("../Common/config.php");
                        $loadTable = "SELECT * FROM `tbl_stocks`";
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

                                </tr>

                                <?php
                            }

                        }

                        ?>
                        </tbody>

                    </table>

                </div>
                <div class="form-group">
                    <label for="Total" class="col-sm-3 control-label">Search</label>
                    <div class="col-sm-9">
                        <input type="text" id="Sstock" name="Sstock" placeholder="Enter stock ID" class="form-control" autofocus>
                    </div>
                <div class="container" style="margin-left: 30%">
                    <button type="submit" name="Search" id="Search" class="btn btn-primary btn-block" style="width: 50%; align-content: center">Search</button>
                </div>
            </div>
            <br><br>

        </div>

        <br><br>


        <br><br>
    </FORM>
</div>


<?php
include("../Common/Footer.php");
include("../Common/Scripts.php");
?>

</body>
