<?php

    include_once('../connection/connection.php');

    $id = $_GET['id'];

    $db = connect();
    $sql = "DELETE FROM somedata WHERE id = :id";
    $params = [":id" => $id];

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