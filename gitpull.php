<?php
error_reporting(E_ALL);
//寫著玩12312366666435
try {
    $str = shell_exec("cd /data/gitspace/build && sudo /usr/local/git/bin/git pull && echo '1111'");
//    $str = shell_exec("whoami");
    echo $str."\n";
    echo "同步成功!";
}catch (Exception $e){
    echo "同步失败".$e;
}
///再写点什么
///