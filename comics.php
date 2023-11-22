<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics</title>
</head>
<body>

<h1>Comics</h1>

<ul>
    <?php
    $start_index = 5;  // Change this to the actual starting index of "Comics" books
    $end_index = 9;    // Change this to the actual ending index of "Comics" books

    for ($i = $start_index; $i <= $end_index; $i++) {
        echo "<li><strong>{$books_data[$i][0]}:</strong> {$books_data[$i][1]}</li>";
        echo "<li>Author: {$books_data[$i][2]}</li>";
        echo "<li>Edition: {$books_data[$i][3]}</li>";
        echo "<li><img src='{$books_data[$i][3]}' alt='{$books_data[$i][0]}'></li>";  // Display the image
        echo "<br>";
    }
    ?>
</ul>

</body>
</html>
