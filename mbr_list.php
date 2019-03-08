<?php
require("mysql/config.php");
$sql="SELECT mid,mname,mdep FROM members ";
if(isset($_GET['keyword'])){
    $keyword=$_GET['keyword'];
    $sql.="WHERE mname LIKE '%$keyword%'"; // mid='$keyword' OR
   
}else{
    $keyword="";
    $sql.="WHERE mid IS NULL";
}
require('mysql/connect.php');
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
        <br>
        <form class="form-inline" action="mbr_list.php" method="get" target="_self">
            <input class="form-control mr-sm-2" type="text" name="keyword" id="keyword" value="<?php echo($keyword);?>"
                placeholder="ค้นหา" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ค้นหารายชื่อ</button>
            <!-- <input class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit" value="ค้นหารายชื่อ"> -->
        </form>
        <div class="card">
            <div class="card-header">
                รายชื่อจ้า
            </div>
            <div class="card-body">
                <table class="table">
                    
                        <tr>
                            <td scope="col">รหัสสมาชิก</td>
                            <td scope="col">ชื่อ</td>
                            <td scope="col">แผนก</td>
                        </tr>
                    <?php while($record=mysqli_fetch_array($result)){?>
                        <tr>
                            <td><a href="mbr_detail.php?mid=<?php echo($record[0]);?>"><?php echo($record[0]);?></a></td>
                            <td><?php echo($record[1]);?></td>
                            <td><?php echo($record[2]);?></td>
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