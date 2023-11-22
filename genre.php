<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Catalog</title>
</head>
<body>

<label for="genre">Genre:</label>
<select id="genre" name="genre" onchange="redirectToGenre()">
    <option value="Art & Photography">Art & Photography</option>
    <option value="Comics">Comics</option>
    <option value="Fiction">Fiction</option>
    <option value="Games">Games</option>
    <option value="History">History</option>
</select>

<script>
function redirectToGenre() {
    var selectedGenre = document.getElementById("genre").value;
    var url;

    switch (selectedGenre) {
        case "Art & Photography":
            url = "Art&Photography.php";
            break;
        case "Comics":
            url = "comics.php";
            break;
        case "Fiction":
            url = "fiction.php";
            break;
        case "Games":
            url = "games.php";
            break;
        case "History":
            url = "history.php";
            break;
        default:
            // Handle default case or add more genres as needed
            break;
    }

    if (url) {
        window.location.href = url;
    }
}
</script>

</body>
</html>
