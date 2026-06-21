<?php
$str = "Visit GOOGLE WEB SITE";
$pattern = "/google/i";
echo preg_match($pattern, $str); // Outputs 1
?>