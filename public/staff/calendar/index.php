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
$calendar_set = find_all_calendar();
?>

<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section" style="padding-top: 5%;">
    <div class="pageContent">

        <h1 class="presentationTitle"><b> Gestion des Calendar</b></h1>
        <div class="container">
            <button type="button" style="background-color: blue; color: white;"><a class="action" style=" color: white;" href="<?php echo url_for('/staff/calendar/create.php'); ?>">Cree un nouveau calendar</a>
            </button>

            <form action="#" method="post" style="width: 100%;">


                <table class="list">
                    <tr>
                        <th style="padding: 1%;" >date</th>
                        <th style="padding: 1%;" >description</th>
                        <th style="padding: 1%;">langue</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>

                    <?php while ($calendar = mysqli_fetch_assoc($calendar_set)) { ?>
                        <tr>
                            <td style="padding: 1%;" ><?php echo h($calendar['dateCalendar']); ?></td>
                            <td style="padding: 1%;"><?php echo h($calendar['description']); ?></td>
                            <td style="padding: 1%;"><?php echo $calendar['langue'] ?></td>
                            
                            <td style="padding: 1%;"><a class="action" href="<?php echo url_for('/staff/calendar/edit.php?id=' . h(u($calendar['id']))); ?>">Modifier</a></td>
                            <td style="padding: 1%;"><a class="action" href="<?php echo url_for('/staff/calendar/delete.php?id=' . h(u($calendar['id']))); ?>">Supprimer</a></td>
                        </tr>
                    <?php } ?>
                </table>



            </form>

            <?php
            mysqli_free_result($calendar_set);
            ?>

        </div>
    </div></div>
<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
   