-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2020 at 07:03 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ucg`
--
CREATE DATABASE IF NOT EXISTS `ucg` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `ucg`;

-- --------------------------------------------------------

--
-- Table structure for table `missions`
--

DROP TABLE IF EXISTS `missions`;
CREATE TABLE IF NOT EXISTS `missions` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Vehicle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `VehicleNum` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Driver` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Items` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Workers` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `WorkersWork` text COLLATE utf8mb4_unicode_ci,
  `Type` int(2) NOT NULL,
  `Custom` int(2) NOT NULL,
  `CustomData` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `missions`
--

INSERT INTO `missions` (`ID`, `Date`, `Vehicle`, `VehicleNum`, `Driver`, `Items`, `Workers`, `WorkersWork`, `Type`, `Custom`, `CustomData`) VALUES
(1, '05-02-2020 11:15:47 AM', '', '', '', '', '<li>مريم عايد الرشود 13060010307</li><li>سمرة نزل القميزي 13050054110</li><li>بلشه علي السحيمان 13100027520</li><li>زريفة سالم اللاقي 03040039127</li><li>عنود العجلان</li><li>شامية العجلان</li>', 'الزراعة', 2, 0, ''),
(8, '11-02-2020 01:11:26 PM', 'السيارة  هافي', '257702 دمشق', 'محمد غزال 9021290', '<li>خزن عدد 2</li>', '', NULL, 1, 0, ''),
(5, '11-02-2020 11:51:22 AM', 'السيارة  هونداي', '769411 دمشق', 'جميل كنعان', '<li>باب حديد عدد 1</li>\r\n<li>شباك عدد 2</li>', '', NULL, 1, 0, ''),
(7, '11-02-2020 12:59:28 PM', '  السيارة  هونداي', '769411 دمشق', 'جميل كنعان', '<li>اسمنت اسود 2 طن</li>', '', NULL, 1, 0, ''),
(4, '10-02-2020 12:21:17 PM', '  السيارة هافي شانج', '754761 ريف دمشق', 'جوهر جوهر 03140017714', '', '<li>عمار الآغا 03140025775</li>', 'تصليح التركسات', 3, 0, ''),
(9, '11-02-2020 02:02:48 PM', 'السيارة  هونداي', '                              ', 'وائل عنبر', '<li>قطاعة عينات الحجر لمقالع اسمنت المتحدة عدد 1</li><li>اكياس عينات حجر البازلت</li>', '', NULL, 1, 0, ''),
(10, '12-02-2020 11:45:39 AM', '', '', '', '', '<li>صبحي حسين الحاجي 02320115691</li><li>منير صبحي الحاجي 02320359384</li><li>بكار علي اليوسف 02340071053</li><li>عمر بكار اليوسف 02340067800</li><li>عبدالله جاسم اليوسف 02340089189</li><li>علي محمد البكار 0330055747</li><li>هلال علي يوسف 02340071132</li><li>عدنان ابراهيم الجاسم 02320230009</li>', '', 2, 0, ''),
(11, '12-02-2020 11:48:24 AM', 'السيارة   فيات ', '611767 دمشق ', 'م.عامر أرناقوط ', '<li>مكعبات بيتونية للكسر عدد 6</li>', '', NULL, 1, 0, ''),
(12, '12-02-2020 01:51:00 PM', '  السيارة فيات ', '611767 دمشق ', 'م.عامر أرناقوط ', '<li>رجاج عدد 1</li>', '', NULL, 1, 0, ''),
(13, '13-02-2020 02:07:49 PM', 'السطحة  ', '341443 ريف دمشق', 'محمد عيسى علي 0317007340', '<li>بلوك معزول عدد 2000</li>', '', NULL, 1, 0, ''),
(14, '16-02-2020 08:23:34 AM', 'السيارة  ', 'زراعة', 'زراعة', '<li>شجرة ثرو عدد 300</li><li>شجرة صنوبر عدد 100</li><li>اكياس سماد NBK عدد 103</li>', '', NULL, 1, 1, 'يسمح بمرور المواد التالية للقيام باعمال الزراعة وتشجير طريق المصنع الخارجي:'),
(15, '17-02-2020 08:24:03 AM', '  السيارة  ', 'زراعة', 'زراعة', '<li>شجرة ثرو عدد 300</li><li>شجرة صنوبر عدد 100</li>', '', NULL, 1, 1, 'يسمح بمرور المواد التالية للقيام باعمال الزراعة وتشجير طريق المصنع الخارجي:'),
(17, '17-02-2020 01:10:42 PM', '    السيارة هونداي', '769411 دمشق', 'جميل كنعان', '<li>مولدة صغيرة عدد 1</li>', '', NULL, 1, 0, ''),
(18, '17-02-2020 01:11:30 PM', '    السيارة هونداي', '769411 دمشق', 'جميل كنعان', '<li>ربطة تيب كهربائي عدد 30</li>', '', NULL, 1, 0, ''),
(19, '17-02-2020 02:22:55 PM', 'السيارة  ', '258001 دمشق', 'محمد علي كسر', '', '', NULL, 5, 0, ''),
(20, '19-02-2020 11:33:30 AM', 'السيارة  فراري', '123456 دمشق', 'عبدالملك زين', '<li>بلور عدد 1</li><li>بطيخ عدد 2</li>', '', NULL, 1, 1, 'يرجى تسهيل مرور السيارة  فراري   123456 دمشق   سائقها باتمان يحمل التالي:'),
(21, '19-02-2020 12:56:42 PM', 'السيارة  لودر سونيك', '214222 الجيش', 'نصر الدين يوسف', '<li>تركس عدد 1</li><li>بوكات عدد 1</li><li>صينية رجاجة عدد 1</li>', '', NULL, 1, 1, 'يرجى تسهيل مرور لودر سونيك&nbsp;  214222 الجيش  سائقها نصر الدين يوسف عناية السيد عماد يحمل التالي:'),
(22, '19-02-2020 01:14:14 PM', 'السيارة  هونداي', '639342', 'حسين الأطرش', '<li>قناني اوكسجين عدد 3</li>', '', NULL, 1, 0, ''),
(23, '19-02-2020 01:15:05 PM', '', '', '', '', '<li>رامي نبال جعفر 01040004745</li>', 'الحفر', 2, 0, ''),
(24, '19-02-2020 01:16:09 PM', '', '', '', '', '<li>بهاء فادي نعمان 13010130088</li>', 'الحفر', 2, 0, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
