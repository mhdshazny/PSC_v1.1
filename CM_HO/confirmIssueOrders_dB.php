<?php
include("../Common/config.php");

if (isset($_POST['confirmIssueOrder'])) {

    $issueOrderID = $_POST['issueOrderID'];
    $paddyType = $_POST['paddyType'];

    $customerID = $_POST['customer'];
    $vehicleID = $_POST['vehicleID'];
    $unitPrice= $_POST['unitPrice'];
    $orderDateOn = $_POST['orderDateOn'];
    $quantity = $_POST['quantity'];
    $acceptDateOn = $_POST['acceptDateOn'];
//    $confirmDateOn = $_POST['confirmDateOn'];
    $confirmDateOn = date("Y-m-d");
    $region= $_POST['region'];

    $centerID1= $_POST['centerID1'];
    $centerID2= $_POST['centerID2'];
    $qty2= $_POST['orderQuantity2'];
    $qty1= $_POST['orderQuantity1'];

    $isActive="1";
    $adminID='AD003';
    $Description= 'ABC';
    $orderStatus="Order confirmed";



//    if (!empty($picture)) {

    if (!empty($issueOrderID) && !empty($qty1) && !empty($confirmDateOn)) {
//
//        $sql ="INSERT INTO `tbl_issueorder`(`ioID`, `customerID`, `region`, `paddyType`, `Qty`, `unitPrice`,
//                    `orderDateOn`, `vehicleID`, `adminID`, `Description`, `confirmDateOn`, `isActive`)
//                    VALUES ('$issueOrderID','$customerID','$region','$paddyType','$quantity','$unitPrice',
//                    '$orderDateOn','$vehicleID','$adminID','$Description','$acceptDateOn','$isActive')
        $sql ="UPDATE `tbl_issueorder` SET `center2`='$centerID2',`Qty2`='$qty2',`Qty1`='$qty1',`vehicleID`='$vehicleID',`adminID`='$adminID',`Description`='$Description',`confrimDateOn`='$confirmDateOn',
                `orderStatus`='$orderStatus' WHERE `center`='$centerID1' && ";
//
//        $sql2 ="UPDATE `tbl_stores` SET ,`center2`='$centerID2',`Qty2`='$qty2',`Qty1`='$qty1',`vehicleID`='$vehicleID',`adminID`='$adminID',`Description`='$Description',`confrimDateOn`='$confirmDateOn',
//                `orderStatus`='$orderStatus' WHERE `center1`='$centerID1' && ";


        if ($con->query($sql) === TRUE) {

            function phpAlert($msg)
            {
                echo '<script type="text/javascript">alert("' . $msg . '")</script>';
            }

            phpAlert("Order confirmation successful");
            header('Location: confirmIssueOrders.php?e=Order confirmation successful');

        } else {

            //This will print the error//

            print("Error: " . $sql . "<br>" . $con->error);

            //This will redirect to same page and it'll show the message above url//

            header('Location: confirmIssueOrders.php?e=Query stopped working');
        }


    } else {
        header('Location: confirmIssueOrders.php?e=Wrong Credentials');

    }
}
else {
    header('Location: confirmIssueOrders.php?e=quantity missing');

}