<?php include("index.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="all" href="style.css" />
    <title>Art & Photography Books</title>
</head>

<body>
<?php include 'header.php'; ?>
<h1>Art & Photography Books</h1>

<ul>
    <?php
    $books_data = array(
        array('Merton Among Us: The Living Legacy of Thomas Merton', 'By Kentucky College of Art and Design', 'First Edition', 'booksImages/arts/1.png'),
        array('Manuale di Fotografia - Occhio, Mente e Cuore', 'Marco Crupi', 'Second Edition', 'booksImages/arts/2.png'),
        array('Adobe for Fashion: Illustrator CS6', 'Robin Schneider', 'Revised Edition', 'booksImages/arts/3.png'),
        array('A Coloring Book for Big Kids - 3rd Edition', 'Phil Lewis', 'Third Edition', 'booksImages/arts/4.png'),
        array('On Being a Photographer', 'David Hurn', 'Classic Edition', 'booksImages/arts/5.png')
    );

    // Display all art and photography books
    $start_index = 0;  // Change this to the actual starting index of "Art & Photography" books
    $end_index = count($books_data) - 1;  // Change this to the actual ending index of "Art & Photography" books

    for ($i = $start_index; $i <= $end_index; $i++) {
        echo "<li>";

        // Check if the image path exists
        if (isset($books_data[$i][3]) && file_exists($books_data[$i][3])) {
            echo "<img src='{$books_data[$i][3]}' alt='{$books_data[$i][0]}'>";
        } else {
            echo "<p>Error: Image not found for '{$books_data[$i][0]}'</p>";
        }

        echo "<strong>{$books_data[$i][0]}</strong> - {$books_data[$i][1]}";
        echo "<br>";
        echo "<strong>Author:</strong> {$books_data[$i][2]}";
        echo "</li>";
    }
    ?>
</ul>
<?php include 'footer.php'; ?>
</body>

</html>
