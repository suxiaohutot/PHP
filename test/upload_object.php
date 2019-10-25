<?php
//声明文件解析的编码格式
header('content-type:text/html;charset=utf-8');
//载入文件上传类文件
require './upload.class.php';
//判断是否有文件上传
if (isset($_FILES['pic'])) {
    //实例化upload对象
    $upload = new upload;
    //调用upload类的up方法，并把相关参数传递进去
    if (!($pic_path = $upload->up($_FILES['pic'], 'user_'))) {
        //如果上传失败，则获取对象的error属性并显示
        echo $upload->getError();
        //最后终止脚本执行
        die;
    }
}
//载入html模板文件
require './upload_html.php';