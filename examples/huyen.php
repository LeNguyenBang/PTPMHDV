<?php
require "connect.php";

?>
<option>---Chọn Quận/Huyện---</option>
<?php
$key=$_POST['id'];
$sql1="select *from devvn_quanhuyen where matp='$key'";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
    while ($row = $result1 -> fetch_assoc()){ ?>
        <option value="<?php echo $row['maqh']?>"><?php echo $row['name']?></option>
        <?php
    }
}?>
