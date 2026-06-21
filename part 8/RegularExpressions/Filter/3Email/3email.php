<?php
$a = 'joe@example.org';
$b = 'php - at - example dot org';
$c = '(phpc@example.org)';

$sanitized_a = filter_var($a, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized_a, FILTER_VALIDATE_EMAIL)) {
    echo "<b>This (a) sanitized email address is considered valid.</b><br>";
}

$sanitized_b = filter_var($b, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized_b, FILTER_VALIDATE_EMAIL))
    { echo "This sanitized email address is considered valid.";} 
    else { echo "<font color=red><b>This (b) sanitized email address is considered invalid.
          </b></font><br>";}

$sanitized_c = filter_var($c, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized_c, FILTER_VALIDATE_EMAIL)) {
    echo "<b>This (c) sanitized email address is considered valid.</b><br>";
    echo "Before: $c<br>";
    echo "After:  $sanitized_c<br>";    
}
?>