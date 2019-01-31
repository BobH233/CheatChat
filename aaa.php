<?php
    function get_ip(){
    //判断服务器是否允许$_SERVER
    if(isset($_SERVER)){    
        if(isset($_SERVER[HTTP_X_FORWARDED_FOR])){
            $realip = $_SERVER[HTTP_X_FORWARDED_FOR];
        }elseif(isset($_SERVER[HTTP_CLIENT_IP])) {
            $realip = $_SERVER[HTTP_CLIENT_IP];
        }else{
            $realip = $_SERVER[REMOTE_ADDR];
        }
        
    }else{
        //不允许就使用getenv获取  
        if(getenv("HTTP_X_FORWARDED_FOR")){
              $realip = getenv( "HTTP_X_FORWARDED_FOR");
        }elseif(getenv("HTTP_CLIENT_IP")) {
              $realip = getenv("HTTP_CLIENT_IP");
        }else{
              $realip = getenv("REMOTE_ADDR");
        }
    }

    return $realip;
    }  
    $mysqli = new mysqli("mysql.coding.io", "user-UCPpR07wHU", "hrxT!oY2A?q7!rjH6YzZ"); 
    $mysqli->select_db("db-S2tEiQosF5");
    $mysqli->set_charset("utf8");
    //INSERT INTO `ip` (`id`, `ip`) VALUES (NULL, '192.168.1.101')
    //$sql = "INSERT INTO `ip` (`id`, `ip`) VALUES (NULL, '" . get_ip() . "')";
    //INSERT INTO `ips` (`id`, `ip`, `referrer`, `fromWhere`) VALUES (NULL, '127.0.0.1', 'tencent', '重庆')
    $sql = "INSERT INTO `ips` (`id`, `ip`, `referrer`, `fromWhere`) VALUES (NULL, '" . get_ip() . "', '" . $_SERVER["HTTP_REFERER"] . "', 'unknow')";
    //$_SERVER["HTTP_REFERER"]
    echo $mysqli->query($sql);
    $mysqli -> Close();
?>