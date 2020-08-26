<head>

    <title>Title</title>

    <!--    Resources -->
    <?php
    include("../../Common/config.php");
    ?>
    <link href="../../Plugins/bootstrap/css/bootstrap.css" rel="stylesheet">


    <script type="text/javascript" src="../../Plugins/bootstrap/js/bootstrap.js"> </script>
    <script type="text/javascript" src="../../Plugins/bootstrap/js/bootstrap.bundle.min.js"> </script>
    <script type="text/javascript" src="../../Plugins/popper/popper.js"> </script>
    <script type="text/javascript" src="../../Plugins/popper/popper.min.js"> </script>

    <!--Bootbox Scripts-->
    <script src="../../Plugins/bootbox/bootbox.all.js"></script>
    <script src="../../Plugins/bootbox/bootbox.js"></script>
    <script src="../../Plugins/bootbox/bootbox.locales.js"></script>

    <script type="text/javascript" src="../../Plugins/jquery/jquery.js"> </script>
    <script type="text/javascript" src="../../Plugins/jquery/jquery.min.js"> </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="../../Plugins/ionicons-2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../../Plugins/ionicons-2.0.1/css/ionicons.css">
    <link rel="stylesheet" href="../../Plugins/fontawesome-free/css/all.css">


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
<?php
if (isset($_POST)){

}
?>
<body class="" style="background-color: #011d21; ">

