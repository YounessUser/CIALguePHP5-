<?php
require_once('../../../private/initialize.php');

require_login();
if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/accueil/index.php'));
}
$id = $_GET['id'];

if(is_post_request()) {

  // Handle form values sent by new.php

  $getaccueil = [];
  $getaccueil['id'] = $id;
  $getaccueil['type'] = isset($_POST['accueil_type']) ?$_POST['accueil_type']: '';
  $getaccueil['text'] =isset($_POST['accueil_text']) ?$_POST['accueil_text']: '';
  $getaccueil['langue'] = isset($_POST['accueil_langue']) ?$_POST['accueil_langue']: '';

  
  $result = update_accueil($getaccueil);
  redirect_to(url_for('/staff/accueil/index.php'));
  
  
}else{
    $getaccueil = find_accueil_by_id($id);
}
?>

<?php $page_title = 'Modifier le Commite Selectionne'; ?>
<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section" style="padding-top: 5%;">
    <div class="pageContent">

        <h1 class="presentationTitle"><b><?php echo $page_title; ?></b></h1>
        <div class="container">

            <!--<div id="content" class="container">-->

            <a class="back-link" href="<?php echo url_for('/staff/accueil/index.php'); ?>">&laquo; Revenir vers la list</a>

            <h1></h1>
            <div style="padding-top: 2%;">
                <form action="<?php echo url_for('/staff/accueil/edit.php?id=' . h(u($id))); ?>" method="post" style="width: 100%;">

                    <label class="labelClass" for="type">Type</label>
                    <input id="type" type="text" maxlength="20" placeholder="Saisir le nom" name="accueil_type" required value="<?php echo $getaccueil['type'];?>">



                    <label class="labelClass" for="desc">Description</label>
                     <textarea id="desc" rows="4" cols="25" name="accueil_text" ><?php echo utf8_encode($getaccueil['text']);?></textarea>

                     <label class="labelClass" for="lng">langue</label>
                    <select id="lang" class="form-control selectForm" name="accueil_langue" required>
                        <option value="Fr" selected="">Francais</option> 
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
