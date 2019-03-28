<?php
session_start();
require('mysql/connectdb.php');

$bid = $_POST['bid'];
$btitle = $_POST['btitle'];
$bcat = $_POST['bcat'];

$check = "SELECT * FROM borrow WHERE bid = '$bid'";
$result1 = mysqli_query($conn,$check);
$num=mysqli_num_rows($result1);
if($num > 0)
{
// //ถ้ามี username นี้อยู่ในระบบแล้วให้แจ้งเตือน
echo "<script>";
echo "alert(' รหัสอุปกรณ์นี้มีอยู่แล้ว กรุณากรอกใหม่อีกครั้ง !');";
echo "window.location='mbr_gadget.php';";
echo "</script>";
//
}
else{

    $sqli = "INSERT INTO borrow (bid,btitle,bcat)
             VALUES('$bid','$btitle','$bcat')";
            $result = mysqli_query($conn, $sqli) or die ("Error in query: $sqli". mysqli_error());
          }
          // mysqli_close();
        //บันทึกสำเร็จแจ้งเตือนและกระโดดกลับไปหน้าฟอร์ม   ปล.การทำระบบจริงๆ อาจกระโดดไปหน้าอื่นที่เรากำหนด
        	if($result){
        			echo "<script type='text/javascript'>";
        				echo "alert('เพิ่มข้อมูลเรียบร้อยแล้ว');";
        				echo "window.location='mbr_list.php';";
        			echo "</script>";
        	  }
        	  else{
        //ถ้าบันทึกไม่สำเร็จแสดงข้อความ Error และกระโดดกลับไปหน้าฟอร์ม
        		    echo "<script type='text/javascript'>";
        				echo "alert('ไม่สามารถเพิ่มข้อมูลได้!');";
        				echo "window.location='mbr_gadget.php';";
        			echo "</script>";
        	  }



 ?>
