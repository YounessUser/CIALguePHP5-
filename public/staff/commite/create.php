<?php

require_once('../../../private/initialize.php');

if (is_post_request()) {

    // Handle form values sent by new.php

    $commite = [];
    try {
        $array_test = array($_POST['commite_nom'], $_POST['country'],$_POST['commite_univ'],$_POST['commite_type']);

        if (!is_any_null($array_test)) {
            $commite_nom = strval($_POST['commite_nom']) != NULL ? strval($_POST['commite_nom']) : '';
            $commite_country = strval($_POST['country']) != NULL ? strval($_POST['country']) : ''; 
            $commite_univ = strval($_POST['commite_univ']) != NULL ? strval($_POST['commite_univ']) : ''; 
            $commite_type = intval($_POST['commite_type']) != NULL ? intval($_POST['commite_type']) : ''; 
            $commite['nom'] = $commite_nom; //? $ar_title : '';
            $commite['country'] = $commite_country; // ? $ar_text : '';;
            $commite['university'] = $commite_univ; // ? $ar_text : '';;
            $commite['type'] = $commite_type; // ? $ar_text : '';;
        }
    } catch (Exception $ex) {
        echo "<h1> {$ex} </h1>";
    }

    #$ar_title = filter_input(INPUT_POST, 'ar_title') ; // it doesn't work
  #$ar_text = filter_input(INPUT_POST, 'ar_text'); // it doesn't work
  
  //$article['visible'] = $_POST['visible'] ?? '';

  $result = insert_commite($commite);
  $new_id = mysqli_insert_id($db);
  #redirect_to(url_for('/staff/commite/show.php?id=' . $new_id));
  redirect_to(url_for('/staff/commite/new.php'));


} else {
  redirect_to(url_for('/staff/commite/new.php'));
}

?>
