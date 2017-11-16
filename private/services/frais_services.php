<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function find_all_frais() {
    global $db;

    $sql = "SELECT * FROM frais ";
    $sql .= "ORDER BY id ASC";
    $result = mysqli_query($db, $sql);
    return $result;
  }
  
  
  
   function find_frais_by_id($id) {
    global $db;

    $sql = "SELECT * FROM frais ";
    $sql .= "WHERE id='" . db_escape($db,$id) . "'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $frais = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $frais; // returns an assoc. array
  }

  function insert_frais($frais) {
    global $db;

    $sql = "INSERT INTO frais ";
    $sql .= "(type,dateLimite, state, prix,langue) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db,$frais['type']) . "',";
    $sql .= "'" . db_escape($db,$frais['dateLimite']) . "',";
    $sql .= "'" . db_escape($db,$frais['state']) . "',";
    $sql .= "'" . db_escape($db,$frais['prix']) . "',";
    $sql .= "'" . db_escape($db,$frais['langue']) . "'";
   
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

  function update_frais($frais) {
    global $db;

    $sql = "UPDATE frais SET ";
    $sql .= "type ='" . db_escape($db,$frais['type']) . "', ";
    $sql .= "dateLimite ='" . db_escape($db,$frais['dateLimite']) . "', ";
    $sql .= "state ='" . db_escape($db,$frais['state']) . "',";
    $sql .= "prix ='" . db_escape($db,$frais['prix']) . "',";
    $sql .= "langue ='" . db_escape($db,$frais['langue']) . "' ";
    $sql .= "WHERE id='" . db_escape($db,$frais['id']) . "' ";
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

function delete_frais($id) {
    global $db;

    $sql = "DELETE FROM frais ";
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
  
  function find_frais_by_lang($langue) {
    global $db;

    $sql = "SELECT * FROM frais ";
    $sql .= "WHERE frais.langue='".db_escape($db,$langue)."' ";
    $sql .= "ORDER BY id ASC";
    $result = mysqli_query($db, $sql);
    return $result;
  }
  
   function find_frais_by_state($etat,$type,$langue) {
    global $db;

    $sql = "SELECT * FROM frais ";
    $sql .= "WHERE frais.langue='".db_escape($db,$langue)."' ";
    $sql .= "AND frais.state='".db_escape($db,$etat)."' ";
    $sql .= "AND frais.type='".db_escape($db,$type)."' ";
   $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
  
    
    confirm_result_set($result);
    $res = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $res['prix'];
  }
  

  
?>
