<!DOCTYPE html>

<?php $title = " Ajouter un article"?>


<?php require_once('../private/initialize.php');?> 

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php include(SHARED_PATH.'/staff_header.php'); ?>

<form action="/action_page.php" method="post">
  <div class="imgcontainer">
<!--    <img src="img_avatar2.png" alt="Avatar" class="avatar">-->
  </div>

  <div class="container">
      
<!--    <label><b></b></label>
    <input type="text" placeholder="Titre" name="article_title" required>-->

    <table class="list">
  	  <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Visible</th>
  	    <th>Auteur</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php #while($subject = mysqli_fetch_assoc($subject_set)) { ?>
        <tr>
          <td><?php # echo h($subject['id']); ?></td>
          <td><?php # echo h($subject['position']); ?></td>
          <td><?php # echo $subject['visible'] == 1 ? 'true' : 'false'; ?></td>
    	    <td><?php # echo h($subject['menu_name']); ?></td>
          <td><a class="action" href="<?php # echo url_for('/staff/subjects/show.php?id=' . h(u($subject['id']))); ?>">View</a></td>
          <td><a class="action" href="<?php # echo url_for('/staff/subjects/edit.php?id=' . h(u($subject['id']))); ?>">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php #} ?>
  	</table>
   
        
    
    <div class="container">
    <!--<button type="submit">Sauvegarder</button>-->
    <!--<input type="checkbox" checked="checked"> Remember me-->
  </div>

  <div class="container" style="background-color:#f1f1f1;">
<!--    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>-->
  </div>
</form>

        
        
<?php include(SHARED_PATH.'/staff_footer.php'); ?>
        
   