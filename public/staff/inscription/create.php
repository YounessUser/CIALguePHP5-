<?php

require_once('../../../private/initialize.php');

if (is_post_request()) {
    
  /*  if(!isset($_SESSION['register_counter'])){
    $_SESSION['register_counter'] = 0;
    } else {
    $_SESSION['register_counter']++;
    }
*/
    // Handle form values sent by new.php

    $inscription = [];
    
    try {
        $array_test = array($_POST['firstname'],$_POST['lastname'], $_POST['email'],$_POST['gender'],$_POST['address'],$_POST['type'],$_POST['titre'],$_POST['theme'],$_POST['country']);

        if (!is_any_null($array_test)) {
            $firstname = $_POST['firstname'] != NULL ? strval($_POST['firstname']) : '';
            $lastname = $_POST['lastname'] != NULL ? strval($_POST['lastname']) : '';
            $address = $_POST['address'] != NULL ? strval($_POST['address']) : '';
            $titre = $_POST['titre'] != NULL ? strval($_POST['titre']) : '';
            $theme = $_POST['theme'] != NULL ? strval($_POST['theme']) : '';
            $country = $_POST['country'] != NULL ? strval($_POST['country']) : '';
            $email = $_POST['email'] != NULL ? strval($_POST['email']) : '';
            $type = $_POST['type'] != NULL ? intval($_POST['type']) : ''; 
            $gender = $_POST['gender'] != NULL ? intval($_POST['gender']) : ''; 
            $inscription['firstname'] = h(u($firstname));
            $inscription['lastname'] = h(u($lastname));
            if(has_valid_email_format($email)){
            $inscription['email'] = $email;
            }else{
                $errors[] ='Email incorrect!';
                redirect_to(url_for('/staff/pages/Inscription.php'));
            }
            $inscription['gender'] = h(u($gender));
            $inscription['address'] = h(u($address));
            $inscription['type'] = h(u($type));
            $inscription['price'] = inscription_price(h(u($type)));
            $inscription['titre'] = h(u($titre));
            $inscription['theme'] = h(u($theme));
            $inscription['country'] = h(u($country));
        }
    } catch (Exception $ex) {
        echo "<h1> {$ex} </h1>";
    }

    #$ar_title = filter_input(INPUT_POST, 'ar_title') ; // it doesn't work
  #$ar_text = filter_input(INPUT_POST, 'ar_text'); // it doesn't work
  
  //$article['visible'] = $_POST['visible'] ?? '';

    
 if(is_true_capatcha()) {
    //redirect_to(url_for('/staff/pages/Inscription.php'));
    // Security Verification
    $boolean_sql = FALSE;
  foreach($inscription as $key => $value){
      if(string_has_sqlinclusion_of($value)){
          $boolean_sql = TRUE;
      }
  }
  if(!$boolean_sql){
      
    foreach($inscription as $key => $value){
    $inscription[$key] = str_replace("+", " ", $value);
  }  
//  
//  if($_SESSION['register_counter'] <= 5){
//  }

  $result = insert_inscription($inscription);
  $new_id = mysqli_insert_id($db);

  #redirect_to(url_for('/staff/inscription/show.php?id=' . $new_id));
  redirect_to(url_for('/staff/inscription/message.php'));
  }else{
    redirect_to(url_for('/staff/pages/Inscription.php'));
    //$errors[]='Fill in the Blank Again with correct answers form!';
  }

  }else{
   redirect_to(url_for('/staff/pages/Inscription.php'));
  }
    /************** reCaptcha ***************/
    

} else {
  $errors[] = "SVP ! Remplissez les vides ! ";
  redirect_to(url_for('/staff/pages/Inscription.php'));
}

?>
