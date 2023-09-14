<div class="col-xl-3">
    <div class="card cardSectionBar">
        <img src=<?php echo $productImg; ?> class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $productName; ?></h5>
            <p class="card-text">$ <?php echo $productPrice; ?></p>
            <?php
            if ($productId === '5') {
                $buyQuotation = '2';
            } else {
                $buyQuotation = '1';
            }
            ?>
            <a href="./product.php?buyQuotation=<?php echo $buyQuotation; ?>" class="btn btn-warning">Ver más</a>
            <!--<?php echo $productId; ?> -->
        </div>
    </div>
</div>