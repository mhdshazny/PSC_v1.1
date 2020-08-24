<head>

    <title>User Registration</title>


    <!--    Resources -->

    <?php
    include("../Common/Header.php");
    //    include ("../Common/config.php");
    ?>
    <script src="../Plugins/bootstrap/js/bootstrap.min.js">  </script>
    <!--Bootbox Scripts-->
</head>
<body class="bg-dark">

<!--<div class="container">-->
<!--    <main role="main" class="pb-3 bg-dark">-->
<!---->
<!--    </main>-->
<!---->
<!--</div>-->
<!--<div class="container">-->
<?php
include("../Common/TopNavBar.php");
?>
<div class="row" style="min-height: 87%; background-color: #011d21">
    <?php
    include("../Common/SideNavBar.php");
    ?>
    <div class="col-md-10 d-none d-md-block container text-white" style="background-color: #011d21">
        <div class="container-fluid rounded" style="min-height: 100%; background-color: #04333b">
            <div class="row">
                <div class="container-fluid">
                    <br>
                    <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">User Registration</p>

                </div>

                <?php
                $Priority = 'AdminUserReg';
                ?>
                <FORM action="userReg_dB.php" method="POST" class="col" enctype="multipart/form-data">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="userID" class="col-sm-12 col-md-12 col-lg-12 control-label">User ID</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="userID" name="userID" placeholder="userID" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">

                                    <label for="roleID" class="col-sm-12 col-md-12 col-lg-12 control-label">Role Type</label>

                                    <!--                                    <div class="col-sm-12 col-md-12 col-lg-12">-->

                                    <!--                                                <input type="text" value="--><?//= $row['roleID']; ?><!--" name="roleID" id="roleID" placeholder="roleID" class="form-control" readonly="--><?//= $row['roleName']; ?><!--">-->
                                    <div class="input-group col-sm-12 col-md-12 col-lg-12">

                                        <select class="custom-select" id="roleID" name="roleID">
                                            <option value=''></option>

<!---->
                                        <?php

                                        include("../Common/config.php");
//
                                        $addQuery = "select * from `tbl_roles`";
                                        $result = $con->query($addQuery);
//
                                        //                                        if ($result) {
                                        //                                            foreach ($result as $row) {
                                        ?>

                                            <?php
                                            while ($rows = $result->fetch_assoc()) {
                                            $roleID= $rows['roleID'];
                                            $roleName= $rows['roleName'];
                                            echo "<option value='$roleID'>$roleName</option>";


                                            }
                                            ?>
<!---->
<!---->
                                        </select>
                                    </div>

                                    <!--                                    </div>-->

                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
