<head>

    <title>Issue Order</title>


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
        <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%"> Issue Order</p>

    </div>


    <form action="userReg_dB.php" method="POST" enctype="multipart/form-data">
        <div class="container-fluid" style="width: 80%">
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="issueOrderID" class="col-sm-9 control-label">Issue Order ID</label>
                        <div class="col-sm-7">
                            <input type="text" id="issueOrderID" name="issueOrderID" placeholder="Issue Order ID" class="form-control" >
                        </div>
                    </div>
                    <div class="container" style="margin-left: 30%">
                        <button type="button" name="search" id="search" class="btn btn-primary btn-block" style="width: 50%; align-content: center">Search </button>
                    </div>
                    <div class="form-group">
                        <label for="StockID" class="col-sm-9  control-label">Stock ID</label>
                        <div class="col-sm-7">
                            <input type="text" id="StockID" name="StockID" placeholder="Stock ID" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="PaddyType" class="col-sm-9 control-label">Paddy Type</label>
                        <div class="col-sm-7">
                            <input type="text" id="PaddyType" name="PaddyType" placeholder="Paddy Type" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="vehicleID" class="col-sm-9 control-label">Vehicle ID</label>
                        <div class="col-sm-7">
                            <input type="text" id="vehicleID" name="vehicleID" placeholder="Vehicle ID" class="form-control" readonly>
                        </div>
                    </div>


                    <div class="form-group">
                                <label for="dateOn" class="col-sm-9 control-label">Ordered Date</label>
                                <div class="col-sm-7">
                                    <input type="date" id="dateOn" name="dateOn" placeholder="Date" class="form-control" readonly>
                                </div>
                            </div>


                    <div class="form-group">

                            <label for="dateOn" class="col-sm-9 control-label">Accepted Date</label>
                            <div class="col-sm-7">
                                <input type="date" id="dateOn" name="dateOn" placeholder="Date" class="form-control" readonly>
                            </div>
                        </div>
                    </div>


        <!--                Next column -->

               <div class="col-md-7" >

                 <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Issue Order ID</th>
                    <th>stock ID</th>
                    <th>Paddy Type</th>
                    <th>Quantity</th>




                </tr>
                </thead>
                <tbody>


                <?php
                include("../Common/config.php");
                $loadTable = "SELECT * FROM `tbl_issueorder`";
                $result = $con->query($loadTable);
                if ($result) {
                    foreach ($result as $row) {

                        ?>


                        <?php
                    }

                }

                ?>
                </tbody>

            </table>

    </div>

            <br>   <br>

            <div class="container" style="margin-left: 30%">
                <button type="submit" name="Issue" id="Issue" class="btn btn-primary btn-block" style="width: 50%; align-content: center">Issue </button>
            </div>


        <br>
</div>




</form>

<?php
include("../Common/Footer.php");
include("../Common/Scripts.php");
?>

</body>
