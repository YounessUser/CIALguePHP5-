<?php require_once('../../../private/initialize.php'); ?>

<?php
// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = isset($_GET['id']) ? $_GET['id'] : '1'; 

$commite = find_commite_by_id($id);
 require_login();

?>

<?php $page_title = 'Show Commite'; ?>
<?php include(SHARED_PATH . '/Header_admin.php'); ?>

<div class="section">
    <div class="pageContent">
        <div id="content">

            <a class="back-link" href="<?php echo url_for('/staff/commite/index.php'); ?>">&laquo; Back to List</a>

            <div class="subject show">

                <h1>Title: <?php echo h($commite['nom']); ?></h1>

                <h3><?php echo h($commite['country']); ?></h3> 
                <h3><?php echo h($commite['university']); ?></h3> 
                <h3><?php echo h(quelleType($commite['type'])); ?></h3> 

            </div>
        </div>
    </div></div>


<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>