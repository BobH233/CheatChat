<?php
    //ZendeeLoginCallback
    $openID = $_GET['openID'];
    $api_add = "http://users.zendee.cn/userApplication/zendeeUserInfoByOpenID.action";
    $appID = "APP20180405212247ZENDEE42";
    $url = $api_add . "?appID=" . $appID . "&openID=" . $openID;
    $html = file_get_contents($url);
    echo $html;
?>