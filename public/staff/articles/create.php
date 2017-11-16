<?php

require_once('../../../private/initialize.php');
require_login(); 

if (is_post_request()) {

    // Handle form values sent by new.php

    $article = [];
    try {
        #$array_test = array($_POST['ar_title'], $_POST['ar_text']);
        $array_test = array($_POST['ar_title']);

        #if(isset($_POST['ar_title']) && isset($_POST['ar_text'])){
        if (!is_any_null($array_test)) {
            $ar_title = strval($_POST['ar_title']) != NULL ? strval($_POST['ar_title']) : ''; #it doesn't work
            #$ar_text = strval($_POST['ar_text']) != NULL ? strval($_POST['ar_text']) : ''; #it doesn't work
            $article['ar_title'] = $ar_title; //? $ar_title : '';
            #$article['ar_text'] = $ar_text; // ? $ar_text : '';;
           
            
            
            
            
            
            
            ##### FILE #####
            $target_upload = PUBLIC_PATH . "/uploads/".basename($_FILES["file"]["name"]);
            $target_dir = url_for("/uploads/");
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            $uploadOk = 1;
            $FileType = pathinfo($target_file, PATHINFO_EXTENSION);
            $article['ar_path'] = u($target_file);

            $file_result = "";

            
            ### ERROR CHECKING ###
            if ($_FILES["file"]["error"] > 0) {

                $file_result .= "No File Uploaded or Invalid File";
                $file_result .= " Error Code : " . $_FILES["file"]["error"] . "<br/>";
            } else {

                $file_result .= "Upload: " . $_FILES["file"]["name"] . "<br/>" .
                        "Type: " . $_FILES["file"]["type"] . "<br/>" .
                        "Size: " . $_FILES["file"]["size"] . "<br/>" .
                        "Temp file: " . $_FILES["file"]["tmp_name"] . "<br/>";

                /*
                  $target_dir = PUBLIC_PATH."/uploads/";
                  $target_file = $target_dir . basename($_FILES["file"]["name"]);
                 * works
                 *          */
                move_uploaded_file($_FILES["file"]["tmp_name"], $target_upload);


                $file_result .= "File Upload SuccessFul!!";
            }
            ### ERROR CHECKING ###

            
            
            
            
            
            ### READING FILE ###
            $tmp = explode('.', $article['ar_path']);
            $ext = end($tmp);

            //if its docx file
            if ($ext == 'docx') {
               # $article['ar_text'] = extracttext(url_for("/uploads/". basename($_FILES["file"]["name"])));
                $article['ar_text'] = extracttext($target_upload);
            } elseif ($ext == 'doc') {
                #$article['ar_text'] = readDoc($target_file);
               #$article['ar_text'] = read_doc($target_upload);
               #$article['ar_text'] = file_get_contents($target_upload);
            }

            ##### FILE #####
        }
    } catch (Exception $ex) {
        echo "<h1> {$ex} </h1>";
    }

    #$ar_title = filter_input(INPUT_POST, 'ar_title') ; // it doesn't work
    #$ar_text = filter_input(INPUT_POST, 'ar_text'); // it doesn't work
    //$article['visible'] = $_POST['visible'] ?? '';

    $article['author'] = isset($_SESSION['username'])?$_SESSION['username'] : '';
    $result = insert_subject($article);
    $new_id = mysqli_insert_id($db);
    //redirect_to(url_for('/staff/articles/show.php?id=' . $new_id));
    redirect_to(url_for('/staff/articles/index.php'));
} else {
    redirect_to(url_for('/staff/articles/new.php'));
}
?>
