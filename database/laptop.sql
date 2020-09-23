SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Hp', 'HP - 2-in-1 14" Touch-Screen Chromebook - Intel Celeron - 4GB Memory -32GB eMMC Flash Memory - Ceramic White', 319.00, './assets/products/hp1.jpg', '2020-03-28 11:08:57'), -- NOW()
(2, 'Apple', 'MacBook Air 13.3" Laptop with Touch ID - Intel Core i3 - 8GB Memory - 256GB Solid State Drive (Latest Model) - Space Gray', 950.00, './assets/products/apple2.jpg', '2020-03-28 11:08:57'),
(3, 'ASUS', 'ROG Strix G15 15.6" Gaming Laptop - Intel Core i7 - 8GB Memory - NVIDIA GeForce GTX 1650 Ti - 512GB SSD - Electro Punk', 999.00, './assets/products/asus3.jpg', '2020-03-28 11:08:57'),
(4, 'ASUS', 'Zenbook 14" Laptop - AMD Ryzen 5 - 8GB Memory - NVIDIA GeForce MX350 - 256GB SSD - Light Gray', 59.00, './assets/products/asus-zenbook4.jpg', '2020-03-28 11:08:57'),
(5, 'Hp', 'Pavilion x360 2-in-1 14" Touch-Screen Laptop - Intel Core i5 - 8GB  Memory - 256GB SSD - Luminous Gold', 750.00, './assets/products/hp-pavilion5.jpg', '2020-03-28 11:08:57'),
(6, 'Dell', 'Dell - G7 17.3" 300Hz Gaming Laptop - Intel Core i7 - 16GB Memory - NVIDIA RTX 2070 (Max-P) - 512GB SSD - RGB Keyboard - Black', 1549.99, './assets/products/dell1.jpg', '2020-03-28 11:08:57'),
(7, 'MSI', 'MSI - GF65 15.6" Gaming Laptop - Intel Core i7 - 8GB Memory - NVIDIA GeForce RTX 2060 - 512GBSolid State Drive - Black', 1199.99, './assets/products/MSI1.jpg', '2020-03-28 11:08:57'),
(8, 'MSI', 'MSI - GP65 10SEK 15.6" Laptop - Intel Core i7 - 16GB Memory - NVIDIA GeForce RTX 2060 - 512GB SSD - Aluminum Black', 1399.99, './assets/products/MSI2.jpg', '2020-03-28 11:08:57'),
(9, 'Lenovo', 'Lenovo - Legion 5 15" Gaming Laptop - Intel Core i7 - 8GB Memory - NVIDIA GeForce GTX 1660 Ti - 512GB SSD - Phantom Black', 949.99, './assets/products/lenovo1.jpg', '2020-03-28 11:08:57'),
(10, 'Hp', 'HP - OMEN Gaming 15.6" Laptop - AMD Ryzen 7 - 8GB Memory - NVIDIA GeForce GTX 1660 Ti - 512GB SSD - Mica Silver', 1049.99, './assets/products/hp2.jpg', '2020-03-28 11:08:57'),
(11, 'ASUS', 'ASUS - ROG Zephyrus G14 14" Gaming Laptop - AMD Ryzen 9 - 16GB Memory - NVIDIA GeForce RTX 2060 Max-Q - 1TB SSD - Moonlight White', 1449.99, './assets/products/asus1.jpg', '2020-03-28 11:08:57'),
(12, 'Microsoft', 'Microsoft - Surface Pro 7 - 12.3" Touch Screen - Intel Core i5 - 8GB Memory - 256GB SSD with Black Type Cover (Latest Model) - Matte Black', 1329.99, './assets/products/microsoft1.jpg', '2020-03-28 11:08:57');


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Daily', 'Tuition', '2020-03-28 13:07:17'),
(2, 'Akshay', 'Kashyap', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;