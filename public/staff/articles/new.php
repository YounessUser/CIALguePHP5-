<!DOCTYPE html>

<?php $title = " Ajouter un article";?>


<?php require_once('../../../private/initialize.php');
require_login();
?> 


<?php

require_once('../../../private/initialize.php');

#$article_set = find_all_articles();
#$article_count = mysqli_num_rows($article_set) + 1;
#mysqli_free_result($article_set);

//$article = [];
//$subject["position"] = $subject_count;

?>


<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php include(SHARED_PATH.'/Header_admin.php'); ?>

<div class="section">
    <div class="pageContent">

        <form action="<?php echo url_for('/staff/articles/create.php'); ?>" method="post" enctype="multipart/form-data">

            <input type="text" maxlength="100" placeholder="Titre" name="ar_title" required>


            <?php ##### include(PUBLIC_PATH . '/staff/articles/editorText.php'); ?>
            <br/>
<!--            <textarea id="wysihtml5-editor"  name="ar_text" spellcheck="false" autofocus placeholder="Enter something ...">
            </textarea>-->
            
            Selectionner le document :
            <input type="file" name="file" id="fileToUpload" required>
            
            

            <button type="submit">Enregistrer</button>

        </form>
    </div></div>


        
<?php include(SHARED_PATH.'/Footer.php'); ?>
<?php include(SHARED_PATH.'/staff_footer.php'); ?>
        
   