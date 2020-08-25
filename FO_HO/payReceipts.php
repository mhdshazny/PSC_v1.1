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
                                    <label for="ioID" class="control-label col-sm-12 col-md-12 col-lg-12">Issue Order ID</label>
                                    <div class="input-group col-sm-12 col-md-12 col-lg-12">
                                        <div class="input-group">
                                            <button type="button" class="btn btn-outline-primary ion-search" data-toggle="modal"
                                                    data-target=".bd-example-modal-lg" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                            <input type="text" name="ioID" id="ioID" class="form-group input-group form-control  col-sm-12 col-md-12 col-lg-12" placeholder="Issue Order ID" aria-label="" aria-describedby="basic-addon1">                                <!--                                  modal-->

                                        </div>

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
                                                                           for="orangeForm-name1" >Issue Order ID</label>
                                                                    <input type="text" id="issueOrderID_Modal" name="issueOrderID_Modal"
                                                                           class="form-control validate"
                                                                           onkeyup="issueOrderID_Search()">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="md-form mb-3">
                                                                    <i class="fas ion-android-create prefix grey-text"></i>
                                                                    <label data-error="wrong" data-success="right"
                                                                           for="orangeForm-email1">Customer Name</label>
                                                                    <input type="text" id="customerName_Modal" name="customerName_Modal"
                                                                           onkeyup="customerName_Search()" class="form-control validate">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-12 col-sm-12">
                                                                <table id="issueOrderTableModal" class="col-md-12 col-lg-12 col-sm-12 table table-bordered table-dark table-hover">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Issue Order ID</th>
                                                                        <th>Paddy Type</th>
                                                                        <th>Quantity</th>
                                                                        <th>Unit Price</th>
                                                                        <th>Net Total</th>

                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                    <?php
                                                                    include ("../Common/config.php");

                                                                    $query="Select * from `tbl_issueorder` where `isActive`=1";
                                                                    $result = $con->query($query);
                                                                    if ($result){
                                                                    foreach ($result as $rows){
                                                                    ?>
                                                                    <tr>
                                                                        <td><?=$rows['ioID'];?></td>
                                                                        <td><?=$rows['paddyType'];?></td>
                                                                        <td><?=$rows['totalQuantity'];?></td>
                                                                        <td><?=$rows['unitPrice'];?></td>
                                                                        <td><?=$rows['netTotal'];?></td>

                                                                        <td>
                                                                            <button class="btn-info btn-sm" data-dismiss="modal" onclick="selectIssueOrderModal()" value="<?= $rows['ioID']; ?>">Select</button>
                                                                        </td>
                                                                        <?php
                                                                        }
                                                                        }
                                                                        ?>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <script>
                                                                    function issueOrderID_Search() {
                                                                        // alert();
                                                                        let input, filter, table, tr, td, i,txtValue;
                                                                        input = document.getElementById("issueOrderID_Modal");
                                                                        filter = input.value.toUpperCase();
                                                                        table = document.getElementById("issueOrderTableModal");
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
                                                                    // function customerName_Search() {
                                                                    //     // alert();
                                                                    //     let input, filter, table, tr, td, i,txtValue;
                                                                    //     input = document.getElementById("customerName_Modal");
                                                                    //     filter = input.value.toUpperCase();
                                                                    //     table = document.getElementById("customerTableModal");
                                                                    //     tr = table.getElementsByTagName("tr");
                                                                    //     for (i = 0; i < tr.length; i++) {
                                                                    //         td = tr[i].getElementsByTagName("td")[1];
                                                                    //         if (td) {
                                                                    //             txtValue = td.textContent || td.innerText;
                                                                    //             if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                                                    //                 tr[i].style.display = "";
                                                                    //             } else {
                                                                    //                 tr[i].style.display = "none";
                                                                    //             }
                                                                    //         }
                                                                    //     }
                                                                    //
                                                                    //
                                                                    // }
                                                                    function selectIssueOrderModal() {

                                                                        var table = document.getElementById('issueOrderTableModal'),index;

                                                                        for (var  i = 1 ; i < table.rows.length ; i++){
                                                                            table.rows[i].onclick = function () {
                                                                                rIndex = this.rowIndex;
                                                                                document.getElementById("ioID").value = this.cells[0].innerHTML;
                                                                                document.getElementById("paddyType").value = this.cells[1].innerHTML;
                                                                                document.getElementById("totalQuantity").value = this.cells[2].innerHTML;
                                                                                document.getElementById("unitPrice").value = this.cells[3].innerHTML;
                                                                                document.getElementById("netTotal").value = this.cells[4].innerHTML;

                                                                            }
                                                                        }
                                                                    }

                                                                </script>
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

                                        <!---->
                                    </div>
                                </div>
                            </div>




                            </div>



                        </div>
                        <div class="row">

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
                                    <label for="unitPrice"class="col-sm-12 col-md-12 col-lg-12 control-label">Unit Price</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="unitPrice" name="unitPrice" placeholder="Unit Price" class="form-control" required autofocus>
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
                                    <label for="netTotal" class="col-sm-12 col-md-12 col-lg-12 control-label">Net Total</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="netTotal" name="netTotal" placeholder="Net Total" class="form-control" required autofocus>
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
                                        <td><?= $row['totalQuantity']; ?></td>
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
