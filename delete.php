<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" media="all" href="staff.css" />
</head>
<body>
<?php
require_once('db_credentials.php');
require_once('database.php');
include "header.php" ;
$db = db_connect();

if(!isset($_GET['id'])) {
  header("Location:  index.php");
}
$id = $_GET['id'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  $sql = "DELETE FROM Books WHERE id ='$id'";
    $result = mysqli_query($db, $sql);

  header("Location: index.php");

} 
else 
{
  $sql = "SELECT * FROM Books WHERE id= '$id' ";
    
$result_set = mysqli_query($db, $sql);
    
    $result = mysqli_fetch_assoc($result_set);
    
}

?>

<?php $page_title = 'Delete Page'; ?>


<div id="content">

  <a class="back-link" href="index.php">&laquo; Back to List</a>

  <div class="page delete">
    <h1>Delete Page</h1>
    <p>Are you sure you want to delete this Book?</p>
    <p class="item"><?php echo $result['name']; ?></p>

    <form form action="<?php echo 'delete.php?id=' . $result['id']; ?>"  method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete Book" />
      </div>
    </form>
  </div>
  <?php include 'footer.php'; ?>
</div>


