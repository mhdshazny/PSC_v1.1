<head>

    <title>Stock Estimations</title>


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
        <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">Stock Estimations</p>

    </div>

    <?php
    $Priority = 'AdminUserReg';
    ?>
    <FORM action="setEstimations_dB.php" method="POST" enctype="multipart/form-data">
        <div class="container-fluid" style="width: 80%">
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="estimationID" class="col-sm-6 control-label">Estimation Record ID</label>
                        <div class="col-sm-9">
                            <input type="text" value="EST001" id="estimationID" name="estimationID" placeholder="estimationID" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dateOn" class="col-sm-3 control-label">Date</label>
                        <div class="col-sm-9">
                            <input type="date" id="dateOn" name="dateOn" placeholder="Date" class="form-control" autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="PaddyType" class="col-sm-4   control-label">Paddy Type</label>
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
                        <label for="totalLandArea" class="col-sm-5 control-label">Total Land Area</label>
                        <div class="col-sm-9">
                            <input type="text" id="totalLandArea" name="totalLandArea" placeholder="Total Land Area in (perch)" class="form-control" autofocus>
                        </div>
                    </div>

                </div>
                <!--                Next column -->
                <div class="col-sm-5">


                        <div class="form-group">
                            <label for="centerID" class="col-sm-4 control-label">Center ID</label>
                            <div class="col-sm-9">
                                <input type="text" id="centerID" name="centerID" placeholder="Center ID" class="form-control" autofocus>
                            </div>
                        </div>

                    <div class="form-group">
                        <label for="season" class="col-sm-3 control-label">Season</label>
                        <div class="col-sm-9">
                                <select class="form-control" id="season">
                                    <option>Maha Season</option>
                                    <option>Yala Season</option>

                                </select>
                            </div>
                        </div>

                    <div class="form-group">
                        <label for="totalFarmers" class="col-sm-5 control-label">No. of Farmers</label>
                        <div class="col-sm-9">
                            <input type="text" id="totalFarmers" name="totalFarmers" placeholder="No. of Farmers" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactNo1" class="col-sm-6   control-label">Total Estimated Quantity</label>
                        <div class="col-sm-9">
                            <input type="text" id="quantity" name="quantity" placeholder="Quantity (Kg)" class="form-control" autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <span class="help-block">* Required fields</span>
                        </div>
                    </div>
                </div>

                <br>
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
            <button type="submit" name="sendEstimations" id="sendEstimations" class="btn btn-primary btn-block" style="width: 50%; align-content: center">Send</button>
        </div>

        <br><br>
    </FORM>
</div>


<?php
include("../Common/Footer.php");
include("../Common/Scripts.php");
?>

</body>
