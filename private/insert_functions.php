<?php

function insert($first_name, $last_name, $email, $username) {
  global $db;
  $date = date("Y-m-d H:i:s");
  $sql = "INSERT INTO users (first_name, last_name, email, username, created_at)
          VALUES ('" . $first_name . "','" . $last_name . "','" . $email . "','" . $username . "','" . $date  . "')";
          error_log($sql);

  // For INSERT statments, $result is just true/false
  $result = db_query($db, $sql);
  if($result) {
    db_close($db);
    error_log('INSERTION success');
  } else {
    // The SQL INSERT statement failed.
    // Just show the error, not the form
    echo db_error($db);
    db_close($db);
    exit;
  }
}

?>
