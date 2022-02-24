<?php session_start(); ?>

<?php
// this code below is mean for security, only user that have been registered that can be see this page
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
    <title>Brief Custom Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./footerindex.css">
    <style>
        /* img.colorpick-eyedropper-input-trigger {
            display: none;
        } */
    </style>
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
                <a class="nav-link fw-bold" href="welcome.php" style="color: black;">KEMBALI</a>
            </li>
        </ul>
    </nav>

    <!-- content -->
    <div class=" container mt-5 text-center">
        <h2 class="text-center">BRIEF CUSTOM ORDER</h2>
        <p>Apabila terdapat pertanyaan / kendala mengenai pengisian formulir ini, dengan senang hati kami akan bantu Anda dengan menghubungi Customer Happiness from Oesman di bawah ini, Terimakasih.</p>
        <p class="text-center "> <a href="https://api.whatsapp.com/send?phone=+6281260011600 " target="_blank"> <button style="padding: 20px; border: none; border-radius: 5px;background-color: green; color: white; box-shadow: 4px 4px 4px silver;"> Customer Happines Oesman</button> </a></p>
    </div>

    <!-- form start here -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5" style="box-shadow: 10px 10px 10px silver; border-radius: 20px;">
                    <!-- <div class="card-header">
                        <h4>Coba Dulu</h4>
                    </div> -->
                    <div class="card-body">

                        <form action="code-custom-order.php" method="POST" enctype="multipart/form-data">

                            <label for="" class="form-label fw-bold">Pilihan Order*</label>
                            <select name="jenispaket" id="" class="form-control">
                                <!-- <option value="">Pilih Jenis Paket</option> -->
                                <option value="" style="color: silver;">Pilihan Order</option>
                                <option value="Kartu Nama">Kartu Nama</option>
                                <option value="Logo">Logo</option>
                                <option value="Poster">Poster</option>
                                <option value="Letter Head">Letter Head</option>
                                <option value="Banner">Banner</option>
                                <option value="Editing Video">Editing Video</option>
                            </select>

                            <label for="" class="form-label fw-bold mt-3">Kode Referral</label>
                            <input type="text" name="referral" autocomplete="off" class="form-control">

                            <label for="" class="form-label fw-bold mt-3">Nama*</label>
                            <input type="text" id="" name="name" autocomplete="off" required class="form-control">

                            <label for="" class="form-label fw-bold mt-3">Email*</label>
                            <input type="email" id="" name="email" autocomplete="off" required class="form-control">

                            <label for="" class="form-label fw-bold mt-3">Alamat*</label>
                            <input type="text" id="" name="alamat" autocomplete="off" required class="form-control">

                            <label for="" class="form-label fw-bold mt-3">Nomor Telepon*</label>
                            <input type="number" id="" name="nomortelepon" autocomplete="off" required class="form-control">

                            <label for="" class="form-label fw-bold mt-3">Nama Usaha / Produk*</label>
                            <input type="text" id="" name="namausaha" autocomplete="off" required class="form-control">

                            <label for="" class="form-label fw-bold mt-3">Deskripsi Usaha</label>
                            <input type="text" id="" name="deskripsiusaha" autocomplete="off" class="form-control">

                            <label for="customorder" class="form-label fw-bold mt-3">Order Saya:</label>
                            <textarea id="customorder" name="customorder" class="form-control mt-1" style="height: 10rem" placeholder="Tulis order anda disini . . ."></textarea>

                            <label for="" class="form-label mt-3 fw-bold">Unsur Warna yang Diinginkan</label>
                            <p style="font-size: 10px; font-weight: bold;">
                                Anda dapat memilih 3 warna yang berbeda<br>
                                <input type="color" id="" name="warna1" autocomplete="off" style=" margin-right: 10px;" class="mt-2">
                                <input type="color" id="" name="warna2" autocomplete="off" style=" margin-right: 10px;">
                                <input type="color" id="" name="warna3" autocomplete="off">
                            </p>

                            <p style="font-size: 10px; font-weight: bold;" class="mt-3"><i>Anda juga bisa melampirkan hex color (contoh: #FF2SQ1 #03S312)</i></p>
                            <input type="text" id="" name="linkhex" autocomplete="off" class="form-control">



                            <!-- <label style="font-size: 10px; font-weight: bold;" class="mt-2"><i>Warna 1</i></label>
                                <input type="color" id="" name="warna1" autocomplete="off" >

                                <label style="font-size: 10px; font-weight: bold;" class="mt-2 "><i>Warna 2</i></label>
                                <input type="color" id="" name="warna2" autocomplete="off" >

                                <label style="font-size: 10px; font-weight: bold;" class="mt-2"><i>Warna 3</i></label>
                                <input type="color" id="" name="warna3" autocomplete="off" > -->

                            <label for="" class="form-label mt-3 fw-bold">Hal yang Harus Dihindari Dalam Konten / Pantangan Dalam Konten</label>
                            <input type="text" id="" name="pantangan" autocomplete="off" class="form-control">

                            <legend class="col-form-label ml-3 col-form-label pt-0 mt-3 fw-bold">Pilih Satu Dari Dua Opsi Gaya Desain di Bawah </legend>
                            <input class="form-check-input" type="radio" name="desain1" id="" value="Modern">
                            <label class="form-check-label" for="">
                                <img src="https://oesman.id/wp-content/uploads/2021/08/modern.jpg" width="200px" height="200px" alt="">
                                <p>Modern</p>
                            </label>

                            <input class="form-check-input" type="radio" name="desain1" id="" value="Klasik" style="margin-left: 30px;">
                            <label class="form-check-label" for="">
                                <img src="https://oesman.id/wp-content/uploads/2021/08/CLASSIC-3.jpg" width="200px" height="200px" alt="">
                                <p>Klasik</p>
                            </label><br>
                            <hr>

                            <!-- <legend class="col-form-label ml-3 col-form-label pt-0 mt-3 fw-bold">Gaya Desain Pilihan Anda</legend> -->
                            <input class="form-check-input" type="radio" name="desain2" id="" value="Dewasa">
                            <label class="form-check-label" for="">
                                <img src="https://oesman.id/wp-content/uploads/2021/09/DEWASA.jpg" width="200px" height="200px" alt="">
                                <p>Dewasa</p>
                            </label>
                            <input class="form-check-input" type="radio" name="desain2" id="" value="Muda" style="margin-left: 30px;">
                            <label class="form-check-label" for="">
                                <img src="https://oesman.id/wp-content/uploads/2021/09/muda.jpg" width="200px" height="200px" alt="">
                                <p>Muda</p>
                            </label><br>
                            <hr>

                            <!-- <legend class="col-form-label ml-3 col-form-label pt-0 mt-3 fw-bold">Gaya Desain Pilihan Anda</legend> -->
                            <input class="form-check-input" type="radio" name="desain3" id="" value="Feminim">
                            <label class="form-check-label" for="">
                                <img src="https://oesman.id/wp-content/uploads/2021/09/feminim.jpg" width="200px" height="200px" alt="">
                                <p>Feminim</p>
                            </label>
                            <input class="form-check-input" type="radio" name="desain3" id="" value="Maskulin" style="margin-left: 30px;">
                            <label class="form-check-label" for="">
                                <img src="https://oesman.id/wp-content/uploads/2021/09/maskulin-2.jpg" width="200px" height="200px" alt="">
                                <p>Maskulin</p>
                            </label><br>
                            <hr>

                            <!-- <legend class="col-form-label ml-3 col-form-label pt-0 mt-3 fw-bold">Gaya Desain Pilihan Anda</legend> -->
                            <input class="form-check-input" type="radio" name="desain4" id="" value="Ceria">
                            <label class="form-check-label" for="">
                                <img src="https://oesman.id/wp-content/uploads/2021/09/CERIA.jpg" width="200px" height="200px" alt="">
                                <p>Ceria</p>
                            </label>
                            <input class="form-check-input" type="radio" name="desain4" id="" value="Techno" style="margin-left: 30px;">
                            <label class="form-check-label" for="">
                                <img src="https://oesman.id/wp-content/uploads/2021/09/tekno.jpg" width="200px" height="200px" alt="">
                                <p>Techno</p>
                            </label><br>
                            <hr>

                            <!-- <legend class="col-form-label ml-3 col-form-label pt-0 mt-3 fw-bold">Gaya Desain Pilihan Anda</legend> -->
                            <input class="form-check-input" type="radio" name="desain5" id="" value="Ekonomis">
                            <label class="form-check-label" for="">
                                <img src="https://oesman.id/wp-content/uploads/2021/09/ekonimis.jpg" width="200px" height="200px" alt="">
                                <p>Ekonomis</p>
                            </label>
                            <input class="form-check-input" type="radio" name="desain5" id="" value="Elegan" style="margin-left: 30px;">
                            <label class="form-check-label" for="">
                                <img src="https://oesman.id/wp-content/uploads/2021/09/elegan.jpg" width="200px" height="200px" alt="">
                                <p>Elegan</p>
                            </label><br>
                            <hr>

                            <!-- <legend class="col-form-label ml-3 col-form-label pt-0 mt-3 fw-bold">Gaya Desain Pilihan Anda</legend> -->
                            <input class="form-check-input" type="radio" name="desain6" id="" value="Abstrak">
                            <label class="form-check-label" for="">
                                <img src="https://oesman.id/wp-content/uploads/2021/09/abstract.jpg" width="200px" height="200px" alt="">
                                <p>Abstrak</p>
                            </label>
                            <input class="form-check-input" type="radio" name="desain6" id="" value="Realis" style="margin-left: 30px;">
                            <label class="form-check-label" for="">
                                <img src="https://oesman.id/wp-content/uploads/2021/09/Realis.jpg" width="200px" height="200px" alt="">
                                <p>Realis</p>
                            </label><br>
                            <hr>

                            <!-- <legend class="col-form-label ml-3 col-form-label pt-0 mt-3 fw-bold">Gaya Desain Pilihan Anda</legend> -->
                            <input class="form-check-input" type="radio" name="desain7" id="" value="Simple">
                            <label class="form-check-label" for="">
                                <img src="https://oesman.id/wp-content/uploads/2021/09/simple.jpg" width="200px" height="200px" alt="">
                                <p>Simple</p>
                            </label>
                            <input class="form-check-input" type="radio" name="desain7" id="" value="Kompleks" style="margin-left: 30px;">
                            <label class="form-check-label" for="">
                                <img src="https://oesman.id/wp-content/uploads/2021/09/kompleks.jpg" width="200px" height="200px" alt="">
                                <p>Kompleks</p>
                            </label><br>
                            <hr>

                            <label for="" class="form-label mt-3 fw-bold">Referensi Desain </label>
                            <p style="font-size: 10px; font-weight: bold;"><i>Anda dapat melampirkan lebih dari 1 file dengan format yang berbeda</i></p>
                            <input type="file" id="" multiple name="referensi[]" class="form-control">

                            <p style="font-size: 10px; font-weight: bold;" class="mt-3"><i>Referensi Desain (link)</i></p>
                            <input type="text" id="" name="referensilink" class="form-control">

                            <label for="" class="form-label mt-3 fw-bold">Referensi Isi Konten </label>
                            <p style="font-size: 10px; font-weight: bold;" class=""><i> lampirkan referensi isi konten yang anda inginkan atau bisa lampirkan link </i></p>
                            <input type="text" id="" name="isikonten" class="form-control">

                            <label for="" class="form-label mt-3 fw-bold">Mohon Melampirkan Logo Perusahaan / Brand</label>
                            <p style="font-size: 10px; font-weight: bold;"><i>Anda dapat melampirkan lebih dari 1 file dengan format yang berbeda</i></p>
                            <input type="file" id="" multiple name="logo[]" class="form-control">
                            <p style="font-size: 10px; font-weight: bold;" class="mt-3"><i>Anda juga bisa melampirkan link </i></p>
                            <input type="text" id="" name="linklogo" autocomplete="off" class="form-control">

                            <label for="" class="form-label mt-3 fw-bold">Lampiran Foto Produk</label>
                            <p style="font-size: 10px; font-weight: bold;"><i>Anda dapat melampirkan lebih dari 1 file dengan format yang berbeda</i></p>
                            <input type="file" id="" multiple name="lampiranfoto[]" class="form-control">
                            <p style="font-size: 10px; font-weight: bold;" class="mt-3"><i>Anda juga bisa melampirkan link</i></p>
                            <input type="text" id="" name="linklampiranfoto" autocomplete="off" class="form-control">

                            <label for="" class="form-label mt-3 fw-bold">Katalog Produk</label>
                            <p style="font-size: 10px; font-weight: bold;" class=""><i> upload gambar + beri nama file sesuai nama produk (contoh: kopi gula aren.jpg)</i></p>
                            <input type="file" id="" multiple name="katalog[]" autocomplete="off" class="form-control">
                            <p style="font-size: 10px; font-weight: bold;" class="mt-3"><i>Anda juga bisa melampirkan link</i></p>
                            <input type="text" id="" name="linkkatalog" autocomplete="off" class="form-control">

                            <label for="" class="form-label mt-3 fw-bold">Lampiran Bukti Testimoni</label>
                            <p style="font-size: 10px; font-weight: bold;"><i>Anda dapat melampirkan lebih dari 1 file dengan format yang berbeda</i></p>
                            <input type="file" id="" multiple name="lampiranbukti[]" class="form-control">
                            <p style="font-size: 10px; font-weight: bold;" class="mt-3"><i>Anda juga bisa melampirkan link</i></p>
                            <input type="text" id="" name="linklampiranbukti" autocomplete="off" class="form-control">

                            <label for="" class="form-label mt-3 fw-bold">Lampiran Lainnya</label>
                            <p style="font-size: 10px; font-weight: bold;"><i>Anda dapat melampirkan lebih dari 1 file dengan format yang berbeda</i></p>
                            <input type="file" id="" multiple name="lampiranlainnya[]" class="form-control">
                            <p style="font-size: 10px; font-weight: bold;" class="mt-3"><i>Anda juga bisa melampirkan link </i></p>
                            <input type="text" id="" name="linklampiranlainnya" autocomplete="off" class="form-control">

                            <div class="form-group mb-4 mt-5 text-center">
                                <button type="submit" name="save_radio" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
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