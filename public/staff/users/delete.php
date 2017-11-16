<?php

require_once('../../../private/initialize.php');
require_login(); 

if(count_users() <= '2'){
    redirect_to(url_for('/staff/users/index.php'));
}

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/users/index.php'));
}
$id = $_GET['id'];

$getuser = find_user_by_id($id);
if($getuser['username'] == NULL || $getuser['quest'] == NULL || $getuser['resp'] == NULL){
    redirect_to(url_for('/staff/users/index.php'));
}

if(is_post_request()) {

  $result = delete_user($id);
  redirect_to(url_for('/staff/users/index.php'));

} else {
  $getuser = find_user_by_id($id);
}

  

?>

<?php $page_title = 'Supprimer Administrateur'; ?>
<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section">
    <div class="pageContent">

    <form action="<?php echo url_for('/staff/users/delete.php?id=' . h(u($getuser['id']))); ?>" method="post">
<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/users/index.php'); ?>">&laquo; Revenir vers la page precedente</a>

  <div class="subject delete">
      <br/>
    <h1>Supprimer L'administrateur</h1>
    <br/>
    <h3>etes vous sure de supprimer ce Administrateur ?</h3>
    <br/>
    <h2><mark>"<?php echo h($getuser['username']); ?>"</mark></h2>
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
