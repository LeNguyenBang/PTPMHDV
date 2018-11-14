<?php
require "connect.php";

$id = (int) $_GET['ID'];
$sql = "SELECT * FROM dungcuyte WHERE id=".$id;
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
    <title>Sửa thông tin dụng cụ y tế</title>
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
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="./dungcuyte.php" class="simple-text">
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
                <a class="navbar-brand" href="#pablo">Chỉnh sửa thông tin dụng cụ y tế</a>
                <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="nav navbar-nav mr-auto">

                    </ul>
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
                                <form action="xulysuadungcuyte.php" name="bacsi" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['ID'] ?>" />
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>1. Mã dụng cụ y tế</label>
                                                <span class="desc"></span>
                                                <input class="form-control" name="hoten" type="text" value="<?php echo $row['MaDungCu'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>3. Khoa</label>
                                                <span class="desc"></span>
                                                <input class="form-control" name="sdt" type="text" value="<?php echo $row['Khoa'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>5. Số lượng hiện có</label>
                                                <input class="form-control" name="diachi" type="text" value="<?php echo $row['SLHienCo'] ?>">
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>2. Tên dụng cụ y tế</label>
                                                <input type="text" name="tuoi" class="form-control" value="<?php echo $row['TenDungCu'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>4. Số lượng nhập</label>
                                                <input class="form-control" name="gioitinh" type="text" value="<?php echo $row['SLNhap'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Sửa thông tin</button>
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
                                        <a href="dungcuyte.php">
                                            <img class="avatar border-gray" src="../assets/img/dungcuyte.jpg" alt="...">
                                            <h5 class="title"><?php echo $row['MaDungCu'] ?></h5>
                                        </a>
                                        <input type="hidden" name="ID" value="<?php echo $row['ID'] ?>" />
                                        <p>Tên dụng cụ: <?php echo $row['TenDungCu'] ?></p>
                                        <p>Khoa: <?php echo $row['Khoa'] ?></p>
                                        <p>Số lượng nhập: <?php echo $row['SLNhap'] ?></p>
                                        <p>Số lượng hiện có: <?php echo $row['SLHienCo'] ?></p>
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