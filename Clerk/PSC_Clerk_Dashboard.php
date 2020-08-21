<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta charset="utf-8">
    <!--    Resources -->
    <?php
    include("../Common/Header.php");
    //    include ("../Common/config.php");
    ?>

    <style>
        /*menu buttons for dashboard*/
        .btnMenu {
            width: 250px !important;
            height: 120px
        }

    </style>

</head>
<body>

<!--<div class="container">-->
<!--    <main role="main" class="pb-3 bg-dark">-->
<!---->
<!--    </main>-->
<!---->
<!--</div>-->

<div class="row">
    <?php
    include("../Common/TopNavBarRO.php");
    ?>
    <div class="container-fluid" style=" min-height:230px; width: 100%">
        <br>
        <p class="text-info font-weight-bold" style="font-size: 250%"> Hello Clerk!</p>
    </div>
    <hr style="font-weight: bold; color: black">
    <div class="container-fluid" style="min-height: 550px; width:1700px">
        <div class="row">
            <div class="col bg-light">
                <canvas id="myChart"  style="max-width: 500px;"></canvas>
            </div>
            <div class="col bg-light">
                <canvas id="myChart2"  style="max-width: 500px;"></canvas>
            </div>
            <div class="col bg-light">
                <canvas id="myChart3"  style="max-width: 500px;"></canvas>
            </div>
        </div>
        <br><br><br>
        <div class="container">

            <a href="Customer_Register.php" class="btn btn-danger btn-lg btnMenu mx-2" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Customer</a>
            <a href="#" class="btn btn-warning btn-lg btnMenu mx-2" role="button"><span class="glyphicon glyphicon-bookmark"></span> <br/>Issue Order</a>
            <a href="Farmer_Register.php" class="btn btn-success btn-lg btnMenu mx-2" role="button"><span class="glyphicon glyphicon-user"></span> <br/>Farmer</a>

        </div>
    </div>
</div>>
</div>
</div>
<?php
include("../Common/Footer.php");
include("../Common/Scripts.php");
//include ("Scripts.js");
?>

<script src="../Admin/chartData.js"> </script>
<!--<script src="chartData2.js"> </script>-->
</body>
</html>