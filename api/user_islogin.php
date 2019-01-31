<?php
    require('../model/class_msg.php');
    require('../session/helper.php');
    //session_start();
    if(islogin()){
        die(mkJson(1,"true"));
    }
    echo mkJson(0,'false');
?>