-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 20, 2021 at 12:59 AM
-- Server version: 5.7.35-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astrolog_delhifurniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(50) NOT NULL,
  `name` text,
  `description` text,
  `image` text NOT NULL,
  `order_by` int(100) DEFAULT '0',
  `status` text NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `description`, `image`, `order_by`, `status`, `created_at`, `updated_at`) VALUES
(32, 'India\'s Best Healthcare Equipments Suppliers', NULL, '1623481180.png', 4, 'disable', '2021-03-13 02:20:26.000000', '2021-06-24 11:11:22.000000'),
(33, 'We Provide India\'s Best Healthcare Equipments', 'R. Home & Healthcare Services', '1623481207.png', 3, 'disable', '2021-03-13 02:21:10.000000', '2021-06-24 11:11:22.000000'),
(34, 'oxygen concentrator suppliers and traders in Delhi', 'R. Home & Healthcare Services', '1624551290.png', 1, 'enable', '2021-06-24 10:44:50.000000', '2021-06-24 11:12:19.000000'),
(35, 'CPAP Suppliers & Traders in India', NULL, '1624551930.png', 2, 'enable', '2021-06-24 10:55:30.000000', '2021-06-24 10:57:29.000000');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `url` varchar(150) NOT NULL,
  `short_description` mediumtext,
  `long_description` longtext,
  `image` varchar(100) DEFAULT NULL,
  `meta_title` text,
  `meta_description` text,
  `meta_keywords` text,
  `order_by` text,
  `set_as_home` enum('yes','no') NOT NULL DEFAULT 'no',
  `status` enum('enable','disable') NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `url`, `short_description`, `long_description`, `image`, `meta_title`, `meta_description`, `meta_keywords`, `order_by`, `set_as_home`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Blog Title', 'Blog-Title', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<p style=\"text-align:justify\"><span style=\"font-size:20px\">The website is one of the most powerful marketing tools that help business owners to gain a competitive advantage and makes the brand value. &nbsp;An Informative and engaging website always keeps your business one step forward as compared to traditional business approach because the internet allows businesses to break through the geographical barriers and makes businesses more credible. Many entrepreneurs think that by designing website, they can reach to their relevant audience easily and also increase their brand&#39;s values. After understanding why the website is important for a business? We have listed the top benefits of a website that definitely inspires you to take your physical store on a website platform.&nbsp;<br />\r\nSpecial Note for the newbie small business entrepreneurs: If you recently stepped into the business world and seeking for the approaches that take your business to the next level. Then read the benefits of a website, we hope below-mentioned benefits will surely help you.&nbsp;<br />\r\n<strong>&nbsp;Top Benefits of a Website for a Small Business?&nbsp;</strong><br />\r\n1. <strong>Create a Lasting First Impression</strong>: First impression matters, and it matters most when you serving your business information on an online platform. If you have an engaging, informative, user-friendly website then your new visitors and potential customers will be definitely impressed by your website and they also share your content if they find measure value in it. With the help of the website you can also develop trust between you and your audience. Like by adding email ID, contact number and address people will trust you more and encourage strong relationships and keeps your customers coming back. If you need a website that creates an ideal first impression, you can take the help of the perfect web expert team, who is willing to offer you a website, which contains all the factors that are used to impress the visitors.&nbsp;<br />\r\n2. <strong>Business Sales Tools</strong>: &nbsp; A Small business website is much more than sharing email, contact and address information to the visitors. With the help of this platform you can share the blogs that are based on your product and services, also add chat support option so that your customers can easily reach you and share their difficulties. If you are a newbie small business owner, the basic motive behind making a website to inform, convey and offer services to the customers and gain a relevant audience. These things you only achieve when you use effective business sales tools such as giving extra discount on products, give information about the products, sharing business information what you do and how you make products.&nbsp;<br />\r\n3. <strong>Mobile</strong>: Friendly Design: Gone are the days when people open a desktop to search. Now, everyone has the handsets, he/she rarely open desktop to buy products or to read about the products. As per the research, in 2017 nearly, nearly 52% traffic originated from the mobile phones. So, it is very necessary to create a responsive website that easily runs on any platform. The major benefit of a responsive website is that the responsive content paired with responsive media buttons, which make it easy to share links to your sites&rsquo; pages even on the small screen of mobiles and can lead to increase in social shares for your content. Having a mobile responsive website is no longer a trend, it must! Having the ability to offer the audience an outstanding website experience, no matter what device they are using to access your website, which means making the responsive website not only attract your target audience but also convert your visitors into customers. The perfect web experts &ldquo;the web designing company&rdquo; always encourages small business owners to have a website that is ready for all devices.&nbsp;<br />\r\n4. <strong>Educate your customers</strong>: Selling products without describing proper details is like increasing sale but decreasing product awareness. With the help of a website you can easily aware your audience about your products. Writing proper content, add the benefits and why and how to use details can influence the audience to buy a product without any second thought. So, add the quality details about your product and services on your website and retain your customers in the long run.&nbsp;<br />\r\n5. <strong>Expand your market</strong>: In all over the world, the internet is the only place where you can expand your market as much as you can. Right from the social media platforms to email services you have endless opportunities to share your company&rsquo;s products and services with the few clicks. After launching a website, if you decided to take the full advantages of internet marketing for growing a business, you might want help from the experts. The perfect web experts, the Delhi based social media marketing company can be your expert, which will help you in implementing those marketing efforts. Rather coping marketing tactics from the competitors are more important than taking experts help who will help you and execute all unique strategies.&nbsp;<br />\r\n6.<strong> Improve Productivity</strong>: Without any doubt, a website is an effective medium that can increase company&rsquo;s productivity because consumers have an opportunity to access Company&rsquo;s product and services round the clock and with the help of payment gateway option, they can do transaction easily. If you have a website and seeking for the best E-Commerce solutions, then you can reach to the perfect web experts, the leading e-commerce solutions company.<br />\r\n7. <strong>Improve Customer Service</strong>: &nbsp;Perhaps the most important of having a business website is to offer round the clock customer support. If your customers have queries regarding products and services, they can easily reach at you by dialling customer care number or via chat support. If you offer excellent customer support services to your customers then you easily build trust with no less time. Because of the more, you touch with your customers and resolve their queries instantly, the more your customers trust you.&nbsp;<br />\r\n<strong>Bottom Line:</strong><br />\r\nGone are the days when you information about your new business through yellow printed promotional copies. Use the modern methodology and expand your market with the help of a website. Having a website for a small business is a &ldquo;must have&rdquo;. Not having a website puts your business at a competitive disadvantage. &nbsp;<br />\r\n&nbsp;</span><br />\r\n&nbsp;</p>', '1627800109.jpg', 'Top Benefits of a Website for a Small Business', 'Top Benefits of a Website for a Small Business', 'Top Benefits of a Website for a Small Business', '0', 'yes', 'enable', '2020-08-16 19:32:37.000000', '2021-08-01 01:11:49.000000');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `url` varchar(100) NOT NULL,
  `short_description` mediumtext,
  `long_description` longtext,
  `meta_title` text,
  `meta_description` mediumtext,
  `meta_keywords` mediumtext,
  `is_popular` enum('yes','no') DEFAULT NULL,
  `is_featured` enum('yes','no') DEFAULT NULL,
  `is_hot` enum('yes','no') DEFAULT NULL,
  `is_best` enum('yes','no') DEFAULT NULL,
  `is_new_arraival` enum('yes','no') DEFAULT NULL,
  `is_special_offer` enum('yes','no') DEFAULT NULL,
  `set_as_home` enum('yes','no') DEFAULT NULL,
  `status` enum('enable','disable') NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(50) NOT NULL,
  `title` text NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  `content` longtext,
  `image` varchar(50) DEFAULT NULL,
  `order_by` int(100) DEFAULT '0',
  `status` enum('enable','disable') DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `url`, `content`, `image`, `order_by`, `status`, `created_at`, `updated_at`) VALUES
(19, 'HAIER', 'HAIER', NULL, '1627800318.png', 6, 'enable', '2021-03-17 02:14:29.000000', '2021-08-01 01:15:18.000000');

-- --------------------------------------------------------

--
-- Table structure for table `cmspages`
--

