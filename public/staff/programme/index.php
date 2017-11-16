<!DOCTYPE html>

<?php $title = " Ajouter un programme" ?>


<?php
require_once('../../../private/initialize.php');
require_login();
?> 


<?php
$programme_set = find_all_programme();
?>

<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section" style="padding-top: 5%;">
    <div class="pageContent">

        <h1 class="presentationTitle"><b>  Programme</b></h1>
        <div class="container">
            <button type="button" style="background-color: blue; color: white;"><a class="action" style=" color: white;" href="<?php echo url_for('/staff/programme/new.php'); ?>">Cree un nouveau programme</a>
            </button>

            <form action="#" method="post" style="width: 100%;">


                <table class="list">
                    <tr>
                        <th style="padding: 1%;" >titre</th>
                        <th style="padding: 1%;" >description</th>
                        <th style="padding: 1%;">Universite</th>
                        <th style="padding: 1%;">&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>

                    <?php while ($programme = mysqli_fetch_assoc($programme_set)) { ?>
                        <tr>
                            <td style="padding: 1%;" ><?php echo h($programme['titre']); ?></td>
                            <td style="padding: 1%;"><?php echo h($programme['description']); ?></td>
                            <td style="padding: 1%;"><?php echo h($programme['langue']); ?></td>
                            <td style="padding: 1%;"><a class="action" href="<?php echo url_for('/staff/programme/edit.php?id=' . h(u($programme['id']))); ?>">Modifier</a></td>
                            <td style="padding: 1%;"><a class="action" href="<?php echo url_for('/staff/programme/delete.php?id=' . h(u($programme['id']))); ?>">Supprimer</a></td>
                        </tr>
                    <?php } ?>
                </table>



            </form>

            <?php
            mysqli_free_result($programme_set);
            ?>

        </div>
    </div></div>
<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
   