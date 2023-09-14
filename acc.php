<?php
session_start();
include "access.php";
access('ACCOUNTANT');

include "header.php";
?>

<h1>this is the accountant page</h1>

<?php include  "footer.php"; ?>