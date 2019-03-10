<?php

require("mysql/config.php");
$mid=$_GET['mid'];
require('mbr_select.php');
?>

<html>

<head>
    <meta http-equiv="Content-Type" connect="text/html; charset=utf8" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ระบบยืมพัสดุ</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                ระบบจ้า
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">รายละเอียดสมาชิก</th>
                            <th scope="col"></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>รหัสสมาชิก</td>
                            <td><?php echo($mid);?></td>
                        </tr>
                        <tr>

                            <td>ชื่อ</td>
                            <td><?php echo($mname);?></td>
                        </tr>
                        <tr>

                            <td>แผนก</td>
                            <td><?php echo($mdep);?></td>
                        </tr>
                        <tr>
                            <td><a href="mbr_list.php">กลับ</td>
                            <td></td>

                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
        <?php require("borrow_form.php"); ?><br>
        <?php require("borrow_list.php"); ?><br>
        <!-- <?php require("fine_list.php"); ?> -->
    </div>

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

</html>

