<?php

require_once('../../../private/initialize.php');
require_login(); 


if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/contactme/index.php'));
}
$id = $_GET['id'];

$getcontactme = find_contactme_by_id($id);
if($getcontactme['nom'] == NULL || $getcontactme['message'] == NULL || $getcontactme['email'] == NULL || $getcontactme['sujet'] == NULL){
    redirect_to(url_for('/staff/contactme/index.php'));
}

if(is_post_request()) {

  $result = delete_contactme($id);
  redirect_to(url_for('/staff/contactme/index.php'));

} else {
  $getcontactme = find_contactme_by_id($id);
}

  

?>

<?php $page_title = 'Supprimer Message'; ?>
<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section">
    <div class="pageContent">

    <form action="<?php echo url_for('/staff/contactme/delete.php?id=' . h(u($getcontactme['id']))); ?>" method="post">
<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/contactme/index.php'); ?>">&laquo; Revenir vers la page precedente</a>

  <div class="subject delete">
      <br/>
    <h1>Supprimer Le Message ?</h1>
    <br/>
    <h3>etes vous sure de supprimer ce Message ?</h3>
    <br/>
    <h2><mark>"<?php echo h($getcontactme['nom']).' '.h($getcontactme['sujet']); ?>"</mark></h2>
    <!--<p class="item" ></p>-->
    <br/>
      <div id="operations">
          <button type="submit"  style="background-color: #f44336;" >"Oui, Supprimer"</button>
      </div>
    </form>
  </div>

</div>

        
        </div></div>
<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
