<?php
require_once('../../../private/initialize.php');
 require_login();


?>

<?php $page_title = 'Cree un Nouveau User '; ?>
<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section" style="padding-top: 5%;">
    <div class="pageContent">

        <h1 class="presentationTitle"><b><?php echo $page_title; ?></b></h1>
        <div class="container">

            <!--<div id="content" class="container">-->

            <a class="back-link" href="<?php echo url_for('/staff/users/index.php'); ?>">&laquo; Revenir vers la list</a>

            <h1></h1>
            <div style="padding-top: 2%;">
                <form action="<?php echo url_for('/staff/users/create.php'); ?>" method="post" style="width: 100%;">


         <?php echo display_errors($errors); ?>
                    <!--Saisir le nom -->
                    <input type="text" maxlength="10" placeholder="Saisir le nom" name="username" required>
                    
                    
                    <!--Saisir le nom -->
                    <input type="text" maxlength="20" placeholder="Saisir le mot de pass" name="password" required>

                    <!--Saisir le Pays--> 
                    <!--<input type="text" maxlength="15" placeholder="Saisir le Pays" name="user_country" required>-->
                    <?php include(UTIL_PATH."/questionsecure.php"); ?>

                    <!--Saisir le nom de l'universite-->    
                    <input type="text" maxlength="30" placeholder="Saisir la Reponse" name="resp" required>
                    <!--<input type="checkbox"  checked="checked"> Remember me-->

                    <!--valider l'enregistrement-->
                    <button type="submit">Sauvegarder</button>



                </form>
            </div>
        </div>
    </div>
</div>
<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
