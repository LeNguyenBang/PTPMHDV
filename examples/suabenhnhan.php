<?php
require "connect.php";

$id = (int) $_GET['id'];
$sql = "SELECT * FROM benhnhan WHERE id=".$id;
$result = $conn ->query($sql);
$row = $result -> fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Sửa thông tin bệnh nhân</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>

<body>
<div class="wrapper">
    <div class="sidebar">
        <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

    Tip 2: you can also add an image using data-image tag
-->
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="./benhnhan.php" class="simple-text">
                    Nhóm 5
                </a>
            </div>
            <ul class="nav">
                <li>
                    <a class="nav-link" href="#">
                        <i class="nc-icon nc-circle-09"></i>
                        <p>Sửa thông tin</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg " color-on-scroll="500">
            <div class=" container-fluid  ">
                <a class="navbar-brand" href="#pablo"> Bệnh nhân/Chỉnh sửa hồ sơ bệnh nhân</a>
                <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <button class="btn btn-primary" >Log out</button>                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <form action="xulysuabenhnhan.php" name="benhnhan" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>1. Họ và tên</label>
                                                <span class="desc"></span>
                                                <input class="form-control" name="hoten" type="text" value="<?php echo $row['hoten'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>3. Số điện thoại</label>
                                                <span class="desc"></span>
                                                <input class="form-control" name="sdt" type="text" value="<?php echo $row['sdt'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>5. Địa chỉ</label>
                                                <input class="form-control" name="diachi" type="text" value="<?php echo $row['diachi'] ?>">
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>2. Tuổi:</label>
                                                <input type="text" name="tuoi" class="form-control" value="<?php echo $row['tuoi'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>4. Giới tính</label>
                                                <input class="form-control" name="gioitinh" type="text" value="<?php echo $row['gioitinh'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>6. Nghề nghiệp</label>
                                                <input class="form-control" name="nghenghiep" type="text" value="<?php echo $row['nghenghiep'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Sửa hồ sơ</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="card-image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="author">
                                    <form>
                                        <a href="quanlybenhnhan.html">
                                            <img class="avatar border-gray" src="../assets/img/faces/benhnhan1.jpg" alt="...">
                                            <h5 class="title"><?php echo $row['hoten'] ?></h5>
                                        </a>
                                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
                                        <p>Tuổi: <?php echo $row['tuoi'] ?></p>
                                        <p>Số điện thoại: <?php echo $row['sdt'] ?></p>
                                        <p>Giới tính: <?php echo $row['gioitinh'] ?></p>
                                        <p>Địa chỉ: <?php echo $row['diachi'] ?></p>
                                        <p>Nghề nghiệp: <?php echo $row['nghenghiep'] ?></p>
                                    </form>
                                </div>
                            </div>
                            <hr>
                            <div class="button-container mr-auto ml-auto">
                                <button href="#" class="btn btn-simple btn-link btn-icon">
                                    <i class="fa fa-facebook-square"></i>
                                </button>
                                <button href="#" class="btn btn-simple btn-link btn-icon">
                                    <i class="fa fa-twitter"></i>
                                </button>
                                <button href="#" class="btn btn-simple btn-link btn-icon">
                                    <i class="fa fa-google-plus-square"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul class="footer-menu">
                        <li>
                            <a href="./benhnhan.php">
                                Home
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-center">
                        ©Nhóm 5 - KTPM6 - K10
                    </p>
                </nav>
            </div>
        </footer>
    </div>
</div>
</div>
</div>
</div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>