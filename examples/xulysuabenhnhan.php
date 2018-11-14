<?php
require "connect.php";

if (!empty($_POST)){
    $data = $_POST;

    $sql = "UPDATE benhnhan SET hoten ='".$data['hoten']."',tuoi = ".$data['tuoi'].",
    sdt = '".$data['sdt']."', gioitinh = '".$data['gioitinh']."', diachi = '".$data['diachi']."', nghenghiep = '".$data['nghenghiep']."' WHERE id = ".$data['id'];
    $result = $conn -> query($sql);

    header("Location:http://localhost/PTPMHDV/examples/benhnhan.php");
    die();
}
?>