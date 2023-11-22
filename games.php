<?php include("index.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
</head>

<body>

<h1>Games</h1>

<ul>
    <?php
    // Display all games
    for ($i = 16; $i <= 20; $i++) {
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

</body>

</html>
