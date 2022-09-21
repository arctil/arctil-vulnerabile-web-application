--
-- Database: `avwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(5) NOT NULL,
  `news_title` varchar(200) NOT NULL,
  `news_body` text NOT NULL,
  `author` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_body`, `author`) VALUES
(1, 'Hackers break into the pentagon', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam luctus quis turpis vel commodo. Ut ac pulvinar mi, non convallis sem. Nam sed lacinia felis. Sed felis sem, convallis tristique efficitur sit amet, blandit non diam. Phasellus mollis hendrerit tortor id mollis. Ut non libero vitae sem tempor blandit. Phasellus lacus eros, vehicula sit amet quam non, euismod pharetra lorem. Ut nec tortor rutrum, condimentum lorem sed, semper orci. Cras maximus nisi aliquam, mattis elit nec, tempus nulla. Nunc eu velit placerat, tristique odio non, blandit massa. Cras rhoncus lectus blandit tempor commodo. Suspendisse vitae faucibus ex. Ut ut accumsan erat. Maecenas gravida eu sem eget porttitor. Cras at luctus leo, eu volutpat nisi.\r\n\r\nDonec quis tortor maximus, ullamcorper mi vel, imperdiet ex. Cras ac accumsan ex. Nullam mattis in mi in convallis. Vestibulum ut iaculis ligula. Proin id sollicitudin enim. Maecenas condimentum ornare ligula, id auctor tellus ultricies vitae. Nulla vehicula, turpis sed convallis fermentum, dolor ipsum tempus metus, in accumsan nisl orci dignissim velit. Proin libero magna, ultrices vel condimentum nec, rhoncus ut purus.\r\n\r\nAenean tempus vestibulum metus a fringilla. Nulla fermentum ac nunc facilisis sagittis. Suspendisse tristique dictum nulla vitae interdum. Aliquam sed lacus magna. Vestibulum ultricies elit non justo pulvinar, eget facilisis risus condimentum. Pellentesque pretium ligula quis orci vulputate congue. Mauris id mi at lorem sagittis porta. Nunc eu urna eu dui volutpat euismod.\r\n\r\nVestibulum sagittis mauris sed ipsum sodales tempus. Nullam malesuada, ipsum quis sagittis pellentesque, lorem urna ultricies sem, sit amet malesuada massa felis eu turpis. Mauris eget bibendum quam. Integer sit amet nisl elit. Ut eu ipsum magna. Pellentesque quis ornare neque. Nam auctor, eros ac porttitor ornare, tortor purus laoreet ligula, quis laoreet ipsum lorem non purus. Phasellus at risus tellus. Donec porta mauris nisl, in semper nulla dignissim id. Nulla tristique metus at malesuada interdum. Curabitur a viverra enim. Duis metus magna, commodo finibus finibus vitae, malesuada non ante. ', 'Lionel Salazar'),
(2, 'Australia makes glow in the dark dingos', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam luctus quis turpis vel commodo. Ut ac pulvinar mi, non convallis sem. Nam sed lacinia felis. Sed felis sem, convallis tristique efficitur sit amet, blandit non diam. Phasellus mollis hendrerit tortor id mollis. Ut non libero vitae sem tempor blandit. Phasellus lacus eros, vehicula sit amet quam non, euismod pharetra lorem. Ut nec tortor rutrum, condimentum lorem sed, semper orci. Cras maximus nisi aliquam, mattis elit nec, tempus nulla. Nunc eu velit placerat, tristique odio non, blandit massa. Cras rhoncus lectus blandit tempor commodo. Suspendisse vitae faucibus ex. Ut ut accumsan erat. Maecenas gravida eu sem eget porttitor. Cras at luctus leo, eu volutpat nisi.\r\n\r\nDonec quis tortor maximus, ullamcorper mi vel, imperdiet ex. Cras ac accumsan ex. Nullam mattis in mi in convallis. Vestibulum ut iaculis ligula. Proin id sollicitudin enim. Maecenas condimentum ornare ligula, id auctor tellus ultricies vitae. Nulla vehicula, turpis sed convallis fermentum, dolor ipsum tempus metus, in accumsan nisl orci dignissim velit. Proin libero magna, ultrices vel condimentum nec, rhoncus ut purus.\r\n\r\nAenean tempus vestibulum metus a fringilla. Nulla fermentum ac nunc facilisis sagittis. Suspendisse tristique dictum nulla vitae interdum. Aliquam sed lacus magna. Vestibulum ultricies elit non justo pulvinar, eget facilisis risus condimentum. Pellentesque pretium ligula quis orci vulputate congue. Mauris id mi at lorem sagittis porta. Nunc eu urna eu dui volutpat euismod.\r\n\r\nVestibulum sagittis mauris sed ipsum sodales tempus. Nullam malesuada, ipsum quis sagittis pellentesque, lorem urna ultricies sem, sit amet malesuada massa felis eu turpis. Mauris eget bibendum quam. Integer sit amet nisl elit. Ut eu ipsum magna. Pellentesque quis ornare neque. Nam auctor, eros ac porttitor ornare, tortor purus laoreet ligula, quis laoreet ipsum lorem non purus. Phasellus at risus tellus. Donec porta mauris nisl, in semper nulla dignissim id. Nulla tristique metus at malesuada interdum. Curabitur a viverra enim. Duis metus magna, commodo finibus finibus vitae, malesuada non ante. ', 'Lionel Salazar'),
(3, 'Wolves develop hunger for green bananas', 'Phasellus sed nisi vel mauris placerat vestibulum eu non magna. Nulla sit amet efficitur magna. Donec eget urna et turpis euismod ornare a id sapien. Vivamus fringilla massa id est aliquet commodo elementum eu orci. Integer id est risus. Praesent malesuada ut ligula id tempus. Fusce eu eros consectetur, semper sapien sed, efficitur nulla. Proin cursus, neque sed condimentum malesuada, velit ex ullamcorper massa, a consequat est lorem condimentum eros. Nunc bibendum ligula mauris, at fringilla sapien finibus ut. Sed pulvinar libero at eros iaculis porta. ', 'Lionel Salazar'),
(4, 'Bart Simpson wins election by landslide', ' Ut felis turpis, eleifend non tortor sit amet, pellentesque molestie sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque vel neque ac neque ultricies pretium. Cras venenatis ullamcorper ligula, id suscipit ligula. Nulla dignissim tempor augue, ac pretium libero blandit eu. Phasellus sed egestas elit, lobortis dictum ligula. Vestibulum hendrerit, nunc nec tincidunt aliquam, metus nunc convallis nisl, sed scelerisque orci erat vel sapien. Donec massa diam, pharetra at ullamcorper non, porttitor varius nibh. Nunc non hendrerit odio. Mauris eros augue, aliquam et dignissim vitae, vestibulum nec ligula.\r\n\r\nFusce vel massa erat. Aenean lobortis porta risus, eu elementum diam molestie at. Quisque vitae ex in nisl eleifend viverra ac non enim. Nulla nulla eros, ultricies sodales risus nec, maximus placerat lectus. Duis est odio, consectetur non nulla sed, pellentesque cursus elit. Mauris non euismod nibh. Vivamus a suscipit lacus. ', 'Lionel Salazar'),
(5, 'Trump opens Kiwi sanctuary ', 'Nam convallis iaculis luctus. Vestibulum eget blandit nulla. Phasellus posuere quis nulla in porttitor. Ut nec egestas est, id blandit quam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur eleifend mauris ac quam lacinia, a lobortis ligula sodales. Integer commodo viverra tortor, et placerat dolor dictum eu. Proin porta, libero in lobortis vulputate, lacus felis ultricies elit, at aliquam turpis felis gravida augue.\r\n\r\nUt felis turpis, eleifend non tortor sit amet, pellentesque molestie sapien.', 'Lionel Salazar');

-- --------------------------------------------------------

--
-- Table structure for table `news_likes`
--

CREATE TABLE `news_likes` (
  `like_id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_likes`
--

INSERT INTO `news_likes` (`like_id`, `news_id`, `user_id`) VALUES
(1, 2, 5),
(2, 2, 5),
(3, 5, 2),
(4, 5, 2),
(5, 5, 2),
(6, 5, 1),
(7, 5, 1),
(8, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`, `name`, `profile`) VALUES
(1, 'admin', 'MySEcuRePa$$W0Rd!!!', 'Account Master', 'Lionel Salazar', '<p>Hello, all! I am Lionel, a professional, world class and super security consious software developer. I hope you\'re all enjoying my new website. Feel free to signup although please be careful.</p><p>As you can see I have created a single location on the web where you can find all of the best news stories, I hope you enjoy them all as much as I did.</p>\r\n<script>alert(document.cookie);</script>'),
(2, 'dogman', 'password1234', 'user', 'Martin Jeffers', ''),
(3, 'Cobrakai', 'logM3In', 'user', 'Tony Supperman', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `news_likes`
--
ALTER TABLE `news_likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news_likes`
--
ALTER TABLE `news_likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
