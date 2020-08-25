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
<div class="row" style="min-height: 87%; background-color: #011d21;margin: 0px; padding-left: 1%" >
    <?php
    include("../../Common/SideNavBar.php");
    ?>
    <div class="col-md-10 d-none d-md-block container" style="">
        <!--<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">-->
        <div class="container-fluid rounded" style="min-height: 100%; background-color: #04333b" >

            <div class="container-fluid">
                <br>
                <p class="text-white font-weight-bold" style="font-size: 250%; margin-left: 10%">Purchase Reports</p>
            </div>
            <div class="row mb-5" style="margin: 5%">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="col-sm-12 div col-lg-12 div col-md-12">
                        <div class="col-md-6 col-sm-6 col-lg-6 mb-5" style="">
                            <button type="submit" class="btn btn-info form-control">Generate Report</button>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6" style="">
                            <input type="date" id="pdfDate" class="input-group-lg form-control">
                        </div>
<!--                        <div class="col-sm-12 col-md-12 col-lg-12" bis_skin_checked="1">-->
<!--                            <input type="date" id="orderDateOn" name="orderDateOn" placeholder="Date" class="form-control" required="" autofocus="">-->
<!--                            <div class="valid-feedback" bis_skin_checked="1">Valid.</div>-->
<!--                            <div class="invalid-feedback" bis_skin_checked="1">Please fill out this field.</div>-->
<!--                        </div>-->
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
                </form>
            </div>
            <div class="row mb-5">
                <div class="container">
                    <table class="table table-bordered table-sm table-striped bg-white">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                    </table>
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
                                <th>Gender</th>
                                <th>isActive</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>


                            <?php
                            include("../../Common/config.php");
                            $loadTable = "SELECT * FROM `tbl_customer` ORDER BY `customerID` DESC";
                            $result = $con->query($loadTable);
                            if ($result) {
                                foreach ($result as $row) {
                                    ?>
                                    <tr>
                                        <td><?= $row['customerID']; ?></td>
                                        <td><?= $row['centerID']; ?></td>
                                        <td><?= $row['region']; ?></td>
                                        <td><?= $row['firstName']; ?></td>
                                        <td><?= $row['lastName']; ?></td>
                                        <td><?= $row['NIC']; ?></td>
                                        <td><?= $row['addressLine1']; ?></td>
                                        <td><?= $row['contactNo1']; ?></td>
                                        <td><?= $row['email']; ?></td>
                                        <td><?= $row['gender'] ?></td>
                                        <td><?= $row['isActive']; ?></td>
                                        <td>
                                            <button class="btn-danger btn-sm" onclick="confirmDelete('<?= $row['customerID'];?>')" value="<?= $row['customerID']; ?>">Delete</button>
                                            <button class="btn-info btn-sm" onclick="editUser()" value="<?= $row['customerID']; ?>">Edit</button>

                                        </td>
                                        <td hidden><?= $row['addressLine2']; ?></td>
                                        <td hidden><?= $row['contactNo2']; ?></td>


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





    <div class="row " style="background-color: #011d21">
        <?php
        include("../../Common/Footer.php");
        //        include("../../Common/Scripts.php");
        ?>

    </div>

</body>
<script>
    function submitPdf() {
        $('#datePdf').val($('#pdfDate').val());
        $('#formpdf').submit();
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