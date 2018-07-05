<?php
    header("content-type:text/html;charset=utf-8"); 
    $data = json_decode(file_get_contents('php://input'),true);  // 使用这种方法获取前台传过来的数据
    $name=$data['name'];
    $pwd=$data['pwd'];
    if($name=="admin" && $pwd== "123456"){
        echo true;
    }
    // $name=$_POST['jdmc'];
    // echo 1;

?>