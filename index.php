<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Journal|Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php
    if (isset($_SESSION['islogged']) && $_SESSION['islogged'] === true) {
    ?>
        <div class="container">
            <div class="row mt-4">
                <div class="col-8 offset-2 text-center">
                    <span class="display-2">
                        Journal
                    </span>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-8 offset-2 text-center">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="https://anatoliyz.playground.verysimplejournal.com/journal">My notes</a><br>
                        </li>
                        <li class="list-group-item">
                            <a class="btn btn-danger" href="logout.php">Logout</a>
                        </li>
                        <li class="list-group-item">
                            <a class="btn btn-info" href="https://anatoliyz.playground.verysimplejournal.com/login.php">Cambia utente</a>
                        </li>
                    </ul>
                </div>
            </div>



        </div>
    <?php
    } else {
    ?>
        <div class="container">
            <div class="row mt-4">
                <div class="col-8 offset-2 text-center">
                    <span class="display-2">
                        Journal
                    </span>
                </div>
            </div>
            <?php
            if (isset($_GET['error_msg']) && $_GET['error_msg'] == 'invalid') {
                echo '
                    <div class="alert alert-danger col-8 offset-2">
                        <strong>Error!</strong> Invalid data.
                    </div>
                    ';
            }
            ?>
            <div class="row mt-3">
                <div class="col-8 offset-2">
                    <form action="register.php" method="post">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control" type="text" name="name"><br>

                        <label for="name" class="form-label">Surname</label>
                        <input class="form-control" type="text" name="surname"><br>

                        <label for="username" class="form-label">Username</label>
                        <input class="form-control" type="text" name="username"><br>

                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" type="password" name="password"><br>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary" type="submit">Sign Up</button>
                            <a class="btn btn-info" href="https://anatoliyz.playground.verysimplejournal.com/login.php">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php
    }
    ?>


</body>

</html>