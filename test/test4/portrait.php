<?php
session_start();//打开session
// include './test/DB.php';
$id=$_SESSION['id'];
$username=$_SESSION['username'];
// var_dump($postid);
// var_dump($postusername);

header('Content-type:text/html;charset=utf-8');
//定义用户信息：id和姓名
$info = array('id'=>$id,'name'=>$username);
// $info = array('id'=>2,'name'=>'小虎');
//判断是否上传头像
if(!empty($_FILES['pic'])){	
	//获取用户上传文件信息
	$pic_info = $_FILES['pic'];	
	//判断文件上传到临时文件是否出错
	if($pic_info['error'] >0){
		$error_msg = '上传错误:';
		switch($pic_info['error']){
			case 1: $error_msg .= '文件大小超过了php.ini中upload_max_filesize选项限制的值！'; break;
			case 2: $error_msg .= '文件大小超过了表单中max_file_size选项指定的值！'; break;
			case 3: $error_msg .= '文件只有部分被上传！'; break;
			case 4: $error_msg .= '没有文件被上传！'; break;
			case 6: $error_msg .= '找不到临时文件夹！'; break;
			case 7: $error_msg .= '文件写入失败！'; break;
			default: $error_msg .='未知错误！'; break; 
		}
		echo $error_msg;
		return false;
	}
	
	//获取上传文件的类型
	$type = substr(strrchr($pic_info['name'],'.'),1);//substr(".jpg",1)
	//判断上传文件类型
	if($type !== 'jpg'){
		echo '图像类型不符合要求，允许的类型为:jpg';
		?>
		<a href="portrait.php">点击返回重新上传</a>
		<?php 
		return false;
	}

	//获取原图图像大小
	list($width, $height) = getimagesize($pic_info['tmp_name']);
	//设置缩略图的最大宽度和高度
	$maxwidth = $maxheight= 90;
	//自动计算缩略图的宽和高
	if($width > $height){
		//缩略图的宽等于$maxwidth
		$newwidth = $maxwidth;
		//计算缩略图的高度
		$newheight = round($newwidth*$height/$width);
	}else{
		//缩略图的高等于$maxwidth
		$newheight = $maxheight;
		//计算缩略图的高度
		$newwidth = round($newheight*$width/$height);
	}
	//绘制缩略图的画布
	$thumb = imageCreateTrueColor($newwidth,$newheight);
	//依据原图创建一个与原图一样的新的图像
	$source = imagecreatefromjpeg($pic_info['tmp_name']);
	//依据原图创建缩略图
	imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
	//设置缩略图保存路径
	$new_file = './'.$info['id'].'.jpg';
	//保存缩略图到指定目录
	imagejpeg($thumb,$new_file,100);
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用户头像修改</title>
<link href="../css/bootstrap.min.css" rel="stylesheet" />
<style type="text/css">
   body{ text-align:center} 
</style>
    <script type="text/javascript"> 
    	
    </script>
</head>
 
<body>
<div class="jumbotron">
    <div class="container">
        <h2>编辑用户头像</h2>
        <p>用户ID：<?php echo $info['id'];?></p>
        <p>用户姓名：<?php echo $info['name'];?></p>
        <p class="exist">当前头像：</p>
        <img src="<?php echo './'.$info['id'].'.jpg?rand='.rand(); ?>" onerror="this.src='./default.jpg'" />
        <form method="post" enctype="multipart/form-data" lass="container">
             <p class="upload">上传头像：<input name="pic" type="file" style="Margin:0 auto 0 auto "/></p>
             <p><input class="btn btn-warning" type="submit" value="保存头像" name="btn1"></p>
             <a href='../myzone.php' class="btn btn-default">返回个人中心</a>
        </form>
    </div>
</div>
</body>
</html>



