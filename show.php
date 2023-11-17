<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
  

<?php
require_once('db_credentials.php');
require_once('database.php');
include "header.php" ;
$db = db_connect();
//access URL parameter
$id = $_GET['id'] ;


$sql = "SELECT * FROM Books WHERE id= '$id' ";
    
$result_set = mysqli_query($db, $sql);
    
$result = mysqli_fetch_assoc($result_set);

?>

<div id="content">

<a class="back-link"  href="index.php"> Back to List</a>

  <div class="page show">

  <h1> <?php echo $result['BookName']; ?></h1>

<div class="attributes">
  <dl>
    <dt>BookName</dt>
    <dd><?php echo $result['BookName']; ?></dd>
  </dl>
      <dl>
        <dt>AuthorName </dt>
        <dd><?php echo $result['AuthorName']; ?></dd>
      </dl>
      <dl>
        <dt>Edition</dt>
        <dd><?php echo $result['Edition']; ?></dd>
      </dl>
      <dl>
        
    </div>


  </div>

</div>

<?php include 'footer.php'; ?>
</body>
</html>
