<?php
define('PATH_TO_WEBROOT', "/srv/http/common");
define('PATH_TO_CONTENT', "/srv/http/content");

require(PATH_TO_WEBROOT.'/Parsedown.php');

#this php file gets and parses the page into a readable format
#require("../../common/Parsedown.php"); #include markdown parsing class
#retrieve dest from get
$page_content  = $_GET["page"];

#read markdown into variable and parse into html
$text = file_get_contents(PATH_TO_CONTENT."/static/$page_content.md");
$result = Parsedown::instance()->parse($text);

echo $result;
?>
