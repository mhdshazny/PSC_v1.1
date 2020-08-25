<?php
include("../Common/config.php");

if (isset($_POST['search'])) {

    $ioID = $_POST['$ioID'];


    $output = '';

    if (!empty($_POST['ioID'])) {
        $sql = "SELECT  * FROM `: tbl_issueorder` WHERE ioID LIKE '$ioID'";

        $count = mysql_num_rows($sql);

        if ($count == 0) {
            $output = 'There was no search results';
        } else {


            while ($row = mysql_fetch_array($sql)) {
                $Quantity = $row["Qty"];
                $UnitPrice = $row["unitPrice"];
                $Total = $row["netTotal"];

                $output .= '<div>'. $Quantity. '  ' .$UnitPrice.'  '. $Total.'</div>';

            }

//
//            if ($con->query($sql) === TRUE) {
//
//                function phpAlert($msg)
//                {
//                    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
//                    // echo "<script type='text/javascript'>alert('$msg');</script>";
//                }
//
//                phpAlert("New record successfully Inserted");
//                header('Location: setPurchaseOrders.php?e=data inserted');
////            $message = "Successfully added to the database";
////            echo "<script type='text/javascript'>alert('$message');</script>";
//
//
////           alert("Successfully inserted");
////
////            function alert($msg)
////            {
////                echo "<script type='text/javascript'>alert('$msg');</script>";
////            }
//
//
//            } else {
//
//                //This will print the error//
//
//                print("Error: " . $sql . "<br>" . $con->error);
//
//                //This will redirect to same page and it'll show the message above url//
//
//                header('Location: setPurchaseOrders.php?e=Wrong Credentials11');
//            }
//
////
//
//
//        else {
//                header('Location: setPurchaseOrders.php?e=Wrong Credentials');
//
//            }
//        }
//    else {
//            header('Location: setPurchaseOrders.php?e=quantity missing');
//
//        }
//    }
        }
    }
}
