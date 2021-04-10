<?php

$FIO  =$_POST['FIO']; 
$EMAIL = $_POST['email']; 
$NUMBER = $_POST['number'];


mysqli_connect("127.0.0.1", "root", "root", "project");
mysql_query("INSERT INTO `povepo` VALUES ('$FIO', '$EMAIL','$number')");



?>