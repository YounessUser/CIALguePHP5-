<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function find_all_users() {
    global $db;

    $sql = "SELECT * FROM user ";
    $sql .= "ORDER BY id ASC";
    $result = mysqli_query($db, $sql);
    return $result;
  }
  
function count_users() {
    global $db;

    $sql = "SELECT COUNT(username) FROM user ";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_row($result);
    mysqli_free_result($result);
    $count = $row[0];
    return $count;
  }

function find_admin_by_username($username) {
    global $db;

    $sql = "SELECT * FROM user ";
    $sql .= "WHERE username='" . db_escape($db, $username) . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $admin = mysqli_fetch_assoc($result); // find first
    mysqli_free_result($result);
    return $admin; // returns an assoc. array
  }

function find_user_by_id($id) {
    global $db;

    $sql = "SELECT * FROM user ";
    $sql .= "WHERE id='" . db_escape($db, $id) . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $admin = mysqli_fetch_assoc($result); // find first
    mysqli_free_result($result);
    return $admin; // returns an assoc. array
  }
  
function is_response_correct($id,$response) {
    global $db;

    $sql = "SELECT * FROM user ";
    $sql .= "WHERE id='" . db_escape($db, $id) . "' ";
    $sql .= "AND resp='" . db_escape($db, $response) . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $admin = mysqli_fetch_assoc($result); // find first
    mysqli_free_result($result);
    return $admin; // returns an assoc. array
  }

//function password_verify_check($string, $hashedPassword){
//    $hashed_string = password_hash($string, PASSWORD_BCRYPT);
//    return $hashedPassword === $hashed_string;
//}


function update_user($user) {
    global $db;

    $sql = "UPDATE user SET ";
    $sql .= "username ='" . db_escape($db,$user['username']) . "', ";
    $sql .= "quest ='" . db_escape($db,$user['quest']) . "', ";
    $sql .= "resp ='" . db_escape($db,$user['resp']) . "', ";
    $sql .= "hashed_password='" . password_hash(db_escape($db,$user['password']), PASSWORD_BCRYPT) . "' ";
    $sql .= "WHERE id='" . db_escape($db,$user['id']) . "' ";
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


function insert_user($user) {
    global $db;

    $sql = "INSERT INTO user ";
    $sql .= "(username, hashed_password, quest, resp) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db,$user['username']) . "',";
    $sql .= "'" . password_hash(db_escape($db,$user['password']), PASSWORD_BCRYPT) . "',";
    $sql .= "'" . db_escape($db,$user['quest']) . "',";
    $sql .= "'" . db_escape($db,$user['resp']) . "'";
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

function delete_user($id) {
    global $db;

    if(count_users() > '2'){
    $sql = "DELETE FROM user ";
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
  }

?>
