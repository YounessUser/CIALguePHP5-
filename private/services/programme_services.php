<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function find_all_programme() {
    global $db;

    $sql = "SELECT * FROM programme ";
    $sql .= "ORDER BY id ASC";
    $result = mysqli_query($db, $sql);
    return $result;
  }
  
  
  
   function find_programme_by_id($id) {
    global $db;

    $sql = "SELECT * FROM programme ";
    $sql .= "WHERE id='" . db_escape($db,$id) . "'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $programme = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $programme; // returns an assoc. array
  }

  function insert_programme($programme) {
    global $db;

    $sql = "INSERT INTO programme ";
    $sql .= "(titre, description, langue) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db,$programme['titre']) . "',";
    $sql .= "'" . db_escape($db,$programme['description']) . "',";
    $sql .= "'" . db_escape($db,$programme['langue']) . "'";
   
    $sql .= ")";
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

  function update_programme($programme) {
    global $db;

    $sql = "UPDATE programme SET ";
    $sql .= "titre ='" . db_escape($db,$programme['titre']) . "', ";
    $sql .= "description ='" . db_escape($db,$programme['description']) . "', ";
    $sql .= "langue ='" . db_escape($db,$programme['langue']) . "' ";
    $sql .= "WHERE id='" . db_escape($db,$programme['id']) . "' ";
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

function delete_programme($id) {
    global $db;

    $sql = "DELETE FROM programme ";
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
  
  function find_programme_by_lang($langue) {
    global $db;

    $sql = "SELECT * FROM programme ";
    $sql .= "WHERE programme.langue='".db_escape($db,$langue)."' ";
    $sql .= "ORDER BY id ASC";
    $result = mysqli_query($db, $sql);
    return $result;
  }
  
?>
