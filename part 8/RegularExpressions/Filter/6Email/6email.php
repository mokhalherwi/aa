<?php
$url = "example.com";

if (filter_var($url, FILTER_VALIDATE_URL)) 
    
    { echo("$url is a valid URL");} 
else 
    { echo("$url is not valid URL");} ?>