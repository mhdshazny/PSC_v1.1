<head>

    <title>Title</title>

    <!--    Resources -->
    <?php
    include("../Common/Header.php");
    include("../Common/config.php");
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
            <div class="row mb-5">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <button type="submit">Generate Report</button>
                    </div>
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <input type="date" id="pdfDate">
                    </div>
                    <div class="col-md-4 col-sm-4 col-lg-4">

                    </div>
                </form>
                <form action="salesReportPDF.php" id="formpdf" method="post">
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <button type="button" onclick="submitPdf()">PDF</button>
                    </div>
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <input type="hidden" name="date" id="datePdf" >
                    </div>
                    <div class="col-md-4 col-sm-4 col-lg-4">
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
                            include("../Common/config.php");
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
        include("../Common/Footer.php");
        include("../Common/Scripts.php");
        ?>

    </div>

</body>
<script>
    function submitPdf() {
        $('#datePdf').val($('#pdfDate').val());
        $('#formpdf').submit();
    }
</script>