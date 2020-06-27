<!doctype html>
<html lang="en">

<?php include('./config/config.php') ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleaboutus.css">
    <title><?= APP_NAME ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom shadow">
        <a class="navbar-brand" href="#">
            <img src="./img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            <?= APP_NAME ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0 mr-auto" action="https://www.google.com/search?tbm=bks&q=buku+sejarah">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item active">
                    <a class="nav-link" href="/index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about-us.php">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak Kami</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login/Register
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Login</a>
                        <a class="dropdown-item" href="#">Register</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="about-section">
  <h1>About Us</h1>
  <h3>Perpustakaan merupakan jantungnya dunia pendidikan karena berbagai macam 
    informasi bisa kita dapatkan di perpustakaan.</h3>
  <p>Perpustakaan yang terorganisasi secara baik dan sistematis, secara langsung ataupun 
    tidak langsung dapat memberikan kemudahan bagi proses belajar mengajar di sekolah tempat perpustakaan tersebut berada.</p>
</div>

  <h2 style="text-align:center">Our Team</h2>
  <div class="row">
  <div class="col-4 py-2">
    <div class="card shadow" style="width: 18rem; ">
      <img src="img/hafz.jpeg" alt="hafz" style="width:100%">
      <div class="container">
        <h3>Hafidz Fazrurahman</h3>
        <p class="title">Team 1</p>
      </div>
    </div>
  </div>

  <div class="col-4 py-2">
    <div class="card shadow" style="width : 18rem; ">
      <img src="img/yaya.jpeg" alt="yahya" style="width:100%">
      <div class="container">
        <h3>Yahya Aulia Loen</h3>
        <p class="title">Team 2</p>
      </div>
    </div>
  </div>

   <div class="col-4 py-2">
    <div class="card shadow" style="width : 18rem; ">
      <img src="img/yaya.jpeg" alt="Yahya" style="width:100%">
      <div class="container">
        <h3>Samsul</h3>
        <p class="title">Team 2</p>
      </div>
    </div>
  </div>

  <div class="col-4 py-2">
    <div class="card shadow" style="width : 18rem; ">
      <img src="img/yute.jpeg" alt="yute" style="width:100%">
      <div class="container">
        <h2>Yute Indah Trisulin</h2>
        <p class="title">Team 4</p>
      </div>
    </div>
  </div>

  <div class="col-4 py-2">
    <div class="card shadow" style="width : 18rem; ">
      <img src="gbr/sakura.jpg" alt="intan" style="width:100%">
      <div class="container">
        <h2>Intan Yesika Winata</h2>
        <p class="title">Team 5</p>
      </div>
    </div>
  </div>
  
  <div class="col-4 py-2">
    <div class="card shadow" style="width : 18rem; ">
      <img src="img/fika.jpeg" alt="fika" style="width:75%">
      <div class="container">
        <h2>Raffika Aulia Nisa</h2>
        <p class="title">Designer</p>
      </div>
    </div>
  </div>
  </div>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>