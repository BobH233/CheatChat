<?php
    //require_once '../database/helper.php';
    $RootDir = $_SERVER['DOCUMENT_ROOT']; 
    require_once $RootDir . '/database/helper.php';
    function isLogin(){
        //用户是否已经登录
        session_start();
        if(!isset($_SESSION['username'])){
            //如果session没有设置
            return false;
        }
        initConnect();
        $lastSession = database_getSessionID($_SESSION['username']);
        closeConnect();
        if($lastSession != session_id()){
            unset($_SESSION['username']);
            return false;
        }else{
            return true;
        }
    }
    function userExit(){
        session_start();
        if(isset($_SESSION['username'])){
            unset($_SESSION['username']);
            initConnect();
            database_setSessionID($_SESSION['username'],"0");
            closeConnect();
        }
    }
?>