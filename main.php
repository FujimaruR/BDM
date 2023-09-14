<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
      src="http://localhost/BDM/dependencies/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"
      href="http://localhost/BDM/dependencies/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="http://localhost/BDM/dependencies/node_modules/bootstrap-icons/font/bootstrap-icons.css">
      <link rel="shortcut icon" href="http://localhost/BDM/resources/kirby.png">
      <link rel='stylesheet' type='text/css' media='screen' href='./style/main.css'>
      <link rel='stylesheet' type='text/css' media='screen' href='./style/sectionBar.css'>
    <title>GrandGoods</title>
</head>

<body class="d-flex flex-column min-vh-100" style="margin-top: 3.5em;">
    <?php
        $_GET['logged'] = '1';
        include_once('assets/header.php');
    ?>

    <div id="carouselExampleDark" class="carousel slide carousel-dark slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"
             aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./resources/carousel01.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./resources/carousel01.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./resources/carousel01.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-5 mb-5">
    
    <h2>Tus últimos productos vistos</h2>
    <?php
        include('assets/sectionBar.php');
    ?>

    <h2>Productos populares</h2>
    <?php
        include('assets/sectionBar.php');
    ?>

    <h2>Más comprados</h2>
    <?php
        include('assets/sectionBar.php');
    ?>

    <h2>Más recomendados</h2>
    <?php
        include('assets/sectionBar.php');
    ?>

    </div>

    <?php
        include_once('assets/footer.php');
    ?>

</body>
</html>