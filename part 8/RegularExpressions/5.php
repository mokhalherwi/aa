<?php
$my_url = "www.VisualCodeStudio.com";

if (preg_match("/code/", $my_url))
{
	echo "the url $my_url contains code";
}
else
{
	echo "the url <b> $my_url</b> does not contain code";
}
?>