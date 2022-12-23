-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2022 at 05:07 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(1) NOT NULL,
  `admin_email` varchar(60) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `admin_email`, `admin_name`, `admin_pass`) VALUES
(1, 'admin@gmail.com', 'Nayeem', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(255) NOT NULL,
  `cat_name` text NOT NULL,
  `cat_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_des`) VALUES
(4, 'Sports', 'Here we post about Sports.'),
(5, 'Nature', 'Here we post about nature.'),
(8, 'Programming', 'Here we post about Programming.');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_content` longtext NOT NULL,
  `post_img` varchar(255) NOT NULL,
  `post_cat` int(11) NOT NULL,
  `post_author` varchar(60) NOT NULL,
  `post_comment_count` int(255) NOT NULL,
  `post_summary` varchar(255) NOT NULL,
  `post_tag` varchar(255) NOT NULL,
  `post_status` tinyint(3) NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_title`, `post_content`, `post_img`, `post_cat`, `post_author`, `post_comment_count`, `post_summary`, `post_tag`, `post_status`, `post_date`) VALUES
(9, '5 key drivers of the nature crisis', 'The biggest driver of biodiversity loss is how people use the land and sea. This includes the conversion of land covers such as forests, wetlands and other natural habitats for agricultural and urban uses.\r\n\r\nSince 1990, around 420 million hectares of forest have been lost through conversion to other land uses. Agricultural expansion continues to be the main driver of deforestation, forest degradation and forest biodiversity loss.\r\n\r\nThe global food system is the primary driver of biodiversity loss, with agriculture alone being the identified threat of more than 85 per cent of the 28,000 species at risk of extinction.\r\n\r\nHarvesting materials such as minerals from the ocean floor and the building of towns and cities also impact the natural environment and biodiversity.\r\n\r\nReconsidering the way people grow and consume food is one way of reducing the pressure on ecosystems. Degraded and disused farmland can be ideal for restoration, which can support protecting and restoring critical ecosystems such as forests, peatlands and wetlands.', 'Deforestation.jpg', 5, 'Nayeem', 3, 'This week, world leaders are gathered in Montreal to strike a global accord to halt and reverse nature loss.', 'Nature, World', 1, '2022-12-08'),
(12, 'COP15: Biodiversity is the web of life that connects us all', 'Biological diversity is the variety of life on Earth and the natural patterns it forms. \r\n\r\nBiodiversity around the world, from forests to oceans, animal species and tropical plants is currently threatened by an unprecedented loss caused by human activity.\r\n\r\nThe scientific community has repeatedly sounded the alarm on the triple planetary crisis of climate change, nature and biodiversity loss, and pollution and waste. \r\n\r\nThe United Nations Biodiversity Conference (COP15) commences on 7 December 2022 in Montreal, Canada , and will run until 19 December 2022. COP15 focuses on the living world through the Convention on Biological Diversity (CBD), a treaty adopted for the conservation and sustainable use of biological diversity and related issues.\r\n\r\nCOP15 aims to achieve an historic agreement to halt and reverse nature loss by 2030, on par with the 2015 Paris Climate Agreement. This year’s conference will adopt a new landmark global biodiversity framework that safeguards nature, the first of its kind since the Aichi Biodiversity Targets were introduced in 2010.\r\n\r\n“We have but a few days to act decisively and with principle. Action must be bold, not bracketed – so we have to get the deal done” said Inger Andersen, Executive Director of UNEP.\r\n\r\nThe health of the planet ultimately underpins people’s health and well-being.', 'nature-g4b38243a1_1920.jpg', 5, 'Nayeem', 3, 'Biodiversity around the world, from forests to oceans, animal species and tropical plants is currently threatened by an unprecedented loss caused by human activity.', 'Nature, World', 1, '2022-12-08'),
(17, 'What Is HTML? Hypertext Markup Language Basics Explained', 'HTML stands for HyperText Markup Language. It is a standard markup language for web page creation. It allows the creation and structure of sections, paragraphs, and links using HTML elements (the building blocks of a web page) such as tags and attributes. \r\n\r\nHTML has a lot of use cases, namely:\r\n\r\nWeb development. Developers use HTML code to design how a browser displays web page elements, such as text, hyperlinks, and media files. \r\nInternet navigation. Users can easily navigate and insert links between related pages and websites as HTML is heavily used to embed hyperlinks. \r\nWeb documentation. HTML makes it possible to organize and format documents, similarly to Microsoft Word.\r\nIt’s also worth noting that HTML is not considered a programming language as it can’t create dynamic functionality. It is now considered an official web standard. The World Wide Web Consortium (W3C) maintains and develops HTML specifications, along with providing regular updates. \r\n\r\nThis article will go over the basics of HTML, including how it works, its pros and cons, and how it relates to CSS and JavaScript. ', 'what-is-html-3.webp', 8, 'Nayeem', 3, ' HTML Oct 05, 2022  Astari S.  6min Read  What Is HTML? Hypertext Markup Language Basics Explained What Is HTML? Hypertext Markup Language Basics Explained HTML stands for HyperText Markup Language. It is a standard markup language for web page creation. ', 'Programming,Coding', 1, '2022-12-08'),
(18, 'What is Java?', 'Here are some important Java applications:\r\nIt is used for developing Android Apps\r\nHelps you to create Enterprise Software\r\nWide range of Mobile java Applications\r\nScientific Computing Applications\r\nUse for Big Data Analytics\r\nJava Programming of Hardware devices\r\nUsed for Server-Side Technologies like Apache, JBoss, GlassFish, etc.\r\nHistory of Java Programming Language\r\nHere are important landmarks from the history of the Java language:\r\n\r\nThe Java language was initially called OAK.\r\nOriginally, it was developed for handling portable devices and set-top boxes. Oak was a massive failure.\r\nIn 1995, Sun changed the name to “Java” and modified the language to take advantage of the burgeoning www (World Wide Web) development business.\r\nLater, in 2009, Oracle Corporation acquired Sun Microsystems and took ownership of three key Sun software assets: Java, MySQL, and Solaris.', 'download (1).png', 8, 'Nayeem', 3, 'Java is a general-purpose, class-based, object-oriented programming language designed for having lesser implementation dependencies. ', 'Programming, Coding', 1, '2022-12-09');

-- --------------------------------------------------------

--
-- Stand-in structure for view `post_with_category`
-- (See below for the actual view)
--
CREATE TABLE `post_with_category` (
`post_id` int(255)
,`post_title` varchar(255)
,`post_content` longtext
,`post_img` varchar(255)
,`post_author` varchar(60)
,`post_comment_count` int(255)
,`post_summary` varchar(255)
,`post_tag` varchar(255)
,`post_status` tinyint(3)
,`post_date` date
,`cat_id` int(255)
,`cat_name` text
);

-- --------------------------------------------------------

--
-- Structure for view `post_with_category`
--
DROP TABLE IF EXISTS `post_with_category`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `post_with_category`  AS SELECT `post`.`post_id` AS `post_id`, `post`.`post_title` AS `post_title`, `post`.`post_content` AS `post_content`, `post`.`post_img` AS `post_img`, `post`.`post_author` AS `post_author`, `post`.`post_comment_count` AS `post_comment_count`, `post`.`post_summary` AS `post_summary`, `post`.`post_tag` AS `post_tag`, `post`.`post_status` AS `post_status`, `post`.`post_date` AS `post_date`, `category`.`cat_id` AS `cat_id`, `category`.`cat_name` AS `cat_name` FROM (`post` join `category` on(`post`.`post_cat` = `category`.`cat_id`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
