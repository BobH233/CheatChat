<?php
    require 'globalconfig.php';
    global $g_dbAddress,$g_dbUsername,$g_dbPassword,$g_dbName;
    header("Content-type:text/html;charset=utf-8");
    echo "今天是 " . date("Y/m/d") . "<br>";
    echo "现在时间是 " . date("G:i:s") . "<br>";
    //$link = mysql_connect($g_dbAddress,$g_dbUsername,$g_dbPassword);
    //echo "address:" . $g_dbAddress . "<br>";
    $mysqli = new mysqli($g_dbAddress,$g_dbUsername,$g_dbPassword,$g_dbName);
    if(!$mysqli){
        die('不能连接到数据库localhost' . $mysqli->error());
    }
    //mysql_query("set character set 'utf8'");//读库
    $mysqli->query("set character set 'utf8'");
    //mysql_query("set names 'utf8'");//写库
    $mysqli->query("set names 'utf8'");
    echo '连接数据库成功<br>';
    //mysql_select_db($g_dbName, $link);
    //$result = mysql_query("SELECT * FROM Users");
    $result = $mysqli->query("SELECT * FROM Users");

    while($row = mysqli_fetch_array($result))
    {
        echo $row['Nickname'] . " " . $row['UserName'] . " " . $row['Password'];
        echo "<br />";
    }
    //mysql_close($link);
    $mysqli->close();
?>