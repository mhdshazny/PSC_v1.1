<?php
include ("../Common/config.php");

//Delete

if (isset($_POST['Delete'])) {
    $userID = $_POST['Delete'];
    $delquery = "UPDATE `tbl_issueorder` SET `isActive`=0 WHERE `ioID` = ?";
    $stmnt = $con->prepare($delquery);
    $stmnt->bind_param("s", $userID);

//if ( $con->query($delquery)===true){
    if ($stmnt->execute()) {
//        Print "Deletion Successful";
//header('Location: Books.php?e=successfully deleted');
        $delalert = array("result"=>true, "message"=>'Successfully rejected the order !');
        echo json_encode($delalert);
    } else {
//    Print "Deletion Failed";
//header('Location: Books.php?e=Deletion Failed');
        $delalert = array("result"=>false, "message"=>'Rejection Failed Query Error ! Contact Admin');
        echo json_encode($delalert);
    }
    $stmnt->close();
}

if (isset($_GET['keyword']) && $_GET['keyword'] == 'searchCenter') {
    $centerID=$_GET['id'];
    $qty='';
    $query="select `Qty` from `tbl_stores` where `centerID`='".$centerID."'";
    $result = $con->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $qty = $row['Qty'];
            $Qty = array("result" => true, "Qty" => $qty);
            echo json_encode($Qty);
        }
    }
    else{
        $delalert = array("result"=>false, "message"=>'Failed');
        echo json_encode($delalert);
    }
}

if (isset($_GET['search']) && $_GET['search'] == 'searchVehicle') {
    $vehicleID=$_GET['id'];
    $qty='';
    $query="select `capacity` from `tbl_vehicles` where `vehicleID`='".$vehicleID."'";
    $result = $con->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $qty = $row['capacity'];
            $Qty = array("result" => true, "Vehicle" => $qty);
            echo json_encode($Qty);
        }
    }
    else{
        $delalert = array("result"=>false, "Vehicle"=>'Failed');
        echo json_encode($delalert);
    }
}


$con->close();

