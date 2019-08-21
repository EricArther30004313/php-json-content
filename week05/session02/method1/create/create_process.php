<?php

    include_once('../connection/connection.php');

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $db = connect();
    $sql = "INSERT INTO somedata (id, email, passwrd) VALUES (:id, :email, :pass)";
    $params = [":id" => uniqid(), ":email" => $email, ":pass" => $pass];

    $stmt = $db->prepare($sql);
    $stmt->execute($params);

    $count = $stmt->rowCount();

    if($count == 1) {
        $host = $_SERVER['HTTP_HOST'];
        $path = 'PDO/method1/index.php';
        header("Location: http://$host/$path");
        //sessions_destroy();
        exit;
    } 