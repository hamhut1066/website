<?php

#$tmp = ltrim($path, '/');
$headerurl = "$header |  $title";
if($path == '/'){ 
    $headerurl = $header;}
?>

<title><?php echo "$headerurl"; ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet"
href="/css/bootstrap.min.css">
<script
src="/js/bootstrap.min.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
