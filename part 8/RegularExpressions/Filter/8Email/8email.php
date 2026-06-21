<?php
$url = "https://www.plus 2 net .com "; 

$url2="http://www.LEARNPHPعادلåøls.coøm";

echo $url;
$url= filter_var($url, FILTER_SANITIZE_URL);
echo "<br> After Using FILTER_SANITIZE_URL : $url <br><br> "; 

echo $url2;
$url2= filter_var($url2, FILTER_SANITIZE_URL);
echo "<br> After Using FILTER_SANITIZE_URL : $url2 "; ?>