<?php
require_once('../../../private/initialize.php');
require_login();

?>

<?php $page_title = 'Cree un Nouveau programme '; ?>
<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section" style="padding-top: 5%;">
    <div class="pageContent">

        <h1 class="presentationTitle"><b><?php echo $page_title; ?></b></h1>
        <div class="container">


            <a class="back-link" href="<?php echo url_for('/staff/programme/index.php'); ?>">&laquo; Revenir vers la list</a>

            <h1></h1>
            <div style="padding-top: 2%;">
                <form action="<?php echo url_for('/staff/programme/create.php'); ?>" method="post" style="width: 100%;">

                    <label class="labelClass" for="date">Titre</label>
                    <input id="text" type="text"  name="pro_titre" required>

                      <label class="labelClass" for="desc">Description</label>
                      <textarea id="desc" rows="4" cols="25" name="pro_description"></textarea>

                    <label class="labelClass" for="theme">langue</label>
                    <select id="theme" class="form-control selectForm" name="pro_langue" required>
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
