<?php require_once('../../../private/initialize.php'); ?> 


<?php include(SHARED_PATH . '/Header.php'); ?>    


<div class="section">
    <div class="pageContent">
        <h1 class="presentationTitle"><b><?= $calendrier_title; ?></b></h1>

        <div class="table-condensed">
            <table class="table table-striped table-bordered" style="table-layout: fixed">
                <thead>
                    <tr>
                        <?php foreach ($calendrier_dates as $contenu): ?>
                            <td class="columWidth"><b><?= $contenu ?></b></td>
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



<!-- copyright -->
<div class="footer-w3layouts">
    <!--<div class="container">-->
    <div class="agile-copy">
        <p>© 2017 Travel Adventure. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
    </div>

    <div class="clearfix"></div>
    <!--</div>-->
</div>
<!-- copyright -->
<script type="text/javascript" src="<?php echo url_for('stylesheets/js/jquery-2.1.4.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo url_for('stylesheets/js/bootstrap.js');?>"></script>
</body>

</html>