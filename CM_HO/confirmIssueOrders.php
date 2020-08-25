<head>

    <title>Confirm Issue Orders</title>


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
                    <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">Confirm Issue Orders</p>

                </div>

                <?php
                $Priority = 'AdminUserReg';
                ?>
                <FORM action="confirmIssueOrders_dB.php" method="POST" class="col" class="was-validated"">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 ">
                                <div class="form-group">
                                    <label for="OrderDetails" class="col-sm-12 col-md-12 col-lg-12 bg-info mt-4">Order Details</label>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="issueOrderID" class="col-sm-12 col-md-12 col-lg-12 control-label">Issue Order ID</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="issueOrderID" name="issueOrderID" placeholder="Issue Order ID" class="form-control" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="orderDateOn" class="col-sm-12 col-md-12 col-lg-12 control-label">Ordered Date</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="date" id="orderDateOn" name="orderDateOn" placeholder="Date" class="form-control" required autofocus>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">

                                <div class="form-group">
                                    <label for="region" class="col-sm-12 col-md-12 col-lg-12 control-label">Region</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="region" name="region" placeholder="region" class="form-control" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="customer" class="col-sm-12 col-md-12 col-lg-12 control-label">Customer</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="customer" name="customer" placeholder="Customer Name" class="form-control" required autofocus>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="PaddyType" class="col-sm-12 col-md-12 col-lg-12 control-label">Paddy Type</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="paddyType" name="paddyType" placeholder="Paddy Type" class="form-control" required autofocus>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="quantity"class="col-sm-12 col-md-12 col-lg-12 control-label">Quantity</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="quantity" name="quantity" placeholder="Paddy Quantity" class="form-control" required autofocus>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="unitPrice" class="col-sm-12 col-md-12 col-lg-12 control-label">Unit Price</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="unitPrice" name="unitPrice" placeholder="Unit Price" class="form-control" required autofocus>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="netTotal" class="col-sm-12 col-md-12 col-lg-12 control-label">Net Total</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="netTotal" name="netTotal" placeholder="Net Total" class="form-control" required autofocus>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 ">
                                <div class="form-group">
                                    <label for="CenterDetails" class="col-sm-12 col-md-12 col-lg-12 bg-info mt-4">Center and Vehicle Details</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="centerID1" class="col-sm-12 col-md-12 col-lg-12 control-label">Center ID 1</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="centerID1" name="centerID1" placeholder="Center ID need to add find option" class="form-control" required autofocus>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="quantity1" class="col-sm-5 control-label">Center 1 Quantity (kg)</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="quantity1" name="quantity1" placeholder="Quantity(Kg)" class="form-control" required autofocus>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 ">
                        <div class="form-group">
                            <label for="centerID2" class="col-sm-12 col-md-12 col-lg-12 control-label">Center ID 1</label>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <input type="text" id="centerID2" name="centerID2" placeholder="Center ID need to add find option" class="form-control" required autofocus>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                    </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="quantity2" class="col-sm-5 control-label">Center 2 Quantity (kg)</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="quantity2" name="quantity2" placeholder="Quantity(Kg)" class="form-control" required autofocus>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="vehicleID" class="col-sm-12 col-md-12 col-lg-12 control-label">Center ID 1</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="vehicleID" name="vehicleID" placeholder="Vehicle ID need to add find option" class="form-control" required autofocus>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="capacity" class="col-sm-5 control-label">Vehicle Capacity</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="capacity" name="capacity" placeholder="Capacity(Kg)" class="form-control" required autofocus>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">

                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">

                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 ">
                                <div class="form-group">
                                    <label for="ContactDetails" class="col-sm-12 col-md-12 col-lg-12 bg-info mt-4">Pre Loaded</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="isActive" class="col-sm-12 col-md-12 col-lg-12  control-label">is Active</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="checkbox" id="isActive" name="isActive" value="1" class="form-control" checked>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <br><br>
                    <div class="container" style="margin-left: 30%">
                        <button type="submit" name="addUser" id="addUser" class="btn btn-primary btn-block" style="width: 50%; align-content: center">Register</button>
                        <button type="submit" name="updateUser" id="updateUser" class="btn btn-primary btn-block" style="width: 50%; align-content: center" disabled>Update</button>
                        <button type="button" name="reload" id="reload" class="btn btn-danger btn-block" style="width: 50%; align-content: center" onclick="location.reload()">Reload</button>
                    </div>

                    <br><br>
                </FORM>
            </div>

            <div class="row">
                <div class="container-fluid ">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                        <table id="issueOrderTable" class="table table-bordered table-hover table-light">
                            <thead>
                            <tr>
                                <th>Issue OrderID</th>
                                <th>Order Date</th>
                                <th>Customer ID</th>
                                <th>Customer Name</th>
                                <th>Contact No</th>
                                <th>Region</th>
                                <th>Paddy Type</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>NetTotal</th>
                                <th>isActive</th>
                                <th>Actions</th>


                            </tr>
                            </thead>
                            <tbody>


                            <?php
                            include("../Common/config.php");
                            $loadTable = "SELECT * FROM `tbl_issueorder`";
                            $result = $con->query($loadTable);
                            if ($result) {
                                foreach ($result as $row) {
                                    ?>
                                    <tr>
                                        <td><?= $row['ioID']; ?></td>
                                        <td><?= $row['OrderDateOn']; ?></td>
                                        <td><?= $row['customerID']; ?></td>
                                        <td><?= $row['customer']; ?></td>
                                        <td><?= $row['contactNo1']; ?></td>
                                        <td><?= $row['NIC']; ?></td>
                                        <td><?= $row['addressLine1']; ?></td>
                                        <td><?= $row['contactNo1']; ?></td>
                                        <td><?= $row['email']; ?></td>
                                        <td><?= $row['gender'] ?></td>
                                        <td><?= $row['isActive']; ?></td>
                                        <td>
                                            <button class="btn-danger btn-sm" onclick="confirmDelete('<?= $row['empID'];?>')" value="<?= $row['empID']; ?>">Delete</button>
                                            <button class="btn-info btn-sm" onclick="editUser()" value="<?= $row['empID']; ?>">Edit</button>

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
        document.getElementById('picBox').hidden=false;

        var dir = "../Upload/User/";
        var table = document.getElementById('userTable'),index;

        for (var  i = 1 ; i < table.rows.length ; i++){
            table.rows[i].onclick = function () {
                rIndex = this.rowIndex;
                document.getElementById("userID").value = this.cells[0].innerHTML;
                document.getElementById("roleID").value = this.cells[1].innerHTML;
                document.getElementById("centerID").value = this.cells[2].innerHTML;
                document.getElementById("firstName").value = this.cells[3].innerHTML;
                document.getElementById("lastName").value = this.cells[4].innerHTML;
                document.getElementById("addressLine1").value = this.cells[5].innerHTML;
                document.getElementById("contactNo1").value = this.cells[6].innerHTML;
                document.getElementById("email").value = this.cells[7].innerHTML;
                document.getElementById("dob").value = this.cells[8].innerHTML;

                let gender_temp = this.cells[9].innerHTML;
                if (gender_temp == "1"){
                    document.getElementById("male").checked=true;
                }
                else {
                    document.getElementById("female").checked=true

                }

                document.getElementById("addressLine2").value = this.cells[12].innerHTML;
                document.getElementById("contactNo2").value = this.cells[13].innerHTML;
                document.getElementById("Password").value = this.cells[14].innerHTML;
                document.getElementById("confirmPassword").value = this.cells[14].innerHTML;
                // document.getElementById("picBox").src = dir + this.cells[15].innerHTML;
                // alert(this.cells[15].innerHTML)
                document.images['picBox'].src = dir +this.cells[15].innerHTML;


                document.getElementById('isActive').disabled=false;
                document.getElementById('userID').readOnly=true;
                document.getElementById('confirmPassword').readOnly=true;


                // $('#myInput').val( this.cells[0].innerHTML);



            }
        }
    }
</script>
</body>
