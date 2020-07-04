<?php
//寫著玩
try {
    $str = system("cd /data/gitspace/build && sudo git pull");
    echo $str."\n";
    echo "同步成功!";
}catch (Exception $e){
    echo "同步失败".$e;
}
///再写点什么
///