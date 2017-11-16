<?php

require_once('../../../private/initialize.php');

if (is_post_request()) {

    // Handle form values sent by new.php

    $programme = array();
    try {
        $array_test = array($_POST['pro_titre'], $_POST['pro_langue']);

        if (!is_any_null($array_test)) {
            $programme_titre = strval($_POST['pro_titre']) != NULL ? strval($_POST['pro_titre']) : '';
            $programme_description = strval($_POST['pro_description']) != NULL ? strval($_POST['pro_description']) : ''; 
            $programme_langue = strval($_POST['pro_langue']) != NULL ? strval($_POST['pro_langue']) : '';
            $programme['titre'] = $programme_titre; //? $ar_title : '';
            $programme['description'] = $programme_description; // ? $ar_text : '';;
            $programme['langue'] = $programme_langue; // ? $ar_text : '';;
        }
    } catch (Exception $ex) {
        echo "<h1> {$ex} </h1>";
    }

    

  $result = insert_programme($programme);
  $new_id = mysqli_insert_id($db);
  #redirect_to(url_for('/staff/commite/show.php?id=' . $new_id));
  redirect_to(url_for('/staff/programme/new.php'));


} else {
  redirect_to(url_for('/staff/programme/new.php'));
}

?>
