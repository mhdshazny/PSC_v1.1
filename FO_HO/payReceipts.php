<head>

    <title>Payment receipts</title>


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
                    <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">Customer payment receipts</p>

                </div>

                <?php
                $Priority = 'AdminUserReg';
                ?>
                <FORM action="SaveReceipts_dB.php" method="POST" class="col" enctype="multipart/form-data">
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
                                    <label for="SaleID" class="col-sm-12 col-md-12 col-lg-12 control-label">Sale ID </label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="SaleID" name="SaleID"  placeholder="Sale ID" class="form-control" >
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="ioID" class="col-sm-12 col-md-12 col-lg-12 control-label">Issue order ID </label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">

                                        <input type="text" id="ioID" name="ioID"  placeholder="Issue order ID" class="form-control" >
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
                                        <input type="text" id="UnitPrice" name="UnitPrice" placeholder="Unit price" class="form-control" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="Quantity" class="col-sm-12 col-md-12 col-lg-12  control-label">Quantity</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="Quantity" name="Quantity" placeholder="Quantity" class="form-control" autofocus>
                                    </div>
                                </div>
                            </div>

                            <div class="container" style="margin-left: 30%">
                                <button type="button" name="cal" id="cal" class="btn btn-primary btn-block" style="width: 50%; align-content: center" onclick="calTot()">Calculate</button>
                            </div>

                        </div>


                        <div class="row">

                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="Total" class="col-sm-12 col-md-12 col-lg-12  control-label">Total amount</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="Total" name="Total" placeholder="Total" class="form-control" autofocus>
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
                        <button type="submit" name="addBill" id="addBill" class="btn btn-primary btn-block" style="width: 50%; align-content: center">Add Bill</button>
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
                                <th>Date</th>
                                <th>Sale ID</th>
                                <th>IoID</th>
                                <th>Paddy type</th>
                                <th>Unit price</th>
                                <th>Qty</th>
                                <th>Amount</th>



                            </tr>
                            </thead>
                            <tbody>


                            <?php
                            include("../Common/config.php");
                            $loadTableIssueOrder = "SELECT * FROM `tbl_issueorder`,`tbl_paymentreceipts` WHERE tbl_issueorder.ioID = tbl_paymentreceipts.ioID";
//                            $loadTablePayReceipts = "SELECT * FROM `tbl_paymentreceipts`";
//                            $result1 = $con->query($loadTablePayReceipts);
                            $result2 = $con->query($loadTableIssueOrder);

//                            if ($result1) {
                                    ?>
                                    <tr>
<!--                                        --><?php
//
//                                        foreach ($result1 as $rows) {
//
//                                        ?>
<!---->
<!--                                            <td>--><?//= $rows['DateOn']; ?><!--</td>-->
<!--                                            <td>--><?//= $rows['saleID']; ?><!--</td>-->
<!---->
<!---->
<!---->
<!--                                            --><?php
//                                        }
//                                        }
//                                        ?>
                                    <!--</tr>
                                <tr>-->
                                        <?php
                                        if ($result2){
                                        foreach ($result2 as $row) {

                                        ?>
                                        <td><?= $row['DateOn']; ?></td>
                                        <td><?= $row['saleID']; ?></td>
                                        <td><?= $row['ioID']; ?></td>
                                        <td><?= $row['paddyType']; ?></td>
                                        <td><?= $row['unitPrice']; ?></td>
                                        <td><?= $row['Qty']; ?></td>
                                        <td><?= $row['netTotal']; ?></td>

                                        <td>
                                            <button class="btn-danger btn-sm" onclick="confirmDelete('<?= $row['saleID'];?>')" value="<?= $row['saleID']; ?>">Delete</button>
                                            <button class="btn-info btn-sm" onclick="editUser()" value="<?= $row['saleID']; ?>">Edit</button>

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


    //Calculate total
    function calTot() {


        let quantity = document.getElementById('Quantity');
        let unitPrice = document.getElementById('UnitPrice');
        let  tot =document.getElementById('Total');
        // let tot = 0;
        let uP=-0;
        let  qty=0;
        uP = parseInt(unitPrice.value);
        qty = parseInt(quantity.value);
        // let Tot=parseInt(tot.value);


        if(uP > 0 && qty >= 0){

            Tot = qty*uP;
            document.getElementById('Total').value = Tot;


        }
        else {

            document.getElementById('Total').value = "Insert proper values";

        }



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
