<?php
#include the config file
include("../common/config.php");
#include the parsedown function, that allows writing web pages in haml
include("../common/ParseDown.php"); #disabled at the moment
$haml = ""; #new HamlParser(array{'style'=>'nested', 'ugly'=>false});
#all that needs to be done is to set $page_content, then `require` the 
#master page.
#get the url information
$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
#pull the url apart into an easy to use array
$urlcontent = parse_url($url);
$path = $urlcontent[path];
# finish getting url
# [scheme] -> http
# [host] -> hamhut1066.com
# [path] -> /foo/bar
# [query] -> ?some=param

#conditional to check if we are on the homepage
if($path == '/'){
    $page_content = "$static/index";
}else {
    $page_content = $path;
}
$header = "hamhut"; #the default header for the website
$static_page = True; #the default assumption for the website is that the page is static
#write a function that checks the url to see if it is a reserved word, if yes, 
#then pass off to a function and set a different variable for use
$tmp = explode("$static/", $path);
$title = $tmp[1];
require('../common/master.php');
#echo endsWith($path, '#');
?>
