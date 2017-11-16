<!DOCTYPE html>

<?php

require_once('../../../private/initialize.php');
require_login();
if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/articles/index.php'));
}
$id = $_GET['id'];

if(is_post_request()) {

  // Handle form values sent by new.php

  $subject = [];
  $subject['id'] = $id;
  try{
      if(isset($_POST['ar_title']) && isset($_POST['ar_text'])){
  $subject['ar_title'] = strval($_POST['ar_title']);
  $subject['ar_text'] = strval($_POST['ar_text']);
  $subject['author'] = isset($_SESSION['username'])?$_SESSION['username'] : '';
  $result = update_article($subject);
      }
  redirect_to(url_for('/staff/articles/show.php?id=' . $id));

  } catch (Exception $ex) {

  }

} else {

  $subject = find_subject_by_id($id);

  $subject_set = find_all_articles();
  $subject_count = mysqli_num_rows($subject_set);
  mysqli_free_result($subject_set);

}

?>


<?php $page_title = 'Modifier Article'; ?>
<?php include(SHARED_PATH.'/Header_admin.php'); ?>

<div class="section">
    <div class="pageContent">


        <form action="<?php echo url_for('/staff/articles/edit.php?id=' . h(u($id))); ?>" method="post">
            <label><b></b></label>
            <input type="text" maxlength="100" placeholder="Titre" name="ar_title" value="<?php echo $subject['ar_title']; ?>" required>



            <?php include(PUBLIC_PATH . '/staff/articles/editorText.php'); ?>
            <br/>
            <div style="padding-top: 10px; ">
                <textarea id="wysihtml5-editor" name="ar_text" spellcheck="false" autofocus placeholder="Enter something ...">
                    <?php echo $subject['ar_text']; ?>
                </textarea>
            </div>



            <div class="container">
                <button class="submit" >Editer</button>

            </div>

        </form>
    </div></div>

        
        
<?php include(SHARED_PATH.'/Footer.php'); ?>
<?php include(SHARED_PATH.'/staff_footer.php'); ?>
        
   