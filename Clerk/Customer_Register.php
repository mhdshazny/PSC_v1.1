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


        <form action="CustomerReg_dB.php" method="POST" enctype="multipart/form-data">
            <div class="container-fluid" style="width: 80%">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="form-group">

                            <div class="col-sm-9">

                            </div>

                            <div class="form-group">
                                <label for="CustomerID" class="col-sm-3 control-label">Customer ID</label>
                                <div class="col-sm-9">
                                    <input type="text" id="CustomerID" name="CustomerID" placeholder="Customer ID" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contactNo" class="col-sm-3 control-label">Contact number</label>
                                <div class="col-sm-9">
                                    <input type="text" id="contactNo" name="contactNo" placeholder="Contact number" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="addressLine" class="col-sm-3 control-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" id="addressLine" name="addressLine" placeholder="Street address" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="NIC" class="col-sm-3 control-label">NIC</label>
                                <div class="col-sm-9">
                                    <input type="text" id="NIC No" name="NIC No" placeholder="NIC No" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="CenterID" class="col-sm-3 control-label">Center ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="CenterID" name="CenterID" placeholder="CenterID" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="gender" class="col-sm-3 control-label">Gender</label>
                                        <div class="col-sm-3" style="left: 20%">
                                            <div class="radio">
                                                <label><input type="radio" name="gender" id="gender" value="male" checked> &nbsp;&nbsp;     Male</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="gender" id="gender" value="fe-male">    &nbsp;&nbsp; Female</label>
                                            </div>
                                            <div class="form-group">
                                            </div>



                                        </div>


                                        <br>
                                    </div>
                                    <br><br>
                                    <div class="row">

                                        <div class="col-sm-5">

                                            <div class="form-group">
                                                <div class="col-sm-9 col-sm-offset-3">
                                                    <span class="help-block">* Required fields</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="container" style="margin-left: 30%">
                                    <button type="submit" name="Save" id="Save" class="btn btn-primary btn-block" style="width: 30%; align-content: center">Save</button>
                                </div>

                                <br>
                                <div class="container" style="margin-left: 30%">
                                    <button type="submit" name="Update" id="Update" class="btn btn-primary btn-block" style="width: 30%; align-content: center">Update</button>
                                </div>
                                <br>
                                <div class="container" style="margin-left: 30%">
                                    <button type="submit" name="Delete" id="Delete" class="btn btn-primary btn-block" style="width: 30%; align-content: center">Delete</button>
                                </div>

        </form>
    </div>
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

    </body>
<?php
