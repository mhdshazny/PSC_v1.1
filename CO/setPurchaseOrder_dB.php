<?php
include("../Common/config.php");

if (isset($_POST['addPOrder'])) {
    $Date = $_POST['Date'];
    $PurchaseOrderID = $_POST['PurchaseOrderID'];
    $FarmerID = $_POST['FarmerID'];
    $StockID = $_POST['StockID'];
    $PaddyType = $_POST['PaddyType'];
    $Quantity = $_POST['Quantity'];
    $UnitPrice = $_POST['UnitPrice'];
    $Total = $_POST['Total'];
    $Description = $_POST['Description'];
    $isActive="1";





    if (!empty($_POST['PurchaseOrderID']))
    {
        $sql = "INSERT INTO `tbl_purchaseorder`(`poID`,`stockID`,`farmerID`,`Qty`,`unitPrice`,`total`,`DateOn`,`Description`,`isActive`,`paddyType`) 
                VALUES ('$PurchaseOrderID','$StockID','$FarmerID','$Quantity','$UnitPrice',' $Total','$Date','$Description','$isActive','$PaddyType')";





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

            header('Location: setPurchaseOrders.php?e=Wrong Credentials11');
        }


    } else {
        header('Location: setPurchaseOrders.php?e=Wrong Credentials');

    }
}
else {
    header('Location: setPurchaseOrders.php?e=quantity missing');

}
