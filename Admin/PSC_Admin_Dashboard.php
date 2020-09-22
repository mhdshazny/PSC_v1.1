<head>

    <title>Title</title>

    <!--    Resources -->
    <?php
    include("../Common/Header.php");
    include ("../Common/config.php");
    ?>

    <style>
        .effect:hover{
            -webkit-box-shadow: -1px 9px 10px rgba(0,0,0,75);
            -moz-box-shadow: -1px 9px 10px rgba(0,0,0,75);
            box-shadow: -1px 3px 15px 2px rgba(0,0,0,75);

        }.effect{
             -webkit-box-shadow: -1px 3px 1px rgba(0,0,0,75);
             -moz-box-shadow: -1px 3px 1px rgba(0,0,0,75);
             box-shadow: -1px 3px 10px 2px rgba(0,0,0,75);

         }
    </style>


</head>
<body class="" style="background-color: #011d21; ">

<!--<div class="container">-->
<!--    <main role="main" class="pb-3 bg-dark">-->
<!---->
<!--    </main>-->
<!---->
<!--</div>-->
<?php
include("../Common/TopNavBar.php");
?>
<div class="row" style="min-height: 87%; background-color: #011d21;margin: 0px; padding-left: 1%" >
    <?php
    include("../Common/SideNavBar.php");
    ?>
    <div class="col-md-10 d-none d-md-block container" style="">
        <!--<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">-->
        <div class="container-fluid rounded" style="min-height: 100%; background-color: #04333b" >

            <div class="container-fluid">
                <br>
                <p class="text-white font-weight-bold" style="font-size: 250%; margin-left: 20%">Hello Admin !</p>
            </div>
            <!--            <div class="row mb-5">-->
            <!---->
            <!--            </div>-->
            <div class="container-fluid text-white">

                <div class="row mb-5" style="min-height: 100px">
                    <div class="col-sm-6 col-md-6 col-lg-6">
<!--                        <div class="col-md-12 col-lg-12 col-sm-12" style="margin-left: 2%; min-width: 50%">-->
                        <canvas class="rounded effect" id="lineGraph1" style=""></canvas>

                        <!--                        </div>-->
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
<!--                        <div class="col-md-12 col-lg-12 col-sm-12">-->
                        <canvas class="rounded effect " id="lineGraph2"></canvas>

<!--                        </div>-->
                    </div>
                </div>
                <div class="row mb-5">

                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <canvas id="DoughnutGraph" class="rounded effect" style="width: 100%"></canvas>

                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <canvas class="rounded effect" id="barGraph1"style=""></canvas>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <canvas class="rounded effect " id="barGraph2"></canvas>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
<!--                    <div class="col-sm-12" style="margin-left: 1% ">-->
<!--                        <div class="col-sm-6 col-md-6 col-lg-6">-->
<!--                        <canvas class="rounded effect " id="myChart2"></canvas>-->
<!--                        </div>-->
<!--                        <div class="col-sm-6 col-md-6 col-lg-6">-->
<!--                            <canvas class="rounded effect " id="myChart1"></canvas>-->
<!--                        </div>-->
<!--                    </div>-->

                </div>
            </div>

        </div>
        <br>
        <br>
        <br>
    </div>
</div>



<?php
$data1 = '';
$data2 = '';

//query to get data from the table
$sql = "SELECT * FROM `tbl_stocks`";
$result = mysqli_query($con, $sql);

//loop through the returned data
while ($row = mysqli_fetch_array($result)) {

    $data1 = $data1 . '"'. $row['paddyType'].'",';
    $data2 = $data2 . '"'. $row['Qty'].'",';
}

$data1 = trim($data1,",");
$data2 = trim($data2,",");
?>

<?php
$BarGraph1Data1 = '';
$BarGraph1Data2 = '';

//query to get data from the table
$sql = "SELECT * FROM `tbl_issueorder`";
$result = mysqli_query($con, $sql);

//loop through the returned data
while ($row = mysqli_fetch_array($result)) {

    $BarGraph1Data1 = $BarGraph1Data1 . '"'. $row['region'].'",';
    $BarGraph1Data2 = $BarGraph1Data2 . '"'. $row['totalQuantity'].'",';
}

$BarGraph1Data1 = trim($BarGraph1Data1,",");
$BarGraph1Data2 = trim($BarGraph1Data2,",");
?>

<?php
$BarGraph2Data1 = '';
$BarGraph2Data2 = '';

//query to get data from the table
$sql = "SELECT * FROM `tbl_product`";
$result = mysqli_query($con, $sql);

//loop through the returned data
while ($row = mysqli_fetch_array($result)) {

    $BarGraph2Data1 = $BarGraph2Data1 . '"'. $row['paddyType'].'",';
    $BarGraph2Data2 = $BarGraph2Data2 . '"'. $row['sellingPrice'].'",';
}

$BarGraph2Data1 = trim($BarGraph2Data1,",");
$BarGraph2Data2 = trim($BarGraph2Data2,",");
?>

<?php
$LineGraph1Data1 = '';
$LineGraph1Data2 = '';
$LineGraph1Data3 = '';
$LineGraph1Data4 = '';

//query to get data from the table
$sql = "SELECT * FROM `tbl_issueorder`";
$sql2 = "SELECT * FROM `tbl_purchaseorder`";
$result = mysqli_query($con, $sql);
$result2 = mysqli_query($con, $sql2);

