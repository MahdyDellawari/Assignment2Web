--
-- Database: `bookcataloging` and php web application user
CREATE DATABASE bookcataloging;
GRANT ALL PRIVILEGES ON bookcataloging.* TO 'Mohammad'@'localhost' WITH GRANT OPTION;

USE bookcataloging;
--
-- Table structure for table `Books`
--
 
CREATE TABLE IF NOT EXISTS `Books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BookName` varchar(100) NOT NULL,
  `AuthorName` varchar(255) NOT NULL,
  `Edition` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;
 
--
-- Dumping data for table `Books`
--
 
-- Remove existing records
DELETE FROM `Books`;

-- Insert new records
INSERT INTO `Books` (`id`, `BookName`, `AuthorName`, `Edition`) VALUES
(1, 'Merton Among Us: The Living Legacy of Thomas Merton', 'Kentucky College of Art and Design', 'First Edition'),
(2, 'Manuale di Fotografia - Occhio, Mente e Cuore', 'Marco Crupi', 'Second Edition'),
(3, 'Adobe for Fashion: Illustrator CS6', 'Robin Schneider', 'Revised Edition'),
(4, 'A Coloring Book for Big Kids - 3rd Edition', 'Phil Lewis', 'Third Edition'),
(5, 'On Being a Photographer', 'David Hurn', 'Classic Edition'),
(6, 'Jean-Luc No Revolution', 'David de la chaine Ganesh2', 'Fourth Edition'),
(7, 'El Sketchbook Lorenzo Deluxe Collection Part 3: 2014 - 2018', 'Lorenzo Etherington', 'Fifth Edition'),
(8, 'El Sketchbook Lorenzo Deluxe Collection Part 2: 2010 - 2014', 'Lorenzo Etherington', 'Revised Edition'),
(9, 'El Sketchbook Lorenzo Deluxe Collection: 2005 - 2010', 'Lorenzo Etherington', 'Second Edition'),
(10, 'The Bodacious Best Of Snuffy Smith: A Barney Google and Snuffy Smith Collection by John Rose', 'John Rose', 'First Edition'),
(11, 'Stephanie\'s Diary', 'Lloyd Williams', 'Third Edition'),
(12, 'Blood in the Studio', 'Jeffrey LaRocque', 'Fifth Edition'),
(13, 'Sintonizzati e Cammina', 'Maria Antonietta Turillo', 'Fourth Edition'),
(14, 'Corpse Cold: New American Folklore', 'Joseph Sullivan John Brhel', 'Second Edition'),
(15, 'Creating Samantha', 'Cheryl Lynn', 'First Edition'),
(16, 'OSRIC A5 (PDF)', 'Stewart Marshall', 'Revised Edition'),
(17, 'Quick Primer for Old School Gaming', 'Matthew Finch', 'Fourth Edition'),
(18, 'Swords & Wizardry Core Rules (pdf)', 'Matthew Finch', 'Classic Edition'),
(19, 'Monsters of Myth', 'The First Edition Society', 'Third Edition'),
(20, 'For Gold & Glory', 'Justen Brown', 'Second Edition'),
(21, 'My Wars', 'Richard Bushong', 'Fifth Edition'),
(22, 'In the Wake of Lewis and Clark: From the Mountains to the Sea', 'C. Mark Smith', 'Revised Edition'),
(23, 'The Civl War Era and the Lower Rio Grande Valley: A Brief History', 'Rolando Avila', 'Fourth Edition'),
(24, 'Rebelling Against the Corporate State', 'Community Environmental Legal Defense Fund (CELDF)', 'Third Edition'),
(25, 'Death Embraced: New Orleans Tombs and Burial Customs, Behind the Scenes Accounts of Decay, Love and Tradition', 'Mary LaCoste', 'First Edition');


has context menu
Compose
