<?php
    require_once './database/helper.php';
    require_once './session/helper.php';
    if(!isLogin()){
        header("location:index.php");
        initConnect();
        echo database_getSessionID($_SESSION['username']);
        echo session_id();
        closeConnect();
    }
    initConnect();
    echo "你好:". database_getUserNickname($_SESSION['username']) . "你已经登录了!" . "<br>";
    echo "点击:<a href='api/user_exit.php'>退出登录</a>";
    closeConnect();
?>