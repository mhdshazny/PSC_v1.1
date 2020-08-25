<?php
include ("../Common/config.php");

//Delete

if (isset($_POST['Delete'])) {
    $cusID = $_POST['Delete'];
    $delquery = "DELETE FROM `tbl_farmer` WHERE `farmerID` = ?";
    $stmnt = $con->prepare($delquery);
    $stmnt->bind_param("s", $cusID);

//if ( $con->query($delquery)===true){
    if ($stmnt->execute()) {
//        Print "Deletion Successful";
//header('Location: Books.php?e=successfully deleted');
        $delalert = array("result"=>true, "message"=>'Successfully Deleted !');
        echo json_encode($delalert);
    } else {
//    Print "Deletion Failed";
//header('Location: Books.php?e=Deletion Failed');
        $delalert = array("result"=>false, "message"=>'Deletion Failed Query Error !');
        echo json_encode($delalert);
    }
    $stmnt->close();
}
$con->close();

