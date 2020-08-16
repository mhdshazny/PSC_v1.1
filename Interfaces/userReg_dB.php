<?php

if (isset($_POST['addUser'])) {
    $pass1 = $_POST['password'];
    $userID = $_POST['userID'];

    if (!empty($pass1) & !empty($userID)){
        phpAlert("Hello world");
    }
    else{
        echo "Wrong";
    }
}