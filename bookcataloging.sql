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
 
INSERT INTO `employees` (`id`, `name`, `address`, `salary`) VALUES
(1, 'Martin Blank', '25, Rue Lauriston, Paris', 8000);
has context menu
Compose