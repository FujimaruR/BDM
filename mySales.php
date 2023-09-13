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
      <link rel='stylesheet' type='text/css' media='screen' href='./style/myShopping.css'>
      <link rel="shortcut icon" href="http://localhost/BDM/resources/kirby.png">
      <script src='./scripts/main.js'></script>
    <title>GrandGoods</title>
</head>

<body class="d-flex flex-column min-vh-100" style="margin-top: 3.5em;">
    <?php
        include_once('assets/header.php');
    ?>

    <div class="container mt-5 mb-5">
        <legend>Mis ventas</legend>

        <div class="row">
            <?php 
                include_once('assets/filterRecords.php');
            ?>
        </div>

        <br>

        <div class="row">
            <?php 
                $shoppingCardId = "1";
                $shoppingCardDate = date("d") . "/" . date("m") . "/" . date("Y");

                include('assets/shoppingCards.php');
            ?>

            <?php 
                $shoppingCardId = "2";
                $shoppingCardDate = date("d") . "/" . date("m") . "/" . date("Y");

                include('assets/shoppingCards.php');
            ?>
        </div> 

    </div>

    <?php
        include_once('assets/footer.php');
    ?>

</body>
</html>