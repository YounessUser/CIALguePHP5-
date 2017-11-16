<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



function url_for($script_path) {
    // add the leading '/' if not present
    if ($script_path[0] != '/') {
        $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
}

function u($string = "") {
    return urlencode($string);
}

function du($string = "") {
    return urldecode($string);
}

function raw_u($string = "") {
    return rawurlencode($string);
}

function h($string = "") {
    return htmlspecialchars($string);
}

function error_404() {
    header($_SERVER["SERVICE_PROTOCOL"] . " 404 Not Found ");
    exit();
}

function error_500() {
    header($_SERVER["SERVICE_PROTOCOL"] . " Internal Server Error ");
    exit();
}

function redirect_to($location = "") {
    header("Location: " . $location);
    exit;
}

function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request() {
    return $_SERVER['REQUEST_METHOD'] == 'GET';
}

function is_any_null($arrayTest) {

    if (empty($arrayTest)) {
        return TRUE;
    }

    for ($i = 0; $i < count($arrayTest, COUNT_NORMAL); $i++) {
        if ($arrayTest[$i] == NULL || $arrayTest[$i] == '') {
            return TRUE;
        }
    }
    return FALSE;
}

function display_errors($errors = array()) {
    $output = '';
    if (!empty($errors)) {
        $output .= "<div class=\"errors\" style=\"color:red\">";
        $output .= "s'il vous plait, essayer de resoudre ces problemes:";
        $output .= "<ul>";
        foreach ($errors as $error) {
            $output .= "<li>" . h($error) . "</li>";
        }
        $output .= "</ul>";
        $output .= "</div>";
    }
    return $output;
}

function sendEmail($sendmail) {
    try {

        $mail = new PHPMailer(); // create a new object
        $mail->IsSMTP();// enable SMTP
        $mail->CharSet = 'UTF-8';
        $mail->SMTPDebug = 3; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
        $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
            ));
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587; // or 587 465
        $mail->Username = E_MAIL;
        $mail->Password = PASSWORD_MAIL;

        $mail->Timeout = 1000;
        $mail->SMTPAutoTLS = TRUE;


//Recipients
        $mail->setFrom(E_MAIL, 'CongreAlgues2018');
        //$mail->addAddress($sendmail['mailfrom']);     // Add a recipient
        $mail->AddAddress($sendmail['mailfrom']);
        //$mail->addReplyTo($sendmail['mailfrom'], 'Reply');
        //$mail->addCC('melato@tinoza.org');
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Reply to' .' '. $sendmail['nom'];
        //$mail->Subject = 'Reply to';
        $mail->Body = $sendmail['reply'];
        //$mail->Body = "Test Test Test";
        
       
      if (!$mail->send()){
          echo 'Mailer Error: ' . $mail->ErrorInfo;
      }
 
 
    } catch (Exception $e) {

        echo "Mail Not Sent" . $mail->ErrorInfo;
    }
}

?>