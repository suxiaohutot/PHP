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
        echo "登录成功";
        echo "正在前往个人中心    请稍等~~~~~~~~~";
        ?>
        <script type="text/javascript"> 
            onload=function(){ 
                setInterval(go, 1000); 
                }; 
                var x=2; //利用了全局变量来执行 
                function go(){ 
                x--; 
                if(x>0){ 
                document.getElementById("sp").innerHTML=x; //每次设置的x的值都不一样了。 
                }else{ 
                location.href='myzone.php'; 
            	} 
            } 
            </script> 
        <?php 
        
    }
    else {
            ?>
            <br>
            	<p>用户名或者密码错误</p><br>
            	<a href='dengluhtml.php' class="btn btn-success">返回重新登录</a>
            	<br><br>
            	<a href='xiugai.php' class="btn btn-success">找回密码</a>
            <?php 
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