<?php 
session_start(); 
?>
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
<div class="container">
	<div class="jumbotron">
        <form action="liuyan.php" method="post">
        	<p>留言人名称：<?php echo $_SESSION['username'] ?></p> <br>
    		<p>留言内容：</p>
    		<input type="text" name="cont" class="form-control"><br>
            <input type="submit" name="tijiao" value="提交内容" class="btn btn-success">
            <br>
        </form>
   </div>
</div>
</body>
</html>