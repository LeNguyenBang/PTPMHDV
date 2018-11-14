<?php
require "connect.php";

$sql = "SELECT * FROM bacsi";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Quản lý bác sĩ</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <style type="text/css">
        .table{
            line-height: 10px;
        }

        .search{
            float: right;
        }
    </style>
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
                    <a class="nav-link" href="./benhnhan.php">
                        <i class="nc-icon nc-notes"></i>
                        <p>Bệnh nhân</p>
                    </a>
                </li>
                <li>
                    <div class="dropdown">
                    <a class="nav-link  " href="./bacsi.php" data-toggle="dropdown">
                        <i class="nc-icon nc-paper-2"></i>
                        <p>Bác sĩ</p>
                    </a>
                    </div>
                </li>
                <li>
                    <a class="nav-link" href="./dungcuyte.php">
                        <i class="nc-icon nc-paper-2"></i>
                        <p>Dụng Cụ Y Tế</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg " color-on-scroll="500">
            <div class=" container-fluid  ">
                <a class="navbar-brand" href="#pablo"> Bác sĩ/Quản lý bác sĩ </a>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <button class="btn btn-primary" >Log out</button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card strpied-tabled-with-hover">
                            <div class="card-header ">
                                <div class="display">
                                    <form>
                                        <span>Hiển thị số bản ghi</span>
                                        <select>
                                            <option value="10">10</option>
                                            <option value="10">20</option>
                                            <option value="10">30</option>
                                            <option value="10">40</option>
                                            <option value="10">50</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="search">
                                    <form action="" method="post">
                                        <input type="text" style="width: 200px">
                                        <label>
                                            <a href="#" class="nav-link">
                                                <span class="d-lg-block">&nbsp;Tìm kiếm</span>
                                            </a>
                                        </label>
                                    </form>
                                </div>
                                <a href="thembacsi.php" class="btn btn-primary">Thêm</a>
                            </div>
                            <div class="card-body table-full-width table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <th>ID</th>
                                    <th>Họ và tên</th>
                                    <th>Tuổi</th>
                                    <th>Số điện thoại</th>
                                    <th>Giới tính</th>
                                    <th>Địa chỉ</th>
                                    <th>Email</th>
                                    <th>Khoa</th>
                                    <th>Chức năng</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if ($result->num_rows > 0) {
                                        while ($row = $result -> fetch_assoc()){ ?>
                                            <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><a href="quanlybacsi.html?id=<?php echo $row['id']; ?>"> <?php echo $row['hoten']; ?> </a></td>
                                                <td><?php echo $row['tuoi']?></td>
                                                <td><?php echo $row['sdt']?></td>
                                                <td><?php echo $row['gioitinh']?></td>
                                                <td><?php echo $row['tinh']?></td>
                                                <td><?php echo $row['email']?></td>
                                                <td><?php echo $row['khoa']?></td>
                                                <td><a href="suabacsi.php?id=<?php echo $row['id']; ?>" class="au-btn--submit" style="margin-right: 10px">Sửa</a>
                                                    <a href="xoabacsi.php?id=<?php echo $row['id']; ?>" class="au-btn--submit remove">Xóa</a></td>
                                            </tr>
                                        <?php }
                                    }
                                    ?>
                                    </tbody>
                                </table>
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
<script type="text/javascript">
    $(document).ready(function(){
        $("a.remove").on('click', function (e) {
            e.preventDefault();

            var r = confirm("Bạn có chắc chắn muốn xóa bệnh nhân này không ?");
            if (r == true) {
                var target = $(this).attr('href');
                console.log(target);
                window.location.href = target;
            } else {

            }
        });
    });

</script>

</html>