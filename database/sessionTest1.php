<?php
    require 'helper.php';
    initConnect();
    echo $_GET["username"] . "<br>";
    database_setSessionID($_GET["username"],$_GET["s"]);
    closeConnect();
?>