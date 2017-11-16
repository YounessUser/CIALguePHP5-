<!DOCTYPE html>

<?php require_once('../../../private/initialize.php');


$errors = [];

$username = '';
$password = '';

if(is_post_request()) {

    /************** reCaptcha ***************/
    // your secret key
$secret = "6LcJjDgUAAAAACe24fvSxB4l9wemWB7L-Qj-EoIt";
 
// empty response
$response = null;
 
// check secret key
$reCaptcha = new ReCaptcha($secret);

// if submitted check response
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

if ($response != null && $response->success){
    
  $username = isset($_POST['username'])?$_POST['username'] : '';

  // Validations
  if(is_blank($username)) {
    $errors[] = "Username cannot be blank.";
  }

  // if there were no errors, try to login
  if(empty($errors)) {
    // Using one variable ensures that msg is the same
    $login_failure_msg = "Username est incorrect";

    $admin = find_admin_by_username($username);
    if($admin) {
 
        redirect_to(url_for("/staff/forgotpassword/verifyquestion.php?forgotpassword=".$admin['id']));
    
    } else {
      // no username found
      $errors[] = $login_failure_msg;
    }

  }

} else {
$errors[] = 'Confirmez vous, que vous etes pas un Robot !';    
}
}

?>




<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include(SHARED_PATH.'/Header.php'); ?>
	
        <div class="section">
    <div class="pageContent">


        <h1 class="presentationTitle"><b>Vous avez Oublié votre mot de Passe ?</b></h1>
        <div class="container">	
        
<form action="<?php echo url_for('/staff/forgotpassword/index.php'); ?>" method="post">
    
  <div class="imgcontainer">
<!--    <img src="img_avatar2.png" alt="Avatar" class="avatar">-->
  </div>

  <div class="container">

      <?php echo display_errors($errors); ?>
      
    <!--Saisir le Username-->
    <label><b></b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    
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
        
<?php include(SHARED_PATH.'/Footer.php'); ?>
<?php include(SHARED_PATH.'/staff_footer.php'); ?>
        
   