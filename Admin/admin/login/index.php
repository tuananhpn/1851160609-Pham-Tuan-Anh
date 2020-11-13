<?php
    session_start();
    define("TEMPLATE", true);
    require("connect.php");
    if(isset($_SESSION["user"]["mail"]) && isset($_SESSION["user"]["pass"])){
        include_once("master/master.php");
    }else{
        include_once("login.php");
    }
?>