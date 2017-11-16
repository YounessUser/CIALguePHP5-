<?php

require_once('../../../private/initialize.php');
require_login(); 


if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/programme/index.php'));
}
$id = $_GET['id'];

$getprogramme = find_programme_by_id($id);
if($getprogramme['titre'] == NULL ||  $getprogramme['langue'] == '' ){
    redirect_to(url_for('/staff/programme/index.php'));
}

if(is_post_request()) {

  $result = delete_programme($id);
  redirect_to(url_for('/staff/programme/index.php'));

} else {
  $getprogramme = find_programme_by_id($id);
}

  

?>

<?php $page_title = 'Supprimer programme'; ?>
<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section">
    <div class="pageContent">

    <form action="<?php echo url_for('/staff/programme/delete.php?id=' . h(u($getprogramme['id']))); ?>" method="post">
<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/programme/index.php'); ?>">&laquo; Revenir vers la page precedente</a>

  <div class="subject delete">
      <br/>
    <h1>Supprimer Le Calendar</h1>
    <br/>
    <h3>etes vous sure  ?</h3>
    <br/>
    <h2><mark>"<?php echo h($getprogramme['titre']); ?>"</mark></h2>
    <!--<p class="item" ></p>-->
    <br/>
      <div id="operations">
          <button type="submit" name="programme" style="background-color: #f44336;" >"Oui, Supprimer"</button>
      </div>
    </form>
  </div>

</div>

        
        </div></div>
<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
