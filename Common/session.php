<?php
session_start();
// Set session variables
$loggedUser = $_SESSION['loggedUser'];
$userID = $_SESSION['userID'];
$role = $_SESSION['Role'];
$centerID = $_SESSION['userCenterID'];
//$userStatus = $_SESSION['userStatus'];