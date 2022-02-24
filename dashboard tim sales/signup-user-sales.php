<?php require_once "controllerUserData-sales.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Tim Sales Oesman</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5" style="margin-top: 20px;">
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user-sales.php" method="POST" autocomplete="">
                    <div style="text-align: center; margin-bottom: 20px;">
                        <img src="https://oesman.id/wp-content/uploads/2020/08/OESMAN_logo-4.png" width="250px;" height="80px;">
                    </div>
                    <h2 class="text-center">Register</h2>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Nama Lengkap" required value="<?php echo $name ?>">
                    </div>

                    <div class="form-group mt-3">
                    <p style="font-size: 10px; font-weight: bold;"><i>Kode Referral Terdiri dari 6 Digit Kombinasi Huruf dan Angka. Contoh : HM7LO8</i></p>
                        <input class="form-control" type="text" name="referral" maxlength="6" placeholder="Buat Kode Referral" required value="<?php echo $referral ?>">
                    </div>

                    <div class="form-group"> 
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Konfirmasi password" required>
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email " required value="<?php echo $email ?>">
                    </div>

                    <div class="form-group mt-3">
                        <input class="form-control" type="number" name="nomortelepon" placeholder="Nomor Telepon" required value="<?php echo $nomortelepon ?>">
                    </div>

                    <div class="form-group mt-3">
                        <input class="form-control" type="text" name="alamat" placeholder="Alamat Domisili" required value="<?php echo $alamat ?>">
                    </div>


                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Submit">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="timsales.php">Login here</a></div>
                </form> 
            </div>
        </div>
    </div>
    
</body>
</html>