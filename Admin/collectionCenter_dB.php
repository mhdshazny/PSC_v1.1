<?php
include("../Common/config.php");



//Insert

mysqli_autocommit($con,FALSE);


if (isset($_POST['addCenter'])) {

    $centerID = $_POST['centerID'];

    $region = $_POST['region'];
    $capacity = $_POST['capacity'];
    $contact = $_POST['contactNo1'];
    $bankAccID = $_POST['bankAccID'];
    $centerManager = $_POST['centerManager'];
    $isActive = "1";


    if (!empty($centerID) && !empty($region) && !empty($capacity) && !empty($contact) && !empty($bankAccID) && !empty($isActive) && !empty($centerManager)) {

        $sql = "INSERT INTO `tbl_collectioncenter`(`centerID`, `region`, `capacity`, `contactNo`, `bankAccID`, `centerManger`, `isActive`) 
                VALUES ('$centerID', '$region','$capacity','$contact','$bankAccID','$centerManager','$isActive')";

        if ($con->query($sql) === TRUE) {
            mysqli_commit($con);
            header('Location: CollectionCenter.php?e=data inserted');
        } else {

            //This will print the error//

            print("Error: " . $sql . "<br>" . $con->error);

            //This will redirect to same page and it'll show the message above url//

            header('Location: CollectionCenter.php?e=Wrong Credentials11');
        }
    } else {
        header('Location: CollectionCenter.php?e=credentials Missing');

    }

    }

//Update

    if (isset($_POST['updateCenter'])) {


        $centerID = $_POST['centerID'];

        $region = $_POST['region'];
        $capacity = $_POST['capacity'];
        $bankAccID = $_POST['bankAccID'];
        $contact = $_POST['contactNo1'];

        $centerManager= $_POST['centerManager'];



        if (!empty($centerID) && !empty($region) && !empty($capacity) && !empty($contact) && !empty($bankAccID)  && !empty($centerManager)) {
            $sql = "UPDATE `tbl_collectioncenter` SET `region`='$region',`capacity`='$capacity',`bankAccID`='$bankAccID',`contactNo`='$contact',`centerManger`='$centerManager' WHERE `centerID`= '$centerID' ";

//                `profilePic`, `roleID`, `addressLine1`, `addressLine2`, `contactNo1`, `contactNo2`, `email`, `centerID`, `dob`, `gender`, `isActive`,`password`
            if ($con->query($sql) === TRUE) {
//                     if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
                mysqli_commit($con);
                header('Location: CollectionCenter.php?e=data updated');
//                     } else {
//                         echo "Sorry, there was an error uploading your file.";
//                     }


            } else {

                //This will print the error//

//                     print("Error: " . $sql . "<br>" . $con->error);

                //This will redirect to same page and it'll show the message above url//

                header('Location: CollectionCenter.php?e=Up Wrong Credentials/Query stopped working');
            }


        } else {
            header('Location: CollectionCenter.php?e=credentials Missing');

        }

}