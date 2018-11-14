<?php

require "connect.php";
$id = (int) $_GET['id'];

if ($id < 1) {
    echo 'id khong ton tai';
    die;
}

$sql = "DELETE FROM bacsi WHERE id=".$id;
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location:http://localhost/PTPMHDV/examples/bacsi.php");
    die();
} else {
    echo "Error deleting record: " . $conn->error;
}
