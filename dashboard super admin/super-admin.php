<?php require_once "controllerUserData-superadmin.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Login Super Admin OESMAN</title>
  </head>
  <body style="background-color: #570000;">

<div class="container" style="margin-top: 30px;">
    <div class="col-8" style="margin: auto;">
        <form style="background-color: white; padding: 20px; border-radius: 10px;" action="super-admin.php" method="POST">
        <div style="text-align: center; margin-bottom: 20px;">
              <img src="https://oesman.id/wp-content/uploads/2020/08/OESMAN_logo-4.png" width="240px" height="80px" class="img-fluid">
              <h4 style="font-weight: bold; margin: 20px 0;">SUPER ADMIN OESMAN</h4>
        </div>

              <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>

                    <div class="form-group mt-3">
                        <input class="form-control" type="text" name="email" placeholder="Email or Username" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input class="form-control" type="password" name="password" placeholder="Password" required> 
                    </div>
                    <!-- <div class="link forget-pass text-left"><a href="forgot-password-sales.php">Forgot password?</a></div> -->
                    <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary form-control button" name="login" value="login" >Login</button>
                    </div>
                    <div class="link login-link text-center mt-3"><a href="forgot-password-superadmin.php">Forgot password?</a></div>
                    </form>
    </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>