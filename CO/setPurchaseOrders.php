<head>

    <title>Purchase Orders</title>


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
        <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">Purchase Order</p>

    </div>


    <FORM action="setPurchaseOrder_dB.php" method="POST" enctype="multipart/form-data">
        <div class="container-fluid" style="width: 80%">
            <div class="row">
                <div class="col-sm-9">
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Date </label>
                        <div class="col-sm-9">
                            <input type="date" id="date" name="date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="PurchaseOrderID" class="col-sm-3 control-label">Purchase Order ID</label>
                        <div class="col-sm-9">
                            <input type="text" value="PO-001" id="PoID" name="PoID" placeholder="PurchaseOrder ID" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="StockID" class="col-sm-3 control-label">Stock ID</label>
                        <div class="col-sm-9">
                            <input type="text" value="STO-001" id="StockID" name="StockID" placeholder="Stock ID" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="FarmerID" class="col-sm-3 control-label">Farmer ID*</label>
                        <div class="col-sm-9">
                            <input type="text" id="FarmerID" name="FarmerID" placeholder="Farmer ID" class="form-control" autofocus>
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="PaddyType" class="col-sm-4   control-label">Paddy Type*</label>
                        <div class="col-sm-9">

                            <select class="form-control" id="PaddyType">
                                <option>Basmathi Rice</option>
                                <option>Nadu Rice</option>
                                <option>Kekulu Rice</option>
                                <option>Samba Rice</option>
                                <option>Red Rice</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Quantity" class="col-sm-3 control-label">Quantity*</label>
                        <div class="col-sm-9">
                            <input type="text" id="Quantity" name="Quantity" placeholder="Quantity" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="UnitPrice" class="col-sm-3 control-label">Unit Price*</label>
                        <div class="col-sm-9">
                            <input type="text" id="UnitPrice" name="UnitPrice" placeholder="Unit Price" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Total" class="col-sm-3 control-label">Total</label>
                        <div class="col-sm-9">
                            <input type="text" id="Total" name="Total" placeholder="Total" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Description" class="col-sm-3 control-label"> Description</label>
                        <div class="col-sm-9">
                            <input type="textarea" id="Description" name="Description" placeholder="Description" height="500" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                    </div>



                </div>


                <br>
            </div>
            <br><br>
            <div class="row">

                <div class="col-sm-5">

                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <span class="help-block">* Required fields</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br>
        <div class="container" style="margin-left: 30%">
            <button type="submit" name="addPOrder" id="addPOrder" class="btn btn-primary btn-block" style="width: 50%; align-content: center">Add Order</button>
        </div>

        <br><br>
    </FORM>
</div>


<?php
include("../Common/Footer.php");
include("../Common/Scripts.php");
?>

</body>
