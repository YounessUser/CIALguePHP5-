<?php
require_once('../../../private/initialize.php');
require_login();

#$commite_set = find_all_commite();
#mysqli_free_result($commite_set);
#$test = $_GET['test'] ?? '';
/*
  if($test == '404') {
  error_404();
  } elseif($test == '500') {
  error_500();
  } elseif($test == 'redirect') {
  redirect_to(url_for('/staff/subjects/index.php'));
  }
 * 
 */
?>

<?php $page_title = 'Cree un Nouveau calendar '; ?>
<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section" style="padding-top: 5%;">
    <div class="pageContent">

        <h1 class="presentationTitle"><b><?php echo $page_title; ?></b></h1>
        <div class="container">

            <!--<div id="content" class="container">-->

            <a class="back-link" href="<?php echo url_for('/staff/calendar/index.php'); ?>">&laquo; Revenir vers la list</a>

            <h1></h1>
            <div style="padding-top: 2%;">
                <form action="<?php echo url_for('/staff/calendar/create.php'); ?>" method="post" style="width: 100%;">

                    <label class="labelClass" for="date">Date</label>
                    <input id="date" type="date" maxlength="20"  name="dateCalendar" required>

                      <label class="labelClass" for="desc">Description</label>
                      <textarea id="desc" rows="4" cols="25" name="description">
                    </textarea>

                    <label class="labelClass" for="theme">langue</label>
                    <select id="theme" class="form-control selectForm" name="langue" required>
                        <option value="Fr" selected="">Francais</option> 
                        <option value="En" >Anglais</option> 
                    </select>
                    <br/>


                    <!--valider l'enregistrement-->
                    <button type="submit">Sauvegarder</button>



                </form>
            </div>
        </div>
    </div>
</div>
<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
