<?php
require('mysql/config.php');
$sql="SELECT mid,mname,mdep FROM members ";
// รับค่ามาโพสถ้าไม่มีถือว่าว่าง
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


$msg="";
$v1=0;

// เก็บค่าอ่านค่าจากฐานข้อมูล เช็คค่าว่ามีอุปกรณ์มีอยู่จริงไหม
$sql="SELECT COUNT(bid) FROM borrow WHERE bid='$bid'";
require('mysql/connect.php');
$record=mysqli_fetch_array($result);
$borrowrow=$record[0];
require('mysql/unconn.php');

// เช็คว่าตัวเองยืมสิ่งนั้นอยู่รึเปล่า ถ้ามียืมซ้ำไม่ได้
$sql="SELECT COUNT(bid) FROM transactions WHERE bid='$bid' AND mid='$mid' AND tstatus='1'";
require('mysql/connect.php');
$record=mysqli_fetch_array($result);
$lending=$record[0];
require('mysql/unconn.php');


if($borrowrow<1){
    $msg="รหัสไม่ถูกต้อง";
    $v1=0;
}elseif($lending>0){
    $msg="มีสมาชิกยืมอยู่แล้ว";
    $v1=0;

}else{
    $sql="INSERT INTO transactions(mid,bid,tborrow,tstatus) VALUE('$mid','$bid',NOW(),'1')";
    require('mysql/connect.php');
    if($result==1){
    $msg="การยืมพัสดุเสร็จสิ้น";
    $v1=1;
    }else{
    $msg="การยืมพัสดุผิดพลาด";
    $v1=0;
    }
    require('mysql/unconn.php');
}
?>
<html>

<head>
    <meta http-equiv="Content-Type" connect="text/html; charset=utf8" />
    <title>การยืม</title>
</head>
<body>

                      

                  
<script language="javascript">
var v1=<?php echo($v1);?>;
alert('<?php echo($msg);?>');
if(v1==1){
    window.location.replace("mbr_detail.php?mid=<?php echo($mid);?>");
}else{
    window.history.back();
}
</script>

</body>

</html





