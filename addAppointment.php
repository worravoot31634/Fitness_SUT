<?php

session_start();
include("connect.php");

$accountID = $_SESSION["accountID"];
$dateApp = $_POST["date"];
$timeApp = $_POST["time"];
$dateSplit = explode("-",$dateApp);
$memberID = $accountID+implode("",$dateSplit);

$sql = "INSERT INTO appointment(accountID,memberID,dateApp,timeApp)VALUES(".$accountID.",".$memberID.",'".$dateApp."','".$timeApp."') ";

if($conn->query($sql)){
    header("location:notendcourse.html");
}else{
    header("location:calendar_enter.html");
}