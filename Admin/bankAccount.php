<head>

    <title>Add Bank Account</title>


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
                    <p class="text-info font-weight-bold" style="font-size: 150%; margin-left: 20%">Add Bank Account</p>

                </div>

                <?php
                $Priority = 'AdminUserReg';
                ?>
                <FORM action="bankAccount_dB.php" method="POST" class="col" enctype="multipart/form-data">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 ">
                                <div class="form-group">
                                    <label for="ContactDetails" class="col-sm-12 col-md-12 col-lg-12 rounded bg-info mt-4">Bank Details</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="bankAccID" class="col-sm-12 col-md-12 col-lg-12 control-label">Bank Acc ID</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <?php
                                        include ("../Common/config.php");
                                        $query="SELECT * FROM `tbl_bank` ORDER BY `bankAccID` DESC LIMIT 1";
                                        $result = $con->query($query);
                                        $numRows = mysqli_num_rows($result);
                                        $newID="BAC00001";
                                        if ($numRows>0){
                                            foreach ($result as $rows) {


                                                $prevID= $rows['bankAccID'];
                                                $newID = substr($prevID,4,5);
                                                $newID = $newID + 1;
                                                $newID = str_pad($newID, 5, "0", STR_PAD_LEFT);


                                                ?>
                                                <input type="text" id="bankAccID" name="bankAccID" placeholder="bankAccID" value="BAC<?= $newID?>" class="form-control" readonly>
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
                                    <label for="bankName" class="col-sm-12 col-md-12 col-lg-12 control-label">Bank Name </label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="bankName" name="bankName" placeholder="bankName" class="form-control" >
                                    </div>
                                </div>
                            </div>




                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="bankAccNo" class="col-sm-12 col-md-12 col-lg-12 control-label">Bank Account No</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="bankAccNo" name="bankAccNo" placeholder="bankAccNo" class="form-control" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 ">
                                <div class="form-group">
                                    <label for="region" class="col-sm-12 col-md-12 col-lg-12  control-label">Region</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="region" name="region" placeholder="region" class="form-control" autofocus>
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
                        <button type="submit" name="addBankAccount" id="addBankAccount" class="btn btn-primary btn-block" style="width: 50%; align-content: center">Register</button>
                        <button type="submit" name="updateBankAccount" id="updateBankAccount" class="btn btn-primary btn-block" style="width: 50%; align-content: center" disabled>Update</button>
                        <button type="button" name="reload" id="reload" class="btn btn-danger btn-block" style="width: 50%; align-content: center" onclick="location.reload()">Clear</button>

                    </div>

                    <br><br>
                </FORM>
            </div>

            <div class="row">
                <div class="container-fluid ">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                        <table id="userTable" class="table table-bordered table-hover table-light table-responsive" >
                            <thead>
                            <tr>
                                <th>Bank Account ID</th>
                                <th>Bank Name</th>
                                <th>Bank Account No</th>
                                <th>Region</th>
                                <th>Status</th>

                                <th style="width: 8%">Actions</th>
                            </tr>
                            </thead>
                            <tbody>


                            <?php
                            include("../Common/config.php");
                            $loadTable = "SELECT * FROM `tbl_bank` ORDER BY `bankAccID` DESC";
                            $result = $con->query($loadTable);
                            if ($result) {
                                foreach ($result as $row) {
                                    ?>
                                    <tr style="width: 10%">
                                        <td><?= $row['bankAccID']; ?></td>
                                        <td><?= $row['bankName']; ?></td>

                                        <td><?= $row['bankAccNo']; ?></td>
                                        <td><?= $row['region']; ?></td>

                                        <td><?= $row['isActive']; ?></td>
                                        <td style="width: 10%">
                                            <button class="btn-danger btn-sm" onclick="confirmDelete('<?= $row['bankAccID'];?>')" value="<?= $row['bankAccID']; ?>">Delete</button>
                                            <button class="btn-info btn-sm" onclick="editBank()" value="<?= $row['bankAccID']; ?>">Edit</button>

                                        </td>

                                        <!--<td hidden><?/*= $row['region']; */?></td>-->


                                    </tr>

                                    <?php
                                }

                            }

                            ?>
                            </tbody>

                        </table>
                        <script>
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

    function editBank() {
        document.getElementById('addBankAccount').disabled=true;
        document.getElementById('updateBankAccount').disabled=false;


        var table = document.getElementById('userTable'),index;

        for (var  i = 1 ; i < table.rows.length ; i++){
            table.row[i].onclick = function () {
                rIndex = this.rowIndex;
                document.getElementById("bankAccID").value = this.cells[0].innerHTML;
                // document.getElementById("centerID").value = this.cells[1].innerHTML;
                document.getElementById("bankName").value = this.cells[1].innerHTML;
                document.getElementById("bankAccNo").value = this.cells[3].innerHTML;
                document.getElementById("region").value = this.cells[4].innerHTML;


                let isActive_temp = this.cells[10].innerHTML;
                if (isActive_temp == "1"){
                    document.getElementById("isActive").checked=true;
                }
                else {
                    document.getElementById("isActive").checked=false;

                }


                // document.getElementById("centerID").value = this.cells[13].innerHTML;


                document.getElementById('isActive').disabled=false;
                document.getElementById('bankAccID').readOnly=true;


                // $('#myInput').val( this.cells[0].innerHTML);



            }
        }
    }


</script>
</body>
