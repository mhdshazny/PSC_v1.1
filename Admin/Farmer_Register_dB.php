<?php
include("../Common/config.php");



//Insert

mysqli_autocommit($con,FALSE);


if (isset($_POST['addFarmer'])) {
    $farmerID = $_POST['farmerID'];
    $centerID = $_POST['centerID'];

    $fName = $_POST['firstName'];
    $lName = $_POST['lastName'];
    $address1 = $_POST['addressLine1'];
    $address2 = $_POST['addressLine2'];
    $contact = $_POST['contactNo1'];
    $contact2 = $_POST['contactNo2'];
    $gender=$_POST['gender'];
//    $isActive=$_POST['isActive'];
    $isActive="1";
    $region = $_POST['regionName'];
    $NIC = $_POST['NIC'];
    $landArea = $_POST['landArea'];

    if (!empty($farmerID) && !empty($fName) && !empty($lName)&& !empty($address1)&& !empty($contact) && !empty($gender)&& !empty($isActive) && !empty($landArea)) {

        $sql = "INSERT INTO `tbl_farmer`(`farmerID`, `firstName`, `lastName`, `addressLine1`, `addressLine2`, `contactNo1`, `contactNo2`, `centerID`, `gender`, `isActive`,`NIC`,`landArea`) 
                VALUES ('$farmerID', '$fName', '$lName','$address1','$address2','$contact','$contact2','$centerID','$gender','$isActive','$NIC','$landArea')";

        if ($con->query($sql) === TRUE) {
            mysqli_commit($con);
            header('Location: Farmer_Register.php?e=data inserted');
        } else {

            //This will print the error//

            print("Error: " . $sql . "<br>" . $con->error);

            //This will redirect to same page and it'll show the message above url//

            header('Location: Farmer_Register.php?e=Wrong Credentials11');
        }


    } else {
        header('Location: Farmer_Register.php?e=missing important credentials');

    }


}

//Update

if (isset($_POST['updateFarmer'])){

    $UP_farmerID = $_POST['farmerID'];
    $UP_centerID = $_POST['centerID'];

    $UP_fName = $_POST['firstName'];
    $UP_lName = $_POST['lastName'];
    $UP_address1 = $_POST['addressLine1'];
    $UP_address2 = $_POST['addressLine2'];
    $UP_contact = $_POST['contactNo1'];
    $UP_contact2 = $_POST['contactNo2'];
    $UP_email = $_POST['email'];
    $UP_gender=$_POST['gender'];
    $UP_isActive="0";
    $UP_isActive=$_POST['isActive'];
    $UP_region = $_POST['regionName'];
    $UP_NIC = $_POST['NIC'];
    $landArea = $_POST['landArea'];


    if (!empty($UP_farmerID) && !empty($UP_fName) && !empty($UP_lName)&& !empty($UP_address1)&& !empty($UP_contact)&& !empty($UP_gender)&& !empty($landArea))
    {
        $sql = "UPDATE `tbl_farmer` SET `firstName`='$UP_fName',`lastName`='$UP_lName',`addressLine1`='$UP_address1',`addressLine2`='$UP_address2',`contactNo1`='$UP_contact',`contactNo2`='$UP_contact2', `centerID`='$UP_centerID',`gender`='$UP_gender',`isActive`='$UP_isActive',`landArea`='$landArea' WHERE `farmerID`='$UP_farmerID' ";

//                `profilePic`, `roleID`, `addressLine1`, `addressLine2`, `contactNo1`, `contactNo2`, `email`, `centerID`, `dob`, `gender`, `isActive`,`password`
        if ($con->query($sql) === TRUE) {
//                     if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
            mysqli_commit($con);
            header('Location: Farmer_Register.php?e=data updated');
//                     } else {
//                         echo "Sorry, there was an error uploading your file.";
//                     }


        } else {

            //This will print the error//

//                     print("Error: " . $sql . "<br>" . $con->error);

            //This will redirect to same page and it'll show the message above url//

            header('Location: Farmer_Register.php?e=Up Wrong Credentials/Query stopped working');
        }


    } else {
        header('Location: Farmer_Register.php?e=credentials Missing6');

    }
}
