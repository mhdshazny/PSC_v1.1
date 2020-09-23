<?php
include("../Common/config.php");



//Insert

mysqli_autocommit($con,FALSE);


if (isset($_POST['addBankAccount'])) {
    $bankAccountID = $_POST['bankAccID'];
    $bankName = $_POST['bankName'];

    $bankAccountNo = $_POST['bankAccNo'];
    $region = $_POST['region'];

//    $isActive=$_POST['isActive'];
    $isActive="1";


    if (!empty($bankAccountID) && !empty($bankName) && !empty($bankAccountNo)&& !empty($region)) {

        $sql = "INSERT INTO `tbl_bank`(`bankAccID`, `bankName`, `bankAccNo`, `region`,`isActive`) 
                VALUES ('$bankAccountID', '$bankName', '$bankAccountNo','$region','$isActive')";

        if ($con->query($sql) === TRUE) {
            mysqli_commit($con);
            header('Location: bankAccount.php?e=data inserted');
        } else {

            //This will print the error//

            print("Error: " . $sql . "<br>" . $con->error);

            //This will redirect to same page and it'll show the message above url//

            header('Location: bankAccount.php?e=Wrong Credentials');
        }


    } else {
        header('Location: bankAccount.php?e=missing important credentials');

    }


}

//Update

if (isset($_POST['updateBankAccount'])){
    $UP_bankAccountID = $_POST['bankAccID'];
    $UP_bankName = $_POST['bankName'];
    $UP_bankAccountNo = $_POST['bankAccountNo'];
    $UP_region = $_POST['region'];
//    $isActive=$_POST['isActive'];
    $UP_isActive="1";



    if (!empty($UP_bankAccountID) && !empty($UP_bankName) && !empty($UP_bankAccountNo)&& !empty($UP_region))
    {
        $sql = "UPDATE `tbl_bank` SET `bankAccountID`='$UP_bankAccountID',`bankName`='$UP_bankName',`bankAccountNo`='$UP_bankAccountNo'`isActive`='$UP_isActive' ";

//                `profilePic`, `roleID`, `addressLine1`, `addressLine2`, `contactNo1`, `contactNo2`, `email`, `centerID`, `dob`, `gender`, `isActive`,`password`
        if ($con->query($sql) === TRUE) {
//                     if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
            mysqli_commit($con);
            header('Location: bankAccount.php?e=data updated');
//                     } else {
//                         echo "Sorry, there was an error uploading your file.";
//                     }


        } else {

            //This will print the error//

//                     print("Error: " . $sql . "<br>" . $con->error);

            //This will redirect to same page and it'll show the message above url//

            header('Location: bankAccount.php?e=Up Wrong Credentials/Query stopped working');
        }


    } else {
        header('Location: bankAccount.php?e=credentials Missing6');

    }
}
