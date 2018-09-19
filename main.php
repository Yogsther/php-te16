<?php
/**
 * Created by PhpStorm.
 * User: olle
 * Date: 2018-09-19
 * Time: 09:08
 */

    session_start();
    if(isset($_POST["submit"])){

        $loginCredentials = [
            "username" => "admin",
            "password" => "admin"
        ];

        if(isset($_POST["username"]) && isset($_POST["password"])){

            $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
            $password = md5($_POST["password"]);

            echo $password;

            if($username == $loginCredentials["username"] && $password == md5($loginCredentials["password"])){
                echo "<br><h1>test</h1>";
            }
            
        }
    }



?>