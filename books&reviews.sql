-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2024 at 07:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30
use bookcart;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_info`
--

CREATE TABLE `books` (
  `bid` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `favourites` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `name`, `title`, `price`, `category`, `description`, `img`, `quantity`, `date_added`, `favourites`) VALUES
(1, 'To Kill a Mockingbird', 'Harper Lee', 15.99, 'Fiction', 'A timeless classic exploring racial injustice and moral growth in the American South through the eyes of a young girl named Scout Finch.', 'To Kill a Mockingbird.jpg', 2, '2024-02-13 17:55:22', 0),
(2, '1984', 'George Orwell', 11.99, 'Fiction', 'Orwells dystopian masterpiece depicting a totalitarian regime where individuality is suppressed and truth is manipulated.\n', '1984.jpg', 10, '2011-03-14 18:55:22', 0),
(3, 'The Great Gatsby', 'F. Scott Fitzgerald', 18.99, 'Fiction', 'Set in the Roaring Twenties, this novel unravels the glamorous yet hollow lives of the wealthy elite, exploring themes of love, wealth, and the American Dream.\n', 'The Great Gatsby.jpg', 15, '2011-03-01 17:57:22', 0),
(4, 'Harry Potter and the Sorcerers Stone', 'J.K. Rowling', 32.99, 'Fiction', 'The first book in the beloved Harry Potter series follows the young wizard\'s journey as he discovers his magical heritage and battles the dark wizard Voldemort.\n', 'Harry Potter and the Sorcerers Stone.jpg', 2, '2024-05-13 17:55:22', 0),
(5, 'The Catcher in the Rye', 'J.D. Salinger', 8.99, 'Fiction', 'A coming-of-age novel narrated by Holden Caulfield, a disillusioned teenager navigating the hypocrisy and phoniness of adult society.\n', 'The Catcher in the Rye.jpg', 6, '2011-07-18 10:55:20', 0),
(6, 'Dune', 'J.D. Salinger', 10.99, 'Science Fiction', 'A complex epic set in a distant future where noble houses battle for control over the desert planet Arrakis, the only source of a valuable spice called melange.\n', 'Dune.jpg', 20, '2024-01-10 09:54:06', 0),
(7, 'Foundation', 'Isaac Asimov', 19.99, 'Science Fiction', 'The first book in Asimov\'s Foundation series, following mathematician Hari Seldon\'s efforts to preserve knowledge and shorten the dark ages following the fall of the Galactic Empire.\n', 'Foundation.jpg', 2, '2011-01-07 06:25:22', 0),
(8, 'Neuromancer', 'William Gibsonr', 12.99, 'Science Fiction', 'A groundbreaking cyberpunk novel following the hacker Case as he navigates a dystopian future where artificial intelligence and virtual reality dominate.\n', 'Neuromancer.jpg', 19, '2018-03-13 03:55:22', 0),
(9, 'The Martian', 'Andy Weir', 16.99, 'Science Fiction', 'Astronaut Mark Watney is stranded on Mars and must rely on his ingenuity and resourcefulness to survive until rescue in this gripping tale of human perseverance.\n', 'The Martian.jpg', 3, '2020-03-19 07:32:22', 0),
(10, 'Snow Crash', 'Neal Stephenson', 11.95, 'Science Fiction', 'In a future America where governments have collapsed, the internet has evolved into the Metaverse, and a new drug called Snow Crash threatens to destabilize society.\n', 'Snow Crash.jpg', 5, '2021-07-13 11:55:22', 0),
(11, 'The Girl with the Dragon Tattoo', 'Stieg Larsson', 25.99, 'Thriller', 'Journalist Mikael Blomkvist and hacker Lisbeth Salander investigate the disappearance of a wealthy industrialist\'s niece, uncovering dark family secrets and corruption.\n', 'The Girl with the Dragon Tattoo.jpg', 10, '2020-08-05 07:44:20', 0),
(12, 'Gone Girl', 'Gillian Flynn', 17.99, 'Thriller', 'On their fifth wedding anniversary, Nick Dunne\'s wife, Amy, goes missing, and he becomes the prime suspect in this gripping tale of marriage, deception, and betrayal.\n', 'Gone Girl.jpg', 20, '2011-03-13 17:55:22', 0),
(13, 'The Da Vinci Code', 'Dan Brown', 19.99, 'Thriller', 'Professor Robert Langdon teams up with cryptologist Sophie Neveu to solve a murder mystery that leads them on a thrilling quest to uncover a secret society and a hidden religious truth.\n', 'The Da Vinci Code.jpg', 8, '2017-08-12 01:12:22', 0),
(14, 'The Silence of the Lambs', 'Thomas Harris', 17.99, 'Thriller', ' FBI trainee Clarice Starling seeks the help of incarcerated cannibalistic serial killer Hannibal Lecter to catch another serial killer known as Buffalo Bill.\n', 'The Silence of the Lambs.jpg', 9, '2020-07-02 13:27:22', 0),
(15, 'The Girl on the Train', 'Paula Hawkins', 10.79, 'Thriller', 'Rachel, an alcoholic divorcee, becomes entangled in a missing person investigation and discovers that things are not as they seem from her daily train rides.\n', 'The Girl on the Train.jpg', 12, '2022-08-04 13:05:22', 0);




CREATE TABLE `reviews` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(255) NOT NULL,
    contact VARCHAR(10) NOT NULL,
    review TEXT,
    rating INT
);