<?php
include("../Common/config.php");

if (isset($_POST['acceptIssueOrder'])) {



    $issueOrderID = $_POST['issueOrderID'];
    $paddyType = $_POST['paddyType'];
    $lName = $_POST['lastName'];
    $vehicleID = $_POST['vehicleID'];
    $orderDateOn = $_POST['orderDateOn'];
    $quantity = $_POST['quantity'];
    $acceptDateOn = $_POST['acceptDateOn'];

    $customerID="CUS001";
    $region="Kandy";
    $unitPrice="50";
    $isActive="1";
    $adminID='AD001';
    $Description= 'ABC';



//    if (!empty($picture)) {

    if (!empty($issueOrderID) && !empty($orderDateOn) && !empty($quantity)) {

            $sql ="INSERT INTO `tbl_issueorder`(`ioID`, `customerID`, `region`, `paddyType`, `Qty`, `unitPrice`, 
                    `orderDateOn`, `vehicleID`, `adminID`, `Description`, `confirmDateOn`, `isActive`) 
                    VALUES ('$issueOrderID','$customerID','$region','$paddyType','$quantity','$unitPrice',
                    '$orderDateOn','$vehicleID','$adminID','$Description','$acceptDateOn','$isActive')";


//
//                "INSERT INTO `tbl_issueorder`(`ioID`, `paddyType`, `quantity`, `orderDateOn`, `vehicleID`,  `confirmDateOn`)
//                VALUES ('$issueOrderID', '$paddyType','$quantity','$orderDateOn','$vehicleID','$acceptDateOn')";


            if ($con->query($sql) === TRUE) {

                function phpAlert($msg)
                {
                    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
                }

                phpAlert("New record successfully Inserted");
                header('Location: acceptIssueOrders.php?e=data inserted');

            } else {

                //This will print the error//

                print("Error: " . $sql . "<br>" . $con->error);

                //This will redirect to same page and it'll show the message above url//

                header('Location: acceptIssueOrders.php?e=Wrong Credentials11');
            }


        } else {
            header('Location: acceptIssueOrders.php?e=Wrong Credentials');

        }


//    }
//    else{
//        header('Location: userReg.php?e=Picture_Missing');
//
//    }
}