<html>
<head>
<meta charset="utf-8"/>
<link href="css/bootstrap.min.css" rel="stylesheet" />
	<style type="text/css">
	body{ text-align:center} 
	</style>
</head>
<body>
<br>
<div class="form-inline">
			<div class="form-group">
			<h2>留言管理页面</h2>
			<br>
    <?php
    include 'DB.php';
    $sqli="select * from liuyan";
    dbcon();
    $seti=mysqli_query($dbcon,$sqli);
    ?>
<table border='1' class="table table-striped">
    		<tr>
    			<td>序号</td>
            	<td>留言内容</td>
            	<td>留言人</td>
            	<td>留言时间</td>
            	<td>操作/编辑</td>
    		</tr><?php 
    while ($reut=mysqli_fetch_assoc($seti)){
    ?><tr><?php
        foreach ($reut as $v)
        {
            echo "<td>".$v."</td>";
        }
        $time=$reut['time'];
        $id=$reut['id'];
    ?>				
    			<td>
            		<a href="delt.php?url=delt.php&id=<?php echo $id ?>">删除</a>&nbsp;&nbsp;
            		<a href="edit.php?id=<?php echo $id ?>">编辑</a>
            		
                </td>
    	</tr>
    	<?php }?>
    	</table> 
    	
<br>
<!-- <a href='dengluhtml.php' class="btn btn-success btn-lg">重新登录</a> -->


</div>
</div>
</body>
</html>


 

