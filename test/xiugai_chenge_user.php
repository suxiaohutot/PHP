<?php
include 'DB.php';
session_start();//打开session
$id=$_SESSION['id'];
$password=$_POST['password'];
                                   //~~~~~~~~首先判断密码是否为空
if($password==null){
    echo "密码不能为空";
    echo  "请稍等 ，正在 返回.......";?>
        <script type="text/javascript"> 
        onload=function(){ 
            setInterval(go, 1000); 
            }; 
            var x=1; //利用了全局变量来执行 
            function go(){ 
            x--; 
            if(x>0){ 
            document.getElementById("sp").innerHTML=x; //每次设置的x的值都不一样了。 
            }else{ 
            location.href='xiugai_user.php'; 
        	} 
        } 
    	</script> <?php 
}                                   //~~~~~~~~~不为空  继续修改
else {
    $xiugaisql="update user set password='$password' where id='$id'";
    dbcon();
    mysqli_query ($dbcon,$xiugaisql);
        echo "修改成功";"<br/>";
        echo  "请稍等 ，正在跳转登录页面.......";?>
            <script type="text/javascript"> 
            onload=function(){ 
                setInterval(go, 1000); 
                }; 
                var x=1; //利用了全局变量来执行 
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
?>


