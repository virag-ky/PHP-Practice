<?php

function db_connect() {
  $db = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  confirm_db_connect($db);
  return $db;
}

function confirm_db_connect($db) {
  if($db->connect_errno) {
    $msg = "Database connection failed: ";
    $msg .= $db->connect_errno;
    $msg .= " (" .$db->connect_errno . ")";
    exit($msg);
  }
}

function db_disconnect($db) {
  if(isset($db)) {
    $db->close();
  }
}

?>