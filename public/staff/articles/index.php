<!DOCTYPE html>

<?php $title = " Ajouter un article"?>


<?php require_once('../../../private/initialize.php');
require_login();
?> 


<?php

  $subject_set = find_all_articles();

?>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php include(SHARED_PATH.'/Header_admin.php'); ?>
<div class="section" style="padding-top: 5%;">
        <div class="pageContent">

            <h1 class="presentationTitle"><b> Gestion des Articles</b></h1>
            <div class="container">
        
        

<button type="button" style="background-color: blue; color: white;"><a class="action" style=" color: white;" href="<?php echo url_for('/staff/articles/new.php'); ?>">Cree un nouveau article</a>
</button>


                <form action="" method="post" style="width: 100%;">
<!--  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">-->
      
<!--    <label><b></b></label>
    <input type="text" placeholder="Titre" name="article_title" required>-->


<!--Le tableau qui affiche tout les elements sauvegardées dans la base de donnee-->

    <table class="list">
  	  <tr>
       
        <th style="padding: 1%;">Titre</th>
        <th style="padding: 1%;">Auteur</th>
  	   <!-- <th>&nbsp;</th> -->
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php while($subject = mysqli_fetch_assoc($subject_set)) { ?>
        <tr>
          <td style="padding: 1%;"><?php echo h($subject['ar_title']); ?></td>
          <td style="padding: 1%;"><?php echo $subject['author']; ?></td>
    	    <!--<td><?php # echo h($subject['menu_name']); ?></td>-->
          <!-- <td style="padding: 1%;"><a class="action" href="<?php  echo du($subject['ar_path']); ?>">Telecharger</a></td>-->
          <td style="padding: 1%;"><a class="action" href="<?php echo url_for('/staff/articles/edit.php?id=' . h(u($subject['id']))); ?>">Modifier</a></td>
          <td style="padding: 1%;"><a class="action" href="<?php echo url_for('/staff/articles/delete.php?id=' . h(u($subject['id']))); ?>">Supprimer</a></td>
    	  </tr>
      <?php } ?>
  	</table>
   
        
    
<!--    <div class="container">
    <button type="submit">Sauvegarder</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>-->

  

<?php
      mysqli_free_result($subject_set);
 ?>

</form>
                

        
    </div>
    </div>
    </div>
<?php include(SHARED_PATH.'/Footer.php'); ?>
<?php include(SHARED_PATH.'/staff_footer.php'); ?>
        
   
