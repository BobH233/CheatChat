<?php
    require('../database/helper.php');
    require('../model/class_msg.php');
    require('../session/helper.php');
    header("Content-type:text/html;charset=utf-8");
    session_start();
    initConnect();
    if(isLogin()){
        die(mkJson(-1,"你已经登录过了:" . database_getUserNickname($_SESSION['username'])));
    }
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username == "" || $password == ""){
        die(mkJson(-1,"账号和密码不能为空!"));
    }
    $post_pass_MD5 = md5($password);
    $post_pass_MD5 = strtoupper($post_pass_MD5);
    $truePass = database_getUserPassword($username);
    if($post_pass_MD5 == $truePass){
        echo mkJson(0,"登录成功");
        $_SESSION['username'] = $username;
        database_setSessionID($_SESSION['username'],session_id());
    }else{
        echo mkJson(-1,"账号或密码错误");
    }
    closeConnect();
?>