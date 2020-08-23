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
<div class="row" style="min-height: 87%; background-color: #011d21">
    <?php
    include("../Common/SideNavBar.php");
    ?>
<div class="col-md-10 d-none d-md-block container text-white" style="background-color: #011d21">
<div class="container-fluid rounded" style="min-height: 100%; background-color: #04333b">
    <div class="container-fluid">
        <br>
        <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">User Registration</p>

    </div>

    <?php
     $Priority = 'AdminUserReg';
    ?>
    <FORM action="userReg_dB.php" method="POST" enctype="multipart/form-data">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="userID" class="col-sm-3 control-label">User ID</label>
                        <div class="col-sm-9">
                            <input type="text" id="userID" name="userID" placeholder="userID" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstName" class="col-sm-3 control-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="firstName" name="firstName" placeholder="First Name" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="addressLine1" class="col-sm-3 control-label">Address 1</label>
                        <div class="col-sm-9">
                            <input type="text" id="addressLine1" name="addressLine1" placeholder="Street address 1" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactNo1" class="col-sm-3 control-label">Contact number</label>
                        <div class="col-sm-9">
                            <input type="text" id="contactNo1" name="contactNo1" placeholder="Contact number" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email* </label>
                        <div class="col-sm-9">
                            <input type="email" id="email" placeholder="Email" class="form-control" name= "email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gender" class="col-sm-3 control-label">Gender* </label>
                        <div class="col-sm-3" style="left: 20%">
                            <div class="radio">
                                <label><input type="radio" name="gender" id="gender" value="male" checked> &nbsp;&nbsp;     Male</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="gender" id="gender" value="fe-male">    &nbsp;&nbsp; Female</label>
                            </div>


                        </div>

                    </div>

                    <div class="form-group">
                        <label for="Password" class="col-sm-3 control-label">Password*</label>
                        <div class="col-sm-9">
                            <input type="password" id="Password" name="Password" class="form-control">
                        </div>
                    </div>
                </div>
                <!--                Next column -->
                <div class="col-sm-4">
                    <div class="form-group">

                        <label for="roleID" class="col-sm-4 control-label">Role Type</label>

                        <div class="col-sm-9">
                            <?php

                            include("../Common/config.php");

                            $addQuery = "select * from `tbl_roles` where `roleID`= 1";
                            $result = $con->query($addQuery);
                            if ($result) {
                            foreach ($result as $row) {
                            ?>
                            <input type="text" value="<?= $row['roleID']; ?>" name="roleID" id="roleID" placeholder="roleID" class="form-control" readonly="<?= $row['roleName']; ?>">

                                <?php
                            }
                            }

                            ?>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="lastName" name="lastName" placeholder="Last Name" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="addressLine2" class="col-sm-3 control-label">Address 2</label>
                        <div class="col-sm-9">
                            <input type="text" id="addressLine2" name="addressLine2" placeholder="Street address 2 (Optional)" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactNo2" class="col-sm-5 control-label">Contact number (Optional)</label>
                        <div class="col-sm-9">
                            <input type="text" id="contactNo2" name="contactNo2" placeholder="Contact number (Optional)" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                        <div class="col-sm-9">
                            <input type="date" id="dob" name="dob" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword" class="col-sm-3 control-label">Confirm Password*</label>
                        <div class="col-sm-9">
                            <input type="password" id="confirmPassword" name="confirmPassword" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="picture" class="col-sm-3 control-label">Picture</label>
                        <div class="col-sm-9">
                            <input type="file" name="picture" id="picture" placeholder=Picture" class="form-control btn" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <span class="help-block">* Required fields</span>
                        </div>
                    </div>
                </div>

                <br>
            </div>


            <br><br>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="centerID" class="col-sm-3 control-label">Center ID</label>
                        <div class="col-sm-9">
                            <input type="text" id="centerID" name="centerID" placeholder="Center ID" class="form-control" autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="regionID" class="col-sm-3 control-label">Region ID</label>
                        <div class="col-sm-9">
                            <input type="text" id="regionID" name="regionID" placeholder="Region ID" class="form-control" autofocus>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br>
        <div class="container" style="margin-left: 30%">
            <button type="submit" name="addUser" id="addUser" class="btn btn-primary btn-block" style="width: 50%; align-content: center">Register</button>
        </div>

        <br><br>
    </FORM>


    <div class="row">
        <div class="col-md-11" style="left:5%">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Role ID</th>
                    <th>Center ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Contact No</th>
                    <th>E-Mail</th>
                    <th>DoB</th>
                    <th>Gender</th>
                    <th>isActive</th>
                    <th>Actions</th>


                </tr>
                </thead>
                <tbody>


                <?php
                include("../Common/config.php");
                $loadTable = "SELECT * FROM `tbl_employee`";
                $result = $con->query($loadTable);
                if ($result) {
                    foreach ($result as $row) {
                        ?>
                        <tr>
                            <td><?= $row['empID']; ?></td>
                            <td><?= $row['userName']; ?></td>
                            <td><?= $row['roleID']; ?></td>
                            <td><?= $row['centerID']; ?></td>
                            <td><?= $row['firstName']; ?></td>
                            <td><?= $row['lastName']; ?></td>
                            <td><?= $row['addressLine1']; ?></td>
                            <td><?= $row['contactNo1']; ?></td>
                            <td><?= $row['email']; ?></td>
                            <td><?= $row['dob']; ?></td>
                            <td><?= $row['gender'] ?></td>
                            <td><?= $row['isActive']; ?></td>
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
</div>


</div>


<?php
include("../Common/Footer.php");
include("../Common/Scripts.php");
?>

</body>
