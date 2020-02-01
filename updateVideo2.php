<?php

include 'connect.php';


$time = $_POST['time'];
$accountID = $_POST['accountID'];


$sql = "UPDATE video SET video2 = " . $time . " WHERE accountID = " . $accountID;

$rs=$conn->query($sql); 

$conn->close();

?>