<?php
include("../Common/config.php");



//Insert

mysqli_autocommit($con,FALSE);


if (isset($_POST['addUser'])) {
    $pass1 = $_POST['Password'];
    $pass2 = $_POST['confirmPassword'];
    $userID = $_POST['userID'];
    $centerID = $_POST['centerID'];
    $roleID = $_POST['roleID'];
    $fName = $_POST['firstName'];
    $lName = $_POST['lastName'];
    $address1 = $_POST['addressLine1'];
    $address2 = $_POST['addressLine2'];
    $contact = $_POST['contactNo1'];
    $contact2 = $_POST['contactNo2'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender=$_POST['gender'];
//    $picture = addslashes(file_get_contents($_FILES["picture"]["temp_name"]));
    $picture=basename($_FILES["picture"]["name"]);
    $passwordFinal = $pass1;

    $isActive=$_POST['isActive'];

    $target_dir = "../Upload/User/";



    if (!empty($picture)) {
        $target_file = $target_dir . basename($_FILES["picture"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["picture"]["tmp_name"]);

        if (!$check) {
            header('Location: userReg.php?e=Wrong Credentials1');
        }
        if ($_FILES["picture"]["size"] > 500000) {
            header('Location: userReg.php?e=Wrong Credentials2');
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            header('Location: userReg.php?e=Wrong Credentials3');
        }
        if (!empty($userID) && !empty($pass2) && !empty($pass1)) {
            if ($pass1 == $pass2) {
                $sql = "INSERT INTO `tbl_employee`(`empID`, `firstName`, `lastName`, `profilePic`, `roleID`, `addressLine1`, `addressLine2`, `contactNo1`, `contactNo2`, `email`, `centerID`, `dob`, `gender`, `isActive`,`password`) 
                VALUES ('$userID', '$fName', '$lName', '$picture','$roleID','$address1','$address2','$contact','$contact2','$email','$centerID','$dob','$gender','1','$passwordFinal')";

                if ($con->query($sql) === TRUE) {
                    if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
                        mysqli_commit($con);
                        header('Location: userReg.php?e=data inserted');
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                } else {

                    //This will print the error//

                    print("Error: " . $sql . "<br>" . $con->error);

                    //This will redirect to same page and it'll show the message above url//

                    header('Location: userReg.php?e=Wrong Credentials11');
                }


            } else {
                header('Location: userReg.php?e=Wrong Credentials4');

            }
        } else {
            header('Location: userReg.php?e=userID or password Missing6');

        }
    }
    else{
        header('Location: userReg.php?e=Please insert a profile picture');

    }
}

//Update

if (isset($_POST['updateUser'])){

    $upUserID = $_POST['userID'];
    $upPass1 = $_POST['Password'];
    $upPass2 = $_POST['confirmPassword'];
    $upCenterID = $_POST['centerID'];

    $upRoleID = $_POST['roleID'];
    $upfName = $_POST['firstName'];
    $uplName = $_POST['lastName'];
    $upAddress1 = $_POST['addressLine1'];
    $upAddress2 = $_POST['addressLine2'];
    $upContact = $_POST['contactNo1'];
    $upContact2 = $_POST['contactNo2'];
    $upEmail = $_POST['email'];
    $upDob = $_POST['dob'];
    $upGender=$_POST['gender'];
//    $picture = addslashes(file_get_contents($_FILES["picture"]["temp_name"]));
    $upPicture=basename($_FILES["picture"]["name"]);
    $upPasswordFinal = $upPass1;

    $upIsActive=$_POST['isActive'];

    $target_dir = "../Upload/User/";



    if ($upPicture!="") {
        $target_file = $target_dir . basename($_FILES["picture"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["picture"]["tmp_name"]);

        if (!$check) {
            header('Location: userReg.php?e=Wrong Credentials1');
        }
        if ($_FILES["picture"]["size"] > 500000) {
            header('Location: userReg.php?e=Wrong Credentials2');
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            header('Location: userReg.php?e=Wrong Credentials3');
        }
        if (!empty($userID) && !empty($pass2) && !empty($pass1)) {
            if ($pass1 == $pass2) {
                $sql = "INSERT INTO `tbl_employee`(`empID`, `firstName`, `lastName`, `profilePic`, `roleID`, `addressLine1`, `addressLine2`, `contactNo1`, `contactNo2`, `email`, `centerID`, `dob`, `gender`, `isActive`,`password`) 
                VALUES ('$userID', '$fName', '$lName', '$picture','$roleID','$address1','$address2','$contact','$contact2','$email','$centerID','$dob','$gender','$isActive','$passwordFinal')";

                if ($con->query($sql) === TRUE) {
                    if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
                        mysqli_commit($con);
                        header('Location: userReg.php?e=data inserted');


                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }


                } else {

                    //This will print the error//

                    print("Error: " . $sql . "<br>" . $con->error);

                    //This will redirect to same page and it'll show the message above url//

                    header('Location: userReg.php?e=Wrong Credentials11');
                }
            } else {
                header('Location: userReg.php?e=Wrong Credentials4');

            }
        } else {
            header('Location: userReg.php?e=userID or password Missing6');

        }
    }
    else{
     /*   echo $upUserID;
        echo $upPass1;
        exit();*/
        if ($upUserID!="" && $upPass1!="" && $upPass2!="") {
            if ($upPass1 == $upPass2) {
                $sql = "UPDATE `tbl_employee` SET `firstName`='$upfName',`lastName`='$uplName',`profilePic`='$upPicture',`addressLine1`='$upAddress1',`addressLine2`='$upAddress2',`contactNo1`='$upContact',`contactNo2`='$upContact2',`email`='$upEmail',`centerID`='$upCenterID',`dob`='$upDob',`gender`='$upGender',`isActive`='$upIsActive',`password`='$upPasswordFinal' WHERE `empID`='$upUserID' ";

//                `profilePic`, `roleID`, `addressLine1`, `addressLine2`, `contactNo1`, `contactNo2`, `email`, `centerID`, `dob`, `gender`, `isActive`,`password`
                if ($con->query($sql) === TRUE) {
//                     if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
                    mysqli_commit($con);
                    header('Location: userReg.php?e=data inserted');
//                     } else {
//                         echo "Sorry, there was an error uploading your file.";
//                     }


                } else {

                    //This will print the error//

//                     print("Error: " . $sql . "<br>" . $con->error);

                    //This will redirect to same page and it'll show the message above url//

                    header('Location: userReg.php?e=Up Wrong Credentials11');
                }


            } else {
                header('Location: userReg.php?e=Up Wrong Credentials4');

            }
        } else {
            header('Location: userReg.php?e=userID or password Missing Up');

        }
    }

}