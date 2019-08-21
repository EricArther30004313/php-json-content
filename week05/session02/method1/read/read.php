<?php

    include_once('connection/connection.php');

    function showdata() {

        $db = connect();
        $sql = "SELECT * FROM somedata";
        $stmt = $db->prepare($sql);
        $stmt->execute();

        $results = $stmt->FETCHALL();

        //var_dump($results);

        $output = "";
        if( count($results) > 0 ) {
            foreach($results as $result) {
                echo "
                <tr>
                    <td>".$result['id']."</td>
                    <td>".$result['email']."</td>
                    <td>".$result['passwrd']."</td>
                    <td><a class=\"btn btn-info\" href=\"update/update.php?id=".$result['id']."\" >Update</a></td>
                    <td><a class=\"btn btn-danger\" href=\"delete/delete.php?id=".$result['id']."\" >Delete</a></td>
                </tr>";
            }
        } else {
            echo "<tr><td>No Data</td></tr>";
        }
    }