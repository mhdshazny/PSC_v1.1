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
<body class="bg-dark" style="width: 100%">

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
<div class="row" style="min-height: 87%; background-color: #011d21;  margin: 0px; padding-left: 1%;">
    <?php
    include("../Common/SideNavBar.php");
    ?>
    <div class="col-md-10 col-lg-10 col-sm-10 d-none d-md-block container text-white" style="background-color: #011d21;">
        <div class="container-fluid rounded" style="min-height: 100%; background-color: #04333b;">
            <div class="row">
                <div class="container-fluid">
                    <br>
                    <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">Customer Registration</p>

                </div>

                <?php
                $Priority = 'AdminUserReg';
                ?>
                <FORM action="Customer_Register_dB.php" method="POST" class="col" enctype="multipart/form-data">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 ">
                                <div class="form-group">
                                    <label for="ContactDetails" class="col-sm-12 col-md-12 col-lg-12 rounded bg-info mt-4">Customer Details</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="customerID" class="col-sm-12 col-md-12 col-lg-12 control-label">Customer ID</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <?php
                                        include ("../Common/config.php");
                                        $query="SELECT * FROM `tbl_employee` ORDER BY `empID` DESC LIMIT 1";
                                        $result = $con->query($query);
                                        $numRows = mysqli_num_rows($result);
                                        $newID="USER00001";
                                        if ($numRows>0){
                                            foreach ($result as $rows) {


                                                $prevID= $rows['empID'];
                                                $newID = substr($prevID,4,5);
                                                $newID = $newID + 1;
                                                $newID = str_pad($newID, 5, "0", STR_PAD_LEFT);


                                                ?>
                                                <input type="text" id="customerID" name="customerID" placeholder="customerID" value="CUS<?= $newID?>" class="form-control" >
                                                <?php
                                            }
                                        }
                                        $con->close();
                                        ?>


                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="NIC" class="col-sm-12 col-md-12 col-lg-12 control-label">NIC </label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="NIC" name="NIC" placeholder="NIC No" class="form-control" >
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
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <label for="gender" class="col-sm-12 col-md-12 col-lg-12 control-label">Gender* </label>
                                <div class="col-sm-12 col-md-12 col-lg-12" style="left: 20%">
                                    <div class="radio col-auto float-left">
                                        <label><input type="radio" name="gender" id="male" value="1" checked> &nbsp;&nbsp;     Male</label>
                                    </div>
                                    <div class="radio col-auto float-left">
                                        <label><input type="radio" name="gender" id="female" value="2">    &nbsp;&nbsp; Female</label>
                                    </div>
                                </div>
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
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4 col-lg-4 ">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 ">
                                <div class="form-group">
                                    <label for="ContactDetails" class="col-sm-12 col-md-12 col-lg-12 rounded bg-info mt-4">Contact Details</label>
                                </div>
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
                                <div class="form-group">
                                    <label for="email" class="col-sm-12 col-md-12 col-lg-12 control-label">Email* </label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="email" id="email" placeholder="Email" class="form-control" name= "email">
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
                                    <label for="ContactDetails" class="col-sm-12 col-md-12 col-lg-12 rounded bg-info mt-4">Pre Loaded</label>
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
                        <button type="button" name="temp" id="temp" class="btn btn-danger btn-block" style="width: 50%; align-content: center" data-target=".bd-example-modal-lg" data-toggle="modal" >temp</button>

                        <!--Modal-->
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <!--                                    <header class="modal-header">Hello world</header>-->
                                    <!--                                    <div class="modal-body">-->
                                    <!--                                        <div class="container">-->
                                    <!--                                            <button class="close" data-dismiss="modal"-->
                                    <!--                                                    aria-label="Close">-->
                                    <!---->
                                    <!--                                            </button>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <div class="modal-header">
                                        <h5 class="modal-title" style="color: #011d21" id="exampleModalLabel">New message</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" style="color: #011d21; margin-left: 0%; margin-right: 0%" >

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="md-form mb-2">
                                                    <i class="fas fa-user prefix grey-text"></i>
                                                    <label data-error="wrong" data-success="right"
                                                           for="orangeForm-name1" >Customer ID</label>
                                                    <input type="text" id="customerID_Modal" name="customerID_Modal"
                                                           class="form-control validate"
                                                           onkeyup="customerID_Search()">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="md-form mb-3">
                                                    <i class="fas ion-android-create prefix grey-text"></i>
                                                    <label data-error="wrong" data-success="right"
                                                           for="orangeForm-email1">Customer Name</label>
                                                    <input type="text" id="customerNamemodal" name="customerNamemodal"
                                                           class="form-control validate">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12 col-sm-12">
                                                <table id="customerTableModal" class="col-md-12 col-lg-12 col-sm-12 table table-bordered table-dark table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Customer ID</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Contact No</th>
                                                        <th>Email</th>
                                                        <th>Region</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php
                                                    include ("../Common/config.php");

                                                    $query="Select * from `tbl_customer` where `isActive`=1";
                                                    $result = $con->query($query);
                                                    if ($result){
                                                    foreach ($result as $rows){
                                                    ?>
                                                    <tr>
                                                        <td><?=$rows['customerID'];?></td>
                                                        <td><?=$rows['firstName'];?></td>
                                                        <td><?=$rows['lastName'];?></td>
                                                        <td><?=$rows['contactNo1'];?></td>
                                                        <td><?=$rows['email'];?></td>
                                                        <td><?=$rows['region'];?></td>
                                                        <td>
                                                            <button class="btn-info btn-sm" onclick="selectCustomer()" value="<?= $row['customerID']; ?>">Select</button>
                                                        </td>
                                                        <?php
                                                        }
                                                        }
                                                        ?>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Send message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--modal-->
                    </div>

                    <br><br>
                </FORM>
            </div>

            <div class="row">
                <div class="container-fluid ">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                        <table id="userTable" class="table table-bordered table-hover table-light table-responsive">
                            <thead>
                            <tr>
                                <th>Customer ID</th
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
            message: "Do you want to delete this record? This cannot be undone",

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
                        url: "CRUDcustomer.php",
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
