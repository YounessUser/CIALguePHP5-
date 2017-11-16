<!DOCTYPE html>

<?php $title = " Ajouter un theme" ?>


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
$theme_set = find_all_theme();
?>

<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section" style="padding-top: 5%;">
    <div class="pageContent">

        <h1 class="presentationTitle"><b> Gestion des themes</b></h1>
        <div class="container">
            <button type="button" style="background-color: blue; color: white;"><a class="action" style=" color: white;" href="<?php echo url_for('/staff/theme/new.php'); ?>">Cree un nouveau theme</a>
            </button>

            <form action="#" method="post" style="width: 100%;">


                <table class="list">
                    <tr>
                        <th style="padding: 1%;" >titre</th>
                        <th style="padding: 1%;" >description</th>
                        <th style="padding: 1%;">langue</th>
                        <th style="padding: 1%;">&nbsp;</th>
                        <th style="padding: 1%;">&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>

                    <?php while ($theme = mysqli_fetch_assoc($theme_set)) { ?>
                        <tr>
                            <td style="padding: 1%;" ><?php echo h($theme['titre']); ?></td>
                            <td style="padding: 1%;"><?php echo h($theme['description']); ?></td>
                            <td style="padding: 1%;"><?php echo h($theme['langue']); ?></td>
                            <td style="padding: 1%;"><a class="action" href="<?php echo url_for('/staff/theme/edit.php?id=' . h(u($theme['id']))); ?>">Modifier</a></td>
                            <td style="padding: 1%;"><a class="action" href="<?php echo url_for('/staff/theme/delete.php?id=' . h(u($theme['id']))); ?>">Supprimer</a></td>
                        </tr>
                    <?php } ?>
                </table>



            </form>

            <?php
            mysqli_free_result($theme_set);
            ?>

        </div>
    </div></div>
<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
   