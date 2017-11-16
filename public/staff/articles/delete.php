<?php

require_once('../../../private/initialize.php');
require_login(); 


if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/articles/index.php'));
}
$id = $_GET['id'];

$subject = find_subject_by_id($id);
if($subject['ar_title'] == NULL || $subject['ar_title'] == ''){
    redirect_to(url_for('/staff/articles/index.php'));
}

if(is_post_request()) {

  $result = delete_article($id);
  redirect_to(url_for('/staff/articles/index.php'));

} else {
  $subject = find_subject_by_id($id);
}

  

?>

<?php $page_title = 'Supprimer Article'; ?>
<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section">
    <div class="pageContent">

    <form action="<?php echo url_for('/staff/articles/delete.php?id=' . h(u($subject['id']))); ?>" method="post">
<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/articles/index.php'); ?>">&laquo; Revenir vers la page precedente</a>

  <div class="subject delete">
      <br/>
    <h1>Supprimer L'article</h1>
    <br/>
    <h3>etes vous sure de supprimer cette article ?</h3>
    <br/>
    <h2><mark>"<?php echo h($subject['ar_title']); ?>"</mark></h2>
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
