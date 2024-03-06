-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 24, 2024 lúc 03:44 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cakeshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `cartID` bigint(20) NOT NULL,
  `userID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`cartID`, `userID`) VALUES
(23, 22),
(25, 24),
(26, 25);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cartitem`
--

CREATE TABLE `cartitem` (
  `cartItemID` bigint(20) NOT NULL,
  `productID` bigint(20) NOT NULL,
  `cartID` bigint(20) NOT NULL,
  `price` float NOT NULL,
  `quantity` smallint(6) NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cartitem`
--

INSERT INTO `cartitem` (`cartItemID`, `productID`, `cartID`, `price`, `quantity`, `createDate`) VALUES
(40, 13, 23, 20, 1, '2023-12-10 06:53:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `categoryID` bigint(20) NOT NULL,
  `p_cat_name` varchar(30) NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`categoryID`, `p_cat_name`, `p_cat_desc`) VALUES
(1, 'Cake', 'cakes with layer(s), frosting and top coat'),
(2, 'Cupcake', 'small cake baked in cupcake or muffin cups'),
(3, 'Cakepop', 'cake shaped as lollipops'),
(4, 'Cookie', 'baked circular or differently shaped biscuits'),
(5, 'Macaron', 'sandwiched cookies and cream and bo'),
(6, 'Brownie', 'chocolate fudge cakes'),
(7, 'Pastry', 'cakes that don\'t fall in any other categories');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history`
--

CREATE TABLE `history` (
  `tranID` bigint(20) NOT NULL,
  `userID` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `orderID` bigint(20) NOT NULL,
  `paymentMethod` text NOT NULL,
  `status` text NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `history`
--

INSERT INTO `history` (`tranID`, `userID`, `name`, `orderID`, `paymentMethod`, `status`, `createDate`) VALUES
(21, 22, NULL, 21, 'creditCard', 'successful', '2023-12-10 06:52:32'),
(26, 24, 'huong', 26, 'creditCard', 'successful', '2024-01-03 14:51:39'),
(28, 25, NULL, 28, 'creditCard', 'successful', '2024-01-02 02:51:28'),
(29, 25, NULL, 28, 'creditCard', 'successful', '2024-01-02 05:01:43'),
(31, 25, NULL, 28, 'paypal', 'successful', '2024-01-02 06:59:37'),
(32, 25, NULL, 28, 'creditCard', 'successful', '2024-01-02 08:29:01'),
(33, 25, NULL, 28, 'JuiceByMCB', 'successful', '2024-01-02 08:46:47'),
(34, 25, NULL, 28, 'JuiceByMCB', 'successful', '2024-01-02 08:50:15'),
(35, 25, 'Huong', 28, 'creditCard', 'successful', '2024-01-03 14:55:21'),
(36, 25, 'Thuong', 28, 'creditCard', 'successful', '2024-01-03 14:56:24'),
(37, 25, '', 28, '', 'successful', '2024-01-03 18:23:30'),
(38, 25, 'Hang', 28, 'creditCard', 'successful', '2024-01-03 18:24:17'),
(39, 25, 'Hang', 28, 'creditCard', 'successful', '2024-01-03 18:27:32'),
(40, 25, 'Hang', 28, 'creditCard', 'successful', '2024-01-03 18:28:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderitem`
--

CREATE TABLE `orderitem` (
  `orderItemID` bigint(20) NOT NULL,
  `productID` bigint(20) NOT NULL,
  `orderID` bigint(20) NOT NULL,
  `price` float NOT NULL,
  `quantity` smallint(6) NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orderitem`
--

INSERT INTO `orderitem` (`orderItemID`, `productID`, `orderID`, `price`, `quantity`, `createDate`) VALUES
(29, 3, 21, 15, 1, '2023-12-10 06:52:32'),
(32, 15, 26, 20, 1, '2024-01-01 15:39:35'),
(33, 20, 28, 40, 2, '2024-01-02 02:51:28'),
(34, 4, 28, 20, 1, '2024-01-02 05:01:43'),
(35, 16, 28, 29, 4, '2024-01-02 05:01:43'),
(36, 3, 28, 10, 1, '2024-01-02 06:12:09'),
(37, 3, 28, 10, 1, '2024-01-02 06:59:37'),
(38, 3, 28, 10, 3, '2024-01-02 08:29:01'),
(39, 5, 28, 60, 1, '2024-01-02 08:46:47'),
(40, 15, 28, 20, 1, '2024-01-02 08:50:15'),
(41, 4, 28, 20, 1, '2024-01-03 14:43:16'),
(42, 4, 28, 20, 1, '2024-01-03 14:50:03'),
(43, 4, 28, 20, 1, '2024-01-03 14:52:12'),
(44, 4, 28, 20, 1, '2024-01-03 14:55:21'),
(45, 3, 28, 10, 1, '2024-01-03 14:56:24'),
(46, 13, 28, 20, 1, '2024-01-03 18:23:30'),
(47, 3, 28, 10, 1, '2024-01-04 06:00:40'),
(48, 6, 28, 650, 1, '2024-01-04 06:11:10'),
(49, 44, 28, 1000, 1, '2024-01-04 06:12:44'),
(50, 3, 26, 15, 3, '2024-01-04 07:08:27'),
(51, 22, 26, 40, 1, '2024-01-04 07:08:27'),
(52, 20, 28, 40, 2, '2024-01-04 07:35:08'),
(53, 23, 28, 700, 1, '2024-01-04 07:35:08'),
(54, 3, 28, 10, 1, '2024-01-04 15:49:19'),
(55, 15, 28, 20, 1, '2024-01-04 16:15:50'),
(56, 24, 28, 320, 1, '2024-01-04 16:23:04'),
(57, 22, 28, 40, 1, '2024-01-04 16:26:13'),
(58, 16, 28, 29, 1, '2024-01-04 16:55:52'),
(59, 3, 28, 10, 1, '2024-01-04 16:57:14'),
(60, 15, 28, 20, 1, '2024-01-04 16:58:30'),
(61, 19, 28, 29, 1, '2024-01-04 17:00:20'),
(62, 3, 28, 10, 2, '2024-01-05 04:19:17'),
(63, 41, 28, 350, 1, '2024-01-05 04:28:54'),
(64, 3, 28, 10, 1, '2024-01-05 05:30:27'),
(65, 4, 28, 20, 1, '2024-01-05 06:08:00'),
(66, 3, 28, 10, 2, '2024-01-05 07:24:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `productID` bigint(20) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_desc` varchar(255) NOT NULL,
  `p_img` text NOT NULL,
  `p_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`productID`, `p_name`, `p_desc`, `p_img`, `p_price`) VALUES
(3, 'Choc chip cookie', 'cookie with chocolate chips. best ', 'Assets/images/products/cookies-chocolate-chip.webp', 10),
(4, 'Croissant', 'light and airy pastry', 'Assets\\images\\products\\croissants_pic.jpg', 20),
(5, 'Donut', 'sweet fried rind dough with colourful frosting', 'Assets\\images\\products\\donut_on_plate_pic.jpg', 60),
(6, 'Macaron_box_20', 'box of 20 macarons of different flavours', 'Assets\\images\\products\\macaron_box_pic.jpg', 650),
(7, 'Birthday cupcakes', 'Cupcakes specially designed for birthdays', 'Assets\\images\\products\\Cake_1.jpg', 350),
(8, 'Fruity Cheesecake', 'A cool, exotic cheesecake, perfect for hot days! With its Graham biscuit base and smooth texture, this cheesecake offers a plethora of textures at once!', 'Assets\\images\\products\\Cake_2.jpg', 400),
(9, 'Chocolate Mousse', 'The best chocolate mousse that feels like eating clouds! It has a fudgy chocolate base and a very delicate chocolate mousse as its body with a tasty strawberry on the top. All with 70% cacao.', 'Assets\\images\\products\\Cake_3.jpg', 400),
(10, 'Chocolate Cake pops', 'Lollipops but as a cake coated with a cracking chocolate!', 'Assets\\images\\products\\Cake_4.jpg', 350),
(11, 'Expresso Cupcake', 'Expresso cupcake with a chocolate base and a hint of coffee! It\'s accompanied with a very creamy frosting with a coffee flavor.', 'Assets\\images\\products\\Cake_5.jpg', 30),
(12, 'Rainbow Cupcake', 'Vanilla flavoured cupcake with a confetti bomb at its heart! The topping is a meringue based frosting.', 'Assets\\images\\products\\cupcake_bg.jpg', 40),
(13, 'Cinnamon brownie', 'Squared chocolaty and fudgy brownie, flavored faintly with cinnamon!', 'Assets\\images\\products\\Brownie\\Brownie_1.png', 20),
(15, 'choc-mint brownie', 'This brownie is refreshing and very delicious, with a hint of mint and a swirl of chocolate.', 'Assets\\images\\products\\Brownie\\Brownie_3.png', 20),
(16, 'Pecan brownie', 'This brownie contains pecan nuts and offers a wider range of textures. A pure chef-d\'oeuvre!', 'Assets\\images\\products\\Brownie\\Brownie_4.png', 29),
(17, 'Raspberry  brownie', 'Delicate raspberry brownie that brings the perfect balance between fruitiness and chocolate ! Raspberry is one of the best fruits that compliments the cacao flavor.', 'Assets\\images\\products\\Brownie\\Brownie_5.png', 29),
(18, 'Walnut brownie', 'This brownie contains roasted walnuts that accentuates the cacao in the brownie. The nutty flavor and particular texture of the roasted walnut compliments the delicateness and fudgy texture of the original brownie.', 'Assets\\images\\products\\Brownie\\Brownie_6.png', 29),
(19, 'White-choc brownie', 'White chocolate provides for the adequate moisture that makes up the perfect brownie!', 'Assets\\images\\products\\Brownie\\Brownie_7.png', 29),
(20, 'Choc-chip blondie', 'Blondie is another word for a longer brownie but not necessarily dominated by chocolate! This choc chip blondie offers the warmth and purity of vanilla and the fudgy texture of the chocolate chips.', 'Assets\\images\\products\\Brownie\\Brownie_8.png', 40),
(21, 'Raspberry swirl blondie', 'A fruity flavor that perfectly fits the moistness of a good blondie.', 'Assets\\images\\products\\Brownie\\Brownie_9.png', 40),
(22, 'Lemon blondie', 'Lemon flavored blondie provides for the perfect balance between the sourness of the lemon and the sweetness of the blondie.', 'Assets\\images\\products\\Brownie\\Brownie_10.png', 40),
(23, 'Christmas box x 24', 'Brownie box with 4 pieces of 6 unique flavors:<br><br>\r\n1. Walnut Brownie,<br>\r\n2. Cream cheese Brownie,<br>\r\n3. Original Brownie,<br>\r\n4. Choc-chip Brownie,<br>\r\n5. Raspberry swirl Brownie,<br>\r\n6. Double choc Brownie.<br>', 'Assets\\images\\products\\Brownie\\Brownie_11.png', 700),
(24, 'Christmas brownie bars x 8', 'The box contains 8 brownie bars, topped with white chocolate with a hint of candy cane. A limited edition by MALAKO!', 'Assets\\images\\products\\Brownie\\Brownie_12.png', 320),
(37, 'Rainbow cake', 'Beautiful multi flavored cake with interior and exterior rainbow colors! 4 layers of different cakes in 1!', 'Assets\\images\\products\\Cakes\\Cake_1.png', 650),
(38, 'Elegant floral wedding cake', 'Multi layered wedding cake decorated with fondant and sugar flowers. It\'s layers and sandwiched with several frostings: <br>\r\n\r\n> White chocolate ganache<br>\r\n> Vanilla frosting <br>\r\n> Chocolate and raspberry frosting<br>\r\n\r\n', 'Assets\\images\\products\\Cakes\\Cake_2.png', 2200),
(41, 'Fruity cake with chocolate', 'Simple chocolate cake with vanilla buttercream and refreshing red berries: cherries and strawberries.', 'Assets\\images\\products\\Cakes\\Cake_5.png', 350),
(42, 'Fruity cake with alomonds', 'Vanilla and almond flavored cake with simple buttercream frosting and fresh fruits.', 'Assets\\images\\products\\Cakes\\Cake_6.png', 350),
(43, 'White floral fondant cake', 'Red velvet cake covered with fondant and sugar flowers for a vintage look.', 'Assets/images/products/banhkemngon.jpg', 100),
(44, 'Choc-drip coffee cake', 'Amazing coffee cake with coffee beans flavored buttercream and a dripping chocolate ganache.', 'Assets\\images\\products\\Cakes\\Cake_8.png', 1000),
(45, 'Original vanilla cookie', 'Plain vanilla cookie', 'Assets\\images\\products\\Cookie\\Cookie_1.png', 15),
(46, 'M&M cookie', 'Soft cookie with M&Ms .', 'Assets\\images\\products\\Cookie\\Cookie_4.png', 15),
(47, 'Choc-chunks cookie', 'Cookie filled with chocolate chips', 'Assets\\images\\products\\Cookie\\Cookie_5.png', 15),
(48, 'M&M and Choc-chip cookie', 'Cookie with M&M and Chocolate chips.', 'Assets\\images\\products\\Cookie\\Cookie_6.png', 15),
(49, 'Chocolate sandwich cookie', '2 chocolate cookies filled with whipped cream too satisfy any sugar cravings!', 'Assets\\images\\products\\Cookie\\Cookie_7.png', 30),
(50, 'Choc-chip and M&M sandwich cookie', 'M&M and Choc-chip cookies with whipped cream', 'Assets\\images\\products\\Cookie\\Cookie_8.png', 30),
(51, 'Oats cookies', 'Cookies with oats for a healthier option.', 'Assets\\images\\products\\Cookie\\Cookie_9.png', 15),
(52, 'Dark-choc and mint cookie', 'Dark chocolate cookie with a hint of mint', 'Assets\\images\\products\\Cookie\\Cookie_10.png', 15),
(104, 'cupcake chocoloa black', 'delicuos', 'Assets/images/products/cupcake_socola.jpg', 1),
(117, 'Pink macaron', 'Good, best seller', 'Assets/images/products/macaron.jpg', 45),
(122, 'e', 'wewe', 'Assets/images/products/banhkemngon.jpg', 1),
(123, 'we', 'ss', 'Assets/images/products/cupcake_socola.jpg', 12),
(128, 'black CUPCAKE', 'Good', 'Assets/images/products/cac-loai-banh-ngot-duoc-yeu-thich-nhat-tai-viet-nam-202103090933169585.jpg', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products_test`
--

CREATE TABLE `products_test` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_desc` text NOT NULL,
  `p_cat_id` int(11) NOT NULL,
  `p_type_id` int(11) NOT NULL,
  `p_img` text NOT NULL,
  `p_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products_test`
--

INSERT INTO `products_test` (`p_id`, `p_name`, `p_desc`, `p_cat_id`, `p_type_id`, `p_img`, `p_price`) VALUES
(1, 'Vanilla Cupcake', 'vanilla cupcake with vanilla frosting', 2, 2, 'Assets\\images\\products\\cupcake_pic.png', 25),
(2, 'Red Velvet Cupcake', 'red velvet cupcake with cream cheese frosting', 2, 2, 'Assets\\images\\products\\red_velvet_cupcake_pic.png', 25),
(3, 'Choc chip cookie', 'cookie with chocolate chips ', 4, 2, 'Assets\\images\\products\\cookies_pic.png', 15),
(4, 'Croissant', 'light and airy pastry', 7, 2, 'Assets\\images\\products\\croissants_pic.jpg', 20),
(5, 'Donut', 'sweet fried rind dough with colourful frosting', 7, 2, 'Assets\\images\\products\\donut_on_plate_pic.jpg', 60),
(6, 'Macaron box x 20 pieces', 'box of 20 macarons of different flavours', 5, 2, 'Assets\\images\\products\\macaron_box_pic.jpg', 650),
(7, 'Birthday cupcakes', 'Cupcakes specially designed for birthdays', 2, 1, 'Assets\\images\\products\\Cake_1.jpg', 350),
(8, 'Fruity Cheesecake', 'A cool, exotic cheesecake, perfect for hot days! With its Graham biscuit base and smooth texture, this cheesecake offers a plethora of textures at once! ', 7, 1, 'Assets\\images\\products\\Cake_2.jpg', 400),
(9, 'Chocolate Mousse', 'The best chocolate mousse that feels like eating clouds! It has a fudgy chocolate base and a very delicate chocolate mousse as its body with a tasty strawberry on the top. All with 70% cacao.', 7, 1, 'Assets\\images\\products\\Cake_3.jpg', 400),
(10, 'Chocolate Cake pops', 'Lollipops but as a cake coated with a cracking chocolate!', 3, 1, 'Assets\\images\\products\\Cake_4.jpg', 350),
(11, 'Expresso Cupcake', 'Expresso cupcake with a chocolate base and a hint of coffee! It\'s accompanied with a very creamy frosting with a coffee flavor.', 2, 1, 'Assets\\images\\products\\Cake_5.jpg', 30),
(12, 'Rainbow Cupcake', 'Vanilla flavoured cupcake with a confetti bomb at its heart! The topping is a meringue based frosting. ', 2, 1, 'Assets\\images\\products\\cupcake_bg.jpg', 40),
(13, 'Cinnamon brownie', 'Squared chocolaty and fudgy brownie, flavored faintly with cinnamon!', 6, 2, 'Assets\\images\\products\\Brownie\\Brownie_1.png', 20),
(14, 'choc-chip brownie', 'Amazingly mouth melting brownie with a fudgy consistency. It contains melted chocolate in every bite !', 6, 2, 'Assets\\images\\products\\Brownie\\Brownie_2.png', 20),
(15, 'choc-mint brownie', 'This brownie is refreshing and very delicious, with a hint of mint and a swirl of chocolate.', 6, 2, 'Assets\\images\\products\\Brownie\\Brownie_3.png', 20),
(16, 'Pecan brownie', 'This brownie contains pecan nuts and offers a wider range of textures. A pure chef-d\'oeuvre!', 6, 2, 'Assets\\images\\products\\Brownie\\Brownie_4.png', 29),
(17, 'Raspberry  brownie', 'Delicate raspberry brownie that brings the perfect balance between fruitiness and chocolate ! Raspberry is one of the best fruits that compliments the cacao flavor.', 6, 2, 'Assets\\images\\products\\Brownie\\Brownie_5.png', 29),
(18, 'Walnut brownie', 'This brownie contains roasted walnuts that accentuates the cacao in the brownie. The nutty flavor and particular texture of the roasted walnut compliments the delicateness and fudgy texture of the original brownie.', 6, 2, 'Assets\\images\\products\\Brownie\\Brownie_6.png', 29),
(19, 'White-choc brownie', 'White chocolate provides for the adequate moisture that makes up the perfect brownie!', 6, 2, 'Assets\\images\\products\\Brownie\\Brownie_7.png', 29),
(20, 'Choc-chip blondie', 'Blondie is another word for a longer brownie but not necessarily dominated by chocolate! This choc chip blondie offers the warmth and purity of vanilla and the fudgy texture of the chocolate chips.', 6, 2, 'Assets\\images\\products\\Brownie\\Brownie_8.png', 40),
(21, 'Raspberry swirl blondie', 'A fruity flavor that perfectly fits the moistness of a good blondie.', 6, 2, 'Assets\\images\\products\\Brownie\\Brownie_9.png', 40),
(22, 'Lemon blondie', 'Lemon flavored blondie provides for the perfect balance between the sourness of the lemon and the sweetness of the blondie.', 6, 2, 'Assets\\images\\products\\Brownie\\Brownie_10.png', 40),
(23, 'Christmas box x 24', 'Brownie box with 4 pieces of 6 unique flavors:<br><br>\r\n1. Walnut Brownie,<br>\r\n2. Cream cheese Brownie,<br>\r\n3. Original Brownie,<br>\r\n4. Choc-chip Brownie,<br>\r\n5. Raspberry swirl Brownie,<br>\r\n6. Double choc Brownie.<br>', 6, 2, 'Assets\\images\\products\\Brownie\\Brownie_11.png', 700),
(24, 'Christmas brownie bars x 8', 'The box contains 8 brownie bars, topped with white chocolate with a hint of candy cane. A limited edition by MALAKO!', 6, 2, 'Assets\\images\\products\\Brownie\\Brownie_12.png', 320),
(37, 'Rainbow cake', 'Beautiful multi flavored cake with interior and exterior rainbow colors! 4 layers of different cakes in 1!', 1, 2, 'Assets\\images\\products\\Cakes\\Cake_1.png', 650),
(38, 'Elegant floral wedding cake', 'Multi layered wedding cake decorated with fondant and sugar flowers. It\'s layers and sandwiched with several frostings: <br>\r\n\r\n> White chocolate ganache<br>\r\n> Vanilla frosting <br>\r\n> Chocolate and raspberry frosting<br>\r\n\r\n', 1, 2, 'Assets\\images\\products\\Cakes\\Cake_2.png', 2200),
(39, 'Minimal elegant floral cake', 'Multi-layered cake with a minimalistic design for a modern look. The floral design gives an elegant touch to it. It\'s flavor is vanilla with chocolate frosting.', 1, 2, 'Assets\\images\\products\\Cakes\\Cake_3.png', 1800),
(40, 'Golden drip floral cake', 'Long multi-layered cake with golden white chocolate drips. One of our trendiest and candid looking cake ! It\'s delicious with a combination of our best compatible flavors.', 1, 2, 'Assets\\images\\products\\Cakes\\Cake_4.png', 1500),
(41, 'Fruity cake with chocolate', 'Simple chocolate cake with vanilla buttercream and refreshing red berries: cherries and strawberries.', 1, 2, 'Assets\\images\\products\\Cakes\\Cake_5.png', 350),
(42, 'Fruity cake with alomonds', 'Vanilla and almond flavored cake with simple buttercream frosting and fresh fruits.', 1, 2, 'Assets\\images\\products\\Cakes\\Cake_6.png', 350),
(43, 'White floral fondant cake', 'Red velvet cake covered with fondant and sugar flowers for a vintage look.', 1, 2, 'Assets\\images\\products\\Cakes\\Cake_7.png', 1000),
(44, 'Choc-drip coffee cake', 'Amazing coffee cake with coffee beans flavored buttercream and a dripping chocolate ganache.', 1, 2, 'Assets\\images\\products\\Cakes\\Cake_8.png', 1000),
(45, 'Original vanilla cookie', 'Plain vanilla cookie', 4, 2, 'Assets\\images\\products\\Cookie\\Cookie_1.png', 15),
(46, 'M&M cookie', 'Soft cookie with M&Ms .', 4, 2, 'Assets\\images\\products\\Cookie\\Cookie_4.png', 15),
(47, 'Choc-chunks cookie', 'Cookie filled with chocolate chips', 4, 2, 'Assets\\images\\products\\Cookie\\Cookie_5.png', 15),
(48, 'M&M and Choc-chip cookie', 'Cookie with M&M and Chocolate chips.', 4, 2, 'Assets\\images\\products\\Cookie\\Cookie_6.png', 15),
(49, 'Chocolate sandwich cookie', '2 chocolate cookies filled with whipped cream too satisfy any sugar cravings!', 4, 2, 'Assets\\images\\products\\Cookie\\Cookie_7.png', 30),
(50, 'Choc-chip and M&M sandwich cookie', 'M&M and Choc-chip cookies with whipped cream', 4, 2, 'Assets\\images\\products\\Cookie\\Cookie_8.png', 30),
(51, 'Oats cookies', 'Cookies with oats for a healthier option.', 4, 2, 'Assets\\images\\products\\Cookie\\Cookie_9.png', 15),
(52, 'Dark-choc and mint cookie', 'Dark chocolate cookie with a hint of mint', 4, 2, 'Assets\\images\\products\\Cookie\\Cookie_10.png', 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_category`
--

CREATE TABLE `product_category` (
  `productID` bigint(20) NOT NULL,
  `categoryID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product_category`
--

INSERT INTO `product_category` (`productID`, `categoryID`) VALUES
(3, 4),
(4, 7),
(5, 7),
(6, 5),
(7, 2),
(8, 7),
(9, 7),
(10, 3),
(11, 2),
(12, 2),
(13, 6),
(15, 6),
(16, 6),
(17, 6),
(18, 6),
(19, 6),
(20, 6),
(21, 6),
(22, 6),
(23, 6),
(24, 6),
(37, 1),
(38, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 4),
(46, 4),
(47, 4),
(48, 4),
(49, 4),
(50, 4),
(51, 4),
(52, 4),
(117, 5),
(128, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_type`
--

CREATE TABLE `product_type` (
  `productID` bigint(20) NOT NULL,
  `typeID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product_type`
--

INSERT INTO `product_type` (`productID`, `typeID`) VALUES
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(37, 2),
(38, 2),
(41, 2),
(42, 2),
(43, 2),
(44, 2),
(45, 2),
(46, 2),
(47, 2),
(48, 2),
(49, 2),
(50, 2),
(51, 2),
(52, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
--

CREATE TABLE `transaction` (
  `tranID` bigint(20) NOT NULL,
  `userID` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `orderID` bigint(20) NOT NULL,
  `paymentMethod` text NOT NULL,
  `status` int(1) NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `transaction`
--

INSERT INTO `transaction` (`tranID`, `userID`, `name`, `orderID`, `paymentMethod`, `status`, `createDate`) VALUES
(35, 25, 'Huong', 28, 'creditCard', 0, '2024-01-03 14:55:21'),
(39, 25, 'Hang', 28, 'creditCard', 0, '2024-01-03 18:27:32'),
(40, 25, 'Hang', 28, 'creditCard', 0, '2024-01-03 18:28:11'),
(44, 25, 'Chien', 28, 'paypal', 0, '2024-01-04 06:00:40'),
(46, 25, 'Diem', 28, 'creditCard', 0, '2024-01-04 06:11:10'),
(47, 25, 'Linh', 28, 'creditCard', 0, '2024-01-04 06:12:44'),
(48, 24, 'KHanh', 26, 'creditCard', 0, '2024-01-04 07:08:27'),
(50, 25, 'Linh', 28, 'creditCard', 0, '2024-01-04 07:35:17'),
(53, 25, 'Ly', 28, 'creditCard', 0, '2024-01-04 15:49:35'),
(55, 25, 'Huong ly', 28, 'JuiceByMCB', 0, '2024-01-04 16:44:15'),
(57, 25, 'linh', 28, 'JuiceByMCB', 0, '2024-01-04 16:55:52'),
(58, 25, 'Thuy', 28, 'creditCard', 0, '2024-01-04 16:57:14'),
(59, 25, 'Thuy', 28, 'JuiceByMCB', 0, '2024-01-05 04:21:50'),
(61, 25, 'Thuy', 28, 'creditCard', 0, '2024-01-05 04:32:29'),
(62, 25, 'Thuy', 28, 'creditCard', 1, '2024-01-05 04:19:26'),
(64, 25, 'Thuy', 28, 'creditCard', 1, '2024-01-05 04:29:10'),
(65, 25, 'Huong', 28, 'creditCard', 0, '2024-01-05 07:25:14'),
(66, 25, 'Thuy', 28, 'paypal', 1, '2024-01-05 06:08:00'),
(67, 25, 'Thuy', 28, 'creditCard', 1, '2024-01-05 07:24:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `types`
--

CREATE TABLE `types` (
  `typeID` bigint(20) NOT NULL,
  `p_type_name` varchar(30) NOT NULL,
  `p_type_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `types`
--

INSERT INTO `types` (`typeID`, `p_type_name`, `p_type_desc`) VALUES
(1, 'new', 'new products are tagged as new'),
(2, 'featured', 'products which have to get attention are tagged as featured'),
(3, 'hot', 'products on sale are tagged as hot'),
(4, 'best', 'best- seller products are tagged as best');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `userID` bigint(20) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(60) NOT NULL,
  `phone` varchar(8) NOT NULL,
  `description` text NOT NULL,
  `vkey` varchar(100) NOT NULL,
  `verified` tinyint(1) NOT NULL COMMENT '1: user, 0 là admin',
  `isSubscribed` tinyint(1) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL COMMENT '1: là user , 0 là admin',
  `createDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`userID`, `uname`, `pass`, `fname`, `lname`, `email`, `address`, `phone`, `description`, `vkey`, `verified`, `isSubscribed`, `isAdmin`, `createDate`) VALUES
(20, 'DaoKhuyen', '$2y$10$AtExeh7D3uDYubZvWPcemeUqbc60vGLWaR8qpK43W.Fmn1vIzE2Yq', '', '', 'khuyen30@gmail.com', '0834006551', 'Tam Ky', '', '30118494eeb7b676a7214c80d808e95b', 0, 0, 0, '2023-12-08 14:57:27'),
(21, 'ThuyLinh', '$2y$10$igkwP5cCxS42JcH8To66Ru2QaIe7PooHSEgmDnJ5VpM26WDzLmPLG', '', '', 'thuylinh0402@gmail.com', '0763016901', 'Quang Bi', '', '42b132e216f327855a4052e218cbb1e8', 0, 0, 0, '2023-12-08 15:26:05'),
(22, 'TLinh', '$2y$10$k8TCCayGbLadPFuMhirziuqthLr2Q4sKrOgb6/wGladZu4iMS/xN.', 'Thuy', 'Linh', 'thuylinh04204@gmail.com', 'cổng chính VKU', '07630169', 'I&#039;m Thuy Linh , I like eating cake', 'a5fe17897b0b6be864f7a453b598f2c5', 1, 0, 1, '2023-12-28 13:34:21'),
(24, 'Nguyen', '$2y$10$iuivwnTZ2c.N/7WFvdN1/.vxsscAhJIDh8.mjMrfpRp1k41xQnvve', 'Thi', 'Linh', 'haha@gmail.com', '', '', '', '343a361a573e0d5e480228163e469919', 1, 0, 1, '2024-01-01 15:38:06'),
(25, 'ThuyLinh2', '$2y$10$8xHpieKEiT7apHU4DHgCyuXeYdJShOrfT1.DodwbmhPSXJqchPa9K', 'TLinh', 'Linh', 'linh@gmail.com', 'Da Nang', '07630169', 'hi I&#039;m Linh', '5ef9a2e833a8eebf5d83237cbd3ac8eb', 1, 0, 1, '2024-01-05 04:29:54'),
(26, 'Tao123', '$2y$10$Itr7uu55jr7PTPE6X6Detu05BHRYY.8CjPyMbQN0/WzSHtPoFwmfq', 'Tao', 'Tao', 'Huong@gmail.com', '', '', '', 'c7ef6f3e975a3de029639d7e28735de5', 1, 0, 1, '2024-01-05 06:23:21'),
(27, 'hang123', '$2y$10$RNd4Ul/6Xz7/YysKEs1dBubI2nELKNOUdjVWo7XUywlfF0OgGSoca', 'Tao', 'Tao', 'Hang@gmail.com', '', '', '', 'b91a8d25a5d8b1478aab0ef3ba5ba2d4', 1, 0, 1, '2024-01-05 06:24:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userorder`
--

CREATE TABLE `userorder` (
  `orderID` bigint(20) NOT NULL,
  `userID` bigint(20) NOT NULL,
  `total` float NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(8) NOT NULL,
  `status` text NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `userorder`
--

INSERT INTO `userorder` (`orderID`, `userID`, `total`, `address`, `phone`, `status`, `createDate`) VALUES
(21, 22, 15, 'Da Nang', '', 'successful', '2023-12-10 06:52:32'),
(26, 24, 20, 'Da Nang', '', 'successful', '2024-01-01 15:39:35'),
(28, 25, 80, 'Da Nang', '', 'successful', '2024-01-02 02:51:28'),
(29, 25, 136, 'Da Nang', '07630169', 'successful', '2024-01-02 05:01:43'),
(30, 25, 10, 'Da Nang', '07630169', 'successful', '2024-01-02 06:12:09'),
(31, 25, 10, 'Da Nang', '07630169', 'successful', '2024-01-02 06:59:37'),
(32, 25, 30, 'Da Nang', '07630169', 'successful', '2024-01-02 08:29:01'),
(33, 25, 60, 'Da Nang', '07630169', 'successful', '2024-01-02 08:46:47'),
(34, 25, 20, 'Da Nang', '07630169', 'successful', '2024-01-02 08:50:15'),
(35, 25, 20, 'Da Nang', '07630169', 'successful', '2024-01-03 14:43:16'),
(36, 25, 20, 'Da Nang', '07630169', 'successful', '2024-01-03 14:50:03'),
(37, 25, 20, 'Da Nang', '07630169', 'successful', '2024-01-03 14:52:12'),
(38, 25, 20, 'Da Nang', '07630169', 'successful', '2024-01-03 14:55:21'),
(39, 25, 10, 'Da Nang', '07630169', 'successful', '2024-01-03 14:56:24'),
(40, 25, 20, '', '07630169', 'successful', '2024-01-03 18:23:30'),
(41, 25, 20, 'Da Nang', '07630169', 'successful', '2024-01-03 18:24:17'),
(42, 25, 20, 'Da Nang', '07630169', 'successful', '2024-01-03 18:27:32'),
(43, 25, 20, 'Da Nang', '07630169', 'successful', '2024-01-03 18:28:11'),
(44, 25, 20, 'Da Nang', '07630169', 'successful', '2024-01-03 19:02:53'),
(45, 25, 20, 'Da Nang', '07630169', 'successful', '2024-01-03 19:03:29'),
(46, 25, 20, 'Da Nang', '07630169', 'successful', '2024-01-03 19:03:39'),
(47, 25, 10, 'Hue', '07630169', 'successful', '2024-01-04 06:00:40'),
(48, 25, 10, 'Hue', '07630169', 'successful', '2024-01-04 06:08:01'),
(49, 25, 650, 'Da Nang', '07630169', 'successful', '2024-01-04 06:11:10'),
(50, 25, 1000, 'Da Nang', '07630169', 'successful', '2024-01-04 06:12:44'),
(51, 24, 40, 'Hue', '', 'successful', '2024-01-04 07:08:27'),
(52, 25, 700, 'Quang Binh', '07630169', 'successful', '2024-01-04 07:35:08'),
(53, 25, 700, 'Quang Binh', '07630169', 'successful', '2024-01-04 07:35:17'),
(54, 25, 700, 'Quang Binh', '07630169', 'successful', '2024-01-04 08:21:13'),
(55, 25, 10, 'Da Nang', '07630169', 'successful', '2024-01-04 15:49:19'),
(56, 25, 10, 'Da Nang', '07630169', 'successful', '2024-01-04 15:49:35'),
(57, 25, 20, 'Da Nang', '07630169', '1', '2024-01-04 16:15:50'),
(58, 25, 320, 'Da Nang', '07630169', '1', '2024-01-04 16:23:04'),
(59, 25, 40, 'Da Nang', '07630169', '1', '2024-01-04 16:26:13'),
(60, 25, 29, 'Da Nang', '07630169', '1', '2024-01-04 16:55:52'),
(61, 25, 10, 'Da Nang', '07630169', '1', '2024-01-04 16:57:14'),
(62, 25, 20, 'Da Nang', '07630169', '1', '2024-01-04 16:58:30'),
(63, 25, 29, 'Da Nang', '07630169', 'successful', '2024-01-04 17:00:20'),
(64, 25, 20, 'Da Nang', '07630169', 'successful', '2024-01-05 04:19:17'),
(65, 25, 20, 'Da Nang', '07630169', 'successful', '2024-01-05 04:19:26'),
(66, 25, 350, 'Da Nang', '07630169', 'successful', '2024-01-05 04:28:54'),
(67, 25, 350, 'Da Nang', '07630169', 'successful', '2024-01-05 04:29:10'),
(68, 25, 10, 'Da Nang', '07630169', 'successful', '2024-01-05 05:30:27'),
(69, 25, 20, 'Da Nang', '07630169', 'successful', '2024-01-05 06:08:00'),
(70, 25, 20, 'Da Nang', '07630169', 'successful', '2024-01-05 07:24:49');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `userID` (`userID`);

--
-- Chỉ mục cho bảng `cartitem`
--
ALTER TABLE `cartitem`
  ADD PRIMARY KEY (`cartItemID`),
  ADD KEY `1_Cart_Zero-Or-More_CartItems` (`cartID`),
  ADD KEY `1_Product_Many_CartItems` (`productID`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Chỉ mục cho bảng `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`tranID`),
  ADD KEY `1_Order_Many_Transactions` (`orderID`),
  ADD KEY `1_User_Many_Transactions` (`userID`);

--
-- Chỉ mục cho bảng `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`orderItemID`),
  ADD KEY `1_Order_Many_OrderItems` (`orderID`),
  ADD KEY `1_Product_Many_OrderItems` (`productID`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Chỉ mục cho bảng `products_test`
--
ALTER TABLE `products_test`
  ADD PRIMARY KEY (`p_id`);

--
-- Chỉ mục cho bảng `product_category`
--
ALTER TABLE `product_category`
  ADD KEY `1_Product_Many_Categories` (`productID`),
  ADD KEY `1_Category_Many_Products` (`categoryID`);

--
-- Chỉ mục cho bảng `product_type`
--
ALTER TABLE `product_type`
  ADD KEY `1_Product_Many_Types` (`productID`),
  ADD KEY `1_Type_Many_Products` (`typeID`);

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`tranID`),
  ADD KEY `1_Order_Many_Transactions` (`orderID`),
  ADD KEY `1_User_Many_Transactions` (`userID`);

--
-- Chỉ mục cho bảng `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`typeID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- Chỉ mục cho bảng `userorder`
--
ALTER TABLE `userorder`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `1_User_Many_Orders` (`userID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `cartitem`
--
ALTER TABLE `cartitem`
  MODIFY `cartItemID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `history`
--
ALTER TABLE `history`
  MODIFY `tranID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `orderItemID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `productID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT cho bảng `products_test`
--
ALTER TABLE `products_test`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `tranID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `types`
--
ALTER TABLE `types`
  MODIFY `typeID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `userID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `userorder`
--
ALTER TABLE `userorder`
  MODIFY `orderID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `cartitem`
--
ALTER TABLE `cartitem`
  ADD CONSTRAINT `1_Cart_Zero-Or-More_CartItems` FOREIGN KEY (`cartID`) REFERENCES `cart` (`cartID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `1_Product_Many_CartItems` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `orderitem`
--
ALTER TABLE `orderitem`
  ADD CONSTRAINT `1_Order_Many_OrderItems` FOREIGN KEY (`orderID`) REFERENCES `userorder` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `1_Product_Many_OrderItems` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `1_Category_Many_Products` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`categoryID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `1_Product_Many_Categories` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product_type`
--
ALTER TABLE `product_type`
  ADD CONSTRAINT `1_Product_Many_Types` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `1_Type_Many_Products` FOREIGN KEY (`typeID`) REFERENCES `types` (`typeID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `1_Order_Many_Transactions` FOREIGN KEY (`orderID`) REFERENCES `userorder` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `1_User_Many_Transactions` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `userorder`
--
ALTER TABLE `userorder`
  ADD CONSTRAINT `1_User_Many_Orders` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
