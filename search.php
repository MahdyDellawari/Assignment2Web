<!DOCTYPE html>
<html lang='en'>
    <head>
        <title> search </title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="box">
            <input type="text" placeholder="Search...">
            $books_data = array(
  array('Merton Among Us: The Living Legacy of Thomas Merton', 'By Kentucky College of Art and Design', 'First Edition', 'booksImages/arts/1.png'),
  array('Manuale di Fotografia - Occhio, Mente e Cuore', 'Marco Crupi', 'Second Edition', 'booksImages/arts/2.png'),
  array('Adobe for Fashion: Illustrator CS6', 'Robin Schneider', 'Revised Edition', 'booksImages/arts/3.png'),
  array('A Coloring Book for Big Kids - 3rd Edition', 'Phil Lewis', 'Third Edition', 'booksImages/arts/4.png'),
  array('On Being a Photographer', 'David Hurn', 'Classic Edition', 'booksImages/arts/5.png'),
  array('Jean-Luc No Revolution', 'David de la chaine Ganesh2', 'Fourth Edition', 'booksImages/comics/6.png'),
  array('El Sketchbook Lorenzo Deluxe Collection Part 3: 2014 - 2018', 'Lorenzo Etherington', 'Fifth Edition','booksImages/comics/7.png'),
  array('El Sketchbook Lorenzo Deluxe Collection Part 2: 2010 - 2014', 'Lorenzo Etherington', 'Revised Edition','booksImages/comics/8.png'),
  array('El Sketchbook Lorenzo Deluxe Collection: 2005 - 2010', 'Lorenzo Etherington', 'Second Edition','booksImages/comics/9.png'),
  array('The Bodacious Best Of Snuffy Smith: A Barney Google and Snuffy Smith Collection by John Rose', 'John Rose', 'First Edition','booksImages/comics/10.png'),
  array('Stephanie\'s Diary', 'Lloyd Williams', 'Third Edition','booksImages/fiction/11.png'),
  array('Blood in the Studio', 'Jeffrey LaRocque', 'Fifth Edition','booksImages/fiction/12.png'),
  array('Sintonizzati e Cammina', 'Maria Antonietta Turillo', 'Fourth Edition','booksImages/fiction/13.png'),
  array('Corpse Cold: New American Folklore', 'Joseph Sullivan John Brhel', 'Second Edition','booksImages/fiction/14.png'),
  array('Creating Samantha', 'Cheryl Lynn', 'First Edition','booksImages/fiction/15.png'),
  array('OSRIC A5 (PDF)', 'Stewart Marshall', 'Revised Edition','booksImages/games/16.png'),
  array('Quick Primer for Old School Gaming', 'Matthew Finch', 'Fourth Edition','booksImages/games/17.png'),
  array('Swords & Wizardry Core Rules (pdf)', 'Matthew Finch', 'Classic Edition','booksImages/games/18.png'),
  array('Monsters of Myth', 'The First Edition Society', 'Third Edition','booksImages/games/19.png'),
  array('For Gold & Glory', 'Justen Brown', 'Second Edition','booksImages/games/20.png'),
  array('My Wars', 'Richard Bushong', 'Fifth Edition','booksImages/history/21.png'),
  array('In the Wake of Lewis and Clark: From the Mountains to the Sea', 'C. Mark Smith', 'Revised Edition','booksImages/history/22.png'),
  array('The Civl War Era and the Lower Rio Grande Valley: A Brief History', 'Rolando Avila', 'Fourth Edition','booksImages/history/23.png'),
  array('Rebelling Against the Corporate State', 'Community Environmental Legal Defense Fund (CELDF)', 'Third Edition','booksImages/history/24.png'),
  array('Death Embraced: New Orleans Tombs and Burial Customs, Behind the Scenes Accounts of Decay, Love and Tradition', 'Mary LaCoste', 'First Edition','booksImages/history/25.png')
);

    // Uncomment the following line to insert the books into the database
    // insertBooks($books_data);

    $sql = "SELECT * FROM Books ";
    $sql .= "ORDER BY Edition ASC";
    $result_set = mysqli_query($db, $sql);
    ?>

    <div id="content">
        <div class="subjects listing">
            <h1>Books</h1>

            <div class="actions">
                <a class="action" href="new.php">Create New Books</a>
            </div>

            <?php $counter = 0; ?>
            <div class="books-container">
                <?php while ($results = mysqli_fetch_assoc($result_set)) { ?>
                    <div class="book">
                        <img src="<?php echo $books_data[$counter][3]; ?>" alt="<?php echo $results['BookName']; ?>">
                        <p><strong><?php echo $results['BookName']; ?></strong></p>
                        <p><?php echo $results['AuthorName']; ?></p>
                        <p><?php echo $results['Edition']; ?></p>
                        <div class="actions">
                            <a class="action" href="<?php echo "show.php?id=" . $results['id']; ?>">View</a>
                            <a class="action" href="<?php echo "edit.php?id=" . $results['id']; ?>">Edit</a>
                            <a class="action" href="<?php echo "delete.php?id=" . $results['id']; ?>">Delete</a>
                        </div>
                    </div>
                    <?php $counter++; ?>
                <?php } ?>
            </div>
        </div>
    </div>
    </body>
</html>