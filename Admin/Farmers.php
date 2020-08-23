<head>

    <title>User Registration</title>


    <!--    Resources -->

    <?php
    include("../Common/Header.php");
    //    include ("../Common/config.php");
    ?>
    <script src="../Plugins/bootstrap/js/bootstrap.min.js">  </script>
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
        <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">Collection Centers </p>

    </div>
    <FORM action="userReg_dB.php" method="POST">
        <div class="container-fluid" style="width: 80%">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="centerID" class="col-sm-3 control-label">Center ID</label>
                        <div class="col-sm-9">
                            <input type="text" id="centerID" name="centerID" placeholder="Center ID" class="form-control" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="regionID" class="col-sm-3 control-label">Region ID</label>
                        <div class="col-sm-9">
                            <input type="text" id="regionID" name="regionID" placeholder="Region ID" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-sm-3 control-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" id="address" name="address" placeholder="Address" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactNo2" class="col-sm-6 control-label">Contact number (Optional)</label>
                        <div class="col-sm-9">
                            <input type="text" id="contactNo2" name="contactNo2" placeholder="Contact number (Optional)" class="form-control" autofocus>
                        </div>
                    </div>
                    <!--                    <div class="form-group">-->
                    <!--                        <div class="col-sm-9" style="height: 15%">-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <div class="form-group">
                        <label for="BankAccID" class="col-sm-4 control-label">Bank Account ID</label>
                        <div class="col-sm-9">
                            <input type="text" id="BankAccID" name="BankAccID" placeholder="Bank Account ID" class="form-control" autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="isActive" class="col-sm-3 control-label">isActive * </label>
                        <div class="col-sm-3" style="left: 20%">
                            <div class="radio">
                                <label><input type="radio" name="isActive" id="isActive" value="1" checked> &nbsp;&nbsp;     Active</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="isActive" id="isActive" value="0">    &nbsp;&nbsp; Inactive</label>
                            </div>


                        </div>

                    </div>

                    <!--                    <div class="form-group">-->
                    <!--                        <label for="Password" class="col-sm-3 control-label">Password*</label>-->
                    <!--                        <div class="col-sm-9">-->
                    <!--                            <input type="password" id="Password" name="Password" class="form-control">-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                </div>
                <!--                Next column -->
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="centerName" class="col-sm-4 control-label">Center Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="centerName" name="centerName" placeholder="Center Name" class="form-control" autofocus>
                        </div>
                    </div>

                    <!--                    <div class="form-group">-->
                    <!--                        <label for="lastName" class="col-sm-3 control-label">Last Name</label>-->
                    <!--                        <div class="col-sm-9">-->
                    <!--                            <input type="text" id="lastName" name="lastName" placeholder="Last Name" class="form-control" autofocus>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <div class="form-group">
                        <div class="col-sm-9" style="height: 12.5%">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="addressLine2" class="col-sm-3 control-label">Address 2</label>
                        <div class="col-sm-9">
                            <input type="text" id="addressLine2" name="addressLine2" placeholder="Street address 2 (Optional)" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactNo2" class="col-sm-6 control-label">Contact number (Optional)</label>
                        <div class="col-sm-9">
                            <input type="text" id="contactNo2" name="contactNo2" placeholder="Contact number (Optional)" class="form-control" autofocus>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-9" style="height: 15%">

                        </div>
                    </div>
                    <!--                    <div class="form-group">-->
                    <!--                        <label for="confirmPassword" class="col-sm-4 control-label">Confirm Password*</label>-->
                    <!--                        <div class="col-sm-9">-->
                    <!--                            <input type="password" id="confirmPassword" name="confirmPassword" class="form-control">-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                </div>

                <br>
            </div>


            <br><br>
        </div>

        <br><br>
        <div class="container" style="margin-left: 30%">
            <button type="submit" name="addUser" id="addUser" class="btn btn-primary btn-block" style="width: 50%; align-content: center">Register</button>
        </div>

        <br><br>
    </FORM>

    <div class="row">
        <div class="col-md-12" style="left: 10%">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Role_ID</th>
                    <th>Role_Name</th>
                    <th>Actions</th>


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
