<?php

include("connect.php");

session_start();
$firstName = $_POST["firstname"];
$lastName = $_POST["lastname"];
$birthDate = $_POST["birthDate"];
$typeResigter = $_POST["typeRegister"];
$IDnumber = $_POST["IDnumber"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$email = $_POST["email"];



echo $birthDate;
$sql = "INSERT INTO account(firstname,lastname,birthdate,type,IDnumber,email,address,phone) VALUES('".$firstName."','".$lastName."','".$birthDate."','".$typeResigter."','".$IDnumber."','".$email."','".$address."','".$phone."')";

$check = false;
if($conn->query($sql)){

    $sqlMax = "SELECT * FROM `account` WHERE accountID=(SELECT MAX(accountID) FROM account)";
   
    $rsMax = $conn->query($sqlMax);
    $rowMax = $rsMax->fetch_assoc();
        $maxID = $rowMax["accountID"];

        $sqlVideo = "INSERT INTO video(accountID,video1,video2)VALUES($maxID,0.0,0.0)";

        if($conn->query($sqlVideo)){
            echo '<script language="javascript">';
            echo 'if(confirm("สมัครสมาชิกสำเร็จ")){window.location.href = "login___1.html"}else{window.location.href = "register.html"}';
            //echo "window.location.href = 'register.php'";
            echo '</script>';
        }
    
    
    
}else{
    echo '<script language="javascript">';
    echo 'if(confirm("สมัครสมาชิกไม่สำเร็จ")){window.location.href = "register.html"}else{window.location.href = "register.html"}';
    echo '</script>';
}

