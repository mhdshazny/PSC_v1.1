<?php
include("../Common/config.php");
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

    $isActive="Active";

//    if (!empty($picture)) {
    $target_dir = "../Upload/User/";
    $target_file = $target_dir . basename($_FILES["picture"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["picture"]["tmp_name"]);

    if(!$check) {
        header('Location: userReg.php?e=Wrong Credentials1');
    }
    if ($_FILES["picture"]["size"] > 500000) {
        header('Location: userReg.php?e=Wrong Credentials2');
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
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
//            echo "bootbox.alert({
//    message: \"This is an alert with a callback!\",
//    callback: function () {
//        console.log('This was logged in the callback!');
//    }
//})";
        }
//    }
//    else{
//        header('Location: userReg.php?e=Picture_Missing');
//
//    }
}