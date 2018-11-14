<?php
require "connect.php";

if (!empty($_POST)){
    $data = $_POST;

    $sql = "INSERT INTO benhnhan (hoten, tuoi, sdt, gioitinh, diachi, nghenghiep) VALUES ('" .$data['hoten']."', ".$data['tuoi'].", '".$data['sdt']."', '".$data['gioitinh']."', '".$data['diachi']."', '".$data['nghenghiep']."')";

    $result = $conn -> query($sql);

    header("Location:http://localhost/PTPMHDV/examples/benhnhan.php");
    die();
}
?>