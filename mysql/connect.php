<?php
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
mysqli_query($conn,"SET NAMES utf8");
$result=mysqli_query($conn,$sql);
?>
