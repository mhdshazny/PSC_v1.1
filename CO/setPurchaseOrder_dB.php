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






    if (!empty($PurchaseOrderID))
    {
        $sql = "INSERT INTO ` tbl_purchaseorder`( `DateOn`,`poID`,`farmerID`,`paddytype`,`Qty`,`unitPrice`,`Description`) 
                VALUES (' $date ', '$PurchaseOrderID', '$FarmerID',''$PaddyType'','$Quantity','$UnitPrice','$Description')";





        if ($con->query($sql) === TRUE) {

            function phpAlert($msg)
            {
                echo '<script type="text/javascript">alert("' . $msg . '")</script>';
            }

            phpAlert("New record successfully Inserted");
            header('Location: setPurchaseOrders.php?e=data inserted');

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
