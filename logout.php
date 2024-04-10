<?php
include_once("components/url.php");
include_once("database/dblogin.php");

if (isset($_SESSION["user"])) {
    $_SESSION["msg"] = "";
    $_SESSION["user_msg"] = "";
    header("Location:".$url."login.php");
}else{
    header("Location:".$url."index.php");
}

?>