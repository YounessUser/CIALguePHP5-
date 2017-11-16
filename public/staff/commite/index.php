<!DOCTYPE html>

<?php $title = " Ajouter un article"?>


<?php require_once('../../../private/initialize.php');
 require_login();

?> 

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

  $commite_set = find_all_commite();

?>

<?php include(SHARED_PATH.'/Header_admin.php'); ?>
<div class="section" style="padding-top: 5%;">
        <div class="pageContent">

            <h1 class="presentationTitle"><b> Gestion des Commitees</b></h1>
            <div class="container">
<button type="button" style="background-color: blue; color: white;"><a class="action" style=" color: white;" href="<?php echo url_for('/staff/commite/new.php'); ?>">Cree un nouveau commite</a>
</button>

                <form action="#" method="post" style="width: 100%;">
 

    <table class="list">
  	  <tr>
        <th style="padding: 1%;" >Nom</th>
        <th style="padding: 1%;" >Pays</th>
        <th style="padding: 1%;">Type</th>
  	    <th style="padding: 1%;">Universite</th>
  	    <th style="padding: 1%;">&nbsp;</th>
  	    <th style="padding: 1%;">&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php while($commite = mysqli_fetch_assoc($commite_set)) { ?>
        <tr>
            <td style="padding: 1%;" ><?php  echo h($commite['nom']); ?></td>
          <td style="padding: 1%;"><?php  echo h($commite['country']); ?></td>
          <td style="padding: 1%;"><?php  echo $commite['type'] == 1 ? 'Commite d\'Organisation'  : ( 2 ? 'Commite Scientifique' : ''); ?></td>
    	    <td style="padding: 1%;"><?php  echo h($commite['university']); ?></td>
          <!--<td style="padding: 1%;"><a class="action" href="<?php # echo url_for('/staff/subjects/show.php?id=' . h(u($commite['id']))); ?>">Apparaitre</a></td>-->
          <td style="padding: 1%;"><a class="action" href="<?php echo url_for('/staff/commite/edit.php?id=' . h(u($commite['id']))); ?>">Modifier</a></td>
          <td style="padding: 1%;"><a class="action" href="<?php echo url_for('/staff/commite/delete.php?id=' . h(u($commite['id']))); ?>">Supprimer</a></td>
    	  </tr>
      <?php } ?>
  	</table>
   
   

</form>

        <?php
      mysqli_free_result($commite_set);
        ?>
        
        </div>
        </div></div>
<?php include(SHARED_PATH.'/Footer.php'); ?>
<?php include(SHARED_PATH.'/staff_footer.php'); ?>
   