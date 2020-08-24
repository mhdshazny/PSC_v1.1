<?php
include("../Common/config.php");



//Insert

mysqli_autocommit($con,FALSE);


if (isset($_POST['addCustomer'])) {
    $customerID = $_POST['customerID'];
    $centerID = $_POST['centerID'];

    $fName = $_POST['firstName'];
    $lName = $_POST['lastName'];
    $address1 = $_POST['addressLine1'];
    $address2 = $_POST['addressLine2'];
    $contact = $_POST['contactNo1'];
    $contact2 = $_POST['contactNo2'];
    $email = $_POST['email'];
    $gender=$_POST['gender'];
    $isActive=$_POST['isActive'];
//    $isActive='1';
    $region = $_POST['regionName'];
    $NIC = $_POST['NIC'];

    if (!empty($customerID) && !empty($fName) && !empty($lName)&& !empty($address1)&& !empty($contact)&& !empty($email)&& !empty($gender)&& !empty($isActive)) {

            $sql = "INSERT INTO `tbl_customer`(`customerID`, `firstName`, `lastName`, `addressLine1`, `addressLine2`, `contactNo1`, `contactNo2`, `email`, `centerID`, `gender`, `isActive`,`NIC`,`region`) 
                VALUES ('$customerID', '$fName', '$lName','$address1','$address2','$contact','$contact2','$email','$centerID','$gender','$isActive','$NIC','$region')";

            if ($con->query($sql) === TRUE) {
                    mysqli_commit($con);
                    header('Location: Customer_Register.php?e=data inserted');
            } else {

                //This will print the error//

                print("Error: " . $sql . "<br>" . $con->error);

                //This will redirect to same page and it'll show the message above url//

                header('Location: Customer_Register.php?e=Wrong Credentials11');
            }


    } else {
        header('Location: Customer_Register.php?e=missing important credentials');

    }


}

//Update

if (isset($_POST['updateCustomer'])){

    $UP_customerID = $_POST['customerID'];
    $UP_centerID = $_POST['centerID'];

    $UP_fName = $_POST['firstName'];
    $UP_lName = $_POST['lastName'];
    $UP_address1 = $_POST['addressLine1'];
    $UP_address2 = $_POST['addressLine2'];
    $UP_contact = $_POST['contactNo1'];
    $UP_contact2 = $_POST['contactNo2'];
    $UP_email = $_POST['email'];
    $UP_gender=$_POST['gender'];
    $UP_isActive=$_POST['isActive'];
    $UP_region = $_POST['regionName'];
    $UP_NIC = $_POST['NIC'];


        if (!empty($UP_customerID) && !empty($UP_fName) && !empty($UP_lName)&& !empty($UP_address1)&& !empty($UP_contact)&& !empty($UP_email)&& !empty($UP_gender)&& !empty($UP_isActive))
        {
            $sql = "UPDATE `tbl_customer` SET `firstName`='$UP_fName',`lastName`='$UP_lName',`addressLine1`='$UP_address1',`addressLine2`='$UP_address2',`contactNo1`='$UP_contact',`contactNo2`='$UP_contact2',`email`='$UP_email',`centerID`='$UP_centerID',`gender`='$UP_contact2',`isActive`='$UP_isActive',`region`='$UP_region' WHERE `customerID`='$UP_customerID' ";

//                `profilePic`, `roleID`, `addressLine1`, `addressLine2`, `contactNo1`, `contactNo2`, `email`, `centerID`, `dob`, `gender`, `isActive`,`password`
            if ($con->query($sql) === TRUE) {
//                     if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
                mysqli_commit($con);
                header('Location: Customer_Register.php?e=data updated');
//                     } else {
//                         echo "Sorry, there was an error uploading your file.";
//                     }


            } else {

                //This will print the error//

//                     print("Error: " . $sql . "<br>" . $con->error);

                //This will redirect to same page and it'll show the message above url//

                header('Location: Customer_Register.php?e=Up Wrong Credentials/Query stopped working');
            }


        } else {
            header('Location: Customer_Register.php?e=credentials Missing6');

        }
    }
