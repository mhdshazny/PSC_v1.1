<?php
include("../Common/config.php");



//Insert

mysqli_autocommit($con,FALSE);


if (isset($_POST['setIssueOrder'])) {

    $issueOrderID = $_POST['issueOrderID'];
    $orderDateOn = $_POST['orderDateOn'];

    $customerID = $_POST['customerID'];
    $customer = $_POST['customer'];
    $contact = $_POST['contact'];
    $region = $_POST['region'];
    $paddyType = $_POST['paddyType'];
    $quantity = $_POST['quantity'];
    $unitPrice = $_POST['unitPrice'];
    $netTotal = $_POST['netTotal'];
    $centerID = $_POST['centerID'];


    $isActive = $_POST['isActive'];


    if (!empty($issueOrderID) && !empty($quantity) && !empty($region)) {


        $sql = "INSERT INTO `tbl_issueorder`(`ioID`, `customerID`, `region`, `paddyType`, `center1`, `totalQuantity`, `unitPrice`, `orderDateOn`, `netTotal`) 
                VALUES ('$issueOrderID', '$customerID', '$region', '$paddyType', '$centerID','$quantity','$unitPrice','$orderDateOn','$netTotal')";
        if ($con->query($sql) == true) {
            mysqli_commit($con);
            header('Location: setIssueOrders.php?e=data inserted');


        } else {

            //This will print the error//

            print("Error: " . $sql . "<br>" . $con->error);

            //This will redirect to same page and it'll show the message above url//

            header('Location: setIssueOrders.php?e=Wrong Credentials11');
        }


    } else {
        header('Location: setIssueOrders.php?e=Wrong Credentials4');

    }
}
//Run karanna

