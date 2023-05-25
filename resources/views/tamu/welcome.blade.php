<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&display=swap" rel="stylesheet">
  <link rel="icon" href="{{url('assets/logo_sanggartari.png')}}" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('template/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('template/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('template/plugins/summernote/summernote-bs4.min.css')}}">
  <title>Welcome To Sanggar Tari Topeng Mimi Rasinah</title>
  <style>
    .navbrandtxt{
      font-family: '?????';
      font-size: 25px;
    }
  </style>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{asset('assets/logo_sanggartari.png')}}" alt="AdminLTELogo" height="60" width="60"> <h6 style="font-family: 'Times New Roman', Times, serif">Sanggar Tari Topeng Mimi Rasinah<h6>
    </div>
  <!-- Navbar -->
  <header>
    <nav class="navbar navbar-expand-lg bg-danger fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{url('assets/logo_sanggartari.png')}}" alt="Logo"  height="55" class="d-inline-block align-text-top">
        </a>
        <h5 class="navbrandtxt">
          Sanggar Tari Topeng Mimi Rasinah
        </h5>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav ms-auto" style="font-family: 'Times New Roman', Times, serif; font-size: 20px ;" >
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Galeri</a>
              <ul class="dropdown-menu ">
                <li>
                  <a href="{{route('galerilatihan')}}" class="dropdown-item">Latihan Sanggar Tari</a>
                </li>
                <li>
                  <a href="{{route('galeriacarabesar')}}" class="dropdown-item">Acara Besar</a>
                </li>
                <li>
                  <a href="{{route('assetsanggar')}}" class="dropdown-item">Asset Sanggar</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('jadwalacara')}}">Jadwal Acara</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('showarticle')}}">Article</a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="{{route('showlogin')}}">Masuk</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!--Get Started-->
  <div>
    <div id="carouselExampleCaptions" class="carousel slide"data-bs-ride="true" >
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2500" style="animation-delay: 2s">
          <img src="{{url('assets/dashboard_.png')}}" class="d-block w-100" alt="...">
          <div class="position-absolute top-50 start-50 translate-middle">
            <h2 style="text-align: center; color: white; font-size: 48px; font-family: 'Times New Roman', Times, serif;" >Selamat Datang di Website Sanggar Tari Topeng Mimi Rasinah</h2>
            <center><a href="#" class="btn btn-primary" style="font-size: 25px; font-family: 'Times New Roman', Times, serif;">Get Started</a></center>
          </div>
        </div>
        <div class="carousel-item active" data-bs-interval="2500">
          <img src="{{url('assets/dashboard_2.jpg')}}" class="d-block w-100" alt="..."data-mdb-animation="slide-in-right">
          <div class="position-absolute top-50 start-50 translate-middle">
            <h2 style="text-align: center; color: white; font-size: 48px; font-family: 'Times New Roman', Times, serif;" >Selamat Datang di Website Sanggar Tari Topeng Mimi Rasinah</h2>
            <center><a href="#" class="btn btn-primary" style="font-size: 25px; font-family: 'Times New Roman', Times, serif;">Get Started</a></center>
          </div>
        </div>  
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- CONTENT GET STARTERD -->
  <div class="container-fluid">
    <div class="card mb-3 mt-2">
      <div class="card-body">
        <div class="row">
          <div class="col">
            <img src="{{url('assets/mimi-rasinah-1.jpg')}}">
          </div>
          <div class="col col-lg-9">
            <H1 style="font-family: 'Times New Roman', Times, serif; align: center; font-size:35px">Tentang Sanggar Tari Topeng Mimi Rasinah</H1> <br>
            <p style="font-family: 'Times New Roman', Times, serif; align:justify; font-size:20px">Mimi Rasinah merupakan tokoh seniman tari topeng yang berasal dari Cirebon. Aktif dalam mempertahankan eksistensi kebudayaan Tari Topeng, Mimi Rasinah berhasil mendirikan sebuah sanggar tari yang hingga kini namanya cukup terkenal baik skala lokal hingga diakui oleh seluruh mancanegara.</p>
          </div>
      </div>
    </div>
    </div>
    <div class="container-fluid">
      <div class="card mb-3 mt-2">
        <div class="card-header bg-primary"><h4 class="text-center" style="font-family: 'Times New Roman', Times, serif;">JADWAL ACARA SANGGAR TARI MIMI RASINAH</h4></div>
        <div class="card-body">
          <table  class="table table-hover table-bordered" style="font-family: 'Times New Roman', Times, serif;">
            <thead class="text-center">
              <th scope="col">Tanggal</th>
              <th scope="col">Nama Kegiatan</th>
              <th scope="col">Tempat</th>
            </thead>
            <tbody>
              <tr>
                <td>15 Agustus 2023</td>
                <td style="font-size: 18px">Pertunjukan Seni Indonesia - Hut Merdeka 76</td>
                <td><center><a href="#" class="btn btn-info" >Gedung Kesenian Indramayu</a></center></td>
              </tr>
              <tr>
                <td class="col col-lg-1">15 Agustus 2023</td>
                <td style="font-size: 18px">Pertunjukan Seni Indonesia - Hut Merdeka 76</td>
                <td><center><a href="#" class="btn btn-info" >Gedung Kesenian Indramayu</a> </center></td>
              </tr>
              <tr>
                <td>15 Agustus 2023</td>
                <td style="font-size: 18px">Pertunjukan Seni Indonesia - Hut Merdeka 76</td>
                <td><center><a href="#" class="btn btn-info" >Gedung Kesenian Indramayu</a> </center></td>
              </tr>
            </tbody>
          </table>
        </div>
        
      </div>
    </div>
  </div>

  <div class="container-fluid mt-3 mb-3">
    <div class="row">
      <div class="col">
        <div class="card mb-3">
          <img src="assets/dashboard-gambar.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <a href="" style="text-decoration:none; color:black"><h4 class="card-title">Festival Hari Jadi ke-496 Indramayu, Sanggar Tari Mimi Rasinah Ikut Serta Memeriahkan Acara</h4></a>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <img src="assets/dashboard-gambar.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <a href="" style="text-decoration:none; color:black"><h4 class="card-title">Festival Hari Jadi ke-496 Indramayu, Sanggar Tari Mimi Rasinah Ikut Serta Memeriahkan Acara</h4></a>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <img src="assets/dashboard-gambar.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <a href="" style="text-decoration:none; color:black"><h4 class="card-title">Festival Hari Jadi ke-496 Indramayu, Sanggar Tari Mimi Rasinah Ikut Serta Memeriahkan Acara</h4></a>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  
