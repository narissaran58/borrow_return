<?php
$sql="SELECT mid,mname,posi,work,divis,dep,mphone FROM members WHERE mid='$mid' ";
require('mysql/connect.php');
$record=mysqli_fetch_array($result);
$mid=$record[0];
$mname=$record[1];
$posi=$record[2];
$work=$record[3]; //เพิ่มตรงนี้
$divis=$record[4];
$dep=$record[5];
$mphone=$record[6];
require('mysql/unconn.php');
?>
