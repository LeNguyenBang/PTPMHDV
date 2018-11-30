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
    $dem=0;
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
        $dem++;
            $sql = "INSERT INTO tintuc (tieude, link, noidung)
VALUES ('".$tieude."','".$link."', '".$noidung."')" ;
            $result = $conn -> query($sql);
        }

}
?>
<?php
    if ($dem!=0){
    echo  "Các tin mới đã được cập nhật";?>

    <a href="view.php" class="btn btn-primary">Trở về</a>
    <?php }
else
{echo  "Không có tin nào mới";?>

    <a href="view.php" class="btn btn-primary">Trở về</a>

<?php }?>