<?php include("index.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiction Books</title>
</head>

<body>

<h1>Fiction Books</h1>

<ul>
    <?php
    // Display five fiction books
    for ($i = 11; $i <= 15; $i++) {
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
        echo "<br>";
        // Omit the Edition if you don't want to display it
        // echo "<strong>Edition:</strong> {$books_data[$i][3]}";
        echo "</li>";
    }
    ?>
</ul>

</body>

</html>
