<html>
<body>
<form action="./shwolist..php"method="GET"></form>
<div>
	<div>快速查询<input type="text" name= "keyword">
	<input type="submit" value="提交">
	<table border="1">
		<tr>
			<td>ID</td>
			<td>name</td>
			<td>sex</td>
			<td>pwd</td>
		</tr>
		<?php if (!empty($userinfo)){ ?>
		<?php foreach ($userinfo as $row){ ?>
		<tr>
		<td><?php echo $row['id'] ?></td>
		<td><?php echo $row['name'] ?></td>
		<td><?php echo $row['sex'] ?></td>
		<td><?php echo $row['password'] ?></td></tr>
		<?php } ?>
		<?php }else{ ?>
		<tr><td>查询结果不存在</td></tr>
		<?php } ?>
	</table>
		
	</div>
</div>
</body>
</html>