<?php
#includes up at the top so they are easy to find
#and global variables
$p = "../common"; #the path to all the common files
include("$p/db.php"); #include the database driver
include("$p/Parsedown.php"); #include markdown parsing class

#this could be changed to use a database for increased efficiency
$text = file_get_contents("../content/$page_content.md");

$result = Parsedown::instance()->parse($text);
$index_page = Parsedown::instance()->parse(file_get_contents("../content/static/index.md"));
?>
<!DOCTYPE html>
<html lang="en">
<!-- begin head #############################################-->
<head>
<?php include("$p/header.php"); ?>
<!-- javascript includes -->

<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>

</head>
<!-- end head  #############################################-->

<!-- begin body  #############################################-->
<div id="wrap">
<div class="container">
<body>

<!--menu-->
<?php include("$p/menu.php"); ?>

<!--content-->

<div id="main" class="container clear-top">
<div class="row">
<div class="col-xs-2">
<!-- I can now add random things in here If I feel so inclined -->
</div>
<div class="col-xs-8 hidden-phone">
<span id="content"></span>
<!--<?php # commented out -----------
#this prints out the content of the page
if (!$result)
    include("$p/404.php");
else
    echo $result; # prints: <p>Hello <strong>Parsedown</strong>!</p>
if (!$static_page)
    echo $output;
# end comment ?>-->
</div>
<div class="col-xs-2">
</div>
</div>
</div>
</div>
</div>
<?php /* make this do validation */ #include($page_content); ?>

</body>
<!-- end body  #############################################-->

<!-- begin footer  #############################################-->
<div id="footer">

<?php include("$p/footer.php"); ?>

</div>
</div>
<!-- end footer  #############################################-->
<!-- all function based scripts at the end-->
<script src="/js/custom.js"></script>
</html>
