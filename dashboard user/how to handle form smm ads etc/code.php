
<?php
session_start();
$con = mysqli_connect("localhost", "db_user", "db_pass", "db_name");

if (isset($_POST['save_radio'])) {
   $nama = $_POST['name'];
   $email = $_POST['email'];
   $alamat = $_POST['alamat'];
   $nomortelepon = $_POST['nomortelepon'];
   $namausaha = $_POST['namausaha'];
   $deskripsiusaha = $_POST['deskripsiusaha'];
   $gendere = implode(', ', $_POST['gendere']);
   $usia = $_POST['usia'];

   //startuploading logo
   $logo = array_filter($_FILES['logo']['name']); //Use something similar before processing files.
   // Count the number of uploaded files in array
   $total_count = count($_FILES['logo']['name']);
   // Loop through every file
   for ($i = 0; $i < $total_count; $i++) {
      //The temp file path is obtained
      $tmpFilePath = $_FILES['logo']['tmp_name'][$i];
      //A file path needs to be present
      if ($tmpFilePath != "") {
         //Setup our new file path
         $dirusers = "lampiran-logo/" . $nama;
         mkdir($dirusers);
         $newFilePath = "$dirusers/" . $_FILES['logo']['name'][$i];
         //File is uploaded to temp dir
         if (move_uploaded_file($tmpFilePath, $newFilePath)) {
            //Other code goes here
         }
      }
   }

   $geografis = implode(', ', $_POST['geografis']);
   $demografi = implode(', ', $_POST['demografi']);
   $targetgender = implode(', ', $_POST['targetgender']);
   $jeniskonten = implode(', ', $_POST['jeniskonten']);
   $warna = $_POST['warna'];
   $pantangan = $_POST['pantangan'];
   $promosi = $_POST['promosi'];
   $referensilink = $_POST['referensilink'];
   $isikonten = $_POST['isikonten'];
   $desain1 = $_POST['desain1'];
   $desain2 = $_POST['desain2'];
   $desain3 = $_POST['desain3'];
   $desain4 = $_POST['desain4'];
   $desain5 = $_POST['desain5'];
   $desain6 = $_POST['desain6'];
   $desain7 = $_POST['desain7'];
   $emailsmm = $_POST['emailsmm'];
   $passwordsmm = $_POST['passwordsmm'];
   $linkkatalog = $_POST['linkkatalog'];
   $jenispaket = $_POST['jenispaket'];
   $referral = $_POST['referral'];
   $tanggal = date("Y-m-d H:i:s");
   $linklogo = $_POST['linklogo'];
   $linklampiranfoto = $_POST['linklampiranfoto'];
   $linklampiranbukti = $_POST['linklampiranbukti'];
   $linklampiranlainnya = $_POST['linklampiranlainnya'];


   $query = "INSERT INTO your_table (define your  structure ) VALUES (fill it with values that user has been submitted)";
   $query_run = mysqli_query($con, $query);

   if ($query_run) {
      $_SESSION['status'] = "Inserted Successfully";
      header("Location: konfirmasi-brief.php");
   } else {
      $_SESSION['status'] = "Inserted Successfully";
      header("Location: brief-session.php");
   }
}
?> 