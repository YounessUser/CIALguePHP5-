<?php

require_once('../../../private/initialize.php');

#$test = $_GET['test'] ?? '';
/*
if($test == '404') {
  error_404();
} elseif($test == '500') {
  error_500();
} elseif($test == 'redirect') {
  redirect_to(url_for('/staff/subjects/index.php'));
}
 * 
 */
?>

<?php $page_title = 'Inscription / Sign up '; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content" class="container">

  <!--le lien vers la page precedente-->
  <a class="back-link" href="<?php echo url_for('/staff/connection/login.php'); ?>">&laquo; Back to Log In Page / Revenir vers la Page de Connection</a>

  <h1><?php echo $page_title;?></h1>

    <form action="/action_page.php" method="post">
    
  <div class="imgcontainer">
<!--    <img src="img_avatar2.png" alt="Avatar" class="avatar">-->
  </div>

  <div class="container">
   
    <!--Saisir le Nom-->
    <label><b></b></label>
    <input type="text" placeholder="Saisir le nom/ Enter Your Last Name" name="sm_lastname" required>
    
    <!--Saisir le Prenom-->
    <label><b></b></label>
    <input type="text" placeholder="Saisir le prenom / Enter Your First Name" name="sm_firstname" required>

    <!--Saisir le Password-->
<!--    <label><b></b></label>
    <input type="password" placeholder="Saisir le password/ Enter Password" name="sm_password" required>-->
    
    
    <!--Choissiser le Gender-->
    <div class="container">
    <label><b>Sexe : </b></label>
    <!--<input type="text" placeholder="Saisir le nom d'Universite" name="commite_univ" required>-->
    <input type="radio" value="male" name="sm_categorie" checked=""> Homme / Man
    <input type="radio" value="female" name="sm_categorie" > Femme / Woman
    </div>
    
    
    <!--Choissiser la Categorie-->
    <div class="container">
    <label><b>Categorie :</b></label>
    <!--<input type="text" placeholder="Saisir le nom d'Universite" name="commite_univ" required>-->
    <input type="radio" value="1" name="sm_categorie" checked="">Etudiant/Student
    <input type="radio" value="2" name="sm_categorie" >Professeur/Professor
    <input type="radio" value="3" name="sm_categorie" >Chercheur/Searcher
    </div>
    <br/>
    <button type="submit">Validate</button>
  </div>

        
  <div class="container" style="background-color:#f1f1f1;">
<!--    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>-->
  </div>
</form>


</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
