<?php
require_once('../../../private/initialize.php');
require_login();
?>

<?php
// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = isset($_GET['id']) ? $_GET['id'] : '1';

$subject = find_subject_by_id($id);
?>

<?php $page_title = 'Show Subject'; ?>
<?php include(SHARED_PATH . '/Header_admin.php'); ?>

<div class="section">
    <div class="pageContent">

        <div class="presentation">
            <h1 class="presentationTitle"><b><?php echo $subject['ar_title']; ?></b></h1>
        </div>

        <center>
            <?php echo $subject['ar_text']; ?>
        </center>      


    </div>
</div>

<?php include(SHARED_PATH . './Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
