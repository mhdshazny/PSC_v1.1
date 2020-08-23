<?php
include("../Common/config.php");

if (isset($_POST['addPOrder'])) {
    $date = $_POST['date'];
    $PurchaseOrderID = $_POST['PurchaseOrderID'];
    $FarmerID = $_POST['FarmerID'];
    $PaddyType = $_POST['PaddyType'];
    $Quantity = $_POST['Quantity'];
    $UnitPrice = $_POST['UnitPrice'];
    $Description = $_POST['Description'];
    $isActive="1";





    if (!empty($_POST['PurchaseOrderID']))
    {
        $sql = "INSERT INTO `tbl_purchaseorder`(`poID`, `farmerID`, `Qty`, `unitPrice`, `DateOn`, `Description`, `isActive`, `paddytype`) 
                VALUES ('$PurchaseOrderID','$FarmerID','$Quantity','$UnitPrice','$date','$Description','$isActive','$PaddyType')";





        if ($con->query($sql) === TRUE) {

            function phpAlert($msg)
            {
               echo '<script type="text/javascript">alert("' . $msg . '")</script>';
               // echo "<script type='text/javascript'>alert('$msg');</script>";
            }

            phpAlert("New record successfully Inserted");
            header('Location: setPurchaseOrders.php?e=data inserted');
//            $message = "Successfully added to the database";
//            echo "<script type='text/javascript'>alert('$message');</script>";


//           alert("Successfully inserted");
//
//            function alert($msg)
//            {
//                echo "<script type='text/javascript'>alert('$msg');</script>";
//            }


        } else {

            //This will print the error//

            print("Error: " . $sql . "<br>" . $con->error);

            //This will redirect to same page and it'll show the message above url//

            header('Location: setEstimations.php?e=Wrong Credentials11');
        }


    } else {
        header('Location: setPurchaseOrders.php?e=Wrong Credentials');

    }
}
else {
    header('Location: setPurchaseOrders.php?e=quantity missing');

}
