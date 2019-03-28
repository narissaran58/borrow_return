<?php

require("mysql/config.php");

// $sql   = "SELECT * from members as m inner join position as p on m.posid = p.posid inner join work as w on m.workid = w.workid inner join division as d on m.divisid = d.division inner join department as dp on m.depid = dp.depid";

// SELECT members.mid,members.mname,position.posname,members.mphone FROM members JOIN position on position.posid=members.posid";

// $userid = $_SESSION['userid'];

// SELECT mid,mname,posid,workid,divisid,depid,mphone FROM members 

// SELECT customer.*,audit.* FROM customer,audit 
// WHERE customer.CustomerID = audit.CustomerID

// $sql="SELECT mid,mname,position.* , mphone 
// FROM members,position WHERE members.posid = position.posid";

// echo $sql; เอาไว้เช็คคำสั่งsql;

$sql="SELECT mid,mname,posi,work,divis,dep,mphone FROM members "; //เพิ่มตรงนี้
if(isset($_GET['keyword'])){
    $keyword=$_GET['keyword'];
    $sql.="WHERE mname LIKE '%$keyword%'"; // mid='$keyword' OR

}else{
    $keyword="";
    $sql.="WHERE mid IS NULL";
    
}
require('mysql/connect.php');
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
        <form class="form-inline" action="mbr_list.php" method="get" target="_self">
            <input class="form-control mr-sm-2" type="text" name="keyword" id="keyword" value="<?php echo($keyword);?>"
                placeholder="ค้นหา" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search">
                    ค้นหารายชื่อ</i></button>&nbsp&nbsp
            <!-- <input class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit" value="ค้นหารายชื่อ"> -->
            <a href="mbr_add.php" class="btn btn-outline-primary my-0 my-sm-2"><i class="fas fa-plus-circle">
                    เพิ่มรายชื่อ</i></a>&nbsp&nbsp
            <a href="mbr_gadget.php" class="btn btn-outline-danger my-0 my-sm-2"><i class="fas fa-plus-circle">
                    เพิ่มอุปกรณ์</i></a>
        </form>

        <div class="card">
            <div class="card-header">
                รายชื่อผู้ใช้งาน
            </div>
            <div class="card-body">
                <table class="table">

                    <tr>
                        <td scope="col">รหัสผู้ใช้</td>
                        <td scope="col">ชื่อ</td>
                        <td scope="col">ตำแหน่ง</td>
                        <td scope="col">งาน</td>
                        <td scope="col">กอง</td>
                        <td scope="col">ฝ่าย</td>
                        <td scope="col">เบอร์ติดต่อ</td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <?php while($record=mysqli_fetch_array($result)){?>

                    <tr>
                        <td><a href="mbr_detail.php?mid=<?php echo($record[0]);?>"><?php echo($record[0]);?></a></td>
                        <td><?php echo($record[1]);?></td>
                        <td><?php echo($record[2]);?></td>
                        <td><?php echo($record[3]);?></td>
                        <td><?php echo($record[4]);?></td>
                        <td><?php echo($record[5]);?></td>
                        <td><?php echo($record[6]);?></td>
                        <td><a href="mbr_edit.php?edit=<?php echo($record[0]); ?>" class="btn btn-warning">Edit</a>
                            <a href="mbr_list.php?delete=<?php echo($record[0]); ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php }
require('mysql/unconn.php');
?>
                </table>
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