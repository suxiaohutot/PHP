<html>
<head>
<meta charset="utf-8"/>
<link href="css/bootstrap.min.css" rel="stylesheet" />
	<style type="text/css">
	body{ text-align:center} 
	</style>
</head>
<body>
<div class="alert alert-success">

<?php
include 'DB.php';
session_start();//打开session
$username=$_POST['username'];
$password=$_POST['password'];
$_SESSION['username']=$username;
$sql="select * from user where name='$username' and password='$password'";//查询用户的是密码对么
$sqlid="select id from user where name='$username'";//查询用户名的id
dbcon();

$result=mysqli_query($dbcon, $sql);
$num=mysqli_num_rows($result);
if($username==null || $password==null){
    echo "用户名或密码不能为空"."<br>"."<a href='dengluhtml.php'>返回登录</a>";
}else {
    while ($nameinfo=mysqli_fetch_array($result)){
        echo "用户名:".$nameinfo['name']."<br>";
    }
    if ($num>0){
        echo "登录成功"."<br>"."<a href='liuyanhtml.php'>去留言</a>".
            "<br><br>".
            "<a href='upload_html.php'>修改头像</a>";
        ?>
        <a href="myzone.php">前往个人中心</a>
        <br>
    	<form action="./test4/portrait.php" method="post" class="container">
        	<div>
                <input type="submit" value="修改用户头像" class="btn btn-default">
                
                <input type="reset" value="去留言" class="btn btn-default">
        	</div>
        </form>
        
        <?php 
        
    }
    else {
        echo "用户名或者密码错误"."<br><br>".
        "<a href='dengluhtml.php'>返回登录</a>".
        "<br><br>".
        "<a href='xiugai.php'>找回密码</a>";
    }
}
// $sqlid="select id from user where name='$username'";
// dbcon();
$resultid=mysqli_query($dbcon, $sqlid);
$nameinfoid=mysqli_fetch_array($resultid);
$id=&$nameinfoid['id'];
$_SESSION['id']=$id;
?>


</div>
</body>
</html>