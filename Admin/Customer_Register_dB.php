<?php
include("../Common/config.php");



//Insert

mysqli_autocommit($con,FALSE);


if (isset($_POST['addUser'])) {
    $customerID = $_POST['customerID'];
    $centerID = $_POST['region'];

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
    $region = $_POST['region'];
    $NIC = $_POST['NIC'];

    if (!empty($userID) && !empty($fName) && !empty($lName)&& !empty($address1)&& !empty($contact)&& !empty($email)&& !empty($gender)&& !empty($isActive)) {

            $sql = "INSERT INTO `tbl_customer`(`customerID`, `firstName`, `lastName`, `addressLine1`, `addressLine2`, `contactNo1`, `contactNo2`, `email`, `centerID`, `gender`, `isActive`,`NIC`,`region`) 
                VALUES ('$userID', '$fName', '$lName','$address1','$address2','$contact','$contact2','$email','$centerID','$gender','$isActive','$NIC','$region')";

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

if (isset($_POST['updateUser'])){

    $cusID = $_POST['customerID'];
    $centerID = $_POST['centerID'];
    $regionID = $_POST['regionID'];
    $fName = $_POST['firstName'];
    $lName = $_POST['lastName'];
    $Address1 = $_POST['addressLine1'];
    $Address2 = $_POST['addressLine2'];
    $Contact = $_POST['contactNo1'];
    $Contact2 = $_POST['contactNo2'];
    $Email = $_POST['email'];
//    $upDob = $_POST['dob'];
    $Gender=$_POST['gender'];
//    $picture = addslashes(file_get_contents($_FILES["picture"]["temp_name"]));
//    $upPicture=basename($_FILES["picture"]["name"]);
//    $upPasswordFinal = $upPass1;

    $upIsActive=$_POST['isActive'];

//    $target_dir = "../Upload/User/";



//    if ($upPicture!="") {
//        $target_file = $target_dir . basename($_FILES["picture"]["name"]);
//        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//        $check = getimagesize($_FILES["picture"]["tmp_name"]);

//        if (!$check) {
//            header('Location: userReg.php?e=Wrong Credentials1');
//        }
//        if ($_FILES["picture"]["size"] > 500000) {
//            header('Location: userReg.php?e=Wrong Credentials2');
//        }
//        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
//            header('Location: userReg.php?e=Wrong Credentials3');
//        }
//        if (!empty($cusID)) {
////            if ($pass1 == $pass2) {
//                $sql = "INSERT INTO `tbl_employee`(`customerID`, `firstName`, `lastName`, `profilePic`, `roleID`, `addressLine1`, `addressLine2`, `contactNo1`, `contactNo2`, `email`, `centerID`, `dob`, `gender`, `isActive`,`password`)
//                VALUES ('$cusID', '$fName', '$lName', '$picture','$roleID','$address1','$address2','$contact','$contact2','$email','$centerID','$dob','$gender','$isActive','$passwordFinal')";
//
//                if ($con->query($sql) === TRUE) {
//                    if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
//                        mysqli_commit($con);
//                        header('Location: userReg.php?e=data inserted');
//                    } else {
//                        echo "Sorry, there was an error uploading your file.";
//                    }
//
//
//                } else {
//
//                    //This will print the error//
//
//                    print("Error: " . $sql . "<br>" . $con->error);
//
//                    //This will redirect to same page and it'll show the message above url//
//
//                    header('Location: userReg.php?e=Wrong Credentials11');
//                }


//            } else {
//                header('Location: userReg.php?e=Wrong Credentials4');
//
//            }
//        } else {
//            header('Location: userReg.php?e=userID or password Missing6');
//
//        }
//    }
//    else{
//        /*   echo $upUserID;
//           echo $upPass1;
//           exit();*/
        if ($cusID!="") {
//            if ($upPass1 == $upPass2) {
                $sql = "UPDATE `tbl_customer` SET `firstName`='$fName',`lastName`='$lName',`addressLine1`='$Address1',`addressLine2`='$Address2',`contactNo1`='$Contact',`contactNo2`='$Contact2',`email`='$Email',`region`='$centerID',`gender`='$Gender',`isActive`='$upIsActive' WHERE `customerID`='$cusID' ";

//                `profilePic`, `roleID`, `addressLine1`, `addressLine2`, `contactNo1`, `contactNo2`, `email`, `centerID`, `dob`, `gender`, `isActive`,`password`
                if ($con->query($sql) === TRUE) {
//                     if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
                    mysqli_commit($con);
                    header('Location: Customer_Register.php?e=data inserted');
//                     } else {
//                         echo "Sorry, there was an error uploading your file.";
//                     }


                } else {

                    //This will print the error//

//                     print("Error: " . $sql . "<br>" . $con->error);

                    //This will redirect to same page and it'll show the message above url//

                    header('Location: Customer_Register.php?e=Up Wrong Credentials11');
                }
//
//
            } else {
                header('Location: userReg.php?e=Up Wrong Credentials CusID failed');
//
            }
//        } else {
//            header('Location: userReg.php?e=userID or password Missing Up');
//
//        }
//    }

}