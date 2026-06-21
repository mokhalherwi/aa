<?php
$url = "http://www.example.com";

if (filter_var($url, FILTER_VALIDATE_URL ,FILTER_FLAG_HOST_REQUIRED)) 
    
{ echo("$url is a valid URL<br>");} else { echo("$url is not valid URL<br>");}

$url_path = "http://www.example.com/adel/to/dir/";

if (filter_var($url_path, FILTER_VALIDATE_URL ,FILTER_FLAG_PATH_REQUIRED)) 
    
{ echo("$url_path have a path after domain name<br>");} 
  else { echo("$url_path does not path after domain name.<br>");} 

$url_query = "http://www.example.com/adel/to/dir/index.php?test=y";

if (filter_var($url_query, FILTER_VALIDATE_URL ,FILTER_FLAG_QUERY_REQUIRED)) 
    
    { echo("$url_query have a Query String.<br>");} 
      else { echo("$url_query does not a Query String.<br>");} ?>