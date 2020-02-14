<?php
session_start();
include 'connect.php';


$time = $_POST['time'];
$accountID = $_POST['accountID'];
$video = $_POST['video'];


$sql = "UPDATE video SET " . $video . " = " . $time . " WHERE accountID = " . $accountID;

$rs=$conn->query($sql); 
echo $sql;
$conn->close();

?>