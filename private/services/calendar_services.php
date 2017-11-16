<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function find_all_calendar() {
    global $db;

    $sql = "SELECT * FROM calendar ";
    $sql .= "ORDER BY id ASC";
    $result = mysqli_query($db, $sql);
    return $result;
  }
  
  
  
   function find_calendar_by_id($id) {
    global $db;

    $sql = "SELECT * FROM calendar ";
    $sql .= "WHERE id='" . db_escape($db,$id) . "'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $calendar = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $calendar; // returns an assoc. array
  }

  function insert_calendar($calendar) {
    global $db;

    $sql = "INSERT INTO calendar ";
    $sql .= "(dateCalendar, description, langue) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db,$calendar['dateCalendar']) . "',";
    $sql .= "'" . db_escape($db,$calendar['description']) . "',";
    $sql .= "'" . db_escape($db,$calendar['langue']) . "'";
   
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

  function update_calendar($calendar) {
    global $db;

    $sql = "UPDATE calendar SET ";
    $sql .= "dateCalendar ='" . db_escape($db,$calendar['dateCalendar']) . "', ";
    $sql .= "description ='" . db_escape($db,$calendar['description']) . "', ";
    $sql .= "langue ='" . db_escape($db,$calendar['langue']) . "' ";
    $sql .= "WHERE id='" . db_escape($db,$calendar['id']) . "' ";
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


function delete_calendar($id) {
    global $db;

    $sql = "DELETE FROM calendar ";
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
  
   function find_calendar_by_langue($langue) {
    global $db;

    $sql = "SELECT * FROM calendar ";
    $sql .= "WHERE calendar.langue='".db_escape($db,$langue)."' ORDER BY id ASC";
    $result = mysqli_query($db, $sql);
 
    return $result;
  }
?>
