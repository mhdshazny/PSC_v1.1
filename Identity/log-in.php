<?php
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
//    foreach ($result as $row) {
////        $_SESSION['loggeduser'] = $row["M_Name"];
////        $_SESSION['userid '] = $row["Mem_ID"];
////        $_SESSION['useraddress'] = $row["Address"];
////        $_SESSION['userstatus'] = $row["Acc_Status"];
//
//        if ($row['RoleID'] == "Admin") {
//
//            header('Location:Dashboard.php?e=Login Successful and session loaded');
//
//        } elseif ($row['RoleID'] == "Student") {
//            header('Location:StdDashboard.php?e=Login Successful');
//
//        } else {
//            header('Location:LectDashboard.html?e=Login Successful');
//
//        }

//    }

    header('Location:../Admin/PSC_Admin_Dashboard.php?e=Username or password Success');


} else {
    //print("Error: " . $sql . "<br>" . $con->error);
//            print ("Wrong Credentials.....Maanga Madaya, Don't forget to create popup cookie in jquery ");
//                exit();

    header('Location:Login.php?e=Username or password failed');


}
$con->close();

?>

