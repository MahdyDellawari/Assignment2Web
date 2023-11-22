<?php
require_once('db_credentials.php');
require_once('database.php');
include "header.php";
$db = db_connect();

// Handle form values sent by new.php
// Handle form values sent by new.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $BookName = $_POST['BookName'];
  $AuthorName = $_POST['AuthorName']; // Corrected variable name
  $Edition = $_POST['Edition'];

  $sql = "INSERT INTO Books (BookName, AuthorName, Edition) VALUES ('$BookName','$AuthorName','$Edition')";
  $result = mysqli_query($db, $sql);

  // For INSERT statements, $result is true/false
  $id = mysqli_insert_id($db);

  // Redirect to show page
  header("Location: show.php?id=$id");
} else {
  header("Location: new.php");
}

?>
