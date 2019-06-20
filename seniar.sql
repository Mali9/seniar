-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2017 at 02:22 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seniar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `all_images`
--

CREATE TABLE `all_images` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `all_images`
--

INSERT INTO `all_images` (`id`, `image`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.jpg'),
(9, '9.jpg'),
(10, '10.jpg'),
(11, '11.jpg'),
(12, '13.jpg'),
(13, '14.jpg'),
(14, '15.jpg'),
(15, '16.jpg'),
(16, '17.jpg'),
(17, '18.jpg'),
(18, '19.jpg'),
(19, '20.jpg'),
(20, '21.jpg'),
(21, '22.jpg'),
(22, '23.jpg'),
(23, '24.jpg'),
(24, '25.jpg'),
(25, '26.jpg'),
(26, '27.jpg'),
(27, '28.jpg'),
(28, '29.jpg'),
(29, '30.jpg'),
(30, '31.jpg'),
(31, '32.jpg'),
(32, '33.jpg'),
(33, '34.jpg'),
(34, '35.jpg'),
(35, '36.jpg'),
(36, '37.jpg'),
(37, '38.jpg'),
(38, '39.jpg'),
(39, '40.jpg'),
(40, '41.jpg'),
(41, '42.jpg'),
(42, '43.jpg'),
(43, '44.jpg'),
(44, '45.jpg'),
(45, '46.jpg'),
(46, '47.jpg'),
(47, '48.jpg'),
(48, '49.jpg'),
(49, '50.jpg'),
(50, '51.jpg'),
(51, '52.jpg'),
(52, '53.jpg'),
(53, '54.jpg'),
(54, '55.jpg'),
(55, '56.jpg'),
(56, '57.jpg'),
(57, '58.jpg'),
(58, '59.jpg'),
(59, '60.jpg'),
(60, '61.jpg'),
(61, '62.jpg'),
(62, '63.jpg'),
(63, '64.jpg'),
(64, '65.jpg'),
(65, '66.jpg'),
(66, '67.jpg'),
(67, '68.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` text,
  `email` text,
  `phone` varchar(255) DEFAULT NULL,
  `address` text,
  `fb` text,
  `insta` text,
  `about` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `address`, `fb`, `insta`, `about`) VALUES
(2, 'شركه سنيار الخليج', 'm@yahoo.com<br>mm@gmail.com', '٥٥٦٦٦٩٦٠/90099776', 'الشرق شارع أحمد الجابر شركة الثمار الدولية القابضة مكتب رقم 13 الدور السادس قطعه 2', 'https://www.facebook.com/', 'https://www.instgram.com/', 'شركة سنيار الخليج للخدمات البحرية والرحلات ولسلامتك وسلامة من معك للشباب والدواوين ومعاملة خاصة للعوائل واول مره بالكويت الرحلات صيد ونزهه وترفية وغوص بالاقواع البحرية وجزر فيلكا وعوها وكبر قاروه وام المرادم وارياق قاروه وجميع الطبعانات واقواع 60 وال 25 وال 90 والخطيب واقواع خاصة بالشركة وشعارنا رحلة امنه علي متن طراد دبي مارين 38 قدم مكاين 250/250 فورستروك موديل 2016 وطراد ماجلان ٣٦قدم مكاين٣٠٠/٣٠٠مديل ٢٠١٦ فورسترىك??? والاخر طراد جلف كرفت ٣٣قدم مكاين ٢٥٠/٢٥٠فورستروك مديل ٢٠١٦ ?????والاخر طراد عماني ٢٧قدم مديل ٢٠١٦مكاين ١٤٠/١٤٠فورستروك نفس المديل  نحنو منميزون بعتماد وزارة التجارة و وزارة المواصلات  نستقبل اتصالكم واقترحاتكم. علي مدارالساعه 90099776/٥٥٦٦٦٩٦٠');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_en`
--

CREATE TABLE `contact_us_en` (
  `id` int(11) NOT NULL,
  `name` text,
  `email` text,
  `phone` varchar(255) DEFAULT NULL,
  `address` text,
  `fb` text,
  `insta` text,
  `about` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us_en`
--

INSERT INTO `contact_us_en` (`id`, `name`, `email`, `phone`, `address`, `fb`, `insta`, `about`) VALUES
(2, 'senyar-gulf company', 'm@yahoo.com<br>mm@gmail.com', '55666960/90099776', 'address in english', 'facebook', 'instgram', 'about in english');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `image`, `title`, `description`) VALUES
(1, '1.jpg', 'عرض خاص', 'text-centertext-centertext-centertext-centertext-centertext-centertext-centertext-center'),
(2, '1502573391.jpg', 'mohamed', 'okpojcpiojwpfkwep'),
(3, '1502573545.jpg', 'عرض خاص', 'text-centertext-centertext-centertext-centertext-centertext-centertext-centertext-centertext-centertext-centertext-centertext-centertext-centertext-centertext-centertext-centertext-centertext-centertext-centertext-centertext-centertext-centertext-centertext-center'),
(4, '1502626010.jpg', 'اعلان هام', 'اعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هاماعلان هام');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`) VALUES
(1, '62.jpg'),
(2, '61.jpg'),
(3, '20.jpg'),
(4, '28.jpg'),
(5, '40.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_images`
--
ALTER TABLE `all_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us_en`
--
ALTER TABLE `contact_us_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `all_images`
--
ALTER TABLE `all_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contact_us_en`
--
ALTER TABLE `contact_us_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
