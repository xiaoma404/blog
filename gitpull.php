<?php
error_reporting(E_ALL);
//寫著玩12312366666
try {
    $str = system("cd /data/gitspace/build && sudo /usr/local/git/bin/git pull");
    echo $str."\n";
    echo "同步成功!";
}catch (Exception $e){
    echo "同步失败".$e;
}
///再写点什么
///