-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 27, 2024 at 06:08 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `azisya-portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` text,
  `image_url` varchar(255) DEFAULT NULL,
  `project_date` varchar(100) NOT NULL,
  `full_description` text NOT NULL,
  `motto` varchar(50) NOT NULL,
  `project_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `project_name`, `category`, `description`, `image_url`, `project_date`, `full_description`, `motto`, `project_url`) VALUES
(1, 'Regrant', 'App', 'Resource Sharing App', 'assets/img/portfolio/regrant-1.png', 'July, 2024', 'Ever been in a situation where you have secondhand goods that piling up in your storage but have no idea where to give them? Afraid of damaging the environment by mindlessly trashing them away? Wan\'t to get a secondhand goods for yourself without spending money? <br>\r\n\r\nNo worries! We got you covered! <br>\r\n\r\nRegrant is a resource sharing app that connects people who have secondhand goods that is still usable to other people who may find it interesting. The app was developed using React Native for bringing the mobile side, NativeWind framework for delightful UI, also GCP and Firebase stacks to provide the backend service. This project is still in beta phase.', 'Where Sharing Builds Caring', 'https://github.com/luthfibintang/Regrant'),
(2, 'Med Market UI/UX', 'design', 'Pharmacy Apps UI/UX & WireFrame', 'assets/img/portfolio/medmarket-1.png', 'March, 2024', 'The MedMarket wireframe centers around a user-friendly and efficient shopping experience for pharmacy products.<br><br>\r\n\r\nStarting with the Homepage, users are welcomed by a hero banner featuring MedMarket’s motto, alongside a search bar and icons for product categories like Vitamins and First Aid. A featured products section displays popular items with quick-view options, while a testimonial and blog section build trust and provide health tips.<br><br>\r\n\r\nOn the Product Category Page, users can filter by brand, price, and ratings to view a grid of items with essential details and quick add-to-cart functionality. Each Product Details Page offers a detailed view, including a large product image, description, reviews, and related product recommendations. <br><br>\r\n\r\nThe Cart Page provides a streamlined summary of selected items, adjustable quantities, and a subtotal with an easy-to-locate \"Proceed to Checkout\" button. Finally, the Checkout Page collects shipping and payment details with a secure order summary, ensuring a smooth path to purchase. This wireframe keeps navigation intuitive, allowing customers to find, understand, and purchase products with ease.', 'Where Health Meets Convenience.', 'https://www.figma.com/design/2y62wkOsZVQHdoxb233H9J/Wireframe-MedMarket');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
