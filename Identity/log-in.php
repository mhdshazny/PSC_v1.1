<?php
session_destroy();
//session_start();
//$user = $_POST['username'];
//$pass = $_POST['password'];


include("../Common/config.php");
//include("session.php");


if (isset($_POST['username']))
    $user = $_POST['username'];
$pass = $_POST['password'];


$result = mysqli_query($con, "select * from tbl_employee where email = '$user' and password = '$pass' limit 1");
//        while($row = mysqli_fetch_array($result))
//        {
//            print ("Login Successful");
//            exit();
//        }
////        mysql
///
if (mysqli_num_rows($result) == 1) {

    //print ("Login Successful");
    foreach ($result as $row) {
        $_SESSION['loggedUser'] = $row["email"];
        $_SESSION['userID'] = $row["empID"];
        $_SESSION['Role'] = $row["roleID"];
        $_SESSION['userCenterID'] = $row["centerID"];
//        $_SESSION['userStatus'] = $row["Acc_Status"];

        if ($row['roleID'] == "1") {
            header('Location:Login.php?e=success 111');


        }
        elseif ($row['roleID'] == "2") {

            header('Location:../Admin/PSC_Admin_Dashboard.php?e=Username or password Success');
        }
        else {
            header('Location:Login.php?e= success 333');

        }

    }

//    header('Location:../Admin/PSC_Admin_Dashboard.php?e=Username or password Success');


} else {
    //print("Error: " . $sql . "<br>" . $con->error);
//            print ("Wrong Credentials.....Maanga Madaya, Don't forget to create popup cookie in jquery ");
//                exit();

    header('Location:Login.php?e=Username or password failed');


}
$con->close();

?>

