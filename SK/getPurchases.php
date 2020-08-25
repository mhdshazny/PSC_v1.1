<head>

    <title>Purchases</title>

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
                    <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">Purchases</p>

                </div>

                <?php
                $Priority = 'AdminUserReg';
                ?>
                <FORM action="getPurchases_dB.php" method="POST" class="col" enctype="multipart/form-data">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 ">
                                <div class="form-group">
                                    <label for="Details" class="col-sm-12 col-md-12 col-lg-12 bg-info mt-4"> Details</label>
                                </div>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="Date" class="col-sm-12 col-md-12 col-lg-12 control-label">Date </label>

                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="date" id="Date" name="Date"  class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">

                                    <label for="StockID" class="col-sm-12 col-md-12 col-lg-12 control-label">Stock ID</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">

                                        <input type="text" id="StockID" name="StockID" placeholder="Stock ID" class="form-control" autofocus>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="PoID" class="col-sm-12 col-md-12 col-lg-12 control-label">PurchaseOrder ID </label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">

                                        <input type="text"  id="PoID" name="PoID" placeholder="PurchaseOrder ID" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>


                        <div class="col-sm-4 col-md-4 col-lg-4 ">
                        <div class="form-group">
                            <label for="FarmerID" class="col-sm-12 col-md-12 col-lg-12  control-label">Farmer ID</label>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <input type="text" id="FarmerID" name="FarmerID" placeholder="Farmer ID" class="form-control" readonly>
                            </div>
                        </div>
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 ">
                        <div class="form-group">
                            <label for="PaddyType" class="col-sm-12 col-md-12 col-lg-12 control-label" >Paddy Type</label>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <input type="text" id="PaddyType" name="PaddyType" placeholder="PaddyType" class="form-control" readonly>
                            </div>
                        </div>
                        </div>




                        <div class="col-sm-4 col-md-4 col-lg-4 ">
                            <div class="form-group">
                                <label for="Description" class="col-sm-12 col-md-12 col-lg-12  control-label"> Description</label>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <input type="textarea" id="Description" name="Description" placeholder="Description" height="500" class="form-control" readonly>
                                </div>
                            </div>

                        </div>

                    </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 ">
                                <div class="form-group">
                                    <label for="Amount" class="col-sm-12 col-md-12 col-lg-12 bg-info mt-4">Amount</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="UnitPrice" class="col-sm-12 col-md-12 col-lg-12 control-label">Unit price</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="UnitPrice" name="UnitPrice" placeholder="Unit price" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="Quantity" class="col-sm-12 col-md-12 col-lg-12  control-label">Quantity</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="Quantity" name="Quantity" placeholder="Quantity" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>



                        </div>


                        <div class="row">

                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="Total" class="col-sm-12 col-md-12 col-lg-12  control-label">Total amount</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="Total" name="Total" placeholder="Total" class="form-control" readonly>
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


                    </div>

                    <br><br>
                    <div class="container" style="margin-left: 30%">
                        <button type="button" name="search" id="search" class="btn btn-primary btn-block" style="width: 50%; align-content: center">search</button>
                        <button type="submit" name="updateUser" id="updateUser" class="btn btn-primary btn-block" style="width: 50%; align-content: center" disabled>Update</button>
                        <button type="button" name="reload" id="reload" class="btn btn-danger btn-block" style="width: 50%; align-content: center" onclick="location.reload()">Reload</button>
                    </div>

                    <br><br>
                </FORM>
            </div>

            <div class="row">
                <div class="container-fluid ">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                        <table id="cashAllocateTable" class="table table-bordered table-hover table-light">
                            <thead>
                            <tr>
                                <th>Stock_ID</th>
                                <th>Paddy Type</th>
                                <th>Quantity</th>



                            </tr>
                            </thead>
                            <tbody>



                            <?php
                            include("../Common/config.php");
                            $loadTable = "SELECT * FROM `tbl_purchaseorder` ";
                            $result = $con->query($loadTable);
                            if ($result) {
                                foreach ($result as $row) {
                                    ?>
                                    <tr>
                                        <td><?= $row['stockID']; ?></td>
                                        <td><?= $row['paddyType']; ?></td>
                                        <td><?= $row['Qty']; ?></td>

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
