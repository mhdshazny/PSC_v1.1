<head>

    <title>Collection Center</title>


    <!--    Resources -->

    <?php
    include("../Common/Header.php");
    //    include ("../Common/config.php");
    ?>
    <script src="../Plugins/bootstrap/js/bootstrap.min.js">  </script>
    <!--Bootbox Scripts-->
</head>
<body class="bg-dark" style="width: 100%; margin-right: 0%">

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
<div class="row" style="min-height: 87%; background-color: #011d21; margin: 0px; padding-left: 1%">
    <?php
    include("../Common/SideNavBar.php");
    ?>
    <div class="col-md-10 col-lg-10 col-sm-10 d-none d-md-block container text-white" style="background-color: #011d21">
        <div class="container-fluid rounded" style="min-height: 100%; background-color: #04333b;margin-left: 00px; margin-right: 00px">
            <div class="row">
                <div class="container-fluid">
                    <br>
                    <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">Collection Center</p>

                </div>

                <?php
                $Priority = 'AdminUserReg';
                ?>
                <FORM action="collectionCenter_dB.php" method="POST" class="col" enctype="multipart/form-data">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 ">
                                <div class="form-group">
                                    <label for="ContactDetails" class="col-sm-12 col-md-12 col-lg-12 rounded bg-info mt-4">Center Details</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="centerID" class="col-sm-12 col-md-12 col-lg-12 control-label">Center ID</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <?php
                                        include ("../Common/config.php");
                                        $query="SELECT * FROM `tbl_collectioncenter` ORDER BY `centerID` DESC LIMIT 1";
                                        $result = $con->query($query);
                                        $numRows = mysqli_num_rows($result);
                                        $newID="CEN001";
                                        if ($numRows>0){
                                            foreach ($result as $rows) {


                                                $prevID= $rows['centerID'];
                                                $newID = substr($prevID,3,3);
                                                $newID = $newID + 1;
                                                $newID = str_pad($newID, 3, "0", STR_PAD_LEFT);


                                                ?>
                                                <input type="text" id="centerID" name="centerID" placeholder="center ID" value="CEN<?= $newID?>" class="form-control" readonly>
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
                                    <label for="region" class="col-sm-12 col-md-12 col-lg-12 control-label">Region </label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="region" name="region" placeholder="Region" class="form-control" >
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-4 col-md-4 col-lg-4">




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
                                    <label for="capacity" class="col-sm-12 col-md-12 col-lg-12  control-label">Capacity</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="capacity" name="capacity" placeholder="Capacity (Kg)" class="form-control" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="bankAccID" class="col-sm-12 col-md-12 col-lg-12  control-label">Bank Account ID</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="bankAccID" name="bankAccID" placeholder="Bank Account ID" class="form-control" autofocus>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="centerManager" class="col-sm-12 col-md-12 col-lg-12  control-label">Center Manager</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="centerManager" name="centerManager" placeholder="Center Manager" class="form-control" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">

                            </div>
                        </div>
                        <div class="row">


                        </div>

                            <div class="col-sm-4 col-md-4 col-lg-4 ">

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
                                        <input type="checkbox" id="isActive" name="isActive" value="1" class="form-control" checked disabled>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <br><br>
                    <div class="container" style="margin-left: 30%">
                        <button type="submit" name="addCenter" id="addCenter" class="btn btn-primary btn-block" style="width: 50%; align-content: center">Register</button>
                        <button type="submit" name="updateCenter" id="updateCenter" class="btn btn-primary btn-block" style="width: 50%; align-content: center" disabled>Update</button>
                        <button type="button" name="reload" id="reload" class="btn btn-danger btn-block" style="width: 50%; align-content: center" onclick="location.reload()">Clear</button>

                    </div>

                    <br><br>
                </FORM>


            <div class="row">
                <div class="container-fluid ">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                        <table id="CenterTable" class="table table-bordered table-hover table-light table-responsive" >
                            <thead>
                            <tr>
                                <th>Center ID</th>
<!--                                <th>Center Name</th>-->

                                <th>Region</th>
                                <th>Capacity</th>
                                <th>Contact No</th>
                                <th>Bank Account No</th>

                                <th>Center Manager</th>

                                <th style="width: 8%">Actions</th>
                            </tr>
                            </thead>
                            <tbody>


                            <?php
                            include("../Common/config.php");
                            $loadTable = "SELECT * FROM `tbl_collectioncenter` ORDER BY `centerID` DESC";
                            $result = $con->query($loadTable);
                            if ($result) {
                                foreach ($result as $row) {
                                    ?>
                                    <tr style="width: 10%">
                                        <td><?= $row['centerID']; ?></td>

                                        <td><?= $row['region']; ?></td>
                                        <td><?= $row['capacity']; ?></td>
                                        <td><?= $row['contactNo']; ?></td>
                                        <td><?= $row['bankAccID']; ?></td>
                                        <td><?= $row['centerManger'] ?></td>

                                        <td style="width: 10%">
                                            <button class="btn-danger btn-sm" onclick="confirmDelete('<?= $row['centerID'];?>')" value="<?= $row['centerID']; ?>">Delete</button>
                                            <button class="btn-info btn-sm" onclick="editCenter()" value="<?= $row['centerID']; ?>">Edit</button>

                                        </td>


                                    </tr>

                                    <?php
                                }

                            }

                            ?>
                            </tbody>

                        </table>
<!--                        <script>-->
<!--                            function farmerID_Search() {-->
<!--                                // alert();-->
<!--                                let input, filter, table, tr, td, i,txtValue;-->
<!--                                input = document.getElementById("farmerID_Modal");-->
<!--                                filter = input.value.toUpperCase();-->
<!--                                table = document.getElementById("farmerTableModal");-->
<!--                                tr = table.getElementsByTagName("tr");-->
<!--                                for (i = 0; i < tr.length; i++) {-->
<!--                                    td = tr[i].getElementsByTagName("td")[0];-->
<!--                                    if (td) {-->
<!--                                        txtValue = td.textContent || td.innerText;-->
<!--                                        if (txtValue.toUpperCase().indexOf(filter) > -1) {-->
<!--                                            tr[i].style.display = "";-->
<!--                                        } else {-->
<!--                                            tr[i].style.display = "none";-->
<!--                                        }-->
<!--                                    }-->
<!--                                }-->
<!---->
<!---->
<!--                            }-->
<!--                        </script>-->
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
                        url: "CRUDcenter.php",
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

    function editCenter() {
        document.getElementById('addCenter').disabled=true;
        document.getElementById('updateCenter').disabled=false;


        var table = document.getElementById('CenterTable'),index;

        for (var  i = 1 ; i < table.rows.length ; i++){
            table.rows[i].onclick = function () {
                rIndex = this.rowIndex;
                document.getElementById("centerID").value = this.cells[0].innerHTML;

                document.getElementById("region").value = this.cells[1].innerHTML;
                document.getElementById("contactNo1").value = this.cells[2].innerHTML;
                document.getElementById("capacity").value = this.cells[3].innerHTML;
                document.getElementById("bankAccID").value = this.cells[4].innerHTML;
                document.getElementById("centerManager").value = this.cells[5].innerHTML;





            }
        }
    }


</script>
</body>
