<?php
require "connect.php";

if (!empty($_POST)){
    $data = $_POST;

    $sql = "UPDATE bacsi SET hoten ='".$data['hoten']."',tuoi = ".$data['tuoi'].",
    sdt = '".$data['sdt']."', gioitinh = '".$data['gioitinh']."', diachi = '".$data['diachi']."', email = '".$data['email']."', khoa = '".$data['khoa']."' WHERE id = ".$data['id'];
    $result = $conn -> query($sql);

    header("Location:http://localhost/PTPMHDV/examples/bacsi.php");
    die();
}
?>