-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2023 at 07:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_slug` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `cat_slug`) VALUES
(2, 'Cat Food', 'desktop-pc'),
(3, 'Fish Food', 'tablets'),
(4, 'Pet Accessories', ''),
(5, 'Dog Food', '');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `company` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `sales_id`, `product_id`, `quantity`) VALUES
(14, 9, 11, 2),
(15, 9, 13, 5),
(16, 9, 3, 2),
(17, 9, 1, 3),
(18, 10, 13, 3),
(19, 10, 2, 4),
(20, 10, 19, 5),
(21, 11, 3, 10),
(22, 11, 13, 1),
(23, 12, 32, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date_view` date NOT NULL,
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `slug`, `price`, `photo`, `date_view`, `counter`) VALUES
(31, 5, 'Pedigree', '<p>Every dog deserves the best&hellip; that&rsquo;s why PEDIGREE Complete Nutrition Dry Dog Food delivers 100% complete and balanced nutrition for your adult dog. It has the antioxidants, vitamins, and minerals canines need to help maintain a healthy lifestyle, and in the delicious, meaty steak flavor they love. This tasty dry kibble helps clean teeth and support healthy digestion&hellip; Plus, it&rsquo;s enriched with omega-6 fatty acids to help nourish your dog&rsquo;s skin and promote a healthy coat. Irresistible in every way, this dry dog food provides whole grains and protein, and was made in the USA with the world&rsquo;s finest ingredients. It has no artificial flavors, no high fructose corn syrup, and no added sugar. Dogs bring out the good in us. PEDIGREE brings out the good in them. Feed the good.</p>\r\n', 'pedigree', 800, 'pedigree.jfif', '0000-00-00', 0),
(32, 2, 'Hills Cat Food', '<p>Little cats&nbsp;can have a big appetite, so treat your small-breed dog to Hill&#39;s Science Diet small Bites Adult dry cat&nbsp;food. Packed with Omega-6s &amp; Vitamin E to give your canine A beautiful skin &amp; coat, This premium adult cat&nbsp;food also provides high-quality protein to help your full grown cat&nbsp;maintain lean muscle.&nbsp;</p>\r\n', 'hills-cat-food', 980, 'hills-cat-food.jpg', '2023-09-01', 4),
(33, 5, 'Milk Bone', '<p>Make your dog&prime;s life more fun with delicious dog snacks from a brand you can trust. Milk-Bone Original dog biscuits are prepared with care and will give your dog the simple, genuine joy that your dog gives you every day. How? A classic crunch with a wag-worthy taste &mdash; now with even MORE meaty taste compared to the Milk-Bone Original biscuits you know and love. Better yet, the crunchy texture of Milk-Bone dog biscuits helps freshen dogs&prime; breath and reduce tartar build-up, so you can fully enjoy all those sloppy doggie kisses. These tasty dog treats even contain vitamins and minerals &mdash; 12, to be exact. So you&prime;ll be almost as happy to give them as your dog is to get them &hellip; almost.</p>\r\n', 'milk-bone', 800, 'milk-bone.jfif', '0000-00-00', 0),
(34, 5, 'Milk Bone Original', '', 'milk-bone-original', 500, 'milk-bone-original.jpg', '0000-00-00', 0),
(35, 2, 'Origen Cat Treat', '', 'origen-cat-treat', 1100, 'origen-cat-treat.webp', '0000-00-00', 0),
(36, 3, 'Wardley Pond Pallet', '', 'wardley-pond-pallet', 950, 'wardley-pond-pallet.jpg', '0000-00-00', 0),
(37, 5, 'DentaStix', '', 'dentastix', 700, 'dentastix.jpeg', '0000-00-00', 0),
(38, 2, 'Meow Mix', '', 'meow-mix', 660, 'meow-mix.webp', '2023-09-01', 2),
(39, 2, 'Friskies Party Mix', '', 'friskies-party-mix', 900, 'friskies-party-mix.jfif', '0000-00-00', 0),
(40, 3, 'Tropical Fish Food', '', 'tropical-fish-food', 400, 'tropical-fish-food.jfif', '0000-00-00', 0),
(41, 4, 'Ball', '<p>Whether your dog enjoys indoor or outdoor play, Hartz Dura Play bacon scented dog toys are the perfect addition to the toy bin. These dog toys have a durable exterior coupled with a lightweight foam interior to make it easy to throw, bounce, squeak, and float! Every shape has an ear-perking squeaker and an appealing bacon scent that will have even the most inactive dogs begging for more playtime</p>\r\n', 'ball', 250, 'ball.jpg', '0000-00-00', 0),
(42, 4, 'Cat Bed', '<p>Our orthopedic cat&nbsp;sofa is designed to give your pet unparalleled support for a deep, dreamy sleep. High-density egg-crate foam helps distribute weight evenly and provides the perfect amount of pressure relief and joint support.</p>\r\n', 'cat-bed', 2500, 'cat-bed.jpg', '2023-09-01', 2),
(43, 4, 'Dog Bed', '<p>Our orthopedic dog sofa is designed to give your pet unparalleled support for a deep, dreamy sleep. High-density egg-crate foam helps distribute weight evenly and provides the perfect amount of pressure relief and joint support.</p>\r\n', 'dog-bed', 3000, 'dog-bed.jpg', '0000-00-00', 0),
(44, 4, 'Dog Harness', '', 'dog-harness', 1500, 'dog-harness.jpg', '0000-00-00', 0),
(45, 4, 'Brush', '', 'brush', 500, 'brush.jpg', '0000-00-00', 0),
(46, 4, 'Neck Collar', '<p>Made of high quality nylon fabric to ensure safety, features the solid zinc alloy swivel snap and quality buckles, the pet car seat belt ensures the most safest traveling for your pet</p>\r\n', 'neck-collar', 700, 'neck-collar.jpg', '0000-00-00', 0),
(47, 4, 'All Natural Dog Shampoo', '<p>Effectively cleans, conditions, detangles, and moisturizes your dog&rsquo;s skin. Keep your dog&rsquo;s fur soft, clean, and less tangled with one easy solution.</p>\r\n', 'all-natural-dog-shampoo', 650, 'all-natural-dog-shampoo.jpg', '0000-00-00', 0),
(48, 4, 'Fresh and Clear Odor Spray', '', 'fresh-and-clear-odor-spray', 1000, 'fresh-and-clear-odor-spray.webp', '0000-00-00', 0),
(49, 4, 'Flat Ball', '', 'flat-ball', 200, 'flat-ball.jpg', '2023-09-01', 2),
(50, 4, 'Aquarium Internal Filter', '', 'aquarium-internal-filter', 2000, 'aquarium-internal-filter.jpg', '0000-00-00', 0),
(51, 4, 'Fish Net', '', 'fish-net', 400, 'fish-net.jpg', '0000-00-00', 0),
(52, 4, 'Small Round Aquarium', '', 'small-round-aquarium', 500, 'small-round-aquarium.jpg', '0000-00-00', 0),
(53, 4, 'Large Aquarium', '', 'large-aquarium', 8000, 'large-aquarium.jpg', '0000-00-00', 0),
(54, 4, 'Nail Clippers', '', 'nail-clippers', 500, 'nail-clippers.jpg', '0000-00-00', 0),
(55, 4, 'Medium Size Aquarium', '<p>Marineland brand is the world&rsquo;s leading brand of innovative equipment and environments for consumers wishing to create the ultimate aquatic showcase. Committed to fishkeeping success for over 40 years, the brand is the professional&rsquo;s choice for commercial display systems and scientific research. Whatever you&rsquo;re passionate about &ndash; freshwater or saltwater, big or small, beauty or science &ndash; make your aquarium your own.</p>\r\n', 'medium-size-aquarium', 4500, 'medium-size-aquarium.jpg', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pay_id` varchar(50) NOT NULL,
  `sales_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `user_id`, `pay_id`, `sales_date`) VALUES
