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
<body class="" style="background-color: #011d21">

<!--<div class="container">-->
<!--    <main role="main" class="pb-3 bg-dark">-->
<!---->
<!--    </main>-->
<!---->
<!--</div>-->
<?php
include("../Common/TopNavBar.php");
?>
<div class="row" style="min-height: 87%; background-color: #011d21" >
 <?php
 include("../Common/SideNavBar.php");
 ?>
    <div class="col-md-10 d-none d-md-block container" >
        <!--<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">-->
        <div class="container-fluid rounded" style="min-height: 100%; background-color: #04333b" >

            <div class="container-fluid">
                <br>
                <p class="text-white font-weight-bold" style="font-size: 250%; margin-left: 20%">Hello Finance officer !</p>
            </div>
            <!--            <div class="row mb-5">-->
            <!---->
            <!--            </div>-->
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 mb-5 align-content-center" style="min-width: 200%">
                    <canvas class="rounded effect " id="myChart2"></canvas>
                </div>

            </div>
            <div class="row">
                <div class="col-md-auto col-lg-4">
                    <canvas id="myChart" class="rounded effect" style=""></canvas>
                </div>
                <!--<div class="col-md-auto col-lg-4">
                    <canvas class="rounded effect" id="myChart2" style="background-color: white;"></canvas>
                </div>-->
                <div class="col-md-auto col-lg-4">
                    <canvas class="rounded effect" id="myChart3"style="background-color: white"></canvas>
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

<div class="row " style="background-color: #011d21">
    <?php
    include("../Common/Footer.php");
    include("../Common/Scripts.php");
    ?>

</div>

</body>
<script>
    //doughnut

    let ctxD = document.getElementById("myChart3").getContext('2d');
    let myLineChart1 = new Chart(ctxD, {
        type: 'doughnut',
        data: {
            labels: [<?php echo $data1?>],
            datasets: [{
                data: [<?php echo $data2?>],
                backgroundColor: ["#ff3939 ", "#ff8585", "#FDB45C", "#949FB1", "#4D5360", "#39ff39 "],
                hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
            }]
        },
        options: {
            responsive: true
        }
    });

    //Chart

    let ctx = document.getElementById("myChart").getContext('2d');
    let myChart;
    myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
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

    let ctxL = document.getElementById("myChart2").getContext('2d');
    let myLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July", "July", "July", "July", "July", "July", "July", "July", "July"],
            datasets: [{
                label: "My First dataset",
                data: [15, 19, 20, 31, 16, 25, 10, 20, 15, 30, 20],
                backgroundColor: [
                    'rgba(105, 0, 132, .2)',
                ],
                borderColor: [
                    'rgba(200, 99, 132, .7)',
                ],
                borderWidth: 2
            },
                {
                    label: "My Second dataset",
                    data: [28, 18, 40, 19, 32, 27, 40],
                    backgroundColor: [
                        'rgba(0, 137, 132, .2)',
                    ],
                    borderColor: [
                        'rgba(0, 10, 130, .7)',
                    ],
                    borderWidth: 2
                },
                {
                    label: "My Second dataset",
                    data: [28, 18, 40, 19, 32, 27, 40],
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


</script>