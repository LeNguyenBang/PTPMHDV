<?php
require "connect.php";

/**
 * Created by PhpStorm.
 * User: Bang
 * Date: 11/8/2018
 * Time: 5:33 PM
 */
if (isset($_POST) && !empty($_POST)) {

    if (isset($_POST['usernames']) && isset($_POST['passwords'])
        && (strlen($_POST['usernames']) > 1) && (strlen($_POST['passwords']) > 1)) {

        $usernames = $_POST['usernames'];
        $passwords = $_POST['passwords'];
        $passwords = trim($passwords);
        /* $adminModel = new adminModel();
         $checkLogin = $adminModel->getLogin($username, $password);*/


        $passwords = trim($passwords);
        $sql = "SELECT * FROM admins WHERE username='" . trim($usernames) . "'";
        $sql .= " AND password ='" . md5($passwords) . "'";
        //echo $sql;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            /*while ($row = $result->fetch_assoc()) {
                return $row;
                echo $row;*/
            header("Location:http://localhost/PTPMHDV/examples/benhnhan.php");
            die;
            }
        }
    echo "Sai ten dn or mk";
    header("Location: http://localhost/PTPMHDV/examples/");
    die;
    }



