-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2021 at 09:58 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firacms`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `titlepost` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `titlepost`, `slug`, `author`, `category`, `thumbnail`, `content`, `created_at`, `updated_at`) VALUES
(39, '3 Easy Ways To Make Your iPhone Faster', '3-easy-ways-to-make-your-iphone-faster', 'admin', 'Lifestyle', '1630373233_8f57d5fc9d245bf2805f.jpg', '<p>The European languages are members of the same family. Their separate\r\n existence is a myth. For science, music, sport, etc, Europe uses the \r\nsame <a>vocabulary</a>. The languages only differ in their grammar, their pronunciation and their most common words.</p>\r\n\r\n							<p>Everyone realizes why a new common language would be \r\ndesirable: one could refuse to pay expensive translators. To achieve \r\nthis, it <mark>would be</mark> necessary to have uniform grammar, pronunciation and more common words.</p><p>The languages only differ in their grammar, their pronunciation and \r\ntheir most common words. Everyone realizes why a new common language \r\nwould be desirable.</p> \r\n							\r\n							\r\n							<p>One could refuse to pay expensive translators. To achieve \r\nthis, it would be necessary to have uniform grammar, pronunciation and \r\nmore common words.</p>\r\n\r\n							<p>If several languages coalesce, the grammar of the resulting \r\nlanguage is more simple and regular than that of the individual \r\nlanguages. The new common language will be more simple and regular than \r\nthe existing <a>European languages</a>. It will be as simple as Occidental; in fact, it will be Occidental.</p>\r\n\r\n							<p>A collection of textile samples lay spread out on the table - \r\nSamsa was a travelling salesman - and above it there hung a picture that\r\n he had recently cut out of an illustrated magazine and housed in a \r\nnice, gilded frame.</p>\r\n\r\n							<h4>I should be incapable of drawing a single stroke</h4>\r\n\r\n							<ul><li>How about if I sleep a little bit</li><li>A collection of textile samples lay spread out</li><li>His many legs, pitifully thin compared with</li><li>He lay on his armour-like back</li><li> Gregor Samsa woke from troubled dreams</li></ul>\r\n\r\n							<p>To an English person, it will seem like simplified <a>English</a>,\r\n as a skeptical Cambridge friend of mine told me what Occidental is. The\r\n European languages are members of the same family. Their separate \r\nexistence is a myth. For science, music, sport, etc, Europe uses the \r\nsame vocabulary.</p>', '2021-08-30', '2021-08-30'),
(40, 'An Incredibly Easy Method That Works For All', 'an-incredibly-easy-method-that-works-for-all', 'admin', 'Inspiration', '1630418485_1925a36f5a0b8aaddff9.jpg', '<p>The European languages are members of the same family. Their separate\r\n existence is a myth. For science, music, sport, etc, Europe uses the \r\nsame <a>vocabulary</a>. The languages only differ in their grammar, their pronunciation and their most common words.</p>\r\n\r\n							<p>Everyone realizes why a new common language would be \r\ndesirable: one could refuse to pay expensive translators. To achieve \r\nthis, it <mark>would be</mark> necessary to have uniform grammar, pronunciation and more common words.</p><p>The languages only differ in their grammar, their pronunciation and \r\ntheir most common words. Everyone realizes why a new common language \r\nwould be desirable.</p> \r\n							\r\n							\r\n							<p>One could refuse to pay expensive translators. To achieve \r\nthis, it would be necessary to have uniform grammar, pronunciation and \r\nmore common words.</p>\r\n\r\n							<p>If several languages coalesce, the grammar of the resulting \r\nlanguage is more simple and regular than that of the individual \r\nlanguages. The new common language will be more simple and regular than \r\nthe existing <a>European languages</a>. It will be as simple as Occidental; in fact, it will be Occidental.</p>\r\n\r\n							<p>A collection of textile samples lay spread out on the table - \r\nSamsa was a travelling salesman - and above it there hung a picture that\r\n he had recently cut out of an illustrated magazine and housed in a \r\nnice, gilded frame.</p>\r\n\r\n							<h4>I should be incapable of drawing a single stroke</h4>\r\n\r\n							<ul><li>How about if I sleep a little bit</li><li>A collection of textile samples lay spread out</li><li>His many legs, pitifully thin compared with</li><li>He lay on his armour-like back</li><li> Gregor Samsa woke from troubled dreams</li></ul>\r\n\r\n							<p>To an English person, it will seem like simplified <a>English</a>,\r\n as a skeptical Cambridge friend of mine told me what Occidental is. The\r\n European languages are members of the same family. Their separate \r\nexistence is a myth. For science, music, sport, etc, Europe uses the \r\nsame vocabulary.</p>', '2021-08-31', '2021-08-31'),
(41, '10 Ways To Immediately Start Selling Furniture', '10-ways-to-immediately-start-selling-furniture', 'admin', 'Lifestyle', '1630418801_465559fd573b7424888a.jpg', '<p>The European languages are members of the same family. Their separate\r\n existence is a myth. For science, music, sport, etc, Europe uses the \r\nsame <a>vocabulary</a>. The languages only differ in their grammar, their pronunciation and their most common words.</p>\r\n\r\n							<p>Everyone realizes why a new common language would be \r\ndesirable: one could refuse to pay expensive translators. To achieve \r\nthis, it <mark>would be</mark> necessary to have uniform grammar, pronunciation and more common words.</p><p>The languages only differ in their grammar, their pronunciation and \r\ntheir most common words. Everyone realizes why a new common language \r\nwould be desirable.</p> \r\n							\r\n							\r\n							<p>One could refuse to pay expensive translators. To achieve \r\nthis, it would be necessary to have uniform grammar, pronunciation and \r\nmore common words.</p>\r\n\r\n							<p>If several languages coalesce, the grammar of the resulting \r\nlanguage is more simple and regular than that of the individual \r\nlanguages. The new common language will be more simple and regular than \r\nthe existing <a>European languages</a>. It will be as simple as Occidental; in fact, it will be Occidental.</p>\r\n\r\n							<p>A collection of textile samples lay spread out on the table - \r\nSamsa was a travelling salesman - and above it there hung a picture that\r\n he had recently cut out of an illustrated magazine and housed in a \r\nnice, gilded frame.</p>\r\n\r\n							<h4>I should be incapable of drawing a single stroke</h4>\r\n\r\n							<ul><li>How about if I sleep a little bit</li><li>A collection of textile samples lay spread out</li><li>His many legs, pitifully thin compared with</li><li>He lay on his armour-like back</li><li> Gregor Samsa woke from troubled dreams</li></ul>\r\n\r\n							<p>To an English person, it will seem like simplified <a>English</a>,\r\n as a skeptical Cambridge friend of mine told me what Occidental is. The\r\n European languages are members of the same family. Their separate \r\nexistence is a myth. For science, music, sport, etc, Europe uses the \r\nsame vocabulary.</p>', '2021-08-31', '2021-08-31'),
(42, '15 Unheard Ways To Achieve Greater Walker', '15-unheard-ways-to-achieve-greater-walker', 'admin', 'Lifestyle', '1630418679_90e6e395543c4f4d3664.jpg', '<p>The European languages are members of the same family. Their separate\r\n existence is a myth. For science, music, sport, etc, Europe uses the \r\nsame <a>vocabulary</a>. The languages only differ in their grammar, their pronunciation and their most common words.</p>\r\n\r\n							<p>Everyone realizes why a new common language would be \r\ndesirable: one could refuse to pay expensive translators. To achieve \r\nthis, it <mark>would be</mark> necessary to have uniform grammar, pronunciation and more common words.</p><p>The languages only differ in their grammar, their pronunciation and \r\ntheir most common words. Everyone realizes why a new common language \r\nwould be desirable.</p> \r\n							\r\n							\r\n							<p>One could refuse to pay expensive translators. To achieve \r\nthis, it would be necessary to have uniform grammar, pronunciation and \r\nmore common words.</p>\r\n\r\n							<p>If several languages coalesce, the grammar of the resulting \r\nlanguage is more simple and regular than that of the individual \r\nlanguages. The new common language will be more simple and regular than \r\nthe existing <a>European languages</a>. It will be as simple as Occidental; in fact, it will be Occidental.</p>\r\n\r\n							<p>A collection of textile samples lay spread out on the table - \r\nSamsa was a travelling salesman - and above it there hung a picture that\r\n he had recently cut out of an illustrated magazine and housed in a \r\nnice, gilded frame.</p>\r\n\r\n							<h4>I should be incapable of drawing a single stroke</h4>\r\n\r\n							<ul><li>How about if I sleep a little bit</li><li>A collection of textile samples lay spread out</li><li>His many legs, pitifully thin compared with</li><li>He lay on his armour-like back</li><li> Gregor Samsa woke from troubled dreams</li></ul>\r\n\r\n							<p>To an English person, it will seem like simplified <a>English</a>,\r\n as a skeptical Cambridge friend of mine told me what Occidental is. The\r\n European languages are members of the same family. Their separate \r\nexistence is a myth. For science, music, sport, etc, Europe uses the \r\nsame vocabulary.</p>', '2021-08-31', '2021-08-31'),
(43, 'Here Are 8 Ways To Success Faster', 'here-are-8-ways-to-success-faster', 'admin', 'Inspiration', '1630419693_64da66154d00080205cb.jpg', '<p>The European languages are members of the same family. Their separate\r\n existence is a myth. For science, music, sport, etc, Europe uses the \r\nsame <a>vocabulary</a>. The languages only differ in their grammar, their pronunciation and their most common words.</p>\r\n\r\n							<p>Everyone realizes why a new common language would be \r\ndesirable: one could refuse to pay expensive translators. To achieve \r\nthis, it <mark>would be</mark> necessary to have uniform grammar, pronunciation and more common words.</p><p>The languages only differ in their grammar, their pronunciation and \r\ntheir most common words. Everyone realizes why a new common language \r\nwould be desirable.</p> \r\n							\r\n							\r\n							<p>One could refuse to pay expensive translators. To achieve \r\nthis, it would be necessary to have uniform grammar, pronunciation and \r\nmore common words.</p>\r\n\r\n							<p>If several languages coalesce, the grammar of the resulting \r\nlanguage is more simple and regular than that of the individual \r\nlanguages. The new common language will be more simple and regular than \r\nthe existing <a>European languages</a>. It will be as simple as Occidental; in fact, it will be Occidental.</p>\r\n\r\n							<p>A collection of textile samples lay spread out on the table - \r\nSamsa was a travelling salesman - and above it there hung a picture that\r\n he had recently cut out of an illustrated magazine and housed in a \r\nnice, gilded frame.</p>\r\n\r\n							<h4>I should be incapable of drawing a single stroke</h4>\r\n\r\n							<ul><li>How about if I sleep a little bit</li><li>A collection of textile samples lay spread out</li><li>His many legs, pitifully thin compared with</li><li>He lay on his armour-like back</li><li> Gregor Samsa woke from troubled dreams</li></ul>\r\n\r\n							<p>To an English person, it will seem like simplified <a>English</a>,\r\n as a skeptical Cambridge friend of mine told me what Occidental is. The\r\n European languages are members of the same family. Their separate \r\nexistence is a myth. For science, music, sport, etc, Europe uses the \r\nsame vocabulary.</p>', '2021-08-31', '2021-08-31'),
(44, 'Master The Art Of Nature With These 7 Tips', 'master-the-art-of-nature-with-these-7-tips', 'admin', 'Inspiration', '1630418828_c13695a67921ba6ac7ce.jpg', '<p>The European languages are members of the same family. Their separate\r\n existence is a myth. For science, music, sport, etc, Europe uses the \r\nsame <a>vocabulary</a>. The languages only differ in their grammar, their pronunciation and their most common words.</p>\r\n\r\n							<p>Everyone realizes why a new common language would be \r\ndesirable: one could refuse to pay expensive translators. To achieve \r\nthis, it <mark>would be</mark> necessary to have uniform grammar, pronunciation and more common words.</p><p>The languages only differ in their grammar, their pronunciation and \r\ntheir most common words. Everyone realizes why a new common language \r\nwould be desirable.</p> \r\n							\r\n							\r\n							<p>One could refuse to pay expensive translators. To achieve \r\nthis, it would be necessary to have uniform grammar, pronunciation and \r\nmore common words.</p>\r\n\r\n							<p>If several languages coalesce, the grammar of the resulting \r\nlanguage is more simple and regular than that of the individual \r\nlanguages. The new common language will be more simple and regular than \r\nthe existing <a>European languages</a>. It will be as simple as Occidental; in fact, it will be Occidental.</p>\r\n\r\n							<p>A collection of textile samples lay spread out on the table - \r\nSamsa was a travelling salesman - and above it there hung a picture that\r\n he had recently cut out of an illustrated magazine and housed in a \r\nnice, gilded frame.</p>\r\n\r\n							<h4>I should be incapable of drawing a single stroke</h4>\r\n\r\n							<ul><li>How about if I sleep a little bit</li><li>A collection of textile samples lay spread out</li><li>His many legs, pitifully thin compared with</li><li>He lay on his armour-like back</li><li> Gregor Samsa woke from troubled dreams</li></ul>\r\n\r\n							<p>To an English person, it will seem like simplified <a>English</a>,\r\n as a skeptical Cambridge friend of mine told me what Occidental is. The\r\n European languages are members of the same family. Their separate \r\nexistence is a myth. For science, music, sport, etc, Europe uses the \r\nsame vocabulary.</p>', '2021-08-31', '2021-08-31'),
(45, 'The Next 60 Things To Immediately Do About Building', 'the-next-60-things-to-immediately-do-about-building', 'admin', 'Inspiration', '1630418841_cd44e0fc815249233cf3.jpg', '<p>The European languages are members of the same family. Their separate\r\n existence is a myth. For science, music, sport, etc, Europe uses the \r\nsame <a>vocabulary</a>. The languages only differ in their grammar, their pronunciation and their most common words.</p>\r\n\r\n							<p>Everyone realizes why a new common language would be \r\ndesirable: one could refuse to pay expensive translators. To achieve \r\nthis, it <mark>would be</mark> necessary to have uniform grammar, pronunciation and more common words.</p><p>The languages only differ in their grammar, their pronunciation and \r\ntheir most common words. Everyone realizes why a new common language \r\nwould be desirable.</p> \r\n							\r\n							\r\n							<p>One could refuse to pay expensive translators. To achieve \r\nthis, it would be necessary to have uniform grammar, pronunciation and \r\nmore common words.</p>\r\n\r\n							<p>If several languages coalesce, the grammar of the resulting \r\nlanguage is more simple and regular than that of the individual \r\nlanguages. The new common language will be more simple and regular than \r\nthe existing <a>European languages</a>. It will be as simple as Occidental; in fact, it will be Occidental.</p>\r\n\r\n							<p>A collection of textile samples lay spread out on the table - \r\nSamsa was a travelling salesman - and above it there hung a picture that\r\n he had recently cut out of an illustrated magazine and housed in a \r\nnice, gilded frame.</p>\r\n\r\n							<h4>I should be incapable of drawing a single stroke</h4>\r\n\r\n							<ul><li>How about if I sleep a little bit</li><li>A collection of textile samples lay spread out</li><li>His many legs, pitifully thin compared with</li><li>He lay on his armour-like back</li><li> Gregor Samsa woke from troubled dreams</li></ul>\r\n\r\n							<p>To an English person, it will seem like simplified <a>English</a>,\r\n as a skeptical Cambridge friend of mine told me what Occidental is. The\r\n European languages are members of the same family. Their separate \r\nexistence is a myth. For science, music, sport, etc, Europe uses the \r\nsame vocabulary.</p>', '2021-08-31', '2021-08-31'),
(46, 'Facts About Business That Will Help You Success', 'facts-about-business-that-will-help-you-success', 'admin', 'Inspiration', '1630418956_17966433d7a0e5e594e8.jpg', '<p>The European languages are members of the same family. Their separate\r\n existence is a myth. For science, music, sport, etc, Europe uses the \r\nsame <a>vocabulary</a>. The languages only differ in their grammar, their pronunciation and their most common words.</p>\r\n\r\n							<p>Everyone realizes why a new common language would be \r\ndesirable: one could refuse to pay expensive translators. To achieve \r\nthis, it <mark>would be</mark> necessary to have uniform grammar, pronunciation and more common words.</p><p>The languages only differ in their grammar, their pronunciation and \r\ntheir most common words. Everyone realizes why a new common language \r\nwould be desirable.</p> \r\n							\r\n							\r\n							<p>One could refuse to pay expensive translators. To achieve \r\nthis, it would be necessary to have uniform grammar, pronunciation and \r\nmore common words.</p>\r\n\r\n							<p>If several languages coalesce, the grammar of the resulting \r\nlanguage is more simple and regular than that of the individual \r\nlanguages. The new common language will be more simple and regular than \r\nthe existing <a>European languages</a>. It will be as simple as Occidental; in fact, it will be Occidental.</p>\r\n\r\n							<p>A collection of textile samples lay spread out on the table - \r\nSamsa was a travelling salesman - and above it there hung a picture that\r\n he had recently cut out of an illustrated magazine and housed in a \r\nnice, gilded frame.</p>\r\n\r\n							<h4>I should be incapable of drawing a single stroke</h4>\r\n\r\n							<ul><li>How about if I sleep a little bit</li><li>A collection of textile samples lay spread out</li><li>His many legs, pitifully thin compared with</li><li>He lay on his armour-like back</li><li> Gregor Samsa woke from troubled dreams</li></ul>\r\n\r\n							<p>To an English person, it will seem like simplified <a>English</a>,\r\n as a skeptical Cambridge friend of mine told me what Occidental is. The\r\n European languages are members of the same family. Their separate \r\nexistence is a myth. For science, music, sport, etc, Europe uses the \r\nsame vocabulary.</p>', '2021-08-31', '2021-08-31'),
(47, 'Your Light Is About To Stop Being Relevant', 'your-light-is-about-to-stop-being-relevant', 'admin', 'Inspiration', '1630419001_169579661a47e9acb410.jpg', '<p>The European languages are members of the same family. Their separate\r\n existence is a myth. For science, music, sport, etc, Europe uses the \r\nsame <a>vocabulary</a>. The languages only differ in their grammar, their pronunciation and their most common words.</p>\r\n\r\n							<p>Everyone realizes why a new common language would be \r\ndesirable: one could refuse to pay expensive translators. To achieve \r\nthis, it <mark>would be</mark> necessary to have uniform grammar, pronunciation and more common words.</p><p>The languages only differ in their grammar, their pronunciation and \r\ntheir most common words. Everyone realizes why a new common language \r\nwould be desirable.</p> \r\n							\r\n							\r\n							<p>One could refuse to pay expensive translators. To achieve \r\nthis, it would be necessary to have uniform grammar, pronunciation and \r\nmore common words.</p>\r\n\r\n							<p>If several languages coalesce, the grammar of the resulting \r\nlanguage is more simple and regular than that of the individual \r\nlanguages. The new common language will be more simple and regular than \r\nthe existing <a>European languages</a>. It will be as simple as Occidental; in fact, it will be Occidental.</p>\r\n\r\n							<p>A collection of textile samples lay spread out on the table - \r\nSamsa was a travelling salesman - and above it there hung a picture that\r\n he had recently cut out of an illustrated magazine and housed in a \r\nnice, gilded frame.</p>\r\n\r\n							<h4>I should be incapable of drawing a single stroke</h4>\r\n\r\n							<ul><li>How about if I sleep a little bit</li><li>A collection of textile samples lay spread out</li><li>His many legs, pitifully thin compared with</li><li>He lay on his armour-like back</li><li> Gregor Samsa woke from troubled dreams</li></ul>\r\n\r\n							<p>To an English person, it will seem like simplified <a>English</a>,\r\n as a skeptical Cambridge friend of mine told me what Occidental is. The\r\n European languages are members of the same family. Their separate \r\nexistence is a myth. For science, music, sport, etc, Europe uses the \r\nsame vocabulary.</p>', '2021-08-31', '2021-08-31'),
(48, 'Want To Have A More Appealing Tattoo?', 'want-to-have-a-more-appealing-tattoo', 'admin', 'Inspiration', '1630419063_d7bca054f174bbb0a4ee.jpg', '<p>The European languages are members of the same family. Their separate\r\n existence is a myth. For science, music, sport, etc, Europe uses the \r\nsame <a>vocabulary</a>. The languages only differ in their grammar, their pronunciation and their most common words.</p>\r\n\r\n							<p>Everyone realizes why a new common language would be \r\ndesirable: one could refuse to pay expensive translators. To achieve \r\nthis, it <mark>would be</mark> necessary to have uniform grammar, pronunciation and more common words.</p><p>The languages only differ in their grammar, their pronunciation and \r\ntheir most common words. Everyone realizes why a new common language \r\nwould be desirable.</p> \r\n							\r\n							\r\n							<p>One could refuse to pay expensive translators. To achieve \r\nthis, it would be necessary to have uniform grammar, pronunciation and \r\nmore common words.</p>\r\n\r\n							<p>If several languages coalesce, the grammar of the resulting \r\nlanguage is more simple and regular than that of the individual \r\nlanguages. The new common language will be more simple and regular than \r\nthe existing <a>European languages</a>. It will be as simple as Occidental; in fact, it will be Occidental.</p>\r\n\r\n							<p>A collection of textile samples lay spread out on the table - \r\nSamsa was a travelling salesman - and above it there hung a picture that\r\n he had recently cut out of an illustrated magazine and housed in a \r\nnice, gilded frame.</p>\r\n\r\n							<h4>I should be incapable of drawing a single stroke</h4>\r\n\r\n							<ul><li>How about if I sleep a little bit</li><li>A collection of textile samples lay spread out</li><li>His many legs, pitifully thin compared with</li><li>He lay on his armour-like back</li><li> Gregor Samsa woke from troubled dreams</li></ul>\r\n\r\n							<p>To an English person, it will seem like simplified <a>English</a>,\r\n as a skeptical Cambridge friend of mine told me what Occidental is. The\r\n European languages are members of the same family. Their separate \r\nexistence is a myth. For science, music, sport, etc, Europe uses the \r\nsame vocabulary.</p>', '2021-08-31', '2021-08-31'),
(49, 'Feel Like A Pro With The Help Of These 7 Tips', 'feel-like-a-pro-with-the-help-of-these-7-tips', 'admin', 'Inspiration', '1630419110_50baeb115abff5982a48.jpg', '<p>The European languages are members of the same family. Their separate\r\n existence is a myth. For science, music, sport, etc, Europe uses the \r\nsame <a>vocabulary</a>. The languages only differ in their grammar, their pronunciation and their most common words.</p>\r\n\r\n							<p>Everyone realizes why a new common language would be \r\ndesirable: one could refuse to pay expensive translators. To achieve \r\nthis, it <mark>would be</mark> necessary to have uniform grammar, pronunciation and more common words.</p><p>The languages only differ in their grammar, their pronunciation and \r\ntheir most common words. Everyone realizes why a new common language \r\nwould be desirable.</p> \r\n							\r\n							\r\n							<p>One could refuse to pay expensive translators. To achieve \r\nthis, it would be necessary to have uniform grammar, pronunciation and \r\nmore common words.</p>\r\n\r\n							<p>If several languages coalesce, the grammar of the resulting \r\nlanguage is more simple and regular than that of the individual \r\nlanguages. The new common language will be more simple and regular than \r\nthe existing <a>European languages</a>. It will be as simple as Occidental; in fact, it will be Occidental.</p>\r\n\r\n							<p>A collection of textile samples lay spread out on the table - \r\nSamsa was a travelling salesman - and above it there hung a picture that\r\n he had recently cut out of an illustrated magazine and housed in a \r\nnice, gilded frame.</p>\r\n\r\n							<h4>I should be incapable of drawing a single stroke</h4>\r\n\r\n							<ul><li>How about if I sleep a little bit</li><li>A collection of textile samples lay spread out</li><li>His many legs, pitifully thin compared with</li><li>He lay on his armour-like back</li><li> Gregor Samsa woke from troubled dreams</li></ul>\r\n\r\n							<p>To an English person, it will seem like simplified <a>English</a>,\r\n as a skeptical Cambridge friend of mine told me what Occidental is. The\r\n European languages are members of the same family. Their separate \r\nexistence is a myth. For science, music, sport, etc, Europe uses the \r\nsame vocabulary.</p>', '2021-08-31', '2021-08-31'),
(50, 'Feel Like A Pro With The Help Of These 8 Tips', 'feel-like-a-pro-with-the-help-of-these-8-tips', 'admin', 'Lifestyle', '1630419202_4415e4df0079b5d8ea8e.jpg', '<p>The European languages are members of the same family. Their separate\r\n existence is a myth. For science, music, sport, etc, Europe uses the \r\nsame <a>vocabulary</a>. The languages only differ in their grammar, their pronunciation and their most common words.</p>\r\n\r\n							<p>Everyone realizes why a new common language would be \r\ndesirable: one could refuse to pay expensive translators. To achieve \r\nthis, it <mark>would be</mark> necessary to have uniform grammar, pronunciation and more common words.</p><p>The languages only differ in their grammar, their pronunciation and \r\ntheir most common words. Everyone realizes why a new common language \r\nwould be desirable.</p> \r\n							\r\n							\r\n							<p>One could refuse to pay expensive translators. To achieve \r\nthis, it would be necessary to have uniform grammar, pronunciation and \r\nmore common words.</p>\r\n\r\n							<p>If several languages coalesce, the grammar of the resulting \r\nlanguage is more simple and regular than that of the individual \r\nlanguages. The new common language will be more simple and regular than \r\nthe existing <a>European languages</a>. It will be as simple as Occidental; in fact, it will be Occidental.</p>\r\n\r\n							<p>A collection of textile samples lay spread out on the table - \r\nSamsa was a travelling salesman - and above it there hung a picture that\r\n he had recently cut out of an illustrated magazine and housed in a \r\nnice, gilded frame.</p>\r\n\r\n							<h4>I should be incapable of drawing a single stroke</h4>\r\n\r\n							<ul><li>How about if I sleep a little bit</li><li>A collection of textile samples lay spread out</li><li>His many legs, pitifully thin compared with</li><li>He lay on his armour-like back</li><li> Gregor Samsa woke from troubled dreams</li></ul>\r\n\r\n							<p>To an English person, it will seem like simplified <a>English</a>,\r\n as a skeptical Cambridge friend of mine told me what Occidental is. The\r\n European languages are members of the same family. Their separate \r\nexistence is a myth. For science, music, sport, etc, Europe uses the \r\nsame vocabulary.</p>', '2021-08-31', '2021-08-31');

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_activation_attempts`
--

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', '0ca686dbb1c6f2c79dc84e342d9877e6', '2021-08-23 12:03:06'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', '80737f26506046d0118f05e34269011a', '2021-08-23 12:14:55'),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', '4f5a0858b9b111dbeaf01f092fbc1ebc', '2021-08-23 13:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'site Administrator'),
(2, 'user', 'Regular User');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'danisec', 1, '2021-08-23 11:52:36', 0),
(2, '::1', 'daniaprilyanto35@gmail.com', 3, '2021-08-23 12:03:24', 1),
(3, '::1', 'pertacasti@biyac.com', 4, '2021-08-23 12:14:47', 1),
(4, '::1', 'pertacasti@biyac.com', 4, '2021-08-23 12:15:07', 1),
(5, '::1', 'noname', 5, '2021-08-23 13:50:40', 0),
(6, '::1', 'tutrugorko@biyac.com', 5, '2021-08-23 13:51:16', 1),
(7, '::1', 'daniaprilyanto35@gmail.com', 1, '2021-08-23 14:03:51', 1),
(8, '::1', 'tutrugorko@biyac.com', 5, '2021-08-23 14:22:39', 1),
(9, '::1', 'daniaprilyanto35@gmail.com', 1, '2021-08-23 14:27:09', 1),
(10, '::1', 'daniaprilyanto35@gmail.com', 1, '2021-08-24 08:08:20', 1),
(11, '::1', 'daniaprilyanto35@gmail.com', 1, '2021-08-24 08:18:58', 1),
(12, '::1', 'tutrugorko@biyac.com', 5, '2021-08-24 08:19:29', 1),
(13, '::1', 'daniaprilyanto35@gmail.com', 1, '2021-08-24 08:31:59', 1),
(14, '::1', 'daniaprilyanto35@gmail.com', 1, '2021-08-24 11:56:38', 1),
(15, '::1', 'tutrugorko@biyac.com', 5, '2021-08-24 13:15:46', 1),
(16, '::1', 'daniaprilyanto35@gmail.com', 1, '2021-08-24 13:19:45', 1),
(17, '::1', 'danisec', NULL, '2021-08-25 02:56:16', 0),
(18, '::1', 'daniaprilyanto35@gmail.com', 1, '2021-08-25 02:56:33', 1),
(19, '::1', 'daniaprilyanto35@gmail.com', 1, '2021-08-25 04:35:07', 1),
(20, '::1', 'daniaprilyanto35@gmail.com', 1, '2021-08-25 04:49:08', 1),
(21, '::1', 'tutrugorko@biyac.com', 5, '2021-08-25 04:59:26', 1),
(22, '::1', 'daniaprilyanto35@gmail.com', 1, '2021-08-25 06:58:57', 1),
(23, '::1', 'daniaprilyanto35@gmail.com', 1, '2021-08-26 07:09:40', 1),
(24, '::1', 'daniaprilyanto35@gmail.com', 1, '2021-08-26 10:21:14', 1),
(25, '::1', 'guest@gmail.com', 10, '2021-08-26 12:56:22', 1),
(26, '::1', 'daniaprilyanto35@gmail.com', 1, '2021-08-26 12:57:31', 1),
(27, '::1', 'daniaprilyanto35@gmail.com', 1, '2021-08-26 17:56:00', 1),
(28, '::1', 'daniaprilyanto35@gmail.com', 1, '2021-08-27 06:32:02', 1),
(29, '::1', 'daniaprilyanto35@gmail.com', 1, '2021-08-28 06:59:02', 1),
(30, '::1', 'danisec', NULL, '2021-08-29 07:15:11', 0),
(31, '::1', 'daniaprilyanto35@gmail.com', 1, '2021-08-29 07:15:33', 1),
(32, '::1', 'daniaprilyanto35@gmail.com', 1, '2021-08-29 14:52:50', 1),
(33, '::1', 'daniaprilyanto35@gmail.com', 1, '2021-08-30 10:11:58', 1),
(34, '::1', 'daniaprilyanto35@gmail.com', 1, '2021-08-30 15:48:43', 1),
(35, '::1', 'daniaprilyanto35@gmail.com', 1, '2021-08-30 18:51:33', 1),
(36, '::1', 'daniaprilyanto35@gmail.com', 1, '2021-08-30 18:52:35', 1),
(37, '::1', 'admin@admin.com', 1, '2021-08-30 19:47:36', 1),
(38, '::1', 'admin@admin.com', 1, '2021-08-30 20:02:28', 1),
(39, '::1', 'admin@admin.com', 1, '2021-08-30 20:26:48', 1),
(40, '::1', 'admin@admin.com', 1, '2021-08-31 08:29:46', 1),
(41, '::1', 'admin@admin.com', 1, '2021-08-31 10:51:54', 1),
(42, '::1', 'admin@admin.com', 1, '2021-08-31 10:53:07', 1),
(43, '::1', 'admin@admin.com', 1, '2021-08-31 11:03:14', 1),
(44, '::1', 'admin@admin.com', 1, '2021-09-01 14:23:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'manage All Users'),
(2, 'manage-profile', 'Manage user\'s profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Lifestyle', '2021-08-12', '2021-08-30'),
(9, 'Inspiration', '2021-08-26', '2021-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1629625275, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `biodata` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.png',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `biodata`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin@admin.com', 'admin', NULL, NULL, 'default.png', '$2y$10$oLmbsFrZnm3Ebqfk3bSpIOe9RpKhYJPsAQWnJ/roPU60wF828fPIu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-08-23 12:00:10', '2021-08-23 12:03:06', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
