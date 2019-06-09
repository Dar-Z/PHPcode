
<?php
set_time_limit(0);
function getwebcontent($url){ 
$ch = curl_init(); 
$timeout = 10; 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout); 
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1); 
$contents = trim(curl_exec($ch)); 
curl_close($ch); 
return $contents; 
} 
function DeleteHtml($str) 
 { 
 $str = trim($str); 
 //$str = strip_tags($str,""); 
 $str = str_replace("\t","",$str); 
 $str = str_replace("\r\n","",$str); 
 $str = str_replace("\r","",$str); 
 $str = str_replace("\n","",$str); 
//$str = ereg_replace("	","	",$str); 
 return trim($str); 
 }

$string =DeleteHtml(getwebcontent('http://dealer.auto.ifeng.com/20616/price.html')); 
echo $string;
echo "以下为采集结果<br>";
 


preg_match_all("/<div class=\"m-i-d\"><span class=\"cu-ico\" style=\"background-color: white;\">&nbsp;<\/span><div class=\"m-i-z\"><a href=\"(.*?)\"class=\"name\">(.*?)<\/a><span>优惠： (.*?) <\/span><\/div><div class=\"price\"><span>本店价：<b class=\"red\"><atitle=\"(.*?)\"href=\"(.*?)\">(.*?)<\/a> <a class=\"cuspan\" style=\"color:#fff\" href=\"\/20616\/news_info_470373\.html\">促<\/a> <\/b> <\/span><em>指导价：<atitle=\"(.*?)\"style=\"text-decoration: line-through;\"href=\"(.*?)\">(.*?)<\/a> <\/em><\/div><div class=\"inventory\"><em>(.*?)<\/em><\/div><div class=\"info_oper\"><a class=\"inquiry\" target=\"_blank\"href=\"(.*?),(.*?)\">询价<\/a>(.*?)<\/div><\/div>/",$string, $cxiout2); 
//车型具体信息




echo "<font color=red>【具体车型报价信息】</font><br>";
$c=0;
foreach($cxiout2 as $key => $value){ 
echo $cxiout2[$key][2]."<br>"; 
$c=$c+count($key);
//车型名称
} 
echo $c."<br>";


?>
