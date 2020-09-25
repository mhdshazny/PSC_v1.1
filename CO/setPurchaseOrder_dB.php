<?php
include("../Common/config.php");
$Date = $_POST['Date'];
$PurchaseOrderID = $_POST['PurchaseOrderID'];
$FarmerID = $_POST['farmerID'];
$StockID = $_POST['StockID'];
$PaddyType = $_POST['PaddyType'];
$Quantity = $_POST['Quantity'];
$UnitPrice = $_POST['UnitPrice'];
$Total = $_POST['Total'];
$Description = $_POST['Description'];
$isActive="1";
$CenterID = $_POST['CenterID'];


if (isset($_POST['addPOrder'])) {
    if (!empty($_POST['PurchaseOrderID']))
    {
        $sql = "INSERT INTO `tbl_purchaseorder`(`poID`,`farmerID`, `paddyType`,`Qty`,`unitPrice`,`total`,`centerID`,`DateOn`,`Description`,`isActive`) 
                VALUES ('$PurchaseOrderID','$FarmerID','$PaddyType','$Quantity','$UnitPrice',' $Total', '$CenterID' ,'$Date','$Description','$isActive')";





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

if (isset($_POST['updatePO'])) {


    if ($PurchaseOrderID != "") {
//            if ($upPass1 == $upPass2) {
        $sql = "UPDATE `tbl_purchaseorder` SET `farmerID`='$FarmerID',`paddyType`='$PaddyType',`Qty`='$Quantity',`unitPrice`='$UnitPrice',`total`='$Total',`centerID`='$CenterID',`DateOn`='$Date',`isActive`='$isActive' WHERE `poID`='$PurchaseOrderID' ";

//                `profilePic`, `roleID`, `addressLine1`, `addressLine2`, `contactNo1`, `contactNo2`, `email`, `centerID`, `dob`, `gender`, `isActive`,`password`
        if ($con->query($sql) === TRUE) {
//                     if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
            mysqli_commit($con);
            header('Location: setPurchaseOrders.php?e=data inserted');
//                     } else {
//                         echo "Sorry, there was an error uploading your file.";
//                     }


        } else {

            //This will print the error//

//                     print("Error: " . $sql . "<br>" . $con->error);

            //This will redirect to same page and it'll show the message above url//

            header('Location: setPurchaseOrders.php?e=Up Wrong Credentials11');
        }
//
//
    } else {
        header('Location: setPurchaseOrders.php?e=Up Wrong Credentials PurchaseOrderID failed');
//
    }
}
//        } else {
//            header('Location: userReg.php?e=userID or password Missing Up');
//
//        }
//    }

