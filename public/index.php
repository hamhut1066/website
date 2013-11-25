<?php
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

$page_content = "../content$urlcontent[path].php";
$header = "hamhut";
require('../common/master.php');
echo endsWith($path, '#');
?>
