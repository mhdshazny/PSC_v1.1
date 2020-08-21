<?php
include("../Common/config.php");

if (isset($_POST['addUser'])) {



    $issueOrderID = $_POST['issueOrderID'];
    $paddyType = $_POST['paddyType'];

    $customerID = $_POST['customer'];
    $vehicleID = $_POST['vehicleID'];
    $unitPrice= $_POST['unitPrice'];
    $orderDateOn = $_POST['orderDateOn'];
    $quantity = $_POST['quantity'];
    $acceptDateOn = $_POST['acceptDateOn'];
    $confirmDateOn = $_POST['confirmDateOn'];
    $region= $_POST['region'];

    $isActive="Active";
    $adminID='AD003';
    $Description= 'ABC';


//    if (!empty($picture)) {

    if (!empty($issueOrderID)) {

        $sql ="INSERT INTO `tbl_issueorder`(`ioID`, `customerID`, `region`, `paddyType`, `Qty`, `unitPrice`, 
                    `orderDateOn`, `vehicleID`, `adminID`, `Description`, `confrimDateOn`, `isActive`) 
                    VALUES ('$issueOrderID','$customerID','$region','$paddyType','$quantity','$unitPrice',
                    '$orderDateOn','$vehicleID','$adminID','$Description','$acceptDateOn','$isActive')";


        if ($con->query($sql) === TRUE) {

            function phpAlert($msg)
            {
                echo '<script type="text/javascript">alert("' . $msg . '")</script>';
            }

            phpAlert("New record successfully Inserted");
            header('Location: confirmIssueOrders.php?e=data inserted');

        } else {

            //This will print the error//

            print("Error: " . $sql . "<br>" . $con->error);

            //This will redirect to same page and it'll show the message above url//

            header('Location: confirmIssueOrders.php?e=Wrong Credentials11');
        }


    } else {
        header('Location: confirmIssueOrders.php?e=Wrong Credentials');

    }
}
else {
    header('Location: confirmIssueOrders.php?e=quantity missing');

}