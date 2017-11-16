<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function find_all_articles() {
    global $db;

    $sql = "SELECT * FROM article ";
    $sql .= "ORDER BY id ASC";
    $result = mysqli_query($db, $sql);
    return $result;
  }
  
  
  
   function find_subject_by_id($id) {
    global $db;

    $sql = "SELECT * FROM article ";
    $sql .= "WHERE id='" .db_escape($db, $id) . "'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $subject = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $subject; // returns an assoc. array
  }

  function insert_subject($article) {
    global $db;

    $sql = "INSERT INTO article ";
    $sql .= "(ar_title, ar_path,author, ar_text) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db,$article['ar_title']) . "',";
    $sql .= "'" . db_escape($db,$article['ar_path']) . "',";
    $sql .= "'" . db_escape($db,$article['author']) . "',";
    $sql .= "'" . db_escape($db,$article['ar_text']) . "'";
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

  function update_article($article) {
    global $db;

    $sql = "UPDATE article SET ";
    $sql .= "ar_title='" . db_escape($db,$article['ar_title']) . "', ";
    $sql .= "ar_path='" . db_escape($db,$article['ar_path']) . "', ";
    $sql .= "author='" . db_escape($db,$article['author']) . "', ";
    $sql .= "ar_text='" . db_escape($db,$article['ar_text']) . "' ";
    $sql .= "WHERE id='" . db_escape($db,$article['id']) . "' ";
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

 /* function find_all_pages() {
    global $db;

    $sql = "SELECT * FROM pages ";
    $sql .= "ORDER BY subject_id ASC, position ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
  }
*/

function delete_article($id) {
    global $db;

    $sql = "DELETE FROM article ";
    $sql .= "WHERE id='" . db_escape($db,$id) . "' ";
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
