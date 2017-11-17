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

                   <?php include(SHARED_PATH . '/capatcha.php'); ?>
                    <!--Valider la Connection-->
                    <button type="submit">Login</button>
                </div>

                
            </form>

        <!--</div>-->
    </div></div>
<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
        
