<?php
require_once('../../../private/initialize.php');
require_login();


if (!isset($_GET['id'])) {
    redirect_to(url_for('/staff/theme/index.php'));
}
$id = $_GET['id'];

$gettheme = find_theme_by_id($id);
if ($gettheme['titre'] == '' ||  $gettheme['langue'] == '' ) {
    redirect_to(url_for('/staff/theme/index.php'));
}

if (is_post_request()) {

    $result = delete_theme($id);
    redirect_to(url_for('/staff/theme/index.php'));
} else {
    $gettheme = find_theme_by_id($id);
}
?>

<?php $page_title = 'Supprimer Commite'; ?>
<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section">
    <div class="pageContent">

        <form action="<?php echo url_for('/staff/theme/delete.php?id=' . h(u($gettheme['id']))); ?>" method="post">
            <div id="content">

                <a class="back-link" href="<?php echo url_for('/staff/theme/index.php'); ?>">&laquo; Revenir vers la page precedente</a>

                <div class="subject delete">
                    <br/>
                    <h1>Supprimer Le Theme</h1>
                    <br/>
                    <h3>etes vous sure de supprimer ce theme ?</h3>
                    <br/>
                    <h2><mark>"<?php echo h($gettheme['titre']); ?>"</mark></h2>
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
