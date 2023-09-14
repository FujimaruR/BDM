<div class="col-xl-3">
    <div class="card cardSectionBar">
        <img src=<?php echo $userImg; ?> class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $userName; ?></h5>
            <p class="card-text">Tipo: <?php echo $userType; ?></p>
            <?php
            if ($userId === '1') {
                $userType = '3';
            } else if ($userId === '2') {
                $userType = '2';
            } else if ($userId === '3') {
                $userType = '1';
            } else if ($userId === '4') {
                $userType = '5';
            }
            ?>
            <a href="./profile.php?userType=<?php echo $userType; ?>" class="btn btn-warning">Ver perfil</a>
            <!--<?php echo $userId; ?> -->
        </div>
    </div>
</div>