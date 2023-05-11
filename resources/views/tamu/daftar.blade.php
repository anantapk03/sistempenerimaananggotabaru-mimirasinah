<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{url('assets/logo_sanggartari.png')}}" type="image/x-icon">
    <style>
      .navbrandtxt{
        font-family: '?????';
        font-size: 25px;
      }
    </style>
    <title>Daftar Sebagai Anggota</title>
</head>
<body>
  <!--Header (NAVBAR)-->
  <header>
    <nav class="navbar navbar-expand-lg bg-danger fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">
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
              <a class="nav-link" href="jadwalacarasanggar">Jadwal Acara</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Article</a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="login">Masuk</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br>
  </header>
  <!--Content-->
  <div class="container-fluid mt-5">
    <div class="row mb-3">
      <div class="col mt-2">
        <img src="{{url('assets/daftar_2.jpg')}}" alt="" class="img img-fluid">
      </div>
      <div class="col">
        <div class="card">
          <div class="card-header">
            <center><h4 style="font-family: 'Times New Roman', Times, serif"> DAFTAR SEBAGAI ANGGOTA</h4></center>
          </div>
          <div class="card-body">
            <form action="#" method="POST">
              
                <label>Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Lengkap Anda">
                <label for="inpuImg">Masukan foto 4X6</label>
                <input type="file" name="" id="inputImg" class="form-control">
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Alamat Email anda">
              <label>Nomor Whatsapp</label>
              <input type="text" name="whatsapp" id="no_wa" class="form-control" placeholder="Masukan Nomor Whatsapp Anda" onkeypress="return hanyaAngka(event)">
              <label>Alamat</label>
              <textarea type="text" name="whatsapp" id="no_wa" class="form-control" placeholder="Masukan Alamat Lengkap Anda"> </textarea>
              <label for="inputPw">Kata Sandi</label>
              <input type="text" name="pass" id="InputPW" class="form-control">
              <br><center><button type="submit" class="btn btn-primary w-25" >Daftar</button></center>
            </form>
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
  <script>
    function hanyaAngka(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }
    </script>
</body>
</html>