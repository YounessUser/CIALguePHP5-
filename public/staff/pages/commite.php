<?php $page_title = "Afficher les Commites" ?>


<?php
require_once('../../../private/initialize.php');

$commite_set = find_all_commite();
?>  


<?php include(SHARED_PATH . '/Header.php'); ?>
<div class="section">
    <div class="pageContent">

        <!--<h1 class="presentationTitle"><b><?php // echo $page_title;  ?></b></h1>-->
        <div class="container">
            <div class="comit">

<?php include(PUBLIC_PATH . '/staff/commite/sortcommit.php'); ?>

                <div class="container">

                    <center>
                        <div class=" boxGreen">
                            <p><?= $comite_contenu[0];?></p>
                        </div>
                    </center>

                    <br>
                    <?php echo show_up_commite($array_commite_2);
                    ?>
                    <hr />
                    <center>
                        <div class=" boxGreen">
                            <p><?= $comite_contenu[1];?></p>
                        </div>
                    </center>
                    <br>
                    <?php echo show_up_commite($array_commite_1);
                    ?>

                </div>
                <!-- //leave-comments -->
            </div>


        </div>
    </div>
</div>
<?php
include(SHARED_PATH . '/Footer.php');
include(SHARED_PATH . '/staff_footer.php');
mysqli_free_result($commite_set);
?>
        