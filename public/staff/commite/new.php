<?php
require_once('../../../private/initialize.php');
 require_login();


?>

<?php $page_title = 'Cree un Nouveau Commite '; ?>
<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section" style="padding-top: 5%;">
    <div class="pageContent">

        <h1 class="presentationTitle"><b><?php echo $page_title; ?></b></h1>
        <div class="container">

            <!--<div id="content" class="container">-->

            <a class="back-link" href="<?php echo url_for('/staff/commite/index.php'); ?>">&laquo; Revenir vers la list</a>

            <h1></h1>
            <div style="padding-top: 2%;">
                <form action="<?php echo url_for('/staff/commite/create.php'); ?>" method="post" style="width: 100%;">


                    <!--Saisir le nom -->
                    <input type="text" maxlength="20" placeholder="Saisir le nom" name="commite_nom" required>

                    <!--Saisir le Pays--> 
                    <!--<input type="text" maxlength="15" placeholder="Saisir le Pays" name="commite_country" required>-->
                    <?php include(UTIL_PATH."/countries.php"); ?>

                    <!--Saisir le nom de l'universite-->    
                    <input type="text" maxlength="30" placeholder="Saisir le nom d'Universite" name="commite_univ" required>
                    <!--<input type="checkbox"  checked="checked"> Remember me-->


                    <div style="padding-top: 2%;">
                        <input type="radio" name="commite_type" value="1" required checked=""> Commite d'Organisation
                        <input type="radio" name="commite_type" value="2" required checked=""> Commite de Scientifique
                    </div>

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
