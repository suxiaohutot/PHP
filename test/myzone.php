<?php
include 'DB.php';
session_start();//打开session
$username=$_SESSION['username'];
$id=$_SESSION['id'];
?>
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
        <h3>欢迎用户：<?php echo $username ?></h3>
        <br>
        <p>你可以进行一下操作哦！</p>
        <p>
        	<a href="./test4/portrait.php" class="btn btn-success btn-lg" role="button">修改头像</a>&nbsp;&nbsp;
        	<a href="liuyanhtml.php" class="btn btn-info btn-lg" role="button">前去留言</a>&nbsp;&nbsp;
        	<a href="xiugai_user.php" class="btn btn-info btn-lg" role="button">修改密码</a>
      	</p>
   </div>
</div>
</body>
</html>