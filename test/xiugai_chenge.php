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
    
    $userid=mysqli_insert_id( $databasecon);
    closecon();
    echo "<a href='dengluhtml.php'>返回登录</a>";
}else{
    echo "未找到当前用户 ".var_dump($name);
}
?>