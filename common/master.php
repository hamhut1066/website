<!DOCTYPE html>
<html lang="en">
<?php
#includes up at the top so they are easy to find
#and global variables
define(COMMON, "/srv/http/common");
?>

<!-- begin head #############################################-->
<head>
<?php include(COMMON."/header.php"); ?>
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
<?php include(COMMON."/menu.php"); ?>

<!--content-->

<div id="main" class="container clear-top">
<div class="row">
<div class="col-xs-2">
<!-- I can now add random things in here If I feel so inclined -->
</div>
<div class="col-xs-8 hidden-phone">
<span id="content"></span><!--the content of the page -->
</div>
<div class="col-xs-2">
</div>
</div>
</div>
</div>
</div>

</body>
<!-- end body  #############################################-->

<!-- begin footer  #############################################-->
<div id="footer">

<?php include(COMMON."/footer.php"); ?>

</div>
</div>
<!-- end footer  #############################################-->
<!-- all function based scripts at the end-->
<script src="/js/custom.js"></script>
<script src="/js/purl/purl.js"></script>
</html>
