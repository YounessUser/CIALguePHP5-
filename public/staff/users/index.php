<!DOCTYPE html>

<?php $title = " Ajouter des Administrateurs"?>


<?php require_once('../../../private/initialize.php');
 require_login();
?> 

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

  $user_set = find_all_users();

?>

<?php include(SHARED_PATH.'/Header_admin.php'); ?>
<div class="section" style="padding-top: 5%;">
        <div class="pageContent">

            <h1 class="presentationTitle"><b> Gestion des Administrateurs</b></h1>
            <div class="container">
<button type="button" style="background-color: blue; color: white;"><a class="action" style=" color: white;" href="<?php echo url_for('/staff/users/new.php'); ?>">Cree un nouveau Administrateur</a>
</button>

                <form action="#" method="post" style="width: 100%;">
 

    <table class="list">
  	  <tr>
        <th style="padding: 1%;" >Nom</th>
        <th style="padding: 1%;" >Question</th>
        <th style="padding: 1%;">Reponse</th>
            <?php 
            if(count_users() > '2'){
  	    echo "<th style=\"padding: 1%;\">&nbsp;</th>";
            }
            ?>
  	    <th style="padding: 1%;">&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php while($user = mysqli_fetch_assoc($user_set)) { ?>
        <tr>
            <td style="padding: 1%;" ><?php  echo h($user['username']); ?></td>
          <td style="padding: 1%;"><?php  echo h($user['quest']); ?></td>
    	    <td style="padding: 1%;"><?php  echo h($user['resp']); ?></td>
          <!--<td style="padding: 1%;"><a class="action" href="<?php # echo url_for('/staff/subjects/show.php?id=' . h(u($user['id']))); ?>">Apparaitre</a></td>-->
          <td style="padding: 1%;"><a class="action" href="<?php echo url_for('/staff/users/edit.php?id=' . h(u($user['id']))); ?>">Modifier</a></td>
         <?php
         if(count_users() > '2' ){
          echo "<td style=\"padding: 1%;\"><a class=\"action\" href=". url_for('/staff/users/delete.php?id=' . h(u($user['id']))).">Supprimer</a></td>";
         }
    	  ?>
              </tr>
      <?php } ?>
  	</table>
   
   

</form>

        <?php
      mysqli_free_result($user_set);
        ?>
        
        </div>
        </div></div>
<?php include(SHARED_PATH.'/Footer.php'); ?>
<?php include(SHARED_PATH.'/staff_footer.php'); ?>
   