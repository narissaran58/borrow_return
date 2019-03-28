<?php
require("mysql/config.php");
$mid=$_GET['mid'];
require('mbr_select.php');
require('header.php');
?>

<html>

<head>
    <meta http-equiv="Content-Type" connect="text/html; charset=utf8" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
    <div class="container">
      <br>
        <div class="card">
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

                            <td>ตำแหน่ง</td>
                            <td><?php echo($posi);?></td>
                        </tr>
                        <tr>

                            <td>งาน</td>
                            <td><?php echo($work);?></td>
                        </tr>
                        <tr>

                            <td>กอง</td>
                            <td><?php echo($divis);?></td>
                        </tr>
                        <tr>

                            <td>ฝ่าย</td>
                            <td><?php echo($dep);?></td>
                        </tr>
                        <tr>

                            <td>เบอร์ติดต่อ</td>
                            <td><?php echo($mphone);?></td>
                        </tr>
                        <tr>
                            <td><a href="mbr_list.php?keyword=" class="btn btn-outline-primary my-0 my-sm-2"><i class="fa fa-chevron-circle-left"> กลับ </i></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
        <?php require("borrow_form.php"); ?><br>
        <?php require("borrow_list.php"); ?><br>
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
