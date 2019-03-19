<?php
$strTo = $_POST['strTo'];
$strSubject = $_POST['strSubject'];
$strHeader = $_POST['strHeader'];;
$strVar = "My Message";
$strMessage = $_POST['strMessage'];;
$flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader);  // @ = No Show Error //
if($flgSend){
echo "<script type='text/javascript'>";
echo"alert('Success');";
echo"window.location = 'f_sent.html';";
echo "</script>";
}
else {
//กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม		
echo "<script type='text/javascript'>";
echo "alert('error!!!!!!!!!!!!!!');";
echo"window.location = 'f_sent.html'; ";
echo"</script>";
}
?>