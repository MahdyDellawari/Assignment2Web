<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Books</title>
</head>
<body>

<h1>History Books</h1>

<ul>
    <?php
    $books_data = array(
        array('My Wars', 'Richard Bushong', 'Fifth Edition', 'booksImages/history/21.png'),
        array('In the Wake of Lewis and Clark: From the Mountains to the Sea', 'C. Mark Smith', 'Revised Edition', 'booksImages/history/22.png'),
        array('The Civl War Era and the Lower Rio Grande Valley: A Brief History', 'Rolando Avila', 'Fourth Edition', 'booksImages/history/23.png'),
        array('Rebelling Against the Corporate State', 'Community Environmental Legal Defense Fund (CELDF)', 'Third Edition', 'booksImages/history/24.png'),
        array('Death Embraced: New Orleans Tombs and Burial Customs, Behind the Scenes Accounts of Decay, Love and Tradition', 'Mary LaCoste', 'First Edition', 'booksImages/history/25.png')
    );

    $start_index = 0;  // Change this to the actual starting index of "History" books
    $end_index = count($books_data) - 1;  // Change this to the actual ending index of "History" books

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

