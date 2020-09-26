<?php
include("../Common/config.php");

if (isset($_POST['addRecord'])) {

    $transferID = $_POST['transferID'];
    $Date = $_POST['Date'];

    $accID = $_POST['bankAccID'];

    $paying = $_POST['payingAccNo'];
    $amount = $_POST['amount'];



    if (!empty($transferID)) {
        $sql = "INSERT INTO `tbl_mnytransfers`(`transferID`,`bankAccID`, `payingAccNo`, `amount`, `Date`) 
                VALUES ('$transferID','$accID', '$paying','$amount', '$Date')";


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