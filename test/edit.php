<?php
include 'DB.php';
$id=$_GET['id'];
var_dump($id);
$sql="select * from liuyan where id=$id";
dbcon();
$set=mysqli_query($dbcon, $sql);
$retu=mysqli_fetch_array($set)
?>
<form action="updatelist.php" method="post">
    留言内容：<textarea rows="10" cols="18" name="cont">
    <?php echo $retu['count']?></textarea>
    <input type="hidden" name="lyid" value="<?php echo $id?>">
    <input type="submit" value="修改">
</form>