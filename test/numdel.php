<?php
$link = mysqli_connect('localhost','root','','test');
if(isset($_GET['id'])){
    $id = $_GET['id'];
}else {
    $id = '';
}
echo $id;
echo  $id."删除成功";
$sql = "delete from user where id = $id";
mysqli_query($link, $sql);

$result=mysqli_query($link, 'select * from user');
echo "<table border='1px' >
<tr>
    <td>ID</td>
    <td>name</td>
    <td>sex</td>
    <td>pwd</td>
</tr>";
while ($res = mysqli_fetch_assoc($result)){
    echo "<tr >";
    foreach ($res as $v)
    {
        echo "<td>".$v."</td>";
    }
    echo  "</tr>";
}
echo  "</table>";
?>