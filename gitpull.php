<?php
//寫著玩11123
try {
    system("cd /data/gitspace/build;/usr/local/git/bin/git pull");
    echo "同步成功!";
}catch (Exception $e){
    echo "同步失败".$e;
}
///再写点什么
///