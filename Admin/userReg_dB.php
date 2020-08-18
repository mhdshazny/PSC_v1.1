<?php
include("../Common/config.php");

if (isset($_POST['addUser'])) {
    $pass1 = $_POST['Password'];
    $pass2 = $_POST['confirmPassword'];
    $userID = $_POST['userID'];
    $centerID = $_POST['centerID'];
    $regionID = $_POST['regionID'];



    $roleID = $_POST['roleType'];
    $fName = $_POST['firstName'];
    $lName = $_POST['lastName'];
    $address1 = $_POST['addressLine1'];
    $address2 = $_POST['addressLine2'];
    $contact = $_POST['contactNo1'];
    $contact2 = $_POST['contactNo2'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender=$_POST['gender'];
    $picture = addslashes(file_get_contents($_FILES["picture"]["temp_name"]));

    $isActive="Active";

//    if (!empty($picture)) {

        if (!empty($userID) && !empty($pass2) && !empty($pass1)) {
            if ($pass1 == $pass2) {
                $sql = "INSERT INTO `tbl_user`(`userID`, `firstName`, `lastName`, `profilePic`, `roleID`, `addressLine1`, `addressLine2`, `contactNo1`, `contactNo2`, `email`, `centerID`, `dob`, `gender`, `regionID`, `isActive`) 
                VALUES ('$userID', '$fName', '$lName', '$picture','$roleID','$address1','$address2','$contact','$contact2','$email','$centerID','$dob','$gender','$regionID','$isActive')";


                if ($con->query($sql) === TRUE) {

                    function phpAlert($msg)
                    {
                        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
                    }

                    phpAlert("New record successfully Inserted");
                    header('Location: userReg.php?e=data inserted');

                } else {

                    //This will print the error//

                    print("Error: " . $sql . "<br>" . $con->error);

                    //This will redirect to same page and it'll show the message above url//

                    header('Location: userReg.php?e=Wrong Credentials11');
                }


            } else {
                header('Location: userReg.php?e=Wrong Credentials');

            }
        } else {
            header('Location: userReg.php?e=userID or password Missing');
        }
//    }
//    else{
//        header('Location: userReg.php?e=Picture_Missing');
//
//    }
}