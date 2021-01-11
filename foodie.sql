-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 10:17 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodie`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `id_detail` int(30) NOT NULL,
  `id_pemesanan` int(30) NOT NULL,
  `id_menu` int(30) NOT NULL,
  `jumlah` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`id_detail`, `id_pemesanan`, `id_menu`, `jumlah`) VALUES
(12, 25, 896, 1),
(13, 25, 881, 1),
(14, 25, 893, 1),
(15, 25, 886, 1),
(16, 25, 887, 1),
(17, 25, 888, 1),
(18, 26, 886, 1),
(19, 26, 887, 1),
(20, 27, 888, 1),
(21, 27, 889, 1),
(22, 28, 886, 1),
(23, 28, 887, 1),
(24, 28, 888, 1),
(25, 28, 889, 1),
(26, 28, 890, 1),
(27, 29, 886, 1),
(28, 29, 887, 1),
(29, 30, 888, 1),
(30, 30, 889, 1),
(31, 30, 890, 1),
(32, 31, 905, 1),
(33, 31, 908, 1),
(34, 32, 888, 2),
(35, 32, 889, 2),
(36, 32, 890, 2),
(37, 33, 888, 1),
(38, 33, 889, 1),
(39, 34, 886, 1),
(40, 35, 892, 1),
(41, 35, 888, 1),
(42, 36, 889, 1),
(43, 36, 886, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(30) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `keterangan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `keterangan`) VALUES
(1001, 'Snacks', 'Makanan ringan untuk camilan'),
(1002, 'Rice', 'Makanan utama untuk mengisi perut'),
(1003, 'Pizza & Pasta', 'Makanan alternatif nasi'),
(1004, 'Burger', 'Makanan yang cocok dimakan dimana saja'),
(1005, 'Beverages', 'Minuman penyegar dahaga'),
(1006, 'Chicken', 'Makanan paling favorit'),
(1007, 'Coffee', 'Minuman untuk memulai hari'),
(1008, 'Korean', 'Makanan ala ala Korea'),
(1011, 'Middle Easterns', 'Makanan Ala Timur Tengah'),
(1012, 'starbucks', 'minuman dingin ');

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
  `ip_addresses` text,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, 'qazwsx098', 1, 0, 0, NULL, 20191219),
(2, 2, 'edcrfv123', 0, 0, 0, NULL, 20191219);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(30) NOT NULL,
  `id_resto` int(30) NOT NULL,
  `id_kategori` int(30) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `harga` int(30) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `id_resto`, `id_kategori`, `nama_menu`, `deskripsi`, `harga`, `foto`) VALUES