CREATE TABLE `cmspages` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `url` varchar(100) NOT NULL,
  `meta_title` text,
  `meta_description` text,
  `meta_keywords` longtext,
  `header_image` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `short_description` text,
  `long_description` longtext,
  `show_in` text,
  `page_type` text,
  `page_status` enum('enable','disable') DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cmspages`
--

INSERT INTO `cmspages` (`id`, `name`, `url`, `meta_title`, `meta_description`, `meta_keywords`, `header_image`, `image`, `short_description`, `long_description`, `show_in`, `page_type`, `page_status`, `created_at`, `updated_at`) VALUES
(12, 'Home', 'Home', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'header', 'cms page', 'enable', '2020-08-28 00:32:39.000000', '2021-06-24 10:16:07.000000'),
(13, 'About Us', 'About-Us', NULL, NULL, NULL, '1623479147.png', '1623479336.png', '<p><span style=\"font-size:16px\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">We are a young, energetic and dedicated organization, focussing on improving the overall wellbeing and health of every individual. At R Home &amp; Healthcare we know the issues that a patient can face when they struggle to breath. With our venture we have been providing standardised and excellent respiratory care to patients at home. </span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">We want our patients to feel the normalcy of breathing and not struggle with it. Hence we have been fulfilling our goal of providing specialised medical oxygen concentrators of various sizes and oxygen cylinders to suit every requirement of a patient. </span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">R Home &amp; Healthcare though established before the COVID 19 pandemic, during the crisis we have been able to prove ourselves to the people of Delhi NCR with our clinical excellence and responsiveness.</span></span></span></p>', '<h2 style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,sans-serif\"><strong><em><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">Exceptional Care With Exceptional Innovation &amp; Technology </span></em></strong></span></span></h2>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">We are a young, energetic and dedicated organization, focussing on improving the overall wellbeing and health of every individual. At R Home &amp; Healthcare we know the issues that a patient can face when they struggle to breath. With our venture we have been providing standardised and excellent respiratory care to patients at home. </span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">We want our patients to feel the normalcy of breathing and not struggle with it. Hence we have been fulfilling our goal of providing specialised medical oxygen concentrators of various sizes and oxygen cylinders to suit every requirement of a patient. </span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">R Home &amp; Healthcare though established before the COVID 19 pandemic, during the crisis we have been able to prove ourselves to the people of Delhi NCR with our clinical excellence and responsiveness. </span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><strong><span style=\"font-family:Arial,sans-serif\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">R Home &amp; Health is built on two principles</span></span></strong></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">Quality care </span></span></span></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">Dedication to providing the service</span></span></span></span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">We believe that by offering our services we become part of your family and you are the source of our growth. R Home &amp; Health&rsquo;s aim is to become the preferred provider of all medical oxygen, respiratory equipment supplier and other related services.&nbsp; </span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:18px\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">Our Services </span></span></span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><strong><em><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">Redefining quality services </span></span></em></strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">At R Home &amp; Health all our patients get the best of the services when it comes to respiratory equipment. We offer </span></span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">Renting of Oxygen Cylinders </span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">Oxygen concentrators</span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">CPAP</span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">Bipap </span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">Other healthcare equipment</span></span></span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:48px; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,sans-serif\"><strong><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">Why Us?&nbsp; </span></strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><strong><em><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">Where care, healing and service is the&nbsp; priority </span></span></em></strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">When you contact us for the service we offer you the advanced and latest oxygen and respiratory equipment in the market. Our products are offered to the patients only after they have undergone rigorous testing to ensure there are no defects. </span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">At R Home &amp; Health we always use products that incorporate the latest technological innovation. This ensures that the patient can have a seamless breathing experience. </span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">We also offer extensive patient education programs. At R Home &amp; Heath we also offer customised different types of oxygen treatment at home that caters to individual needs of the patient. </span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">With R Home &amp; Health you also get a registered respiratory therapist. Our trained therapist will assist the patient or caregiver with not only setting up the oxygen but also offer ways to get the maximum benefit from the equipment and therapy. </span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">R Home &amp; Health takes the comfort of every patient and their family seriously hence we provide them with ongoing support. All our patients, caregivers and the family members can contact us 24/7 for any kind of respiratory and healthcare equipment and oxygen support. </span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,sans-serif\"><strong><em><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">Mission</span></em></strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">R Home &amp; Health was established to protect the vulnerable patients across Delhi NCR who have difficult with the basic requirement of life, - </span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">R Home &amp; Health was established to protect the vulnerable patients across Delhi NCR who have difficulty with the basic requirement of life, - BREATHING. We are focused on offering innovative and effective healthcare, respiratory and other medical products, services, and support round the clock.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,sans-serif\"><strong><em><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">Vision</span></em></strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">We intend to become the most sought-after healthcare and respiratory equipment and oxygen provider in Delhi NCR for the most challenging healthcare situation among the aged population. R Home &amp; Health envisions to help people combat the rise of chronic diseases, with the most effective, technologically advanced equipment and solutions. </span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,sans-serif\"><strong><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">What Sets Us Apart?</span></strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><strong><em><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">Experienced people making every life and community stringer with caring</span></span></em></strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">Anil Kumar founded R Home &amp; Health with the idea of providing a better life to every individual. This is done based on our four core values</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,sans-serif\">&nbsp;<strong><em><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">Trust</span></em></strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">We warrant that our service is the best by working closely with the medical professionals. R Home &amp; Health ensures that there are no irregularities or unauthorized use of our supplies and equipment, hence we require doctor&rsquo;s proof of the necessary service or equipment before providing the service.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,sans-serif\"><strong><em><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">Inventiveness </span></em></strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">R Home &amp; Health leverages the expertise, experience, and capabilities of the highly-trained individual working with us to offer the best solutions to every patient and caregiver that meet their requirements. </span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,sans-serif\"><strong><em><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">Belief </span></em></strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">We at R Home &amp; Health believe that our continuous endeavor to provide the best service combined with our team&rsquo;s experience and expertise allow us to deliver high-quality service and products that are safe and technologically advanced. </span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,sans-serif\"><strong><em><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">Commitment </span></em></strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">R Home &amp; Health is committed to maintaining a high standard of service by ensuring the safety, quality, and cost-effectiveness of the equipment we offer. We intend to keep adding value to the lives of our patients, customers, stakeholders, and suppliers while developing the community of Delhi NCR and India with our ethical behavior, supportive dialogue, and round-the-clock service. BREATHING. We are focused in offering innovative and effective healthcare, respiratory and other medical products, services and support round the clock.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,sans-serif\"><strong><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">The COVID 19 Crisis and After&hellip; </span></strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">R Home &amp; Health was formed to fill the gap in the home oxygen market that was driven by compassion and the urge to serve the community better. During the pandemic, we were able to help people with quality oxygen supply and personalized care when people were afraid, traumatized, and lost. We have been able to give them some hope with our products and services. </span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">In XX years of our being in the business, we have been able to establish ourselves as the physician&#39;s favorite resource for oxygen supply and help patients with sleep apnea and other respiratory issues. We pride in providing personalized and quality care, product, and service to our customers with a different alternative, cost-effective brands for CPAP and BiPAP. </span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">We offer our patients the option to avail any of our equipment by renting the product before purchasing it.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">R Home and Health remains true to its vision and mission by remaining accessible, innovative, and compassionate towards the patient and the community.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Century Gothic&quot;,sans-serif\">If you are looking for oxygen or any other healthcare or respiratory equipment contact R Home &amp; Health now to know more. For any questions feel free to contact us at + 9199908 80225</span></span></p>', 'header and footer', 'cms page', 'enable', '2020-08-28 00:33:34.000000', '2021-06-29 10:32:23.000000'),
(14, 'Contact Us', 'Contact-Us', NULL, NULL, NULL, '1623479383.png', '1609114487.jpg', NULL, NULL, 'header and footer', 'cms page', 'enable', '2020-08-28 00:34:56.000000', '2021-06-24 10:16:19.000000'),
(23, 'Office Dismantling Buyer', 'Office-Dismantling-Buyer', 'DEL Enterprises, Old Office Furniture Buyer in Delhi NCR, Office Dismantling Service Vendor in Delhi NCR, Used Office Generator Buyer In Gurgaon, Used AC Buyer', 'DEL Enterprises, Old Office Furniture Buyer in Delhi NCR, Office Dismantling Service Vendor in Delhi NCR, Used Office Generator Buyer In Gurgaon, Used AC Buyer', 'DEL Enterprises, Old Office Furniture Buyer in Delhi NCR, Office Dismantling Service Vendor in Delhi NCR, Used Office Generator Buyer In Gurgaon, Used AC Buyer', '1623479061.png', NULL, '<p>Products</p>', '<p>DEL Enterprises, Old Office Furniture Buyer in Delhi NCR, Office Dismantling Service Vendor in Delhi NCR, Used Office Generator Buyer In Gurgaon, Used AC Buyer</p>', 'header and footer', 'cms page', 'enable', '2021-06-07 10:47:17.000000', '2021-07-31 23:58:54.000000'),
(24, 'Our Services', 'Our-Services', NULL, NULL, NULL, '1623479424.png', NULL, '<p>Services</p>', '<p>Services</p>', 'header and footer', 'cms page', 'enable', '2021-06-07 10:47:38.000000', '2021-07-31 23:59:46.000000'),
(25, 'Gallery', 'Gallery', NULL, NULL, NULL, NULL, NULL, '<p>Gallery</p>', '<p>Gallery</p>', 'header and footer', 'cms page', 'enable', '2021-06-07 10:47:55.000000', '2021-06-24 10:16:39.000000'),
(26, 'Blogs', 'Blogs', 'DEL Enterprises, Old Office Furniture Buyer in Delhi NCR, Office Dismantling Service Vendor in Delhi NCR, Used Office Generator Buyer In Gurgaon, Used AC Buyer', 'DEL Enterprises, Old Office Furniture Buyer in Delhi NCR, Office Dismantling Service Vendor in Delhi NCR, Used Office Generator Buyer In Gurgaon, Used AC Buyer', 'DEL Enterprises, Old Office Furniture Buyer in Delhi NCR, Office Dismantling Service Vendor in Delhi NCR, Used Office Generator Buyer In Gurgaon, Used AC Buyer', NULL, NULL, '<p>DEL Enterprises, Old Office Furniture Buyer in Delhi NCR, Office Dismantling Service Vendor in Delhi NCR, Used Office Generator Buyer In Gurgaon, Used AC Buyer</p>', NULL, 'header and footer', 'cms page', 'enable', '2021-08-01 00:00:55.000000', '2021-08-01 00:00:55.000000');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(50) NOT NULL,
  `user_name` text,
  `comment` mediumtext,
  `comment_on` enum('product','blog','service') DEFAULT NULL,
  `comment_on_id` int(50) DEFAULT NULL,
  `stars` int(50) DEFAULT NULL,
  `status` enum('enable','disable') NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_name`, `comment`, `comment_on`, `comment_on_id`, `stars`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Suraj Kumar', 'AWSOME', 'blog', 10, NULL, 'enable', '2020-11-17 22:01:54.000000', '2020-11-17 22:01:54.000000');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `owner_name` text,
  `email` varchar(100) NOT NULL,
  `enquiry_email` varchar(200) DEFAULT NULL,
  `mobile` text NOT NULL,
  `landline` text,
  `fax` text,
  `whatsapp_number` text,
  `call_number` text,
  `office_address` mediumtext,
  `contact_address` mediumtext,
  `contact_state` text,
  `contact_city` text,
  `contact_pincode` int(100) DEFAULT NULL,
  `contact_country` text,
  `contact_website` varchar(100) DEFAULT NULL,
  `catelog_url` varchar(100) DEFAULT NULL,
  `copyright` text,
  `design_and_develope` text,
  `design_and_develope_url` varchar(100) DEFAULT NULL,
  `skype_link` varchar(100) DEFAULT NULL,
  `facebook_link` varchar(100) DEFAULT NULL,
  `youtube_link` varchar(100) DEFAULT NULL,
  `insta_link` varchar(100) DEFAULT NULL,
  `twitter_link` varchar(100) DEFAULT NULL,
  `linkdin_link` varchar(100) DEFAULT NULL,
  `google_map` varchar(700) DEFAULT NULL,
  `status` enum('enable','disable') DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `owner_name`, `email`, `enquiry_email`, `mobile`, `landline`, `fax`, `whatsapp_number`, `call_number`, `office_address`, `contact_address`, `contact_state`, `contact_city`, `contact_pincode`, `contact_country`, `contact_website`, `catelog_url`, `copyright`, `design_and_develope`, `design_and_develope_url`, `skype_link`, `facebook_link`, `youtube_link`, `insta_link`, `twitter_link`, `linkdin_link`, `google_map`, `status`, `created_at`, `updated_at`) VALUES
