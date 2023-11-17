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
 
INSERT INTO `Books` (`id`, `BookName`, `AuthorName`, `Edition`) VALUES
(1, 'The Great Gatsby', 'F. Scott Fitzgerald', 'First Edition'),
(2, 'To Kill a Mockingbird', 'Harper Lee', 'Second Edition'),
(3, '1984', 'George Orwell', 'Revised Edition'),
(4, 'The Catcher in the Rye', 'J.D. Salinger', 'Third Edition'),
(5, 'Pride and Prejudice', 'Jane Austen', 'Classic Edition');

has context menu
Compose
