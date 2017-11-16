<?php require_once('../../../private/initialize.php'); ?> 


<?php include(SHARED_PATH . '/Header.php'); ?>


<div class="section">
    <div class="pageContent">

        <h1 class="presentationTitle"><b><?= $themes_title; ?></b></h1>


        <div class="services">
            <?php 
             $i=1;
            while ($theme = mysqli_fetch_assoc($themes_contenu)) { ?>

                <div class="services-grid-left">
                    <div class="services-text">
                        
                        <h4><?=$i++.' - '.$theme['titre'];?></h4>
                        <p><?=$theme['description'];?></p>

                    </div>
                    <div class="clearfix"> </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
