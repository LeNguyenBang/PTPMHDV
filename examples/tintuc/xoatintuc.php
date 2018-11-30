<?php

require "connect.php";
$id = (int) $_GET['id'];

if ($id < 1) {
    echo 'id khong ton tai';
    die;
}

$sql = "DELETE FROM tintuc WHERE id=".$id;
echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location:http://localhost/PTPMHDV1/examples/tintuc/view.php");
    die();
} else {
    echo "Error deleting record: " . $conn->error;
}
