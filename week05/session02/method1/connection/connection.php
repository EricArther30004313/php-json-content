<?php

    function connect() {
        $host = 'oopphp_db_1';
        $dbname = 'containerdb';
        $username = 'user';
        $password = 'user1234';
        
        try {
            $dsn = "mysql:host=$host;dbname=$dbname";
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (PDOException $e) {
            print "ERROR!: ". $e->getMessage() . "<br>";
            die();
        }
    }