<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="all" href="style.css" />
    <title>Comics</title>

</head>
<body>

<?php include 'header.php'; ?>
<h1>Comics</h1>

<ul>
    <?php
    $books_data = array(
        array('Jean-Luc No Revolution', 'David de la chaine Ganesh2', 'Fourth Edition', 'booksImages/comics/6.png'),
        array('El Sketchbook Lorenzo Deluxe Collection Part 3: 2014 - 2018', 'Lorenzo Etherington', 'Fifth Edition','booksImages/comics/7.png'),
        array('El Sketchbook Lorenzo Deluxe Collection Part 2: 2010 - 2014', 'Lorenzo Etherington', 'Revised Edition','booksImages/comics/8.png'),
        array('El Sketchbook Lorenzo Deluxe Collection: 2005 - 2010', 'Lorenzo Etherington', 'Second Edition','booksImages/comics/9.png'),
        array('The Bodacious Best Of Snuffy Smith: A Barney Google and Snuffy Smith Collection by John Rose', 'John Rose', 'First Edition','booksImages/comics/10.png')
    );

    // Display all comics
    $start_index = 0;  // Change this to the actual starting index of "Comics" books
    $end_index = count($books_data) - 1;  // Change this to the actual ending index of "Comics" books

    for ($i = $start_index; $i <= $end_index; $i++) {
        // Check if the image path exists
        if (isset($books_data[$i][3]) && file_exists($books_data[$i][3])) {
            echo "<li><img src='{$books_data[$i][3]}' alt='{$books_data[$i][0]}'></li>";
        } else {
            echo "<li>Error: Image not found for '{$books_data[$i][0]}'</li>";
        }

        echo "<li><strong>{$books_data[$i][0]}</strong></li>";  // Bold book name
        echo "<li>{$books_data[$i][1]}</li>";  // Author name
        echo "<li>{$books_data[$i][2]}</li>";  // Edition
        echo "<br>";
    }
    ?>
</ul>
<?php include 'footer.php'; ?>
</body>
</html>
