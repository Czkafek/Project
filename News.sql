-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 17, 2024 at 11:52 AM
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
-- Database: `ByteHouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `News`
--

CREATE TABLE `News` (
  `Title` varchar(50) NOT NULL,
  `Content` text NOT NULL,
  `Short` text NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `News`
--

INSERT INTO `News` (`Title`, `Content`, `Short`, `Image`, `DateTime`) VALUES
('Testing a new Site', 'It\'s a test. That is a General Content with text. \r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo, purus eget rutrum tristique, mauris lorem eleifend odio, eget vulputate magna eros id dolor. Duis enim nulla, commodo tempus dolor porta, egestas vulputate libero. Proin ultricies porttitor lorem sed tempor. Aliquam at nulla vitae eros tincidunt interdum at at felis. Morbi euismod cursus arcu in vestibulum. Curabitur ullamcorper eros ultrices posuere pulvinar. Phasellus finibus ultricies orci, eu molestie ante bibendum non. Suspendisse lectus leo, aliquet ut aliquet ac, fringilla et odio. Quisque nibh felis, mattis sit amet sapien ac, volutpat dapibus ligula. In dignissim tortor finibus dui ullamcorper, cursus imperdiet erat rhoncus.\r\n\r\nSuspendisse hendrerit neque sed ultricies dapibus. Morbi dictum sapien eget vestibulum malesuada. Nullam tempus, lacus id viverra tempus, sapien nulla mattis orci, at consequat felis quam nec mauris. Nunc cursus varius ipsum sed ullamcorper. Donec elit libero, pretium ut enim ut, ornare semper justo. Proin purus est, ultricies eget mauris quis, convallis sollicitudin eros. Cras rhoncus sem non ex egestas, sit amet venenatis arcu congue.\r\n\r\nInteger consectetur consequat pellentesque. Cras faucibus eleifend tortor, ac pretium arcu tempus at. Maecenas lectus ligula, efficitur at elementum non, malesuada vel sem. Vivamus hendrerit lectus varius felis elementum euismod. Nulla aliquam velit sapien, at tincidunt eros vehicula quis. Pellentesque tincidunt nibh at quam rhoncus elementum non ac turpis. Morbi pulvinar semper dui, sit amet congue odio interdum accumsan. Ut et neque quis massa malesuada aliquet commodo sit amet sem. Maecenas volutpat condimentum felis at mattis. Phasellus tempus, eros venenatis tempus suscipit, augue tellus pharetra nisl, nec laoreet justo lacus nec ligula. Maecenas ornare maximus sem vitae semper. Sed ultricies dolor eu augue interdum venenatis. In hac habitasse platea dictumst. Mauris at ultricies lectus. Maecenas eget sapien nec elit ultricies tempor.\r\n\r\nNulla egestas risus eget tincidunt tincidunt. Fusce est urna, sodales sed interdum eu, volutpat ut ligula. Etiam lacinia felis quis egestas varius. Curabitur ultricies ipsum eu eros pulvinar, a hendrerit velit tincidunt. Fusce finibus risus quam, in pretium magna lacinia a. Aenean quis vehicula magna. Praesent orci ex, vehicula et eros vel, viverra iaculis orci. Duis dignissim, lorem eget commodo varius, diam eros bibendum turpis, ac dignissim elit magna eget elit. Pellentesque quis iaculis tellus, et accumsan neque. Pellentesque posuere tortor non dui volutpat scelerisque. Cras non magna lobortis, dignissim risus id, ultricies sem. Donec eget purus diam. Praesent vel lorem a erat pretium porta sit amet vel augue. Suspendisse pellentesque neque mi, in mollis nisl vehicula quis. Nulla accumsan feugiat augue, vel consequat neque bibendum et. Pellentesque viverra ex sit amet pellentesque tincidunt.\r\n\r\nVestibulum vehicula ante ac nibh volutpat lacinia. Curabitur laoreet maximus orci, sit amet fermentum odio consequat eget. Etiam ut nibh dictum, faucibus tellus eget, malesuada quam. Nunc nisi tellus, volutpat eu finibus et, iaculis a leo. Quisque nibh nulla, dapibus a ex in, rhoncus malesuada ante. Aenean consequat, sapien et iaculis mollis, nisi felis efficitur eros, eu malesuada ex odio eget ipsum. Nulla tincidunt erat ut purus tincidunt, ac imperdiet diam eleifend. Donec congue fermentum leo, quis dignissim lectus rutrum ac. Aliquam erat volutpat.', 'That is a New Back-end test. Please follow us on github.', 'Images/coding-man.jpg', '2024-02-04 13:42:32'),
('Testing a new Site2', 'Seconf DwagawgadwadgahwhdahdawahdhhbdgvbhnjfdcvbnhjytfvbnqwertyUwUPozdrawiam Czkafka\r\nElo.', 'To jest drugi test', 'Images/Tlo2.png', '2024-02-04 13:44:21'),
('New Bootstrap', 'There is a New Bootstrap!\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec nisi faucibus, egestas felis vel, dapibus metus. Phasellus placerat facilisis volutpat. Proin elementum arcu eros, at convallis ipsum rhoncus quis. Fusce aliquam quam in turpis tincidunt malesuada. Nunc vitae dapibus massa. Nam auctor diam sed tellus lobortis porta. Nam eget augue at lacus pulvinar semper non vel lorem. Vestibulum ut tempus nibh. Donec ipsum eros, efficitur ac orci sit amet, sagittis luctus augue.\r\n\r\nPellentesque blandit, sapien vel tempus pretium, arcu nibh hendrerit nisl, dictum feugiat nisi sem ac ex. Quisque laoreet tellus justo, et egestas diam tempus non. Vivamus vel arcu viverra purus tincidunt condimentum eu eget sapien. Maecenas at dui tempus, ultrices purus vel, sollicitudin sem. Cras diam urna, pulvinar sit amet laoreet pretium, efficitur ut mi. Aliquam sit amet malesuada dui. Integer semper massa a nibh mattis, in condimentum sapien eleifend. Duis posuere libero iaculis nunc maximus, et fringilla arcu laoreet.', 'There is a new version of Bootstrap!', 'Images/Rectangle 17.png', '2024-02-04 14:23:12'),
('OIJ', 'Wyniki pierwszego stopnia', 'OIJ', 'Images/coding-man.jpg', '2024-02-04 15:51:47'),
('Któryś tam Test', 'Jest to główny content.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nunc leo, pharetra ac metus sed, semper faucibus justo. Ut mattis tellus id lacinia ornare. Nunc velit enim, rutrum nec justo at, sollicitudin tristique justo. Vestibulum volutpat lacus a placerat suscipit. Cras in nunc leo. Nam imperdiet leo imperdiet lectus eleifend rutrum. Aenean id nulla id risus hendrerit congue at id nulla. Etiam sed orci arcu. Duis ac tincidunt ligula. Sed feugiat commodo metus eu tempus.\r\n\r\nQuisque non lorem ac dolor interdum volutpat eget in urna. Maecenas mollis nisl enim. Nulla et lectus convallis, pretium tellus vitae, cursus purus. Aliquam sagittis nulla sit amet leo gravida, eget porta mauris facilisis. Nullam sit amet felis ac ligula bibendum eleifend. Nunc sit amet leo quis ex pretium finibus. Suspendisse porta ipsum ac massa efficitur, eu posuere nisi pellentesque. Nunc eget felis eu nulla volutpat pretium nec efficitur arcu. Sed elementum gravida rhoncus. Integer sed maximus metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer eleifend lobortis tristique. Nam at eros tellus. Vivamus in ex vel ex efficitur laoreet.\r\n\r\nNullam tincidunt bibendum sagittis. Nulla eu fermentum nisl. Praesent ut mattis dui. Sed accumsan vestibulum nulla, sed ornare dolor lacinia varius. Suspendisse sollicitudin, diam eu congue feugiat, est quam venenatis enim, ut accumsan felis felis a mi. Sed viverra tincidunt nibh eu interdum. Etiam libero ex, volutpat sit amet risus ultricies, consequat dignissim neque. Ut lacinia arcu ut augue lobortis mattis. Nullam tempor, ipsum non pulvinar facilisis, velit magna vehicula mauris, sed iaculis sapien arcu sit amet urna. Donec imperdiet, sapien sed faucibus dictum, quam diam rhoncus tortor, sed tristique mauris dolor pulvinar orci. Maecenas feugiat scelerisque pellentesque.\r\n\r\nInterdum et malesuada fames ac ante ipsum primis in faucibus. Quisque efficitur felis et eros ullamcorper, ac dapibus ipsum rhoncus. Aenean aliquam arcu at metus rhoncus, quis vehicula leo condimentum. Nulla a condimentum magna. Sed pretium tincidunt facilisis. Morbi sed mi lobortis, porta sapien a, elementum elit. Suspendisse semper eros at velit volutpat, finibus ultrices libero pulvinar. In porttitor, enim vel ullamcorper facilisis, diam velit tempor lectus, eu vulputate dui quam id turpis. Nullam et sem dignissim felis porta laoreet ac nec leo. Cras accumsan fermentum quam, ac facilisis urna imperdiet id. Maecenas turpis dolor, feugiat in risus ut, pretium pretium augue. Donec ullamcorper at odio commodo ultrices. In luctus mattis nibh, vitae tempus felis vulputate vel. Duis laoreet est arcu, et iaculis urna varius ac. Nunc ac sodales lectus, in suscipit neque.\r\n\r\nIn ut diam iaculis, molestie metus vitae, gravida urna. Pellentesque id metus pretium, vulputate lorem eget, varius sem. Etiam rutrum ante pretium libero feugiat dictum auctor ut neque. In convallis a dui eu faucibus. Fusce non odio at metus ultrices maximus. Proin cursus tortor erat, vel euismod urna dignissim eget. Vestibulum at enim vitae tortor consectetur finibus in id nibh. Donec ullamcorper elit non purus iaculis, non aliquet est condimentum.\r\n\r\n', 'Witaj jest to chyba 5 test', 'Images/coding-man.jpg', '2024-02-05 14:10:27'),
('GPS', 'Wykryto w Polsce nowe zagłócenia GPS.\r\n<a href=\"https://www.benchmark.pl/1/aktualnosci.html\">Więcej na stronie</a>', 'Nowe Zakłócenia', 'Images/Tlo2.png', '2024-02-05 14:14:29'),
('|| Tura OIJ', 'Bla Bla Bla', '2 Tura OIJ !!!', 'Images/coding-man.jpg', '2024-02-05 15:37:27'),
('Test nr.8 (chyba)', 'UwU', 'UwU', 'Images/coding-man.jpg', '2024-02-05 15:40:18'),
('Test 9', 'UwU2', 'UwU2', 'Images/tlo2.png', '2024-02-05 15:40:53'),
('Rzadki Procesor', 'Nowe Procki!', 'Nowe Procki!', 'Images/Rectangle 17.png', '2024-02-05 15:42:14'),
('Test Kolejny!', 'Witajcie To jest Kolejny Test!', 'Tescik', 'Images/coding-man.jpg', '2024-02-17 10:50:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `News`
--
ALTER TABLE `News`
  ADD PRIMARY KEY (`DateTime`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
