CREATE TABLE `people` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `age` varchar(2) NOT NULL,
  `hometown` varchar(20) NOT NULL,
  `job` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `people` (`id`, `firstname`, `lastname`, `age`, `hometown`, `job`) VALUES
(1, 'Peter', 'Griffin', '41', 'Quahog', 'Brewery'),
(2, 'Lois', 'Griffin', '40', 'Newport', 'Piano Teacher'),
(3, 'Joseph', 'Swanson', '39', 'Quahog', 'Police Officer'),
(4, 'Glenn', 'Quagmire', '41', 'Quahog', 'Pilot');