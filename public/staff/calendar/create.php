<?php

require_once('../../../private/initialize.php');

if (is_post_request()) {

    // Handle form values sent by new.php

    $calendar = array();
    try {
        $array_test = array($_POST['dateCalendar'], $_POST['langue']);

        if (!is_any_null($array_test)) {
            $calendar_date = strval($_POST['dateCalendar']) != NULL ? strval($_POST['dateCalendar']) : '';
            $calendar_description = strval($_POST['description']) != NULL ? strval($_POST['description']) : ''; 
            $calendar_langue = strval($_POST['langue']) != NULL ? strval($_POST['langue']) : '';
            $calendar['dateCalendar'] = $calendar_date; //? $ar_title : '';
            $calendar['description'] = $calendar_description; // ? $ar_text : '';;
            $calendar['langue'] = $calendar_langue; // ? $ar_text : '';;
        }
    } catch (Exception $ex) {
        echo "<h1> {$ex} </h1>";
    }

    #$ar_title = filter_input(INPUT_POST, 'ar_title') ; // it doesn't work
  #$ar_text = filter_input(INPUT_POST, 'ar_text'); // it doesn't work
  
  //$article['visible'] = $_POST['visible'] ?? '';

  $result = insert_calendar($calendar);
  $new_id = mysqli_insert_id($db);
  #redirect_to(url_for('/staff/commite/show.php?id=' . $new_id));
  redirect_to(url_for('/staff/calendar/new.php'));


} else {
  redirect_to(url_for('/staff/calendar/new.php'));
}

?>
