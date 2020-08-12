<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta charset="utf-8">
<!--    Resources -->
    <link href="../Plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="../Plugins/chart.js/Chart.bundle.js"> </script>
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
    include("../Common/TopNavBar.php");
    ?>
    <div class="container-fluid" style=" min-height:230px; width: 100%">
        <br>
        <p class="text-info font-weight-bold" style="font-size: 250%">Hello Admin !</p>
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

</div>
    <?php
    include("../Common/Footer.php");
    ?>
</div>


<script src="chartData.js"> </script>
<!--<script src="chartData2.js"> </script>-->
</body>
</html>