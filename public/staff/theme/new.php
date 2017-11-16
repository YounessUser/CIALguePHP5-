<?php
require_once('../../../private/initialize.php');
 require_login();

?>

<?php $page_title = 'Cree un Nouveau Thème '; ?>
<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section" style="padding-top: 5%;">
    <div class="pageContent">

        <h1 class="presentationTitle"><b><?php echo $page_title; ?></b></h1>
        <div class="container">

            <!--<div id="content" class="container">-->

            <a class="back-link" href="<?php echo url_for('/staff/theme/index.php'); ?>">&laquo; Revenir vers la list</a>

            <h1></h1>
            <div style="padding-top: 2%;">
                <form action="<?php echo url_for('/staff/theme/create.php'); ?>" method="post" style="width: 100%;">

                    <label class="labelClass" for="theme_titre">Titre</label>
                    <input id="theme_titre" type="text"  placeholder="Saisir le nom" name="theme_titre" required>

                       <label class="labelClass" for="theme_desc">Description</label>
                    <input id="theme_desc" type="text"  placeholder="Saisir le nom d'Universite" name="theme_description" >


                     <label class="labelClass" for="langue">langue</label>
                    <select id="langue" class="form-control selectForm" name="theme_langue" required>
                        <option value="Fr" selected="">Francais</option> 
                        <option value="En" >Anglais</option> 
                    </select>

                    <br/>


                    <!--valider l'enregistrement-->
                    <button type="submit">Sauvegarder</button>



                </form>
            </div>
        </div>
    </div>
</div>

<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
