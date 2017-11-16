<?php require_once('../../../private/initialize.php'); ?> 


<?php include(SHARED_PATH . '/Header.php'); 
$message_text = '';
$topic_text = '';
$color_text = '';

    $topic_text = 'Succeed';
    $message_text = 'Votre Inscription a été faite avec Success';
    $color_text = 'greenyellow';
//}else{
//    $topic_text = 'Failed';
//    $message_text = 'vous avez depasse le nombre maximal des Inscriptions';
//    $color_text = 'red';
//}

?>

<div class="section">
    <div class="pageContent">


        <h1 class="presentationTitle"><b><?php echo $topic_text; ?></b></h1>
        <div class="container">

            <h1> <?php echo $message_text;?> </h1>
           <button type="button" style="background-color: <?php echo $color_text; ?>; color: white;"><a class="action" style=" color: white;" href="<?php echo url_for('/index.php'); ?>">Retour vers la page d'accueil</a>
</button>
                   

            </div>
        </div>
    </div>


        <?php include(SHARED_PATH . './Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
