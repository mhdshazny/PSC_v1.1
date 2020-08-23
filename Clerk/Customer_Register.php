<head>

    <title>Customer Registration</title>


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
        <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">Customer Registration</p>

    </div>

    <?php
    $Priority = 'ClerkCustomerRegistration';
    ?>
    <FORM action="Customer_Register_dB.php" method="POST" enctype="multipart/form-data">
        <div class="container-fluid" style="width: 80%">
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="customerID" class="col-sm-3 control-label">Customer ID</label>
                        <div class="col-sm-9">
                            <input type="text" id="customerID" name="customerID" placeholder="customerID" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstName" class="col-sm-3 control-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="firstName" name="firstName" placeholder="First Name" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactNo1" class="col-sm-3 control-label">Contact number</label>
                        <div class="col-sm-9">
                            <input type="text" id="contactNo1" name="contactNo1" placeholder="Contact number" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="addressLine1" class="col-sm-3 control-label">Address 1</label>
                        <div class="col-sm-9">
                            <input type="text" id="addressLine1" name="addressLine1" placeholder="Street Address 1" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="region" class="col-sm-3 control-label">Region</label>
                        <div class="col-sm-9">
                            <input type="region" id="region" placeholder="region" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="NIC" class="col-sm-3 control-label">NIC</label>
                        <div class="col-sm-9">
                            <input type="NIC" id="NIC" placeholder="NIC No" class="form-control" autofocus>
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

                        <div class="col-sm-9">

                        </div>
                    </div>
                </div>
                <!--                Next column -->
                <div class="col-sm-5">
                    <div class="form-group">
                        <div class="col-sm-9">
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
                        <div class="col-sm-9">
                        </div>
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="col-sm-9">

                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">

                        <div class="col-sm-9">

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

                        <div class="col-sm-9">

                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">

                        <div class="col-sm-9">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br>
        <div class="container" style="margin-left: 30%">
            <button type="submit" name="addCustomer" id="addCustomer" class="btn btn-primary btn-block" style="width: 50%; align-content: center">Save</button>
        </div>

        <br><br>
    </FORM>
</div>


<?php
include("../Common/Footer.php");
include("../Common/Scripts.php");
?>

</body>
