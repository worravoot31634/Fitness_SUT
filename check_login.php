<?php

include("connect.php");
session_start();

$username = $_POST["username"];
$password = $_POST["password"];
$sql = "SELECT * FROM account WHERE email='".$username."' AND IDnumber = '".$password."'";

$rs = $conn->query($sql);

if($rs->num_rows>0){

    header("location:home.php");
    while($row=$rs->fetch_assoc()){
        $_SESSION["accountID"] = $row["accountID"];
    }
}else{
    header("location:login___1.html");
}

//echo $_SESSION["accountID"];
