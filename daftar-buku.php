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
    <title><?= APP_NAME ?> - <?= $_POST['search'] ?></title>
</head>

<body>
    <?php include 'component/header.php' ?>

    <div class="container pt-5">
        <div class="row">
            <?php if ($_POST['search'] == "buku pelajaran") {?>
            <div class="col-4 pb-2">
                <div class="card shadow" style="width: 18rem;">
                    <img src="https://image.freepik.com/free-photo/interior-poster-mock-up-with-plant-pot-flower-room-with-white-wall_41470-1513.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Buku Pelajaran.</p>
                    </div>
                </div>
            </div>
            <div class="col-4 pb-2">
                <div class="card shadow" style="width: 18rem;">
                    <img src="https://image.freepik.com/free-photo/interior-poster-mock-up-with-plant-pot-flower-room-with-white-wall_41470-1513.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Buku Pelajaran.</p>
                    </div>
                </div>
            </div>
            <div class="col-4 pb-2">
                <div class="card shadow" style="width: 18rem;">
                    <img src="https://image.freepik.com/free-photo/interior-poster-mock-up-with-plant-pot-flower-room-with-white-wall_41470-1513.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Buku Pelajaran.</p>
                    </div>
                </div>
            </div>
            <?php } elseif ($_POST['search'] == "buku baca") {?>
            <div class="col-4 pb-2">
                <!-- Ini Kode Untuk Membuat Card -->
                <div class="card shadow" style="width: 18rem;">
                    <img src="https://image.freepik.com/free-photo/interior-poster-mock-up-with-plant-pot-flower-room-with-white-wall_41470-1513.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Buku Baca.</p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>