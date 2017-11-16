<?php
require_once('../../../private/initialize.php');



require_login();
if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/calendar/index.php'));
}
$id = $_GET['id'];

if(is_post_request()) {

  // Handle form values sent by new.php

  $getcalendar = [];
  $getcalendar['id'] = $id;
  $getcalendar['dateCalendar'] = isset($_POST['dateCalendar']) ?$_POST['dateCalendar']: '';
  $getcalendar['description'] = isset($_POST['description']) ?$_POST['description']: '';
  $getcalendar['langue'] = isset($_POST['langue']) ?$_POST['langue']: '';

  
  $result = update_calendar($getcalendar);
  redirect_to(url_for('/staff/calendar/index.php'));
  
  
}else{
    $getcalendar = find_calendar_by_id($id);
}
?>

<?php $page_title = 'Modifier le calendar'; ?>
<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section" style="padding-top: 5%;">
    <div class="pageContent">

        <h1 class="presentationTitle"><b><?php echo $page_title; ?></b></h1>
        <div class="container">

            <!--<div id="content" class="container">-->

            <a class="back-link" href="<?php echo url_for('/staff/calendar/index.php'); ?>">&laquo; Revenir vers la list</a>

            <h1></h1>
            <div style="padding-top: 2%;">
                <form action="<?php echo url_for('/staff/calendar/edit.php?id=' . h(u($id))); ?>" method="post" style="width: 100%;">


                    <label class="labelClass" for="date">Date</label>
                    <input id="date" type="date" maxlength="20"  name="dateCalendar" required value="<?php echo $getcalendar['dateCalendar'];?>">

                      <label class="labelClass" for="desc">Description</label>
                      <textarea id="desc" rows="4" cols="25" name="description" ><?php echo $getcalendar['description'];?></textarea>

                    <label class="labelClass" for="theme">langue</label>
                    <select id="theme" class="form-control selectForm" name="langue" required>
                        <option value="Fr" selected="">Francais</option> 
                        <option value="En" >Anglais</option> 
                    </select>
                    <br/>


                    <!--valider l'enregistrement-->
                    <button type="submit">Modifier</button>



                </form>
            </div>
        </div>
    </div>
</div>
<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

