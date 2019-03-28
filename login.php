<?php
session_start();
require('mysql/connectdb.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get the posted data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPassword = md5($password);
	
	$sql = "select password from admin where username = '$username'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$expectedPassword = $row['password'];

    //$expectedPassword = md5('goodcoffee'); // TODO: get from database

    if ($hashedPassword == $expectedPassword) {
        // Save in the session
        $_SESSION['loggedin'] = true;
        // Redirect
        header('Location: mbr_list.php?keyword=');
        exit();
    }

    $error = "ชื่อผู้ใช้ / รหัสผ่านไม่ถูกต้อง";
}
?><!DOCTYPE html>
<html lang="en">
<head>
<title>ระบบยืม-คืน คอมพิวเตอร์และอุปกรณ์ต่องพ่วง</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body class="container">
<br>

    <?php
    if (isset($error)) {
        echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
    }
    ?>

    <form method="post" class="form">
        <div class="form-group">
            <label for="username">ชื่อผู้ใช้งาน</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">รหัสผ่าน</label>
            <input type="password" name="password" class="form-control">
        </div>

        <input class="btn btn-success" type="submit" value="เข้าสู่ระบบ">

       
    </form>

<?php
$conn->close();
?>
</body>
</html>