<?php
require "connect.php";


?>
<option>---Chọn Xã/Phường---</option>

<?php
$key2=$_POST['id1'];
$sql2="select *from devvn_xaphuongthitran where maqh='$key2'";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
    while ($row = $result2 -> fetch_assoc()){ ?>
        <option value="<?php echo $row['xaid']?>"><?php echo $row['name']?></option>
        <?php
    }
}?>
