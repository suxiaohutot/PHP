<?php
include_once ('database.php');
$username=$_POST['username'];
$password=$_POST['password'];
//echo $username;
//echo $password;
getcon();//链接服务器
$sql="select * from user where name='$username' and password='$password'";
$resultSet = mysqli_query($databasecon, $sql);
if (mysqli_num_rows($resultSet)>0){
    echo "ok 都正确  --".$username."--登录成功";
}else {
    echo "错误-.-";
}
closecon();
?>
