CREATE TABLE `product` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `productname` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `product` (`id`, `productname`, `name`, `quantity`) VALUES
(1, 'ak47', 'Kalashnikov AK-47 Assault Rifle', '4000'),
(2, 'ar15', 'AR15 series Self-loading rifle', '1500'),
(3, 'ruger10/22', 'Ruger 10/22 Autoloading Rifle', '500'),
(4, 'mosin', 'Mosin–Nagant Rifle', '3700'),
(5, 'uzi', 'IMI Uzi Submachine gun', '200'),
(6, 'mossberg500', 'Mossberg 500 Pump-action shotgun', '100'),
(7, 'enfield', 'Lee–Enfield Bolt-action rifle', '160'),
(8, 'sks', 'Simonov SKS Self-loading rifle', '50'),
(9, 'remington870', 'Remington 870	Pump-action shotgun', '100'),
(10, 'fal', 'FN FAL Battle rifle', '50'),
(11, 'hkg3', 'Heckler & Koch G3	Battle rifle ', '80'),
(12, 'sten', 'STEN Submachine gun', '35'),
(13, 'rugerrev', 'Ruger Single Six/Blackhawk/Vaquero Revolver', '40'),
(14, 'beretta92', 'Beretta 92 Self-loading pistol', '350'),
(15, 'colt1911', 'Colt M1911 Self-loading pistol', '300'),
(16, 'm14', 'M14	Battle rifle', '150'),
(17, 'ithaca37', 'Ithaca 37 Pump-action shotgun', '200'),
(18, 'glock17', 'Glock 17 Self-loading pistol', '600'),
(19, 'pps42/43', 'Sudaev PPS-42/43 Submachine gun', '20'),
(20, 'm77', 'Ruger M77 Bolt-action rifle', '20'),
(21, 'm1carbine', 'M1 Carbine', '65');