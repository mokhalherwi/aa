<?php

$text = "We at learnPHP strive to make quality education affordable to the masses. learnPHP.com";

$text = preg_replace("/learn/", '<span style="background:yellow">Exercises</span>' , $text);

echo $text;

?>