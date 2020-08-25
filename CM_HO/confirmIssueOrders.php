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

    $centerID1_temp = "";
    $vehicleCapTemp = "";
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
                                    <input type="text" id="issueOrderID" name="issueOrderID" placeholder="Issue Order ID" class="form-control" readonly>
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
                            <!--<div class="form-group">
                                <label for="centerID1" class="col-sm-12 col-md-12 col-lg-12 control-label">Center ID 1</label>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <input type="text" id="centerID1" name="centerID1" placeholder="Center ID need to add find option" class="form-control" required readonly>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>-->
                            <label for="centerID1" class="col-sm-12 col-md-12 col-lg-12 control-label">Center ID 1</label>
<!--                            <form action="CRUDissueOrder.php" method="post">-->
                                <div class="input-group col-sm-12 col-md-12 col-lg-12">

<!--                                    <input type="text" id="centerID1" name="centerID1" class="form-group input-group form-control  col-sm-11 col-md-11 col-lg-11" placeholder="Center ID need to add find option" aria-label="" aria-describedby="basic-addon1">
                                    <button type="button" name="QtySearch1" id="QtySearch1" onclick="getQtyCenter()" class="btn btn-outline-primary ion-search col-md-1 col-sm-1 col-lg-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>-->
                                    <select class="custom-select" id="centerID1" name="centerID1" disabled>
                                        <option value=''>Null</option>

                                        <?php

                                        include("../Common/config.php");
                                        //
                                        $addQuery = "select * from `tbl_collectioncenter`";
                                        $result = $con->query($addQuery);
                                        //
                                        //                                        if ($result) {
                                        //                                            foreach ($result as $row) {
                                        ?>

                                        <?php
                                        while ($rows = $result->fetch_assoc()) {
                                            $centerID= $rows['centerID'];
                                            $regionName= $rows['region'];
                                            echo "<option value='$centerID'>$regionName</option>";
//                                                echo "<label for='regionName' name='regionName' value='$regionName' hidden>$regionName</label>";

                                        }
                                        ?>
                                        <!---->
                                        <!---->
                                    </select>

                                </div>
<!--                            </form>-->
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 ">
                            <div class="form-group">
                                <label for="Avlbl_quantity1" class="col-sm-12 col-md-12 col-lg-12 control-label">Center 1 Available Quantity (kg)</label>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <input type="text" id="Avlbl_quantity1" name="Avlbl_quantity1" placeholder="Quantity(Kg)" class="form-control" required >
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 ">
                            <div class="form-group">
                                <label for="orderQuantity1" class="col-sm-5 control-label">Order Quantity (kg)</label>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <input type="text" id="orderQuantity1" name="orderQuantity1" placeholder="Quantity(Kg)" class="form-control" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 ">
                            <div class="form-group">
                                <label for="centerID2" class="col-sm-12 col-md-12 col-lg-12 control-label">Center ID 2</label>
                                <div class="col-sm-12 col-md-12 col-lg-12">
<!--                                    <input type="text" id="centerID2" name="centerID2" placeholder="Center ID need to add find option" class="form-control" required readonly>-->
                                    <select class="custom-select" id="centerID2" name="centerID2"  onchange="getQtyCenter2()" disabled>
                                        <option value=''>Null</option>

                                        <?php

                                        include("../Common/config.php");
                                        //
                                        $addQuery = "select * from `tbl_collectioncenter`";
                                        $result = $con->query($addQuery);
                                        //
                                        //                                        if ($result) {
                                        //                                            foreach ($result as $row) {
                                        ?>

                                        <?php
                                        while ($rows = $result->fetch_assoc()) {
                                            $centerID= $rows['centerID'];
                                            $regionName= $rows['region'];
                                            echo "<option value='$centerID'>$regionName</option>";
//                                                echo "<label for='regionName' name='regionName' value='$regionName' hidden>$regionName</label>";

                                        }
                                        ?>
                                        <!---->
                                        <!---->
                                    </select>


                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 ">
                            <div class="form-group">
                                <label for="Avlbl_quantity2" class="col-sm-5 control-label">Center 2 Quantity (kg)</label>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <input type="text" id="Avlbl_quantity2" name="Avlbl_quantity2" placeholder="Quantity(Kg)" class="form-control" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 ">
                            <div class="form-group">
                                <label for="orderQuantity2" class="col-sm-5 control-label">Order Quantity (kg)</label>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <input type="text" id="orderQuantity2" name="orderQuantity2" placeholder="Quantity(Kg)" class="form-control" required readonly>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 ">
                            <div class="form-group">
                                <label for="vehicleID" class="col-sm-12 col-md-12 col-lg-12 control-label">Vehicle ID 1</label>
                                <div class="col-sm-12 col-md-12 col-lg-12">
<!--                                    <input type="text" id="vehicleID" name="vehicleID" placeholder="Vehicle ID need to add find option" class="form-control" readonly required autofocus>-->
                                    <select class="custom-select" id="vehicleID" name="vehicleID">
                                        <option value='' >Null</option>

                                        <?php

                                        include("../Common/config.php");
                                        //
