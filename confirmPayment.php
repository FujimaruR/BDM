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
      <link rel='stylesheet' type='text/css' media='screen' href='./style/main.css'>
      <link rel="shortcut icon" href="http://localhost/BDM/resources/kirby.png">
      <script src='./scripts/confirmPayment.js'></script>
    <title>GrandGoods</title>
</head>

<body class="d-flex flex-column min-vh-100" style="margin-top: 3.5em;">
    <?php
        include_once('assets/header.php');
    ?>

    <div class="container mt-5 mb-5">
        <legend>Confirmar compra</legend>

        <div class="row">
            <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h3>Selecciona tu método de pago</h3>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDebitCard" checked>
                        <label class="form-check-label" for="flexRadioDebitCard">
                            <h4 style="font-weight: lighter;">Tarjeta de débito</h4>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioPaypal">
                        <label class="form-check-label" for="flexRadioPaypal">
                            <h4 style="font-weight: lighter;">Paypal</h4>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioOxxo">
                        <label class="form-check-label" for="flexRadioOxxo">
                            <h4 style="font-weight: lighter;">Oxxo</h4>
                        </label>
                    </div>

                  </div>
                </div>              
            </div>

            <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h3>Confirmar compra</h3>

                    <div class="row">
                        <div class="col">
                            <h4 style="font-weight: lighter;">Subtotal</h4>    
                        </div>
                        <div class="col">
                            <h4 style="font-weight: lighter;">$ 123.00</h4>    
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h3 style="font-weight: lighter;">Total</h3>    
                        </div>
                        <div class="col">
                            <h3 style="font-weight: lighter;">$ 123.00</h3>    
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <a class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Aceptar</a>
                    </div>
                    
                  </div>
                </div>
            </div>
            
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" 
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Confirmación de compra</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Aceptas hacer la compra?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <a type="button" class="btn btn-primary" data-bs-dismiss="modal" 
                        data-bs-toggle="modal" data-bs-target="#exampleModal">Aceptar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¡Has realizado una compra!</h5>
                </div>
                <div class="modal-body">
                    Gracias por comprar
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