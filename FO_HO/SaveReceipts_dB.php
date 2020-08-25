<?php
include("../Common/config.php");

if (isset($_POST['addBill'])) {
    $Date = $_POST['Date'];
    $SaleID= $_POST['SaleID'];
    $ioID= $_POST['ioID'];
    $Total = $_POST['Total'];
    $isActive="1";





    if (!empty($_POST['SaleID']))
    {
        $sql = "INSERT INTO `tbl_paymentreceipts`(`saleID`,`ioID`,`amount`,`DateOn`,`isActive`) 
                VALUES ('$SaleID','$ioID',' $Total','$Date','$isActive')";





        if ($con->query($sql) === TRUE) {

            function phpAlert($msg)
            {
                echo '<script type="text/javascript">alert("' . $msg . '")</script>';
                // echo "<script type='text/javascript'>alert('$msg');</script>";
            }

            phpAlert("New record successfully Inserted");
            header('Location: payReceipts.php?e=data inserted');
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

            header('Location: payReceipts.php?e=Wrong Credentials11');
        }


    } else {
        header('Location: payReceipts.php?e=Wrong Credentials');

    }
}
else {
    header('Location: payReceipts.php?e=quantity missing');

}
