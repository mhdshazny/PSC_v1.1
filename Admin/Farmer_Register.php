<head>

    <title>Farmer Registration</title>


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
                    <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">Farmer Registration</p>

                </div>

                <?php
                $Priority = 'AdminUserReg';
                ?>
                <FORM action="Farmer_Register_dB.php" method="POST" class="col" enctype="multipart/form-data">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 ">
                                <div class="form-group">
                                    <label for="ContactDetails" class="col-sm-12 col-md-12 col-lg-12 rounded bg-info mt-4">Farmer Details</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="farmerID" class="col-sm-12 col-md-12 col-lg-12 control-label">Farmer ID</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <?php
                                        include ("../Common/config.php");
                                        $query="SELECT * FROM `tbl_farmer` ORDER BY `farmerID` DESC LIMIT 1";
                                        $result = $con->query($query);
                                        $numRows = mysqli_num_rows($result);
                                        $newID="FAR00001";
                                        if ($numRows>0){
                                            foreach ($result as $rows) {


                                                $prevID= $rows['farmerID'];
                                                $newID = substr($prevID,4,5);
                                                $newID = $newID + 1;
                                                $newID = str_pad($newID, 5, "0", STR_PAD_LEFT);


                                                ?>
                                                <input type="text" id="farmerID" name="farmerID" placeholder="farmerID" value="FAR<?= $newID?>" class="form-control" readonly>
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
                                    <!--                                    region name will be displayed instead of centerID-->
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <!--                                        <input type="text" id="centerID" name="centerID" placeholder="region" class="form-control" >-->
                                        <select class="custom-select" id="centerID" name="centerID">
                                            <option value=''>Null</option>

                                            <!---->
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
                                </div>                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="landArea" class="col-sm-12 col-md-12 col-lg-12  control-label">Land Area (*in Acres)</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="number" id="landArea" name="landArea" placeholder="Land Area" class="form-control" autofocus>
                                    </div>
                                </div>
                            </div>
<!--                            <div class="col-sm-4 col-md-4 col-lg-4 ">-->
<!--                                <div class="form-group">-->
<!--                                    <label for="addressLine2" class="col-sm-12 col-md-12 col-lg-12  control-label">Address 2</label>-->
<!--                                    <div class="col-sm-12 col-md-12 col-lg-12">-->
<!--                                        <input type="text" id="addressLine2" name="addressLine2" placeholder="Street address 2 (Optional)" class="form-control" autofocus>-->
<!--                                    </div>-->
<!--                                </div>                            </div>-->
<!--                            <div class="col-sm-4 col-md-4 col-lg-4 ">-->
<!---->
<!--                            </div>-->
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
                        <button type="submit" name="addFarmer" id="addFarmer" class="btn btn-primary btn-block" style="width: 50%; align-content: center">Register</button>
                        <button type="submit" name="updateFarmer" id="updateFarmer" class="btn btn-primary btn-block" style="width: 50%; align-content: center" disabled>Update</button>
                        <button type="button" name="reload" id="reload" class="btn btn-danger btn-block" style="width: 50%; align-content: center" onclick="location.reload()">Clear</button>
                        <button type="button" name="reload" id="reload" class="btn btn-danger btn-block" style="width: 50%; align-content: center" onclick="messageBox()">messageBox</button>

                    </div>

                    <br><br>
                </FORM>
            </div>

            <div class="row">
                <div class="container-fluid ">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                        <table id="userTable" class="table table-bordered table-hover table-light" >
                            <thead>
                            <tr>
                                <th>Farmer ID</th>
                                <th>Center ID</th>
                                <th style="max-width: 20%">Region</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>NIC</th>
                                <th style="width: 10%">Address</th>
                                <th>Contact No</th>
                                <th>Land Area</th>
                                <th>Gender</th>
                                <th>isActive</th>
                                <th style="width: 8%">Actions</th>
                            </tr>
                            </thead>
                            <tbody>


                            <?php
                            include("../Common/config.php");
                            $loadTable = "SELECT * FROM `tbl_farmer` ORDER BY `farmerID` DESC";
                            $result = $con->query($loadTable);
                            if ($result) {
                                foreach ($result as $row) {
                                    ?>
                                    <tr style="width: 10%">
                                        <td><?= $row['farmerID']; ?></td>
                                        <td><?= $row['centerID']; ?></td>
                                        <td ></td>
                                        <td><?= $row['firstName']; ?></td>
                                        <td><?= $row['lastName']; ?></td>
                                        <td><?= $row['NIC']; ?></td>
                                        <td><?= $row['addressLine1']; ?></td>
                                        <td><?= $row['contactNo1']; ?></td>
                                        <td><?= $row['landArea']; ?></td>
                                        <td><?= $row['gender'] ?></td>
                                        <td><?= $row['isActive']; ?></td>
                                        <td style="width: 10%">
                                            <button class="btn-danger btn-sm" onclick="confirmDelete('<?= $row['farmerID'];?>')" value="<?= $row['farmerID']; ?>">Delete</button>
                                            <button class="btn-info btn-sm" onclick="editFarmer()" value="<?= $row['farmerID']; ?>">Edit</button>

                                        </td>
                                        <td hidden><?= $row['addressLine2']; ?></td>
                                        <td hidden><?= $row['contactNo2']; ?></td>
                                        <!--<td hidden><?/*= $row['region']; */?></td>-->


                                    </tr>

                                    <?php
                                }

                            }

                            ?>
                            </tbody>

                        </table>
                        <script>
                            function messageBox() {
                                alert("Hello World");

                            }


                            function farmerID_Search() {
                                // alert();
                                let input, filter, table, tr, td, i,txtValue;
                                input = document.getElementById("farmerID_Modal");
                                filter = input.value.toUpperCase();
                                table = document.getElementById("farmerTableModal");
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
                        url: "CRUDfarmer.php",
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

    function editFarmer() {
        document.getElementById('addFarmer').disabled=true;
        document.getElementById('updateFarmer').disabled=false;

        var dir = "../Upload/User/";
        var table = document.getElementById('userTable'),index;

        for (var  i = 1 ; i < table.rows.length ; i++){
            table.rows[i].onclick = function () {
                rIndex = this.rowIndex;
                document.getElementById("farmerID").value = this.cells[0].innerHTML;
                // document.getElementById("centerID").value = this.cells[1].innerHTML;
                document.getElementById("centerID").value = this.cells[1].innerHTML;
                document.getElementById("firstName").value = this.cells[3].innerHTML;
                document.getElementById("lastName").value = this.cells[4].innerHTML;
                document.getElementById("NIC").value = this.cells[5].innerHTML;
                document.getElementById("addressLine1").value = this.cells[6].innerHTML;
                document.getElementById("contactNo1").value = this.cells[7].innerHTML;
                document.getElementById("landArea").value = this.cells[8].innerHTML;
                // document.getElementById("dob").value = this.cells[8].innerHTML;

                let gender_temp = this.cells[9].innerHTML;
                if (gender_temp == "1"){
                    document.getElementById("male").checked=true;
                }
                else {
                    document.getElementById("female").checked=true

                }

                let isActive_temp = this.cells[10].innerHTML;
                if (isActive_temp == "1"){
                    document.getElementById("isActive").checked=true;
                }
                else {
                    document.getElementById("isActive").checked=false;

                }

                document.getElementById("addressLine2").value = this.cells[12].innerHTML;
                document.getElementById("contactNo2").value = this.cells[13].innerHTML;
                // document.getElementById("centerID").value = this.cells[13].innerHTML;


                document.getElementById('isActive').disabled=false;
                document.getElementById('farmerID').readOnly=true;


                // $('#myInput').val( this.cells[0].innerHTML);



            }
        }
    }


</script>
</body>
