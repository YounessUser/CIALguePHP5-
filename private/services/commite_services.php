<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function find_all_commite() {
    global $db;

    $sql = "SELECT * FROM commite ";
    $sql .= "ORDER BY id ASC";
    $result = mysqli_query($db, $sql);
    return $result;
  }
  
  
  
   function find_commite_by_id($id) {
    global $db;

    $sql = "SELECT * FROM commite ";
    $sql .= "WHERE id='" . db_escape($db,$id) . "'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $commite = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $commite; // returns an assoc. array
  }

  function insert_commite($commite) {
    global $db;

    $sql = "INSERT INTO commite ";
    $sql .= "(nom, type, country, university) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db,$commite['nom']) . "',";
    $sql .= "'" . db_escape($db,$commite['type']) . "',";
    $sql .= "'" . db_escape($db,$commite['country']) . "',";
    $sql .= "'" . db_escape($db,$commite['university']) . "'";
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

  function update_commite($commite) {
    global $db;

    $sql = "UPDATE commite SET ";
    $sql .= "nom ='" . db_escape($db,$commite['nom']) . "', ";
    $sql .= "country ='" . db_escape($db,$commite['country']) . "', ";
    $sql .= "type ='" . db_escape($db,$commite['type']) . "', ";
    $sql .= "university='" . db_escape($db,$commite['university']) . "' ";
    $sql .= "WHERE id='" . db_escape($db,$commite['id']) . "' ";
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

function delete_commite($id) {
    global $db;

    $sql = "DELETE FROM commite ";
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
  
  function quelleType($typeCommite) {
    if (isset($typeCommite)) {
        if ($typeCommite == 1) {
            return "Commite d'Organisation";
        } elseif ($typeCommite == 2) {
            return "Commite Scientifique";
        } else {
            return "";
        }
    } else {
        return "";
    }
}

 function find_commite_by_type($typeCommite) {
    global $db;

    $sql = "SELECT * FROM commite ";
    $sql .= "WHERE commite.type='".db_escape($db,$typeCommite)."' ";
    $sql .= "ORDER BY id ASC";
    $result = mysqli_query($db, $sql);
    return $result;
  }
  
  function show_up_commite($array_commit){
    $result = "";
    $devRes = count($array_commit,COUNT_NORMAL)/3;
    $devRes++;
    $cmp=0;
    //int j = 0;
    
    for($i = 1 ; $i <= $devRes ; $i++ ){
    
    $result .= "<div class=\"row\">";
    
    for ($j = 0 ; $j < 3 ; $j++){
  
    if( $cmp != count($array_commit,COUNT_NORMAL) ){
    $commite_item = $array_commit[$cmp];
    $result .= "<div class=\"col-sm-4\">".$commite_item['nom']."  (".$commite_item['country'].") </div>";
    $cmp++;
    }
 
   }
   
    
    $result .= "</div>";
    
  }
    return $result;
  }

?>
