<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <title>员工信息列表</title> 
</head>
<body>
	<div class="box">
		<div class="title">员工信息列表</div>
		<table border="1">
			<tr>
				<th width="5%">ID</th>
				<th>姓名</th>
				<th>性别</th>
				<th>密码</th>
				<th width="25%">相关操作</th>
			</tr>
			<?php foreach($userinfo as $row){ ?>
			<tr>
				 <td><?php echo $row['id']; ?></td>
				 <td><?php echo $row['name']; ?></td>
				 <td><?php echo $row['sex']; ?></td>
				 <td><?php echo $row['passwd']; ?></td>
				 <td><div align="center">编辑&nbsp; &nbsp;删除</span></div></td>
			</tr>
			<?php } ?>
		</table>
		<div><?php echo $page_html; ?></div>
	</div>
 </body>
<ml>
