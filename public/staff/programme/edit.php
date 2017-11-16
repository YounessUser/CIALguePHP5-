<?php
require_once('../../../private/initialize.php');

require_login();
if (!isset($_GET['id'])) {
    redirect_to(url_for('/staff/programme/index.php'));
}
$id = $_GET['id'];

if (is_post_request()) {

    // Handle form values sent by new.php

    $getprogramme = [];
    $getprogramme['id'] = $id;
    $getprogramme['titre'] = isset($_POST['programme_titre']) ? $_POST['programme_titre'] : '';
    $getprogramme['description'] = isset($_POST['programme_description']) ? $_POST['programme_description'] : '';
    $getprogramme['langue'] = isset($_POST['programme_langue']) ? $_POST['programme_langue'] : '';

    $result = update_programme($getprogramme);
    redirect_to(url_for('/staff/programme/index.php'));
} else {
    $getprogramme = find_programme_by_id($id);
}
?>

<?php $page_title = 'Modifier le programme Selectionne'; ?>
<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section" style="padding-top: 5%;">
    <div class="pageContent">

        <h1 class="presentationTitle"><b><?php echo $page_title; ?></b></h1>
        <div class="container">

            <a class="back-link" href="<?php echo url_for('/staff/programme/index.php'); ?>">&laquo; Revenir vers la list</a>

            <h1></h1>
            <div style="padding-top: 2%;">
                <form action="<?php echo url_for('/staff/programme/edit.php?id=' . h(u($id))); ?>" method="post" style="width: 100%;">

                    <label class="labelClass" for="programme_titre">Titre</label>
                    <input id="programme_titre" type="text"  placeholder="Saisir le title" name="programme_titre" value="<?php echo $getprogramme['titre'];?>" required>

                    
                     <label class="labelClass" for="desc">Description</label>
                      <textarea id="desc" rows="4" cols="25" name="programme_description" ><?php echo $getprogramme['description'];?></textarea>
                      
                      
                    <label class="labelClass" for="langue">langue</label>
                    <select id="langue" class="form-control selectForm" name="programme_langue" required>
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
