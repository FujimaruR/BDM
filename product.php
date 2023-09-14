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
      <script src='./scripts/starSystem.js'></script>
      <link rel='stylesheet' type='text/css' media='screen' href='./style/toast.css'>
      <script src='./scripts/toast.js'></script>
      <link rel='stylesheet' type='text/css' media='screen' href='./style/product.css'>
      <link rel='stylesheet' type='text/css' media='screen' href='./style/sectionBar.css'>
    <title>GrandGoods</title>
</head>

<body class="d-flex flex-column min-vh-100" style="margin-top: 3.5em;">
    <?php
        include_once('assets/header.php');
    ?>

    <div class="container mt-5 mb-5 compact">
        <div class="row">

            <div class="col-md">
                <?php
                    include_once('assets/tabGallery.php');
                ?>
            </div>

            <div class="col-md-5 menuContainer" id="menuContainer">
                <h3 class="name">Shiba inu</h3>

                <script>setStars(100, 70, 'menuContainer');</script>

                <br><br>

                <h3 class="price">$ 123</h3>

                <br>

                <h4 class="existence">Categoría: <span class="badge rounded-pill text-bg-warning">Mascotas</span></h4>
    
                <br>

                <h4 class="existence">En existencia: 1</h4>

                <br>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="1" readonly>
                    <button class="btn btn-outline-warning" type="button">-</button>
                    <button class="btn btn-outline-success" type="button">+</button>
                </div>

                <br>

                <?php 
                    $_GET['userType'] = '1';

                    include_once('assets/productSettings.php');
                ?>

                <br>
            </div>

        </div>

        <br>

        <hr>

        <br>

        <div class="row">

            <div class="col-md">
                <h3 class="existence">Descripción</h3>
                <h3 class="price">El shiba inu es una raza muy antigua, aunque pese a su 
                    antigüedad no está clasificada por la FCI dentro del grupo "perros primitivos",
                     sino como "perros spitzs". Sus orígenes surgen en el Asia Meridional, 
                     registrándose los primeros indicios de la llegada de este perro al Japón sobre el año 2000 a. C. 
                     y eran descendientes de perros salvajes del Sur de China.

Como la mayoría de los perros japoneses, fue utilizado en sus orígenes para la caza en las montañas muy accidentadas y 
pobladas del centro del país. También se usaba en bosques donde habitaba el faisán de montaña (el yamadori) y 
más presas de pluma e incluso pequeños mamíferos. Se dice que cazaba también zorros y corzos. 
El hábitat del shiba eran las áreas montañosas de la vertiente del mar del Japón.</h3>
            </div>

            <div class="col-md-5">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h4 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h4 class="existence">Comentarios</h4>
                            </button>
                        </h4>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" 
                        data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <?php
                                $commentID = '1';
                                $commentUserName = 'Kai';
                                $commentScore = '3.5';
                                $commentDescription = 'Se ve medio raro pero igual me gusta.';
                                include('assets/comments.php');
                            ?>

                            <?php
                                $commentID = '2';
                                $commentUserName = 'Fujimaru';
                                $commentScore = '5';
                                $commentDescription = 'Me gustó mucho';
                                include('assets/comments.php');
                            ?>

                            <?php
                                $commentID = '3';
                                $commentUserName = 'Blyyyaadd';
                                $commentScore = '0';
                                $commentDescription = 'Resulte alergica al perro :(';
                                include('assets/comments.php');
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <hr>

        <br>

        <div class="row">
            <div class="col-md">
                <h2>Más productos del vendedor</h2>
                <?php
                    include('assets/sectionBar.php');
                ?>
                <h2>Productos similares</h2>
                <?php
                    include('assets/sectionBar.php');
                ?>
            </div>
        </div>
    </div>

    <div id="snackbar">Producto agregado</div>

    <?php
        include_once('assets/footer.php');
    ?>

</body>
</html>