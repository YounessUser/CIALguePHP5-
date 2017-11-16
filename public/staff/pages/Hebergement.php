
<?php require_once('../../../private/initialize.php');?> 

<?php
// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = '65'; 

$subject = find_subject_by_id($id);

?>

<?php include(SHARED_PATH .'/Header.php'); ?>

    <div class="section">
        <div class="pageContent">

            <div class="presentation">
                    <h1 class="presentationTitle"><b><?php echo $subject['ar_title'];?></b></h1>
            </div>

            <center>
                <?php echo $subject['ar_text']; ?>
            </center>       
                



        </div>
    </div>

<!-- copyright -->
<div class="footer-w3layouts">
    <!--<div class="container">-->
    <div class="agile-copy">
        <p>© 2017 Travel Adventure. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
    </div>

    <div class="clearfix"></div>
    <!--</div>-->
</div>
<!-- copyright -->

</body>

</html>