<!-- Footer -->
  <footer class="bg-secondary text-white text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="navbrandtxt">Sanggar Tari Topeng Mimi Rasinah</h5>
          <img src="{{url('assets/logo_sanggartari.png')}}" alt="" class="rounded" style="height: 100px;">
          <p  class="navbrandtxt" style="font-size: 16px;">
            JLN PANDAWA II No 1 RT 08/ RW 04 NO 1, Pekandangan, Kec. Indramayu, Kabupaten Indramayu, Jawa Barat 45216
          </p>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Contact Us</h5>
  
          <ul class="list-unstyled mb-0">
            <li>
              <a href="https://wa.me/6281546725053" class="text-white">WhatsApp</a>
            </li>
            <li>
              <a href="https://instagram.com/aerlirasinah?igshid=NTc4MTIwNjQ2YQ==" class="text-white">Instagram</a>
            </li>
            <li>
              <a href="https://web.facebook.com/aerlirasinah.topeng" class="text-white">Facebook</a>
            </li>
            <li>
              <a href="#!" class="text-white">Gmail</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-0">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="https://www.youtube.com/@AerliRasinah" class="text-white">Youtube</a>
            </li>
            <li>
              <a href="https://instagram.com/aerlirasinah?igshid=NTc4MTIwNjQ2YQ==" class="text-white">Instagram</a>
            </li>
            <li>
              <a href="https://web.facebook.com/aerlirasinah.topeng" class="text-white">Facebook</a>
            </li>
            <li>
              <a href="#!" class="text-white">Gmail</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-white" href="#">Proyek 1 : Kelompok 3 D4RPL 2B</a>
    </div>
    <!-- Copyright -->
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  <!-- jQuery -->
<script src="{{asset('template/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('template/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('template/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('template/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('template/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('template/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('template/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('template/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('template/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('template/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('template/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('template/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('template/dist/js/pages/dashboard.js')}}"></script>
</body>
</html>