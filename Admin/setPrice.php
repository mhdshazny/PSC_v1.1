<head>

    <title>Set Buying and Selling Prices</title>


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
        <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">Set Buying and Selling Prices</p>


    </div>

    <?php
    $Priority = 'AdminUserReg';
    ?>

    <FORM action="setPrice_dB.php" method="POST">
        <div class="container-fluid" style="width: 80%">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="priceEntryID" class="col-sm-6 control-label">Price Entry ID</label>
                        <div class="col-sm-9">
                            <input type="text"  id="priceEntryID" name="priceEntryID" placeholder="estimationID" class="form-control" value="SETP001" readonly>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="paddyType" class="col-sm-6 control-label">Paddy Types</label>
                        <div class="col-sm-9">
<!--                            <input type="text"  id="paddyType" name="paddyType" placeholder="paddyType" class="form-control" value="Basmathi Rice" readonly>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="paddyType" class="col-sm-6 control-label">Basmathi Rice</label>
                        <div class="col-sm-9">
<!--                            <input type="text"  id="paddyType" name="paddyType" placeholder="paddyType" class="form-control" value="Basmathi Rice" readonly>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="paddyType" class="col-sm-6 control-label">Nadu Rice</label>
                        <div class="col-sm-9">
<!--                            <input type="text"  id="paddyType" name="paddyType" placeholder="paddyType" class="form-control" value="Basmathi Rice" readonly>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="paddyType" class="col-sm-6 control-label">Kekulu Rice</label>
                        <div class="col-sm-9">
<!--                            <input type="text"  id="paddyType" name="paddyType" placeholder="paddyType" class="form-control" value="Basmathi Rice" readonly>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="paddyType" class="col-sm-6 control-label">Samba Rice</label>
                        <div class="col-sm-9">
<!--                            <input type="text"  id="paddyType" name="paddyType" placeholder="paddyType" class="form-control" value="Basmathi Rice" readonly>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="paddyType" class="col-sm-6 control-label">Red Rice</label>
                        <div class="col-sm-9">
<!--                            <input type="text"  id="paddyType" name="paddyType" placeholder="paddyType" class="form-control" value="Basmathi Rice" readonly>-->
                        </div>
                    </div>








                </div>
                <!--                Next column -->
                <div class="col-sm-4">

                    <div class="form-group">
                        <label for="dateOn" class="col-sm-3 control-label">Date</label>
                        <div class="col-sm-9">
                            <input type="date" id="dateOn" name="dateOn" placeholder="Date" class="form-control" autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="buyingPrice" class="col-sm-5 control-label">Buying Price</label>
                        <div class="col-sm-9">
                            <input type="text" id="buyingPrice" name="buyingPrice" placeholder="Buying Price for Basmathi Rice" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="buyingPrice" class="col-sm-4 control-label"></label>
                        <div class="col-sm-9">
                            <input type="text" id="buyingPrice" name="buyingPrice" placeholder="Buying Price for Nadu Rice" class="form-control" autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="buyingPrice" class="col-sm-4 control-label"></label>
                        <div class="col-sm-9">
                            <input type="text" id="buyingPrice" name="buyingPrice" placeholder="Buying Price for Kekulu Rice" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="buyingPrice" class="col-sm-4 control-label"></label>
                        <div class="col-sm-9">
                            <input type="text" id="buyingPrice" name="buyingPrice" placeholder="Buying Price for Red Rice" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="buyingPrice" class="col-sm-4 control-label"></label>
                        <div class="col-sm-9">
                            <input type="text" id="buyingPrice" name="buyingPrice" placeholder="Buying Price for Red Rice" class="form-control" autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <span class="help-block">* Required fields</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">

                    <div class="form-group">
                        <label for="dateOn" class="col-sm-3 control-label">Date</label>
                        <div class="col-sm-9">
                            <input type="date" id="dateOn" name="dateOn" placeholder="Date" class="form-control" autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="sellingPrice" class="col-sm-5 control-label">Selling Price</label>
                        <div class="col-sm-9">
                            <input type="text" id="sellingPrice" name="sellingPrice" placeholder="Selling Price for Basmathi Rice" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sellingPrice" class="col-sm-4 control-label"></label>
                        <div class="col-sm-9">
                            <input type="text" id="sellingPrice" name="sellingPrice" placeholder="Selling Price for Nadu Rice" class="form-control" autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="sellingPrice" class="col-sm-4 control-label"></label>
                        <div class="col-sm-9">
                            <input type="text" id="sellingPrice" name="sellingPrice" placeholder="Selling Price for Kekulu Rice" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sellingPrice" class="col-sm-4 control-label"></label>
                        <div class="col-sm-9">
                            <input type="text" id="sellingPrice" name="sellingPrice" placeholder="Selling Price for Red Rice" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sellingPrice" class="col-sm-4 control-label"></label>
                        <div class="col-sm-9">
                            <input type="text" id="sellingPrice" name="sellingPrice" placeholder="Selling Price for Red Rice" class="form-control" autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <span class="help-block">* Required fields</span>
                        </div>
                    </div>
                </div>

            </div>


            <br><br>
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">

                    </div>
                </div>
            </div>

            <br><br>
            <div class="container" style="margin-left: 30%">
                <button type="submit" name="setPrice" id="setPrice" class="btn btn-primary btn-block" style="width: 50%; align-content: center">Save</button>
            </div>

            <br><br>
    </FORM>
</div>



<div class="row">
    <div class="col-md-8" style="left: 10%">
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Date On</th>
                <th>Paddy Type</th>
                <th>Buying Price</th>
                <th>Selling Price</th>

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
                        <!--                            <td>-->
                        <!--                                <button class="btn-danger btn-sm">Delete</button>-->
                        <!--                                <button class="btn-info btn-sm">Edit</button>-->
                        <!---->
                        <!--                            </td>-->
                        <td><?= $row['roleID']; ?></td>
                        <td><?= $row['roleName']; ?></td>
                        </td>

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
