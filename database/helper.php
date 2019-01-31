<?php
    $RootDir = $_SERVER['DOCUMENT_ROOT'];
    require_once $RootDir . '/database/globalconfig.php';
    $link;
    $isConnect = false;
    function initConnect(){
        global $link,$isConnect,$g_dbAddress,$g_dbUsername,$g_dbPassword,$g_dbName;
        //$link = mysql_connect($g_dbAddress,$g_dbUsername,$g_dbPassword);
        $link = new mysqli($g_dbAddress,$g_dbUsername,$g_dbPassword,$g_dbName);
        if(!$link){
            return false;
        }
        $isConnect = true;
        return true;
    }
    function database_getUserPassword($username){
        global $link,$isConnect,$g_dbName;
        if(!$isConnect){
            return null;
        }
        //mysql_query("set character set 'utf8'");//读库
        $link->query("set character set 'utf8'");
        //mysql_query("set names 'utf8'");//写库
        $link->query("set names 'utf8'");
        $str = "select Password from Users where UserName=" . "'" . "$username" . "'";
        //$result = mysql_query($str,$link);
        $result = $link->query($str);
        $pass = mysqli_fetch_row($result);
        //$pass = mysql_fetch_row($result);
        return $pass[0];
    }
    function database_getUserNickname($username){
        global $link,$isConnect,$g_dbName;
        if(!$isConnect){
            return null;
        }
        //mysql_query("set character set 'utf8'");//读库
        $link->query("set character set 'utf8'");
        //mysql_query("set names 'utf8'");//写库
        $link->query("set names 'utf8'");
        $str = "select Nickname from Users where UserName=" . "'" . "$username" . "'";
        $result = $link->query($str);
        $pass = mysqli_fetch_row($result);
        //$pass = mysql_fetch_row($result);
        return $pass[0];
    }
    function database_getSessionID($username){
        global $link,$isConnect,$g_dbName;
        if(!$isConnect){
            return null;
        }
        //mysql_query("set character set 'utf8'");//读库
        $link->query("set character set 'utf8'");
        //mysql_query("set names 'utf8'");//写库
        $link->query("set names 'utf8'");
        $str = "select sessionID from Users where UserName=" . "'" . "$username" . "'";
        $result = $link->query($str);
        $pass = mysqli_fetch_row($result);
        //$pass = mysql_fetch_row($result);
        return $pass[0];
    }
    function database_setSessionID($username,$sessionID){
        global $link,$isConnect,$g_dbName;
        if(!$isConnect){
            return null;
        }
        //mysql_query("set character set 'utf8'");//读库
        $link->query("set character set 'utf8'");
        //mysql_query("set names 'utf8'");//写库
        $link->query("set names 'utf8'");
        $str = "UPDATE `Users` SET `sessionID`='$sessionID' WHERE UserName = '$username' ";
        $result = $link->query($str);
    }
    function closeConnect(){
        global $link,$isConnect;
        if($isConnect){
            $link->close();
            $isConnect = false;
        }
    }
?>