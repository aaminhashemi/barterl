-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 22, 2021 at 03:24 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_barter`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'کتاب ها', NULL, '2021-10-15 03:11:50'),
(2, 'لوح فشرده ی آموزشی', NULL, NULL),
(3, 'دسته ی سوم', '2021-10-15 03:15:59', '2021-10-15 03:15:59');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `province`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, ' آذرشهر', NULL, NULL),
(2, 1, ' اسکو', NULL, NULL),
(3, 1, ' اهر', NULL, NULL),
(4, 1, ' بستان آباد', NULL, NULL),
(5, 1, ' بناب', NULL, NULL),
(6, 1, ' تبریز', NULL, NULL),
(7, 1, ' جلفا', NULL, NULL),
(8, 1, ' چار اویماق', NULL, NULL),
(9, 1, ' سراب', NULL, NULL),
(10, 1, ' شبستر', NULL, NULL),
(11, 1, ' عجبشیر', NULL, NULL),
(12, 1, ' کلیبر', NULL, NULL),
(13, 1, ' مراغه', NULL, NULL),
(14, 1, ' مرند', NULL, NULL),
(15, 1, ' ملکان', NULL, NULL),
(16, 1, ' میانه', NULL, NULL),
(17, 1, ' ورزقان', NULL, NULL),
(18, 1, ' هریس', NULL, NULL),
(19, 1, 'هشترود', NULL, NULL),
(20, 2, ' ارومیه', NULL, NULL),
(21, 2, ' اشنویه', NULL, NULL),
(22, 2, ' بوکان', NULL, NULL),
(23, 2, ' پیرانشهر', NULL, NULL),
(24, 2, ' تکاب', NULL, NULL),
(25, 2, ' چالدران', NULL, NULL),
(26, 2, ' خوی', NULL, NULL),
(27, 2, ' سردشت', NULL, NULL),
(28, 2, ' سلماس', NULL, NULL),
(29, 2, ' شاهین دژ', NULL, NULL),
(30, 2, ' ماکو', NULL, NULL),
(31, 2, ' مهاباد', NULL, NULL),
(32, 2, ' میاندوآب', NULL, NULL),
(33, 2, ' نقده', NULL, NULL),
(34, 3, ' اردبیل', NULL, NULL),
(35, 3, ' بیله سوار', NULL, NULL),
(36, 3, ' پارس آباد', NULL, NULL),
(37, 3, ' خلخال', NULL, NULL),
(38, 3, ' کوثر', NULL, NULL),
(39, 3, ' گرمی', NULL, NULL),
(40, 3, ' مشگین', NULL, NULL),
(41, 3, ' نمین', NULL, NULL),
(42, 3, ' نیر', NULL, NULL),
(43, 4, ' آران و بیدگل', NULL, NULL),
(44, 4, ' اردستان', NULL, NULL),
(45, 4, ' اصفهان', NULL, NULL),
(46, 4, ' برخوار و میمه', NULL, NULL),
(47, 4, ' تیران و کرون', NULL, NULL),
(48, 4, ' چادگان', NULL, NULL),
(49, 4, ' خمینی شهر', NULL, NULL),
(50, 4, ' خوانسار', NULL, NULL),
(51, 4, ' سمیرم', NULL, NULL),
(52, 4, ' شاهین شهر و میمه', NULL, NULL),
(53, 4, ' شهر رضا', NULL, NULL),
(54, 4, 'دهاقان', NULL, NULL),
(55, 4, ' فریدن', NULL, NULL),
(56, 4, ' فریدون شهر', NULL, NULL),
(57, 4, ' فلاورجان', NULL, NULL),
(58, 4, ' کاشان', NULL, NULL),
(59, 4, ' گلپایگان', NULL, NULL),
(60, 4, ' لنجان', NULL, NULL),
(61, 4, ' مبارکه', NULL, NULL),
(62, 4, ' نائین', NULL, NULL),
(63, 4, ' نجف آباد', NULL, NULL),
(64, 4, ' نطنز', NULL, NULL),
(65, 5, ' ساوجبلاق', NULL, NULL),
(66, 5, ' کرج', NULL, NULL),
(67, 5, ' نظرآباد', NULL, NULL),
(68, 5, 'طالقان', NULL, NULL),
(69, 6, ' آبدانان', NULL, NULL),
(70, 6, ' ایلام', NULL, NULL),
(71, 6, ' ایوان', NULL, NULL),
(72, 6, ' دره شهر', NULL, NULL),
(73, 6, ' دهلران', NULL, NULL),
(74, 6, ' شیران و چرداول', NULL, NULL),
(75, 6, ' مهران', NULL, NULL),
(76, 7, ' بوشهر', NULL, NULL),
(77, 7, ' تنگستان', NULL, NULL),
(78, 7, ' جم', NULL, NULL),
(79, 7, ' دشتستان', NULL, NULL),
(80, 7, ' دشتی', NULL, NULL),
(81, 7, ' دیر', NULL, NULL),
(82, 7, ' دیلم', NULL, NULL),
(83, 7, ' کنگان', NULL, NULL),
(84, 7, ' گناوه', NULL, NULL),
(85, 8, ' اسلام شهر', NULL, NULL),
(86, 8, ' پاکدشت', NULL, NULL),
(87, 8, ' تهران', NULL, NULL),
(88, 8, ' دماوند', NULL, NULL),
(89, 8, ' رباط کریم', NULL, NULL),
(90, 8, ' ری', NULL, NULL),
(91, 8, ' شمیرانات', NULL, NULL),
(92, 8, ' شهریار', NULL, NULL),
(93, 8, ' فیروزکوه', NULL, NULL),
(94, 8, ' ورامین', NULL, NULL),
(95, 9, ' اردل', NULL, NULL),
(96, 9, ' بروجن', NULL, NULL),
(97, 9, ' شهرکرد', NULL, NULL),
(98, 9, ' فارسان', NULL, NULL),
(99, 9, ' کوهرنگ', NULL, NULL),
(100, 9, ' لردگان', NULL, NULL),
(101, 10, ' بیرجند', NULL, NULL),
(102, 10, ' درمیان', NULL, NULL),
(103, 10, ' سرایان', NULL, NULL),
(104, 10, ' سر بیشه', NULL, NULL),
(105, 10, ' فردوس', NULL, NULL),
(106, 10, ' قائن', NULL, NULL),
(107, 10, ' نهبندان', NULL, NULL),
(108, 11, ' برد سکن', NULL, NULL),
(109, 11, ' بجستان', NULL, NULL),
(110, 11, ' تایباد', NULL, NULL),
(111, 11, ' تحت جلگه', NULL, NULL),
(112, 11, ' تربت جام', NULL, NULL),
(113, 11, ' تربت حیدریه', NULL, NULL),
(114, 11, ' چناران', NULL, NULL),
(115, 11, ' جغتای', NULL, NULL),
(116, 11, ' جوین', NULL, NULL),
(117, 11, ' خلیل آباد', NULL, NULL),
(118, 11, ' خواف', NULL, NULL),
(119, 11, ' درگز', NULL, NULL),
(120, 11, ' رشتخوار', NULL, NULL),
(121, 11, ' زاوه', NULL, NULL),
(122, 11, ' سبزوار', NULL, NULL),
(123, 11, ' سرخس', NULL, NULL),
(124, 11, ' فریمان', NULL, NULL),
(125, 11, ' قوچان', NULL, NULL),
(126, 11, 'طرقبه شاندیز', NULL, NULL),
(127, 11, ' کاشمر', NULL, NULL),
(128, 11, ' کلات', NULL, NULL),
(129, 11, ' گناباد', NULL, NULL),
(130, 11, ' مشهد', NULL, NULL),
(131, 11, ' مه ولات', NULL, NULL),
(132, 11, ' نیشابور', NULL, NULL),
(133, 12, ' اسفراین', NULL, NULL),
(134, 12, ' بجنورد', NULL, NULL),
(135, 12, ' جاجرم', NULL, NULL),
(136, 12, ' شیروان', NULL, NULL),
(137, 12, ' فاروج', NULL, NULL),
(138, 12, ' مانه و سملقان', NULL, NULL),
(139, 13, ' آبادان', NULL, NULL),
(140, 13, ' امیدیه', NULL, NULL),
(141, 13, ' اندیمشک', NULL, NULL),
(142, 13, ' اهواز', NULL, NULL),
(143, 13, ' ایذه', NULL, NULL),
(144, 13, ' باغ ملک', NULL, NULL),
(145, 13, ' بندرماهشهر', NULL, NULL),
(146, 13, ' بهبهان', NULL, NULL),
(147, 13, ' خرمشهر', NULL, NULL),
(148, 13, ' دزفول', NULL, NULL),
(149, 13, ' دشت آزادگان', NULL, NULL),
(150, 13, ' رامشیر', NULL, NULL),
(151, 13, ' رامهرمز', NULL, NULL),
(152, 13, ' شادگان', NULL, NULL),
(153, 13, ' شوش', NULL, NULL),
(154, 13, ' شوشتر', NULL, NULL),
(155, 13, ' گتوند', NULL, NULL),
(156, 13, ' لالی', NULL, NULL),
(157, 13, ' مسجد سلیمان', NULL, NULL),
(158, 13, ' هندیجان', NULL, NULL),
(159, 14, ' ابهر', NULL, NULL),
(160, 14, ' ایجرود', NULL, NULL),
(161, 14, ' خدابنده', NULL, NULL),
(162, 14, ' خرمدره', NULL, NULL),
(163, 14, ' زنجان', NULL, NULL),
(164, 14, ' طارم', NULL, NULL),
(165, 14, ' ماه نشان', NULL, NULL),
(166, 15, ' دامغان', NULL, NULL),
(167, 15, ' سمنان', NULL, NULL),
(168, 15, ' شاهرود', NULL, NULL),
(169, 15, ' گرمسار', NULL, NULL),
(170, 15, ' مهدی شهر', NULL, NULL),
(171, 16, ' ایرانشهر', NULL, NULL),
(172, 16, ' چابهار', NULL, NULL),
(173, 16, ' خاش', NULL, NULL),
(174, 16, ' دلگان', NULL, NULL),
(175, 16, ' زابل', NULL, NULL),
(176, 16, ' زاهدان', NULL, NULL),
(177, 16, ' زهک', NULL, NULL),
(178, 16, ' سراوان', NULL, NULL),
(179, 16, ' سرباز', NULL, NULL),
(180, 16, ' کنارک', NULL, NULL),
(181, 16, ' نیکشهر', NULL, NULL),
(182, 17, ' آباده', NULL, NULL),
(183, 17, ' ارسنجان', NULL, NULL),
(184, 17, ' استهبان', NULL, NULL),
(185, 17, ' اقلید', NULL, NULL),
(186, 17, ' بوانات', NULL, NULL),
(187, 17, ' پاسارگاد', NULL, NULL),
(188, 17, ' جهرم', NULL, NULL),
(189, 17, ' خرم بید', NULL, NULL),
(190, 17, ' خنج', NULL, NULL),
(191, 17, ' داراب', NULL, NULL),
(192, 17, ' زرین دشت', NULL, NULL),
(193, 17, ' سپیدان', NULL, NULL),
(194, 17, ' شیراز', NULL, NULL),
(195, 17, ' فراشبند', NULL, NULL),
(196, 17, ' فسا', NULL, NULL),
(197, 17, ' فیروزآباد', NULL, NULL),
(198, 17, ' قیر و کارزین', NULL, NULL),
(199, 17, ' کازرون', NULL, NULL),
(200, 17, ' لارستان', NULL, NULL),
(201, 17, ' لامرد', NULL, NULL),
(202, 17, ' مرودشت', NULL, NULL),
(203, 17, ' ممسنی', NULL, NULL),
(204, 17, ' مهر', NULL, NULL),
(205, 17, ' نی ریز', NULL, NULL),
(206, 18, ' آبیک', NULL, NULL),
(207, 18, ' البرز', NULL, NULL),
(208, 18, ' بوئین زهرا', NULL, NULL),
(209, 18, ' تاکستان', NULL, NULL),
(210, 18, ' قزوین', NULL, NULL),
(211, 19, ' قم', NULL, NULL),
(212, 20, ' بانه', NULL, NULL),
(213, 20, ' بیجار', NULL, NULL),
(214, 20, ' دیواندره', NULL, NULL),
(215, 20, ' سروآباد', NULL, NULL),
(216, 20, ' سقز', NULL, NULL),
(217, 20, ' سنندج', NULL, NULL),
(218, 20, ' قروه', NULL, NULL),
(219, 20, ' کامیاران', NULL, NULL),
(220, 20, ' مریوان', NULL, NULL),
(221, 21, ' بافت', NULL, NULL),
(222, 21, ' بردسیر', NULL, NULL),
(223, 21, ' بم', NULL, NULL),
(224, 21, ' جیرفت', NULL, NULL),
(225, 21, ' راور', NULL, NULL),
(226, 21, ' رفسنجان', NULL, NULL),
(227, 21, ' رودبار جنوب', NULL, NULL),
(228, 21, ' زرند', NULL, NULL),
(229, 21, ' سیرجان', NULL, NULL),
(230, 21, ' شهر بابک', NULL, NULL),
(231, 21, ' عنبرآباد', NULL, NULL),
(232, 21, ' قلعه گنج', NULL, NULL),
(233, 21, ' کرمان', NULL, NULL),
(234, 21, ' کوهبنان', NULL, NULL),
(235, 21, ' کهنوج', NULL, NULL),
(236, 21, ' منوجان', NULL, NULL),
(237, 22, ' اسلام آباد غرب', NULL, NULL),
(238, 22, ' پاوه', NULL, NULL),
(239, 22, ' ثلاث باباجانی', NULL, NULL),
(240, 22, ' جوانرود', NULL, NULL),
(241, 22, ' دالاهو', NULL, NULL),
(242, 22, ' روانسر', NULL, NULL),
(243, 22, ' سرپل ذهاب', NULL, NULL),
(244, 22, ' سنقر', NULL, NULL),
(245, 22, ' صحنه', NULL, NULL),
(246, 22, ' قصر شیرین', NULL, NULL),
(247, 22, ' کرمانشاه', NULL, NULL),
(248, 22, ' کنگاور', NULL, NULL),
(249, 22, ' گیلان غرب', NULL, NULL),
(250, 22, ' هرسین', NULL, NULL),
(251, 23, ' بویر احمد', NULL, NULL),
(252, 23, ' بهمئی', NULL, NULL),
(253, 23, ' دنا', NULL, NULL),
(254, 23, ' کهگیلویه', NULL, NULL),
(255, 23, ' گچساران', NULL, NULL),
(256, 24, ' آزادشهر', NULL, NULL),
(257, 24, ' آق قلا', NULL, NULL),
(258, 24, ' بندر گز', NULL, NULL),
(259, 24, ' بندر ترکمن', NULL, NULL),
(260, 24, ' رامیان', NULL, NULL),
(261, 24, ' علی آباد', NULL, NULL),
(262, 24, ' کرد کوی', NULL, NULL),
(263, 24, ' کلاله', NULL, NULL),
(264, 24, ' گرگان', NULL, NULL),
(265, 24, ' گنبد کاووس', NULL, NULL),
(266, 24, ' مینو دشت', NULL, NULL),
(267, 25, ' آستارا', NULL, NULL),
(268, 25, ' آستانه اشرفیه', NULL, NULL),
(269, 25, ' املش', NULL, NULL),
(270, 25, ' بندر انزلی', NULL, NULL),
(271, 25, ' رشت', NULL, NULL),
(272, 25, ' رضوانشهر', NULL, NULL),
(273, 25, ' رودبار', NULL, NULL),
(274, 25, ' رودسر', NULL, NULL),
(275, 25, ' سیاهکل', NULL, NULL),
(276, 25, ' شفت', NULL, NULL),
(277, 25, ' صومعه سرا', NULL, NULL),
(278, 25, ' طوالش', NULL, NULL),
(279, 25, ' فومن', NULL, NULL),
(280, 25, ' لاهیجان', NULL, NULL),
(281, 25, ' لنگرود', NULL, NULL),
(282, 25, ' ماسال', NULL, NULL),
(283, 26, ' ازنا', NULL, NULL),
(284, 26, ' الیگودرز', NULL, NULL),
(285, 26, ' بروجرد', NULL, NULL),
(286, 26, ' پلدختر', NULL, NULL),
(287, 26, ' خرم آباد', NULL, NULL),
(288, 26, ' دورود', NULL, NULL),
(289, 17, ' لامرد', NULL, NULL),
(290, 17, ' مرودشت', NULL, NULL),
(291, 17, ' ممسنی', NULL, NULL),
(292, 17, ' مهر', NULL, NULL),
(293, 17, ' نی ریز', NULL, NULL),
(294, 18, ' آبیک', NULL, NULL),
(295, 18, ' البرز', NULL, NULL),
(296, 18, ' بوئین زهرا', NULL, NULL),
(297, 18, ' تاکستان', NULL, NULL),
(298, 18, ' قزوین', NULL, NULL),
(299, 19, ' قم', NULL, NULL),
(300, 20, ' بانه', NULL, NULL),
(301, 20, ' بیجار', NULL, NULL),
(302, 20, ' دیواندره', NULL, NULL),
(303, 20, ' سروآباد', NULL, NULL),
(304, 20, ' سقز', NULL, NULL),
(305, 20, ' سنندج', NULL, NULL),
(306, 20, ' قروه', NULL, NULL),
(307, 20, ' کامیاران', NULL, NULL),
(308, 20, ' مریوان', NULL, NULL),
(309, 21, ' بافت', NULL, NULL),
(310, 21, ' بردسیر', NULL, NULL),
(311, 21, ' بم', NULL, NULL),
(312, 21, ' جیرفت', NULL, NULL),
(313, 21, ' راور', NULL, NULL),
(314, 21, ' رفسنجان', NULL, NULL),
(315, 21, ' رودبار جنوب', NULL, NULL),
(316, 21, ' زرند', NULL, NULL),
(317, 21, ' سیرجان', NULL, NULL),
(318, 21, ' شهر بابک', NULL, NULL),
(319, 21, ' عنبرآباد', NULL, NULL),
(320, 21, ' قلعه گنج', NULL, NULL),
(321, 21, ' کرمان', NULL, NULL),
(322, 21, ' کوهبنان', NULL, NULL),
(323, 21, ' کهنوج', NULL, NULL),
(324, 21, ' منوجان', NULL, NULL),
(325, 22, ' اسلام آباد غرب', NULL, NULL),
(326, 22, ' پاوه', NULL, NULL),
(327, 22, ' ثلاث باباجانی', NULL, NULL),
(328, 22, ' جوانرود', NULL, NULL),
(329, 22, ' دالاهو', NULL, NULL),
(330, 22, ' روانسر', NULL, NULL),
(332, 22, ' سنقر', NULL, NULL),
(333, 22, ' صحنه', NULL, NULL),
(334, 22, ' قصر شیرین', NULL, NULL),
(335, 22, ' کرمانشاه', NULL, NULL),
(336, 22, ' کنگاور', NULL, NULL),
(337, 22, ' گیلان غرب', NULL, NULL),
(338, 22, ' هرسین', NULL, NULL),
(339, 23, ' بویر احمد', NULL, NULL),
(341, 23, ' دنا', NULL, NULL),
(343, 23, ' گچساران', NULL, NULL),
(344, 24, ' آزادشهر', NULL, NULL),
(345, 24, ' آق قلا', NULL, NULL),
(346, 24, ' بندر گز', NULL, NULL),
(347, 24, ' بندر ترکمن', NULL, NULL),
(348, 24, ' رامیان', NULL, NULL),
(349, 24, ' علی آباد', NULL, NULL),
(350, 24, ' کرد کوی', NULL, NULL),
(351, 24, ' کلاله', NULL, NULL),
(352, 24, ' گرگان', NULL, NULL),
(353, 24, ' گنبد کاووس', NULL, NULL),
(354, 24, ' مینو دشت', NULL, NULL),
(355, 25, ' آستارا', NULL, NULL),
(356, 25, ' آستانه اشرفیه', NULL, NULL),
(357, 25, ' املش', NULL, NULL),
(358, 25, ' بندر انزلی', NULL, NULL),
(359, 25, ' رشت', NULL, NULL),
(360, 25, ' رضوانشهر', NULL, NULL),
(361, 25, ' رودبار', NULL, NULL),
(362, 25, ' رودسر', NULL, NULL),
(363, 25, ' سیاهکل', NULL, NULL),
(364, 25, ' شفت', NULL, NULL),
(365, 25, ' صومعه سرا', NULL, NULL),
(366, 25, ' طوالش', NULL, NULL),
(367, 25, ' فومن', NULL, NULL),
(368, 25, ' لاهیجان', NULL, NULL),
(369, 25, ' لنگرود', NULL, NULL),
(370, 25, ' ماسال', NULL, NULL),
(371, 26, ' ازنا', NULL, NULL),
(372, 26, ' الیگودرز', NULL, NULL),
(373, 26, ' بروجرد', NULL, NULL),
(374, 26, ' پلدختر', NULL, NULL),
(375, 26, ' خرم آباد', NULL, NULL),
(376, 26, ' دورود', NULL, NULL),
(377, 26, ' دلفان', NULL, NULL),
(378, 26, ' سلسله', NULL, NULL),
(379, 26, ' کوهدشت', NULL, NULL),
(380, 26, ' الشتر', NULL, NULL),
(381, 26, ' نورآباد', NULL, NULL),
(382, 27, ' آمل', NULL, NULL),
(383, 27, ' بابل', NULL, NULL),
(384, 27, ' بابلسر', NULL, NULL),
(385, 27, ' بهشهر', NULL, NULL),
(386, 27, ' تنکابن', NULL, NULL),
(387, 27, ' جویبار', NULL, NULL),
(388, 27, ' چالوس', NULL, NULL),
(389, 27, ' رامسر', NULL, NULL),
(390, 27, ' ساری', NULL, NULL),
(391, 27, ' سوادکوه', NULL, NULL),
(392, 27, ' قائم شهر', NULL, NULL),
(393, 27, ' گلوگاه', NULL, NULL),
(394, 27, ' محمود آباد', NULL, NULL),
(395, 27, ' نکا', NULL, NULL),
(396, 27, ' نور', NULL, NULL),
(397, 27, ' نوشهر', NULL, NULL),
(398, 27, ' فریدونکنار', NULL, NULL),
(399, 28, ' آشتیان', NULL, NULL),
(400, 28, ' اراک', NULL, NULL),
(401, 28, ' تفرش', NULL, NULL),
(402, 28, ' خمین', NULL, NULL),
(403, 28, ' دلیجان', NULL, NULL),
(404, 28, ' زرندیه', NULL, NULL),
(405, 28, ' ساوه', NULL, NULL),
(406, 28, ' شازند', NULL, NULL),
(407, 28, ' کمیجان', NULL, NULL),
(408, 28, ' محلات', NULL, NULL),
(409, 29, ' بندرعباس', NULL, NULL),
(410, 29, ' میناب', NULL, NULL),
(411, 29, ' بندر لنگه', NULL, NULL),
(412, 29, ' رودان-دهبارز', NULL, NULL),
(413, 29, ' جاسک', NULL, NULL),
(414, 29, ' قشم', NULL, NULL),
(415, 29, ' حاجی آباد', NULL, NULL),
(416, 29, ' ابوموسی', NULL, NULL),
(417, 29, ' بستک', NULL, NULL),
(418, 29, ' گاوبندی', NULL, NULL),
(419, 29, ' خمیر', NULL, NULL),
(420, 30, ' اسدآباد', NULL, NULL),
(421, 30, ' بهار', NULL, NULL),
(422, 30, ' تویسرکان', NULL, NULL),
(423, 30, ' رزن', NULL, NULL),
(424, 30, ' کبودر آهنگ', NULL, NULL),
(425, 30, ' ملایر', NULL, NULL),
(426, 30, ' نهاوند', NULL, NULL),
(427, 30, ' همدان', NULL, NULL),
(428, 31, ' ابرکوه', NULL, NULL),
(429, 31, ' اردکان', NULL, NULL),
(430, 31, ' بافق', NULL, NULL),
(431, 31, ' تفت', NULL, NULL),
(432, 31, ' خاتم', NULL, NULL),
(433, 31, ' صدوق', NULL, NULL),
(434, 31, ' طبس', NULL, NULL),
(435, 31, ' مهریز', NULL, NULL),
(436, 31, ' میبد', NULL, NULL),
(437, 31, ' یزد', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `itemdetails`
--

CREATE TABLE `itemdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactway` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `uni_id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `exchangedesc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `itemdetails`
--

INSERT INTO `itemdetails` (`id`, `name`, `description`, `contactway`, `photo`, `user_id`, `cat_id`, `uni_id`, `city_id`, `img`, `created_at`, `updated_at`, `deleted_at`, `exchangedesc`) VALUES
(1, 'کتاب فیزیک هالیدی', 'کتاب فیزیک 1 و 2 هالیدی', '09134264423', '1634190142-630.jpg', 1, 1, 1, 4, '[\"1634190142-630.jpg\",\"1634190142-143.jpg\"]', '2021-10-14 05:42:22', '2021-10-15 05:48:43', '2021-10-15 05:48:43', 'کتاب ریاضی 1 و 2'),
(2, 'لوح فشرده ی ریاضیات', '5 حلقه لوح فشرده ی ریاضیات عمومی سال اول دانشگاه', '09160547292', NULL, 1, 2, 2, 6, '[\"1634284182-507.jpg\"]', '2021-10-15 04:19:42', '2021-10-15 04:19:42', NULL, 'کتاب جبرخطی سال سوم'),
(3, 'جزوه ی ادبیات 1', 'دو جلد جزوه ی ادبیات سال اول دانشگاه', '09134264423', NULL, 1, 3, 2, 2, '[\"1634289703-288.jpg\",\"1634289703-245.jpg\"]', '2021-10-15 05:51:43', '2021-10-15 05:51:43', NULL, 'کتاب تاریخ ادبیات'),
(4, 'کتاب عربی اول', 'یک جلد کتاب عربی یک', '09134264423', NULL, 1, 2, 2, 10, '[\"1634290057-324.png\"]', '2021-10-15 05:57:37', '2021-10-22 06:53:16', '2021-10-22 06:53:16', 'جزوه ی تاریخ ادبیات'),
(5, 'کتاب عربی اول', 'کتاب عربی سال سوم ادبیات عرب', '09134264423', NULL, 1, 1, 1, 16, '[\"1634882641-76.png\",\"1634882641-425.jpg\"]', '2021-10-22 06:04:01', '2021-10-22 06:51:28', '2021-10-22 06:51:28', 'فقط قابل فروش است'),
(6, 'لوح فشرده ی ریاضیات', 'لوح فشرده ریاضیات', '09134264423', '1634882774-984.jpg', 1, 1, 1, 17, '[\"1634882774-526.jpg\",\"1634882774-984.jpg\"]', '2021-10-22 06:06:14', '2021-10-22 06:06:14', NULL, 'بدون معاوضه'),
(7, 'کتاب هالیدی', 'کتاب فیزیک 3', '09134264423', '1634882952-624.jpg', 2, 3, 2, 2, '[\"1634882952-594.jpg\",\"1634882952-624.jpg\"]', '2021-10-22 06:09:12', '2021-10-22 06:09:12', NULL, 'کتاب فیزیک 1');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'a@a.com', '09160547292', 'متن تستی', '2021-10-14 06:43:14', '2021-10-14 06:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_08_01_092154_create_users_table', 1),
(4, '2021_08_02_121849_create_categories_table', 1),
(5, '2021_08_02_122114_create_universities_table', 1),
(6, '2021_08_02_122208_create_cities_table', 1),
(7, '2021_08_29_085458_create_itemdetails_table', 1),
(8, '2021_09_26_200938_create_messages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'دانشگاه تهران', NULL, NULL),
(2, 'دانشگاه اصفهان', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('admin','user') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` blob,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `type`, `password`, `phone`, `avatar`, `created_at`, `updated_at`, `email_verified_at`, `remember_token`) VALUES
(1, 'اسماعیل', 'هاشمی', 'a@a.com', 'admin', '$2y$10$KrSuo8ggQi4elGtwfJ9.ge6UfRdJ3RkeJIU8KZJuJFvX37.Gpt9NK', '09134264423', NULL, '2021-10-14 05:31:35', '2021-10-14 05:31:35', NULL, 'eNjjnTThjim0qn4jStcwuXgRPe87FEqA4uts8tU1FdoEaztFnrUOun1Dis85'),
(2, 'محسن', 'محمدی', 'mohsen@gmail.com', 'admin', '$2y$10$KrSuo8ggQi4elGtwfJ9.ge6UfRdJ3RkeJIU8KZJuJFvX37.Gpt9NK', '09160547294', NULL, '2021-10-22 06:07:06', '2021-10-22 14:27:52', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `itemdetails`
--
ALTER TABLE `itemdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `itemdetails_user_id_foreign` (`user_id`),
  ADD KEY `itemdetails_cat_id_foreign` (`cat_id`),
  ADD KEY `itemdetails_uni_id_foreign` (`uni_id`),
  ADD KEY `itemdetails_city_id_foreign` (`city_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=438;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itemdetails`
--
ALTER TABLE `itemdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `itemdetails`
--
ALTER TABLE `itemdetails`
  ADD CONSTRAINT `itemdetails_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `itemdetails_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `itemdetails_uni_id_foreign` FOREIGN KEY (`uni_id`) REFERENCES `universities` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `itemdetails_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
