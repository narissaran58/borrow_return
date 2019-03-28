<?php
// require("mysql/config.php");
require('mysql/connectdb.php');
require('header.php');

 
?>
<html>

<head>
    <meta http-equiv="Content-Type" connect="text/html; charset=utf8" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <br>

        <div class="card">
            <div class="card-header">
                <center>
                    เพิ่มข้อมูลสมาชิก
                </center>
            </div>
            <div class="card-body">

                <form method="post" action="mem_addshow.php" id="form2">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="mid">รหัสผู้ใช้</label>
                            <input type="text" class="form-control" name="mid" id="mid" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="mname">ชื่อ</label>
                            <input type="text" class="form-control" name="mname" id="mname" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="position">ตำแหน่ง</label>
                            <select name="posi" id="posi" class="form-control">;
                                <option value=""></option>
                                <option value="ประธาน">ประธาน</option>
                                <option value="กรรมการ">กรรมการ</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="work">งาน</label>
                            <select name="work" id="work" class="form-control">;
                                <option value=""></option>
                                <option value="อะไร">อะไร</option>
                                <option value="วะห๊ะ">วะห๊ะ</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="division">กอง</label>
                            <select name="divis" id="divis" class="form-control">;
                                <option value=""></option>
                                <option value="กองทัพบก">กองทัพบก</option>
                                <option value="กองทัพตู่">กองทัพตู่</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="department">ฝ่าย</label>
                            <select name="dep" id="dep" class="form-control">;
                                <option value=""></option>
                                <option value="ฝ่ายศิลป์">ฝ่ายศิลป์</option>
                                <option value="ปชสพ">ปชสพ</option>

                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputZip">เบอร์</label>
                            <input type="text" class="form-control" name="mphone" id="mphone" value="">
                        </div>
                    </div>
                    <br>
                    <center>
                        &nbsp&nbsp&nbsp<input class="btn btn-outline-primary" type="#" value="ยืนยัน">&nbsp&nbsp
                        <a href="mbr_list.php?keyword=" class="btn btn-outline-danger">ยกเลิก</a>
                    </center>
                </form>
            </div>
        </div>
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