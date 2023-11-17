<?php
require_once('db_credentials.php');
require_once('database.php');
$db = db_connect();
 
 
if(!isset($_GET['id'])) {
  header("Location:  index.php");
}
$id = $_GET['id'];
 
$page_title = 'Edit Book';
  // Handle form values sent by new.php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
 
  //access the Book information
  $BookName = $_POST['BookName'];
  $AuthorName= $_POST['AuthorName'] ;
  $Edition= $_POST['Edition'] ;
  //update the table with new information
  $sql="UPDATE Books set BookName = '$BookName' , AuthorName= '$AuthorName' , Edition= '$Edition' where id = '$id' ";
  $result = mysqli_query($db, $sql);
  //redirect to show page
    header("Location: show.php?id=  $id");
  }
  // display the Book information
  else {
$sql = "SELECT * FROM Books WHERE id= '$id' ";
   
$result_set = mysqli_query($db, $sql);
   
$result = mysqli_fetch_assoc($result_set);
  }
 
?>
 
<?php include 'header.php' ?>;
 
<div id="content">
 
  <a class="back-link" href="index.php"> Back to List</a>
 
  <div class="page edit">
    <h1>Edit Book</h1>
// from will post to the same page
    <form form action="<?php echo 'edit.php?id=' . $result['id']; ?>"  method="post">
      <dl>
        <dt> id</dt>
        <dd><input type="text" name="id" value="<?php echo $result['id']; ?>" /></dd>
        </dd>
      </dl>
      <dl>
        <dt>BookName</dt>
        <dd><input type="text" name="BookName" value="<?php echo $result['BookName']; ?>" /></dd>
      </dl>
      <dl>
        <dt>AuthorName</dt>
        <dd><input type="text" name="AuthorName" value="<?php echo $result['AuthorName']; ?>" /></dd>
 
        </dd>
      </dl>
      <dl>
        <dt>Edition</dt>
       
        <dd><input type="text" name="Edition" value="<?php echo $result['Edition']; ?>" /></dd>
 
        </dd>
      </dl>
     
      <div id="operations">
        <input type="submit" value="Edit Book" />
      </div>
    </form>
 
  </div>
 
</div>
 
<?php include 'footer.php'; ?>
 
