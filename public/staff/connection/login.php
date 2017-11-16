<!DOCTYPE html>

<?php
require_once('../../../private/initialize.php');


$errors = [];
$username = '';
$password = '';

if (is_post_request()) {

    
    if(is_true_capatcha()){
    
     /************** reCaptcha ***************/
    
    
    $username = isset($_POST['username'])?$_POST['username'] : '';
    $password = isset($_POST['password'])?$_POST['password'] : '';

    // Validations
    if (is_blank($username)) {
        $errors[] = "Username cannot be blank.";
    }
    if (is_blank($password)) {
        $errors[] = "Password cannot be blank.";
    }
    
    if(string_has_sqlinclusion_of(h(u($username)))){
        $errors[] = "Username ou mot de passe sont incorrect!";
    }

    // if there were no errors, try to login
    if (empty($errors)) {
        // Using one variable ensures that msg is the same
        $login_failure_msg = "Log in n'est pas correct.";

        $admin = find_admin_by_username($username);
        if ($admin) {

            if (password_verify($password, $admin['hashed_password'])) {
                // password matches
                log_in_admin($admin);
                redirect_to(url_for('/staff/inscription/index.php'));
            } else {
                // username found, but password does not match
                $errors[] = $login_failure_msg;
            }
        } else {
            // no username found
            $errors[] = $login_failure_msg;
        }
    }
}else{
    $errors[] = 'Confirmer que vous n\'etes pas un robot !! ';
}
}
?>




<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include(SHARED_PATH . '/Header.php'); ?>
<div class="section">
    <div class="pageContent">


        <h1 class="presentationTitle"><b>Connection</b></h1>
        <!--<div class="container">-->	


            <form action="<?php echo url_for('/staff/connection/login.php'); ?>" method="post">

                <div class="imgcontainer">
              <!--    <img src="img_avatar2.png" alt="Avatar" class="avatar">-->
                </div>

                <div class="container">
                    <a class="back-link" href="<?php echo url_for('/staff/forgotpassword/index.php'); ?>">J'ai oublie le mot de passe</a>

                        <?php echo display_errors($errors); ?>

                    <br>
                    <br>
                    <!--Saisir le Username-->
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>


                    <!--Saisir le Password-->
                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password"  required>


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
                    <button type="submit">Login</button>
                </div>

                
            </form>

        <!--</div>-->
    </div></div>
<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
        
