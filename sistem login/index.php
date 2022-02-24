<!-- all the data that submitted will be proccess other file (below) -->
<?php require_once "controllerUserData.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Login Form</title>
</head>

<body style="background-color: #570000;">

    <div class="container" style="margin-top: 30px;">
        <div class="col-8" style="margin: auto;">
            <form style="background-color: white; padding: 20px; border-radius: 10px;" action="index.php" method="POST">
                <div style="text-align: center; margin-bottom: 20px;">
                    <img src="https://oesman.id/wp-content/uploads/2020/08/OESMAN_logo-4.png" width="240px" height="80px" class="img-fluid">
                </div>

                <?php
                if (count($errors) > 0) {
                ?>
                    <div class="alert alert-danger text-center">
                        <?php
                        foreach ($errors as $showerror) {
                            echo $showerror;
                        }
                        ?>
                    </div>
                <?php
                }
                ?>

                <div class="mb-3">
                    <input type="text" name="email" class="form-control" placeholder="Email or Username" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary form-control" name="login" value="login">Login</button>
                </div>

                <div class="link text-center mt-3"> <a href="forgot-password.php">Forgot password?</a> | <a href="signup-user.php">Signup now</a></div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>