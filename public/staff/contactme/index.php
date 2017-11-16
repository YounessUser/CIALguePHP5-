<!DOCTYPE html>

<?php $title = " Ajouter un article" ?>


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
$contactme_set = find_all_contactmes();
?>

<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section" style="padding-top: 5%;">
    <div class="pageContent">

        <h1 class="presentationTitle"><b>Repondre aux Messages</b></h1>
        <div class="container">

            <form action="#" method="post" style="width: 100%;">


                <table class="list">
                    <tr>
                        <th style="padding: 1%;">&nbsp;</th>
                        <th style="padding: 1%;" >Nom</th>
                        <th style="padding: 1%;" >Sujet</th>
                        <th style="padding: 1%;">Email</th>
                        <th style="padding: 1%;">Message</th>
                        <th style="padding: 1%;">Repondu par</th>
                        <th style="padding: 1%;">&nbsp;</th>
                        <th style="padding: 1%;">&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>

<?php while ($contactme = mysqli_fetch_assoc($contactme_set)) { ?>
                        <tr>
                            <td style="padding: 1%; background-color: <?php echo h($contactme['emiteur']) == 'Personne' ? 'red' : 'green'; ?>;" ></td>
                            <td style="padding: 1%;" ><?php echo h($contactme['nom']); ?></td>
                            <td style="padding: 1%;"><?php echo h($contactme['sujet']); ?></td>
                            <td style="padding: 1%;"><?php echo h($contactme['email']); ?></td>
                            <td style="padding: 1%;"><?php echo h($contactme['message']); ?></td>
                            <td style="padding: 1%;"><?php echo h($contactme['emiteur']) != 'Personne' ? h($contactme['emiteur']) : '-'; ?></td>
                          <!--<td style="padding: 1%;"><a class="action" href="<?php # echo url_for('/staff/subjects/show.php?id=' . h(u($contactme['id'])));  ?>">Apparaitre</a></td>-->
                            <td style="padding: 1%;"><a class="action" href="<?php echo url_for('/staff/contactme/reply.php?id=' . h(u($contactme['id']))); ?>">Repondre</a></td>
                            <td style="padding: 1%;"><a class="action" href="<?php echo url_for('/staff/contactme/delete.php?id=' . h(u($contactme['id']))); ?>">Supprimer</a></td>
                        </tr>
<?php } ?>
                </table>



            </form>

<?php
mysqli_free_result($contactme_set);
?>

        </div>
    </div></div>
<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
   