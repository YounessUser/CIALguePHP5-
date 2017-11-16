<?php
require_once('../../../private/initialize.php');

#$user_set = find_all_user();
#mysqli_free_result($user_set);
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

require_login();
if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/user/index.php'));
}
$id = $_GET['id'];
$der_username;
$die_antwort;
$die_frage;

if(is_post_request()) {

  // Handle form values sent by new.php
    

  $getuser = [];
  $getuser['id'] = $id;
  $getuser['username'] = isset($_POST['username'])?$_POST['username'] : $der_username;
  $getuser['password'] = isset($_POST['password'])?$_POST['password'] : '';
  $getuser['quest'] = isset($_POST['quest'])?$_POST['quest'] : '';
  if($getuser == NULL ){
      $getuser['quest'] = $die_frage;
  }
  $getuser['resp'] = isset($_POST['resp'])?$_POST['resp'] : $die_antwort;
  
  $result = update_user($getuser);
  redirect_to(url_for('/staff/users/index.php'));
  
  
}else{
    $getuser = find_user_by_id($id);

}
?>

<?php $page_title = 'Modifier User '; ?>
<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section" style="padding-top: 5%;">
    <div class="pageContent">
<?php
    $der_username = $getuser['username'];
    $die_antwort = $getuser['resp'];
    $die_frage = $getuser['quest'];
?>
        <h1 class="presentationTitle"><b><?php echo $page_title; ?></b></h1>
        <div class="container">

            <!--<div id="content" class="container">-->

            <a class="back-link" href="<?php echo url_for('/staff/users/index.php'); ?>">&laquo; Revenir vers la list</a>

            <h1></h1>
            <div style="padding-top: 2%;">
                <form action="<?php echo url_for('/staff/users/edit.php?id=' . h(u($id))); ?>" method="post" style="width: 100%;">


                    <!--Saisir le nom -->
                    <input type="text" maxlength="10" placeholder="Saisir le nom" name="username" value="<?php echo $getuser['username'];?>" required>
                    
                    
                    <!--Saisir le nom -->
                    <input type="text" maxlength="20" placeholder="Saisir le mot de pass" name="password" required>

                    <!--Saisir le Pays--> 
                    <!--<input type="text" maxlength="15" placeholder="Saisir le Pays" name="user_country" required>-->
                    <?php include(UTIL_PATH."/questionsecure.php"); ?>

                    <!--Saisir le nom de l'universite-->    
                    <input type="text" maxlength="30" placeholder="Saisir la Reponse" name="resp" required value="<?php echo $getuser['resp'];?>">
                    <!--<input type="checkbox"  checked="checked"> Remember me-->

                    <!--valider l'enregistrement-->
                    <button type="submit">Modifier</button>



                </form>
            </div>
        </div>
    </div>
</div>
<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
