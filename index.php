
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" media="all" href="style.css" />
  <title>PHP_DB</title>
</head>
<body>
  

<?php include ("header.php") ?>

<?php
require_once('db_credentials.php');
require_once('database.php');

$db = db_connect();
//$page_title = 'Books'; ?>


<?php 

  $sql = "SELECT * FROM Books ";
  $sql .= "ORDER BY Edition ASC";
  //echo $sql;
  $result_set = mysqli_query($db,$sql);
  
  ?>

<div id="content">
  <div class="subjects listing">
    <h1>Books</h1>

    <div class="actions">
      <a class="action" href="new.php">Create New Books</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>Id</th>
        <th>BookName</th>
        <th>AuthorName</th>
  	    <th>Edition</th>
  	    <th>&nbsp</th>
  	    <th>&nbsp</th>
        <th>&nbsp</th>
  	  </tr>

      <?php while($results = mysqli_fetch_assoc($result_set)) { ?>
        <tr>
          <td><?php echo $results['id']; ?></td>
          <td><?php echo $results['BookName']; ?></td>
          <td><?php echo $results['AuthorName'] ; ?></td>
    	    <td><?php echo $results['Edition']; ?></td>
          <td><a class="action" href="<?php echo"show.php?id=" . $results['id']; ?>">View</a></td>
          <td><a class="action" href="<?php echo "edit.php?id=" . $results['Id']; ?>">Edit</a></td>
          <td><a class="action" href=<?php echo "delete.php?id=" . $results['id']; ?>">delete</a></td>
          
    	  </tr>
      <?php } ?>
  	</table>
    <br>
    <br>
  

  <?php include("footer.php"); ?>

</body>
</html>
