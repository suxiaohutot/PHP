<html>
<head>
<meta charset="utf-8"/>
<link href="css/bootstrap.min.css" rel="stylesheet" />
	<style type="text/css">
	body{ text-align:center} 
	</style>
</head>
<body>
<br>
<div class="container">
	<div class="jumbotron">

<?php
session_start();
include 'DB.php';
$id=$_GET['id'];
$sql="DELETE FROM liuyan WHERE id=$id";
dbcon();
$set=mysqli_query($dbcon, $sql);
if($set){?>
    <h2>删除成功</h2>
    <br><br>
    <h3><span class="label label-default">返回</span>
    <a href='liuyanlist.php' class="btn btn-default">留言列表</a></h3>
    <?php
}else {
    echo "删除失败"."<a href='dengluhtml.php'>返回登录</a>";
}
?>
	</div>
</div>

</body>
</html>