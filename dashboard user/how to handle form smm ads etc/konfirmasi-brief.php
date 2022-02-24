<?php session_start(); ?>

<?php
// only user that registered can login
$con = mysqli_connect('localhost', 'db_user', 'db_pass', 'db_name');
$email = $_SESSION['email'] or $_SESSION['username'];
$password = $_SESSION['password'];
if ($email != false && $password != false) {
    $sql = "SELECT * FROM your_table WHERE email = '$email' OR username = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if ($run_Sql) {
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if ($status == "verified") {
            if ($code != 0) {
                header('Location: reset-code.php');
            }
        } else {
            header('Location: user-otp.php');
        }
    }
} else {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Brief Oesman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./footerindex.css">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- navigation start here -->
    <nav id="navbar-example2" class="navbar navbar-light bg-light px-3" style="box-shadow: 0 5px 5px silver;">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <div style="text-align: center;" class="navbar-brand">
            <img src="https://oesman.id/wp-content/uploads/2020/08/OESMAN_logo-4.png" width="160px;" height="50px;">
        </div>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link fw-bold" href="brief-session.php" style="color: black;">Kembali</a>
            </li>
        </ul>
    </nav>

    <!-- content -->
    <div class=" container mt-5">
        <h2 class="text-center">BRIEF ORDER DESAIN KONTEN</h2>
        <div class="rows">
            <div class="col-12 text-justify mt-5">
                <h4 class="text-center">Dear Klien,</h4>
                <h5 class="text-center">Data Brief Order Desain Konten Anda sudah kami terima, selanjutnya silahkan konfirmasi melalui WA Customer Happiness OESMAN di bawah ini.</h5>
                <p class="text-center mt-5 fw-bold" style="font-size: 1.2em;"><a href="#" target="_blank"><button style="padding: 20px; background-color: #23ce20; color: white; border: none; border-radius: 5px; box-shadow: 5px 5px 5px silver;"><i class="fab fa-whatsapp"> Konfirmasi Sekarang</i></button></a></p>
            </div>
        </div>
    </div>


    <!-- our footer start here -->
    <footer class="footer mt-4">
        <div class="container-footer">
            <div class="row">
                <!-- satu -->
                <div class="footer-col">

                    <img src="https://oesman.id/wp-content/uploads/2020/08/OESMAN_logo-4.png" width="160px;" height="50px;" class="img-fluid">
                    <p class="mt-3 text-justify footer-text">CV. OESMAN merupakan creative digital marketing agency yang membantu dalam melakukan Social Media Optimization, Ads, Website Building, Search Engine Optimization dengan tujuan membantu anda dan perusahaan anda melangkah jauh.</p>
                </div>

                <!-- dua -->
                <div class="footer-col ">
                    <a href="tel:+62 82230560435" target="_blank" style="color: black;"><i class='fas fa-phone-square-alt' style='font-size:48px;'></i></a>
                    <h5 class="footer-text">Telepon</h5>
                    <h6 class="footer-text">+62 818-0801-4188 </h6>
                    <p class="footer-text">Senin – Sabtu, 09.00 – 17.00 </p>
                    <br>
                    <h5 class="footer-text">Email</h5>
                    <a href="mailto: halo@oesman.id" style="color: black;"> <i class='fas fa-envelope-open-text' style='font-size:48px;'></i></a>
                    <h6 class="footer-text">halo@oesman.id <br> 24×7 Online Support</h6>
                </div>

                <!-- tiga -->
                <div class="footer-col ">
                    <a href="https://www.google.com/maps/place/OESMAN/@-7.9153742,112.5792961,17z/data=!31!4b1!4m5!3m4!1s0x2e78810bbac5ec45:0xb5fbd11f2d99a215!8m2!3d-7.9153795!4d112.5814848" style="color: black;"><i class='fas fa-map-marked-alt' style='font-size:48px;'></i></a>
                    <h5 class="footer-text">Alamat </h5>
                    <h6 class="footer-text">CV. OESMAN Perum Bumi Asri Sengkaling Blok N34</h6>
                    <p class="footer-text">Malang, Jawa Timur, Indonesia</p>
                    <a href="https://api.whatsapp.com/send?phone=6282230560435&text=Halo Oesman! Saya berminat order jasa dan berencana konsultasi terlebih dahulu" style="color: black;"><i class='fas fa-comments' style='font-size:48px;'></i></a>
                    <h6><span style="font-weight: bold;" class="footer-text"><a href="https://api.whatsapp.com/send?phone=6282230560435&text=Halo Oesman! Saya berminat order jasa dan berencana konsultasi terlebih dahulu" target="_blank" style="text-decoration: none; color: black;">Konsultasi gratis</a></span></h6>
                    <p class="footer-text">Lebih dekat dengan kami lewat Whatsapp</p>
                </div>

                <!-- empat -->
                <div class="footer-col lisensi ">
                    <h5 class="footer-text">Sosial Media</h5>
                    <h6><a href="https://twitter.com/oesmansolution" target="_blank" style="text-decoration: none; color: black;"> Twitter</a> </h6>
                    <h6><a href="https://www.facebook.com/Oesman-530678027773679" target="_blank" style="text-decoration: none; color: black;"> Facebook</a> </h6>
                    <h6><a href="https://www.instagram.com/oesmansolution/" target="_blank" style="text-decoration: none; color: black;">Instagram</a> </h6>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>