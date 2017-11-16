<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function find_all_contactmes() {
    global $db;

    $sql = "SELECT * FROM contactme ";
    $sql .= "ORDER BY id ASC";
    $result = mysqli_query($db, $sql);
    return $result;
  }
  
  
  
function count_contactmes() {
    global $db;

    $sql = "SELECT COUNT(contactmename) FROM contactme ";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_row($result);
    mysqli_free_result($result);
    $count = $row[0];
    return $count;
  }


function find_contactme_by_id($id) {
    global $db;

    $sql = "SELECT * FROM contactme ";
    $sql .= "WHERE id='" . db_escape($db, $id) . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $admin = mysqli_fetch_assoc($result); // find first
    mysqli_free_result($result);
    return $admin; // returns an assoc. array
  }
  


function update_contactme($contactme) {
    global $db;

    $sql = "UPDATE contactme SET ";
    $sql .= "nom ='" . db_escape($db,$contactme['nom']) . "', ";
    $sql .= "sujet ='" . db_escape($db,$contactme['sujet']) . "', ";
    $sql .= "email ='" . db_escape($db,$contactme['email']) . "', ";
    $sql .= "emiteur ='" . db_escape($db,$contactme['emiteur']) . "', ";
    $sql .= "message='" . db_escape($db,$contactme['message']). "' ";
    $sql .= "WHERE id='" . db_escape($db,$contactme['id']) . "' ";
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


function insert_contactme($contactme) {
    global $db;

    $sql = "INSERT INTO contactme ";
    $sql .= "(nom, sujet, email, message, emiteur) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db,$contactme['nom']) . "',";
    $sql .= "'" . db_escape($db,$contactme['sujet']) . "',";
    $sql .= "'" . db_escape($db,$contactme['email']) . "',";
    $sql .= "'" . db_escape($db,$contactme['message']) . "',";
    $sql .= "'" . db_escape($db,$contactme['emiteur']) . "'";
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

function delete_contactme($id) {
    global $db;

    
    $sql = "DELETE FROM contactme ";
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

?>
