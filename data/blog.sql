-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th1 17, 2018 lúc 07:53 AM
-- Phiên bản máy phục vụ: 10.0.31-MariaDB-0ubuntu0.16.04.2
-- Phiên bản PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `blog`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `title_seo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `title_seo`) VALUES
(1, 'app landing', 'blah blahdasds', 'app-landing'),
(2, 'Business', 'Residence certainly elsewhere something she preferred cordially law. Age his surprise formerly mrs perceive few stanhill moderate. Of in power match on truth worse voice would. Large an it sense shall an match learn. By expect it result silent in formal of. Ask eat questions abilities described elsewhere assurance. Appetite in unlocked advanced breeding position concerns as. Cheerful get shutters yet for repeated screened. An no am cause hopes at three. Prevent behaved fertile he is mistake on.', 'business'),
(3, 'Development', '', 'development'),
(4, 'mobile', '', 'mobile');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chooses`
--

CREATE TABLE `chooses` (
  `id` int(11) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `title` varchar(200) NOT NULL,
  `subtext` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chooses`
--

INSERT INTO `chooses` (`id`, `icon`, `title`, `subtext`) VALUES
(1, 'ti-headphone-alt', 'All Times Hit Songs', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed'),
(2, 'ti-layers-alt', 'All Times Hit Songs', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed '),
(3, 'ti-reload', 'All Times Hit Songs', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed '),
(4, 'ti-exchange-vertical', 'All Times Hit Songs', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed '),
(5, 'ti-link', 'All Times Hit Songs', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed '),
(6, 'ti-arrow-right', 'All Times Hit Songs', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `timeupdate` varchar(30) NOT NULL,
  `publish` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `comment`, `name`, `email`, `user_id`, `post_id`, `parent_id`, `timeupdate`, `publish`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Trần Văn A', 'dasdsa', 0, 14, 0, '1514643947', 1),
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt', 'Nguyễn Đăng Hậu', 'ngdghau201@gmail.com', 1, 14, 1, '1514702761', 1),
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Mary Peterson', '', 0, 14, 0, '1514702771', 1),
(4, 'Lorem ipsum dolor sit amet, consectetur adipisicing', 'Waylon Dalton', '', 4, 14, 3, '1514702771', 1),
(5, 'Lorem ipsum dolor sit amet, consectetur adipisicing', 'Justine Henderson', '', 0, 14, 0, '1514702771', 1),
(7, 'fdsfsdfsd', 'Nguyễn Đăng Hậu', '00xshen00@gmail.com', 0, 14, 0, '1514815910', 0),
(8, 'dasdasdasdas', 'Nguyễn Đăng Hậu', '00xshen00@gmail.com', 0, 14, 0, '1514815994', 0),
(9, 'dasdasdasdas', 'Nguyen Dang Hau', '00xshen00@gmadil.com', 0, 14, 0, '1514816006', 0),
(10, 'dasdas', 'Anh Nhím', 'dasdasdasd@gmail.com', 0, 14, 0, '1514816150', 0),
(11, 'dasdqwdwqewqewq', 'Nguyễn Đăng Hậu', '00xshen00@gmail.com', 0, 14, 0, '1514816237', 0),
(12, 'test', 'Nguyễn Đăng Hậu', '00xshen00@gmail.com', 0, 14, 0, '1514816336', 0),
(14, 'teset', 'Nguyễn Đăng Hậu', '00xshen00@gmail.com', 0, 6, 0, '1514816394', 0),
(17, '&lt;p&gt;sdasdasdas&lt;/p&gt;', 'Nguyễn Đăng Hậu', '00xshen00@gmail.com', 1, 4, 0, '1514954185', 1),
(18, '&lt;p&gt;dasdasdasdwqdqwd&lt;/p&gt;', 'Nguyễn Đăng Hậu', '00xshen00@gmail.com', 1, 14, 5, '1514981733', 1),
(19, '&lt;p&gt;dasdasdwqdqw&lt;/p&gt;', 'Nguyễn Đăng Hậu', '00xshen00@gmail.com', 1, 14, 1, '1514981753', 1),
(20, '&lt;p&gt;dwqdqwdsadasdas&lt;/p&gt;', 'Nguyễn Đăng Hậu', '00xshen00@gmail.com', 1, 14, 1, '1514981769', 1),
(21, 'Cám ơn đã chia sẻ bài viết hay', 'Thin Trần', 'tranbathin@gmail.com', 0, 15, 0, '1515739774', 0),
(22, '&lt;p&gt;Thanks&lt;/p&gt;', 'Nguyễn Đăng Hậu', '00xshen00@gmail.com', 1, 15, 21, '1515741520', 1),
(23, 'Chào admin', 'THÌN TRẦN BÁ', 'thinbusiness2403@gma', 0, 15, 0, '1515741599', 0),
(24, '', 'Nguyễn Đăng Hậu', '00xshen00@gmail.com', 1, 15, 23, '1515741630', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `configs`
--

CREATE TABLE `configs` (
  `name` varchar(30) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `configs`
--

INSERT INTO `configs` (`name`, `content`) VALUES
('site_avatar', 'http://mylocalhost.tech/resources/images/DSC_0015.JPG'),
('site_description', 'Hệ thống quản lý công việc hàng ngày hiệu quả'),
('site_facebook', 'https://www.facebook.com/cenvisco/'),
('site_google', ''),
('site_icon', 'http://mylocalhost.tech/resources/images/Icon,logo/iconkpi.jpg'),
('site_logo', 'http://mylocalhost.tech/resources/files/logokpi1.png'),
('site_name', 'EASY KPI'),
('site_preloader', '0'),
('site_style', 'app'),
('site_tags', 'kpi, hr management, team management, quan ly nhom,'),
('site_title', 'EASY KPI'),
('site_twitter', ''),
('site_vimeo', ''),
('site_youtube', 'https://www.youtube.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `facts`
--

CREATE TABLE `facts` (
  `id` int(11) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `count` int(11) NOT NULL,
  `title` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `facts`
--

INSERT INTO `facts` (`id`, `icon`, `count`, `title`) VALUES
(1, 'ti-import', 3961, 'Download'),
(2, 'ti-reload', 65, 'bands'),
(3, 'ti-user', 10028, 'subscribers'),
(4, 'ti-headphone-alt', 4513, 'songs played');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`) VALUES
(1, 'How can I Setup this app using Google Play Store?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimasdasd'),
(2, 'How can I install my own Dashboard?', 'Wesse alias in rerum minima quod quos accusantium officiis pariatur. Rerum quisquam blanditiis quisquam'),
(3, 'How can I install my own Dashboard?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim'),
(4, 'How can I go live streaming?', 'Wesse alias in rerum minima quod quos accusantium officiis pariatur. Rerum quisquam blanditiis quisquam'),
(5, 'How can I go live streaming?', 'Wesse alias in rerum minima quod quos accusantium officiis pariatur. Rerum quisquam blanditiis quisquam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `title` varchar(250) NOT NULL,
  `entry` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `features`
--

INSERT INTO `features` (`id`, `icon`, `title`, `entry`) VALUES
(1, 'ti-layers-alt', 'Task Management', 'Hoạch định &amp; quản lý công việc - mục tiêu - phòng ban hàng ngày hiệu quả, nhanh chóng.'),
(2, 'ti-settings', 'HR Control', 'Quản trị nhân sự rõ ràng, tự động hóa, dễ dàng ghi nhận đóng góp &amp; cảnh báo, hỗ trợ kịp thời các thành viên nhóm.'),
(3, 'ti-exchange-vertical', 'Professional Engagement', 'Tương tác dễ dàng, nhanh chóng, tiện lợi với hệ thống tương tác, hỗ trợ công việc thông minh.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `hyperlink` varchar(225) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `name`, `hyperlink`, `parent_id`) VALUES
(1, 'Home', '#banner-area', 0),
(2, 'Giới Thiệu', '#fetures-area', 0),
(3, 'Hình Ảnh', '#screenshot-area', 0),
(4, 'Bảng Giá', '#pricing-area', 0),
(5, 'Đội Ngũ', '#team-area', 0),
(6, 'Download', '#download-area', 0),
(7, 'Tin Tức', '#', 0),
(8, 'Liên hệ', '#contact-area', 0),
(9, 'Blog', '/blog/', 7),
(10, 'Về chúng tôi', '#', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `featured` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `category` int(11) NOT NULL,
  `timeupdate` varchar(255) NOT NULL,
  `title_seo` text NOT NULL,
  `description` text NOT NULL,
  `tags` text NOT NULL,
  `author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `title`, `featured`, `content`, `category`, `timeupdate`, `title_seo`, `description`, `tags`, `author`) VALUES
(1, 'Kỹ năng làm việc nhóm', 'http://mylocalhost.tech/resources/images/sales-meeting-tips.png', '&lt;p&gt;something something something something something something something something something something something something something..&lt;/p&gt;', 1, '1515739824', 'the-first-shot-in-northend', 'Open know age use whom him than lady was. On lasted uneasy exeter my itself effect spirit. At design he vanity at cousin longer looked ye. Design praise me father an favour. As greatly replied it windows of an minuter behaved passage. Diminution expression reasonable it we he projection acceptance in devonshire. Perpetual it described at he applauded.', 'Blog, Creative, Cloud, Cool, Awesome, Post, Box, Company, Features, Download', 1),
(2, 'Cải tiến năng suất làm việc hiệu quả', 'http://mylocalhost.tech/resources/images/KPI.jpeg', '&lt;p&gt;something something something sodasdsadsadmething something something something something something something something something something&lt;/p&gt;', 2, '1515740099', 'its-time-to-show-ourselves', 'Residence certainly elsewhere something she preferred cordially law. Age his surprise formerly mrs perceive few stanhill moderate. Of in power match on truth worse voice would. Large an it sense shall an match learn. By expect it result silent in formal of. Ask eat questions abilities described elsewhere assurance. Appetite in unlocked advanced breeding position concerns as. Cheerful get shutters yet for repeated screened. An no am cause hopes at three. Prevent behaved fertile he is mistake on.', 'Blog, Creative, Cloud, Cool, Awesome, Post, Box, Company, Features, Download', 4),
(3, 'Công nghệ 4.0 là gì', 'http://mylocalhost.tech/resources/images/vc-loud_174914_thumb.jpg', '&lt;p&gt;something something something something something something something something something something something something something&lt;/p&gt;', 2, '1515740494', 'during-the-break-time-of-movie', 'Sentiments two occasional affronting solicitude travelling and one contrasted. Fortune day out married parties. Happiness remainder joy but earnestly for off. Took sold add play may none him few. If as increasing contrasted entreaties be. Now summer who day looked our behind moment coming. Pain son rose more park way that. An stairs as be lovers uneasy.', 'Blog, Creative, Cloud, Cool, Awesome, Post, Box, Company, Features, Download', 1),
(4, 'Chiến lược công nghệ hóa doanh nghiệp', 'http://mylocalhost.tech/resources/images/vc-loud_174914_thumb.jpg', '&lt;p&gt;something something something something something something something something something something something something something&lt;/p&gt;', 3, '1515740522', 'alien-of-earth', 'Considered discovered ye sentiments projecting entreaties of melancholy is. In expression an solicitude principles in do. Hard do me sigh with west same lady. Their saved linen downs tears son add music. Expression alteration entreaties mrs can terminated estimating. Her too add narrow having wished. To things so denied admire. Am wound worth water he linen at vexed.', 'Blog, Creative, Cloud, Cool, Awesome, Post, Box, Company, Features, Download', 1),
(5, 'Điện toán đám mây', 'http://mylocalhost.tech/resources/images/AdobeStock_83816515-709x500.jpeg', '&lt;p&gt;something something something something something something something something something something something something something&lt;/p&gt;', 3, '1515740592', 'veteran-on-mars', 'She literature discovered increasing how diminution understood. Though and highly the enough county for man. Of it up he still court alone widow seems. Suspected he remainder rapturous my sweetness. All vanity regard sudden nor simple can. World mrs and vexed china since after often.', 'Blog, Creative, Cloud, Cool, Awesome, Post, Box, Company, Features, Download', 1),
(6, 'Trí tuệ nhân tạo', 'http://mylocalhost.tech/resources/images/hr-director-vs-hr-executive.png', '&lt;p&gt;something something something something something something something something something something something something something&lt;/p&gt;', 3, '1515740647', 'armies-of-the-dead', 'Gay one the what walk then she. Demesne mention promise you justice arrived way. Or increasing to in especially inquietude companions acceptance admiration. Outweigh it families distance wandered ye an. Mr unsatiable at literature connection favourable. We neglected mr perfectly continual dependent.', 'Blog, Creative, Cloud, Cool, Awesome, Post, Box, Company, Features, Download', 5),
(7, 'Kỹ năng thời công nghệ', 'http://mylocalhost.tech/resources/images/download.png', '&lt;p&gt;something something something something something something something something something something something something something&lt;/p&gt;', 4, '1515740684', 'strangers-of-outer-space', 'Oh he decisively impression attachment friendship so if everything. Whose her enjoy chief new young. Felicity if ye required likewise so doubtful. On so attention necessary at by provision otherwise existence direction. Unpleasing up announcing unpleasant themselves oh do on. Way advantage age led listening belonging supposing.', 'Blog, Creative, Cloud, Cool, Awesome, Post, Box, Company, Features, Download', 8),
(8, 'Số hóa công việc hàng ngày', 'http://mylocalhost.tech/resources/images/500_F_88046369_06sIfvtQgNAxezJ1kFkt71Jw6ZHcjnEa.jpg', '&lt;p&gt;something something something something something something something something something something something something something&lt;/p&gt;', 4, '1515740715', 'martians-and-men', 'Sudden looked elinor off gay estate nor silent. Son read such next see the rest two. Was use extent old entire sussex. Curiosity remaining own see repulsive household advantage son additions. Supposing exquisite daughters eagerness why repulsive for. Praise turned it lovers be warmly by. Little do it eldest former be if.', 'Blog, Creative, Cloud, Cool, Awesome, Post, Box, Company, Features, Download', 8),
(9, 'Tự do hóa công việc kinh doanh', 'http://mylocalhost.tech/resources/images/blog_hrtech-vegas-2017.jpg', '&lt;p&gt;something something something something something something something something something something something something something&lt;/p&gt;', 4, '1515740952', 'rebels-and-clones', 'Or neglected agreeable of discovery concluded oh it sportsman. Week to time in john. Son elegance use weddings separate. Ask too matter formed county wicket oppose talent. He immediate sometimes or to dependent in. Everything few frequently discretion surrounded did simplicity decisively. Less he year do with no sure loud.', '', 9),
(10, 'End Of The Androids', 'http://mylocalhost.tech/resources/images/httt-quan-ly-infographic.png', '&lt;p&gt;something something something something something something something something something something something something something&lt;/p&gt;', 4, '1515740975', 'end-of-the-androids', 'Lose away off why half led have near bed. At engage simple father of period others except. My giving do summer of though narrow marked at. Spring formal no county ye waited. My whether cheered at regular it of promise blushes perhaps. Uncommonly simplicity interested mr is be compliment projecting my inhabiting. Gentleman he september in oh excellent.', 'Blog, Creative, Cloud, Cool, Awesome, Post, Box, Company, Features, Download', 4),
(11, 'Hệ sinh thái công nghệ doanh nghiệp', 'http://mylocalhost.tech/resources/images/vc-loud_174914_thumb.jpg', '&lt;p&gt;something something something something something something something something something something something something something&lt;/p&gt;', 1, '1515740565', 'exploration-of-time', 'Post no so what deal evil rent by real in. But her ready least set lived spite solid. September how men saw tolerably two behaviour arranging. She offices for highest and replied one venture pasture. Applauded no discovery in newspaper allowance am northward. Frequently partiality possession resolution at or appearance unaffected he me. Engaged its was evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began of cause an scale. Subjects he prospect elegance followed no overcame possible it on.', 'Blog, Creative, Cloud, Cool, Awesome, Post, Box, Company, Features, Download', 4),
(12, 'Công nghệ hóa mô hình kinh doanh', 'http://mylocalhost.tech/resources/images/500_F_88046369_06sIfvtQgNAxezJ1kFkt71Jw6ZHcjnEa.jpg', '&lt;p&gt;something something something something something something something something something something something something something&lt;/p&gt;', 2, '1515740022', 'serenity-of-moondust', 'Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In on my jointure horrible margaret suitable he followed speedily. Indeed vanity excuse or mr lovers of on. By offer scale an stuff. Blush be sorry no sight. Sang lose of hour then he left find.', 'Blog, Creative, Cloud, Cool, Awesome, Post, Box, Company, Features, Download', 4),
(13, 'Công nghệ hóa quản trị nhân sự', 'http://mylocalhost.tech/resources/images/download.png', '&lt;p&gt;something something something something something something something something something something something something something&lt;/p&gt;', 2, '1515739984', 'changed-by-my-journey', 'Put all speaking her delicate recurred possible. Set indulgence inquietude discretion insensible bed why announcing. Middleton fat two satisfied additions. So continued he or commanded household smallness delivered. Door poor on do walk in half. Roof his head the what.', 'Blog, Creative, Cloud, Cool, Awesome, Post, Box, Company, Features, Download', 4),
(14, 'Tầm quan trọng của công nghệ trong việc quản trị nguồn nhân lực', 'http://mylocalhost.tech/resources/images/Team-win.png', '&lt;p&gt;T&amp;aacute;c động n&amp;agrave;y được nh&amp;igrave;n thấy trong gần như tất cả c&amp;aacute;c lĩnh vực kinh doanh, bao gồm ở lĩnh vực quản trị nguồn nh&amp;acirc;n lực, nơi m&amp;agrave; c&amp;ocirc;ng nghệ tiếp tục c&amp;oacute; một t&amp;aacute;c động đ&amp;aacute;ng kể đến c&amp;aacute;c hoạt động nh&amp;acirc;n sự.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Ứng dụng của c&amp;ocirc;ng nghệ trong quản trị nh&amp;acirc;n sự&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Quản trị nguồn lực l&amp;agrave; lĩnh vực m&amp;agrave; c&amp;aacute;c sự thay đổi trong c&amp;ocirc;ng nghệ c&amp;oacute; t&amp;aacute;c động đến một c&amp;aacute;ch mạnh mẽ. C&amp;ocirc;ng nghệ đ&amp;atilde; l&amp;agrave;m thay đổi vai tr&amp;ograve; của việc quản l&amp;yacute; nguồn nh&amp;acirc;n lực đến một mức độ lớn hơn. Ng&amp;agrave;y c&amp;agrave;ng c&amp;oacute; nhiều chức năng trong bộ phận nh&amp;acirc;n sự đang được thực hiện bằng c&amp;aacute;ch tin học h&amp;oacute;a để n&amp;acirc;ng cao hiệu quả quản trị. C&amp;ocirc;ng nghệ dựa tr&amp;ecirc;n nền tảng Website cũng đang được sử dụng rộng r&amp;atilde;i đối với hầu hết c&amp;aacute;c nghiệp vụ th&amp;ocirc;ng thường trong việc quản l&amp;yacute; nh&amp;acirc;n sự như chấm c&amp;ocirc;ng, t&amp;iacute;nh lương, quản l&amp;yacute; th&amp;ocirc;ng tin nh&amp;acirc;n vi&amp;ecirc;n,&amp;hellip;&lt;/p&gt;\r\n\r\n&lt;p&gt;Dựa v&amp;agrave;o những &amp;yacute; được đề cập ở tr&amp;ecirc;n về sự c&amp;ocirc;ng nghệ h&amp;oacute;a cho c&amp;aacute;c hoạt động quản trị nguồn lực, c&amp;aacute;c chuy&amp;ecirc;n vi&amp;ecirc;n nh&amp;acirc;n sự sẽ c&amp;oacute; được nhiều thời gian hơn cho c&amp;aacute;c vấn đề kh&amp;aacute;c trong c&amp;ocirc;ng việc của m&amp;igrave;nh. C&amp;ocirc;ng nghệ sẽ gi&amp;uacute;p cho c&amp;aacute;c tổ chức kinh doanh trong việc cải thiện được c&amp;aacute;c phương ph&amp;aacute;p quản l&amp;yacute; thời gian của bộ phận nh&amp;acirc;n sự của m&amp;igrave;nh v&amp;agrave; sau đ&amp;oacute; n&amp;acirc;ng cao hiệu quả c&amp;ocirc;ng việc.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;T&amp;aacute;c động của c&amp;ocirc;ng nghệ l&amp;ecirc;n c&amp;aacute;c nh&amp;acirc;n vi&amp;ecirc;n nh&amp;acirc;n sự&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Khi c&amp;ocirc;ng nghệ th&amp;ocirc;ng tin thiết lập được chỗ đứng của n&amp;oacute; trong bộ phận nguồn nh&amp;acirc;n sự, c&amp;aacute;c chuy&amp;ecirc;n vi&amp;ecirc;n nh&amp;acirc;n sự sẽ nắm bắt được c&amp;aacute;c th&amp;ocirc;ng tin r&amp;otilde; r&amp;agrave;ng, minh bạch, v&amp;agrave; to&amp;agrave;n diện hơn. Họ sẽ nhận biết được c&amp;aacute;c khuynh hướng mới nhất trong hoạch định ch&amp;iacute;nh s&amp;aacute;ch, c&amp;aacute;c hoạt động tuyển dụng trong ng&amp;agrave;nh. Ngo&amp;agrave;i ra, họ cần phải c&amp;oacute; c&amp;aacute;c th&amp;ocirc;ng tin hiện h&amp;agrave;nh về ph&amp;aacute;p luật v&amp;agrave; c&amp;aacute;c quy định c&amp;oacute; li&amp;ecirc;n quan bởi v&amp;igrave; điều n&amp;agrave;y gi&amp;uacute;p c&amp;aacute;c chuy&amp;ecirc;n vi&amp;ecirc;n nh&amp;acirc;n sự thể hiện được sự linh hoạt trong trường hợp c&amp;oacute; những thay đổi kh&amp;ocirc;ng&amp;nbsp; dự kiến trước. Hơn nữa, những đặc t&amp;iacute;nh n&amp;agrave;y sẽ l&amp;agrave;m tăng gi&amp;aacute; trị v&amp;agrave; sự đ&amp;oacute;ng g&amp;oacute;p của bộ phận nh&amp;acirc;n sự cho tổ chức.&lt;/p&gt;\r\n\r\n&lt;p&gt;V&amp;igrave; vậy, để bắt kịp với sự thay đổi luật li&amp;ecirc;n tục, th&amp;ocirc;ng tin phải lu&amp;ocirc;n được cập nhật. C&amp;ocirc;ng nghệ đ&amp;atilde; cho ph&amp;eacute;p c&amp;aacute;c c&amp;aacute;c c&amp;ocirc;ng ty kết nối với internet để tương t&amp;aacute;c với c&amp;aacute;c chuy&amp;ecirc;n gia trong ng&amp;agrave;nh. N&amp;oacute; đ&amp;atilde; gi&amp;uacute;p nhiều chuy&amp;ecirc;n vi&amp;ecirc;n nh&amp;acirc;n sự trong việc thu thập th&amp;ocirc;ng tin m&amp;agrave; họ cần phải duy tr&amp;igrave; để chứng minh c&amp;aacute;c đặc t&amp;iacute;nh mong muốn v&amp;agrave; khả năng. Những bằng chứng n&amp;agrave;y cũng cho thấy c&amp;ocirc;ng nghệ đ&amp;atilde; kh&amp;ocirc;ng chỉ cho ph&amp;eacute;p c&amp;aacute;c chuy&amp;ecirc;n gia nguồn nh&amp;acirc;n lực để truy cập v&amp;agrave; ph&amp;acirc;n phối th&amp;ocirc;ng tin m&amp;agrave; c&amp;ograve;n c&amp;oacute; ảnh hưởng đến mong đến của họ.&lt;/p&gt;', 1, '1515739790', 'nhom hieu qua, team', 'Các nghành nghề kinh doanh trên toàn cầu đã chứng kiến sự thay đổi rất lớn trong suốt 20 năm qua. Công nghệ đã làm thay đổi thế giới kinh doanh rất nhiều lần. Nhiều doanh nghiệp thậm chí không thể hoạt động mà không có sự hỗ trợ từ công nghệ.', 'team, nhom, hieu qua', 4),
(15, 'Mẹo hay dành cho người quản lý team-work', 'http://mylocalhost.tech/resources/images/KPI.jpeg', '&lt;p&gt;L&amp;agrave;m việc theo nh&amp;oacute;m ng&amp;agrave;y c&amp;agrave;ng phổ biến ở c&amp;aacute;c c&amp;ocirc;ng ty hiện nay bởi như thế ph&amp;aacute;t huy được sức mạnh tập thể cũng như năng lực của từng th&amp;agrave;nh vi&amp;ecirc;n. Một dự &amp;aacute;n muốn th&amp;agrave;nh c&amp;ocirc;ng th&amp;igrave; đ&amp;ograve;i hỏi c&amp;aacute;c nh&amp;oacute;m phải l&amp;agrave;m việc hiệu quả, từng c&amp;aacute; nh&amp;acirc;n t&amp;iacute;ch cực đ&amp;oacute;ng g&amp;oacute;p c&amp;ocirc;ng sức, &amp;yacute; tưởng. Điều n&amp;agrave;y đ&amp;ograve;i hỏi c&amp;aacute;c kỹ năng cần thiết của từng c&amp;aacute; nh&amp;acirc;n v&amp;agrave; người l&amp;atilde;nh đạo (team-leader) phải s&amp;aacute;ng suốt khi lựa chọn th&amp;agrave;nh vi&amp;ecirc;n của nh&amp;oacute;m m&amp;igrave;nh.&lt;/p&gt;\r\n\r\n&lt;p&gt;5 &amp;yacute; tưởng sau sẽ gi&amp;uacute;p bạn lựa chọn được nhứng ứng vi&amp;ecirc;n l&amp;yacute; tưởng, x&amp;acirc;y dựng nh&amp;oacute;m ng&amp;agrave;y một vững mạnh:&lt;/p&gt;\r\n\r\n&lt;p&gt;- Ph&amp;aacute;c thảo những kỹ năng cần c&amp;oacute;&lt;/p&gt;\r\n\r\n&lt;p&gt;Với những đ&amp;ograve;i hỏi của c&amp;ocirc;ng việc, người quản l&amp;yacute; nh&amp;oacute;m phải vạch ra được những y&amp;ecirc;u cầu đ&amp;oacute; một c&amp;aacute;ch đơn giản, r&amp;otilde; r&amp;agrave;ng nhưng thật bao qu&amp;aacute;t. Từ đ&amp;oacute;, bạn c&amp;oacute; thể định h&amp;igrave;nh được mục ti&amp;ecirc;u, kết quả của dự &amp;aacute;n v&amp;agrave; x&amp;eacute;t đến những y&amp;ecirc;u cầu đối với c&amp;aacute;c th&amp;agrave;nh vi&amp;ecirc;n của nh&amp;oacute;m. Từ số lượng th&amp;agrave;nh vi&amp;ecirc;n, năng lực của từng người cho đến ph&amp;acirc;n chia c&amp;ocirc;ng việc. H&amp;atilde;y chắc chắn rằng, sự lựa chọn th&amp;agrave;nh vi&amp;ecirc;n của bạn đủ để đ&amp;aacute;p ứng cho c&amp;ocirc;ng việc, mỗi th&amp;agrave;nh vi&amp;ecirc;n đều hội tụ những kỹ năng cần thiết. H&amp;atilde;y nghi&amp;ecirc;m t&amp;uacute;c đ&amp;aacute;nh gi&amp;aacute; xem liệu nh&amp;oacute;m hiện tại của bạn c&amp;oacute; đảm đương nổi kh&amp;ocirc;ng hay phải th&amp;ecirc;m người hoặc phải thu&amp;ecirc; th&amp;ecirc;m b&amp;ecirc;n ngo&amp;agrave;i. L&amp;uacute;c n&amp;agrave;y, điều quan trọng l&amp;agrave; đừng cả nể, bạn l&amp;agrave; người quản l&amp;yacute; nh&amp;oacute;m v&amp;agrave; bạn phải thật nghi&amp;ecirc;m t&amp;uacute;c để xem x&amp;eacute;t hiệu quả c&amp;ocirc;ng việc của từng th&amp;agrave;nh vi&amp;ecirc;n. Nếu thực sự kh&amp;ocirc;ng đ&amp;aacute;p ứng được, phải đề xuất th&amp;ecirc;m người hoặc thu&amp;ecirc; b&amp;ecirc;n ngo&amp;agrave;i.&lt;/p&gt;\r\n\r\n&lt;p&gt;- Đ&amp;ograve;i hỏi nhiều kỹ năng dự ph&amp;ograve;ng&lt;/p&gt;\r\n\r\n&lt;p&gt;Nếu dự &amp;aacute;n cần c&amp;oacute; thể cần đến những kỹ năng kh&amp;aacute;c để th&amp;agrave;nh c&amp;ocirc;ng th&amp;igrave; người quản l&amp;yacute; nh&amp;oacute;m phải nh&amp;igrave;n ra những y&amp;ecirc;u cầu đ&amp;oacute;. C&amp;oacute; trường hợp ban đầu rất đơn giản nhưng c&amp;agrave;ng về sau, c&amp;ocirc;ng việc c&amp;agrave;ng đ&amp;ograve;i hỏi c&amp;aacute;c th&amp;agrave;nh vi&amp;ecirc;n phải c&amp;oacute; nhiều kỹ năng hơn nữa, nếu kh&amp;ocirc;ng dự ph&amp;ograve;ng trước, bạn dễ rơi v&amp;agrave;o t&amp;igrave;nh trạng &amp;quot;ngộp thở&amp;quot;v&amp;igrave; c&amp;ocirc;ng việc. Hơn nữa, ch&amp;iacute;nh c&amp;aacute;c th&amp;agrave;nh vi&amp;ecirc;n trong nh&amp;oacute;m cũng cảm thấy lo lắng, căng thẳng với t&amp;igrave;nh trạng n&amp;agrave;y.&lt;/p&gt;\r\n\r\n&lt;p&gt;V&amp;igrave; vậy, người quản l&amp;yacute; nh&amp;oacute;m cần linh hoạt v&amp;agrave; sẵn s&amp;agrave;ng cả về nh&amp;acirc;n sự dự ph&amp;ograve;ng. H&amp;atilde;y chắc chắn rằng, th&amp;agrave;nh vi&amp;ecirc;n của nh&amp;oacute;m đủ sức đ&amp;aacute;p ứng mọi sự thay đổi v&amp;agrave; y&amp;ecirc;u cầu của c&amp;ocirc;ng việc cho đến khi dự &amp;aacute;n thực sự ho&amp;agrave;n th&amp;agrave;nh.&lt;/p&gt;\r\n\r\n&lt;p&gt;Ngo&amp;agrave;i những đ&amp;ograve;i hỏi từ c&amp;ocirc;ng việc ra, bạn cũng n&amp;ecirc;n dự ph&amp;ograve;ng trường hợp nh&amp;oacute;m c&amp;oacute; người bị ốm hoặc c&amp;oacute; c&amp;ocirc;ng việc đột xuất th&amp;igrave; c&amp;ograve;n c&amp;oacute; người thay thế.&lt;/p&gt;\r\n\r\n&lt;p&gt;Lấy đủ qu&amp;acirc;n số&lt;/p&gt;\r\n\r\n&lt;p&gt;Chọn thừa, đặc biệt l&amp;agrave; thiếu qu&amp;acirc;n số sẽ g&amp;acirc;y n&amp;ecirc;n nhiều rắc rối nghi&amp;ecirc;m trọng với những &amp;aacute;p lực về ng&amp;acirc;n s&amp;aacute;ch, rối loạn về việc ph&amp;acirc;n chia c&amp;ocirc;ng việc v&amp;agrave; l&amp;atilde;ng ph&amp;iacute; thời gian. V&amp;igrave; thế, người quản l&amp;yacute; dự &amp;aacute;n phải biết c&amp;aacute;ch điều chỉnh nh&amp;acirc;n sự, thu&amp;ecirc; th&amp;ecirc;m người khi cần thiết v&amp;agrave; trong khoảng ng&amp;acirc;n s&amp;aacute;ch cho ph&amp;eacute;p để kh&amp;ocirc;ng bị &amp;aacute;p lực về thời gian, kh&amp;ocirc;ng bắt c&amp;aacute;c th&amp;agrave;nh vi&amp;ecirc;n l&amp;agrave;m việc qu&amp;aacute; sức hay l&amp;agrave;m hẹp phạm vi ho&amp;agrave;n th&amp;agrave;nh mục ti&amp;ecirc;u của dự &amp;aacute;n.&lt;/p&gt;\r\n\r\n&lt;p&gt;Tất nhi&amp;ecirc;n, sự c&amp;acirc;n bằng về nh&amp;acirc;n lực l&amp;agrave; rất kh&amp;oacute; nhưng người quản l&amp;yacute; nh&amp;oacute;m sẽ d&amp;ugrave;ng kinh nghiệm của m&amp;igrave;nh để biết c&amp;aacute;ch điều tiết cho ph&amp;ugrave; hợp.&lt;/p&gt;\r\n\r\n&lt;p&gt;Chọn những người thực sự quan t&amp;acirc;m&lt;/p&gt;\r\n\r\n&lt;p&gt;Một dự &amp;aacute;n c&amp;oacute; thể đạt hiệu quả tối ưu nếu c&amp;oacute; những th&amp;agrave;nh vi&amp;ecirc;n t&amp;iacute;ch cực, thực sự gắn b&amp;oacute; v&amp;agrave; y&amp;ecirc;u th&amp;iacute;ch c&amp;ocirc;ng việc. Người quản l&amp;yacute; dự &amp;aacute;n phải đảm bảo để c&amp;aacute;c th&amp;agrave;nh vi&amp;ecirc;n của nh&amp;oacute;m đều l&amp;agrave; những người th&amp;agrave;nh thạo trong lĩnh vực dự &amp;aacute;n sẽ l&amp;agrave;m, hứng th&amp;uacute; với những kết quả của n&amp;oacute; v&amp;agrave; sẵn s&amp;agrave;ng c&amp;oacute; những đ&amp;oacute;ng g&amp;oacute;p &amp;yacute; nghĩa. Thực tế, kh&amp;ocirc;ng &amp;iacute;t dự &amp;aacute;n thất bại hay bị tr&amp;igrave; ho&amp;atilde;n bởi c&amp;aacute;c th&amp;agrave;nh vi&amp;ecirc;n trong nh&amp;oacute;m kh&amp;ocirc;ng thực sự tập trung, họ c&amp;ograve;n bận rộn v&amp;agrave; d&amp;agrave;nh sự ưu ti&amp;ecirc;n cho v&amp;ocirc; số c&amp;ocirc;ng việc kh&amp;aacute;c.&lt;/p&gt;\r\n\r\n&lt;p&gt;Để &amp;yacute; đến c&amp;aacute; t&amp;iacute;nh của c&amp;aacute;c th&amp;agrave;nh vi&amp;ecirc;n trong nh&amp;oacute;m&lt;/p&gt;\r\n\r\n&lt;p&gt;Tất nhi&amp;ecirc;n, như thế kh&amp;ocirc;ng c&amp;oacute; nghĩa l&amp;agrave; phải hiểu tường tận từng người nhưng &amp;iacute;t ra, người quản l&amp;yacute; dự &amp;aacute;n cũng phải c&amp;oacute; sự hiểu biết về c&amp;aacute;c th&amp;agrave;nh vi&amp;ecirc;n vừa đủ để c&amp;oacute; thể thực hiện chức năng quản l&amp;yacute;. T&amp;iacute;nh c&amp;aacute;ch v&amp;agrave; nhất l&amp;agrave; những đặc điểm ri&amp;ecirc;ng, c&amp;aacute; t&amp;iacute;nh của từng th&amp;agrave;nh vi&amp;ecirc;n sẽ gi&amp;uacute;p người quản l&amp;yacute; biết c&amp;aacute;ch c&amp;acirc;n bằng, điều chỉnh cho ph&amp;ugrave; hợp. Điều n&amp;agrave;y cũng rất tốt để gi&amp;uacute;p bạn loại trừ những người c&amp;oacute; thể đối nghịch, m&amp;acirc;u thuẫn nhau bởi điều đ&amp;oacute; dễ khiến dự &amp;aacute;n gặp rắc rối.&lt;/p&gt;\r\n\r\n&lt;p&gt;Ch&amp;uacute; &amp;yacute; tới c&amp;aacute; t&amp;iacute;nh của từng người, bạn sẽ dễ d&amp;agrave;ng giao nhiệm vụ cho họ v&amp;agrave; đảm bảo mỗi th&amp;agrave;nh vi&amp;ecirc;n đều thấy được tầm quan trọng v&amp;agrave; những đ&amp;oacute;ng g&amp;oacute;p của họ cho dự &amp;aacute;n đều đ&amp;aacute;ng qu&amp;yacute; như nhau.&lt;/p&gt;', 1, '1515739103', 'mẹo hay', 'Với những đòi hỏi của công việc, người quản lý nhóm phải vạch ra được những yêu cầu đơn giản, rõ ràng nhưng thật bao quát. Từ đó, bạn có thể định hình được mục tiêu, kết quả của dự án và xét đến những yêu cầu đối với các thành viên của nhóm.', 'team, quan ly, meo hay', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pricings`
--

CREATE TABLE `pricings` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `features` text NOT NULL,
  `purchase` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `pricings`
--

INSERT INTO `pricings` (`id`, `name`, `price`, `features`, `purchase`) VALUES
(1, 'EASY', 'Free', 'Music Stream||24/7 Playing||Live Podcast||Multilanguage System||Purchase Option', '#'),
(2, 'Standard', '$5 / Month/ User', 'Music Stream||24/7 Playing||Live Podcast||Multilanguage System||Purchase Option', '#'),
(3, 'ENTERPRISE', '$7 / User / Month', 'Music Stream||24/7 Playing||Live Podcast||Multilanguage System||Purchase Option', '#');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `designation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `reviews`
--

INSERT INTO `reviews` (`id`, `text`, `image`, `name`, `designation`) VALUES
(1, 'Chúng tôi đã ứng dụng công nghệ này và đạt được những kết quả khả quan', 'http://xhentai69.com/images/review/1.png', 'Nguyễn Hùng Nam', 'Marketing Director'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor', 'http://xhentai69.com/images/review/1.png', 'Lukar Glory', 'CEO'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor', 'http://xhentai69.com/images/review/1.png', 'Anderson Lee', 'CEO'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor', 'http://xhentai69.com/images/review/1.png', 'Mark Klory', 'CEO'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor', 'http://xhentai69.com/images/review/1.png', 'Lukar Glory', 'CEO'),
(6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor', 'http://xhentai69.com/images/review/1.png', 'Anderson Lee', 'CEO');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `en_name` varchar(225) NOT NULL,
  `vi_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `en_name`, `vi_name`) VALUES
(1, 'Administrator', 'Quản Trị Viên'),
(2, 'Editor', 'Biên Tập Viên'),
(3, 'Collaborator', 'Cộng Tác Viên'),
(4, 'User', 'Thành Viên Thường'),
(5, 'Power User', 'Thành Viên VIP');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `screenshots`
--

CREATE TABLE `screenshots` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `src` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `screenshots`
--

INSERT INTO `screenshots` (`id`, `title`, `src`) VALUES
(1, 'App Screenshot', 'http://mylocalhost.tech/resources/images/Screen app/1.jpg'),
(2, 'App Screenshot', 'http://mylocalhost.tech/resources/images/Screen app/3.jpg'),
(3, 'App Screenshot', 'http://mylocalhost.tech/resources/images/Screen app/4.jpg'),
(4, 'App Screenshot', 'http://mylocalhost.tech/resources/images/Screen app/2.jpg'),
(5, 'App Screenshot', 'http://mylocalhost.tech/resources/images/Screen app/5.jpg'),
(6, 'App Screenshot', 'http://mylocalhost.tech/resources/images/Screen app/6.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icon` varchar(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `subtext` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `subtext`) VALUES
(1, 'ti-bookmark-alt', 'Easy to Customize', 'Dễ dàng cấu hình &amp; triển khai cho doanh nghiệp với bất kỳ mô hình kinh doanh nào.'),
(2, 'ti-crown', 'Awesome Features', 'Quản lý &amp; tương tác nhóm linh hoạt. Ghi nhận &amp; hỗ trợ công việc dễ dàng.'),
(3, 'ti-layers-alt', 'Quick Support', 'Hỗ trợ vận hành nhanh chóng. Đào tạo triển khai chuyên nghiệp.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `avatar` varchar(250) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `google` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `teams`
--

INSERT INTO `teams` (`id`, `name`, `role`, `avatar`, `facebook`, `twitter`, `google`) VALUES
(1, 'Thìn Trần', 'Giám đốc điều hành (C.E.O)', 'http://mylocalhost.tech/resources/images/DSC_0015.JPG', '', '', ''),
(2, 'Nghi Nguyễn', 'Giám đốc vận hành (C.O.O)', 'http://xhentai69.com/images/team/2.png', '', '', ''),
(3, 'Thanh Lê', 'Giám đốc công nghệ (C.T.O)', 'http://xhentai69.com/images/team/3.png', '', '', ''),
(4, 'Thuận Lê', 'Tech Artchitect', 'http://xhentai69.com/images/team/4.png', '', '', ''),
(5, 'Lan Anh', 'Product Manager', '', '', '', ''),
(6, 'Phượng Ngô', 'HR &amp; Accounting', '', '', '', ''),
(7, 'Khương Lê', 'Solution Specialist', '', '', '', ''),
(8, 'Lan Nguyễn', 'Training Specialist', '', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `cover` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `facebook` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`, `avatar`, `cover`, `email`, `role`, `address`, `mobile`, `facebook`) VALUES
(1, 'danghau', 'Nguyễn Đăng Hậu', '$2y$14$m7Gc4/y4NXoqhy1zSR79nOO95qJT2VeegUbX98wNGdifXCuzRjLWS', 'https://scontent.fsgn3-1.fna.fbcdn.net/v/t1.0-9/23130464_2075117899385075_5376999468255102345_n.jpg?oh=1ac84a10e947c9a257cb24d8f898d5bc&oe=5AB32229', '', '00xshen00@gmail.com', 1, '429 Nguyễn Trường Tộ, Phường Tân An, Thị Xã Lagi, Tỉnh Bình Thuận', '01633377665', 'https://www.facebook.com/anh.nhim.50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `widgets`
--

CREATE TABLE `widgets` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `hide` tinyint(1) NOT NULL,
  `nameid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `widgets`
--

INSERT INTO `widgets` (`id`, `name`, `hide`, `nameid`) VALUES
(1, 'banner', 0, '#banner-area'),
(2, 'service', 0, '#services-area'),
(3, 'feature', 0, '#fetures-area'),
(4, 'video', 0, '#play-video'),
(5, 'choose', 0, '#choose-area'),
(6, 'fact', 0, '#fact-area'),
(7, 'screenshot', 0, '#screenshot-area'),
(8, 'review', 0, '#reviews-area'),
(9, 'pricing', 0, '#pricing-area'),
(10, 'team', 0, '#team-area'),
(11, 'faq', 0, '#contact-area'),
(12, 'download', 0, '#download-area');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `widget_banner`
--

CREATE TABLE `widget_banner` (
  `name` varchar(30) NOT NULL,
  `content` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `widget_banner`
--

INSERT INTO `widget_banner` (`name`, `content`) VALUES
('app-store', ''),
('back-mock', 'http://mylocalhost.tech/images/app-mock/1.png'),
('front-mock', 'http://mylocalhost.tech/images/app-mock/2.png'),
('play-store', ''),
('title', 'Hoạch định & quản lý công việc hàng ngày dễ dàng, chuyên nghiệp'),
('video', 'https://www.youtube.com/watch?v=5cY5PHE4x_g');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `widget_choose`
--

CREATE TABLE `widget_choose` (
  `name` varchar(30) NOT NULL,
  `content` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `widget_choose`
--

INSERT INTO `widget_choose` (`name`, `content`) VALUES
('icon', 'ti-package'),
('mock', 'http://mylocalhost.tech/resources/images/Screen app/1.jpg'),
('subtext', 'Chúng tôi mang đến một giải pháp công nghệ thực sự tối giản, dễ dàng sử dụng và triển khai vào doanh nghiệp với chi phí thấp, linh hoạt cùng sự hỗ trợ tận tâm, trách nhiệm.'),
('title', 'Why Choose us');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `widget_download`
--

CREATE TABLE `widget_download` (
  `name` varchar(30) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `widget_download`
--

INSERT INTO `widget_download` (`name`, `content`) VALUES
('app_store', 'dasdsad'),
('google_play', 'sadasdasdsa'),
('icon', 'ti-gift'),
('subtext', 'Phiên bản mobile apps trên nền tảng Android & IOS đang được phát triển. Chúng tôi sẽ ra mắt trong thời gian tới.'),
('title', 'Download now');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `widget_faq`
--

CREATE TABLE `widget_faq` (
  `name` varchar(30) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `widget_faq`
--

INSERT INTO `widget_faq` (`name`, `content`) VALUES
('icon', 'ti-thought'),
('subtext', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis'),
('title', 'Have any question?');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `widget_feature`
--

CREATE TABLE `widget_feature` (
  `name` varchar(30) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `widget_feature`
--

INSERT INTO `widget_feature` (`name`, `content`) VALUES
('icon', 'ti-package'),
('mock', 'http://mylocalhost.tech/images/app-mock/feature-mock-2.png'),
('subtext', 'Chúng tôi xây dựng các tính năng với triết lý tối giản nhằm giúp đội ngũ của doanh nghiệp dễ dàng tiếp cận, sử dụng hiệu quả ngay từ đầu mà không cần tốn quá nhiều thời gian đào tạo. Ứng dụng công nghệ phải mang đến trải nghiệm công việc tuyệt vời & hiệu quả hơn mỗi ngày !'),
('title', 'TÍNH NĂNG');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `widget_pricing`
--

CREATE TABLE `widget_pricing` (
  `name` varchar(30) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `widget_pricing`
--

INSERT INTO `widget_pricing` (`name`, `content`) VALUES
('icon', 'ti-gift'),
('subtext', 'Doanh nghiệp bước vào kỷ nguyên công nghệ 4.0 với một hệ thống tuyệt vời giúp tăng hiệu suất quản trị với chi phí tối thiểu và chính sách sử dụng linh hoạt cùng sự hỗ trợ nhanh chóng, tận tâm, đầy trách nhiệm.'),
('title', 'Affordable Pricing');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `widget_screenshot`
--

CREATE TABLE `widget_screenshot` (
  `name` varchar(30) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `widget_screenshot`
--

INSERT INTO `widget_screenshot` (`name`, `content`) VALUES
('icon', 'ti-mobile'),
('subtext', 'Màn hình các mobile apps'),
('title', 'App Screen');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `widget_team`
--

CREATE TABLE `widget_team` (
  `name` varchar(30) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `widget_team`
--

INSERT INTO `widget_team` (`name`, `content`) VALUES
('icon', 'ti-gift'),
('subtext', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis'),
('title', 'Our Team');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `widget_video`
--

CREATE TABLE `widget_video` (
  `name` varchar(30) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `widget_video`
--

INSERT INTO `widget_video` (`name`, `content`) VALUES
('url', 'https://www.youtube.com/watch?v=zshxAlfZYAI');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chooses`
--
ALTER TABLE `chooses`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`name`);

--
-- Chỉ mục cho bảng `facts`
--
ALTER TABLE `facts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pricings`
--
ALTER TABLE `pricings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `screenshots`
--
ALTER TABLE `screenshots`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `widgets`
--
ALTER TABLE `widgets`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `widget_banner`
--
ALTER TABLE `widget_banner`
  ADD PRIMARY KEY (`name`);

--
-- Chỉ mục cho bảng `widget_choose`
--
ALTER TABLE `widget_choose`
  ADD PRIMARY KEY (`name`);

--
-- Chỉ mục cho bảng `widget_download`
--
ALTER TABLE `widget_download`
  ADD PRIMARY KEY (`name`);

--
-- Chỉ mục cho bảng `widget_faq`
--
ALTER TABLE `widget_faq`
  ADD PRIMARY KEY (`name`);

--
-- Chỉ mục cho bảng `widget_feature`
--
ALTER TABLE `widget_feature`
  ADD PRIMARY KEY (`name`);

--
-- Chỉ mục cho bảng `widget_pricing`
--
ALTER TABLE `widget_pricing`
  ADD PRIMARY KEY (`name`);

--
-- Chỉ mục cho bảng `widget_screenshot`
--
ALTER TABLE `widget_screenshot`
  ADD PRIMARY KEY (`name`);

--
-- Chỉ mục cho bảng `widget_team`
--
ALTER TABLE `widget_team`
  ADD PRIMARY KEY (`name`);

--
-- Chỉ mục cho bảng `widget_video`
--
ALTER TABLE `widget_video`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `chooses`
--
ALTER TABLE `chooses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT cho bảng `facts`
--
ALTER TABLE `facts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT cho bảng `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `screenshots`
--
ALTER TABLE `screenshots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT cho bảng `widgets`
--
ALTER TABLE `widgets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
