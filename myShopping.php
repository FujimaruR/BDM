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
      <script src='./scripts/main.js'></script>
      <link rel='stylesheet' type='text/css' media='screen' href='./style/sectionBar.css'>

    <title>GrandGoods</title>
</head>

<body class="d-flex flex-column min-vh-100" style="margin-top: 3.5em;">
    <?php
        $_GET['logged'] = '1';
        include_once('assets/header.php');
    ?>

    <div class="container mt-5 mb-5">
        <legend>Mi carrito de compras</legend>
        <?php 
            include('assets/sectionCartBar.php');
        ?>

        <?php 
            include('assets/shoppingCardSubtotal.php');
        ?>

    </div>

    <?php
        include_once('assets/footer.php');
    ?>

</body>
</html>