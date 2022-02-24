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
    <title>BRIEF ORDER FACEBOOK ADS</title>
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
                <a class="nav-link fw-bold" href="welcome.php" style="color: black;">KEMBALI</a>
            </li>
        </ul>
    </nav>

    <!-- content -->
    <div class=" container mt-5">
        <h2 class="text-center">BRIEF ORDER FACEBOOK ADS</h2>
        <div class="rows">
            <div class="col-12 text-justify mt-5">
                <p>Terima Kasih telah mempercayakan kebutuhan digital marketing Anda kepada kami.</p>
                <p>Kami bekerja mengikuti Brief yang Anda isi di pada Form berikut. Bantu kami mengerjakan pesanan Anda dengan lebih terstruktur & tertarget dengan melengkapi form dibawah ini.</p>
                <p>Apabila terdapat pertanyaan / kendala mengenai pengisian formulir ini, dengan senang hati kami akan bantu Anda dengan menghubungi Customer Happiness from Oesman di bawah ini, Terimakasih.</p>
                <p class="text-center "> <a href="https://api.whatsapp.com/send?phone=+6281260011600 " target="_blank"> <button style="padding: 20px; border: none; border-radius: 5px;background-color: green; color: white; box-shadow: 4px 4px 4px silver;"> Customer Happines Oesman</button> </a></p>
            </div>
        </div>
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

                        <form action="code-ads.php" method="POST" enctype="multipart/form-data">

                            <label for="" class="form-label fw-bold">Pilih Jenis Paket*</label>
                            <select name="jenispaket" id="" class="form-control">
                                <!-- <option value="">Pilih Jenis Paket</option> -->
                                <option value="" style="color: silver;">-----pilih-----</option>
                                <option value="Paket Basic">Paket Basic</option>
                                <option value="Paket Reguler">Paket Reguler</option>
                                <option value="Custom">Custom</option>
                            </select>

                            <label for="" class="form-label fw-bold mt-3">Kode Referral</label>
                            <input type="text" id="" name="referral" autocomplete="off" class="form-control">

                            <label for="" class="form-label fw-bold mt-3">Nama*</label>
                            <input type="text" id="" name="nama" autocomplete="off" required class="form-control">

                            <label for="" class="form-label fw-bold mt-3">Email*</label>
                            <p style="font-size: 10px; font-weight: bold;"><i>kami gunakan untuk pengirimian report di akhir service</i></p>
                            <input type="email" id="" name="email" autocomplete="off" required class="form-control">

                            <label for="" class="form-label fw-bold mt-3">Alamat*</label>
                            <input type="text" id="" name="alamat" autocomplete="off" required class="form-control">

                            <label for="" class="form-label fw-bold mt-3">Nomor Telepon*</label>
                            <input type="number" id="" name="nomortelepon" autocomplete="off" required class="form-control">

                            <label for="" class="form-label fw-bold mt-3">Nama Usaha / Produk*</label>
                            <input type="text" id="" name="namausaha" autocomplete="off" required class="form-control">

                            <label for="" class="form-label fw-bold mt-3">Bidang Usaha*</label>
                            <input type="text" id="" name="bidangusaha" autocomplete="off" class="form-control">

                            <label for="" class="form-label fw-bold mt-3">Deskripsi Usaha*</label>
                            <input type="text" id="" name="deskripsiusaha" autocomplete="off" class="form-control">

                            <legend class="col-form-label ml-3 col-form-label pt-0 fw-bold mt-3">Tujuan Iklan</legend>
                            <input class="form-check-input" type="radio" name="tujuaniklan" value="Page Post engagement Ads | meningkatkan like, komen, share di satu postingan">
                            <label class="form-check-label" for="">Page Post engagement Ads | meningkatkan like, komen, share di satu postingan</label><br>
                            <input class="form-check-input" type="radio" name="tujuaniklan" value="Link click Ads | meningkatkan kunjukan ke link / website">
                            <label class="form-check-label" for="">Link click Ads | meningkatkan kunjukan ke link / website</label><br>

                            <label for="" class="form-label fw-bold mt-3">Tanggal Iklan Dimulai</label>
                            <input type="date" id="" name="tanggaliklan" autocomplete="off" class="form-control">

                            <label for="" class="form-label fw-bold mt-3">Total Anggaran Iklan</label>
                            <p style="font-size: 10px; font-weight: bold;"><i>Biarkan Kosong jika memilih Paket basic / Reguler</i></p>
                            <input type="text" id="" name="anggaraniklan" autocomplete="off" class="form-control">

                            <label for="" class="form-label fw-bold mt-3">Target Berdasarkan Lokasi</label>
                            <p style="font-size: 10px; font-weight: bold;"><i>Benua / Negara / Provinsi / Kota / Kecamatan / Kelurahan. Radius mulai 10km dari lokasi. Pisahkan tanda "," disetiap lokasi. Contoh: Australia, DKI Jakarta, Kota Denpasar - 60km, Kecamatan Gambir - 15km, Kelurahan Tambora - 10km</i></p>
                            <input type="text" name="targetlokasi" autocomplete="off" class="form-control">

                            <legend class="col-form-label ml-3 col-form-label pt-0 mt-3 fw-bold">Pengaturan Lokasi Lanjutan</legend>
                            <p style="font-size: 10px; font-weight: bold;"><i>Berdasarkan lokasi yang dipilih</i></p>
                            <input class="form-check-input" type="radio" name="lokasilanjutan" id="" value="Orang yang tinggal (rumah) di lokasi tersebut">
                            <label class="form-check-label" for="">Orang yang tinggal (rumah) di lokasi tersebut</label><br>
                            <input class="form-check-input" type="radio" name="lokasilanjutan" id="" value="Orang yang baru saja (lokasi terkini) di lokasi tersebut">
                            <label class="form-check-label" for="">Orang yang baru saja (lokasi terkini) di lokasi tersebut</label><br>
                            <input class="form-check-input" type="radio" name="lokasilanjutan" id="" value="Orang yang tinggal dan atau baru-baru ini berada di lokasi tersebut">
                            <label class="form-check-label" for="">Orang yang tinggal dan atau baru-baru ini berada di lokasi tersebut</label><br>

                            <label for="" class="form-label fw-bold mt-3">Target Berdasarkan Usia Minimal</label>
                            <select name="usiaminimal" id="" class="form-control">
                                <option value="" style="color: silver;">Pilih</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                                <option value="48">48</option>
                                <option value="49">49</option>
                                <option value="50">50</option>
                                <option value="51">51</option>
                                <option value="52">52</option>
                                <option value="53">53</option>
                                <option value="54">54</option>
                                <option value="55">55</option>
                                <option value="56">56</option>
                                <option value="57">57</option>
                                <option value="58">58</option>
                                <option value="59">59</option>
                                <option value="60">60</option>
                                <option value="61">61</option>
                                <option value="62">62</option>
                                <option value="63">63</option>
                                <option value="64">64</option>
                                <option value="65+">65+</option>
                            </select>

                            <label for="" class="form-label fw-bold mt-3">Target Berdasarkan Usia Maksimal</label>
                            <select name="usiamaksimal" id="" class="form-control">
                                <option value="" style="color: silver;">Pilih</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                                <option value="48">48</option>
                                <option value="49">49</option>
                                <option value="50">50</option>
                                <option value="51">51</option>
                                <option value="52">52</option>
                                <option value="53">53</option>
                                <option value="54">54</option>
                                <option value="55">55</option>
                                <option value="56">56</option>
                                <option value="57">57</option>
                                <option value="58">58</option>
                                <option value="59">59</option>
                                <option value="60">60</option>
                                <option value="61">61</option>
                                <option value="62">62</option>
                                <option value="63">63</option>
                                <option value="64">64</option>
                                <option value="65+">65+</option>
                            </select>


                            <legend class="col-form-label ml-3 col-form-label pt-0 mt-3 fw-bold">Target Berdasarkann Gender</legend>
                            <input class="form-check-input" type="radio" name="targetgender" id="" value="Pria">
                            <label class="form-check-label" for="">Pria</label><br>
                            <input class="form-check-input" type="radio" name="targetgender" id="" value="Wanita">
                            <label class="form-check-label" for="">Wanita</label><br>


                            <label for="" class="form-label fw-bold mt-3">Orang yang Cocok Dengan Demografi, Minat, Perilaku <i>(berlaku di target usia 21+)</i></label>
                            <p style="font-size: 10px; font-weight: bold;"><i>Tuliskan sasaran orang yang menerima iklan Anda. Contoh: Pengusaha, Pelajar, Minat belanja online, Makanan & minuman, Pengguna smartphone</i></p>
                            <input type="text" name="orangcocok" autocomplete="off" class="form-control">


                            <legend class="col-form-label ml-3 col-form-label pt-0 mt-3 fw-bold">Orang yang Berbahasa</legend>
                            <input class="form-check-input" type="checkbox" name="berbahasa[]" id="" value="Semua Bahasa">
                            <label class="form-check-label" for="">Semua Bahasa</label><br>
                            <input class="form-check-input" type="checkbox" name="berbahasa[]" id="" value="Bahasa Indonesia">
                            <label class="form-check-label" for="">Bahasa Indonesia</label><br>
                            <input class="form-check-input" type="checkbox" name="berbahasa[]" id="" value="Bahasa Inggris">
                            <label class="form-check-label" for="">Bahasa Inggris</label><br>
                            <label class="form-check-label" for="">Yang Lain : <input type="text" name="berbahasa[]" autocomplete="off"></label><br>



                            <legend class="col-form-label ml-3 col-form-label pt-0 mt-3 fw-bold">Pilihan Platform Iklan Ditayangkan</legend>
                            <input class="form-check-input" type="checkbox" name="ditayangkan[]" id="" value="Beranda Facebook">
                            <label class="form-check-label" for="">Beranda Facebook</label><br>
                            <input class="form-check-input" type="checkbox" name="ditayangkan[]" id="" value="Beranda Instagram">
                            <label class="form-check-label" for="">Beranda Instagram</label><br>
                            <input class="form-check-input" type="checkbox" name="ditayangkan[]" id="" value="Stories Facebook">
                            <label class="form-check-label" for="">Stories Facebook</label><br>
                            <input class="form-check-input" type="checkbox" name="ditayangkan[]" id="" value="Stories Instagram">
                            <label class="form-check-label" for="">Stories Instagram</label><br>
                            <input class="form-check-input" type="checkbox" name="ditayangkan[]" id="" value="Jelajah Instagram">
                            <label class="form-check-label" for="">Jelajah Instagram</label><br>
                            <input class="form-check-input" type="checkbox" name="ditayangkan[]" id="" value="Reels Instagram">
                            <label class="form-check-label" for="">Reels Instagram <i>(untuk video maksimal durasi 30 detik)</i></label><br>
                            <input class="form-check-input" type="checkbox" name="ditayangkan[]" id="" value="Marketplace Facebook">
                            <label class="form-check-label" for="">Marketplace Facebook</label><br>
                            <input class="form-check-input" type="checkbox" name="ditayangkan[]" id="" value="Beranda Video Facebook">
                            <label class="form-check-label" for="">Beranda Video Facebook</label><br>
                            <input class="form-check-input" type="checkbox" name="ditayangkan[]" id="" value="Beranda Group Facebook">
                            <label class="form-check-label" for="">Beranda Group Facebook</label><br>
                            <input class="form-check-input" type="checkbox" name="ditayangkan[]" id="" value="Video In-Stream Facebook">
                            <label class="form-check-label" for="">Video In-Stream Facebook</label><br>
                            <input class="form-check-input" type="checkbox" name="ditayangkan[]" id="" value="Hasil Pencarian Facebook">
                            <label class="form-check-label" for="">Hasil Pencarian Facebook</label><br>
                            <input class="form-check-input" type="checkbox" name="ditayangkan[]" id="" value="Artikel Instan Facebook">
                            <label class="form-check-label" for="">Artikel Instan Facebook</label><br>
                            <input class="form-check-input" type="checkbox" name="ditayangkan[]" id="" value="Kotak Masuk Messenger">
                            <label class="form-check-label" for="">Kotak Masuk Messenger</label><br>
                            <input class="form-check-input" type="checkbox" name="ditayangkan[]" id="" value="Pesan Bersponsor Mesengger ">
                            <label class="form-check-label" for="">Pesan Bersponsor Messenger</label><br>


                            <label for="" class="form-label mt-3 fw-bold">Upload File Konten Gambar / Video</label>
                            <p style="font-size: 10px; font-weight: bold;"><i>Konten dengan rasio standart 1:1 atau 16:9 // Khusus Platform Stories & Reels, Lampirkan juga konten dengan rasio vertikal (9:16)</i></p>
                            <input type="file" id="" multiple name="uploadgambar[]" class="form-control">


                            <label for="" class="form-label fw-bold mt-3">Atau Lampirkan Link Konten Iklan</label>
                            <input type="text" name="linkiklan" autocomplete="off" class="form-control">

                            <label for="" class="form-label fw-bold mt-3">Judul Iklan*</label>
                            <input type="text" name="juduliklan" autocomplete="off" required class="form-control">

                            <label for="" class="form-label fw-bold mt-3">Caption / Body Text Iklan*</label>
                            <input type="text" name="captioniklan" autocomplete="off" required class="form-control">


                            <label for="" class="form-label fw-bold mt-3">Pilihan Tombol Ajakan*</label>
                            <select name="tombol" id="" class="form-control">
                                <option value="" style="color: silver;">Pilih</option>
                                <option value="Daftar Sekarang">Daftar Sekarang</option>
                                <option value="Pesan Sekarang">Pesan Sekarang</option>
                                <option value="Hubungi Kami">Hubungi Kami</option>
                                <option value="Unduh">Unduh</option>
                                <option value="Ambil Promo">Ambil Promo</option>
                                <option value="Penawaran">Penawaran</option>
                                <option value="Dapatkan Waktu Pertunjukkan">Dapatkan Waktu Pertunjukkan</option>
                                <option value="Selengkapnya">Selengkapnya</option>
                                <option value="Dengarkan Sekarang">Dengarkan Sekarang</option>
                                <option value="Dapatkan Akses">Dapatkan Akses</option>
                                <option value="Minta Waktu">Minta Waktu</option>
                                <option value="Lihat Menu">Lihat Menu</option>
                                <option value="Beli Sekarang">Beli Sekarang</option>
                                <option value="Daftar">Daftar</option>
                                <option value="Berlangganan">Berlangganan</option>
                                <option value="Tonton Lainnya">Tonton Lainnya</option>
                                <option value="Kirim Pesan Whatsapp">Kirim Pesan Whatsapp</option>
                                <option value="Tanpa Tombol">Tanpa Tombol</option>
                            </select>

                            <label for="" class="form-label fw-bold mt-3">Link Pada Tombol Ajakan</label>
                            <input type="text" name="linktombol" autocomplete="off" class="form-control">



                            <div class="form-group mb-4 mt-5 text-center">
                                <button type="submit" name="save_ads" class="btn btn-primary">Submit</button>
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