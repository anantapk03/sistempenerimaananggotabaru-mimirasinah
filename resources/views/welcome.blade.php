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
  <title>Welcome To Sanggar Tari Topeng Mimi Rasinah</title>
  <style>
    .navbrandtxt{
      font-family: '?????';
      font-size: 25px;
    }
  </style>
</head>
<body>
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
                  <a href="#" class="dropdown-item">Latihan Sanggar Tari</a>
                </li>
                <li>
                  <a href="#" class="dropdown-item">Acara Besar</a>
                </li>
                <li>
                  <a href="#" class="dropdown-item">Asset Sanggar</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Jadwal Acara</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Article</a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="#">Masuk</a>
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
            <h2 style="text-align: center; color: white; font-size: 48px; font-family: 'Times New Roman', Times, serif;" >Selamat Datang di Website Sanggar Tari Mimi Rasinah</h2>
            <center><a href="#" class="btn btn-primary" style="font-size: 25px; font-family: 'Times New Roman', Times, serif;">Get Started</a></center>
          </div>
        </div>
        <div class="carousel-item active" data-bs-interval="2500">
          <img src="{{url('assets/dashboard_2.jpg')}}" class="d-block w-100" alt="..."data-mdb-animation="slide-in-right">
          <div class="position-absolute top-50 start-50 translate-middle">
            <h2 style="text-align: center; color: white; font-size: 48px; font-family: 'Times New Roman', Times, serif;" >Selamat Datang di Website Sanggar Tari Mimi Rasinah</h2>
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
            <img src="{{url('assets/mimi-rasinah-1.jpg')}}" class="strat-50">
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

  
<!-- Footer -->
  <footer class="bg-secondary text-white text-center text-lg-start" class="top-0">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="navbrandtxt">Sanggar Tari Topeng Mimi Rasinah</h5>
          <img src="{{url('assets/logo_sanggartari.png')}}" alt="" class="rounded" style="height: 100px;">
          <p  class="navbrandtxt" style="font-size: 16px;">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
            voluptatem veniam, est atque cumque eum delectus sint!
          </p>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>
  
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-0">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
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
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>

  

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>