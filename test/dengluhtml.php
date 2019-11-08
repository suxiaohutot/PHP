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

	<form action="denglu.php" method="post" class="container">
	<div ><h2>淘宝留言网登录页面</h2></div>
	<br>
		<div class="form-inline">
			<div class="form-group">
				<div class="panel panel-default">
                	<div class="panel-heading">
                		<h3>登录</h3>
                	</div>
                	<div class="panel-body">
                		<table class="table">
                            <tr>
                            	<td>用户名：</td>
                            	<td><input type="text" name="username" class="form-control" maxlength="10"></td>
                            </tr>
                            <tr>
                            	<td>登录密码:</td>
                            	<td><input type="password" name="password" size="20" maxlength="15" class="form-control" maxlength="10"></td>
                            </tr>

                            <tr>
                            	<td>验证码：</td>
                            	<td><input type="text" name="captcha"  class="form-control"/></td>
                            </tr>

                            <tr>
                            	<td style="width: 10px"></td>
                                <td>
                                    <img src="./test4/code.php" alt="" id="code_img" />
                                    <a href="#" id="change">看不清，换一张</a>
                                </td>
                            	
                            </tr>

                        </table>
            		</div>
            		<div class="panel-footer">
            			<div class="center-button">
            				<input type="submit" value="登录" class="btn btn-default">
            				&nbsp;&nbsp;&nbsp;
                            <a href="zhuce.php">
                            	<input type="button" value="注册" class="btn btn-default">
                            </a>
						</div>
            		</div>
        		</div> 
        		        
			</div>
		</div>
    </form>

<script>         <!--验证验证码的脚本 -->
	var change = document.getElementById("change");
	var img = document.getElementById("code_img");
	change.onclick = function(){
		img.src = "./test4/code.php?t="+Math.random(); //增加一个随机参数，防止图片缓存
		return false; //阻止超链接的跳转动作
	}
</script>
</div>
</div>

</body>
</html>


