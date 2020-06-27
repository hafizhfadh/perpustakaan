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
    <link rel="stylesheet" href="css/style.css">
    <title><?= APP_NAME ?></title>
</head>

<body>
<<<<<<< HEAD
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom shadow">
        <a class="navbar-brand" href="#">
            <img src="./img/logo1.png" width="50" height="50">
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

    <div class="section bg-warning destroy-5">
        <div class="container my-1">
            <div class="font-weight-bolder text-center">WELCOME</div>
        </div>
=======
<?php include 'component/header.php' ?>

    <div class="section bg-warning destroy-5">
        <div class="container my-1">
            <div class="font-weight-bolder text-center">WELCOME</div>
        </div>
>>>>>>> 060ea38c2252677bdbad95174ef3fee069facbf9
    </div>

    <div class="section">
        <div class="jumbotron jumbotron-fluid bg-dark">
            <div class="jumbotron-background">
                <img src="https://source.unsplash.com/1600x900/?books,library" class="blur">
            </div>
            <div class="container text-white">
                <h1 class="display-4"><?= APP_NAME ?></h1>
                <p class="lead"><?= APP_DESCRIPTION ?></p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.jumbotron -->
    </div>

    <div class="section">
        <div class="jumbotron jumbotron-fluid bg-dark">
            <div class="jumbotron-background">
                <img src="https://source.unsplash.com/1600x900/?books,library" class="blur">
            </div>
            <div class="container text-white">
                <h1 class="display-4"><?= APP_NAME ?></h1>
                <p class="lead"><?= APP_DESCRIPTION ?></p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.jumbotron -->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
</body>

</html>