(881, 3, 1001, 'Gochujang Chicken', 'ayam goreng dengan potongan lebih kecil dengan rasa pedas dari bumbu pedas Gochujang khas Korea\r\n', 27000, '881.png'),
(882, 3, 1001, 'Apple Pie', 'Pastry renyah berisi potongan buah apel dan bumbu kayu manis memberikan cita rasa manis, juicy, lembut dan gurih', 10500, '882.png'),
(883, 3, 1002, 'Happy Meal Ayam', 'paket berisi menu nasi, ayam chrispy dan soft drink serta dilengkapi mainan untuk anak-anak', 35500, '883.png'),
(884, 3, 1005, 'McFlurry Choco Cheese with Oreo', 'Paduan coklat dan keju dalam es krim vanilla McDonald\'s dengan topping Oreo', 15000, '884.png'),
(885, 3, 1005, 'Frosty Latte Frape', 'Ice blended espresso McCafe dan susu yang nikmat dengan sensasi mint yang menyejukkan', 35000, '885.png'),
(886, 1, 1003, 'Pepperoni Signature ', 'pizza dengan pepperoni, mozzarella cheese, parsley dan PHD sauce.', 200000, '886.png'),
(887, 1, 1003, 'Beef Lasagna ', 'Kombinasi pasta dengan daging cincang, krim pasta, keju mozzarella dan peterseli.', 50000, '887.png'),
(888, 1, 1003, 'Spicy Risotto Chicken ', 'Nasi Panggang, Saus Geprek, Daging Ayam Goreng reyah, Mozzarella, dan Parsley', 50000, '888.png'),
(889, 1, 1001, 'Fresh Salad', 'Selada, tomat, jeli melon, jagung manis, melon, campuran kentang, campuran makaroni, telur dan saus Thousand Island.', 40000, '889.png'),
(890, 1, 1005, 'Red Summer Breeze ', 'Minuman dengan rasa Frambozen dan Lemon, dengan Jelly Rasa Jeruk.', 15000, '890.png'),
(891, 2, 1002, 'ChickenTeriyaki', 'Daging ayampremium yang dimasak dengan potongan bawang bombay dan menggunakan saus teriyaki khas HokBen.\r\n', 39000, '891.jpg'),
(892, 2, 1001, 'Ebi Furai', 'Udang yang dilapisi tepung roti, dimasak dengan metode Deep Frying Oil.', 37000, '892.jpg'),
(893, 2, 1001, 'Shrimp Dumpling', '\r\nDibuat dari olahan udang yang dibungkus dengan kulit pangsit dan disajikan dengan daun bawang serta kuah kaldu khas HokBen.', 19000, '893.jpg'),
(894, 2, 1005, 'Cold Ocha', 'Teh hijau khas Jepang yang dingin dan segar.', 7000, '894.jpg'),
(895, 2, 1001, 'Edamame', 'Produk Edamame ini diproses dengan seleksi ketat. Setelah panen, Edamame diolah dengan menggunakan air mendidih dan dibekukan secara cepat dalam kondisi pabrik yang higienis.', 12000, '895.jpg'),
(896, 4, 1001, 'Twisty', 'daging ayam crispy dengan sayuran dan saus mayo ', 18000, '896.jpg'),
(897, 4, 1002, 'Oriental Bento', 'rice box ayam goreng strip dengan saus oriental khas KFC', 18000, '897.jpg'),
(898, 4, 1001, 'Pancake', 'pancake dengan madu dan butter', 18000, '898.jpg'),
(899, 4, 1002, 'Colonel Yakiniku Rice', 'paket dengan isi nasi, ayam fillet, salad dengan saus mayo yang lezat', 30000, '899.jpg'),
(900, 4, 1002, 'Super Besar', ' 1 pc Chicken OR, Rice, dan Coca cola', 32000, '900.jpg'),
(901, 5, 1004, 'Whopper Meal', 'whopper, fries, coke', 58000, '901.jpg'),
(902, 5, 1004, 'Mushroom Swiss ', 'mushroom swiss, fries, coke', 58000, '902.jpg'),
(903, 5, 1002, 'King Chicken 2x2', '2 nasi, 2 ayam crispy khas BK, 2 ice tea', 75000, '903.jpg'),
(904, 5, 1001, 'Cheesy Rasher Fries ', 'fries dengan cheddar dan rasher ', 14000, '904.jpg'),
(905, 5, 1002, 'Double Meal Deals Chicken Korean King ', '2 hot crispy, 2 nasi, 2 ice tea', 60000, '905.jpg'),
(906, 6, 1006, 'Original Chicken', ' juicy chicken', 15000, '906.png'),
(907, 6, 1004, 'Mexicana Burger', 'Ayam renyah dan empuk dengan potongan Cheddar, selada segar, tomat dan bawang bombai cincang. Tortilla renyah dan mayo pedas di antara dua roti. ', 42000, '907.png'),
(908, 6, 1001, 'Mexician Wrap', 'ayam renyah dengan mayones dan selada renyah saat dipanggang. ', 19000, '908.png'),
(909, 6, 1005, 'Ice Cream Sundae', 'es krim stroberi dan cokelat yang lezat', 10000, '909.png'),
(910, 6, 1002, 'Spicy BBQ Chicken Rice', 'Empat potong ayam besar tanpa tulang dilumuri saus pedas BBQ, disajikan dengan potongan kecil tomat segar ', 18000, '910.png'),
(911, 7, 1002, 'Combo 1', '1 potong ayam OR, nasi putih, soft drink ', 32000, '911.jpg'),
(912, 7, 1004, 'Combo Crunchy Deal', '1 Zesty Crunch Burger, fries, soft drink ', 35000, '912.jpg'),
(913, 7, 1002, 'Paket Family ', '5 potong ayam (OR/Spicy), 3 nasi putih, 3 soft drink', 123000, '913.jpg'),
(914, 7, 1003, 'Spaghetty Goreng ', ' spaghetti yang digoreng dengan telur dan sayur kol dan tomat', 20000, '914.jpg'),
(915, 7, 1005, 'Avocado Float ', 'smoothies alpukat dengan tambahan es krim cokelat di atas nya', 17000, '915.jpg'),
(916, 8, 1001, 'Chicken Soup', 'Soup ayam dengan potongan sayur dan kaldu ayam ', 9000, '916.png'),
(917, 8, 1004, 'Crispy Chicken Sandwich', 'ayam empuk yang dilapisi tepung roti di atasnya dengan selada dan mayo lembut', 37000, '917.png'),
(918, 8, 1001, 'Baked potato Chili \'N Cheese', 'rasa hangat kentang panggang dipanggang dengan sup dan keju sapi.', 38000, '918.png'),
(919, 8, 1001, 'Potato Pie Carbonara', 'mashed potato dengan potongan daging sapi, saus carbonara, dan keju mozzarella yang meleleh.', 40000, '919.png'),
(920, 8, 1005, 'Coco Lychee Tea', 'ice lychee tea dengan potongan nata de coco dan leci', 18000, '920.png'),
(923, 1, 1002, 'Fire Chicken', 'Ayam', 50000, 'ala-carte-richicken-4pcs.jpg'),
(924, 10, 1006, 'Fire Chicken Wings', 'Ayam Pedas', 16000, 'ala-carte-fire-chicken-4pcs.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `tanggal` datetime NOT NULL,
  `total` int(10) NOT NULL,
  `status_bayar` int(1) NOT NULL,
  `bukti_bayar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_user`, `tanggal`, `total`, `status_bayar`, `bukti_bayar`) VALUES
