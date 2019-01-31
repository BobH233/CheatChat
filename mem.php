<?php
    function memory_usage() {   $memory  = ( ! function_exists('memory_get_usage')) ? '0' : round(memory_get_usage()/1024/1024, 2).'MB';   return $memory;  } 
    echo memory_usage();
?>