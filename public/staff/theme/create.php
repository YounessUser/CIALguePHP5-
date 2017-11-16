<?php

require_once('../../../private/initialize.php');

if (is_post_request()) {

    // Handle form values sent by new.php

    $theme = [];
    try {
        $array_test = array($_POST['theme_titre'], $_POST['theme_langue']);

        if (!is_any_null($array_test)) {
            $theme_titre = strval($_POST['theme_titre']) != NULL ? strval($_POST['theme_titre']) : '';
            $theme_description = strval( $_POST['theme_description']) != NULL ? strval( $_POST['theme_description']) : ''; 
            $theme_langue = strval($_POST['theme_langue']) != NULL ? strval($_POST['theme_langue']) : '';
            $theme['titre'] = $theme_titre; //? $ar_title : '';
            $theme['description'] = $theme_description; // ? $ar_text : '';;
            $theme['langue'] = $theme_langue; // ? $ar_text : '';;
        }

    } catch (Exception $ex) {
        echo "<h1> {$ex} </h1>";
    }


  $result = insert_theme($theme);
  $new_id = mysqli_insert_id($db);
  #redirect_to(url_for('/staff/theme/show.php?id=' . $new_id));
  redirect_to(url_for('/staff/theme/new.php'));


} else {
  redirect_to(url_for('/staff/theme/new.php'));
}

?>