//                                        $totValue= "<script>document.getElementById('quantity').toString();</script>";
//                                        $Qty= $totValue;
                                        $addQuery = "select * from `tbl_vehicles` ORDER BY `capacity` DESC";
                                        $result = $con->query($addQuery);
                                        //
                                        //                                        if ($result) {
                                        //                                            foreach ($result as $row) {
                                        ?>

                                        <?php
                                        while ($rows = $result->fetch_assoc()) {
                                            $vehicleID= $rows['vehicleID'];
                                            $vehicleName= $rows['vehicleModel'];
                                            $vehicleCapacity= $rows['capacity'];
                                            echo "<option value='$vehicleID'>$vehicleName   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $vehicleCapacity </option>";
//                                                echo "<label for='regionName' name='regionName' value='$regionName' hidden>$regionName</label>";
?>
                                            <?php
                                        }

                                        ?>
                                        <!---->
                                        <!---->
                                    </select>

                                    <div class="valid-feedback">Valid.</div>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 ">
                            <div class="form-group">
                                <label for="capacity" class="col-sm-5 control-label">Vehicle Capacity</label>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <input type="text" id="capacity" name="capacity" placeholder="Capacity(Kg)" class="form-control" value="<?php echo $vehicleCapTemp?>" required autofocus>
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
                                <th>Customer ID
                                <th>Region</th>
                                <th>Paddy Type</th>
                                <th>Quantity</th>
                                <th>Ordered Date</th>
                                <th>isActive</th>
                                <th>Actions</th>


                            </tr>
                            </thead>
                            <tbody>


                            <?php
                            include("../Common/config.php");
                            $loadTable = "SELECT * FROM `tbl_issueorder` WHERE `isActive`=1";
                            $result = $con->query($loadTable);

                            if ($result) {
                                foreach ($result as $row) {
                                    $centerID1 = $row['center1'];
                                    ?>
                                    <tr>
                                        <td><?= $row['ioID']; ?></td>
                                        <td><?= $row['customerID']; ?></td>
                                        <td><?= $row['region']; ?></td>
                                        <td><?= $row['paddyType']; ?></td>
                                        <td><?= $row['Qty1']; ?></td>
                                        <td><?= $row['orderDateOn'];?></td>

                                        <td><?= $row['isActive']; ?></td>
                                        <td>
                                            <button class="btn-danger btn-sm" onclick="rejectOrder('<?= $row['ioID'];?>')" value="<?= $row['empID']; ?>">Reject</button>
                                            <button class="btn-info btn-sm" onclick="acceptIssueOrder()" value="<?= $row['ioID']; ?>">Accept</button>

                                        </td>
                                        <td hidden><?= $row['unitPrice']; ?></td>
                                        <td hidden><?= $row['netTotal']; ?></td>
                                        <td hidden><?= $row['center1']; ?></td>

                                        <?= $centerID1_temp = $row['center1']; ?>

                                    </tr>

                                    <?php
                                }

                            }

                            ?>
                            </tbody>

                        </table>
                        <script>


                            function acceptIssueOrder() {

                                // document.getElementById('acceptOrder').disabled=true;

                                // document.getElementById('updateUser').disabled=false;
                                document.getElementById('centerID1').disabled=false;
                                document.getElementById('isActive').disabled=false;

                                var table = document.getElementById('issueOrderTable'),index;

                                for (var  i = 1 ; i < table.rows.length ; i++){
                                    table.rows[i].onclick = function () {
                                        rIndex = this.rowIndex;
                                        document.getElementById("issueOrderID").value = this.cells[0].innerHTML;
                                        document.getElementById("orderDateOn").value = this.cells[5].innerHTML;
                                        document.getElementById("region").value = this.cells[2].innerHTML;
                                        document.getElementById("customer").value = this.cells[1].innerHTML;
                                        document.getElementById("paddyType").value = this.cells[3].innerHTML;
                                        document.getElementById("quantity").value = this.cells[4].innerHTML;
                                        document.getElementById("unitPrice").value = this.cells[8].innerHTML;
                                        document.getElementById("netTotal").value = this.cells[9].innerHTML;

                                        let centerID = document.getElementById("centerID1").value = this.cells[10].innerHTML;





                                    }
                                }
                            }

                            function centerQtyAvailable() {
                                alert();
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

    $( document ).ready(function() {
        $('#centerID1').change(function(e){
            availableQty();
        })
    });

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


    function getQtyCenter(){

        let totQty= document.getElementById("quantity").value;
        let centerAvblQty1= document.getElementById("Avlbl_quantity1").value;

        let centerAvblQty2= document.getElementById("Avlbl_quantity2").value;

        let rem= totQty - centerAvblQty1;

        let rem2 = rem - centerAvblQty2;

        document.getElementById("orderQuantity1").value= rem;
        //document.getElementById("capacity").value= <?php //echo $vehicleCapTemp?>//;

        if (rem>0){
            document.getElementById("centerID2").disabled=false;
            document.getElementById("quantity2").readOnly=false;

            // document.getElementById("centerID2").disabled=false;
            if (rem2>0){
                document.getElementById("orderQuantity2").readOnly=false;
                document.getElementById("orderQuantity2").value= rem2;

            }

        }
        else {
            document.getElementById("centerID2").readOnly=true;
            document.getElementById("quantity2").readOnly=true;
            document.getElementById("orderQuantity2").readOnly=true;

        }

        // var id = $('#centerID1').val();
        // $.ajax({
        //     type: "GET",
        //     url: "CRUDissueOrder.php",
        //     data: {keyword:'searchCenter',id:id},
        //     cache: false,
        //     dataType:'json',
        //     success: function(data){
        //         if(data.result){
        //            $('#Avlbl_quantity1').val(data.message);
        //
        //         }
        //     }
        // });
    }
    function getQtyCenter2(){


        let rem= document.getElementById("orderQuantity1").value;
        let centerAvblQty2= document.getElementById("Avlbl_quantity2").value;

        let rem2 = rem - centerAvblQty2;

        document.getElementById("orderQuantity2").value= rem2;



    }
    function availableQty() {
        var id = $('#centerID1').val();
        $.ajax({
            type: "GET",
            url: "CRUDissueOrder.php",
            data: {keyword:'searchCenter',id:id},
            cache: false,
            dataType:'json',
            success: function(data){
                if(data.result){
                   $('#Avlbl_quantity1').val(data.Qty);
                }
            }
        });
    }

</script>
</body>
