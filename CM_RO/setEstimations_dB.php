<?php
include("../Common/config.php");

if (isset($_POST['sendEstimations'])) {
    $estimationID = $_POST['estimationID'];
    $DateOn = $_POST['DateOn'];
    $PaddyType = $_POST['PaddyType'];
    $landArea = $_POST['totalLandArea'];
    $centerID = $_POST['centerID'];



    $season = $_POST['season'];
    $totalFarmers = $_POST['totalFarmers'];
    $quantity = $_POST['quantity'];



    if (!empty($estimationID))
    {
            $sql = "INSERT INTO `tbl_estimations`(`estimationID`, `centerID`, `DateOn`, `paddyType`, `season`, `landArea`, `totalFarmers`, `quantity`) 
                VALUES ('$estimationID', '$centerID','$DateOn', '$PaddyType', '$season','$landArea','$totalFarmers','$quantity')";





            if ($con->query($sql) === TRUE) {

                function phpAlert($msg)
                {
                    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
                }

                phpAlert("New record successfully Inserted");
                header('Location: setEstimations.php?e=data inserted');

            } else {

                //This will print the error//

                print("Error: " . $sql . "<br>" . $con->error);

                //This will redirect to same page and it'll show the message above url//

                header('Location: setEstimations.php?e=Wrong Credentials11');
            }


        } else {
            header('Location: setEstimations.php?e=Wrong Credentials');

        }
    }
    else {
        header('Location: setEstimations.php?e=quantity missing');

}