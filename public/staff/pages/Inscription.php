<?php require_once('../../../private/initialize.php'); ?> 


<?php include(SHARED_PATH . '/Header.php');
$errors = array();
?>

<div class="section">
    <div class="pageContent">


        <h1 class="presentationTitle"><b><?= $inscription_title;?></b></h1>
        <!--<a class="back-link" href="<?php // echo url_for('/staff/commite/index.php'); ?>">&laquo; Revenir vers la list</a>-->
        <h1></h1>
        <div style="padding-top: 2%;">
            <?php echo display_errors($errors); ?>
            <form action="<?php echo url_for('/staff/inscription/create.php'); ?>" method="post" style="width: 100%;">

                
                 <!--Saisir le nom -->
                <label class="labelClass" for="nom"><?= $inscription_contenu[0];?></label>
                <input id="nom" type="text" maxlength="20" placeholder="<?= $inscription_contenu[0];?>" name="lastname" required>
                <!--Saisir le Prenom -->
                <label class="labelClass" for="prenom"><?= $inscription_contenu[1];?></label>
                <input id="prenom" type="text" maxlength="20" placeholder="<?= $inscription_contenu[1];?>" name="firstname" required>


                <div style="padding:8px 0;">
                    <label class="labelClass" for="commu"><?= $inscription_contenu[2];?></label>
                    <select id="commu" class="form-control selectForm" name="commu" required>
                        <option value="" selected="">Communication</option> 
                        <option value="Orale" >Orale</option> 
                        <option value="Affiche">Affiche</option>

                    </select>
                </div>

                <!--Saisir l theme -->
                <div style="padding:8px 0;">
                    <label class="labelClass" for="theme"><?= $inscription_contenu[3];?></label>
                    <select id="theme" class="form-control selectForm" name="theme" required>
                        <option value="" selected="">Thème</option> 
                        <option value="1" >Algues et biodiversité</option> 
                        <option value="2">Biotechnologies algales</option>
                        <option value="3">Algues et agriculture</option>
                        <option value="4">Algues et environnement</option>
                        <option value="5">Algues et industries</option>
                        <option value="6">Algocarburants</option>

                    </select>
                </div>

                <!--Saisir l titre -->
                <label class="labelClass" for="titre"><?= $inscription_contenu[4];?> :</label>
                <input id="titre" type="text"  placeholder="<?= $inscription_contenu[4];?>" name="titre" required>

                <!--Saisir l address -->
                <label class="labelClass" for="adresse"><?= $inscription_contenu[5];?> :</label>
                <input id="adresse" type="text" maxlength="2000" placeholder="<?= $inscription_contenu[5];?>" name="address" required>

                <!--Saisir le Email--> 
                 <label class="labelClass" for="email"><?= $inscription_contenu[6];?> :</label>
                 <input id="email" type="text" maxlength="150" placeholder="<?= $inscription_contenu[6];?>" name="email" required>


                <div style="padding: 8px 0;">
                    <label class="labelClass" for="country"><?= $inscription_contenu[7];?> :</label>
                    <?php include(UTIL_PATH . "/countries.php"); ?>
                </div>


                <div style="padding: 8px 0;">
                    <label class="labelClass" for="gender"><?= $inscription_contenu[8];?> :</label>
                    <select id="gender" class="form-control selectForm" name="gender" required>
                        <option value="" selected="">Sexe</option> 
                        <option value="1">Male</option> 
                        <option value="2">Female</option>

                    </select>
                </div>

                <div style="padding: 8px 0;">
                    <label class="labelClass" for="typePersoone"><?= $inscription_contenu[9];?> :</label>
                    <select id="typePersoone" class="form-control" name="type" required>
                        <option value="" selected="">Fonction</option> 
                        <option value="2" >Enseignant-chercheur</option> 
                        <option value="3" >Doctorant</option>
                        <option value="1" >Accompagnateur </option>
                    </select>
                </div>
                <br/>


            <?php include(SHARED_PATH . '/capatcha.php'); ?>

                <!--valider l'enregistrement-->
                <button type="submit"><?=$inscription_contenu[10];?></button>
            </form>
        </div>
    </div>
</div>
<?php include(SHARED_PATH . './Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
