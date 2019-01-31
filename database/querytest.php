<?php
    require 'helper.php';
    $ok = initConnect();
    if(!$ok){
        die('初始化连接失败');
    }
    header("Content-type:text/html;charset=utf-8");
    $test = database_getUserPassword($_GET["email"]);
    $test2 = database_getUserNickname($_GET["email"]);
    if($test == "" || $test2 == ""){
        die("not found!");
    }
    echo 'get1:' . $test . "<br>";
    echo 'get2:' . $test2 . "<br>";
    closeConnect();
?>