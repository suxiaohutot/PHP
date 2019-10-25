<?php
// $name = "小虎";
// $score = 99;
// echo "<h2>学生成绩</h2>";
// // echo "学生姓名：".$name."<br/>";
// // echo "学生成绩：".$score."<br/>";
// if ($score <= 100 & $score >=90)
// {
//     echo "成绩优秀";
// }
// elseif ($score <90 & $score >=80)
// {
//     echo "成绩一般";
// }
// elseif ($score <80 & $score >= 60)
// {
//     echo "成绩合格";
// }
// elseif ($score < 60)
// {
//     echo "成绩不合格";
// }


// $colors = array('orange','red','yellow');
// $fruits = array('orange','apple','banana');
// $temp = array_combine($colors, $fruits);
// reset($temp);
// do{
//     $key = key($temp);
//     $value = current($temp);
//     echo $key."&nbsp;==>&nbsp;".$value."<br/>";
// }while (next($temp));


//货单中的数组信息
// $goods = array(
//     array('name'=>'主板',price=>'123','producing'=>'广东'),
//     array('name'=>'显卡',price=>'456','producing'=>'上海'),
//     array('name'=>'硬盘',price=>'789','producing'=>'北京'),//'num'=>3
// );
//货单总价格
//$total = 0;
//拼接信息

// $str = '<h2>商品订货单</h2>';
// $str = $str.'<table>';
// $str .= '<tr><td>商品名称</td><td>单价</td><td>产地</td></tr>';

//循环数组
// foreach ($goods as $values){
//     var_dump($values);
//     $str .=
// }

// $arr=array(
//     array(1,'牙膏',15,0,3),
//     array(2,'牙膏',34,1,3),
//     array(3,'牙膏',53,2,3),
//     array(4,'香蕉',54,0,3),
//     array(5,'香蕉',35,1,3),
//     array(6,'香蕉',73,2,3),
//     array(7,'照相机',83,0,3),
//     array(8,'照相机',42,1,3),
//     array(9,'照相机',46,2,3)
// );
// //生成结果数组
// $tab=array();
// foreach ($arr as $row){
//     //while($row=mysql_fetchrow($res)){//实际程序可能是这样从数据库读取
//     $id=$row[0];
//     $productname=$row[1];
//     $price=$row[2];
//     $id2=$row[3];
//     if (!array_key_exists($productname,$tab)) $tab[$productname]=array($productname);
//     $tab[$productname][100+$id2]=$price;
// }
// //输出结果数组
// echo "<table>\n";
// foreach ($tab as $line){
//     echo '<tr><td>'.implode('<td>',$line)."\n";
// }
// echo "</table>\n";



//链接数据库
$link = mysqli_connect('localhost','root','','test');
// var_dump($link);
//设置字符集
mysqli_query($link, 'set names utf8');//发送给控制台
//选择数据库
mysqli_select_db($link, 'test');
//数据集
$result=mysqli_query($link, 'select * from user');
// var_dump($result);
//数据集转换成数组
// $res=mysqli_fetch_row($result); //只显示数组
// var_dump($res);
// $res = mysqli_fetch_assoc($result);  //显示键值对也
// var_dump($res);
// echo  $res[1];
// $res = mysqli_fetch_assoc($result);  //显示数组 0—> int 1
// var_dump($res);


//style='background-color:pink' //颜色
echo "<table border='1px' >
<tr>
    <td>ID</td>
    <td>姓名</td>
    <td>性别</td>
    <td>密码</td>
    <td>数据操作</td>
</tr>";
while ($res = mysqli_fetch_assoc($result)){
    echo "<tr >";
    foreach ($res as $v)
    {
        echo "<td>".$v."</td>";
    }?>
    <td><a href="numdel.php?id=<?php echo $res['id'] ?>">删除</a></td>
    <?php
    echo  "</tr>"; 
}
echo  "</table>";
?>

