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
	<form action="denglu.php" method="post" class="container">
	<div ><h2>登录</h2></div>
		<div class="form-inline">
			<div class="form-group">
			用户名：
            <input type="text" name="username" class="form-control"><br><br>
        	登录密码:
            <input type="password" name="password" size="20" maxlength="15" class="form-control"><br><br>
            <input type="submit" value="登录" class="btn btn-default">
            <input type="reset" value="重填" class="btn btn-default">
		</div>
	</div>
   	 
    </form>
</body>
</html>