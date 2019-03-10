<html>

<head>
    <meta http-equiv="Content-Type" connect="text/html; charset=utf8" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ระบบยืมพัสดุ</title>
</head>

<body>
    <br>

    <div class="container">
        <div class="card">
            <div class="card-header">
                ถือพัสดุอะไรอยู่บ้าง
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <td>เลขพัสดุ</td>
                            <td>ของที่ยืม</td>
                            <td>วันที่ยืม</td>
                            <td>วันที่คืน</td>
                            <td></td>
                        </tr>

                        <?php
$sql="SELECT borrow.bid, borrow.btitle, transactions.tborrow,
 DATE_ADD(transactions.tborrow, INTERVAL 7 DAY) AS deadline 
FROM borrow,transactions 
WHERE borrow.bid=transactions.bid
AND transactions.mid='$mid'
AND transactions.tstatus='1'";
// echo($sql);
require("mysql/config.php");
require('mysql/connect.php');
while ($record=mysqli_fetch_array($result)){

    
?>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo($record[0]); ?></td>
                            <td><?php echo($record[1]); ?></td>
                            <td><?php echo date_format(date_create($record[2]),"d/m/Y"); ?></td>
                            <td><?php echo date_format(date_create($record[3]),"d/m/Y"); ?></td>
                            <td><a href="javascript:returnborrow('<?php echo($record[0]); ?>')">คืนพัสดุ</a></td>
                        </tr>
                        <?php 
} 
require('mysql/unconn.php');
?>
                    </tbody>
                </table>
                <script language="javascript">
                function returnborrow(v1) {
                    var url = "return_save.php?mid=<?php echo($mid);?>&bid=" + v1;
                    if (confirm("คุณต้องการคืนพัสดุนี้หรือไม่?") == true) {
                        window.location.href = url;
                    }
                }
                </script>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>



</html>