<?php
$ip = "255.255.255.255";

if (filter_var($ip, FILTER_VALIDATE_IP ,FILTER_FLAG_NO_RES_RANGE)) 
    
    { echo("$ip is a valid IP address");} 
else 
    { echo("$ip is not a valid IP address");} ?>