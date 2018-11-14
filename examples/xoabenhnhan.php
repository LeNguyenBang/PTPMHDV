<?php

require "connect.php";
$id = (int) $_GET['id'];

if ($id < 1) {
    echo 'id khong ton tai';
    die;
}

$sql = "DELETE FROM benhnhan WHERE id=".$id;
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location:http://localhost/PTPMHDV/examples/benhnhan.php");
    die();
} else {
    echo "Error deleting record: " . $conn->error;
}
