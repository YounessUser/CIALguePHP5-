<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function find_all_accueil() {
    global $db;

    $sql = "SELECT * FROM accueil ";
    $sql .= "ORDER BY id ASC";
    $result = mysqli_query($db, $sql);
    return $result;
  }
  
  
  
   function find_accueil_by_id($id) {
    global $db;

    $sql = "SELECT * FROM accueil ";
    $sql .= "WHERE id='" . db_escape($db,$id) . "'";

    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $accueil = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $accueil; // returns an assoc. array
  }

  function insert_accueil($accueil) {
    global $db;

    $sql = "INSERT INTO accueil ";
    $sql .= "(type, text, langue) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db,$accueil['type']) . "',";
    $sql .= "'" . db_escape($db,$accueil['text']) . "',";
    $sql .= "'" . db_escape($db,$accueil['langue']) . "'";
   
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

  function update_accueil($accueil) {
    global $db;

    $sql = "UPDATE accueil SET ";
    $sql .= "type ='" . db_escape($db,$accueil['type']) . "', ";
    $sql .= "text ='" . db_escape($db,utf8_encode( $accueil['text'])) . "', ";
    $sql .= "langue ='" . db_escape($db,$accueil['langue']) . "' ";
    $sql .= "WHERE id='" . db_escape($db,$accueil['id']) . "' ";
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

function delete_accueil($id) {
    global $db;

    $sql = "DELETE FROM accueil ";
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
  
  function find_accueil_by_type($typeAccueil,$langue) {
    global $db;

    $sql = "SELECT * FROM accueil ";
    $sql .= "WHERE accueil.type='".db_escape($db,$typeAccueil)."' ";
    $sql .= "AND accueil.langue='".db_escape($db,$langue)."' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
 
    confirm_result_set($result);
    $accueil = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return utf8_encode($accueil['text']);
  }
  
?>