(2, 'R. Home & Healthcare Services', 'Mr. Anil Kumar', 'anilk0352@gmail.com', 'anilk0352@gmail.com', '99908 80225', '99908 80225', '9763571810', '99908 80225', '99908 80225', 'C18-Gali No.5 SYNDICATE ENCLAVE  DABRI MOR', 'C18-Gali No.5 SYNDICATE ENCLAVE  DABRI MOR', 'Delhi', 'New Delhi', 110045, 'India', NULL, NULL, 'R. Home & Healthcare Services', 'Perfect Web Experts', 'Perfect Web Experts', '#', '#', '#', '#', '#', '#', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.504786307836!2d77.0835592150822!3d28.614629532424832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d04b376ba2b89%3A0x88b36c1f3329b5be!2sDabri%20Mor!5e0!3m2!1sen!2sin!4v1624549330148!5m2!1sen!2sin', 'enable', '2020-08-17 02:54:07.000000', '2021-06-24 10:12:42.000000');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phonecode` int(11) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `created_at`, `updated_at`) VALUES
(1, 'AF', 'Afghanistan', 93, NULL, NULL),
(2, 'AL', 'Albania', 355, NULL, NULL),
(3, 'DZ', 'Algeria', 213, NULL, NULL),
(4, 'AS', 'American Samoa', 1684, NULL, NULL),
(5, 'AD', 'Andorra', 376, NULL, NULL),
(6, 'AO', 'Angola', 244, NULL, NULL),
(7, 'AI', 'Anguilla', 1264, NULL, NULL),
(8, 'AQ', 'Antarctica', 0, NULL, NULL),
(9, 'AG', 'Antigua And Barbuda', 1268, NULL, NULL),
(10, 'AR', 'Argentina', 54, NULL, NULL),
(11, 'AM', 'Armenia', 374, NULL, NULL),
(12, 'AW', 'Aruba', 297, NULL, NULL),
(13, 'AU', 'Australia', 61, NULL, NULL),
(14, 'AT', 'Austria', 43, NULL, NULL),
(15, 'AZ', 'Azerbaijan', 994, NULL, NULL),
(16, 'BS', 'Bahamas The', 1242, NULL, NULL),
(17, 'BH', 'Bahrain', 973, NULL, NULL),
(18, 'BD', 'Bangladesh', 880, NULL, NULL),
(19, 'BB', 'Barbados', 1246, NULL, NULL),
(20, 'BY', 'Belarus', 375, NULL, NULL),
(21, 'BE', 'Belgium', 32, NULL, NULL),
(22, 'BZ', 'Belize', 501, NULL, NULL),
(23, 'BJ', 'Benin', 229, NULL, NULL),
(24, 'BM', 'Bermuda', 1441, NULL, NULL),
(25, 'BT', 'Bhutan', 975, NULL, NULL),
(26, 'BO', 'Bolivia', 591, NULL, NULL),
(27, 'BA', 'Bosnia and Herzegovina', 387, NULL, NULL),
(28, 'BW', 'Botswana', 267, NULL, NULL),
(29, 'BV', 'Bouvet Island', 0, NULL, NULL),
(30, 'BR', 'Brazil', 55, NULL, NULL),
(31, 'IO', 'British Indian Ocean Territory', 246, NULL, NULL),
(32, 'BN', 'Brunei', 673, NULL, NULL),
(33, 'BG', 'Bulgaria', 359, NULL, NULL),
(34, 'BF', 'Burkina Faso', 226, NULL, NULL),
(35, 'BI', 'Burundi', 257, NULL, NULL),
(36, 'KH', 'Cambodia', 855, NULL, NULL),
(37, 'CM', 'Cameroon', 237, NULL, NULL),
(38, 'CA', 'Canada', 1, NULL, NULL),
(39, 'CV', 'Cape Verde', 238, NULL, NULL),
(40, 'KY', 'Cayman Islands', 1345, NULL, NULL),
(41, 'CF', 'Central African Republic', 236, NULL, NULL),
(42, 'TD', 'Chad', 235, NULL, NULL),
(43, 'CL', 'Chile', 56, NULL, NULL),
(44, 'CN', 'China', 86, NULL, NULL),
(45, 'CX', 'Christmas Island', 61, NULL, NULL),
(46, 'CC', 'Cocos (Keeling) Islands', 672, NULL, NULL),
(47, 'CO', 'Colombia', 57, NULL, NULL),
(48, 'KM', 'Comoros', 269, NULL, NULL),
(49, 'CG', 'Republic Of The Congo', 242, NULL, NULL),
(50, 'CD', 'Democratic Republic Of The Congo', 242, NULL, NULL),
(51, 'CK', 'Cook Islands', 682, NULL, NULL),
(52, 'CR', 'Costa Rica', 506, NULL, NULL),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225, NULL, NULL),
(54, 'HR', 'Croatia (Hrvatska)', 385, NULL, NULL),
(55, 'CU', 'Cuba', 53, NULL, NULL),
(56, 'CY', 'Cyprus', 357, NULL, NULL),
(57, 'CZ', 'Czech Republic', 420, NULL, NULL),
(58, 'DK', 'Denmark', 45, NULL, NULL),
(59, 'DJ', 'Djibouti', 253, NULL, NULL),
(60, 'DM', 'Dominica', 1767, NULL, NULL),
(61, 'DO', 'Dominican Republic', 1809, NULL, NULL),
(62, 'TP', 'East Timor', 670, NULL, NULL),
(63, 'EC', 'Ecuador', 593, NULL, NULL),
(64, 'EG', 'Egypt', 20, NULL, NULL),
(65, 'SV', 'El Salvador', 503, NULL, NULL),
(66, 'GQ', 'Equatorial Guinea', 240, NULL, NULL),
(67, 'ER', 'Eritrea', 291, NULL, NULL),
(68, 'EE', 'Estonia', 372, NULL, NULL),
(69, 'ET', 'Ethiopia', 251, NULL, NULL),
(70, 'XA', 'External Territories of Australia', 61, NULL, NULL),
(71, 'FK', 'Falkland Islands', 500, NULL, NULL),
(72, 'FO', 'Faroe Islands', 298, NULL, NULL),
(73, 'FJ', 'Fiji Islands', 679, NULL, NULL),
(74, 'FI', 'Finland', 358, NULL, NULL),
(75, 'FR', 'France', 33, NULL, NULL),
(76, 'GF', 'French Guiana', 594, NULL, NULL),
(77, 'PF', 'French Polynesia', 689, NULL, NULL),
(78, 'TF', 'French Southern Territories', 0, NULL, NULL),
(79, 'GA', 'Gabon', 241, NULL, NULL),
(80, 'GM', 'Gambia The', 220, NULL, NULL),
(81, 'GE', 'Georgia', 995, NULL, NULL),
(82, 'DE', 'Germany', 49, NULL, NULL),
(83, 'GH', 'Ghana', 233, NULL, NULL),
(84, 'GI', 'Gibraltar', 350, NULL, NULL),
(85, 'GR', 'Greece', 30, NULL, NULL),
(86, 'GL', 'Greenland', 299, NULL, NULL),
(87, 'GD', 'Grenada', 1473, NULL, NULL),
(88, 'GP', 'Guadeloupe', 590, NULL, NULL),
(89, 'GU', 'Guam', 1671, NULL, NULL),
(90, 'GT', 'Guatemala', 502, NULL, NULL),
(91, 'XU', 'Guernsey and Alderney', 44, NULL, NULL),
(92, 'GN', 'Guinea', 224, NULL, NULL),
(93, 'GW', 'Guinea-Bissau', 245, NULL, NULL),
(94, 'GY', 'Guyana', 592, NULL, NULL),
(95, 'HT', 'Haiti', 509, NULL, NULL),
(96, 'HM', 'Heard and McDonald Islands', 0, NULL, NULL),
(97, 'HN', 'Honduras', 504, NULL, NULL),
(98, 'HK', 'Hong Kong S.A.R.', 852, NULL, NULL),
(99, 'HU', 'Hungary', 36, NULL, NULL),
(100, 'IS', 'Iceland', 354, NULL, NULL),
(101, 'IN', 'India', 91, NULL, NULL),
(102, 'ID', 'Indonesia', 62, NULL, NULL),
(103, 'IR', 'Iran', 98, NULL, NULL),
(104, 'IQ', 'Iraq', 964, NULL, NULL),
(105, 'IE', 'Ireland', 353, NULL, NULL),
(106, 'IL', 'Israel', 972, NULL, NULL),
(107, 'IT', 'Italy', 39, NULL, NULL),
(108, 'JM', 'Jamaica', 1876, NULL, NULL),
(109, 'JP', 'Japan', 81, NULL, NULL),
(110, 'XJ', 'Jersey', 44, NULL, NULL),
(111, 'JO', 'Jordan', 962, NULL, NULL),
(112, 'KZ', 'Kazakhstan', 7, NULL, NULL),
(113, 'KE', 'Kenya', 254, NULL, NULL),
(114, 'KI', 'Kiribati', 686, NULL, NULL),
(115, 'KP', 'Korea North', 850, NULL, NULL),
(116, 'KR', 'Korea South', 82, NULL, NULL),
(117, 'KW', 'Kuwait', 965, NULL, NULL),
(118, 'KG', 'Kyrgyzstan', 996, NULL, NULL),
(119, 'LA', 'Laos', 856, NULL, NULL),
(120, 'LV', 'Latvia', 371, NULL, NULL),
(121, 'LB', 'Lebanon', 961, NULL, NULL),
(122, 'LS', 'Lesotho', 266, NULL, NULL),
(123, 'LR', 'Liberia', 231, NULL, NULL),
(124, 'LY', 'Libya', 218, NULL, NULL),
(125, 'LI', 'Liechtenstein', 423, NULL, NULL),
(126, 'LT', 'Lithuania', 370, NULL, NULL),
(127, 'LU', 'Luxembourg', 352, NULL, NULL),
(128, 'MO', 'Macau S.A.R.', 853, NULL, NULL),
(129, 'MK', 'Macedonia', 389, NULL, NULL),
(130, 'MG', 'Madagascar', 261, NULL, NULL),
(131, 'MW', 'Malawi', 265, NULL, NULL),
(132, 'MY', 'Malaysia', 60, NULL, NULL),
(133, 'MV', 'Maldives', 960, NULL, NULL),
(134, 'ML', 'Mali', 223, NULL, NULL),
(135, 'MT', 'Malta', 356, NULL, NULL),
(136, 'XM', 'Man (Isle of)', 44, NULL, NULL),
(137, 'MH', 'Marshall Islands', 692, NULL, NULL),
(138, 'MQ', 'Martinique', 596, NULL, NULL),
(139, 'MR', 'Mauritania', 222, NULL, NULL),
(140, 'MU', 'Mauritius', 230, NULL, NULL),
(141, 'YT', 'Mayotte', 269, NULL, NULL),
(142, 'MX', 'Mexico', 52, NULL, NULL),
(143, 'FM', 'Micronesia', 691, NULL, NULL),
(144, 'MD', 'Moldova', 373, NULL, NULL),
(145, 'MC', 'Monaco', 377, NULL, NULL),
(146, 'MN', 'Mongolia', 976, NULL, NULL),
(147, 'MS', 'Montserrat', 1664, NULL, NULL),
(148, 'MA', 'Morocco', 212, NULL, NULL),
(149, 'MZ', 'Mozambique', 258, NULL, NULL),
(150, 'MM', 'Myanmar', 95, NULL, NULL),
(151, 'NA', 'Namibia', 264, NULL, NULL),
(152, 'NR', 'Nauru', 674, NULL, NULL),
(153, 'NP', 'Nepal', 977, NULL, NULL),
(154, 'AN', 'Netherlands Antilles', 599, NULL, NULL),
(155, 'NL', 'Netherlands The', 31, NULL, NULL),
(156, 'NC', 'New Caledonia', 687, NULL, NULL),
(157, 'NZ', 'New Zealand', 64, NULL, NULL),
(158, 'NI', 'Nicaragua', 505, NULL, NULL),
(159, 'NE', 'Niger', 227, NULL, NULL),
(160, 'NG', 'Nigeria', 234, NULL, NULL),
(161, 'NU', 'Niue', 683, NULL, NULL),
(162, 'NF', 'Norfolk Island', 672, NULL, NULL),
(163, 'MP', 'Northern Mariana Islands', 1670, NULL, NULL),
(164, 'NO', 'Norway', 47, NULL, NULL),
(165, 'OM', 'Oman', 968, NULL, NULL),
(166, 'PK', 'Pakistan', 92, NULL, NULL),
(167, 'PW', 'Palau', 680, NULL, NULL),
(168, 'PS', 'Palestinian Territory Occupied', 970, NULL, NULL),
(169, 'PA', 'Panama', 507, NULL, NULL),
(170, 'PG', 'Papua new Guinea', 675, NULL, NULL),
(171, 'PY', 'Paraguay', 595, NULL, NULL),
(172, 'PE', 'Peru', 51, NULL, NULL),
(173, 'PH', 'Philippines', 63, NULL, NULL),
(174, 'PN', 'Pitcairn Island', 0, NULL, NULL),
(175, 'PL', 'Poland', 48, NULL, NULL),
(176, 'PT', 'Portugal', 351, NULL, NULL),
(177, 'PR', 'Puerto Rico', 1787, NULL, NULL),
(178, 'QA', 'Qatar', 974, NULL, NULL),
(179, 'RE', 'Reunion', 262, NULL, NULL),
(180, 'RO', 'Romania', 40, NULL, NULL),
(181, 'RU', 'Russia', 70, NULL, NULL),
(182, 'RW', 'Rwanda', 250, NULL, NULL),
(183, 'SH', 'Saint Helena', 290, NULL, NULL),
(184, 'KN', 'Saint Kitts And Nevis', 1869, NULL, NULL),
(185, 'LC', 'Saint Lucia', 1758, NULL, NULL),
(186, 'PM', 'Saint Pierre and Miquelon', 508, NULL, NULL),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784, NULL, NULL),
(188, 'WS', 'Samoa', 684, NULL, NULL),
(189, 'SM', 'San Marino', 378, NULL, NULL),
(190, 'ST', 'Sao Tome and Principe', 239, NULL, NULL),
(191, 'SA', 'Saudi Arabia', 966, NULL, NULL),
(192, 'SN', 'Senegal', 221, NULL, NULL),
(193, 'RS', 'Serbia', 381, NULL, NULL),
(194, 'SC', 'Seychelles', 248, NULL, NULL),
(195, 'SL', 'Sierra Leone', 232, NULL, NULL),
(196, 'SG', 'Singapore', 65, NULL, NULL),
(197, 'SK', 'Slovakia', 421, NULL, NULL),
(198, 'SI', 'Slovenia', 386, NULL, NULL),
(199, 'XG', 'Smaller Territories of the UK', 44, NULL, NULL),
(200, 'SB', 'Solomon Islands', 677, NULL, NULL),
(201, 'SO', 'Somalia', 252, NULL, NULL),
(202, 'ZA', 'South Africa', 27, NULL, NULL),
(203, 'GS', 'South Georgia', 0, NULL, NULL),
(204, 'SS', 'South Sudan', 211, NULL, NULL),
(205, 'ES', 'Spain', 34, NULL, NULL),
(206, 'LK', 'Sri Lanka', 94, NULL, NULL),
(207, 'SD', 'Sudan', 249, NULL, NULL),
(208, 'SR', 'Suriname', 597, NULL, NULL),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47, NULL, NULL),
(210, 'SZ', 'Swaziland', 268, NULL, NULL),
(211, 'SE', 'Sweden', 46, NULL, NULL),
(212, 'CH', 'Switzerland', 41, NULL, NULL),
(213, 'SY', 'Syria', 963, NULL, NULL),
(214, 'TW', 'Taiwan', 886, NULL, NULL),
(215, 'TJ', 'Tajikistan', 992, NULL, NULL),
(216, 'TZ', 'Tanzania', 255, NULL, NULL),
(217, 'TH', 'Thailand', 66, NULL, NULL),
(218, 'TG', 'Togo', 228, NULL, NULL),
(219, 'TK', 'Tokelau', 690, NULL, NULL),
(220, 'TO', 'Tonga', 676, NULL, NULL),
(221, 'TT', 'Trinidad And Tobago', 1868, NULL, NULL),
(222, 'TN', 'Tunisia', 216, NULL, NULL),
(223, 'TR', 'Turkey', 90, NULL, NULL),
(224, 'TM', 'Turkmenistan', 7370, NULL, NULL),
(225, 'TC', 'Turks And Caicos Islands', 1649, NULL, NULL),
(226, 'TV', 'Tuvalu', 688, NULL, NULL),
(227, 'UG', 'Uganda', 256, NULL, NULL),
(228, 'UA', 'Ukraine', 380, NULL, NULL),
(229, 'AE', 'United Arab Emirates', 971, NULL, NULL),
(230, 'GB', 'United Kingdom', 44, NULL, NULL),
(231, 'US', 'United States', 1, NULL, NULL),
(232, 'UM', 'United States Minor Outlying Islands', 1, NULL, NULL),
(233, 'UY', 'Uruguay', 598, NULL, NULL),
(234, 'UZ', 'Uzbekistan', 998, NULL, NULL),
(235, 'VU', 'Vanuatu', 678, NULL, NULL),
(236, 'VA', 'Vatican City State (Holy See)', 39, NULL, NULL),
(237, 'VE', 'Venezuela', 58, NULL, NULL),
(238, 'VN', 'Vietnam', 84, NULL, NULL),
(239, 'VG', 'Virgin Islands (British)', 1284, NULL, NULL),
(240, 'VI', 'Virgin Islands (US)', 1340, NULL, NULL),
(241, 'WF', 'Wallis And Futuna Islands', 681, NULL, NULL),
(242, 'EH', 'Western Sahara', 212, NULL, NULL),
(243, 'YE', 'Yemen', 967, NULL, NULL),
(244, 'YU', 'Yugoslavia', 38, NULL, NULL),
(245, 'ZM', 'Zambia', 260, NULL, NULL),
(246, 'ZW', 'Zimbabwe', 263, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

CREATE TABLE `gallery_categories` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `status` enum('enable','disable') NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_categories`
--

INSERT INTO `gallery_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(11, 'Toughened Glass Partition', 'enable', '2020-12-26 05:38:34.000000', '2020-12-26 05:38:34.000000'),
(12, 'LED MIRROR WITH TOUCH SENSOR', 'enable', '2020-12-26 05:54:33.000000', '2020-12-26 05:54:33.000000'),
(13, 'ALUMINIUM FABRICATION', 'enable', '2020-12-26 07:00:34.000000', '2020-12-26 07:00:34.000000'),
(14, 'TOUGHENED GLASS FITTINGS', 'enable', '2020-12-28 07:14:07.000000', '2020-12-28 07:14:07.000000');

-- --------------------------------------------------------

--
-- Table structure for table `hows`
--

CREATE TABLE `hows` (
  `id` int(50) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `short_description` mediumtext,
  `order_by` int(50) DEFAULT NULL,
  `status` enum('enable','disable') DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hows`
--

INSERT INTO `hows` (`id`, `title`, `image`, `short_description`, `order_by`, `status`, `created_at`, `updated_at`) VALUES
(25, 'LOREM IPSUM TITLE WRITE HERE', '1612401181.png', '<p>pork sirloi loine beefb andoe uillen uillen capicola swine a kevin mignon tritip picolakevin mignon tritip picola kevinsdertand filet mignon</p>', 0, 'enable', '2021-02-03 19:43:01.000000', '2021-02-03 19:43:01.000000');

-- --------------------------------------------------------

--
-- Table structure for table `icons`
--

CREATE TABLE `icons` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` enum('enable','disable') DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `icons`
--

INSERT INTO `icons` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Net maker', '1612387905.png', 'enable', '2020-11-14 02:07:46.000000', '2021-02-03 16:01:45.000000');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `category` text,
  `image` varchar(50) DEFAULT NULL,
  `alternative_text` text,
  `status` enum('enable','disable') NOT NULL,
  `product_id` int(100) DEFAULT NULL,
  `set_as_home` enum('yes','no') DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `category`, `image`, `alternative_text`, `status`, `product_id`, `set_as_home`, `created_at`, `updated_at`) VALUES
(325, 'Electrician Services', NULL, '1616007665.jpg', 'gallery', 'enable', NULL, 'yes', '2021-03-13 14:20:53.000000', '2021-03-17 13:31:05.000000'),
(326, 'Electrician Services', NULL, '1615740935.jpg', 'gallery', 'enable', NULL, 'yes', '2021-03-13 14:21:24.000000', '2021-03-14 11:25:35.000000'),
(327, 'AC Repair & Services', 'No Category', '1615741169.png', 'AC Repair & Services in Goa', 'enable', NULL, 'yes', '2021-03-14 11:29:29.000000', '2021-03-14 11:29:29.000000'),
(328, 'AC Repair & Services', NULL, '1615741366.png', 'AC Repair & Services in Goa', 'enable', NULL, 'yes', '2021-03-14 11:32:46.000000', '2021-03-14 11:32:53.000000');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` enum('enable','disable') DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Electrical', '1623480326.png', 'enable', '2021-03-13 00:57:01.000000', '2021-06-12 01:15:26.000000');

-- --------------------------------------------------------

--
-- Table structure for table `measures`
--

CREATE TABLE `measures` (
  `id` int(50) NOT NULL,
  `order_number` varchar(200) NOT NULL,
  `type_of_dress` varchar(200) DEFAULT NULL,
  `shirt_dot_length` varchar(200) DEFAULT NULL,
  `shirt_waist_line` varchar(200) DEFAULT NULL,
  `shirt_length` varchar(200) DEFAULT NULL,
  `shirt_breast` varchar(200) DEFAULT NULL,
  `shirt_upper_chest` varchar(200) DEFAULT NULL,
  `shirt_waist` varchar(200) DEFAULT NULL,
  `shirt_stomach` varchar(200) DEFAULT NULL,
  `shirt_hip` varchar(200) DEFAULT NULL,
  `shirt_sholuder` varchar(200) DEFAULT NULL,
  `shirt_sleeves` varchar(200) DEFAULT NULL,
  `shirt_sleeves_bottom` varchar(200) DEFAULT NULL,
  `shirt_neck_front` varchar(200) DEFAULT NULL,
  `shirt_neck_back` varchar(200) DEFAULT NULL,
  `shirt_arm_hole` varchar(200) DEFAULT NULL,
  `shirt_slits` varchar(200) DEFAULT NULL,
  `shirt_ghera` varchar(200) DEFAULT NULL,
  `pant_thighs` varchar(200) DEFAULT NULL,
  `pant_knee` varchar(200) DEFAULT NULL,
  `pant_bottom` varchar(200) DEFAULT NULL,
  `pant_length` varchar(200) DEFAULT NULL,
  `pant_inseam_length` varchar(200) DEFAULT NULL,
  `pant_waist` varchar(200) DEFAULT NULL,
  `pant_croach` varchar(200) DEFAULT NULL,
  `salwar_length` varchar(200) DEFAULT NULL,
  `salwar_bottom` varchar(200) DEFAULT NULL,
  `salwar_waist` varchar(200) DEFAULT NULL,
  `chooridaar_length` varchar(200) DEFAULT NULL,
  `chooridaar_thigh` varchar(200) DEFAULT NULL,
  `chooridaar_knee` varchar(200) DEFAULT NULL,
  `chooridaar_calf` varchar(200) DEFAULT NULL,
  `chooridaar_bottom` varchar(200) DEFAULT NULL,
  `chooridaar_waist` varchar(200) DEFAULT NULL,
  `lhenga_length` varchar(200) DEFAULT NULL,
  `lhenga_waist` varchar(200) DEFAULT NULL,
  `lhenga_high_waist` varchar(200) DEFAULT NULL,
  `lhenga_lower_waist` varchar(200) DEFAULT NULL,
  `lhenga_hip` varchar(200) DEFAULT NULL,
  `user_name` varchar(200) DEFAULT NULL,
  `user_number` varchar(200) DEFAULT NULL,
  `user_address` varchar(200) DEFAULT NULL,
  `status` enum('working','completed','new') NOT NULL DEFAULT 'new',
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `measures`
--

INSERT INTO `measures` (`id`, `order_number`, `type_of_dress`, `shirt_dot_length`, `shirt_waist_line`, `shirt_length`, `shirt_breast`, `shirt_upper_chest`, `shirt_waist`, `shirt_stomach`, `shirt_hip`, `shirt_sholuder`, `shirt_sleeves`, `shirt_sleeves_bottom`, `shirt_neck_front`, `shirt_neck_back`, `shirt_arm_hole`, `shirt_slits`, `shirt_ghera`, `pant_thighs`, `pant_knee`, `pant_bottom`, `pant_length`, `pant_inseam_length`, `pant_waist`, `pant_croach`, `salwar_length`, `salwar_bottom`, `salwar_waist`, `chooridaar_length`, `chooridaar_thigh`, `chooridaar_knee`, `chooridaar_calf`, `chooridaar_bottom`, `chooridaar_waist`, `lhenga_length`, `lhenga_waist`, `lhenga_high_waist`, `lhenga_lower_waist`, `lhenga_hip`, `user_name`, `user_number`, `user_address`, `status`, `created_at`, `updated_at`) VALUES
(11, 'YOUME-1614974016', 'Lhenga Measurement', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11', '22', '33', '44', '55', 'jhanvi sharma', '8976543210', 'noida', 'completed', '2021-03-05 14:23:36.000000', '2021-03-05 15:06:48.000000');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `url` varchar(150) NOT NULL,
  `short_description` mediumtext,
  `long_description` longtext,
  `image` varchar(100) DEFAULT NULL,
  `meta_title` text,
  `meta_description` text,
  `meta_keywords` text,
  `order_by` text,
  `set_as_home` enum('yes','no') NOT NULL DEFAULT 'no',
  `status` enum('enable','disable') NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `name`, `url`, `short_description`, `long_description`, `image`, `meta_title`, `meta_description`, `meta_keywords`, `order_by`, `set_as_home`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Offer Blog', 'Offer-Blog', '<p>Cleaning and disinfecting are part of a broad approach to preventing infectious diseases at home. To help slow the spread, cover coughs and sneezes with your elbow or tissue; wash your hands, and keep sick people away from others. If you are feeling ill, stay home from work or school. Below are tips on how to slow the spread of germs, specifically through cleaning and disinfecting.</p>', '<p><strong><span style=\"font-size:18px\">1. Know the difference between cleaning, disinfecting, and sanitizing.</span></strong></p>\r\n\r\n<p>Cleaning removes germs, dirt, and impurities from surfaces or objects. Cleaning works by using soap (or detergent) and water to physically remove germs from surfaces. This process does not necessarily kill germs, but by removing them, it lowers their numbers and the risk of spreading infection.</p>\r\n\r\n<p>Disinfecting kills germs on surfaces or objects. Disinfecting works by using chemicals to kill germs on surfaces or objects. This process does not necessarily clean dirty surfaces or remove germs, but by killing germs on a surface after cleaning, it can further lower the risk of spreading infection.</p>\r\n\r\n<p>Sanitizing lowers the number of germs on surfaces or objects to a safe level, as judged by public health standards or requirements. This process works by either cleaning or disinfecting surfaces or objects to lower the risk of spreading infection.</p>\r\n\r\n<p><strong><span style=\"font-size:18px\">2. Clean and disinfect surfaces and objects that are touched often.</span></strong></p>\r\n\r\n<p>Follow standard procedures for routine cleaning and disinfecting. Typically, this means daily sanitizing surfaces and objects that are touched often, such as kitchen countertops, doorknobs, desks, computer/laptop keyboards, faucet handles, and phones. Standard procedures often call for disinfecting specific areas, like bathrooms.</p>\r\n\r\n<p>Immediately clean surfaces and objects that are visibly soiled. If surfaces or objects are soiled with body fluids or blood, use gloves and other standard precautions to avoid coming into contact with the fluid. Remove the spill, and then clean and disinfect the surface.</p>\r\n\r\n<p><strong><span style=\"font-size:18px\">3. Simply do routine cleaning and disinfecting.</span></strong></p>\r\n\r\n<p>It&rsquo;s important to match your cleaning and disinfecting activities to the types of germs you want to remove or kill. Most studies have shown that some viruses can live and potentially infect a person for only 2 to 8 hours after being deposited on a surface.</p>\r\n\r\n<p>Some viruses are relatively fragile, so standard cleaning and disinfecting practices are sufficient to remove or kill them. Special cleaning and disinfecting processes, including wiping down walls and ceilings, frequently using room air deodorizers, and fumigating, are not necessary or recommended. These processes can irritate eyes, noses, throats, and skin; aggravate asthma; and cause other serious side effects.</p>', '1605320032.jpg', 'qwertyuiop', 'qwertyuiop[qwertuiop', 'SAASDSDSADSA', '0', 'yes', 'enable', '2020-08-16 19:32:37.000000', '2020-11-13 20:43:52.000000'),
(12, 'blog offer 2', 'blog-offer-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'enable', '2020-11-13 20:44:07.000000', '2020-11-13 20:44:07.000000');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `price` double DEFAULT NULL,
  `duration` enum('Weekly','Monthly','Yearly') DEFAULT NULL,
  `description` longtext,
  `image` varchar(200) DEFAULT NULL,
  `status` enum('enable','disable') DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('virusman.143@gmail.com', '$2y$10$h9pVM/EhpzY.LEdHh5EgR.ASqCMYHAEH4QDKg8JQDY.Rr7US87GqO', '2020-06-22 07:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `category_id` int(50) DEFAULT NULL,
  `subcategory_id` int(50) DEFAULT NULL,
  `url` varchar(100) NOT NULL,
  `short_description` mediumtext,
  `long_description` longtext,
  `image` varchar(50) DEFAULT NULL,
  `additional_info` longtext,
  `application` longtext,
  `technical` longtext,
  `price` varchar(100) DEFAULT NULL,
  `minimum_order_amount` varchar(200) DEFAULT NULL,
  `meta_title` text,
  `meta_description` text,
  `meta_keywords` text,
  `stock_status` enum('in stock','out of stock') DEFAULT NULL,
  `product_status` enum('enable','disable') NOT NULL,
  `is_popular` enum('yes','no') DEFAULT NULL,
  `is_featured` enum('yes','no') DEFAULT NULL,
  `is_hot` enum('yes','no') DEFAULT NULL,
  `is_best` enum('yes','no') DEFAULT NULL,
  `is_new_arraival` enum('yes','no') DEFAULT NULL,
  `is_special_offer` enum('yes','no') DEFAULT NULL,
  `set_as_home` enum('yes','no') DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `subcategory_id`, `url`, `short_description`, `long_description`, `image`, `additional_info`, `application`, `technical`, `price`, `minimum_order_amount`, `meta_title`, `meta_description`, `meta_keywords`, `stock_status`, `product_status`, `is_popular`, `is_featured`, `is_hot`, `is_best`, `is_new_arraival`, `is_special_offer`, `set_as_home`, `created_at`, `updated_at`) VALUES
(88, 'Oxygen Concentrator', NULL, NULL, 'Oxygen-Concentrator', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '1623478493.png', NULL, NULL, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'in stock', 'enable', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', '2021-06-07 10:51:22.000000', '2021-06-12 00:45:20.000000'),
(89, 'CPAP', NULL, NULL, 'CPAP', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '1623478238.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'in stock', 'enable', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', '2021-06-07 10:51:43.000000', '2021-06-12 01:32:09.000000'),
(90, 'Bipap', NULL, NULL, 'Bipap', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '1623478320.png', NULL, NULL, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'in stock', 'enable', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '2021-06-07 10:51:59.000000', '2021-06-12 00:42:00.000000'),
(91, 'Oxygen Cylinders', NULL, NULL, 'Oxygen-Cylinders', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '1623475748.png', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', NULL, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'in stock', 'enable', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', '2021-06-07 10:52:26.000000', '2021-06-11 23:59:08.000000');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(50) NOT NULL,
  `title` text NOT NULL,
  `project_url` varchar(200) DEFAULT NULL,
  `category_id` int(50) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `content` longtext,
  `image` varchar(50) DEFAULT NULL,
  `meta_title` text,
  `meta_description` text,
  `meta_keywords` varchar(400) DEFAULT NULL,
  `is_popular` enum('yes','no') DEFAULT NULL,
  `is_featured` enum('yes','no') DEFAULT NULL,
  `is_hot` enum('yes','no') DEFAULT NULL,
  `is_best` enum('yes','no') DEFAULT NULL,
  `is_new_arraival` enum('yes','no') DEFAULT NULL,
  `is_special_offer` enum('yes','no') DEFAULT NULL,
  `set_as_home` enum('yes','no') DEFAULT NULL,
  `order_by` text,
  `show_in` enum('portfollio','project','seoranking','mapping') NOT NULL DEFAULT 'seoranking',
  `status` enum('enable','disable') DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `project_url`, `category_id`, `url`, `content`, `image`, `meta_title`, `meta_description`, `meta_keywords`, `is_popular`, `is_featured`, `is_hot`, `is_best`, `is_new_arraival`, `is_special_offer`, `set_as_home`, `order_by`, `show_in`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Toughened Glass Work', NULL, NULL, 'Toughened-Glass-Work', NULL, '1612397012.jpg', NULL, NULL, NULL, 'no', 'yes', 'no', 'no', 'no', 'no', 'no', NULL, 'portfollio', 'enable', '2020-11-17 19:42:47.000000', '2021-02-03 18:33:32.000000');

-- --------------------------------------------------------

--
-- Table structure for table `project_categories`
--

CREATE TABLE `project_categories` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` enum('enable','disable') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_categories`
--

INSERT INTO `project_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Project categroy 1', 'enable', '2020-11-13 04:14:43', '2020-11-13 04:14:43'),
(4, 'Project categroy 2', 'enable', '2020-11-13 04:14:54', '2020-11-13 04:14:54'),
(5, 'Project category 3', 'enable', '2020-11-13 04:15:04', '2020-11-13 04:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(200) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `update_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seorankings`
--

CREATE TABLE `seorankings` (
  `id` int(50) NOT NULL,
  `project_id` int(50) DEFAULT NULL,
  `keyword` longtext,
  `page_result` text,
  `status` enum('enable','disable') DEFAULT 'enable',
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seorankings`
--

INSERT INTO `seorankings` (`id`, `project_id`, `keyword`, `page_result`, `status`, `updated_at`, `created_at`) VALUES
(12, 14, 'Septic Tank Cleaning Services in Hyderabad , Septic Tank Cleaning Services in Banjara Hills , Septic Tank Cleaning Services in Secunderabad , Septic Tank cleaners in Hyderabad , Residential Septic Cleaning Services in Hyderabad', '1st Page , 1st Page , 1st Page , 1st Page , 1st Page', 'enable', '2020-12-11 06:11:45.000000', '2020-12-10 02:45:56.000000'),
(15, 15, 'RO Service in Jakkanpur, RO AMC Service Provider in Rajbanshi Nagar, Aquafresh Ro Services in Patna, Hindware Chimney Service & maintenance Services in Patna, RO AMC Services in Mithapur', '1st Page , 1st Page  , 1st Page, 1st Page , 1st Page', 'enable', '2020-12-11 05:55:38.000000', '2020-12-10 14:05:24.000000');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `url` varchar(100) NOT NULL,
  `short_description` mediumtext,
  `long_description` longtext,
  `image` varchar(50) DEFAULT NULL,
  `meta_title` text,
  `meta_description` text,
  `meta_keywords` text,
  `is_popular` enum('yes','no') DEFAULT NULL,
  `is_featured` enum('yes','no') DEFAULT NULL,
  `is_hot` enum('yes','no') DEFAULT NULL,
  `is_best` enum('yes','no') DEFAULT NULL,
  `is_new_arraival` enum('yes','no') DEFAULT NULL,
  `is_special_offer` enum('yes','no') DEFAULT NULL,
  `set_as_home` enum('yes','no') DEFAULT NULL,
  `status` enum('enable','disable') DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `url`, `short_description`, `long_description`, `image`, `meta_title`, `meta_description`, `meta_keywords`, `is_popular`, `is_featured`, `is_hot`, `is_best`, `is_new_arraival`, `is_special_offer`, `set_as_home`, `status`, `created_at`, `updated_at`) VALUES
(26, 'Rent Oxygen cylinders', 'Rent-Oxygen-cylinders', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '1623479536.jpg', NULL, NULL, NULL, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'enable', '2021-06-07 10:54:19.000000', '2021-06-12 01:02:53.000000');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` int(50) NOT NULL,
  `title` text NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  `content` longtext,
  `image` varchar(50) DEFAULT NULL,
  `status` enum('enable','disable') DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `title`, `url`, `content`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'story', 'story', NULL, NULL, 'enable', '2020-11-13 21:27:37.000000', '2020-11-13 21:35:26.000000');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `category_id` int(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `url` varchar(100) NOT NULL,
  `short_description` mediumtext,
  `long_description` longtext,
  `additional_info` longtext,
  `application` longtext,
  `technical` longtext,
  `meta_title` text,
  `meta_description` mediumtext,
  `meta_keywords` mediumtext,
  `price_250` varchar(100) DEFAULT NULL,
  `price_500` varchar(50) DEFAULT NULL,
  `price_1000` varchar(50) DEFAULT NULL,
  `price_2000` varchar(50) DEFAULT NULL,
  `status` enum('enable','disable') NOT NULL,
  `stock_status` enum('in stock','out of stock') DEFAULT NULL,
  `is_popular` enum('yes','no') DEFAULT NULL,
  `is_featured` enum('yes','no') DEFAULT NULL,
  `is_hot` enum('yes','no') DEFAULT NULL,
  `is_best` enum('yes','no') DEFAULT NULL,
  `is_new_arraival` enum('yes','no') DEFAULT NULL,
  `is_special_offer` enum('yes','no') DEFAULT NULL,
  `set_as_home` enum('yes','no') DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subservices`
--

CREATE TABLE `subservices` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `service_id` int(100) DEFAULT NULL,
  `url` varchar(100) NOT NULL,
  `short_description` mediumtext,
  `long_description` longtext,
  `image` varchar(50) DEFAULT NULL,
  `meta_title` text,
  `meta_description` text,
  `meta_keywords` text,
  `is_popular` enum('yes','no') DEFAULT NULL,
  `is_featured` enum('yes','no') DEFAULT NULL,
  `is_hot` enum('yes','no') DEFAULT NULL,
  `is_best` enum('yes','no') DEFAULT NULL,
  `is_new_arraival` enum('yes','no') DEFAULT NULL,
  `is_special_offer` enum('yes','no') DEFAULT NULL,
  `set_as_home` enum('yes','no') DEFAULT NULL,
  `status` enum('enable','disable') DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `designation` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `facebook_link` varchar(200) DEFAULT NULL,
  `twitter_link` varchar(200) DEFAULT NULL,
  `insta_link` varchar(200) DEFAULT NULL,
  `linkedin_link` varchar(200) DEFAULT NULL,
  `status` enum('enable','disable') DEFAULT NULL,
  `order_by` int(100) DEFAULT '0',
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `image`, `facebook_link`, `twitter_link`, `insta_link`, `linkedin_link`, `status`, `order_by`, `created_at`, `updated_at`) VALUES
(3, 'Er. Suraj Kumar', 'Software Developer', '1607383631.jpg', '#', '#', '#', '#', 'enable', 1, '2020-11-14 15:54:28.000000', '2020-12-07 17:58:01.000000'),
(4, 'Soni Sahani', 'Marketing Manager', '1607383887.jpg', NULL, NULL, NULL, NULL, 'enable', NULL, '2020-12-07 18:01:27.000000', '2020-12-09 10:43:39.000000'),
(5, 'Rahul Kumar', 'SEO Expert', '1607512558.jpg', NULL, NULL, NULL, NULL, 'enable', NULL, '2020-12-07 18:02:42.000000', '2020-12-09 05:45:58.000000'),
(6, 'Aakriti vyas', 'Content writer', '1607384164.jpg', NULL, NULL, NULL, NULL, 'enable', NULL, '2020-12-07 18:06:04.000000', '2020-12-07 18:06:04.000000'),
(7, 'Pooja Gupta', 'Marketing Team Leader', '1607505665.jpeg', NULL, NULL, NULL, NULL, 'enable', NULL, '2020-12-09 03:51:05.000000', '2020-12-09 03:51:05.000000');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(50) NOT NULL,
  `title` text NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  `content` longtext,
  `image` varchar(50) DEFAULT NULL,
  `work_profile` text,
  `order_by` text,
  `video` varchar(100) DEFAULT NULL,
  `thumbnail` varchar(100) DEFAULT NULL,
  `status` enum('enable','disable') DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `url`, `content`, `image`, `work_profile`, `order_by`, `video`, `thumbnail`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Rajan Mahajan', 'Rajan-Mahajan', '<p>I contacted <strong>&nbsp;AGNELIO &amp; SONS&nbsp;</strong> for AC gas refilling he came within an hour of calling. He and his technician did the job safely. He was polite to talk to and charged a reasonable price. After the work he cleaned all the mess. I really like his nature and work ethics. Need more guys like him in work as most of the people do fraud. I wish him all the best for his future work.</p>', '1623086019.jpg', NULL, '1', NULL, NULL, 'enable', '2020-09-12 04:22:26.000000', '2021-06-07 11:43:39.000000'),
(18, 'Dhiraj Malhotra', 'Dhiraj-Malhotra', '<p>He did a great job in fixing by single door freeze. It got into problem due to the use of knife to defreeze the ice from the freezer section. <strong>&nbsp;AGNELIO &amp; SONS</strong>&nbsp;provide best technicians&nbsp;who personally repaired and fixed the issue, when I re-reported the occurrence. Till now it&#39;s working fine, great. The Best Service... I am Happy !!</p>', '1623086031.jpg', NULL, NULL, NULL, NULL, 'enable', '2021-03-13 14:14:22.000000', '2021-06-07 11:43:51.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonecode` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `phonecode`, `mobile`, `email`, `password`, `is_admin`, `user_type`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'Admin', 'male', '', '9876102345', 'admin@gmail.com', '$2y$10$fGLT9OmFr..xIkoYzpmzn.eAmdhaA9gOveThbeKoUuWZJNUyKnu/C', '0', 'admin', NULL, NULL, '2020-06-22 04:08:22', '2020-06-22 04:08:22'),
(6, 'Suraj', 'Kumar', 'Male', '+91', '9716043115', 'user@gmail.com', '$2y$10$NGF3RRkBWgnmSr3Nh34Yau1b1586FgslVlwPDo3aSt2KgE2tgo46q', '0', 'user', NULL, NULL, '2020-06-30 08:53:07', '2020-11-14 03:31:33');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(50) NOT NULL,
  `title` text NOT NULL,
  `short_description` mediumtext,
  `uploaded_file` longtext,
  `status` enum('enable','disable') DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `whies`
--

CREATE TABLE `whies` (
  `id` int(50) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `short_description` mediumtext,
  `order_by` int(50) DEFAULT NULL,
  `status` enum('enable','disable') DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `whies`
--

INSERT INTO `whies` (`id`, `title`, `image`, `short_description`, `order_by`, `status`, `created_at`, `updated_at`) VALUES
(19, 'Book appointment through Website', '1610103284.png', NULL, 1, 'enable', '2020-11-14 00:12:59.000000', '2021-01-08 05:24:44.000000'),
(20, 'Verified Scrap', '1610103311.png', '<p>lorem ipsum</p>', NULL, 'enable', '2020-11-14 00:20:17.000000', '2021-01-08 05:25:11.000000'),
(21, 'Digital Weight Scale', '1610103432.png', NULL, NULL, 'enable', '2021-01-08 05:27:12.000000', '2021-01-08 05:27:12.000000'),
(22, 'Multiple Payment Options', '1610103457.png', NULL, NULL, 'enable', '2021-01-08 05:27:37.000000', '2021-01-08 05:27:37.000000'),
(23, 'Hassle Free Transaction', '1610103486.png', NULL, NULL, 'enable', '2021-01-08 05:28:06.000000', '2021-01-08 05:28:06.000000'),
(24, 'Free Pick Up', '1610103506.png', NULL, NULL, 'enable', '2021-01-08 05:28:26.000000', '2021-01-08 05:28:26.000000'),
(25, 'Contribution in Making Swatch Bharat', '1610221492.png', NULL, NULL, 'enable', '2021-01-08 05:28:48.000000', '2021-01-09 14:14:52.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmspages`
--
ALTER TABLE `cmspages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hows`
--
ALTER TABLE `hows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `measures`
--
ALTER TABLE `measures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seorankings`
--
ALTER TABLE `seorankings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subservices`
--
ALTER TABLE `subservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whies`
--
ALTER TABLE `whies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cmspages`
--
ALTER TABLE `cmspages`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hows`
--
ALTER TABLE `hows`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `icons`
--
ALTER TABLE `icons`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=329;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `measures`
--
ALTER TABLE `measures`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seorankings`
--
ALTER TABLE `seorankings`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subservices`
--
ALTER TABLE `subservices`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `whies`
--
ALTER TABLE `whies`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
