<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
      src="http://localhost/BDM/dependencies/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"
      href="http://localhost/BDM/dependencies/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
      <link rel='stylesheet' type='text/css' media='screen' href='./style/signUp.css'>
      <script src='scripts/signUp.js'></script>
    <title>Sign Up</title>
</head>

<body class="d-flex flex-column min-vh-100" style="margin-top: 3.5em;">
    <?php
        include_once('assets/header.php');
    ?>
   
    <div class="container mt-5 mb-5">
        <form method="POST" action="./main.php">
            <legend>Información personal</legend>
            <div class="row">
                <div class="col-md form-group">
                    <label class="form-label">Nombre</label>
                    <input class="form-control" id="formName" placeholder="Escribe tu nombre(s)..." required>
                </div>

                <div class="col-md form-group">
                    <label class="form-label">Apellido</label>
                    <input class="form-control" id="formLastName" placeholder="Escribe tu apellido(s)..." required>
                </div>
            </div>

            <div class="row">
                <div class="col-md form-group">
                    <label class="form-label">Fecha de nacimiento</label>
                    <input class="form-control" type="date" id="formBirthDate" name="trip-start" required>
                </div>

                <div class="col-md form-group">
                    <label class="form-label">Sexo</label>
                    <select class="form-select" id="formGender" required>
                        <option selected value="">Selecciona tu sexo</option>
                        <option value="1">Hombre</option>
                        <option value="2">Mujer</option>                     
                        <option value="3">Si</option>
                    </select>
                </div>
            </div>      

            <legend class="mt-5">Información de usuario</legend>
            <div class="row">
                <div class="col-md form-group">
                    <label class="form-label">Nombre de usuario</label>
                    <input class="form-control" id="formUserName" placeholder="Crea tu nombre de usuario..." required>
                </div>

                <div class="col-md form-group">
                    <label class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="formEmail" placeholder="nombre@ejemplo.com" required>
                </div>                
            </div>

            <div class="row">
                <div class="col-md form-group">
                    <label class="form-label">Imagen de perfil</label>
                    <input class="form-control" type="file" id="formFile" required>
                </div>

                <div class="col-md form-group">
                    <label class="form-label">Tipo de usuario</label>
                    <select class="form-select" id="formRole" required>
                        <option selected value="">Selecciona tu rol de usuario</option>
                        <option value="1">Comprador</option>
                        <option value="2">Vendedor</option>
                    </select>
                </div>               
            </div>

            <div class="row">
                <div class="col-md form-group">
                    <label class="form-label">Contraseña</label>
                    <input class="form-control" type="password" id="formPassword" placeholder="Crea una contraseña..." required>
                </div>

                <div class="col-md form-group">
                    <label class="form-label">Confirmar contraseña</label>
                    <input class="form-control" type="password" id="formPasswordConfirm" placeholder="Confirma la contraseña..." required>
                </div>
            </div>

            <div class="row mt-5">
            <div class="d-grid gap-2">
                     <button type="submit" class="btn btn-outline-info" style="background-color: purple; color: white;" onclick="validateInfo();">Iniciar sesión</button>
                     </div>
            </div>
        </form>
    </div>
    
    <?php
        include_once('assets/footer.php');
    ?>

</body>

</html>