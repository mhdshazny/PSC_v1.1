<?php

$servername = "localhost";
$username = "username";
$password = "password";
$db = "db_psc";


//create connection
$con=new mysqli('localhost','root','','db_psc');

//check connection
if($con->connect_error)
{
die("connection failed: ". $con->connect_error);
}
else {

}

