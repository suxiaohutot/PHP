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
<div class="alert alert-success">
<?php 
$username=$_POST['username'];
$password=$_POST['password'];
if($username==null || $password==null){
    ?>
    <h3>账号密码不能为空</h3><br>
    <a href="admin.php" class="btn btn-success btn-lg" role="button">返回重新登录</a>
    
    <?php 
}else {
    if($username == "admin" && $password=="admin"){
    ?>

            <br>
            <h3>登录成功</h3>
            <br>
            <p>
            	<a href="liuyanlist.php" class="btn btn-success btn-lg" role="button">留言管理页</a>&nbsp;&nbsp;
          	</p>

    <?php 
    }else {
        ?>
        <h3>密码错误</h3><br>
    	<a href="admin.php" class="btn btn-success btn-lg" role="button">返回重新登录</a>
        <?php 
    }
}

?>
</div>
</body>
</html>