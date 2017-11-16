<?php
require_once('../../../private/initialize.php');

require_login();
if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/frais/index.php'));
}
$id = $_GET['id'];

if(is_post_request()) {

  // Handle form values sent by new.php

  $getfrais = [];
  $getfrais['id'] = $id;
  $getfrais['type'] = isset($_POST['frais_type']) ?$_POST['frais_type']: '';
  $getfrais['dateLimite'] = isset($_POST['frais_dateLimite']) ?$_POST['frais_dateLimite']: '';
  $getfrais['state'] = isset($_POST['frais_state']) ?$_POST['frais_state']: '';
  $getfrais['prix'] = isset($_POST['frais_prix']) ?$_POST['frais_prix']: '';
  $getfrais['langue'] = isset($_POST['frais_langue']) ?$_POST['frais_langue']: '';

  
  $result = update_frais($getfrais);
  redirect_to(url_for('/staff/frais/index.php'));
  
  
}else{
    $getfrais = find_frais_by_id($id);
}
?>

<?php $page_title = 'Modifier le Commite Selectionne'; ?>
<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section" style="padding-top: 5%;">
    <div class="pageContent">

        <h1 class="presentationTitle"><b><?php echo $page_title; ?></b></h1>
        <div class="container">

            <!--<div id="content" class="container">-->

            <a class="back-link" href="<?php echo url_for('/staff/frais/index.php'); ?>">&laquo; Revenir vers la list</a>

            <h1></h1>
            <div style="padding-top: 2%;">
                <form action="<?php echo url_for('/staff/frais/edit.php?id=' . h(u($id))); ?>" method="post" style="width: 100%;">

                    <label class="labelClass" for="type">Type</label>
                    <input id="type" type="text" placeholder="Saisir le nom" name="frais_type" required value="<?php echo $getfrais['type'];?>">



                    <label class="labelClass" for="desc">Date Limite</label>
                    <input id="type" type="date" class="form-control"  name="frais_dateLimite" required value="<?php echo $getfrais['dateLimite'];?>">

                    <label class="labelClass" for="etat">Avant ou Apres la date Limite</label>
                    <select id="etat" class="form-control selectForm" name="frais_state" required>
                        <option value="1" selected="<?php ( $getfrais['state'])?>">Avant</option> 
                        <option value="0" selected="<?php ( !$getfrais['state'])?>">Apres</option> 
                    </select>
                
                       <label class="labelClass" for="prix">Prix</label>
                    <input id="prix" type="number"  class="form-control" name="frais_prix" required value="<?php echo $getfrais['prix'];?>">
                        
                     <label class="labelClass" for="lng" >langue</label>
                    <select id="lng" class="form-control selectForm" name="frais_langue" required>
                        <option value="Fr" >Francais</option> 
                        <option value="En" >Anglais</option> 
                    </select>
                    <br/>


                    <!--valider l'enregistrement-->
                    <button type="submit">Modifier</button>



                </form>
            </div>
        </div>
    </div>
</div>
<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
