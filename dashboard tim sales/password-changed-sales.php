<?php require_once "controllerUserData-sales.php"; ?>
<?php
if($_SESSION['info'] == false){
    header('Location: timsales.php');  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
            <?php 
            if(isset($_SESSION['info'])){ 
                ?>
                <div class="alert alert-success text-center">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>
                <form action="timsales.php" method="POST">
                    <div style="text-align: center; margin-bottom: 20px;">
                        <img src="https://oesman.id/wp-content/uploads/2020/08/OESMAN_logo-4.png" width="250px;" height="80px;">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login-now" value="Login Now">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>