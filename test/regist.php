<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>跳转</title>
    <script src="js/jquery-3.4.0.min.js"></script>
</head>
<body>
    

<?php
include_once ('database.php');

// $userid=$_POST['id'];
$name=$_POST['name'];
$sex=$_POST['sex'];
$password=$_POST['password'];//密码
$confpasw=$_POST['confirmpaswd'];//验证密码

//var_dump($databasecon);
if ($password!=$confpasw){
    exit("密码和确认密码不一致");
}

$yzname= "select * from user where name='$name'";
$ret=mysqli_query($databasecon, $yzname);
$num=mysqli_num_rows($ret);
if ($name==null || $sex==null || $password==null || $confpasw==null){
    echo "<h3>内容不能为空</h3>";
    echo "<br>"."<a href='zhuce.php'>返回 重新注册</a>";
}else{
    if ($num==1){
        //     exit("当前用户名已经注册");
        echo "用户名重复";
        echo "<br>"."<a href='zhuce.php'>返回 重新注册</a>";
        
    }else {
        $zhucesql="insert into user values( null,'$name', '$sex', '$password')";
        getcon();
        //var_ dump( $databasecon);
        mysqli_query( $databasecon,"set name utf8");//设置数据链接编码
        mysqli_query ($databasecon,$zhucesql);
        echo "注册成功";"<br/>";
        $userid=mysqli_insert_id( $databasecon);
        //echo  $userid;
        closecon( );
        //header("location:dengluhtml.php");
        echo "<br>"."<a href='dengluhtml.php'>亲(づ￣3￣)づ╭❤～ ~~请稍等！正在跳转登录页面哦~~~~</a>";
        ?>
            <script type="text/javascript"> 
            onload=function(){ 
                setInterval(go, 1000); 
                }; 
                var x=3; //利用了全局变量来执行 
                function go(){ 
                x--; 
                if(x>0){ 
                document.getElementById("sp").innerHTML=x; //每次设置的x的值都不一样了。 
                }else{ 
                location.href='dengluhtml.php'; 
            	} 
            } 
            </script> 
        <?php 
    }
}

?>
