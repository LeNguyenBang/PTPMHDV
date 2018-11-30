<?php
/**
 * Created by PhpStorm.
 * User: Bang
 * Date: 11/14/2018
 * Time: 4:45 PM
 */
require "connect.php";
require "simple_html_dom.php";
$html=file_get_html("https://www.24h.com.vn/tin-tuc-suc-khoe-c683.html");
$tin_sk=$html->find("div.hotnew span.nwsTit a");

foreach ($tin_sk as $tin) {
    $tieude=$tin->innertext;
    $link = $tin->href;
    $html_chitiet = file_get_html("$link");
    $tin_chitiet=$html_chitiet->find("article.nwsHt p");
    /*echo $html;*/
    $noidung="<p>";
    foreach ($tin_chitiet as $key) {
        if(!empty($key->plaintext)) {
            $noidung .= "$key->plaintext";
            $noidung .= "</p> <p>";

        }

    }
    /*$tieude=str_replace("&#39;","'",$tieude);
    $link=str_replace("&#39;","'",$link);
    $noidung=str_replace("&#39;","'",$noidung);
    $tieude=str_replace("&#34;","",$tieude);
    $link=str_replace("&#34;","",$link);
    $noidung=str_replace("&#34;","",$noidung);*/
    $check="SELECT * FROM tintuc WHERE link='".$link."'";
    $result_check = $conn->query($check);
    if ($result_check->num_rows == 0) {
     /*   while ($row = $result_check -> fetch_assoc()) {*/
            $sql = "INSERT INTO tintuc (tieude, link, noidung)
VALUES ('".$tieude."','".$link."', '".$noidung."')
" ;

            echo  $sql;
            echo"============================================================================================================";
            $result = $conn -> query($sql);
        }
       /* }*/


}
?>