<?php
session_start();
include 'connect.php';




$sql="SELECT * FROM video WHERE accountID = " . $_SESSION['accountID'];

$rs=$conn->query($sql); 

$conn->close();

?>