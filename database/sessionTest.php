<?php
    require 'helper.php';
    initConnect();
    echo $_GET["username"] . "<br>";
    echo "fuck:" . database_getSessionID($_GET["username"]);
    closeConnect();
?>