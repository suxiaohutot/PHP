<?php
include_once ('database.php');
// $id=$_POST['id'];
$name=$_POST['name'];
$password=$_POST['password'];

$yzid= "select * from user where id='$name'";
$ret=mysqli_query($databasecon, $yzid);
$num=mysqli_num_rows($ret);
if ($num==1){
    $xiugaisql="update user set password='$password' where name='$name'";
    getcon();
    mysqli_query( $databasecon,"set name utf8");//设置数据链接编码
    mysqli_query ($databasecon,$xiugaisql);
    echo "修改成功";"<br/>";
    echo  "请稍等 ，正在跳转登录页面.......";?>
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
    $userid=mysqli_insert_id( $databasecon);
    closecon();
    echo "也可以单击此处：立刻";
    echo "<a href='dengluhtml.php'>返回登录</a>";
}else{
    echo "未找到当前用户 ";
    echo  "请稍等 ，正在跳转登录页面,重新登录.......";?>
    <br><br>
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
    </script> <?php 
    echo "也可以单击此处：立刻";
    echo "<a href='dengluhtml.php'>返回登录</a>";
}
?>


