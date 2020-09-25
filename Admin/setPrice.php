<head>

    <title>Set Buying and Selling Prices</title>


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
                    <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">Set Buying and Selling Prices</p>

                </div>

                <?php
                $Priority = 'AdminUserReg';
                ?>
                <FORM action="setPrice_dB.php" method="POST" class="col" class="was-validated"">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 ">
                            <div class="form-group">
                                <label for="OrderDetails" class="col-sm-12 col-md-12 col-lg-12 bg-info mt-4">Price Details</label>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 ">
                            <div class="form-group">
                                <label for="DateOn" class="col-sm-12 col-md-12 col-lg-12 control-label">Date</label>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <input type="date" id="DateOn" name="DateOn" placeholder="Date" class="form-control" required autofocus>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">


                        <div class="col-sm-4 col-md-4 col-lg-4 ">
                            <label for="paddyType="col-sm-12 col-md-12 col-lg-12 control-label">Paddy Type</label>

                            <select class="custom-select" id="paddyType" name="paddyType" >
                                <option value=''>-Select Paddy Type-</option>

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


                    <div class="col-sm-4 col-md-4 col-lg-4 ">
                        <div class="form-group">
                            <label for="buyingPrice" class="col-sm-12 col-md-12 col-lg-12 control-label">Buying Price</label>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <input type="text" id="buyingPrice" name="buyingPrice" placeholder="Buying Price" class="form-control" required >
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                    </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 ">
                            <div class="form-group">
                                <label for="sellingPrice" class="col-sm-12 col-md-12 col-lg-12 control-label">Selling Price</label>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <input type="text" id="sellingPrice" name="sellingPrice" placeholder="Selling Price" class="form-control" required >
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
                    <button type="submit" name="setPrice" id="setPrice" class="btn btn-primary btn-block" style="width: 50%; align-content: center">Register</button>
                    <button type="submit" name="updatePrice" id="updatePrice" class="btn btn-primary btn-block" style="width: 50%; align-content: center" disabled>Update</button>
                    <button type="button" name="reload" id="reload" class="btn btn-danger btn-block" style="width: 50%; align-content: center" onclick="location.reload()">Reload</button>
                </div>

                <br><br>
                </FORM>
            </div>

            <div class="row">
                <div class="container-fluid ">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                        <table id="userTable" class="table table-bordered table-hover table-light">
                            <thead>
                            <tr>
                                <th>Price ID</th>
                                <th>Paddy Type</th>
                                <th>Buying Price</th>
                                <th>Selling Price</th>
                                <th>Action</th>



                            </tr>
                            </thead>
                            <tbody>


                            <?php
                            include("../Common/config.php");
                            $loadTable = "SELECT * FROM `tbl_pricerecord`";
                            $result = $con->query($loadTable);
                            if ($result) {
                                foreach ($result as $row) {
                                    ?>
                                    <tr>
                                        <td><?= $row['priceRecID']; ?></td>
                                        <td><?= $row['paddyType']; ?></td>
                                        <td><?= $row['buyingPrice']; ?></td>
                                        <td><?= $row['sellingPrice']; ?></td>

                                        <td>
                                            <button class="btn-danger btn-sm" onclick="confirmDelete('<?= $row['empID'];?>')" value="<?= $row['empID']; ?>">Delete</button>
                                            <button class="btn-info btn-sm" onclick="editPrice()" value="<?= $row['empID']; ?>">Edit</button>

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

    function editPrice() {
        document.getElementById('setPrice').disabled=true;
        document.getElementById('updatePrice').disabled=false;



        var table = document.getElementById('userTable'),index;

        for (var  i = 1 ; i < table.rows.length ; i++){
            table.row[i].onclick = function () {
                rIndex = this.rowIndex;


                document.getElementById("priceRecID").value = this.cells[0].innerHTML;
                document.getElementById("paddyType").value = this.cells[1].innerHTML;
                document.getElementById("buyingPrice").value = this.cells[2].innerHTML;
                document.getElementById("sellingPrice").value = this.cells[3].innerHTML;


                // $('#myInput').val( this.cells[0].innerHTML);



            }
        }
    }
</script>
</body>
