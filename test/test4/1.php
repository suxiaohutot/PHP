<?php
//list($width, $height, $type, $attr) = getimagesize("234.jpg");
//$a=getimagesize("234.jpg");
//var_dump($a);
//echo "<img src=\"img/flag.jpg\" $attr>";
//$a="小明在北京";
$a="hello,php";
$b=substr($a, 3,-1);
echo $b;
$text = "Line 1\nLine 2\nLine 3";
$last = substr(strrchr($text, "\\n"), 1 );
var_dump($last);
