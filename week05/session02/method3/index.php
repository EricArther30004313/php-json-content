<?php
    include('./helpers/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>CRUD Form</title>
</head>
<body class="container">
    <h1>PHP CRUD Froms</h1>
    <h2>Method 3 - Same as Method2, but using an env file</h2>
    <hr>
    <a class="btn btn-primary" href="index.php">Home</a>
    <a class="btn btn-info" href="create.php">Add Data</a>
    <hr>
    <h2 class="text-primary">Show Data</h2>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
            </tr>
        </thead>
        <tbody>
            <?php showdata(); ?>
        </tbody>
    </table>
</body>
</html>

