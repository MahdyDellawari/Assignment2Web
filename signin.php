<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" media="all" href="style.css" />
</head>
<body>
<?php include 'header.php'; ?>
    <div id="form">
        <h1> Login Form </h1>
        <form name="form" method="POST">
            <label>Username: </label>
            <input type="text" id="user" name="user"> </br></br>
            <label>Password: </label>
            <input type="password" id="pass" name="pass"></br></br>
            <input type="submit" id="btn" value="Login" name="submit"/>
    </form> 
    </div>
<?php include 'footer.php'; ?>
</body>
</html>