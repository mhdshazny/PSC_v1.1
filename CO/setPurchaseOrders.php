<head>

    <title>Purchase Orders</title>


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
                    <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">Purchase Order</</p>

                </div>

                <?php
                $Priority = 'AdminUserReg';
                ?>
                <FORM action="setPurchaseOrder_dB.php" method="POST" class="col" enctype="multipart/form-data">
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
                                    <label for="PurchaseOrderID" class="col-sm-12 col-md-12 col-lg-12 control-label">Purchase Order ID</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">

                                        <?php
                                        include ("../Common/config.php");
                                        $query="SELECT * FROM `tbl_purchaseorder` ORDER BY `poID` DESC LIMIT 1";
                                        $result = $con->query($query);
                                        $numRows = mysqli_num_rows($result);
                                        $newID="PO001";
                                        if ($numRows>0){
                                            foreach ($result as $rows) {


                                                $prevID= $rows['poID'];
                                                $newID = substr($prevID,2,3);
                                                $newID = $newID + 1;
                                                $newID = str_pad($newID, 3, "0", STR_PAD_LEFT);


                                                ?>
                                                <input type="text" id="PurchaseOrderID" name="PurchaseOrderID"  placeholder="Purchase Order ID" value="PO<?= $newID?>" class="form-control" readonly>

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
                                    <label for="farmerID" class="control-label">Farmer ID</label>
                                    <div class="input-group input-group-md">
                                        <div class="input-group col-sm-2 col-md-2 col-lg-2 mr-0">
                                            <button type="button" class="btn btn-outline-primary ion-search" data-toggle="modal"
                                                    data-target=".bd-example-modal-lg" ></button>

                                        </div>
                                        <input type="text" id="farmerID"class="ml-0 mr-3 input-group form-control col-sm-10 col-md-10 col-lg-10" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                        <!--                                  modal-->
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
                                                        <h5 class="modal-title" style="color: #011d21" id="exampleModalLabel">Farmer Details</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" style="color: #011d21; margin-left: 0%; margin-right: 0%" >

<!--                                                        <div class="row">-->
<!--                                                            <div class="col-md-6">-->
<!--                                                                <div class="md-form mb-2">-->
<!--                                                                    <i class="fas fa-user prefix grey-text"></i>-->
<!--                                                                    <label data-error="wrong" data-success="right"-->
<!--                                                                           for="orangeForm-name1" >Farmer ID</label>-->
<!--                                                                    <input type="text" id="FarmerID_Modal" name="FarmerID_Modal"-->
<!--                                                                           class="form-control validate"-->
<!--                                                                           onkeyup="farmerID_Search()">-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!---->
<!--                                                            <div class="col-md-6">-->
<!--                                                                <div class="md-form mb-3">-->
<!--                                                                    <i class="fas ion-android-create prefix grey-text"></i>-->
<!--                                                                    <label data-error="wrong" data-success="right"-->
<!--                                                                           for="orangeForm-email1">Customer Name</label>-->
<!--                                                                    <input type="text" id="customerNamemodal" name="customerNamemodal"-->
<!--                                                                           class="form-control validate">-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-12 col-sm-12">
                                                                <table id="FarmerTableModal" class="col-md-12 col-lg-12 col-sm-12 table table-bordered table-dark table-hover">
                                                                    <thead>
                                                                    <tr>

                                                                        <th>Farmer ID</th>
                                                                        <th>First Name</th>
                                                                        <th>Contact No</th>
                                                                        <th>isActive</th>
<!--                                                                        <th>Actions</th>-->
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                    <?php
                                                                    include ("../Common/config.php");

                                                                    $query="Select * from `tbl_farmer`";
                                                                    $result = $con->query($query);
                                                                    if ($result){
                                                                    foreach ($result as $rows){
                                                                    ?>
                                                                    <tr>
                                                                        <td><?= $rows['farmerID']; ?></td>
                                                                        <td><?= $rows['firstName']; ?></td>
                                                                        <td><?= $rows['contactNo1']; ?></td>
                                                                        <td><?= $rows['isActive']; ?></td>
                                                                        <?php
                                                                        }
                                                                        }
                                                                        ?>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <script>
                                                                    function customerID_Search() {
                                                                        // alert();
                                                                        let input, filter, table, tr, td, i, txtValue;
                                                                        input = document.getElementById("FarmerID_Modal");
                                                                        filter = input.value.toUpperCase();
                                                                        table = document.getElementById("FarmerTableModal");
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

                                                                    function selectModal() {

                                                                        var table = document.getElementById('FarmerTableModal'),index;

                                                                        for (var  i = 1 ; i < table.rows.length ; i++){
                                                                            table.ros[i].onclick = function () {
                                                                                rIndex = this.rowIndex;
                                                                                document.getElementById("farmerID").value = this.cells[0].innerHTML;
                                                                                document.getElementById("firstName").value = this.cells[1].innerHTML;
                                                                                document.getElementById("contactNo1").value = this.cells[2].innerHTML;
                                                                                document.getElementById("isActive").value = this.cells[3].innerHTML;




                                                                                // $('#myInput').val( this.cells[0].innerHTML);



                                                                            }
                                                                        }
                                                                    }

                                                                    }
                                                                </script>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<!--                                                        <button type="button" class="btn btn-primary">Send message</button>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!---->
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="row">


                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="CenterID" class="col-sm-12 col-md-12 col-lg-12 control-label">Center ID</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="CenterID" name="CenterID"  placeholder="Center ID" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="PaddyType" class="col-sm-12 col-md-12 col-lg-12 control-label">Paddy Type*</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <select class="form-control" id="PaddyType" name="PaddyType">
                                            <option value="Basmathi Rice">Basmathi Rice</option>
                                            <option value="Nadu Rice">Nadu Rice</option>
                                            <option value="Kekulu Rice">Kekulu Rice</option>
                                            <option value="Samba Rice">Samba Rice</option>
                                            <option value="Red Rice">Red Rice</option>
                                        </select>
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
                        <button type="submit" name="addPOrder" id="addPOrder" class="btn btn-primary btn-block" style="width: 50%; align-content: center">Add purchase order</button>
                        <button type="submit" name="updatePO" id="updatePO" class="btn btn-primary btn-block" style="width: 50%; align-content: center" disabled>Update</button>
                        <button type="button" name="reload" id="reload" class="btn btn-danger btn-block" style="width: 50%; align-content: center" onclick="location.reload()">Reload</button>
                    </div>

                    <br><br>
                </FORM>
            </div>

            <div class="row">
                <div class="container-fluid ">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                        <table id="pOrderTable" class="table table-bordered table-hover table-light">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>PoID</th>
<!--                                <th>Stock ID</th>-->
                                <th>Farmer ID</th>
                                <th>Paddy type</th>
                                <th>Unit price</th>
                                <th>Qty</th>
                                <th>Amount</th>



                            </tr>
                            </thead>
                            <tbody>


                            <?php
                            include("../Common/config.php");
                            $loadTable = "SELECT * FROM `tbl_purchaseorder`";
                            $result = $con->query($loadTable);
                            if ($result) {
                                foreach ($result as $row) {
                                    ?>
                                    <tr>
                                        <td><?= $row['DateOn']; ?></td>
                                        <td><?= $row['poID']; ?></td>
<!--                                        <td>--><?//= $row['stockID']; ?><!--</td>-->
                                        <td><?= $row['farmerID']; ?></td>
                                        <td><?= $row['paddyType']; ?></td>
                                        <td><?= $row['unitPrice']; ?></td>
                                        <td><?= $row['Qty']; ?></td>
                                        <td><?= $row['total']; ?></td>

                                        <td>
                                            <button class="btn-danger btn-sm" onclick="confirmDelete('<?= $row['poID'];?>')" value="<?= $row['poID']; ?>">Delete</button>
                                            <button class="btn-info btn-sm" onclick="editPurchases()" value="<?= $row['poID']; ?>">Edit</button>

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
    $( document ).ready(function() {
        $('#FarmerTableModal').DataTable();
    });

    $( document ).ready(function() {
        $('#pOrderTable').DataTable();
    });



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
                        url: "CRUDpurchases.php",
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



    function editPurchases() {
        document.getElementById('addPOrder').disabled=true;
        document.getElementById('updatePO').disabled=false;
        // document.getElementById('picBox').hidden=false;


        var table = document.getElementById('pOrderTable'),index;

        for (var  i = 1 ; i < table.rows.length ; i++){
            table.rows[i].onclick = function () {
                rIndex = this.rowIndex;
                document.getElementById("Date").value = this.cells[0].innerHTML;
                document.getElementById("PurchaseOrderID").value = this.cells[1].innerHTML;
                document.getElementById("farmerID").value = this.cells[2].innerHTML;
                document.getElementById("PaddyType").value = this.cells[3].innerHTML;
                document.getElementById("UnitPrice").value = this.cells[4].innerHTML;
                document.getElementById("Quantity").value = this.cells[5].innerHTML;
                document.getElementById("Total").value = this.cells[6].innerHTML;





            }
        }
    }
</script>
</body>