<!--<div class="container">-->
<!--    <main role="main" class="pb-3 bg-dark">-->
<!---->
<!--    </main>-->
<!---->
<!--</div>-->
<?php
include("../../Common/TopNavBar.php");
?>
<div class="row" style="min-height:100%; background-color: #011d21;margin: 0px; padding-left: 1%" >
    <?php
    include("../../Common/SideNavBar.php");
    ?>
    <div class="col-md-10 d-none d-md-block container" style="">
        <!--<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">-->
        <div class="container-fluid rounded mb-5" style="min-height: 100%; background-color: #04333b" >

            <div class="container-fluid mb-lg-5">
                <br>
                <p class="text-white font-weight-bold" style="font-size: 250%; margin-left: 10%">Purchase Reports</p>
            </div>

            <div class="row" style="margin-left: 0%">

                <div class="col-sm-12 col-md-12 col-lg-12">
                    <form action="purchaseReportPDF.php<?php /*echo $_SERVER['PHP_SELF']; */?>" method="post">
                        <div class="row col-sm-12 col-lg-12 col-md-12">
                            <div class="col-md-4 col-sm-4 col-lg-4 mb-5" style="">
                                <label for="CenterDetails" class="col-sm-12 col-md-12 col-lg-12 text-white">From Date</label>

                                <input type="date" id="fromDate" name="fromDate" class="input-group form-control">

                            </div>
                            <div class="col-md-4 col-sm-4 col-lg-4 mb-5" style="">

                                <label for="CenterDetails" class="col-sm-12 col-md-12 col-lg-12 text-white ">To Date</label>

                                <input type="date" id="toDate" name="toDate" value="<?= date('Y-m-d', time()); ?>" class="input-group-lg form-control">

                            </div>
                            <div class="col-md-4 col-sm-4 col-lg-4 mt-4" style="top: 15%">
                                <label for="CenterDetails" class="col-sm-12 col-md-12 col-lg-12 text-white"></label>
                                <button type="submit" class="btn btn-info form-control">Generate Report</button>
                            </div>
                        </div>
                    </form>
                </div>



                <!--               <div class="col-sm-6 col-md-6 col-lg-6">
                    <form action="purchaseReportPDF.php" id="formPdf" name="formPdf" method="post">
                        <div class="col-md-6 col-sm-6 col-lg-6 mb-lg-5">
                            <button type="button" onclick="submitPdf()" class="btn btn-info form-control">PDF</button>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <input type="hidden" name="date" id="fromDatePDF" >
                            <input type="date" id="todayDate" name="todayDate" value="<?/*= date('Y-m-d', time()); */?>" class="input-group-lg form-control">

                        </div>
                    </form>
                </div>-->

                <!--      <form action="<?php /*echo $_SERVER['PHP_SELF']; */?>" method="post">
                                    <div class="col-sm-12 div col-lg-12 div col-md-12">
                                        <div class="col-md-6 col-sm-6 col-lg-6 mb-5" style="">
                                            <button type="submit" class="btn btn-info form-control">Generate Report</button>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-lg-6" style="">
                                            <input type="date" id="pdfDate" class="input-group-lg form-control">
                                        </div>

                                    </div>
                                </form>
                                <form action="salesReportPDF.php" id="formpdf" method="post">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <button type="button" onclick="submitPdf()">PDF</button>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="hidden" name="date" id="datePdf" >
                                        <input type="hidden" name="date2">
                                    </div>
                                </form>-->
            </div>
            <div class="row mb-5">
                <div class="container">

                </div>
            </div>
            <div class="row">
                <div class="container-fluid ">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                        <table id="userTable" class="table table-bordered table-hover table-light">
                            <thead>
                            <tr>
                                <th>Customer ID</th>
                                <th>Center ID</th>
                                <th>Region</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>NIC</th>
                                <th>Address</th>
                                <th>Contact No</th>
                                <th>E-Mail</th>

                            </tr>
                            </thead>
                            <tbody>


                            <?php
                            include("../../Common/config.php");
                            $loadTable = "SELECT * FROM `tbl_purchaseorder` ORDER BY `DateOn` DESC";
                            $result = $con->query($loadTable);
                            if ($result) {
                                foreach ($result as $row) {
                                    ?>
                                    <tr>
                                        <td><?= $row['poID']; ?></td>
                                        <td><?= $row['farmerID']; ?></td>
                                        <td><?= $row['paddyType']; ?></td>
                                        <td><?= $row['Qty']; ?></td>
                                        <td><?= $row['unitPrice']; ?></td>
                                        <td><?= $row['total']; ?></td>
                                        <td><?= $row['stockID']; ?></td>
                                        <td><?= $row['DateOn']; ?></td>
                                        <td><?= $row['Description']; ?></td>



                                    </tr>

                                    <?php
                                }

                            }

                            ?>
                            </tbody>

                        </table>
                        <script>
                            function customerID_Search() {
                                // alert();
                                let input, filter, table, tr, td, i,txtValue;
                                input = document.getElementById("customerID_Modal");
                                filter = input.value.toUpperCase();
                                table = document.getElementById("customerTableModal");
                                tr = table.getElementsByTagName("tr");
                                for (i = 0; i < tr.length; i++) {
                                    td = tr[i].getElementsByTagName("td")[0];
                                    if (td) {
                                        txtValue = td.textContent || td.innerText;
                                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                            tr[i].style.display = "";
                                        } else {
                                            tr[i].style.display = "none";
                                        }
                                    }
                                }


                            }
                        </script>
                    </div>
                </div>
            </div>



        </div>
    </div>





    <div class="row col-sm-12 col-lg-12 col-md-12" style="background-color: #011d21">
        <?php
        include("../../Common/Footer.php");
        //        include("../../Common/Scripts.php");
        ?>

    </div>

</body>
<script>
    function submitPdf() {
        $('#fromDatePDF').val($('#fromDate').val());
        $('#fromDatePDF').val($('#fromDate1').val());
        $('#formPdf').submit();
    }

    <script src="../../Plugins/chart.js/Chart.bundle.js"> </script>
<!--<script src="chartData.js"> </script>-->
<script src="Scripts.js"> </script>
<!--<script src="../Plugins/jquery/jquery.slim.js"></script>-->
<script src="../../Plugins/bootstrap/js/bootstrap.min.js">  </script>
<!--Bootbox Scripts-->
<script src="../../Plugins/bootbox/bootbox.all.js"></script>
<script src="../../Plugins/bootbox/bootbox.js"></script>
<script src="../../Plugins/bootbox/bootbox.locales.js"></script>
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

</script>