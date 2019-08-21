<?php
    include('./helpers/functions.php');
    $get_selected_user = showSingleData($_GET['id']);
    $results = json_decode($get_selected_user, true);
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
    <a class="btn btn-primary" href="../index.php">Home</a>
    <a class="btn btn-info" href="../create/create.php">Add Data</a>
    <hr>
    <h2 class="text-success">Update Data</h2>
    <div class="row">
        <div class="col-sm-8 offset-sm-1">
            <form action="helpers/functions.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $results[0]["email"]; ?>">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?php echo $results[0]['passwrd']; ?>">
                </div>
                <button type="submit" class="btn btn-warning" name="submitUpdateUser">Update Data</button>
            </form>
        </div>
    </div>
</body>
</html>

