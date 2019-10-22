<?php
$databasecon=1;//全局变量
//var_dump($databasecon);
function getcon(){
    $hostname='localhost';
    $database='test';
    $username='root';
    $password='';
    global $databasecon;//全局变量
    //var_dump($databasecon);
    $databasecon=mysqli_connect($hostname,$username,$password);
    mysqli_select_db($databasecon, $database);
    //var_dump($databasecon);
}
getcon();
function closecon(){
    global $databasecon;
    //var_dump($databasecon);
    if($databasecon){
        mysqli_close($databasecon)or die(mysqli_error($databasecon));
    }
}

?>