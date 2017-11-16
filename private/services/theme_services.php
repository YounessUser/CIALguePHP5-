<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function find_all_theme() {
    global $db;

    $sql = "SELECT * FROM theme ";
    $sql .= "ORDER BY id ASC";
    $result = mysqli_query($db, $sql);
    return $result;
  }
  
  
  
   function find_theme_by_id($id) {
    global $db;

    $sql = "SELECT * FROM theme ";
    $sql .= "WHERE id='" . db_escape($db,$id) . "'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $theme = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $theme; // returns an assoc. array
  }

  function insert_theme($theme) {
    global $db;

    $sql = "INSERT INTO theme ";
    $sql .= "(titre, description, langue) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db,$theme['titre']) . "',";
    $sql .= "'" . db_escape($db,$theme['description']) . "',";
    $sql .= "'" . db_escape($db,$theme['langue']) . "'";
    $sql .= ")";
    echo '<h1>'.$sql.'</h1>';
    $result = mysqli_query($db, $sql);
    // For INSERT statements, $result is true/false
    
    if($result) {
      return true;
    } else {
      // INSERT failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }

  function update_theme($theme) {
    global $db;

    $sql = "UPDATE theme SET ";
    $sql .= "titre ='" . db_escape($db,$theme['titre']) . "', ";
    $sql .= "description ='" . db_escape($db,$theme['description']) . "', ";
    $sql .= "langue ='" . db_escape($db,$theme['langue']) . "' ";
    $sql .= "WHERE id='" . db_escape($db,$theme['id']) . "' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);
    // For UPDATE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // UPDATE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }

  }



function delete_theme($id) {
    global $db;

    $sql = "DELETE FROM theme ";
    $sql .= "WHERE id='" . db_escape($db,$id ). "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);

    // For DELETE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // DELETE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }
  
    function find_theme_by_lang($langue) {
    global $db;

    $sql = "SELECT * FROM theme ";
    $sql .= "WHERE theme.langue='".db_escape($db,$langue)."' ORDER BY id ASC";
    $result = mysqli_query($db, $sql);
 
    return $result;
  }

?>
