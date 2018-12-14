<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-12-11
 * Time: 21:32
 */
$filepath="weather.txt";
$url="http://www.weather.com.cn/weather1d/101230101.shtml";
$result= file_get_contents($url);
file_put_contents($filepath,$result);
mb_eregi("<title>(.*)</title>",$result,$weather);
echo($weather[1]);
?>