(9, 9, 'PAY-1RT494832H294925RLLZ7TZA', '2018-05-10'),
(10, 9, 'PAY-21700797GV667562HLLZ7ZVY', '2018-05-10'),
(11, 16, '12', '2022-05-06'),
(12, 13, '12', '2023-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`) VALUES
(1, 'admin@admin.com', '$2y$10$TDM8RH0F/a3.U7Ra21jc3.OCd3xKeAy/nXatCOx3Gcw9IWowCMWPe', 1, 'Binita', 'Lamichhane', '', '', '', 1, '', '', '2023-09-01'),
(13, 'bini@bini.com', '$2y$10$TDM8RH0F/a3.U7Ra21jc3.OCd3xKeAy/nXatCOx3Gcw9IWowCMWPe', 0, 'Binita', 'Lamichhane', 'Kathmandu, Nepal', '', '', 1, '', 'HEFIkVZhAUnuLN1', '2023-08-01'),
(15, 'samir@samir.com', '$2y$10$TDM8RH0F/a3.U7Ra21jc3.OCd3xKeAy/nXatCOx3Gcw9IWowCMWPe', 1, 'Samir', 'Maharjan', '', '', '', 1, 'hHDQjavJi6lB', '', '2023-09-01'),
(16, 'saurav@saurav.com', '$2y$10$TDM8RH0F/a3.U7Ra21jc3.OCd3xKeAy/nXatCOx3Gcw9IWowCMWPe', 0, 'Saurav', 'Rimal', '', '', '', 1, 'hHDQjavJi6lB', '', '2023-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` int(1) NOT NULL,
  `created_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
