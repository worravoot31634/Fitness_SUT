<?php
session_start();
include 'connect.php';


$time = $_POST['time'];
$accountID = $_POST['accountID'];


$sql = "UPDATE video SET video1 = " . $time . " WHERE accountID = " . $accountID;

$rs=$conn->query($sql); 
echo $sql;
$conn->close();

?>