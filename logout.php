<?php

session_start();

if(isset($_SESSION['myname']))
   {
    //echo " Hi, " . $_SESSION['myname'];
    unset($_SESSION['myname']);
   }

   {
   
    unset($_SESSION['myid']);
   }

   header("Location: login.php");

?>