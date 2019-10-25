// <?php
// $link = mysqli_connect('localhost','root','','test');
// var_dump($link);
// //设置字符集
// mysqli_query($link, 'set names utf8');//发送给控制台
// //选择数据库
// mysqli_select_db($link, 'test');

// $page_size=2;//获取总数
// $res = mysqli_query($link, 'select count(*) from user');
// if (!$res) die(mysqli_error());
// $count = mysqli_fetch_row($res);
// var_dump($count);
// //取出查询结果中的第一列的值
// $count = $count[0];
// $max_page = ceil($count/$page_size);
// $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
// $page = $page < 1 ? 1 : $page;
// //组合分页链接
// $page_html = "<a href='./showlist4.php?page=1'>首页</a>&nbsp";
// $page_html = "<a href='./showlist4.php?page=".(($page - 1) > 0 ? ($page - 1) : 1 )."'>上一页 </a>&nbsp";
// $page_html .= "<a href='.owList4.php?page=".(($page + 1) < $max_page ? ($page + 1) : $max_page)."'>下一页</a>&nbsp;";
// $page_html = "<a href='./showlist4.php?page={$max_page}'>尾页</a>";
// //拼接查询语句并执行获取查询数据
// $lim = ($page -1 )*$page_size;
// $sql = "select * from user limit {$lim},{$page_size}";
// $$res = mysqli_query($link, $sql);
// if($res)die(mysqli_errno());
// //获取数据并处理
// $userinfo = array();
// while($row = mysqli_fetch_assoc($res)){
//     $userinfo[] = $row;
// }
// require '.st4.php';1




// ?>

<?php
//获取数据库连接并选择数据库
$link=mysqli_connect('localhost','root','','test') or die('连接数据库失败！'.mysqli_error());
mysqli_query($link,'set names utf8');
//获取数据总数
$page_size = 2;//每页2条      0，1---》第一页    ((之前页数=当前页数-1) *(每页数量)(1*2)=> 2)，3----》第二页    
//     1页--》1+1（2）--》下一页       ((页数) *(每页数量)(2*2)=>4)---》第三页
$res = mysqli_query($link,'select count(*) from user');
if(!$res) die(mysqli_error());
$count = mysqli_fetch_row($res);
var_dump($count);
//取出查询结果中的第一列的值
$count = $count[0];
$max_page = ceil($count/$page_size);
//获取当前选择的页码，并作容错处理
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$page = $page > $max_page ? $max_page : $page;
$page = $page < 1 ? 1 : $page;
 //组合分页链接
 $page_html = "<a href='.owList4.php?page=1'>首页</a>&nbsp;";
 $page_html .= "<a href='.owList4.php?page=".(($page - 1) > 0 ? ($page - 1) : 1)."'>上一页</a>&nbsp;";
 $page_html .= "<a href='.owList4.php?page=".(($page + 1) < $max_page ? ($page + 1) : $max_page)."'>下一页</a>&nbsp;";
 $page_html .= "<a href='.owList4.php?page={$max_page}'>尾页</a>";
//拼接查询语句并执行，获取查询数据
$lim = ($page -1) * $page_size;
$sql = "select * from user limit {$lim},{$page_size}";
$res = mysqli_query($link,$sql);
if(!$res) die(mysqli_error());
//读取数据并作相关处理
$userinfo = array();
while($row = mysqli_fetch_assoc($res)){
	$userinfo[] = $row;
}
require '.st4.php';
?>

