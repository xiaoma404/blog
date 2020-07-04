<?php
//寫著玩
try {
    system("cd /data/gitspace/build && sudo git pull");
    echo "同步成功!";
}catch (Exception $e){
    echo "同步失败".$e;
}
///再写点什么
///