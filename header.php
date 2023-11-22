<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bookscataloging System</title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo 'style.css'; ?>" />
</head>

<body>
    <header>
        <h1>Book Cataloging</h1>
        <form action="search.php" method="get">
            <label for="search">Search:</label>
            <input type="text" id="search" name="search" placeholder="Search books...">
            <button type="submit">Go</button>
        </form>
        <a href="signin.php">Login Here</a>
    </header>

    <navigation>
        <ul>
            <li><a href="<?php echo 'index.php'; ?>">Menu</a></li>
            <li><a href="<?php echo 'signup.php'; ?>">Sign up</a></li>
            <li><a href="<?php echo 'signin.php'; ?>">Sign in</a></li>
            <li><a href="<?php echo 'genre.php'; ?>">Genre</a></li>
        </ul>
    </navigation>
</body>

</html>