//loop through the returned data
while ($row = mysqli_fetch_array($result)) {
//
    $LineGraph1Data1 = $LineGraph1Data1 . '"'. $row['paddyType'].'",';
    $LineGraph1Data2 = $LineGraph1Data2 . '"'. $row['totalQuantity'].'",';
}
while ($rows = mysqli_fetch_array($result2)) {
//
    $LineGraph1Data3 = $LineGraph1Data3 . '"'. $rows['paddyType'].'",';
    $LineGraph1Data4 = $LineGraph1Data4 . '"'. $rows['Qty'].'",';
}

$LineGraph1Data1 = trim($LineGraph1Data1,",");
$LineGraph1Data2 = trim($LineGraph1Data2,",");
$LineGraph1Data3 = trim($LineGraph1Data3,",");
$LineGraph1Data4 = trim($LineGraph1Data4,",");
?>


<?php
$LineGraph2Data1 = '';
$LineGraph2Data2 = '';
$LineGraph2Data3 = '';
$LineGraph2Data4 = '';

//query to get data from the table
$sql = "SELECT * FROM `tbl_issueorder`";
$sql2 = "SELECT * FROM `tbl_purchaseorder`";
$result = mysqli_query($con, $sql);
$result2 = mysqli_query($con, $sql2);

//loop through the returned data
while ($row = mysqli_fetch_array($result)) {
//
    $LineGraph2Data1 = $LineGraph2Data1 . '"'. $row['paddyType'].'",';
    $LineGraph2Data2 = $LineGraph2Data2 . '"'. $row['unitPrice'].'",';
}
while ($rows = mysqli_fetch_array($result2)) {
//
    $LineGraph2Data3 = $LineGraph2Data3 . '"'. $rows['paddyType'].'",';
    $LineGraph2Data4 = $LineGraph2Data4 . '"'. $rows['unitPrice'].'",';
}

$LineGraph2Data1 = trim($LineGraph2Data1,",");
$LineGraph2Data2 = trim($LineGraph2Data2,",");
$LineGraph2Data3 = trim($LineGraph2Data3,",");
$LineGraph2Data4 = trim($LineGraph2Data4,",");
?>


<div class="row " style="background-color: #011d21">
    <?php
    include("../Common/Footer.php");
    include("../Common/Scripts.php");
    ?>

</div>

</body>
<script>
    //doughnut

    let ctxA = document.getElementById("DoughnutGraph").getContext('2d');
    let myLineChart1 = new Chart(ctxA, {
        type: 'doughnut',
        data: {
            labels: [<?php echo $data1?>],
            datasets: [{
                data: [<?php echo $data2?>],
                backgroundColor: ["#white ", "#ff8585", "#FDB45C", "#949FB1", "#4D5360", "#39ff39 "],
                hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"],
                labelColor: ["#fff", "#fff", "#fff", "#fff", "#fff"]
            }]
        },
        options: {
            responsive: true
        }
    });

    //Chart

    let ctxB = document.getElementById("barGraph1").getContext('2d');
    let myChart;
    myChart = new Chart(ctxB, {
        type: 'bar',
        data: {
            labels: [<?php echo $BarGraph1Data1?>],
            datasets: [{
                label: '# Sales vs Regional centers (Start - End)',
                data: [<?php echo $BarGraph1Data2?>],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

   let ctxC = document.getElementById("barGraph2").getContext('2d');
    let myChartBarG;
    myChartBarG = new Chart(ctxC, {
        type: 'bar',
        data: {
            labels: [<?php echo $BarGraph2Data1?>],
            datasets: [{
                label: '# Current selling prices (* Rs.)',
                data: [<?php echo $BarGraph2Data2?>],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });


    // CHart 2

    let ctxD = document.getElementById("lineGraph1").getContext('2d');
    let myLineChart = new Chart(ctxD, {
        type: 'line',
        data: {
            labels: [<?php echo $LineGraph1Data3?>],
            datasets: [{
                label: "Product Sales",
                data: [<?php echo $LineGraph1Data2?>],
                backgroundColor: [
                    'rgba(105, 0, 132, .2)',
                ],
                borderColor: [
                    'rgba(200, 99, 132, .7)',
                ],
                borderWidth: 2
            },
                {
                    label: "Product Purchases",
                    data: [<?php echo $LineGraph1Data4?>],
                    backgroundColor: [
                        'rgba(0, 137, 132, .2)',
                    ],
                    borderColor: [
                        'rgba(0, 10, 130, .7)',
                    ],
                    borderWidth: 2
                }
            ]
        },
        options: {
            responsive: true
        }
    });


    let ctxE = document.getElementById("lineGraph2").getContext('2d');
    let myLineChart0 = new Chart(ctxE, {
        type: 'line',
        data: {
            labels: [<?php echo $LineGraph2Data1?>],
            datasets: [{
                label: "Selling prices",
                data: [<?php echo $LineGraph2Data2?>],
                backgroundColor: [
                    'rgba(105, 0, 132, .2)',
                ],
                borderColor: [
                    'rgba(200, 99, 132, .7)',
                ],
                borderWidth: 2
            },
                {
                    label: "Purchasing prices",
                    data: [<?php echo $LineGraph2Data4?>],
                    backgroundColor: [
                        'rgba(0, 137, 132, .2)',
                    ],
                    borderColor: [
                        'rgba(0, 10, 130, .7)',
                    ],
                    borderWidth: 2
                },

            ]
        },
        options: {
            responsive: true
        }
    });


</script>