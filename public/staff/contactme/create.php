<?php

require_once('../../../private/initialize.php');

if (is_post_request()) {
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

    // Handle form values sent by new.php

    $contactme = [];
    try {
        $array_test = array($_POST['name'], $_POST['subject'],$_POST['email'],$_POST['message']);

        if (!is_any_null($array_test)) {
            $nom = strval($_POST['name']) != NULL ? strval($_POST['name']) : '';
            $sujet = strval($_POST['subject']) != NULL ? strval($_POST['subject']) : '';
            $email = strval($_POST['email']) != NULL ? strval($_POST['email']) : '';
            $message = strval($_POST['message']) != NULL ? strval($_POST['message']) : '';
            $contactme['nom'] = $nom; 
            $contactme['sujet'] = $sujet; 
            $contactme['email'] = $email; 
            $contactme['message'] = $message; 
            $contactme['emiteur'] = 'Personne';
            
            $sendmail = [];
            $sendmail['mailfrom'] = $email;
            $sendmail['nom'] = $nom;
            $sendmail['reply'] = 'Thank you for contacting us ! we will be replying you as soon as possible';
            sendEmail($sendmail);
            
        }
    } catch (Exception $ex) {
        echo "<h1> {$ex} </h1>";
    }

  $result = insert_contactme($contactme);
  $new_id = mysqli_insert_id($db);
  redirect_to(url_for('/staff/pages/Contact.php'));


} else {
  redirect_to(url_for('/staff/pages/Contact.php'));
}
}else {
  redirect_to(url_for('/staff/pages/Contact.php'));
}
?>
