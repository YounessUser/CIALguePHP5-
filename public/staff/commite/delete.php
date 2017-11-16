<?php

require_once('../../../private/initialize.php');
require_login(); 


if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/commite/index.php'));
}
$id = $_GET['id'];

$getcommite = find_commite_by_id($id);
if($getcommite['nom'] == NULL || $getcommite['country'] == '' || $getcommite['university'] == '' || $getcommite['type'] == ''){
    redirect_to(url_for('/staff/commite/index.php'));
}

if(is_post_request()) {

  $result = delete_commite($id);
  redirect_to(url_for('/staff/commite/index.php'));

} else {
  $getcommite = find_commite_by_id($id);
}

  

?>

<?php $page_title = 'Supprimer Commite'; ?>
<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section">
    <div class="pageContent">

    <form action="<?php echo url_for('/staff/commite/delete.php?id=' . h(u($getcommite['id']))); ?>" method="post">
<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/commite/index.php'); ?>">&laquo; Revenir vers la page precedente</a>

  <div class="subject delete">
      <br/>
    <h1>Supprimer Le Commite</h1>
    <br/>
    <h3>etes vous sure de supprimer ce commite ?</h3>
    <br/>
    <h2><mark>"<?php echo h($getcommite['nom']); ?>"</mark></h2>
    <!--<p class="item" ></p>-->
    <br/>
      <div id="operations">
          <button type="submit" name="commit" style="background-color: #f44336;" >"Oui, Supprimer"</button>
      </div>
    </form>
  </div>

</div>

        
        </div></div>
<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
