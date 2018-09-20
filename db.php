<?php
    # db.php

    $GLOBALS['pdo'] = new PDO("mysql:host=127.0.0.1;dbname=te16", "admin", "admin");

    $statement = $GLOBALS['pdo']->query("SELECT * FROM users");
    $GLOBALS['row'] = $statement->fetch(PDO::FETCH_ASSOC);


    function create_user($username, $password){
        // TODO: Sanitize everything
        $GLOBALS['pdo'] = new PDO("mysql:host=127.0.0.1;dbname=te16", "admin", "admin");

        $stmt = $GLOBALS['pdo']->prepare("INSERT INTO users (username, password, mail) VALUES(:username, :password, :mail)"); 

        $stmt->execute(array(
            "username" => $username,
            "password" => $password,
            "mail" => "test@mail.co"
        ));

        echo "Success!";
    }
    
?>  