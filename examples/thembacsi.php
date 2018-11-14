
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Thêm bác sĩ</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="ajax.js " type="text/javascript"></script>
</head>

<body>
<div class="wrapper">
    <div class="sidebar">
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
                        <p>Thêm bác sĩ</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg " color-on-scroll="500">
            <div class=" container-fluid  ">
                <a class="navbar-brand" href="#pablo"> Bác sĩ/Thêm bác sĩ </a>
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
        <?php
        require "connect.php";


        ?>
       <div class="content">
            <div class="container-fluid">

        <br>
        <br>
                                <form name="bacsi" method="post" action="xulythembacsi.php">
                                    <div class="form-group col-md-6 row">
                                        <input type="text" name="hoten" class="form-control" id="hoten" placeholder="Họ và tên (*)">
                                    </div>
                                    <div class="form-group col-md-6 row">
                                        <input type="text" name="tuoi" class="form-control" id="tuoi" placeholder="Tuổi (*)">
                                    </div>
                                    <div class="form-group col-md-6 row">
                                        <input type="text" name="sdt" class="form-control" id="sdt" placeholder="Số điện thoại (*)">
                                    </div>
                                    <div class="form-group col-md-6 row">
                                        <label for="gioitinh">Giới tính:</label>
                                        <input type="radio" name="gioitinh"  id="gioitinh" checked value="Nam">Nam
                                        <input type="radio" name="gioitinh"  id="gioitinh"  value="Nữ" >Nữ
                                    </div>


                                    <div class="form-group col-md-4 ">
                                        <label for="diachi">Địa chỉ:</label>
                                    </div>
                                    <div class="row">
                                    <div class=" form-group col-md-4">
                                        <select type="text" name="tinh" class="form-control tinh" id="tinh" >
                                            <option value="">--Chọn Tỉnh/Thành Phố---</option>

                                            <?php
                                            $sql = "SELECT * FROM devvn_tinhthanhpho";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                            while ($row = $result -> fetch_assoc()){ ?>
                                            <option value="<?php echo $row['matp']?>"><?php echo $row['name']?></option>

                                            <?php
                                            }
                                            }?>
                                        </select>
                                    </div>

                                        <div class=" form-group col-md-4">
                                         <select name="huyen" class="form-control huyen" id="huyen" >
                                                <option value="" selected>---Chọn Quận/Huyện---</option>

                                         </select>                                        </div>
                                        <div class=" form-group col-md-4">
                                        <select name="xa" class="form-control xa" id="xa" >
                                                <option value="">---Chọn Xã/Phường---</option>
                                        </select>                                        </div>

                                    </div>


                                    <div class="form-group col-md-6 row">
                                        <label for="email">Email:</label>
                                        <input type="text" name="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group col-md-4 row">
                                        <label for="khoa">Khoa:</label>
                                        <select  name="khoa" class="form-control " id="khoa">
                                            <option >Nhi</option>
                                            <option >Nội tiết</option>
                                        </select>
                                    </div >
                                    <div class="row form-group">
                                    <button type="submit" class="btn btn-info btn-fill">Thêm bác sĩ</button>
                                    </div>
                                    </div>
                                </form>

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
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>