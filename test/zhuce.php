<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>注册</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<style type="text/css">
	body{ text-align:center} 
	</style>
</head>
<body>
    <div>
    	<form action="regist.php" method="post" class="container">
    		<div ><h2>淘宝留言系统注册页</h2></div>
    		<div class="form-inline">
    			<div class="form-group">
        			<div class="panel panel-default">
                    	<div class="panel-heading">
                    		注册
                    	</div>
                    	<div class="panel-body">
                    		<table class="table">
                                <tr>
                                	<td>名称:</td>
                                	<td><input type="text" name="name" class="form-control" placeholder="名称"></td>
                                </tr>
                                <tr>
                                	<td>性别:</td>
                                	<td><input type="text" name="sex" class="form-control" placeholder="性别"></td>
                                </tr>

                                <tr>
                                	<td>密码:</td>
                                	<td><input type="password" name="password" class="form-control" placeholder="密码"></td>
                                </tr>

                                <tr>
                                	<td>确认密码:</td>
                                	<td><input type="password" name="confirmpaswd"  class="form-control" placeholder="确认密码"></td>
                                </tr>

                            </table>
                		</div>
                		<div class="panel-footer">
                			<div class="center-button">
                				<button  class="btn btn-info">注册</button>
<!--                 				class="btn btn-default" -->
    						</div>
                		</div>
            		</div>
				</div>
    		</div>
            
        </form>
    </div>
    
</body>

</html>