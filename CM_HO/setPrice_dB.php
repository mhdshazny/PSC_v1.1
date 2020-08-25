<?php
include("../Common/config.php");

if (isset($_POST['setPrice'])) {
    $dateOn = $_POST['DateOn'];
    $priceID = $_POST['paddyType'];
    $buyingPrice = $_POST['buyingPrice'];
    $sellingPrice = $_POST['sellingPrice'];
    $paddyType = $_POST['paddyType'];

//echo $priceID;
//echo $buyingPrice;
//echo $sellingPrice;
//exit();


    if (!empty($priceID) && !empty($buyingPrice) && !empty($sellingPrice)) {
       /* $sql = "INSERT INTO `tbl_price`(`paddyType`, `buyingPrice`, `sellingPrice`)
                VALUES ('$PaddyType', '$buyingPrice','$sellingPrice')";*/
    $sql = "UPDATE `tbl_price` SET `DateOn`= '$dateOn',`buyingPrice`='$buyingPrice', `sellingPrice`='$sellingPrice' WHERE `priceID`='$priceID'";
    $sqlIn ="INSERT INTO `tbl_priceRecord`(`priceRecID`, `paddyType`, `buyingPrice`, `sellingPrice`, `DateOn`) VALUES ('$priceID','$paddyType','$buyingPrice','$sellingPrice', '$dateOn')";

        if ($con->query($sql) === TRUE && $con->query($sqlIn)==true) {

            function phpAlert($msg)
            {
                echo '<script type="text/javascript">alert("' . $msg . '")</script>';
            }

            phpAlert("New record successfully updated");
            header('Location: setPrice.php?e=data inserted');

        } else {

            //This will print the error//

            print("Error: " . $sql . "<br>" . $con->error);

            //This will redirect to same page and it'll show the message above url//

            header('Location: setPrice.php?e=Wrong Credentials11');
        }

    }
    else{
        header('Location: setPrice.php?e=Missing values');
    }
}
