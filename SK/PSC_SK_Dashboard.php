<head>

    <title>Title</title>

    <!--    Resources -->
    <?php
    include("../Common/Header.php");
    //    include ("../Common/config.php");
    ?>

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
<div class="container-fluid bg-light" style="width: 100%">

    <div class="container-fluid" style=" min-height:230px; width: 100%; left: 20%">
        <br>
        <p class="text-info font-weight-bold" style="font-size: 250%; margin-left: 20%">Hello Collection Officer !</p>
    </div>

    <hr style="font-weight: bold; color: black">
    <div class="container-fluid" style="min-height: 550px; width:100%">
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


</div>
<?php
include("../Common/Footer.php");
include("../Common/Scripts.php");
//include ("Scripts.js");
?>



</body>
<script>
</script>