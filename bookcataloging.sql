--
-- Database: `demo` and php web application user
CREATE DATABASE demo;
GRANT USAGE ON *.* TO 'appuser'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON demo.* TO 'appuser'@'localhost';
FLUSH PRIVILEGES;
 
USE demo;
--
-- Table structure for table `employees`
--
 
CREATE TABLE IF NOT EXISTS `bookcataloging` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `authorName` varchar(255) NOT NULL,
  `edition` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;
 
--
-- Dumping data for table `employees`
--
 
INSERT INTO `BookCataloging` (`Id`, `BookName`, `AuthorName`, `Edition`) VALUES
(1, 'The Great Gatsby', 'F. Scott Fitzgerald', 'First Edition'),
(2, 'To Kill a Mockingbird', 'Harper Lee', 'Second Edition'),
(3, '1984', 'George Orwell', 'Revised Edition'),
(4, 'The Catcher in the Rye', 'J.D. Salinger', 'Third Edition'),
(5, 'Pride and Prejudice', 'Jane Austen', 'Classic Edition');

has context menu
Compose
