<?php
include("../Common/config.php");

if (isset($_POST['addRecord'])) {
    $accID = $_POST['bankAccID'];
    $name = $_POST['bankName'];
    $accNo = $_POST['bankAccNo'];
    $region = $_POST['region'];



    if (!empty($estimationID)) {
        $sql = "INSERT INTO `tbl_estimations`(`bankAccID`, `bankName`, `bankAccNo`, `region`) 
                VALUES ('$accID', '$name','$accNo', '$region')";


        if ($con->query($sql) === TRUE) {

            function phpAlert($msg)
            {
                echo '<script type="text/javascript">alert("' . $msg . '")</script>';
            }

            phpAlert("New record successfully Inserted");
            header('Location: allocateCash.php?e=data inserted');

        } else {

            //This will print the error//

            print("Error: " . $sql . "<br>" . $con->error);

            //This will redirect to same page and it'll show the message above url//

            header('Location: allocateCash.php?e=Wrong Credentials11');
        }


    } else {
        header('Location: allocateCash.php?e=Wrong Credentials');

    }





}