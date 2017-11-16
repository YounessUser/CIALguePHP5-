<?php require_once('../../../private/initialize.php'); 
 $errors = [];

?>


<?php
// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = isset($_GET['id']) ? $_GET['id'] : '1'; 

$contactme = find_contactme_by_id($id);
 require_login();
 
 
 
 if(is_post_request()){
     if(is_true_capatcha()){
     $reply_message;
     $to_email;
     if(isset($_POST['repondre'])){
         $reply_message = strval($_POST['repondre']) != NULL ? strval($_POST['repondre']) : '';
         $to_email = $contactme['email'];
         
         $sendmail = [];
         $sendmail['mailfrom'] = $to_email;
         $sendmail['nom'] = $contactme['nom'];
         $sendmail['reply'] = $reply_message;
         try {
         sendEmail($sendmail);

         $contactme['emiteur'] = $_SESSION['username'];
         $result = update_contactme($contactme);
           redirect_to(url_for('/staff/contactme/index.php'));

         } catch (Exception $ex) {
         //   $errors[] = 'Confirmez Vous, que vous etes pas un Robot!!';
             } 
         
     }
}else{
 $errors[] = 'Confirmez vous, que vous etes un Robot !!';   
}
 }

?>

<?php $page_title = 'Repondre '.$contactme['nom']; ?>
<?php include(SHARED_PATH . '/Header_admin.php'); ?>

<div class="section">
    <div class="pageContent">
        <div id="content">


            <div class="subject show">

                <h3>Nom: <?php echo h($contactme['nom']); ?></h3>

                <h3>Email : <?php echo h($contactme['email']); ?></h3> 
                <h3>Sujet : <?php echo h($contactme['sujet']); ?></h3> 
                <h3>Message : <?php echo h($contactme['message']); ?></h3> 

            </div>
            
            
            <div style="padding-top: 2%;">
                 <?php echo display_errors($errors); ?>
                <form action="<?php echo url_for('/staff/contactme/reply.php?id=' . h(u($id))); ?>" method="post" style="width: 100%;">


            <?php include(PUBLIC_PATH . '/staff/articles/editorText.php'); ?>
            <br/>
            <div style="padding-top: 10px; ">
                <textarea id="wysihtml5-editor" name="repondre" spellcheck="false" autofocus placeholder="">
                </textarea>
            </div>
                    <br/>

            <?php include(SHARED_PATH . '/capatcha.php'); ?>

                    <!--valider l'enregistrement-->
                    <button type="submit">Envoyer</button>



                </form>
        </div>
    </div></div>


<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
