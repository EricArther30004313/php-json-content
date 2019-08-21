<?php

    include_once('../connection/connection.php');

    $id = $_POST['id'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $db = connect();
    $sql = "UPDATE somedata SET email = :email, passwrd = :passwrd WHERE id = :id";
    $params = [":id" => $id, ":email" => $email, ":passwrd" => $pass];

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