<!--                                <div class="form-group">-->
<!--                                    <label for="picture" class="col-sm-12 col-md-12 col-lg-12  control-label">Picture</label>-->
<!--                                    <div class="col-sm-12 col-md-12 col-lg-12">-->
<!--                                        <input type="file" name="picture" id="picture" placeholder=Picture" class="form-control">-->
<!--                                    </div>-->
<!--                                </div>-->
                                <div class="form-group">
                                    <label for="picture" class="col-sm-12 col-md-12 col-lg-12  control-label">Picture</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="file" name="picture" id="picture" placeholder=Picture" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 col-md-12 col-lg-12  col-sm-offset-3">
                                        <span class="help-block">* Required fields</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="firstName" class="col-sm-12 col-md-12 col-lg-12 control-label">First Name</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="firstName" name="firstName" placeholder="First Name" class="form-control" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="lastName" class="col-sm-12 col-md-12 col-lg-12  control-label">Last Name</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="lastName" name="lastName" placeholder="Last Name" class="form-control" autofocus>
                                    </div>
                                </div>                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="addressLine1" class="col-sm-12 col-md-12 col-lg-12  control-label">Address 1</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="addressLine1" name="addressLine1" placeholder="Street address 1" class="form-control" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="addressLine2" class="col-sm-12 col-md-12 col-lg-12  control-label">Address 2</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="addressLine2" name="addressLine2" placeholder="Street address 2 (Optional)" class="form-control" autofocus>
                                    </div>
                                </div>                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="contactNo1" class="col-sm-12 col-md-12 col-lg-12  control-label">Contact number</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="number" id="contactNo1" name="contactNo1" placeholder="Contact number" class="form-control" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="contactNo2" class="col-sm-12 col-md-12 col-lg-12 control-label">Contact number (Optional)</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="number" id="contactNo2" name="contactNo2" placeholder="Contact number (Optional)" class="form-control" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="email" class="col-sm-12 col-md-12 col-lg-12 control-label">Email* </label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="email" id="email" placeholder="Email" class="form-control" name= "email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="birthDate" class="col-sm-12 col-md-12 col-lg-12  control-label">Date of Birth*</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="date" id="dob" name="dob" class="form-control">
                                    </div>
                                </div>                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="gender" class="col-sm-12 col-md-12 col-lg-12 control-label">Gender* </label>
                                    <div class="col-sm-12 col-md-12 col-lg-12" style="left: 20%">
                                        <div class="radio">
                                            <label><input type="radio" name="gender" id="gender" value="male" checked> &nbsp;&nbsp;     Male</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="gender" id="gender" value="fe-male">    &nbsp;&nbsp; Female</label>
                                        </div>


                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">

                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="Password" class="col-sm-12 col-md-12 col-lg-12 control-label">Password*</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="password" id="Password" name="Password" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="confirmPassword" class="col-sm-12 col-md-12 col-lg-12  control-label">Confirm Password*</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="password" id="confirmPassword" name="confirmPassword" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">

                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="centerID" class="col-sm-12 col-md-12 col-lg-12 control-label">Center ID</label>
                                    <div class="input-group col-sm-12 col-md-12 col-lg-12">
                                        <select class="custom-select" id="centerID" name="centerID">
                                            <option value=""></option>

                                            <?php

                                            include("../Common/config.php");
                                            //
                                            $addQuery = "select * from `tbl_collectioncenter`";
                                            $result = $con->query($addQuery);
                                            //
                                            //                                        if ($result) {
                                            //                                            foreach ($result as $row) {
                                            ?>

                                            <?php
                                            while ($rows = $result->fetch_assoc()) {
                                                $ccID= $rows['centerID'];
                                                $ccName= $rows['region'];
                                                echo "<option value='$ccID'>$ccName</option>";


                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">

                            </div>
                        </div>
                    </div>

                    <br><br>
                    <div class="container" style="margin-left: 30%">
                        <button type="submit" name="addUser" id="addUser" class="btn btn-primary btn-block" style="width: 50%; align-content: center">Register</button>
                        <button type="submit" name="updateUser" id="updateUser" class="btn btn-primary btn-block" style="width: 50%; align-content: center" disabled>Update</button>
                    </div>

                    <br><br>
                </FORM>
            </div>

            <div class="row">
                <div class="container-fluid ">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                        <table id="userTable" class="table table-bordered table-hover table-light">
                            <thead>
                            <tr>
                                <th>User ID</th>
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
                                    <button class="btn-danger btn-sm" onclick="confirmDelete('<?= $row['empID'];?>')" value="<?= $row['empID']; ?>">Delete</button>
                                    <button class="btn-info btn-sm" onclick="editUser()" value="<?= $row['empID']; ?>">Edit</button>

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


</div>


<?php
include("../Common/Footer.php");
include("../Common/Scripts.php");
?>
<!--</div>-->
<script>

    function confirmDelete(id){
        bootbox.confirm({
            title: "",
            message: "Do you want to delete this record? This cannot be undone.",

            buttons: {
                cancel: {
                    label: '<i class="fa fa-times"></i> Cancel'
                },
                confirm: {
                    label: '<i class="fa fa-check"></i> Confirm'
                }
            },
            callback: function (result) {
                if (result){
                    $.ajax({
                        type: "POST",
                        url: "CRUDuser.php",
                        data: {Delete:id},
                        cache: false,
                        dataType:'json',
                        success: function(data){
                            if(data.result){
                                alert(data.message);
                                location.reload()
                            }
                        }
                    });
                }
            }
        });

    }

    function editUser() {
        document.getElementById('addUser').disabled=true;
        document.getElementById('updateUser').disabled=false;

        var table = document.getElementById('userTable'),index;

        for (var  i = 1 ; i < table.rows.length ; i++){
            table.rows[i].onclick = function () {
                rIndex = this.rowIndex;
                document.getElementById("userID").value = this.cells[0].innerHTML;
                document.getElementById("firstName").value = this.cells[3].innerHTML;

                // $('#myInput').val( this.cells[0].innerHTML);



            }
        }
    }
</script>
</body>
