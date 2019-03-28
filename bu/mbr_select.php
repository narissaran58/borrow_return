<?php
$sql="SELECT mid,mname,mdep FROM members WHERE mid='$mid'";
require('mysql/connect.php');
$record=mysqli_fetch_array($result); 
$mid=$record[0];
$mname=$record[1];
$mdep=$record[2];
require('mysql/unconn.php');
?>
