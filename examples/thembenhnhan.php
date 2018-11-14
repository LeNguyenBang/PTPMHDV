
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Thêm bệnh nhân</title>
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
                    <a class="nav-link" href="thembenhnhan.php">
                        <i class="nc-icon nc-circle-09"></i>
                        <p>Thêm bệnh nhân</p>
                    </a>
                </li>
                <!--<li>
                    <a class="nav-link" href="#">
                        <i class="nc-icon nc-circle-09"></i>
                        <p>Thông tin bệnh nhân</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="benhan.html">
                        <i class="nc-icon nc-notes"></i>
                        <p>Thông tin bênh án</p>
                    </a>
                </li>-->
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg " color-on-scroll="500">
            <div class=" container-fluid  ">
                <a class="navbar-brand" href="#pablo"> Bệnh nhân/Thêm bệnh nhân </a>
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
                                <form name="benhnhan" method="post" action="xulythembenhnhan.php">
                                    <div class="form-group col-md-6">
                                        <label for="hoten">Họ và tên:</label>
                                        <input type="text" name="hoten" class="form-control" id="hoten">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="tuoi">Tuổi:</label>
                                        <input type="text" name="tuoi" class="form-control" id="tuoi">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="sdt">Số điện thoại:</label>
                                        <input type="text" name="sdt" class="form-control" id="sdt">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="gioitinh">Giới tính:</label>
                                        <input type="text" name="gioitinh" class="form-control" id="gioitinh">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="diachi">Địa chỉ:</label>
                                        <input type="text" name="diachi" class="form-control" id="diachi">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nghenghiep">Nghề nghiệp:</label>
                                        <input type="text" name="nghenghiep" class="form-control" id="nghenghiep">
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Thêm bệnh nhân</button>
                                </form>
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