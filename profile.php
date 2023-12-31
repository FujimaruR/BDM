<?php
session_start();
include("../BDM/backEnd/showuser.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://localhost/BDM/dependencies/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="http://localhost/BDM/dependencies/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="http://localhost/BDM/dependencies/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="http://localhost/BDM/resources/kirby.png">
    <script src='./scripts/starSystem.js'></script>
    <script src='./scripts/main.js'></script>
    <link rel='stylesheet' type='text/css' media='screen' href='./style/profile.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./style/sectionBarVariant.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./style/sectionListWishCard.css'>
    <title>GrandGoods</title>
</head>

<body class="d-flex flex-column min-vh-100" style="margin-top: 3.5em;">
    <?php
        $_GET['logged'] = '1';
        include_once('assets/header.php');
    ?>

    <header class="hero">
        <img src="<?php echo $imagen_url; ?>" alt="profile image" class="card_header-profile" />
    </header>


    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="row">
                <div class="col">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $usuario['nombre']; ?></h3>
                        <p class="card-text"><?php echo $usuario['email']; ?></p>
                    </div>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                        data-bs-target="#editarPerfil" style="margin-top: 3%;">Editar</button>
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col">
                            <h4 class="userData">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>
                                <?php echo isset($usuarioInfo['ubication']) ? $usuarioInfo['ubication'] : 'No disponible'; ?>
                            </h4>
                        </div>

                        <div class="col">
                            <h4 class="userData">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                </svg>
                                <?php echo $tipoUsuario;?>
                            </h4>
                        </div>

                        <div class="col">
                            <h4 class="userData">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-calendar3" viewBox="0 0 16 16">
                                    <path
                                        d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                    <path
                                        d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>
                                Se unió el: <?php echo $usuario['fecha_registro'];?>
                            </h4>
                        </div>
                    </div>
                </li>
                <?php
                    if (isset($_GET['error'])) {
                        echo "Error: " . urldecode($_GET['error']);
                    }
                ?>
            </ul>
            <div class="card-body">

                <?php
                    include_once('assets/profileSettings.php');
                ?>

            </div>
        </div>

    </div>

    <div class="modal fade" id="editarPerfil" tabindex="-1" aria-labelledby="editarPerfilLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editarPerfilLabel">Editar perfil</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="editperfilform" enctype="multipart/form-data">
                        <label for="editnom">Nombre completo: </label>
                        <input type="text" class="form-control" id="editnom" name="editnom" placeholder="..." required>
                        <label for="direc">Direccion: </label>
                        <input type="text" class="form-control" id="direc" name="direc" placeholder="..." required>

                        <div class="col-4">
                            <label for="formFile" class="form-label">Foto de perfil</label>
                            <div class="card">
                                <input class="form-control" type="file" id="#img-preview" name="editImg" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-secondary" id="guardarButton" style="margin-top: 3%;">Guardar</button>


                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <?php
        include_once('assets/footer.php');
    ?>

</body>

</html>