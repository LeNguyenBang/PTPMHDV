<?php
require "connect.php";

if (!empty($_POST)){
    $data = $_POST;
    $tinh="SELECT * FROM devvn_tinhthanhpho WHERE matp='".$data['tinh']."'";
    $kq=$conn->query($tinh);
    while($row = $kq->fetch_assoc()) {
       $tinh_value=$row['name'];
    }
    $huyen="SELECT * FROM devvn_quanhuyen WHERE maqh='".$data['huyen']."'";
    $kq1=$conn->query($huyen);
    while($row = $kq1->fetch_assoc()) {
        $huyen_value=$row['name'];
    }
    $xa="SELECT * FROM devvn_xaphuongthitran WHERE xaid='".$data['xa']."'";
    $kq2=$conn->query($xa);
    while($row = $kq2->fetch_assoc()) {
        $xa_value=$row['name'];
    }

    $sql = "INSERT INTO bacsi (hoten, tuoi, sdt	, gioitinh, tinh,huyen,xa, email, khoa)
VALUES ('".$data['hoten']."', ".$data['tuoi'].", '".$data['sdt']."', '".$data['gioitinh']."', '".$tinh_value."','".$huyen_value."', '".$xa_value."','".$data['email']."', '".$data['khoa']."')";
    $result = $conn -> query($sql);

    header("Location:http://localhost/PTPMHDV/examples/bacsi.php");
    die();
}
?>