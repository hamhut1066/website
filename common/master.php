<!-- this is the master page which holds the main format of the entire website -->

<!--header-->
<?php include('../common/header.php'); ?>
<!--/header-->
<!--menu-->
<?php include('../common/menu.php'); ?>
<!--/menu-->
<!--content-->
<?php /* make this do validation */ include($page_content); ?>
<!--/content-->
<!--footer-->
<?php include('../common/footer.php'); ?>
<!--/footer-->
