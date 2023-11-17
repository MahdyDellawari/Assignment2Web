<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" media="all" href="style.css" />
</head>
<body>
  
<?php include 'header.php'; ?>

<div id="content">

  <a class="back-link" href="<?php echo 'index.php'; ?>"> Back to List</a>

  <div class="New Books">
    <h1>Create New Books</h1>

    <form action='create.php' method="POST">
    
      <dl>
        <dt>BookName</dt>
        <dd><input type="text" name="BookName" /></dd>
      </dl>
      <dl>
        <dt>AuthorName</dt>
        <dd><input type="text" name="BookAuthor"  /></dd>
          
      </dl>
      <dl>
        <dt>Edition</dt>
        <dd><input type="text" name="Edition"  /></dd>
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Create Books" />
      </div>
    </form>


  </div>

</div>

<?php include 'footer.php'; ?>
