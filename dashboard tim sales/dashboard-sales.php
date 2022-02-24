<?php require_once "controllerUserData-sales.php"; ?>
<?php 
$email = $_SESSION['email'] OR $_SESSION['name'];
if($email == false){
  header('Location: timsales.php');
}
?>
<!doctype html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard-Sales OESMAN</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.11.1/css/all.css">
  <!--   <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" id="main-stylesheet" data-version="1.0.0" href="https://survei.um.ac.id/css/shards-dashboards.1.0.0.min.css">
  <link rel="stylesheet" href="https://survei.um.ac.id/css/extras.1.0.0.min.css">
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css">

  <meta name="viewport" content="width=device-width,minimum-scale=1">
  <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.sidr/2.2.1/stylesheets/jquery.sidr.dark.min.css">

  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


  
  <link href="https://survei.um.ac.id/css/custom.css" rel="stylesheet" />
  <!-- Animation -->
  <link href="https://survei.um.ac.id/aos/dist/aos.css" rel="stylesheet">
  <style>
    .menu {
      display: inline-block;
      cursor: pointer;
    }

    .bar1, .bar2, .bar3 {
      width: 35px;
      height: 5px;
      background-color: #007bff;
      margin: 6px 15px;
      transition: 0.4s;
    }

    .change .bar1 {
      -webkit-transform: rotate(-45deg) translate(-9px, 6px);
      transform: rotate(-45deg) translate(-9px, 6px);
    }

    .change .bar2 {opacity: 0;}

    .change .bar3 {
      -webkit-transform: rotate(45deg) translate(-8px, -8px);
      transform: rotate(45deg) translate(-8px, -8px);
    }

    #menubar{
      position: absolute;
    }
    #particles-js{
     height:100%;
     position: fixed;
     top:0px;
     left:0px;
     right:0px;
     bottom: 0px;
     z-index: -1;

   }

   .center{
    margin: auto;
  }
  .alert{
    opacity: 0.5;
  }        

</style>
  <style type="text/css">
    a.report {
      border-radius: 0px !important;
    }
  </style>
  </head>
<body>

  <div class="main-content-container container-fluid px-4">
    <div id="particles-js"></div>
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4 mb-5">
      <div class="col-12 text-center text-sm-center mb-0">
        <img src="https://oesman.id/wp-content/uploads/2020/08/OESMAN_logo-4.png" width="250px;" height="80px;">
        <br>

        <h3 class="page-title mt-4">ANDA LOGIN SEBAGAI : <?php echo $_SESSION['name']; ?></h3>
        <h5 class="page-title mt-2">KODE REFERRAL ANDA : <?php echo $_SESSION['referral']; ?></h5>
        
    </div>
  </div>           
      <br>
<div class="row">

     <!-- data satu -->
  <div class="col-lg col-md-6 col-sm-6 mb-4" data-aos="flip-left" data-aos-duration="500" data-aos-easing="ease-in-out">
    <div class="stats-small stats-small--1 card card-small">
        <a class="card-body p-0 d-flex" href="edit-profil-sales.php?id=<?php echo $_SESSION['id'];?>" data-toggle="" data-target="">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center">
              <i class="fas fa-user" style="font-size:48px; color: #570000;"></i>
              <span class="stats-small__label text-uppercase">EDIT PROFIL</span>
            </div>
          </div>
        </a>
      </div>
    </div>

    <!-- data dua  -->

    <div class="col-lg col-md-6 col-sm-6 mb-4" data-aos="flip-left" data-aos-delay="200" data-aos-duration="500"
    data-aos-easing="ease-in-out">
      <div class="stats-small stats-small--1 card card-small">
        <a class="card-body p-0 d-flex" href="http://brief.oesman.id/welcome-sales.php">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center">
              <i class="fas fa-database" style="font-size:48px; color: #570000;"></i>
              <span class="stats-small__label text-uppercase">BRIEF ORDER</span>
            </div>
          </div>
        </a>
      </div>
    </div>

        <!-- data dua  -->

    <div class="col-lg col-md-6 col-sm-6 mb-4" data-aos="flip-left" data-aos-delay="200" data-aos-duration="500"
    data-aos-easing="ease-in-out">
      <div class="stats-small stats-small--1 card card-small">
        <a class="card-body p-0 d-flex" href="klien-order-sales.php">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center">
              <i class="fas fa-handshake" style="font-size:48px; color: #570000;"></i>
              <span class="stats-small__label text-uppercase">DATA PENJUALAN</span>
            </div>
          </div>
        </a>
      </div>
    </div>

</div>

<div class="col text-right view-report">
  <h5><a href="logout-user-sales.php"> <i class="fas fa-sign-out-alt" style="font-weight: 48px;"></i> Logout </a></h5>
</div>


  


  <!-- End Small Stats Blocks -->
  
      <div class="page-header row no-gutters py-4">
        <div class="col-12 text-center text-sm-center mt-4 mb-0">
          <h6 class="fw-bold">Copyright @OESMAN2021</h6>
        </div>
      </div>
    </div>
    <!-- Animation -->
    
    <!--  -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    
    
    
    
    
    <script src="//cdn.jsdelivr.net/jquery/2.2.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/jquery.sidr/2.2.1/jquery.sidr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="https://survei.um.ac.id/js/textareacounter.js"></script>
    <!-- Particlejs -->
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <!-- Vanta js start -->
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Vanta js end -->
  </body>
  <script>
  // VANTA.CLOUDS({
    // el: "#bgvanta",
    // skyColor: 0x68adc8,
    // cloudColor: 0xcbd3de,
    // sunColor: 0xff8d00,
    // sunGlareColor: 0xf03c00,
    // sunlightColor: 0xf57e08
  // })
  // VANTA.BIRDS({
  //   el: "#particles-js",
  //   backgroundColor: 0xe2e9f2,
  //   color1: 0x6068f2,
  //   color2: 0x4bed7b,
  //   colorMode: "lerpGradient",
  //   birdSize: 1.90,
  //   // wingSpan: 28.00,
  //   speedLimit: 7.00,
  //   // separation: 54.00,
  //   birdSize: 0.90,
  //   quantity: 3.00,
  //   backgroundAlpha: 0.94
  // })

  AOS.init();
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("select[name='tahun']").change(function(){
      var tahun = $(this).val();
      window.location.href = "https://survei.um.ac.id/ubah-tahun/"+tahun;
    });
  });
</script>

<script>
  function myFunction(x) {
    x.classList.toggle("change");
  }
</script>

<script>
  $(document).ready(function() {
    $('#simple-menu').sidr();
  });
</script>



</body>

</html>