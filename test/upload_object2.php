<?php
//声明文件解析的编码格式
header('content-type:text/html;charset=utf-8');
//载入文件上传类文件
require './upload.class.php';
//判断是否有文件上传
if (isset($_FILES['pic'])) {
    //设置文件上传需要的相关参数
    $params = array(
        'types' => array('image/jpeg', 'image/pjpeg', 'image/png'),
        'size' => 600000,
        'path' => './doc/'
    );
    //实例化 upload 对象，传入参数$params
    $upload = new upload($params);
    //格式化输出信息
    echo '<pre>';
    //输出$upload 对象信息
    var_dump($upload);
    die;
}
//载入 html 模板文件
require './upload_html.php';