<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>GrandGoods</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <script src='scripts/main.js'></script>

    <script
      src="http://localhost/BDM/dependencies/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"
      href="http://localhost/BDM/dependencies/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/BDM/dependencies/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="http://localhost/BDM/resources/kirby.png">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500&display=swap" rel="stylesheet">
    
    <link rel='stylesheet' type='text/css' media='screen' href='./style/index.css'>
</head>

<body class="d-flex flex-column min-vh-100">                  <!-- LANDING PAGE -->
    <header class="hero">
        <div class="textos-hero">
            <h1>Bienvenidos a GrandGoods</h1>
            <p>Se parte de la comunidad</p>
            <a href="#hrefComunidad" class="btn btn-warning" role="button">Conoce más</a>
            <a href="#hrefCompras" class="link-dark">Saltar introducción</a>
        </div>

        <div class="svg-hero" style="height: 150px; overflow: hidden;" >
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg>
        </div>
    </header>
    
    <div class="container-fluid container">
        <div class="contenedor last-section" id="hrefComunidad">
            <div class="contenedor-textos-main">
                <h2 class="titulo left">Comunidad</h2>
                <p class="parrafo">Nuestra comunidad está compuesta por personas de todos los rincones del mundo, 
                    cada una con sus propias historias y experiencias únicas. Desde entusiastas de la tecnología que exploran las últimas innovaciones hasta amantes de la moda que buscan la prenda perfecta para cada ocasión, 
                    nuestra comunidad abarca una amplia gama de intereses y pasiones. Los estudiantes que buscan libros de texto asequibles, los padres que buscan juguetes para sus hijos y 
                    los aficionados a la jardinería en busca de nuevas plantas y herramientas también encuentran su lugar aquí.</p>
                <a href="#hrefInfo" class="btn btn-warning cta" role="button">Siguiente</a>
            </div>
            <img src="./resources/comunidad.jpg" alt="comunidad">
        </div>
    </div>

    <section class="info" id="hrefInfo">
        <div class="contenedor container-fluid container">
            <h2 class="titulo left">Información</h2>
            <p class="parrafo">Bienvenidos a GrandGoods, un lugar donde la innovación, la creatividad y la pasión se fusionan para ofrecerte objetos excepcionales. Desde nuestra humilde creación, hemos estado comprometidos con la visión de hacer que el todo objeto alrededor del mundo sea más accesible, emocionante y útil para todas las personas.</p>
            <a href="#hrefUsuarios" class="btn btn-outline-light cta" role="button">Aceptar</a>
        </div>
    </section>

    <div class="container-fluid container">
        <section class="cards contenedor" id="hrefUsuarios">
            <h2 class="titulo">Usuarios</h2>
            <div class="content-cards">
                <article class="card">
                    <div>
                    <i class="bi bi-person-badge"></i>
                    <h3>Comprador</h3>
                    <p>¿Estas buscando algo que no puedes encontrar en ningun otro lugar? GrandGoods es el lugar perfecto para ti. Tenemos todo objeto que se te pueda ocurrir y a precios muy accesibles.</p>
                    </div>
                    <a href="#hrefComprador" class="btn btn-warning cardbt" role="button">Me interesa</a>
                    
                </article>

                <article class="card">
                    <div>
                    <i class="bi bi-shop"></i>
                    <h3>Vendedor</h3>
                    <p>¿Tienes objetos artesanales, antiguedades, ropa, figuras o algo que te gustaria vender? Puedes hacer un perfil de vendedor para comenzar tu negocio y hacer feliz a los demas con tus objetos.</p>
                    </div>
                    <a href="#hrefvendedor" class="btn btn-warning cardbt" role="button">Me interesa</a>
                </article>
                
                <article class="card">
                    <i class="bi bi-tools"></i>
                    <h3>Administrador</h3>
                    <p>Tenemos usuarios de tipo administrador que verifican que todo funcione correctamente las 24 hrs del dia. Si tienes alguna duda o problema no dudes en contactar con uno.</p>
                </article>
            </div>
        </section>

        <div class="contenedor last-section" id="hrefComprador">
            <div class="contenedor-textos-main">
                <h2 class="titulo left">Compradores</h2>
                <p class="parrafo">¿Que estas esperando? ¡se parte de nosotros y realiza tus compras soñadas!</p>
                <a href="#hrefCompras" class="btn btn-warning cta" role="button">Registrarme</a>
            </div>
            <img src="./resources/comprador.jpg" alt="comunidad">
        </div>

        <div class="contenedor last-section" id="hrefvendedor">
            <div class="contenedor-textos-main">
                <h2 class="titulo left">Vendedores</h2>
                <p class="parrafo">¡Ayuda a los demas a conseguir sus compras soñadas con tus productos!</p>
                <a href="#hrefCompras" class="btn btn-warning cta" role="button">Registrarme</a>
            </div>
            <img src="./resources/ventas.jpg" alt="comunidad">
        </div>

        <div class="contenedor last-section" id="hrefCompras">
            <div class="contenedor-textos-main">
                <h2 class="titulo left">Comienza a comprar en linea</h2>
                <p class="parrafo">¡Unete a nosotros para recibir los mejores productos con la mejor calidad y servicio!</p>
                
                <a href="./signUp.php" class="btn btn-warning cta my-2" role="button">Registrarme</a>
                <a href="./logIn.php" class="btn btn-outline-warning cta my-2" role="button">Iniciar sesión</a>
                <a href="./main.php" class="btn btn-outline-warning cta my-2" role="button">Omitir</a>
            </div>
            <img src="./resources/compras.jpg" alt="compras">
        </div>
    </div>

    <div class="svg-wave" style="height: 150px; overflow: hidden;" >
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(33, 37, 41);"></path>
        </svg>
    </div> 

<?php
        include_once('assets/footer.php');
    ?>

</body>
</html>