<!DOCTYPE html>

<?php $title = " Ajouter un frais" ?>


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
$frais_set = find_all_frais();
?>

<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section" style="padding-top: 5%;">
    <div class="pageContent">

        <h1 class="presentationTitle"><b> Gestion des frais d'inscription</b></h1>
        <div class="container">


            <form action="#" method="post" style="width: 100%;">


                <table class="list">
                    <tr>
                        <th style="padding: 1%;" >type</th>
                        <th style="padding: 1%;" >date Limite</th>
                        <th style="padding: 1%;">state</th>
                        <th style="padding: 1%;">prix</th>
                        <th style="padding: 1%;">langue</th>
                        <th style="padding: 1%;">&nbsp;</th>

                    </tr>

                    <?php while ($frais = mysqli_fetch_assoc($frais_set)) { ?>
                        <tr>
                            <td style="padding: 1%;" ><?php echo h($frais['type']); ?></td>
                            <td style="padding: 1%;"><?php echo h($frais['dateLimite']); ?></td>
                            <td style="padding: 1%;"><?php echo $frais['state'] == 1 ? 'Avant la date Limite' : 'Apres la date Limite'; ?></td>
                            <td style="padding: 1%;"><?php echo h($frais['prix']); ?></td>
                            <td style="padding: 1%;"><?php echo h($frais['langue']); ?></td>
                            <td style="padding: 1%;"><a class="action" href="<?php echo url_for('/staff/frais/edit.php?id=' . h(u($frais['id']))); ?>">Modifier</a></td>
                        </tr>
                    <?php } ?>
                </table>



            </form>

            <?php
            mysqli_free_result($frais_set);
            ?>

        </div>
    </div></div>
<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
   