<html>
<head>
<meta charset="utf-8"/>
<link href="css/bootstrap.min.css" rel="stylesheet" />
	<style type="text/css">
	body{ text-align:center} 
	</style>
</head>
</head>
<body>
<br>
<div class="container">
	<div class="jumbotron">
	<p>修改密码</p>
    	<form action="xiugai_chenge.php" method="post" class="container">
        	<div class="form-inline">
        		<div class="form-group">
        			用  户  名:
                    <input type="text" name="name" class="form-control"><br><br>
                	登录密码:
                    <input type="password" name="password" size="20" maxlength="15" class="form-control"><br><br>
                    
                    <input type="submit" value="修改" class="btn btn-default">
                    <input type="reset" value="重填" class="btn btn-default">
        		</div>
        	</div>
    	</form>   
    </div>
</div>
</body>
</html>