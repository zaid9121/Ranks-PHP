<?php

function access($rank, $redirect = true)
{

    if (isset($_SESSION["ACCESS"]) && !$_SESSION["ACCESS"]["$rank"]) {
        if ($redirect) {

            header("Location: denied.php");
            die;
        }
        return false;
    }
    return true;
}

$_SESSION["ACCESS"]["ADMIN"] = isset($_SESSION['myrank']) && trim($_SESSION['myrank']) == "admin";

$_SESSION["ACCESS"]["USER"] = isset($_SESSION['myrank']) && (trim($_SESSION['myrank']) == "user" || trim($_SESSION['myrank']) == "admin" ||  trim($_SESSION['myrank']) == "receptionist");

$_SESSION["ACCESS"]["RECEPTIONIST"] = isset($_SESSION['myrank']) && (trim($_SESSION['myrank']) == "receptionist" || trim($_SESSION['myrank']) == "admin");

$_SESSION["ACCESS"]["ACCOUNTANT"] = isset($_SESSION['myrank']) && (trim($_SESSION['myrank']) == "accountant" || trim($_SESSION['myrank']) == "admin");


//$user = isset($_SESSION['myrank']) && $_SESSION['myrank'] == "user";
//$receptionist = isset($_SESSION['myrank']) && $_SESSION['myrank'] == "receptionist";

//var_dump($receptionist);
