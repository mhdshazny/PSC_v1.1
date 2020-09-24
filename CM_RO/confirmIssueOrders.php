<head>

    <title>Accept Issue Orders</title>


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

    $centerID1_temp = "";
    $vehicleCapTemp = "";
    ?>
    <div class="col-md-10 d-none d-md-block container text-white" style="background-color: #011d21">
        <div class="container-fluid rounded" style="min-height: 100%; background-color: #04333b">
            <div class="row">
                <div class="container-fluid">
                    <br>
                    <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">Accept Issue Orders</p>

                </div>

                <?php
                $Priority = 'AdminUserReg';
                ?>
                <FORM action="confirmIssueOrders_dB.php" method="POST" class="col-sm-12 col-md-12 col-lg-12" class="was-validated"">
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
                                    <input type="text" id="ioID" name="ioID" placeholder="Issue Order ID" class="form-control" readonly>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 ">
                            <div class="form-group">
                                <label for="orderDateOn" class="col-sm-12 col-md-12 col-lg-12 control-label">Ordered Date</label>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <input type="date" id="orderDateOn" name="orderDateOn" placeholder="Date" class="form-control" required autofocus readonly>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4">

                            <div class="form-group">
                                <label for="region" class="col-sm-12 col-md-12 col-lg-12 control-label">Region</label>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <input type="text" id="region" name="region" placeholder="region" class="form-control" readonly >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
<!--                        <div class="col-sm-4 col-md-4 col-lg-4 ">-->
<!--                            <div class="form-group">-->
<!--                                <label for="customer" class="col-sm-12 col-md-12 col-lg-12 control-label">Customer</label>-->
<!--                                <div class="col-sm-12 col-md-12 col-lg-12">-->
<!--                                    <input type="text" id="customer" name="customer" placeholder="Customer Name" class="form-control" required autofocus>-->
<!--                                    <div class="valid-feedback">Valid.</div>-->
<!--                                    <div class="invalid-feedback">Please fill out this field.</div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="col-sm-4 col-md-4 col-lg-4 ">
                            <div class="form-group">
                                <label for="PaddyType" class="col-sm-12 col-md-12 col-lg-12 control-label">Paddy Type</label>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <input type="text" id="paddyType" name="paddyType" placeholder="Paddy Type" class="form-control" required autofocus readonly>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 ">
                            <div class="form-group">
                                <label for="quantity"class="col-sm-12 col-md-12 col-lg-12 control-label">Quantity</label>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <input type="text" id="quantity" name="quantity" placeholder="Paddy Quantity" class="form-control" required autofocus readonly>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 ">
                            <div class="form-group">
                                <label for="acceptedDateOn" class="col-sm-12 col-md-12 col-lg-12 control-label">Order Accepted/ Declined Date</label>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <input type="date" id="acceptedDateOn" name="acceptedDateOn" placeholder="acceptedDateOn" class="form-control" required autofocus >
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 ">
                            <div class="form-group">
                                <label for="OrderAcceptStatus" class="col-sm-12 col-md-12 col-lg-12 control-label">Order Accept Status</label>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <select class="form-control" id="OrderAcceptStatus" name="OrderAcceptStatus" required>
                                        <option value ="Accept">Accept</option>
                                        <option value ="Reject">Reject</option>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </select>
                                </div>
                            </div>
                        </div>


                        </div>
                    </div>

                <br><br>
                <div class="container" style="margin-left: 30%">
                    <button type="submit" name="confirmIssueOrder" id="confirmIssueOrder" class="btn btn-primary btn-block" style="width: 50%; align-content: center">Accept order</button>
<!--                    <button type="submit" name="updateUser" id="updateUser" class="btn btn-primary btn-block" style="width: 50%; align-content: center" disabled>Update</button>-->
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

                                <th>Region</th>
                                <th>Paddy Type</th>
                                <th>Quantity</th>
                                <th>Ordered Date</th>
