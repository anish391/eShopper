--
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `category` varchar(60) NOT NULL,
  `img` varchar(60) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `img`, `price`) VALUES
(1, 'Maggi Noodles', 'others', 'images/home/maggi.jpg', '12'),
(2, 'Nutella Hazelnut Spread', 'others', 'images/home/nutella.jpg', '270'),
(3, 'Lays Cream and Onion', 'others', 'images/home/lays-green.jpg', '10'),
(4, 'Maggi Tomato Ketchup', 'others', 'images/home/ketchup.jpg', '145'),
(5, 'Amul Butter', 'dairy', 'images/home/amul-butter.jpg', '32'),
(6, 'Bournville Rich Cocoa', 'others', 'images/home/bournville.jpg', '80'),
(7, 'Nescafe Classic Coffee', 'beverages', 'images/home/coffee.jpg', '120'),
(8, 'Onions - 1KG', 'fv', 'images/home/onion.jpg', '30'),
(9, 'Britannia Bread Packet', 'de', 'images/home/britannia-bread.jpg', '30'),
(10, 'Aashirvaad Wheat Atta 5 KG', 'grains', 'images/home/wheat.jpg', '190'),
(11, 'Saffola Active Oil', 'de', 'images/home/saffola-oil.jpg', '119'),
(12, 'Everest Pav Bhaji Masala', 'spices', 'images/home/pav-bhaji-masala.jpg', '190'),
(13, 'Coca Cola Zero', 'beverages', 'images/home/zero.jpg', '35'),
(14, 'Red Label Tea', 'beverages', 'images/home/tea.jpg', '115'),
(15, 'Sprite 600ml', 'beverages', 'images/home/sprite.jpg', '40'),
(16, 'Mother Dairy Milk', 'dairy', 'images/home/milk.jpg', '30'),
(17, 'Nestle A+ Dahi', 'dairy', 'images/home/curd.jpg', '25'),
(18, 'Gowardhan Ghee 1 Ltr', 'dairy', 'images/home/gowardhan.jpg', '450'),
(19, 'Potatoes 1KG', 'fv', 'images/home/potatoes.jpg', '30'),
(20, 'Apples 1KG', 'fv', 'images/home/apple.jpg', '135'),
(21, 'Bananas 1 Dozen', 'fv', 'images/home/banana.jpg', '60'),
(22, 'Eggs 1 Dozen', 'de', 'images/home/eggs.jpg', '60'),
(23, 'Tata Salt', 'de', 'images/home/salt.jpg', '25'),
(24, 'Kohinoor Basmati Rice', 'grains', 'images/home/rice1.jpg', '99'),
(25, 'Aashirvaad Multigrain Atta 5KG', 'grains', 'images/home/multigrain.jpg', '225'),
(26, 'Moraka Organic Rajma', 'grains', 'images/home/rajma.jpg', '55'),
(27, 'MTR Red Chilli Powder', 'spices', 'images/home/chilli.jpg', '65'),
(28, 'Aashirvaad Turmeric Powder', 'spices', 'images/home/turmeric.jpg', '150'),
(29, 'MDH Chaat Masala', 'spices', 'images/home/chat.jpg', '60'),
(30, 'Broccoli - 250gm', 'fv', 'images/home/broccoli.jpg', '72'),
(31, 'Dragon Fruit - 500gm', 'fv', 'images/home/dragon.jpg', '300'),
(32, 'Orange - 1 Dozen', 'fv', 'images/home/orange.jpg', '90'),
(33, 'Carrot - 1 KG', 'fv', 'images/home/carrot.jpg', '30'),
(34, 'Milky Mist Paneer - 200gm', 'dairy', 'images/home/paneer.jpg', '85'),
(35, 'Pear - 1 KG', 'fv', 'images/home/pear.jpg', '214'),
(36, 'Amul Masti Buttermilk', 'dairy', 'images/home/masti.jpg', '10'),
(37, 'Amul Cheese Slices - 200gm', 'dairy', 'images/home/cheese.jpg', '115'),
(38, 'The Right Moo - Cold Coffee', 'dairy', 'images/home/cc.jpg', '90'),
(39, 'Amul Fresh Cream - 200ml', 'dairy', 'images/home/cream.jpg', '45'),
(40, 'India Gate Basmati Rice - 5KG', 'grains', 'images/home/basmati.jpg', '375'),
(41, 'Tata Sampann Toor Dal - 1KG', 'grains', 'images/home/toor.jpg', '160'),
(42, 'Nutrela Soya Chunks - 200gm', 'grains', 'images/home/nutrela.jpg', '40'),
(43, 'Tata Sampann Urad Dal - 1KG', 'grains', 'images/home/urad.jpg', '240'),
(44, 'Safe Harvest Kabuli Chana - 500gm', 'grains', 'images/home/chana.jpg', '83'),
(45, 'Bisleri Mineral Water - 5 Ltr ', 'beverages', 'images/home/rockingbottle.jpg', '65'),
(46, 'Kelloggs Corn Flakes - 875gm', 'de', 'images/home/cornf.jpg', '285'),
(47, 'Kelloggs Muesli Nuts Delight - 500gm', 'de', 'images/home/muesli.jpg', '275'),
(48, 'Quaker Oats - 1KG', 'de', 'images/home/oats.jpg', '155'),
(49, 'Kelloggs Chocos - 1.2KG', 'de', 'images/home/chocos.jpg', '430'),
(50, 'Kelloggs Special K - 900gm', 'de', 'images/home/specialk.jpg', '370'),
(51, 'Bournvita Chocolate Drink - 500gm', 'beverages', 'images/home/bournvita.jpg', '200'),
(52, 'Protinex Elaichi - 250gms', 'beverages', 'images/home/protinex.jpg', '300'),
(53, 'Pediasure Chocolate Drink - 250gms', 'beverages', 'images/home/pediasure.jpg', '500'),
(54, 'Tropicana 100% Juice Apple- 1000ml', 'beverages', 'images/home/tropicana.jpg', '90'),
(55, 'Orkay Garam Masala - 50gm', 'spices', 'images/home/orkay.jpg', '40'),
(56, 'Tech Organea Oregano - 35gm', 'spices', 'images/home/techore.jpg', '75'),
(57, 'Snapin Spice Chilli Flakes - 38gm', 'spices', 'images/home/snapin.jpg', '50'),
(58, 'Kashmir Saffron - 0.5gm', 'spices', 'images/home/saffron.jpg', '215'),
(59, 'Harvest Thyme - 25gm', 'spices', 'images/home/thyme.jpg', '52'),
(60, 'Britannia Bourbon', 'others', 'images/home/bourbon.jpg', '20'),
(61, 'Sil Baked Beans in Tomato Sauce', 'others', 'images/home/beans.jpg', '90'),
(62, 'Dairy Milk Marvellous Creations', 'others', 'images/home/marvellous.jpg', '80'),
(63, 'Nissin Cup Noodles Masala', 'others', 'images/home/cup.jpg', '40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(1, 'Anish Gadekar', 'argads@gmail.com', 'a853a72ed14995494bb1242f2d8f4655f7f96bb4c0db36d06eed0be6b3d4debd'),
(3, 'Parth Shah', 'optimus_p@outlook.com', '925e2b1a37e8212265f53faaeff8f154ddc9d1e20e0cc021ec206d0a65cc5e4e'),
(4, 'Rasika Phadnis', 'culrasika@hotmail.com', 'd860cd232fad2ad9895e9958d89df27ec6739553b4683f2271d200cb8c1521e5'),
(5, 'Anup Thakker', 'anup@gmail.com', '92d0a37b269af862bcd829e289a71c5ebee6e40f8b272deae376d3cd554667cf'),
(6, 'Mrudula Desai', 'mdesai@gmail.com', '0493a3243eeb71f48a7b1ab9a6b78d7fd826f9994ff46d24e07529e1581b19c7'),
(7, 'Shruti Bendale', 'smartshruti@yahoo.co.in', 'cfbff47427fb68609fc3d9b0c28b81a6b4d7621a5c81cf5170fb7da07b92c54f'),
(8, 'John Doe', 'johndoe@mail.com', 'c2713b62c903791bdefc5a6a99df04d4330de491bbc7a0ca6a5007337e4a6028');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
