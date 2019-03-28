<html>

<head>
    <meta http-equiv="Content-Type" connect="text/html; charset=utf8" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ระบบยืมพัสดุ</title>
</head>
<br>
<div class="container">
    <div class="card">
        <div class="card-header">
            ค้างค่าปรับ
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <td>เลขพัสดุ</td>
                        <td>ของที่ยืม</td>
                        <td>วันที่ยืม</td>
                        <td>วันสิ้นสุดการยืม</td>
                        <td>วันที่คืน</td>
                        <td>คืนช้า</td>
                        <td>ค่าปรับ</td>
                        <td>เก็บค่าปรับ</td>

                    </tr>
                    <?php
$sql="SELECT borrow.bid,borrow.btitle,transactions.tborrow,
DATE_ADD(transactions.tborrow, INTERVAL 7 DAY) AS deadline, 
transactions.treturn, 
DATEDIFF(transactions.treturn,transactions.tborrow)-7 AS late
FROM borrow,transactions 
WHERE borrow.bid=transactions.bid
AND transactions.mid='$mid'
AND transactions.tstatus='2' ";
require("mysql/config.php");
require('mysql/connect.php');
while ($record=mysqli_fetch_array($result)){

?>
                    <tr>
                        <td><?php echo($record[0]); ?></td>
                        <td><?php echo($record[1]); ?></td>
                        <td><?php echo date_format(date_create($record[2]),"d/m/Y"); ?></td>
                        <td><?php echo date_format(date_create($record[3]),"d/m/Y"); ?></td>
                        <td><?php echo date_format(date_create($record[4]),"d/m/Y"); ?></td>
                        <td><?php echo($record[5]); ?></td>
                        <td><?php echo((int)$record[5]*10); ?></td>
                        <td><a
                                href="javascript:clearkeep('<?php echo($record[0]); ?>','<?php echo($record[2]); ?>')">เก็บเงิน</a>
                        </td>

                    </tr>
                    <?php 
} 
require('mysql/unconn.php');
?>
        </div>
    </div>
    </table>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script language="javascript">
    function clearkeep(v1, v2) {
        var urk = "clear.php?mid=<?php echo($mid);?>&bid=" + v1 + "&tborrow=" + v2;
        if (confirm("คุณต้องการเก็บค่าปรับ ?") == true) {
            window.location.href = url;
        }
    }
    </script>

</html>