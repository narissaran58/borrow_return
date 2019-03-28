<?php
session_start();
require("mysql/config.php");
require('mysql/connectdb.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get the posted data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPassword = md5($password);

	$sql = "SELECT * from login_admin where username = '$username'";
	$query = $conn->query($sql);
	$row = $query->fetch_assoc();
	$expectedPassword = $row['password'];

    //$expectedPassword = md5('goodcoffee'); // TODO: get from database

    if ($hashedPassword == $expectedPassword) {
        // Save in the session
        $_SESSION['loggedin'] = true;
				$_SESSION['userid'] = $row['userid'];
        // Redirect
        header('Location: mbr_list.php');
        exit();
    }

    $error = "ชื่อผู้ใช้หรือรหัสผ่านผิด";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>ระบบยืม-คืน คอมพิวเตอร์และอุปกรณ์ต่องพ่วง</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/templatemo_main.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--
Dashboard Template
http://www.templatemo.com/preview/templatemo_415_dashboard
-->
</head>
<body>

  <nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->
  <div class="navbar-header">
    <div style="color: white; padding: 2px 50px 2px 20px;">
      <div class="row">
      <div class="logo"><h4>ระบบยืม-คืน คอมพิวเตอร์ และอุปกรณ์ต่อพ่วง</h4></div>
      </div>
    </div>
  </div>
 </div>
</nav>
<br>
<div class="container col-md-8">
<div class="card">
    <div class="card-header">
        <h4><center>เข้าสู่ระบบ</center></h4>
    </div>
    <div class="card-body">
        <table class="table">
  <form>
  <center>
  <div class="form-group col-md-4">
    <label for="username">ชื่อผู้ใช้</label>
    <input type="text" class="form-control" id="username">
  </div>
  <div class="form-group col-md-4">
    <label for="password">รหัสผ่าน</label>
    <input type="password" class="form-control" id="password">
  </div>
  <button type="submit" class="btn btn-primary">ยืนยัน</button>
</center>
</form>
        </table>
    </div>
</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/templatemo_script.js"></script>
    <script type="text/javascript">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
