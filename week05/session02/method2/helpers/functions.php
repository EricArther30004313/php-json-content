<?php

include_once('connection.php');

if(isset($_POST['submitAddUser']))
{
    $email = !empty($_POST['email']);
    $pass = !empty($_POST['pass']);

    if($email && $pass) {
        addUser($_POST['email'], $_POST['pass']);
    }
}
else if(isset($_POST['submitUpdateUser']))
{
    $id = !empty($_POST['id']);
    $email = !empty($_POST['email']);
    $pass = !empty($_POST['pass']);

    if($id && $email && $pass) {
        updateUser($_POST['id'], $_POST['email'], $_POST['pass']);
    }
}
else if(isset($_POST['submitDeleteUser']))
{
    $id = !empty($_POST['id']);

    if($id) {
        removeUser($_POST['id']);
    }
}

function connect() {
    try {
        $dsn = "mysql:host=".DBHOST.";dbname=".DBNAME."";
        $pdo = new PDO($dsn, DBUSER, DBPASS);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } catch (PDOException $e) {
        print "ERROR!: ". $e->getMessage() . "<br>";
        die();
    }
}

function showdata() {

    $db = connect();
    $sql = "SELECT * FROM somedata";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    $results = $stmt->FETCHALL();

    $output = "";
    if( count($results) > 0 ) {
        foreach($results as $result) {
            echo "
            <tr>
                <td>".$result['id']."</td>
                <td>".$result['email']."</td>
                <td>".$result['passwrd']."</td>
                <td><a class=\"btn btn-info\" href=\"update.php?id=".$result['id']."\" >Update</a></td>
                <td>
                    <form method=\"POST\" action=\"helpers/functions.php\">
                        <input type=\"hidden\" name=\"id\" value='".$result['id']."' >
                        <input type=\"submit\" class=\"btn btn-danger\" name=\"submitDeleteUser\" value=\"Delete\">
                    </form>
                </td>
            </tr>";
        }
    } else {
        echo "<tr><td>No Data</td></tr>";
    }
}

function showSingleData($id) {
    $db = connect();
    $sql = "SELECT email, passwrd FROM somedata WHERE id = :id";
    $params = [":id" => $id];
    $stmt = $db->prepare($sql);
    $stmt->execute($params);

    $results = $stmt->FETCHALL();

    return json_encode($results);
}

function addUser($email, $pass) {

    $db = connect();
    $sql = "INSERT INTO somedata (id, email, passwrd) VALUES (:id, :email, :pass)";
    $params = [":id" => uniqid(), ":email" => $email, ":pass" => $pass];

    $stmt = $db->prepare($sql);
    $stmt->execute($params);

    $count = $stmt->rowCount();

    if($count == 1) {
        $host = $_SERVER['HTTP_HOST'];
        $path = '/week05/session02/method2/index.php';
        header("Location: http://$host/$path");
        //sessions_destroy();
        exit;
    } 
}

function updateUser($id, $email, $pass) {
    
    $db = connect();
    $sql = "UPDATE somedata SET email = :email, passwrd = :passwrd WHERE id = :id";
    $params = [":id" => $id, ":email" => $email, ":passwrd" => $pass];

    $stmt = $db->prepare($sql);
    $stmt->execute($params);

    $count = $stmt->rowCount();

    if($count == 1) {
        $host = $_SERVER['HTTP_HOST'];
        $path = '/week05/session02/method2/index.php';
        header("Location: http://$host/$path");
        //sessions_destroy();
        exit;
    } 
}

function removeUser($id) {

    $db = connect();
    $sql = "DELETE FROM somedata WHERE id = :id";
    $params = [":id" => $id];

    $stmt = $db->prepare($sql);
    $stmt->execute($params);

    $count = $stmt->rowCount();

    if($count == 1) {
        $host = $_SERVER['HTTP_HOST'];
        $path = '/week05/session02/method2/ndex.php';
        header("Location: http://$host/$path");
        //sessions_destroy();
        exit;
    } 
}