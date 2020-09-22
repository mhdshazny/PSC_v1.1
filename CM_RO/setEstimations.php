<head>

    <title>Stock Estimations</title>


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
                    <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">Stock Estimations</p>

                </div>

                <?php
                $Priority = 'AdminUserReg';
                ?>
                <FORM action="setEstimations_dB.php" method="POST" class="col" enctype="multipart/form-data">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 ">
                                <div class="form-group">
                                    <label for="ContactDetails" class="col-sm-12 col-md-12 col-lg-12 bg-info mt-4">Stock Details</label>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="estimationID" class="col-sm-12 col-md-12 col-lg-12 control-label">Estimation Record ID</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <?php
                                        include ("../Common/config.php");
                                        $query="SELECT * FROM `tbl_estimations` ORDER BY `estimationID` DESC LIMIT 1";
                                        $result = $con->query($query);
                                        $numRows = mysqli_num_rows($result);
                                        $newID="ESTM00001";
                                        if ($numRows>0){
                                            foreach ($result as $rows) {


                                                $prevID= $rows['estimationID'];
                                                $newID = substr($prevID,4,5);
                                                $newID = $newID + 1;
                                                $newID = str_pad($newID, 5, "0", STR_PAD_LEFT);


                                                ?>
                                                <input type="text" id="estimationID" name="estimationID" placeholder="estimationID" value="ESTM<?= $newID?>" class="form-control" >
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
                                    <label for="centerID" class="col-sm-12 col-md-12 col-lg-12 control-label">Center ID</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="centerID" name="centerID" placeholder="Center ID" class="form-control" required autofocus>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">

                                <div class="form-group">
                                    <label for="dateOn" class="col-sm-12 col-md-12 col-lg-12 control-label">Date</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="date" id="dateOn" name="dateOn" placeholder="Date" class="form-control" required autofocus>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="season" class="col-sm-12 col-md-12 col-lg-12 control-label">Season</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <select class="form-control" id="season" name="season" required>
                                            <option value="Maha Season">Maha Season</option>
                                            <option value="Yala Season">Yala Season</option>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="paddyType" class="col-sm-12 col-md-12 col-lg-12 control-label">Paddy Type</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <select class="form-control" id="paddyType" name="paddyType" required>
                                            <option value ="Basmathi Rice">Basmathi Rice</option>
                                            <option value ="Nadu Rice">Nadu Rice</option>
                                            <option value ="Kekulu Rice">Kekulu Rice</option>
                                            <option value ="Samba Rice">Samba Rice</option>
                                            <option value ="Red Rice">Red Rice</option>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="totalFarmers" class="col-sm-12 col-md-12 col-lg-12 control-label">No. of Farmers</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="totalFarmers" name="totalFarmers" placeholder="No. of Farmers" class="form-control" required autofocus>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="landArea" class="col-sm-5 control-label">Total Land Area</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="landArea" name="landArea" placeholder="Total Land Area in (perch)" class="form-control" required autofocus>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="quantity" class="col-sm-6   control-label">Total Estimated Quantity</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="quantity" name="quantity" placeholder="Quantity (Kg)" class="form-control" required autofocus>
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
                        <button type="submit" name="sendEstimations" id="sendEstimations" class="btn btn-primary btn-block" style="width: 50%; align-content: center">Register</button>
                        <button type="button" name="reload" id="reload" class="btn btn-danger btn-block" style="width: 50%; align-content: center" onclick="location.reload()">Reload</button>
                        <button type="submit" name="updateUser" id="updateUser" class="btn btn-primary btn-block" style="width: 50%; align-content: center" disabled>Update</button>
                        <button type="button" name="reload" id="reload" class="btn btn-danger btn-block" style="width: 50%; align-content: center" onclick="reload()">Alert</button>
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
                                <th>Estimation ID</th>
                                <th>Center ID</th>

                                <th>Date On</th>
                                <th>Paddy Type</th>
                                <th>Season</th>
                                <th>Land Area</th>
                                <th>Total Farmers</th>
                                <th>Quantity</th>




                            </tr>
                            </thead>
                            <tbody>


                            <?php
                            include("../Common/config.php");
                            $loadTable = "SELECT * FROM `tbl_estimations`";
                            $result = $con->query($loadTable);
                            if ($result) {
                                foreach ($result as $row) {
                                    ?>
                                    <tr>
                                        <td><?= $row['estimationID']; ?></td>
                                        <td><?= $row['centerID']; ?></td>
                                        <td><?= $row['DateOn']; ?></td>
                                        <td><?= $row['paddyType']; ?></td>
                                        <td><?= $row['season']; ?></td>
                                        <td><?= $row['landArea']; ?></td>
                                        <td><?= $row['totalFarmers']; ?></td>
                                        <td><?= $row['quantity']; ?></td>


                                        <td>
                                            <button class="btn-danger btn-sm" onclick="confirmDelete('<?= $row['estimationID'];?>')" value="<?= $row['estimationID']; ?>">Delete</button>
                                            <button class="btn-info btn-sm" onclick="editEstimation()" value="<?= $row['estimationID']; ?>">Edit</button>

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

    function alert() {
        alert("Saved Successfully!");

    }

    function editEstimation() {
        document.getElementById('addEstimation').disabled=true;
        document.getElementById('updateEstimation').disabled=false;


        var table = document.getElementById('estimationTable'),index;

        for (var  i = 1 ; i < table.rows.length ; i++){
            table.row[i].onclick = function () {
                rIndex = this.rowIndex;
                document.getElementById("estimationID").value = this.cells[0].innerHTML;
                document.getElementById("centerID").value = this.cells[1].innerHTML;
                document.getElementById("dateOn").value = this.cells[2].innerHTML;
                document.getElementById("PaddyType").value = this.cells[3].innerHTML;
                document.getElementById("season").value = this.cells[4].innerHTML;
                document.getElementById("landArea").value = this.cells[5].innerHTML;
                document.getElementById("totalFarmers").value = this.cells[6].innerHTML;
                document.getElementById("quantity").value = this.cells[7].innerHTML;
              ;


                // $('#myInput').val( this.cells[0].innerHTML);



            }
        }
    }
</script>
</body>
