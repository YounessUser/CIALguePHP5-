<!DOCTYPE html>

<?php $title = " Ajouter un accueil" ?>


<?php
require_once('../../../private/initialize.php');
require_login();
?> 

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
$accueil_set = find_all_accueil();
?>

<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section" style="padding-top: 5%;">
    <div class="pageContent">

        <h1 class="presentationTitle"><b> Gestion des Accueil</b></h1>
        <div class="container">

            <form action="#" method="post" style="width: 100%;">


                <table class="list">
                    <tr>
                        <th style="padding: 1%;" >type</th>
                        <th style="padding: 1%;" >text</th>
                        <th style="padding: 1%;" >langue</th>
                        <th style="padding: 1%;">&nbsp;</th>
                    </tr>

                    <?php while ($accueil = mysqli_fetch_assoc($accueil_set)) { ?>
                        <tr>
                            <td style="padding: 1%;" ><?php echo h($accueil['type']); ?></td>
                            <td style="padding: 1%;"><?php echo utf8_encode($accueil['text']); ?></td>
                            <td style="padding: 1%;"><?php echo h($accueil['langue']); ?></td>
                            <td style="padding: 1%;"><a class="action" href="<?php echo url_for('/staff/accueil/edit.php?id=' . h(u($accueil['id']))); ?>">Modifier</a></td>
                        </tr>
                    <?php } ?>
                </table>



            </form>

            <?php
            mysqli_free_result($accueil_set);
            ?>

        </div>
    </div></div>
<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
   
