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

                                                                        //~~~~~~~~~~~~~~~~~~    首先判断验证码
//获取用户输入的验证码字符串
$code = isset($_POST['captcha']) ? trim($_POST['captcha']) : '';
//判断SESSION中是否存在验证码
if(empty($_SESSION['captcha_code'])){
    die('验证码已过期，请重新登录'.'<br><br>'.'<a href="dengluhtml.php" class="btn btn-success">返回重新登录</a>');
}
//将字符串都转成小写然后再进行比较
if (strtolower($code) == strtolower($_SESSION['captcha_code'])){
    echo '验证码正确'.'<br>';
        if($username==null || $password==null){      //用户名密码不能为空                           //~~~~~~~~~~~~~~~~~判断用户
        echo "用户名或密码不能为空"."<br><br>"."<a href='dengluhtml.php'>返回登录</a>";
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
            
            }else {
                ?>
                <br>
                	<p>用户名或者密码错误</p><br>
                	<a href='dengluhtml.php' class="btn btn-success">返回重新登录</a>
                	<br><br>
                	<a href='xiugai.php' class="btn btn-success">找回密码</a>
                <?php 
             }
        }
} 
                                                        //~~~~~~~~~验证码错误
else{
    echo '验证码输入错误，登录失败'.'<br><br>';
    echo "正在返回重新登录    请稍等~~~~~~~~~";
    ?>
            	<script type="text/javascript">     //等待2秒跳转
                    onload=function(){ 
                        setInterval(go, 1000); 
                        }; 
                        var x=2; //利用了全局变量来执行 
                        function go(){ 
                        x--; 
                        if(x>0){ 
                        document.getElementById("sp").innerHTML=x; //每次设置的x的值都不一样了。 
                        }else{ 
                        location.href='dengluhtml.php'; 
                    	} 
                    } 
                </script> <?php 
    
}
unset($_SESSION['captcha_code']); //清除SESSION数据




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