<?php
    require('../model/class_msg.php');
    require '../session/helper.php';
    header("Content-type:text/html;charset=utf-8");
    if(!isLogin()){
        die(mkJson(-1,"你还没有登录"));
    }
    userExit();
    die(mkJson(1,"退出登录成功"));
?>