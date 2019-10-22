<?php
$link = mysqli_connect('localhost','root','','test');
var_dump($link);
//设置字符集
mysqli_query($link, 'set names utf8');//发送给控制台
//选择数据库
mysqli_select_db($link, 'test');
//数据集
$result=mysqli_query($link, 'select * from user');
var_dump($result);

$where = '';
if(isset($_GET['keyword'])){
    $keyword = $_GET['keyword'];
    $woere = "where name like '%$keyword%'";
}
$sql = "select * from user $where";
$res = mysqli_query($link, $sql);
$userinfo = array();
while ($row = mysqli_fetch_assoc($res)){
    $userinfo[] = $row;
}
require './list3.php';
?>