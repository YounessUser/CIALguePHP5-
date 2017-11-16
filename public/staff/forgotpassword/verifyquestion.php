<?php
require_once('../../../private/initialize.php');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$errors = [];
?>
<?php
$admin;
$question;
$response;
$getresponse;
$id;
if (isset($_GET['forgotpassword'])) {
    $id = $_GET['forgotpassword'];
    $admin = find_user_by_id($id);
    $question = $admin['quest'];
    $response = $admin['resp'];
}



if (is_post_request()) {
   if(is_true_capatcha()){
    if (isset($_POST['resp'])) {
        $getresponse = $_POST['resp'];
        //if ($admin != NULL) {

            if (is_response_correct($id,$getresponse) != NULL) {
                $_SESSION['correct'] = $id;
                redirect_to(url_for('/staff/forgotpassword/verify.php'));
            }else{
                $errors = 'Reponse incorrect';
                redirect_to(url_for('/staff/forgotpassword/verifyquestion.php?forgotpassword='.$id));
            }
        
    }
}else{
    $errors = 'Confirmez vous, que vous n\'etes pas un Robot !!';
}
}
?>

<?php include(SHARED_PATH . '/Header.php'); ?>

<div class="section">
    <div class="pageContent">


        <h1 class="presentationTitle"><b>Verification par Question</b></h1>
        <div class="container">	

<form action="<?php echo url_for('/staff/forgotpassword/verifyquestion.php?forgotpassword='.$id); ?>" method="post">

    <div class="imgcontainer">
  <!--    <img src="img_avatar2.png" alt="Avatar" class="avatar">-->
    </div>

    <div class="container">

        <?php echo display_errors($errors); ?>

        <!--Saisir le Username-->
        <label><b></b></label>
        <input type="text" disabled="" value="<?php echo $question; ?>" name="quest" required>


        <!--Saisir le Password-->
        <label><b></b></label>
        <input type="text" placeholder="Entrer la Reponse" name="resp" required>

        
            
<div class="g-recaptcha" data-sitekey="6LcJjDgUAAAAAKF5QQbpz2E-nIuWa98tTv0i92mC"></div>
                <noscript>
  <div>
    <div style="width: 302px; height: 422px; position: relative;">
      <div style="width: 302px; height: 422px; position: absolute;">
        <iframe src="https://www.google.com/recaptcha/api/fallback?k=6LcJjDgUAAAAAKF5QQbpz2E-nIuWa98tTv0i92mC"
                frameborder="0" scrolling="no"
                style="width: 302px; height:422px; border-style: none;">
        </iframe>
      </div>
    </div>
    <div style="width: 300px; height: 60px; border-style: none;
                   bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px;
                   background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px;">
      <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                   class="g-recaptcha-response"
                   style="width: 250px; height: 40px; border: 1px solid #c1c1c1;
                          margin: 10px 25px; padding: 0px; resize: none;" >
      </textarea>
    </div>
  </div>
</noscript>

        <!--Valider la Connection-->
        <button type="submit">Verifier</button>
    </div>

    <div class="container" style="background-color:#f1f1f1;">
        <!--    <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>-->
    </div>
</form>

            
        </div>
        </div>
        </div>

<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
