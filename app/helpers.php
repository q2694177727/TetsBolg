<?php

/*
 * 将时间进行详细化
 * 参数:
 *  $time    时间(单位秒)
 *  $returnType     true时只显示最大 否则显示至秒
 * */
function getSortTime($time,$returnType=true){
    $result     =   "";
    switch ($time){
        case $time < 60:
            //最小开始进行判断 秒

            $result     =   $time . " seconds";
            break;
        case $time<(60*60):
            //分
            $result     =   $returnType ?
                ceil($time/60) . " minutes" :
                ceil($time/60) . " minutes " . ($time%60) . " seconds";
            break;
        case $time<(60*60*60):
            //时
            $result     =   $returnType ?
                ceil($time/60/60) . " hours" :
                ceil($time/60/60) . " hours " . ceil(($time/60) %60) . " minutes " . ceil($time%60) ." seconds";
            break;
        case $time<(60*60*24):
            //天
            $result     =   $returnType ?
                ceil($time/60/60/24) . " days" :
                ceil($time/60/60/24) . " days " .  ceil(($time/60/60)%24) . " hours " . ceil(($time/60) %60) . " minutes " . ceil($time%60) ." seconds";
            break;
        case $time<(60*60*24*30):
            //月
            $result     =   $returnType ?
                ceil($time/60/60/24/30) . " months" :
                ceil($time/60/60/24/30) . " months " . ceil(($time/60/60/24)%30) . " days " .  ceil(($time/60/60)%24) . " hours " . ceil(($time/60) %60) . " minutes " . ceil($time%60) ." seconds";
            break;
        case $time<(60*60*24*12):
            //年
            $result     =   $returnType ?
                ceil($time/60/60/24/30/12) . " years" :
                ceil($time/60/60/24/30/12) . " years " . ceil(($time/60/60/24/30)%12) . " months " . ceil(($time/60/60/24)%30) . " days " .  ceil(($time/60/60)%24) . " hours " . ceil(($time/60) %60) . " minutes " . ceil($time%60) ." seconds";
            break;
        default:
            $result     =   $time . " seconds";
            break;
    }
    return $result;
}