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
    <script src='./scripts/main.js'></script>
    <script src='./scripts/market.js'></script>
    <link rel='stylesheet' type='text/css' media='screen' href='./style/wishList.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./style/sectionBar.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./style/toast.css'>
    <title>GrandGoods</title>
</head>

<body class="d-flex flex-column min-vh-100" style="margin-top: 3.5em;">
    <header>
        
    </header>

    <?php
        $_GET['logged'] = '1';
        include_once('assets/header.php');
    ?>

    <div class="container mt-5 mb-5">
        <div class="row">           
            <div class="col-md">
            <div class="row">
                <div class="col">
                    <legend>Listas de deseo:</legend>
                </div>

                <div class="col text-center">
                    <a type="button" class="btn btn-warning" href="./addWishList.php">Nueva lista de deseos</a>
                </div>
            </div>    
           
            </div>
        </div>

        <div class="row">
            <?php 
                include_once("assets/sectionWishListHorizontal.php");
            ?>
        </div> 

    </div>

    <div id="snackbar">Producto agregado al carrito</div>  

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" 
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Confirmación</h5>
                </div>
                <div class="modal-body">
                  ¿Seguro qué quiéres borrar esta lista de deseos?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" 
                    data-bs-toggle="modal" data-bs-target="#exampleModal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Lista borrada con exito!</h5>
                </div>
                <div class="modal-body">
                    Has borrado una lista de deseos
                </div>
                <div class="modal-footer">
                    <a class="btn btn-success" type="button" data-bs-dismiss="modal">Aceptar</a>
                </div>
            </div>
        </div>
    </div>

    <?php
        include_once('assets/footer.php');
    ?>

</body>
</html>