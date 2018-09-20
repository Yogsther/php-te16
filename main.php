<?php
/**
 * User: olle
 * Date: 2018-09-19
 * Time: 09:08
 */

    session_start();

    include "db.php";

    if(isset($_POST["sign"]) && isset($_POST["password"]) && isset($_POST["username"])){
        echo "Creating account for " . $_POST["username"] . " , " . md5($_POST["password"]);
        create_user($_POST["username"], md5($_POST["password"]));
    }

    if(isset($_POST["log"])){
        echo var_dump($GLOBALS["row"]);
    }

?>