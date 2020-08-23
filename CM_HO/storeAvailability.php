<head>

    <title>Store Availability</title>


    <!--    Resources -->

    <?php
    include("../Common/Header.php");
    //    include ("../Common/config.php");
    ?>
    <script src="../Plugins/bootstrap/js/bootstrap.min.js">  </script>
    <style>
        hr.style1{
            border-top: 1px solid #8c8b8b;
        }

    </style>
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
        <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">Store Availability</p>

    </div>

    <?php
    $Priority = 'AdminUserReg';
    ?>


    <!--Store Availability Center Wise-->
    <div class="row">
        <div class="col-md-8" style="left: 10%">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Issue Order ID</th>
                    <th>Paddy Type</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Net Total</th>
                    <th>Order Placed Date</th>
                    <th>Description</th>



                </tr>
                </thead>
                <tbody>


                <?php
                include("../Common/config.php");
                $loadTable = "SELECT * FROM `tbl_roles`";
                $result = $con->query($loadTable);
                if ($result) {
                    foreach ($result as $row) {

                        ?>
                        <tr>
                            <td><?= $row['roleID']; ?></td>
                            <td><?= $row['roleName']; ?></td>
                            <td>
                                <button class="btn-danger btn-sm">Delete</button>
                                <button class="btn-info btn-sm">Edit</button>

                            </td>
                            <td><?= $row['roleID']; ?></td>
                            <td><?= $row['roleName']; ?></td>
                            </td>
                            <td><?= $row['roleID']; ?></td>
                            <td><?= $row['roleName']; ?></td>


                        </tr>

                        <?php
                    }

                }

                ?>
                </tbody>

            </table>
        </div>
    </div>

</div>


<?php
include("../Common/Footer.php");
include("../Common/Scripts.php");
?>

</body>
