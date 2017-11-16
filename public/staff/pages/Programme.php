<?php require_once('../../../private/initialize.php'); ?> 


<?php include(SHARED_PATH . '/Header.php'); ?>

<div class="section">
    <div class="pageContent">
        <h1 class="presentationTitle"><b><?= $programme_title; ?> :</b></h1>
        <ul class="feature-icons">
             <?php 
             $i=1;
            while ($contenu = mysqli_fetch_assoc($programme_contenu)) { ?>

                <li class="fa-chevron-right sizeText"><?= $contenu['titre']; ?>
                    <h6><?= $contenu['description']; ?></h6></li>
            <?php } ?>
          
        </ul>
    </div>
</div>
<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
