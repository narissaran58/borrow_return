<?php
require('mysql/config.php');

if(isset($_POST['mid'])){
    $mid=$_POST['mid'];
}else{
    $mid="";
}

if(isset($_POST['bid'])){
     $bid=$_POST['bid'];
}else{
   
    $bid="";
}

$sql="SELECT DATEDIFF (NOW(),tborrow) FROM transactions WHERE bid='$bid' AND mid='$mid'AND tstatus='1'";
require('mysql/connect.php');
$record=mysqli_fetch_array($result);
$namday=(int)$record[0];
require('mysql/unconn.php');

if($namday>7){
    $tstatus=2;
}else{
    $tstatus=0;
}
$sql="UPDATE transactions SET treturn=NOW(),tstatus='$tstatus' WHERE bid='$bid' AND mid='$mid'AND tstatus='1'";
require('mysql/connect.php');
if($result==1){
$msg="การคืนพัสดุเสร็จสิ้น";
$v1=1;
}else{
$msg="การคืนพัสดุผิดพลาด";
$v1=0;
}
require('mysql/unconn.php');

rstbook
?>
<html>

<head>
    <meta http-equiv="Content-Type" connect="text/html; charset=utf8" />
    <title>การคืน</title>
</head>

<body>

<script language="javascript">
var v1=<?php echo($v1);?>;
alert('<?php echo($msg);?>');
if(v1==1){
    window.location.replace("mbr_detail.php");
}else{
    window.history.back();
}
</script>

</body>

</html