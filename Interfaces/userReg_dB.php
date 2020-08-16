<?php


    include ("../Common/config.php");

if (isset($_POST['addUser'])) {
    $pass1 = $_POST['password'];
    $pass2 = $_POST['conPassword'];
//    $memID = $_POST['mem_id'];
    if ($pass1 == $pass2) {
        if (!empty($_POST['mem_id']) && !empty($_POST['mem_name']) && !empty($_POST['age']) && !empty($_POST['nic'])) {
            if ($_POST['role'] == "Admin") {

//                phpAlert("New record successfully Inserted");
                header('Location: ../Reg.php?e=Admins Please register via another admin');

            } else {
                $sql = "INSERT INTO members(`Mem_ID`, `M_Name`, `Gender`, `Age`, `NIC`, `Address`, `Contact`, `E_Mail`, `Acc_Status`, `UserName`, `Password`, `RoleID`) 
                VALUES ('$memID','$_POST[mem_name]','$_POST[Gender]','$_POST[age]','$_POST[nic]','$_POST[address]','$_POST[contact]','$_POST[email]','$_POST[status]','$_POST[username]','$_POST[password]','$_POST[role]')";

                if ($con->query($sql) === TRUE) {

                    function phpAlert($msg)
                    {
                        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
                    }

                    phpAlert("New record successfully Inserted");
                    header('Location: ../Reg.php?e=successfully Registered (Please go to Login !)');

                } else {

                    //This will print the error//

                    print("Error: " . $sql . "<br>" . $con->error);

                    //This will redirect to same page and it'll show the message above url//

                    header('Location: ../Reg.php?e=Wrong Credentials');
                }
            }
        } else {
            //This will redirect to same page and it'll show the message above url//
            header('Location: ../Reg.php?e=Provide all details');

        }
    } else {
        header('Location: ../Reg.php?e=Passwords did not match');

    }

    $con->close();


}
?>