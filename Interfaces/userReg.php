<head>

    <title>User Registration</title>


    <!--    Resources -->

    <?php
    include("../Common/Header.php");
    //    include ("../Common/config.php");
    ?>

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
        <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">User Registration</p>

    </div>

    <FORM action="userReg_dB.php" method="POST" enctype="">
        <div class="container-fluid" style="width: 80%">
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="userID" class="col-sm-3 control-label">User ID</label>
                        <div class="col-sm-9">
                            <input type="text" value="USER0001" id="userID" placeholder="userID" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstName" class="col-sm-3 control-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="firstName" placeholder="First Name" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="addressLine1" class="col-sm-3 control-label">Address 1</label>
                        <div class="col-sm-9">
                            <input type="text" id="addressLine1" placeholder="Street address 1" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactNo1" class="col-sm-3 control-label">Contact number</label>
                        <div class="col-sm-9">
                            <input type="text" id="contactNo1" placeholder="Contact number" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email* </label>
                        <div class="col-sm-9">
                            <input type="email" id="email" placeholder="Email" class="form-control" name= "email">
                        </div>
                    </div>
                </div>
                <!--                Next column -->
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="roleID" class="col-sm-3 control-label">User ID</label>
                        <div class="col-sm-9">
                            <input type="text" value="ROLE_EMP" id="roleID" placeholder="roleID" class="form-control" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="lastName" placeholder="Last Name" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="addressLine2" class="col-sm-3 control-label">Address 2</label>
                        <div class="col-sm-9">
                            <input type="text" id="addressLine2" placeholder="Street address 2 (Optional)" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactNo2" class="col-sm-5 control-label">Contact number (Optional)</label>
                        <div class="col-sm-9">
                            <input type="text" id="contactNo2" placeholder="Contact number (Optional)" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                        <div class="col-sm-9">
                            <input type="date" id="birthDate" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
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
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="centerID" class="col-sm-3 control-label">Center ID</label>
                        <div class="col-sm-9">
                            <input type="text" id="centerID" placeholder="Center ID" class="form-control" autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="regionID" class="col-sm-3 control-label">Region ID</label>
                        <div class="col-sm-9">
                            <input type="text" id="regionID" placeholder="Region ID" class="form-control" autofocus>
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
</div>


<?php
include("../Common/Footer.php");
include("../Common/Scripts.php");
?>

</body>