(25, 4, '2019-12-15 17:15:54', 266000, 1, 'a.jpg'),
(26, 4, '2019-12-15 18:05:17', 160000, 1, 'a.jpg'),
(27, 4, '2019-12-15 18:05:59', 82000, 1, ''),
(28, 5, '2019-12-15 19:39:10', 257000, 1, ''),
(29, 4, '2019-12-17 11:35:22', 160000, 1, 'ANDIKA.jpg'),
(30, 4, '2019-12-17 19:13:39', 97000, 1, 'ELOK.jpg'),
(31, 10, '2019-12-17 19:28:50', 79000, 1, 'REKENINGLISTRIK.jpg'),
(32, 5, '2019-12-18 07:37:48', 194000, 1, '112605.jpg'),
(33, 4, '2019-12-21 10:45:25', 82000, 1, ''),
(34, 2, '2019-12-23 02:09:08', 200000, 1, ''),
(35, 2, '2019-12-23 02:17:59', 87000, 1, '12267_391943917559187_1011426529_n.jpg'),
(36, 2, '2019-12-23 08:01:47', 240000, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `resto`
--

CREATE TABLE `resto` (
  `id_resto` int(30) NOT NULL,
  `nama_resto` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `telepon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resto`
--

INSERT INTO `resto` (`id_resto`, `nama_resto`, `lokasi`, `telepon`) VALUES
(1, 'Pizza Hut', 'Jl. Soekarno Hatta 17 Malang ', '(0341) 87176098'),
(2, 'Hoka Hoka Bento', 'Jl. Veteran No.2 Malang', '(0341) 55032243'),
(3, 'McDonald\'s', 'Jl. Brigjend Slamet Riadi No.1-3 Malang', '(0341) 6517609'),
(4, 'KFC MOG', 'Mall Olympics Garden, Jl. Kawi No. 24 Malang', '(0341) 36322925'),
(5, 'Burger King', ' Jl. Besar Ijen No.84 Malang', '(0341) 57611298'),
(6, 'Texas Chicken', 'Jl. Raya Kertajaya Indah No.50-52 Malang', '(0341) 59176098'),
(7, 'CFC', ' Jl. Trunojoyo No.10 Malang ', '(0341) 51299795'),
(8, 'Wendy\'s', ' Malang City Point, Jl. Terusan Dieng No. 31-32', '(0341) 50247112'),
(10, 'Richeese Factories', 'Dinoyos', '0819231876');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL,
  `status_aktif` int(1) NOT NULL,
  `foto` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat`, `telepon`, `email`, `password`, `level`, `status_aktif`, `foto`) VALUES
(1, 'Yulia', 'Kepanjen', '082313365255', 'yuliasofi92@gmail.com', 'admin', 'admin', 1, 'default.jpg'),
(2, 'Rossy', 'Batu', '0876554332', 'rosidatulamala28@gmail.com', 'asdf', 'user', 1, '72781.jpg'),
(3, 'Andika Reva', 'Malang', '085755411677', 'andikareva@gmail.com', '1234', 'user', 1, ''),
(4, 'Elok Utami P', 'Jl. Senggani No. 9 Malangs', '0857067764592', 'elok.utami@gmail.com', 'zxcv', 'user', 1, 'ELOK.jpg'),
(5, 'Diana Adin', 'Jl. Semanggi Barat No. 26 Malang', '082313365255', 'diana.adin@outlook.com', 'qwerty', 'user', 1, ''),
(6, 'Resifa Yuni', 'Malang', '091237817', 'resifa@gmail.com', 'lkjh', 'user', 1, ''),
(8, 'Wahyu Setiawan', 'Jl. Mawar 23, Sutojayan, Blitar', '0819231876', 'wahyu.setiawan@outlook.com', 'fghj', 'user', 1, ''),
(9, 'Ilham Sufie', 'Jl. Semeru No. 12', '08312712367', 'ilhm@gmail.com', 'erty', 'user', 0, ''),
(10, 'Mirza Ahmad', 'Jl. Pisang Kipas 26, Malang', '083427482', 'mirza.ahmad@gmail.com', '0987', 'user', 1, 'MIRZA.jpg'),
(11, 'admin', 'malang', '1234555', 'dakozdak@gmail.com', '1234', 'user', 1, 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_pemesanan_idxfk` (`id_pemesanan`),
  ADD KEY `id_menu_idxfk` (`id_menu`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `id_resto_idxfk` (`id_resto`),
  ADD KEY `id_kategori_idxfk` (`id_kategori`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_user_idxfk` (`id_user`);

--
-- Indexes for table `resto`
--
ALTER TABLE `resto`
  ADD PRIMARY KEY (`id_resto`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `id_detail` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1013;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=925;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `resto`
--
ALTER TABLE `resto`
  MODIFY `id_resto` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD CONSTRAINT `id_menu_idxfk` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `id_pemesanan_idxfk` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `id_kategori_idxfk` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `id_resto_idxfk` FOREIGN KEY (`id_resto`) REFERENCES `resto` (`id_resto`);

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `id_user_idxfk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
