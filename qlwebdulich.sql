-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2023 at 03:31 PM
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
-- Database: `qlwebdulich`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_name`, `password`) VALUES
(5233, 'Jake', '00000000'),
(12312, 'Austin2200', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog`
--

CREATE TABLE `tb_blog` (
  `Name` varchar(50) NOT NULL,
  `Place` varchar(50) NOT NULL,
  `Content` varchar(500) NOT NULL,
  `NgDang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_blog`
--

INSERT INTO `tb_blog` (`Name`, `Place`, `Content`, `NgDang`) VALUES
('Jake Ripper', 'TPHCM <3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n\r\n', '2023-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_booktour`
--

CREATE TABLE `tb_booktour` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `NumberTicket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_booktour`
--

INSERT INTO `tb_booktour` (`Name`, `Email`, `Phone`, `Date`, `NumberTicket`) VALUES
('Hồ Trâng Gia Khánh', 'KHANH@gmail.com', '000372032', '2023-10-23', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `FName` varchar(20) NOT NULL,
  `LName` varchar(20) NOT NULL,
  `EMail` varchar(30) NOT NULL,
  `PassWord` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`FName`, `LName`, `EMail`, `PassWord`) VALUES
('1', '2', '12@gmail.com', '21'),
('Nguyen', 'Triet', 'DatNg34uyen203@gmail.com', '12345678'),
('Nguyen', 'Dat', 'DatNguyen203@gmail.com', '12345678'),
('Ho', 'Khanh', 'Khanh123@gmail.com', '12345678'),
('test', 'number 1', 'munber1@gmail.com', '00000000'),
('test ', 'number 2', 'number2@gmai.com', '11111111'),
('Tran', 'Quyen', 'Quyentran212@gmail.com', '12345678'),
('test', '3', 't3@gmail.com', 't3'),
('Nguyen', 'Tran', 'Tran213@gmail.com', '12345678'),
('Nha', 'Triet', 'Trietnha123@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tourdulich`
--

CREATE TABLE `tb_tourdulich` (
  `MaTour` varchar(10) NOT NULL,
  `DiaDiem` varchar(50) NOT NULL,
  `ChiTiet` varchar(1000) NOT NULL,
  `SoNgay` int(11) NOT NULL,
  `DoTuoi` int(11) NOT NULL,
  `TheLoai` varchar(50) NOT NULL,
  `GiaTien` float NOT NULL,
  `LinkAnh` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_tourdulich`
--

INSERT INTO `tb_tourdulich` (`MaTour`, `DiaDiem`, `ChiTiet`, `SoNgay`, `DoTuoi`, `TheLoai`, `GiaTien`, `LinkAnh`) VALUES
('DN103', 'Đà Nẵng', 'Đà Nẵng may mắn khi sở hữu nhiều bãi biển đẹp, trải dài thoai thoải và cát trắng miên man. Biển Đà Nẵng được tạp chí Forbes (Mỹ) bình chọn là một trong 6 bãi biển quyến rũ nhất hành tinh. Nếu bạn là người yêu biển chắc chắn sẽ thỏa mãn khi được ngụp lặn trong nước biếc, đùa giỡn với những con sóng hay các trò chơi như lướt ván, chèo thuyền chuối, motor nước\r\nKhông chỉ nổi tiếng với những bãi biển, nơi đây còn mang nét đẹp hấp dẫn khi có bản đảo Sơn Trà vươn mình ra biển, có đèo Hải Vân – “thiên hạ đệ nhất hùng quang” với cảnh quan ngoạn mục. Và không thể không nhắc đến đó là danh thắng Ngũ Hành Sơn, đăc biệt là Bà Nà Hills – cái tên làm nên thương hiệu cho du lịch Đà Nẵng và còn rất nhiều địa danh khác nữa.\r\nĐặc điểm khí hậu, thời tiết  Đà Nẵng nằm trong khu vực khí hậu nhiệt đới gió mùa, nhiệt độ cao và ít bị biến động. Do ở một vị trí khá đắc địa nên khí hậu nơi đây có sự chuyển tiếp, đan xen sữa khí hậu miền Bắc lẫn miền Nam. Tuy nhiên không chia làm 4 mùa rõ rệt như miền Bắc mà', 4, 12, 'Vacation', 4500000, 'https://vcdn1-dulich.vnecdn.net/2022/06/03/cauvang-1654247842-9403-1654247849.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=Swd6JjpStebEzT6WARcoOA'),
('HN101', 'Hà Nội', 'Hà Nội nằm ở tả ngạn sông Đà và hai bên đồng bằng sông Hồng. Phía Bắc giáp với tỉnh Vĩnh Phúc và Thái Nguyên, phía Nam giáp tỉnh Hòa Bình, phía Đông giáp với tỉnh Bắc Ninh và Hưng Yên, còn phía Tây giáp tỉnh Vĩnh Phúc. Sau khi được mở rộng, Hà Nội nằm trong top 17 Thủ đô có diện tích lớn nhất thế giới với 3.324,92 km2. Với vị trí địa lý thuận lợi này, thành phố này dễ dàng trở thành trung tâm kinh tế – chính trị, văn hóa, khoa học quan trọng của cả nước. Hiện tại, bao gồm 12 quận, 1 thị xã và 17 huyện.\r\nDo có kiểu khí hậu nhiệt đới gió mùa ẩm nên đến du lịch Hà Nội, bạn có thể thưởng thức đủ 4 mùa trong năm. Mỗi mùa đều có những đặc trưng riêng, cho bạn những cảm nhận khác nhau về cuộc sống, về cảnh vật và con người nơi đây. Hà Nội vào đông lạnh thì cũng lạnh lắm, vào hè nóng thì cũng nóng lắm nhưng không vì thế mà mất đi cái đẹp. Song có lẽ, đặc biệt nhất vẫn là mùa xuân, là mùa thu Hà Nội.\r\n', 3, 1, 'Vacation', 4000000, 'https://owa.bestprice.vn/images/destinations/uploads/trung-tam-thanh-pho-ha-noi-603da1f235b38.jpg'),
('VL101', 'Vĩnh Long', 'Vĩnh Long nằm ở trung tâm đồng bằng sông Cửu Long, giữa sông Tiền và sông Hậu, được mệnh danh là vùng đất “địa linh nhân kiệt”, giàu truyền thống cách mạng, lưu giữ nhiều di tích lịch sử văn hóa độc đáo. Thiên nhiên còn ưu đãi Vĩnh Long khí hậu ôn hòa quanh năm, đất đai màu mỡ, bốn mùa cây trái xanh tươi… tạo nên sự khác biệt, sức hấp dẫn riêng thu hút khách tham quan. Đến Vĩnh Long, du khách có thể hòa mình vào sông nước miệt vườn và trở thành thành viên trong gia đình để cùng khám phá những nét văn hóa, phong tục tập quán của người dân địa phương', 3, 1, 'Vacation', 3000000, 'https://cdn.tgdd.vn/Files/2021/07/03/1365427/23-dia-diem-du-lich-vinh-long-hap-dan-khach-du-lich-202206041228380001.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_blog`
--
ALTER TABLE `tb_blog`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `tb_booktour`
--
ALTER TABLE `tb_booktour`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`EMail`);

--
-- Indexes for table `tb_tourdulich`
--
ALTER TABLE `tb_tourdulich`
  ADD PRIMARY KEY (`MaTour`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
