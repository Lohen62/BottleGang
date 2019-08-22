<?php 
    function ConnectionDatabase(){
        try {
            $user = "root";
            $pass = "";
            $pdo = new PDO('mysql:host=localhost;dbname=bottlegang', $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO:: ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            print "erreur !:" .$e->getmessage() . "<br/>";
            die();
        }
    }
    

    ?>