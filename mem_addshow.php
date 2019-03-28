<?php
session_start();
require('mysql/connectdb.php');

$mid = $_POST['mid'];
$mname = $_POST['mname'];
$posi = $_POST['posi'];
$work = $_POST['work'];
$divis = $_POST['divis'];
$dep = $_POST['dep'];
$mphone = $_POST['mphone'];


$check = "SELECT * FROM members WHERE mid = '$mid'";
$result1 = mysqli_query($conn,$check);
$num=mysqli_num_rows($result1);
if($num > 0)
{
// //ถ้ามี username นี้อยู่ในระบบแล้วให้แจ้งเตือน
echo "<script>";
echo "alert(' มีผู้ใช้นี้แล้ว กรุณากรอกใหม่อีกครั้ง !');";
echo "window.location='mbr_list.php';";
echo "</script>";
//
}
else{

    $sqli = "INSERT INTO members (mid,mname,posi,work,divis,dep,mphone)
            VALUES('$mid','$mname','$posi','$work','$divis','$dep','$mphone')";
            $result = mysqli_query($conn, $sqli) or die ("Error in query: $sqli". mysqli_error());
          }
          // mysqli_close();
        //บันทึกสำเร็จแจ้งเตือนและกระโดดกลับไปหน้าฟอร์ม   ปล.การทำระบบจริงๆ อาจกระโดดไปหน้าอื่นที่เรากำหนด
        	if($result){
        			echo "<script type='text/javascript'>";
        				echo "alert('เพิ่มผู้ใช้เรียบร้อยแล้ว');";
        				echo "window.location='mbr_list.php';";
        			echo "</script>";
        	  }
        	  else{
        //ถ้าบันทึกไม่สำเร็จแสดงข้อความ Error และกระโดดกลับไปหน้าฟอร์ม
        		    echo "<script type='text/javascript'>";
        				echo "alert('ไม่สามารถเพิ่มผู้ใช้ได้!');";
        				echo "window.location='mbr_add.php';";
        			echo "</script>";
        	  }



 ?>
