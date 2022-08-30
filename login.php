<?php
    require 'config.php';
?>
<?php
if (isset($_SESSION['islogged']) && $_SESSION['islogged'] === true) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Journal|Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
            <div class="row mt-4">
                <div class="col-8 offset-2 text-center">
                    <span class="display-2">
                        Journal
                    </span>
                </div>
            </div>
            <?php
                if (isset($_GET['error_msg'])&&$_GET['error_msg']=='invalid') {
                    echo '
                    <div class="alert alert-danger col-8 offset-2">
                        <strong>Error!</strong> Invalid credentials.
                    </div>
                    ';
                }
            ?>
            <div class="row mt-3">
                <div class="col-8 offset-2">
                    <form action="controllo.php" method="post">
                        <label for="username" class="form-label">Username</label>
                        <input class="form-control" type="text" name="username"><br>

                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" type="password" name="password"><br>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary" type="submit">Login</button>
                            <a class="btn btn-info" href="<?php echo $_CONFIG['url']; ?>">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>