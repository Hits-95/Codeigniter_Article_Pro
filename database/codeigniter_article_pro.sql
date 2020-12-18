-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 02:50 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter_article_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `article_title` text NOT NULL,
  `article_body` longtext NOT NULL,
  `user_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `article_title`, `article_body`, `user_id`) VALUES
(5, 'C ', 'Welcome to our main types of furniture page for 2020. This is where you can access our epic furniture buying guides on every type of furniture imaginable including sofas, beds, tables, chairs, mattresses, ottomans, dining room furniture, entry hall furniture and more. Be sure to check out our popular series covering 2020', '1'),
(6, 'C++', 'Welcome to our main types of furniture page for 2020. This is where you can access our epic furniture buying guides on every type of furniture imaginable including sofas, beds, tables, chairs, mattresses, ottomans, dining room furniture, entry hall furniture and more. Be sure to check out our popular series covering', '1'),
(7, 'Schala2020', 'Welcome to our main types of furniture page for 2020. This is where you can access our epic furniture buying guides on every type of furniture imaginable including sofas, beds, tables, chairs, mattresses, ottomans, dining room furniture, entry hall furniture and more. Be sure to check out our popular series covering2020', '1'),
(8, 'MySql1', 'Welcome to our main types of furniture page for 2020. This is where you can access our epic furniture buying guides on every type of furniture imaginable including sofas, beds, tables, chairs, mattresses, ottomans, dining room furniture, entry hall furniture and more. Be sure to check out our popular series covering', '1'),
(10, 'JavaScript', 'Welcome to our main types of furniture page for 2020. This is where you can access our epic furniture buying guides on every type of furniture imaginable including sofas, beds, tables, chairs, mattresses, ottomans, dining room furniture, entry hall furniture and more. Be sure to check out our popular series covering', '1'),
(14, 'Appointment of the Governor', '33. Article No. 161:- Power of Governor to grant pardons, etc., and to suspend, remit or commute sentences in certain cases', '1'),
(15, 'Advocate-General of the state', 'Article No. 168:- Constitution of Legislatures in the states', '1'),
(25, 'Tables', 'Pretty much every house will have at least one table. Some houses will have 10 or more when you add up dining tables, end tables, accent tables, night stands, work tables, etc.\r\n\r\nYou’d be surprised how many styles and functions there are when it comes to tables.\r\n\r\nCoffee table:  Low table used in living room spaces placed in the center of seating furniture. Used for drinks, flowers, and a general table for placing items.\r\nAccent table:  Like the term “accent chair”, an accent table is an umbrella term for tables used in living room space (i.e. living rooms, great rooms, family rooms, etc.) that offers a place for putting items on, storage and a decorative element. Most are fairly small and include coffee table, end table, side table and console table.\r\nEnd table:  I love end tables more than any other living room table. They’re small and designed for the ends of sofas or to be placed adjacent to chairs.\r\nConsole table:  The console table is probably the least common living room or family room table. Coffee and end tables are super common, the console table is less so. It’s a long, narrow table often placed behind a sofa. They are, however, popular for foyers and entry halls.\r\nOttoman table:  These are growing in popularity. They’re large ottomans that double as coffee tables. The fabric surface don’t make them the best for drinks unless you place large serving trays on top (or it has one built-in).\r\nDining room table: There are many types of dining room tables, but only in so far as shape, material, color and style. We showcase many of these with photo examples.\r\nBedside table:  Almost a necessity, the bedside table (nightstand) flanks a bed. They come in all sizes, but the small bedside table is very popular.', '1'),
(26, 'Chairs', 'My favorite type of chair is a large, oversized club chair. I love them. I have one and it’s great (although there are nicer ones available).\r\n\r\nMy dad has the ultimate club chair – a massive, comfy oversized leather club chair you absolutely sink into.\r\n\r\nHowever, there are many, many types and styles of chairs for the home.\r\n\r\nAccent chairs:  The accent chair is a living room chair and is a category of various chair styles including the club chair, wingback bergere, lawson, barrel, English rolled arm, slipper and chesterfield chairs.\r\nArmchairs: These are comfortable chairs for the living room or family room.\r\nRecliner chair:  This type of chair offers the option to recline back usually including an attached footrest that elevates so you can fully recline.\r\nReading chair:  Another general chair term that includes many types of chair – pretty much anything that makes for a good reading chair.\r\nBar stools:  stools are not relegated to the home bar; they’re very common in kitchens at islands as well. You’ll be interested to discover there are many types.\r\nDesk chair: so many home have offices and therefore need a desk chair. These vary considerably, but most recline, swivel and are set on castors.\r\nDining room chairs: surprisingly there are many types of dining room chairs. We set them all out in detail.', '1'),
(27, 'Desks', 'I love desks. I always have. I had a beauty as a kid (my parents found this awesome desk in a used office furniture store).\r\n\r\nI have several desks now and enjoy having them.\r\n\r\nThere’s a wide variety of desks, with respect to layout, size, style and material.', '1'),
(28, 'Mattresses', 'Back in the day you didn’t have much mattress choice.\r\n\r\nNow, forget about it. There are so many mattress options that it can be mind-boggling. While they all sound great, you really do need to research the issue to ensure you get the right mattress for your needs.\r\n\r\nWe explain your mattress options in depth with some great illustrations.', '1'),
(29, 'Ottomans', 'An ottoman is a multifunctional piece of furniture that can also be used to enhance your interior’s visual appeal. So to make the most of it, consider the ottoman’s design aspects that can determine its placement, function, and aesthetic value. You should also be aware of all the upholstery options as well as storage options for an ottoman.', '1'),
(31, 'Dining Chairs', 'Dining room chairs don’t have to come as a set when you purchase a dining table. There’s no rule that says so and, in fact, they can be as varied as you like. Choose your chairs wisely by checking out our superb collection of dining room chairs in every stripe of design, style, and build. We also explain in detail the various designs, seat materials, frame materials, and styles that you need to be aware of.', '1'),
(32, 'Sectional Sofas', 'Sectional sofas are extremely popular nowadays so there are plenty of designs, colors, upholstery, shapes, and styles available. Unfortunately, a lot of options makes choosing for the right one difficult. We help you out by simplifying your options and breaking them down into categories.', '1'),
(33, 'Spring MVC Execution Flow Diagram, Spring MVC 3.2 Flow', 'Spring-MVC\r\nWritten by Sivateja		\r\n\r\nSpring MVC Execution Flow Diagram, Spring MVC 3.2 Flow\r\nSpring MVC Hello World, Spring MVC 3.2 Hello World Example In Eclipse\r\nSpring MVC Validations, How to Make Validations in Spring MVC 3\r\nSpring MVC Annotation (JSR-303) Validation Tutorial\r\nSpring MVC Annotation (JSR-303) Bean Validation With @Valid Example\r\n\r\n \r\n\r\n \r\nDeveloper friendly private JVM Java hosting with Tomcat, Glassfish, Jetty, JBoss, Ant, Git, Maven at JVM Host Java4s Angularjs Tutorials	\r\nHelp with Java for StudentsAdvertise Here\r\nAdvertise With Java4s\r\n\r\n \r\nMost Popular Posts\r\n116+ Difference Between Hibernate get() and load() Methods ?\r\n100+ Spring MVC Execution Flow Diagram, Spring MVC 3.2 Flow\r\n95+ What Is Spring Framework, Spring Introduction\r\n85+ Difference Between Merge And Update Methods In Hibernate\r\n76+ What is Hibernate – Hibernate Introduction\r\n74+ Hibernate Second Level Cache Example\r\n71+ Hibernate Hello World Program (Hibernate Insert Query)\r\n70+ Spring Core Module, Spring IOC Tutorial\r\n62+ Spring MVC Hello World, Spring MVC 3.2 Hello World Example In Eclipse\r\n61+ Struts 1.x vs Struts 2.x Main Differences\r\nMost Recent Posts\r\nSpring Boot Configure DataSource Using JNDI with Example\r\nHow to Configure Cache in Spring Boot Applications\r\nSpring Boot – Display All Beans Available in ApplicationContext\r\nSpring Boot – RESTful Web Service with POST Request in XML Example\r\nSpring Boot – RESTful Web Service with POST Request in JSON Example\r\nSpring Boot – Example of RESTful Web Service with XML Response\r\nSpring Boot + Spring MVC + JSP Hello World Example\r\nSpring Boot + Spring Security – RESTful Web Service with Database Authentication\r\nSpring Boot + Spring Security – RESTful Web Service with basic Authentication\r\nHow to Deploy Spring Boot Applications on External Tomcat Server\r\n', '1'),
(37, 'C', 'Welcome to our main types of furniture page for 2020. This is where you can access our epic furniture buying guides on every type of furniture imaginable including sofas, beds, tables, chairs, mattresses, ottomans, dining room furniture, entry hall furniture and more. Be sure to check out our popular series covering', '1'),
(39, 'ternary operator in php with echo value ', '&lt;?php \r\n\r\nif(isset($options[&#039;footer_txt_color&#039;])) {\r\n\r\n    echo $options[&#039;footer_txt_color&#039;];\r\n\r\n} else {\r\n\r\n\r\n\r\n}\r\n\r\n?&gt;', '5'),
(40, '24  Use this code', '\r\necho (isset($options[\'footer_txt_color\'])) ? $options[\'footer_txt_color\'] : \'#ffffff\';\r\n', '5'),
(43, 'Ruby', 'Ruby 2020\r\n', '1');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` text NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback`) VALUES
(1, 'Hitesh', 'hbahire2014@gmail.com', 'This is a perfect starting message because it doesn’t require the customer to give up plenty of personal data, which reduces overall friction and leads to more online reviews.'),
(2, 'Sakshi', 'online', '“Hey {first name}, thank you for shopping with us today! To help us best serve you and others, could you click on this {link} to answer one question about your experience today? Thanks {Insert Company Name}”'),
(3, 'pd', 'pd192@gmail.com', 'This template will help you increase your reviews on a specific online review website where you might have poor reviews.\r\n\r\n“Hi {first name}, thank you for doing business with us. Can you take 1 minute to leave a review about your experience with us? Just go here: {link to your review website business listing}. Thanks for your help!”'),
(4, 'Vrushali', 'vrushali123@gmail.com', 'Thank your customers for visiting your place of business while also asking for feedback.\r\n\r\n“Hello {first name}, Thanks for your recent visit to our store. We want to provide the best experience possible! To help us, please take a moment to leave your feedback. Click {here} to review. Thank you.”');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` text NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`) VALUES
(1, 'Nikita', 'online95', 'Nikita', 'Morankr', 'nikita43@gmail.com'),
(2, 'Hitesh', '123', 'Hitesh', 'Ahire', 'hbahire2014@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
