<?php
require('mysql/config.php');

if(isset($_GET['mid'])){
    $mid=$_GET['mid'];
}else{
    $mid="";
}

if(isset($_GET['bid'])){
     $bid=$_GET['bid'];
}else{
   
    $bid="";
}

if(isset($_GET['tborrow'])){
    $tborrow=$_GET['tborrow'];
}else{
  
   $tborrow="";
}

$sql="UPDATE transactions SET tstatus='0' WHERE bid='$bid' AND mid='$mid'AND tborrow='$tborrow'";
require('mysql/connect.php');
if($result==1){
$msg="การชำระค่าปรับเสร็จสิ้น";
$v1=1;
}else{
$msg="การชำระค่าปรับผิดพลาด";
$v1=0;
}
require('mysql/unconn.php');

?>
<html>

<head>
    <meta http-equiv="Content-Type" connect="text/html; charset=utf8" />
    <title>ชำระค่าปรับ</title>
</head>

<body>

<script language="javascript">
var v1=<?php echo($v1);?>;
alert('<?php echo($msg);?>');
if(v1==1){
    window.location.replace("mbr_detail.php");
}else{
    window.location.history.back();
}
</script>

</body>

</html