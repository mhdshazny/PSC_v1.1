<head>

    <title>Vehicle Availability</title>


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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
        <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">Vehicle Availability</p>

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
                    <th>Vehicle ID</th>
                    <th>Vehicle Model</th>
                    <th>Vehicle Type</th>
                    <th>Capacity</th>
                    <th>Availability</th>

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
                            <td><?= $row['roleID']; ?></td>
                            <td><?= $row['roleName']; ?></td>
                            <td>
                                <button class="btn-danger btn-sm">Delete</button>
                                <button class="btn-info btn-sm">Edit</button>
                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    Open modal
                                </button>
                            </td>

                        </tr>

                        <?php
                    }

                }

                ?>
                </tbody>

            </table>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    Modal body..
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    </div>




<?php
include("../Common/Footer.php");
include("../Common/Scripts.php");
?>

</body>
