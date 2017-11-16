<?php require_once('../../../private/initialize.php'); ?> 


<?php include(SHARED_PATH . '/Header.php'); ?>    


<div class="section">
    <div class="pageContent">
        <h1 class="presentationTitle"><b><?= $calendrier_title; ?></b></h1>

        <div class="table-condensed">
            <table class="table table-striped table-bordered" style="table-layout: fixed">
                <thead>
                    <tr>
                        <?php foreach ($calendrier_contenu as $contenu): ?>
                            <?php  $date= new DateTime($contenu['dateCalendar']);?>
                            <td class="columWidth"><b><?php= $date->format('d-m-Y'); ?></b></td>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                         <?php foreach ($calendrier_contenu as $contenu):?>
                     
                        <td class="colum-calendar" ><?= $contenu['description']; ?></td>
                        <?php endforeach; ?>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
</div>


<?php include(SHARED_PATH . '/Footer.php'); ?>    
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
