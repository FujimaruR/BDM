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
      <link rel='stylesheet' type='text/css' media='screen' href='./style/logIn.css'>
      <link rel="shortcut icon" href="http://localhost/BDM/resources/kirby.png">
      <script src='./scripts/login.js'></script>
    <title>GrandGoods</title>
</head>

<body class="d-flex flex-column min-vh-100" style="margin-top: 3.5em;">
    <?php
        $_GET['logged'] = '0';
        include_once('assets/header.php');
    ?>

    <div class="container mt-5 mb-5">
        
        <div class="card cardLogin" style="width: 20em;">
            <div class="card-body">
                <legend>Inicia sesión</legend>

                <form method="POST" action="./main.php">
                    <div class="mb-3">
                        <label for="formControlUserName" class="form-label">Usuario</label>
                        <input class="form-control" id="formControlUserName" placeholder="Nombre de usuario...">
                    </div>

                    <div class="mb-3">
                        <label for="formControlPassword" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="formControlPassword" placeholder="Contraseña...">
                    </div>

                    <div class="mb-3">
                        <label for="formControlTypeUser" class="form-label">Tipo de usuario</label>
                        <select class="form-select" aria-label="Default select example" id="formControlTypeUser">
                            <option selected></option>
                            <option value="1">Comprador</option>
                            <option value="2">Vendedor</option>
                            <option value="3">Administrador</option>
                        </select>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckRememberUser">
                        <label class="form-check-label" for="flexCheckRememberUser">
                            Recordar usuario
                        </label>
                    </div>

                    <div class="d-grid gap-2">
                     <button type="submit" class="btn btn-secondary" 
                     onclick="validateInfo();">Iniciar sesión</button>
                     </div>

                </form>
                
                <br>
                <a href="./signUp.php" class="link-secondary">¿No tienes cuenta? Crea un usuario</a>
            </div>
        </div>

    </div>

    <?php
        include_once('assets/footer.php');
    ?>
</body>
</html>