<!--                                <th>isActive</th>-->
                                <th>Actions</th>


                            </tr>
                            </thead>
                            <tbody>


                            <?php
                            include("../Common/config.php");
                            $loadTable = "SELECT * FROM `tbl_issueorder` ";
                            $result = $con->query($loadTable);

                            if ($result) {
                                foreach ($result as $row) {
//                                    $centerID1 = $row['center1'];
                                    ?>
                                    <tr>
                                        <td><?= $row['ioID']; ?></td>
<!--                                        <td hidden>--><?//= $row['customerID']; ?><!--</td>-->
                                        <td><?= $row['region']; ?></td>
                                        <td><?= $row['paddyType']; ?></td>
                                        <td><?= $row['Qty1']; ?></td>
                                        <td><?= $row['orderDateOn'];?></td>

<!--                                        <td>--><?//= $row['isActive']; ?><!--</td>-->
                                        <td>
                                            <button class="btn-danger btn-sm" onclick="rejectOrder('<?= $row['ioID'];?>')" value="<?= $row['ioID']; ?>">Reject</button>
                                            <button class="btn-info btn-sm" id="acceptOrder"onclick="acceptIssueOrder()" value="<?= $row['ioID']; ?>">Check</button>

                                        </td>
<!--                                        <td hidden>--><?//= $row['unitPrice']; ?><!--</td>-->
<!--                                        <td hidden>--><?//= $row['netTotal']; ?><!--</td>-->
<!--                                        <td hidden>--><?//= $row['center1']; ?><!--</td>-->

<!--                                        --><?//= $centerID1_temp = $row['center1']; ?>

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

    // $( document ).ready(function() {
    //     $('#centerID1').change(function(e){
    //         availableQty();
    //     });
    //     $('#vehicleID').change(function(d){
    //         vehicleCapcity();
    //     });
    // });

    function acceptIssueOrder() {

        document.getElementById('acceptOrder').disabled=false;

        //   document.getElementById('updateUser').disabled=false;
        // document.getElementById('centerID1').disabled=false;
        // document.getElementById('isActive').disabled=false;

        var table = document.getElementById('issueOrderTable'),index;

        for (var  i = 1 ; i < table.rows.length ; i++){
            table.rows[i].onclick = function () {
                rIndex = this.rowIndex;
                document.getElementById("ioID").value = this.cells[0].innerHTML;
                document.getElementById("region").value = this.cells[1].innerHTML;
                document.getElementById("paddyType").value = this.cells[2].innerHTML;
                document.getElementById("quantity").value = this.cells[3].innerHTML;
                document.getElementById("orderDateOn").value = this.cells[4].innerHTML;
                // document.getElementById("acceptedDateOn").value = this.cells[15].innerHTML;
                // document.getElementById("orderStatus").value = this.cells[16].innerHTML;

                //   let centerID = document.getElementById("centerID1").value = this.cells[10].innerHTML;





            }
        }
    }

    // function centerQtyAvailable() {
    //     alert();
    // }




    function rejectOrder(id){
        bootbox.confirm({
            title: "",
            message: "Do you want to reject this order? This can be undone !",

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
                        url: "CRUDissueOrder.php",
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


    //function getQtyCenter(){
    //
    //    let totQty= document.getElementById("quantity").value;
    //    let centerAvblQty1= document.getElementById("Avlbl_quantity1").value;
    //
    //    //let centerAvblQty2= document.getElementById("Avlbl_quantity2").value;
    //
    //    let rem= centerAvblQty1 - totQty;
    //
    //    //let rem2 = rem - centerAvblQty2;
    //
    //    //document.getElementById("capacity").value= <?php ////echo $vehicleCapTemp?>////;
    //
    //    if (rem>0){
    //        document.getElementById("orderQuantity1").value= document.getElementById("quantity").value ;
    //        // document.getElementById("quantity").value= ;
    //
    //
    //        document.getElementById("centerID2").disabled=false;
    //        document.getElementById("quantity2").readOnly=false;
    //
    //        let rem2 = document.getElementById("orderQuantity1").value;
    //        // document.getElementById("centerID2").disabled=false;
    //        if (rem2 != totQty){
    //
    //
    //            document.getElementById("orderQuantity2").readOnly=false;
    //            document.getElementById("centerID1").disabled=true;
    //            // document.getElementById("Avlbl_quantity2").value= rem2;
    //
    //        }
    //
    //    }
    //    else {
    //        document.getElementById("centerID2").readOnly=true;
    //        document.getElementById("quantity2").readOnly=true;
    //        document.getElementById("orderQuantity2").readOnly=true;
    //
    //    }
    //
    //    // var id = $('#centerID1').val();
    //    // $.ajax({
    //    //     type: "GET",
    //    //     url: "CRUDissueOrder.php",
    //    //     data: {keyword:'searchCenter',id:id},
    //    //     cache: false,
    //    //     dataType:'json',
    //    //     success: function(data){
    //    //         if(data.result){
    //    //            $('#Avlbl_quantity1').val(data.message);
    //    //
    //    //         }
    //    //     }
    //    // });
    //}
    //function getQtyCenter2(){
    //
    //
    //    let rem= document.getElementById("orderQuantity1").value;
    //    let centerAvblQty2= document.getElementById("Avlbl_quantity2").value;
    //
    //    let rem2 = rem - centerAvblQty2;
    //
    //    document.getElementById("orderQuantity2").value= rem2;
    //
    //
    //
    //}
    //function availableQty() {
    //    var id = $('#centerID1').val();
    //    $.ajax({
    //        type: "GET",
    //        url: "CRUDissueOrder.php",
    //        data: {keyword:'searchCenter',id:id},
    //        cache: false,
    //        dataType:'json',
    //        success: function(data){
    //            if(data.result){
    //               $('#Avlbl_quantity1').val(data.Qty);
    //                getQtyCenter()
    //            }
    //        }
    //    });
    //}
    //function orderQtyFromCC1() {
    //    let totValue = $('#quantity').val();
    //    let valueCC1 = $('#Avlbl_quantity1').val();
    //    if (totValue<valueCC1) {
    //        $('#orderQuantity1').val(data.Vehicle);
    //    }
    //}
    //
    //
    //function vehicleCapcity() {
    //    var id1 = $('#vehicleID').val();
    //    $.ajax({
    //        type: "GET",
    //        url: "CRUDissueOrder.php",
    //        data: {search:'searchVehicle',id:id1},
    //        cache: false,
    //        dataType:'json',
    //        success: function(data){
    //            if(data.result){
    //               $('#vehicleCapacity').val(data.Vehicle);
    //            }
    //        }
    //    });
    //}

</script>
</body>
