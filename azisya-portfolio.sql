-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 27, 2024 at 11:46 AM
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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `technologies` text
);

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `description`, `technologies`) VALUES
(1, 'Azisya Luthfi Bintang', 'I’ve always enjoyed creating things that live on the web. My interest in web development first took shape back in high school, where I majored in software development. It was during this time that I discovered how exciting it was to build things from scratch and see them come to life on a screen\r\n<br><br>\r\nFast-forward to today, I’m currently pursuing a degree in Informatics at Universitas Pembangunan Jaya. My main focus these days is learning new things every single day, constantly working to develop my skills as a software engineer and web developer.', 'JavaScript (ES6+), React, NodeJS, Typescript, React Native, Tailwind');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `github_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL
);

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `github_link`, `instagram_link`, `linkedin_link`) VALUES
(1, 'azisya.luthfibintang@gmail.com', 'https://github.com/luthfibintang', 'https://www.instagram.com/luthfibintang3/', 'https://www.linkedin.com/in/azisya-luthfi-bintang/');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
);

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `name`, `title`, `email`) VALUES
(1, 'Azisya Luthfi Bintang', 'Software Engineer, Web Developer, Freelancer', 'azisya.luthfibintang@gmail.com');

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
);

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `project_name`, `category`, `description`, `image_url`, `project_date`, `full_description`, `motto`, `project_url`) VALUES
(1, 'Regrant', 'App', 'Resource Sharing App', 'assets/img/portfolio/regrant-1.png', 'July, 2024', 'Ever been in a situation where you have secondhand goods that piling up in your storage but have no idea where to give them? Afraid of damaging the environment by mindlessly trashing them away? Wan\'t to get a secondhand goods for yourself without spending money? <br>\r\n\r\nNo worries! We got you covered! <br>\r\n\r\nRegrant is a resource sharing app that connects people who have secondhand goods that is still usable to other people who may find it interesting. The app was developed using React Native for bringing the mobile side, NativeWind framework for delightful UI, also GCP and Firebase stacks to provide the backend service. This project is still in beta phase.', 'Where Sharing Builds Caring', 'https://github.com/luthfibintang/Regrant'),
(2, 'Med Market UI/UX', 'Design', 'Pharmacy Apps UI/UX & WireFrame', 'assets/img/portfolio/medmarket-1.png', 'March, 2024', 'The MedMarket wireframe centers around a user-friendly and efficient shopping experience for pharmacy products.<br><br>\r\n\r\nStarting with the Homepage, users are welcomed by a hero banner featuring MedMarket’s motto, alongside a search bar and icons for product categories like Vitamins and First Aid. A featured products section displays popular items with quick-view options, while a testimonial and blog section build trust and provide health tips.<br><br>\r\n\r\nOn the Product Category Page, users can filter by brand, price, and ratings to view a grid of items with essential details and quick add-to-cart functionality. Each Product Details Page offers a detailed view, including a large product image, description, reviews, and related product recommendations. <br><br>\r\n\r\nThe Cart Page provides a streamlined summary of selected items, adjustable quantities, and a subtotal with an easy-to-locate \"Proceed to Checkout\" button. Finally, the Checkout Page collects shipping and payment details with a secure order summary, ensuring a smooth path to purchase. This wireframe keeps navigation intuitive, allowing customers to find, understand, and purchase products with ease.', 'Where Health Meets Convenience.', 'https://www.figma.com/design/2y62wkOsZVQHdoxb233H9J/Wireframe-MedMarket'),
(3, 'Website Pengaduan Masyarakat', 'App', 'Project For Skills Competency Test on My Vaction School', 'assets/img/portfolio/pengaduan-masyarakat.png', 'February, 2022', 'The rapid advancement of technology has significantly impacted nearly every aspect of human life, particularly through the internet, which has become a daily necessity. With its capabilities to facilitate communication, such as through email and instant messaging, the internet enhances efficiency, as does the use of computers in general. However, these technological benefits have yet to be fully utilized by the government, especially in areas like public service, where channels for complaints and feedback are limited.<br><br>To address this issue, i developed a website-based Public Complaint System. This platform aims to streamline the process of submitting complaints or grievances, making it more accessible and efficient for citizens. By leveraging technology, this service is intended to empower the public in voicing their concerns directly to relevant authorities, promoting transparency and responsiveness in public service.<br><br>\r\nThe system is built using CodeIgniter4, a PHP framework known for its lightweight yet powerful structure, making development faster and more efficient. This framework provides a robust backend that supports smooth interactions with the database and reliable data handling. The application’s data is securely stored and managed using MySQL, which is optimized for handling large volumes of data, ensuring quick retrieval and efficient storage of complaints and feedback. ', 'Connecting Concerns, Delivering Solutions', 'https://github.com/luthfibintang/Website-Pengaduan-Masyarakat'),
(4, 'EmployeEase', 'App', 'HRM Web App Designed to Enhance Employee Management.', 'assets/img/portfolio/employeEase.png', 'February, 2024', 'EmployeEase is a comprehensive web-based human resource management (HRM) platform tailored to simplify and enhance employee administration within organizations. Employees can easily log attendance, request corrections, apply for leave, claim overtime, and access their pay slips, ensuring real-time interaction and convenience. Admins benefit from robust tools to manage payroll, approve or decline employee requests, and execute CRUD operations on employee records. These features not only support accurate HR processing but also reinforce efficient, policy-compliant workforce management. EmployeEase thus plays a crucial role in boosting productivity and improving HR practices for modern organizations.', 'Effortless HR for a Thriving Workforce', 'https://github.com/luthfibintang/Human-Resource-Apps');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int NOT NULL,
  `section` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `period` varchar(50) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `description` text
);

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `section`, `title`, `period`, `institution`, `description`) VALUES
(1, 'Education', 'BACHELOR\'S DEGREE IN INFORMATICS', '2022 - Present', 'Pembangunan Jaya University, South Tangerang, Indonesia', 'Currently, I am pursuing a degree in Informatics. My studies are focused on expanding my knowledge of software engineering, web development, Web3, Artificial Intelligence, and another emerging technologies.'),
(2, 'Education', 'VOCATIONAL HIGH SCHOOL IN SOFTWARE ENGINEERING', '2019 - 2022', 'Bina Informatics Vocational High School, South Tangerang, Indonesia', 'Graduated with a major in Software Engineering, where I gained hands-on experience programming, web development, and foundational software concepts. It was here that my passion for technology truly began to take shape.'),
(3, 'Experience', 'Assistant Lecturer - Web Programming', 'September 2022 - Present', 'Pembangunan Jaya University, South Tangerang, Indonesia', 'Assisted in teaching core web development concepts, including HTML and CSS.Guided students in learning responsive design with Bootstrap 5.Supported students in understanding basic PHP and MySQL for backend development.Introduced and demonstrated practical use of PHP frameworks.Collaborated with the lead lecturer to monitor student progress and provide extra help during lab sessions.'),
(4, 'Experience', 'Internship as Backend Developer', 'March 2022 - May 2022', 'Grogol Petamburan, West Jakarta, Indonesia', 'Worked in a team-oriented environment to create, design, and develop web-based applications using Laravel and Postman API.Through effective teamwork, we have streamlined processes, delivered high quality applications and improved the user experience.');

-- --------------------------------------------------------

--
-- Table structure for table `social-link`
--

CREATE TABLE `social-link` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL
);

--
-- Dumping data for table `social-link`
--

INSERT INTO `social-link` (`id`, `name`, `link`) VALUES
(1, 'github', 'https://github.com/luthfibintang'),
(2, 'instagram', 'https://www.instagram.com/luthfibintang3'),
(3, 'linkedin', 'https://www.linkedin.com/in/azisya-luthfi-bintang/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social-link`
--
ALTER TABLE `social-link`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `social-link`
--
ALTER TABLE `social-link`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
