-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2018 at 02:08 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rmsoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `text`, `date`, `post_id`) VALUES
(1, 'Rm khan', 'This post not necessary for computer science.', '2018-02-15 15:07:52', 23),
(2, 'Moshiur Rahman', 'Yes, are you right this position.Thanks for your Advertising.', '2018-02-15 15:18:23', 23),
(3, 'WonderfullÂ£Â£', 'htn lslj ktkj saalj5woe4u ^47((*%  EUWE%&*(Q$Â£) wq9 8759', '2018-02-15 15:27:19', 23),
(4, 'WonderfullÂ£Â£', 'htn lslj ktkj saalj5woe4u ^47((*%  EUWE%&*(Q$Â£) wq9 8759', '2018-02-15 15:27:33', 23),
(5, 'Hacked ', '&lt;script&gt;Your site has been Hacked !!&lt;/script&gt;', '2018-02-15 15:28:53', 23),
(6, 'Hacked ', '&lt;script&gt;Your site has been Hacked !!&lt;/script&gt;', '2018-02-15 15:28:57', 23),
(7, 'Nusrat', 'I love you Rm.', '2018-02-16 08:01:11', 21),
(8, 'Salma', 'I want to love Rm khan.Please say love you too.\r\n', '2018-02-16 08:02:32', 21);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `text`, `date`) VALUES
(1, 'Rm khan', 'rmkhan@gmail.com', 'This is test message. Thanks\r\n', '2018-02-06 16:46:53'),
(16, 'Sagor', 'sagor@gmail.com', 'Hi, i am sagor. And i want to be a good freelancer please give me some advice for my career.', '2018-02-06 16:58:20'),
(17, 'redoy', 'redoy@gmail.com', 'HI this is test message for you.HI this is test message for you.HI this is test message for you.HI this is test message for you.HI this is test message for you.HI this is test message for you.HI this is test message for you.HI this is test message for you.HI this is test message for you.HI this is test message for you.HI this is test message for you.HI this is test message for you.HI this is test message for you.HI this is test message for you.HI this is test message for you.', '2018-02-06 16:59:35'),
(18, 'prothom alo', 'info@prothomalo.com', 'à¦¡à§‡à¦­à¦¿à¦¡ à¦‡à§Ÿà¦¾à¦‚à§Ÿà§‡à¦° à¦¸à¦™à§à¦—à§‡ à¦…à¦¨à§‡à¦• à¦¦à¦¿à¦¨ à¦ªà¦° à¦¦à§‡à¦–à¦¾ à¦®à¦¾à¦¶à¦°à¦¾à¦«à¦¿ à¦¬à¦¿à¦¨ à¦®à§à¦°à§à¦¤à¦œà¦¾à¦°à¥¤ à¦›à¦¬à¦¿: à¦ªà§à¦°à¦¥à¦® à¦†à¦²à§‹\r\nà¦¡à§‡à¦­à¦¿à¦¡ à¦‡à§Ÿà¦¾à¦‚à§Ÿà§‡à¦° à¦¸à¦™à§à¦—à§‡ à¦…à¦¨à§‡à¦• à¦¦à¦¿à¦¨ à¦ªà¦° à¦¦à§‡à¦–à¦¾ à¦®à¦¾à¦¶à¦°à¦¾à¦«à¦¿ à¦¬à¦¿à¦¨ à¦®à§à¦°à§à¦¤à¦œà¦¾à¦°à¥¤ à¦›à¦¬à¦¿: à¦ªà§à¦°à¦¥à¦® à¦†à¦²à§‹\r\n\r\nà¦®à¦¾à¦¶à¦°à¦¾à¦«à¦¿ à¦¬à¦¿à¦¨ à¦®à§à¦°à§à¦¤à¦œà¦¾à¦° à¦¦à§à¦‡ à¦¹à¦¾à¦à¦Ÿà§à¦¤à§‡ à¦¸à¦¾à¦¤à¦Ÿà¦¿ à¦…à¦¸à§à¦¤à§à¦°à§‹à¦ªà¦šà¦¾à¦° à¦•à¦°à§‡à¦›à§‡à¦¨ à¦¡à§‡à¦­à¦¿à¦¡ à¦‡à§Ÿà¦¾à¦‚à¥¤\r\nà¦à¦• à¦¸à¦®à§à¦®à§‡à¦²à¦¨à§‡ à¦…à¦‚à¦¶ à¦¨à¦¿à¦¤à§‡ à¦¢à¦¾à¦•à¦¾à§Ÿ à¦à¦¸à§‡à¦›à§‡à¦¨ à¦…à¦¸à§à¦Ÿà§à¦°à§‡à¦²à¦¿à§Ÿà¦¾à¦¨ à¦¶à¦²à§à¦¯à¦¬à¦¿à¦¦à¥¤\r\nà¦†à¦œ à¦¬à¦¿à¦¸à¦¿à¦¬à¦¿à¦¤à§‡ à¦à¦¸à§‡à¦›à¦¿à¦²à§‡à¦¨ à¦‡à§Ÿà¦¾à¦‚à¥¤\r\nâ€˜à¦ªà¦¾à¦—à¦²à¦¾â€™à¦° à¦¸à¦™à§à¦—à§‡ à¦…à¦¨à§‡à¦• à¦¦à¦¿à¦¨ à¦ªà¦° à¦¤à¦¾à¦à¦° à¦¦à§‡à¦–à¦¾à¥¤ â€˜à¦ªà¦¾à¦—à¦²à¦¾â€™ à¦¹à¦šà§à¦›à§‡à¦¨ à¦®à¦¾à¦¶à¦°à¦¾à¦«à¦¿ à¦¬à¦¿à¦¨ à¦®à§à¦°à§à¦¤à¦œà¦¾à¥¤ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“à§Ÿà¦¾à¦¨à¦¡à§‡ à¦…à¦§à¦¿à¦¨à¦¾à§Ÿà¦•à¦•à§‡ à¦¡à§‡à¦­à¦¿à¦¡ à¦‡à§Ÿà¦¾à¦‚ à¦ à¦¨à¦¾à¦®à§‡à¦‡ à¦¡à¦¾à¦•à§‡à¦¨à¥¤ à¦‡à§Ÿà¦¾à¦‚à¦•à§‡ à¦¨à¦¤à§à¦¨ à¦•à¦°à§‡ à¦ªà¦°à¦¿à¦šà§Ÿ à¦•à¦°à¦¿à§Ÿà§‡ à¦¦à§‡à¦“à§Ÿà¦¾à¦° à¦•à¦¿à¦›à§ à¦¨à§‡à¦‡à¥¤ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦•à§à¦°à¦¿à¦•à§‡à¦Ÿà§‡à¦° à¦¸à¦™à§à¦—à§‡ à¦à¦‡ à¦¬à¦¿à¦–à§à¦¯à¦¾à¦¤ à¦…à¦¸à§à¦Ÿà§à¦°à§‡à¦²à¦¿à§Ÿà¦¾à¦¨ à¦¶à¦²à§à¦¯à¦¬à¦¿à¦¦à§‡à¦° à¦†à¦¤à§à¦®à¦¾à¦° à¦¸à¦®à§à¦ªà¦°à§à¦•à¥¤ à¦®à¦¾à¦¶à¦°à¦¾à¦«à¦¿à¦° à¦¸à¦™à§à¦—à§‡ à¦¸à¦®à§à¦ªà¦°à§à¦•à¦Ÿà¦¾ à¦†à¦°à¦“ à¦—à¦­à§€à¦°à¥¤\r\n\r\nà¦¡à¦¾à¦¨ à¦¹à¦¾à¦à¦Ÿà§à¦° à¦šà§‹à¦Ÿà§‡ à¦ªà§œà§‡ à¦®à¦¾à¦¶à¦°à¦¾à¦«à¦¿ à¦ªà§à¦°à¦¥à¦®à¦¬à¦¾à¦°à§‡à¦° à¦®à¦¤à§‹ à¦‡à§Ÿà¦¾à¦‚à§Ÿà§‡à¦° à¦¶à¦°à¦£ à¦¨à¦¿à§Ÿà§‡à¦›à¦¿à¦²à§‡à¦¨ à§¨à§¦à§¦à§© à¦¸à¦¾à¦²à§‡à¦° à¦¨à¦­à§‡à¦®à§à¦¬à¦°à§‡à¥¤ à¦à¦•-à¦¦à§à¦‡ à¦•à¦°à§‡, à¦ªà¦°à§‡ à¦†à¦°à¦“ à¦›à§Ÿà¦¬à¦¾à¦° à¦¦à§à¦‡ à¦¹à¦¾à¦à¦Ÿà§à¦¤à§‡ à¦…à¦¸à§à¦Ÿà§à¦°à§‡à¦²à¦¿à§Ÿà¦¾à¦¨ à¦¶à¦²à§à¦¯à¦¬à¦¿à¦¦à§‡à¦° à¦›à§à¦°à¦¿à¦° à¦¨à¦¿à¦šà§‡ à¦¯à§‡à¦¤à§‡ à¦¹à§Ÿà§‡à¦›à§‡ à¦®à¦¾à¦¶à¦°à¦¾à¦«à¦¿à¦•à§‡à¥¤ à¦¬à¦¾à¦°à¦¬à¦¾à¦° à¦šà§‹à¦Ÿà§‡ à¦ªà§œà§‡ à¦¹à§à¦®à¦•à¦¿à¦° à¦®à§à¦–à§‡ à¦ªà§œà§‡ à¦¯à¦¾à¦“à§Ÿà¦¾ à¦®à¦¾à¦¶à¦°à¦¾à¦«à¦¿à¦° à¦•à§à¦¯à¦¾à¦°à¦¿à§Ÿà¦¾à¦°à¦Ÿà¦¾ à¦¬à§‡à¦à¦šà§‡ à¦—à§‡à¦›à§‡ à¦‡à§Ÿà¦¾à¦‚à§Ÿà§‡à¦° à¦šà¦¿à¦•à¦¿à§Žà¦¸à¦¾à¦¤à§‡à¦‡â€”à¦à¦®à¦¨à¦Ÿà¦¾ à¦¬à¦²à¦²à§‡ à¦¬à§‹à¦§ à¦¹à§Ÿ à¦–à§à¦¬ à¦­à§à¦² à¦¬à¦²à¦¾ à¦¹à¦¬à§‡ à¦¨à¦¾à¥¤ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦…à¦°à§à¦¥à§‹à¦ªà§‡à¦¡à¦¿à¦• à¦¸à§‹à¦¸à¦¾à¦‡à¦Ÿà¦¿à¦° à¦à¦•à¦Ÿà¦¿ à¦¸à¦®à§à¦®à§‡à¦²à¦¨à§‡ à¦¢à¦¾à¦•à¦¾à§Ÿ à¦à¦¸à§‡à¦›à§‡à¦¨à¥¤ à¦¸à¦«à¦°à§‡à¦° à¦«à¦¾à¦à¦•à§‡à¦‡ à¦¬à¦¿à¦¸à¦¿à¦¬à¦¿à¦¤à§‡ à¦†à¦œ à¦¢à§à¦ à¦®à§‡à¦°à§‡ à¦—à§‡à¦²à§‡à¦¨ à¦¤à¦¿à¦¨à¦¿à¥¤ à¦¬à¦¿à¦¸à¦¿à¦¬à¦¿ à¦à¦•à¦¾à¦¡à§‡à¦®à¦¿ à¦­à¦¬à¦¨à§‡ à¦¦à§‡à¦–à¦¾ à¦¹à¦²à§‹ à¦¤à¦¾à¦à¦° à¦ªà§à¦°à¦¿à§Ÿ â€˜à¦°à§‹à¦—à§€â€™ à¦®à¦¾à¦¶à¦°à¦¾à¦«à¦¿à¦° à¦¸à¦™à§à¦—à§‡à¦“!', '2018-02-06 17:03:18'),
(20, 'Moshiur Rahman', 'mail@rmkhan.com', '&lt;script&gt;alert(&quot;your site is Hacked&quot;);&lt;/script&gt;', '2018-02-07 19:32:50'),
(21, 'ggii oxojj', 'hgghkjl@gmail.com', 'happy job day', '2018-02-13 07:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_media`
--

CREATE TABLE `tbl_media` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_media`
--

INSERT INTO `tbl_media` (`id`, `image`) VALUES
(23, 'rmkhan1 copy.jpg'),
(24, 'Admission-banner.png'),
(25, 'Anonymous-Rain-l.jpg'),
(26, 'baner.png'),
(27, 'bgimage-1.png'),
(28, 'chairman.png'),
(29, 'jambotron.png'),
(30, 'logo.png'),
(31, 'slider1.png'),
(32, 'slider2.png'),
(33, 'slider4.png'),
(34, 'slider5.png'),
(35, 'th.jpg'),
(36, 'web-development-banner.jpg'),
(37, 'witty-logo-white-354.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `post_text` text NOT NULL,
  `stutas` varchar(64) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `view` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `title`, `author_name`, `category`, `post_text`, `stutas`, `date`, `view`, `tag`) VALUES
(9, 'Rm khan Coming soon', 'Moshiur Rahman', 'Programming', 'Yes, finally Rm khan coming soon Bangladesh.', 'Private', '2018-02-13 20:39:04', 13, ''),
(12, 'Draft test two ', 'Moshiur Rahman', 'catlist', 'Again Test for draftanything', 'public', '2018-02-14 15:36:36', 1, '11epesod for programin, how to'),
(17, 'Finaly Try this ', 'Moshiur Rahman', 'Computer', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><img src=\"media/rmkhan1 copy.jpg\" alt=\"rmkhan1 copy.jpg\" width=\"250\" height=\"250\" /></p>\r\n<h1 style=\"text-align: left;\"><a title=\"RM khan\" href=\"http://www.facebook.com/moshir.rahman\" target=\"_blank\" rel=\"noopener\"><strong><span class=\"example1\"><strong><span style=\"font-size: 24pt;\">I am Rm khan.</span></strong></span></strong></a></h1>\r\n</body>\r\n</html>', 'Public', '2018-02-09 12:14:48', 0, ''),
(18, 'Some time we are boring feel', 'Moshiur Rahman', 'Programming', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p>\r\n<h3><strong>1914 translation by H. Rackham</strong></h3>\r\n<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>\r\n</body>\r\n</html>', 'Public', '2018-02-13 20:12:13', 4, ''),
(19, 'Example post 1', 'Moshiur Rahman', 'Computer', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Example post 1 for testing site.</p>\r\n<p>Example post 1 for testing site.</p>\r\n<p>Example post 1 for testing site.</p>\r\n<p>Example post 1 for testing site.</p>\r\n<p>Example post 1 for testing site.</p>\r\n<p>Example post 1 for testing site.</p>\r\n<p>Example post 1 for testing site.</p>\r\n<p>Example post 1 for testing site.</p>\r\n<p>Example post 1 for testing site.</p>\r\n<p>Example post 1 for testing site.</p>\r\n<p>Example post 1 for testing site.</p>\r\n<p>Example post 1 for testing site.</p>\r\n<p>Example post 1 for testing site.</p>\r\n<p>Example post 1 for testing site.</p>\r\n</body>\r\n</html>', 'Public', '2018-02-14 13:55:02', 102, ''),
(20, 'Example post 2', 'Moshiur Rahman', 'Computer', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<h3>1914 translation by H. Rackham</h3>\r\n<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>\r\n</body>\r\n</html>', 'Public', '2018-02-09 17:06:15', 0, ''),
(21, 'Example post 3', 'Moshiur Rahman', 'Programming', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<h3>1914 translation by H. Rackham</h3>\r\n<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>\r\n</body>\r\n</html>', 'Public', '2018-02-16 08:02:47', 5, ''),
(23, 'Test just for you', 'Moshiur Rahman', 'Programming', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><img src=\"media/logo.png\" alt=\"logo.png\" width=\"204\" height=\"213\" /></p>\r\n<p>thaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agkthaksfv as jflasjg la ksal ksajgfl ag&nbsp; s agk</p>\r\n</body>\r\n</html>', 'Public', '2018-02-16 08:01:35', 23, 'book, programming, computer, ICT'),
(24, 'TAG Completed Test for privecy', 'Sj Sagor ', 'Computer', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!just test for web testing!!</p>\r\n</body>\r\n</html>', '  Public', '2018-02-14 15:35:13', 3, 'TTTest programming how to work , and this is just a test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tutorial`
--

CREATE TABLE `tbl_tutorial` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tutorial`
--

INSERT INTO `tbl_tutorial` (`id`, `name`) VALUES
(1, 'Programming'),
(2, 'Computer'),
(3, 'Education');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(64) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roll` varchar(100) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `username`, `email`, `password`, `roll`, `gender`, `image`) VALUES
(1, 'Moshiur Rahman', 'Moshiur', '99moshiurrahman@gmail.com', '1234', 'admin', 'Mail', '13341084-parachute-coconut-oil-200ml.jpg'),
(8, 'Redoy', 'Redoy', 'redoy@gmail.com', '123', 'post-director', 'Mail', 'rmkhan1 copy.jpg'),
(9, 'Sj Sagor ', 'sagor', 'sagor@gmail.com', '1234', 'user', 'Mail', 'chairman.png'),
(10, 'Abdul Kader', 'kader11', 'kader11@gmail.com', '123', 'admin', 'Mail', ''),
(11, 'Rahim', 'rahim', 'rahim@gmail.com', '123', 'post-director', 'Female', '2017-11-28-19-55-01-780.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_media`
--
ALTER TABLE `tbl_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tutorial`
--
ALTER TABLE `tbl_tutorial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_media`
--
ALTER TABLE `tbl_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_tutorial`
--
ALTER TABLE `tbl_tutorial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
