<?php
// ติดต่อฐานข้อมูล
require('dbconfig.php');
?>
<select name="province" id="province">
<?php
    $q="select * from province ";
    $qr=mysql_query($q);
    while($rs=mysqli_fetch_array($qr)){
?>
  <option value="<?=$rs['id_province']?>"><?=$rs['name_province']?></option>
<?php } ?>    
</select>