<?php
/**
 * Created by PhpStorm.
 * User: Bang
 * Date: 11/14/2018
 * Time: 4:45 PM
 */
require "connect.php";
require "simple_html_dom.php";
$html=file_get_html("https://www.24h.com.vn/suc-khoe-doi-song-c62.html");
$tin_sk=$html->find("span.nwsTit a");

foreach ($tin_sk as $tin) {
    $tieude=$tin->innertext;
    $link = $tin->href;
    $html_chitiet = file_get_html("$link");
    $tin_chitiet=$html_chitiet->find("article.nwsHt p");
    /*echo $html;*/
    $noidung="";
    foreach ($tin_chitiet as $key) {

     /*   echo $key->innertext;*/
        $noidung.="$key->innertext";

    }

    $sql = "INSERT INTO tintuc (tieude, link, noidung)
VALUES ('".$tieude."','".$link."', '".$noidung."')";
    echo $sql;
    $result = $conn -> query($sql);

}
