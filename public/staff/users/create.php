<?php

require_once('../../../private/initialize.php');

$errors = [];
 require_login();



if (is_post_request()) {

    // Handle form values sent by new.php

    $user = [];
    $user['username'] = isset($_POST['username'])?$_POST['username'] : '';
    $user['password'] = isset($_POST['password'])?$_POST['password'] : '';
    $user['quest'] = isset($_POST['quest'])?$_POST['quest'] : '';
    $user['resp'] = isset($_POST['resp'])?$_POST['resp'] : '';

    #$ar_title = filter_input(INPUT_POST, 'ar_title') ; // it doesn't work
  #$ar_text = filter_input(INPUT_POST, 'ar_text'); // it doesn't work
  
  //$article['visible'] = $_POST['visible'] ?? '';
if(find_admin_by_username($user['username']) != NULL){
    $errors = 'ce nom exist deja, veuillez choisir un autre !';
    redirect_to(url_for('/staff/users/new.php'));
}
    
    
  $result = insert_user($user);
  $new_id = mysqli_insert_id($db);
  #redirect_to(url_for('/staff/user/show.php?id=' . $new_id));
  redirect_to(url_for('/staff/users/index.php'));


} else {
  redirect_to(url_for('/staff/users/new.php'));
}

?>
