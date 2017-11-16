<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function find_all_inscription() {
    global $db;

    $sql = "SELECT * FROM inscription ";
    $sql .= "ORDER BY id ASC";
    $result = mysqli_query($db, $sql);
    return $result;
  }
  
  
  function inscription_price($type){
      $today = date('Y-m-d');
     # $testoday = new DateTime('2018-02-19');
      $expireTime = new DateTime('2018-02-20');
      
      $price;
      
      if( $type == 2){
          $price = 200;
      }else{
          $price = 100;
      }
      
      if( $today > $expireTime ){
          if( $price == 200 ){
              $price += 50;
          }else{
              $price += 20;
          }
      }
          
    return $price;
      }
  
   function find_inscription_by_id($id) {
    global $db;

    $sql = "SELECT * FROM inscription ";
    $sql .= "WHERE id='" . db_escape($db,$id) . "'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $subject = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $subject; // returns an assoc. array
  }

  function insert_inscription($inscription) {
    global $db;

    $sql = "INSERT INTO inscription ";
    $sql .= "(firstname, lastname, gender, type,price, address, email,titre,theme,country) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db,$inscription['firstname']) . "',";
    $sql .= "'" . db_escape($db,$inscription['lastname']) . "',";
    $sql .= "'" . db_escape($db,$inscription['gender']) . "',";
    $sql .= "'" . db_escape($db,$inscription['type'] ). "',";
    $sql .= "'" . db_escape($db,$inscription['price'] ). "',";
    $sql .= "'" . db_escape($db,$inscription['address']) . "',";
    $sql .= "'" . db_escape($db,$inscription['email']) . "',";
    $sql .= "'" . db_escape($db,$inscription['titre']) . "',";
    $sql .= "'" . db_escape($db,$inscription['theme']) . "',";
    $sql .= "'" . db_escape($db,$inscription['country']) . "'";
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

  function update_inscription($inscription) {
    global $db;

    $sql = "UPDATE inscription SET ";
    $sql .= "firstname ='" . $inscription['firstname'] . "', ";
    $sql .= "lastname='" . $inscription['lastname'] . "', ";
    $sql .= "gender='" . $inscription['gender'] . "', ";
    $sql .= "address='" . $inscription['address'] . "', ";
    $sql .= "type='" . $inscription['type'] . "', ";
    $sql .= "price='" . $inscription['price'] . "', ";
    $sql .= "titre='" . $inscription['titre'] . "', ";
    $sql .= "theme='" . $inscription['theme'] . "', ";
    $sql .= "country='" . $inscription['country'] . "', ";
    $sql .= "email='" . $inscription['email'] . "' ";
    $sql .= "WHERE id='" . $inscription['id'] . "' ";
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

function delete_inscription($id) {
    global $db;

    $sql = "DELETE FROM inscription ";
    $sql .= "WHERE id='" . $id . "' ";
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
