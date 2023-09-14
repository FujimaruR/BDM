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
    <link rel='stylesheet' type='text/css' media='screen' href='./style/sectionBarVariant.css'>
    <script src='./scripts/addCategory.js'></script>
    <link rel='stylesheet' type='text/css' media='screen' href='./style/toast.css'>
    <link rel="shortcut icon" href="http://localhost/BDM/resources/kirby.png">
    <script src='./scripts/toast.js'></script>
    <title>GrandGoods</title>
</head>

<body class="d-flex flex-column min-vh-100" style="margin-top: 3.5em;">
    <?php
        $_GET['logged'] = '1';
        include_once('assets/header.php');
    ?>

    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="#" onsubmit="clearForm();" id="myForm">
                    <h3 style="font-weight: lighter;">Dar de alta una lista de deseos</h3>

                    <div class="row">
                        <div class="col">
                            <div class="col-md form-group">
                                <label class="form-label">Nombre de la lista</label>
                                <input class="form-control" id="formCategoryName" 
                                placeholder="Escribe el nombre del producto..." required>
                            </div>
                        </div>

                        <div class="col">
                            <div class="col-md form-group">
                                <label class="form-label">Foto de la lista</label>
                                <input class="form-control" type="file" id="formFilePhoto">
                            </div>
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col form-group">
                            <label class="form-label">Descripción de la lista</label>
                            <textarea class="form-control" id="formCategoryDescription"
                             placeholder="Escribe la descripción del producto..." rows="1" required></textarea>
                        </div>

                        <div class="col-md form-group">
                            <label class="form-label">Tipo de lista</label>
                            <select class="form-select" id="formGender" required>
                                <option selected value=""></option>
                                <option value="1">Privada</option>
                                <option value="2">Pública</option>
                            </select>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-outline-warning" onclick="validateInfo();">Agregar</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <div id="snackbar">Lista agregada</div>

    </div>

    <?php
        include_once('assets/footer.php');
    ?>

</body>
</html>