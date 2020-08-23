<head>

    <title>Stock balance</title>


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
        <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%"> Stock balance</p>

    </div>


    <FORM action="userReg_dB.php" method="POST" enctype="multipart/form-data">
        <div class="container-fluid" style="width: 80%">
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="CenterID" class="col-sm-9 control-label">Center ID</label>
                        <div class="col-sm-7">
                            <input type="text" id="CenterID" name="CenterID" placeholder="CenterID" class="form-control" >
                        </div>
                    </div>
                    <div class="container" style="margin-left: 30%">
                        <button type="button" name="search" id="search" class="btn btn-primary btn-block" style="width: 50%; align-content: center">Search </button>
                    </div>

<br> <br>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="Capacity" class="col-sm-9 control-label">Capacity</label>

                        <hr style="font-weight: bold; color: black">
                        <div class="container-fluid" style="min-height: 250px; width:500px">

                                <div class="col bg-light">
                                    <canvas id="myChart"  style="max-width: 500px;"></canvas>
                                </div>


                    </div>


                </div>
                </div>

                <div class="col-md-12" >

                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>

                            <th>Paddy type</th>
                            <th>Estimated quantity</th>
                            <th>Quantity available</th>
                            <th>Difference</th>




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
                    <button type="submit" name="Issued" id="Issued" class="btn btn-primary btn-block" style="width: 50%; align-content: center">Issued </button>
                </div>


                <br>
            </div>
        </div>

    </FORM>




    </div>
</div>
</div>
</div>



    <?php
    include("../Common/Footer.php");
    include("../Common/Scripts.php");
    ?>

    <script src="../SK/chartData.js"> </script>

</body>
