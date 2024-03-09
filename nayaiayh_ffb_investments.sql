-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 21, 2023 at 03:37 AM
-- Server version: 10.5.19-MariaDB-cll-lve-log
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nayaiayh_ffb_investments`
--

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `slug` longtext DEFAULT NULL,
  `brand` text NOT NULL,
  `logo` longtext NOT NULL,
  `cover` longtext NOT NULL,
  `headimage` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `location` longtext DEFAULT NULL,
  `phonenumber` longtext DEFAULT NULL,
  `email` longtext DEFAULT NULL,
  `website` longtext DEFAULT NULL,
  `location_iframe` longtext DEFAULT NULL,
  `gallery` longtext DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`id`, `title`, `slug`, `brand`, `logo`, `cover`, `headimage`, `description`, `location`, `phonenumber`, `email`, `website`, `location_iframe`, `gallery`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SPEED GATE MOTORS L.L.C.', 'speed-gate-motors-llc', 'BRAND NEW CARS TRADING', '/images/business/1680537815-logo.png', '/images/business/1683374648-cover.jpg', '/images/business/1683374444-headimage.png', 'Speed Gate Motors is one of the leading dealerships in the UAE. In our showrooms in Dubai, Al Aweer Market you will find luxury, high-end vehicles and international brands for export, With a range spanning from pre-owned Rolls Royce’s to Toyota, we’re certain that we can find the perfect usedor new cars for you.', 'SHOWROOM NO. P2-14, AL AWEER AUTO MARKET, DUBAI, UAE', '+971 50-100-4519', 'info@sgcars.ae', 'speedgatemotors.com', 'Speed Gate Motors L.L.C , DUBAI, UAE', '[\"\\/images\\/business\\/1683374648-gallery0.jpg\",\"\\/images\\/business\\/1683374648-gallery1.jpg\",\"\\/images\\/business\\/1683374648-gallery2.jpg\",\"\\/images\\/business\\/1683374648-gallery3.jpg\",\"\\/images\\/business\\/1683374648-gallery4.jpg\",\"\\/images\\/business\\/1683531244-gallery0.jpg\"]', 1, '2023-04-04 06:03:34', '2023-07-18 21:34:18'),
(2, 'ALBEDAYA INTERNATIONAL CO.', 'albedaya-international-co', 'IMPORTING CARS', '/images/business/1680680444-logo.png', '/images/business/1680680444-cover.jpg', '/images/business/1683382390-headimage.png', 'Albedaya International Co. is a Libya-based car import company. They offer high-quality vehicles from around the world, with a focus on customer service and competitive pricing. Whether you\'re in the market for a luxury sedan or a practical SUV, Albedaya International Co. can help you find the perfect car.', 'SHOWROOM AL-HAWARI STREET - BENGHAZI - LIBYA', '+218 92-0230020', 'Albidaya.international.car@gmail.com', 'facebook.com/profile.php?id=100064824547184', 'شركة البداية العالمية لاستيراد سيارات، 24V8+3GW، الفويهات،, Benghazi, Libya', '[\"\\/images\\/business\\/1683375134-gallery0.jpg\",\"\\/images\\/business\\/1683375134-gallery1.jpg\",\"\\/images\\/business\\/1683375134-gallery2.jpg\",\"\\/images\\/business\\/1683375134-gallery3.jpg\",\"\\/images\\/business\\/1683375134-gallery4.jpg\"]', 1, '2023-04-05 21:40:43', '2023-07-17 11:57:31'),
(3, 'AL WATANIA AL MOTAHIDA', 'al-watania-al-motahida', 'BRAND NEW CARS TRADING', '/images/business/1680681897-logo.png', '/images/business/1680681897-cover.jpg', '/images/business/1683382399-headimage.png', 'Al Watania Al Motahida is a Jordan-based car trading company that specializes in brand-new vehicles. They offer a range of high-quality models from popular manufacturers, with a focus on excellent customer service. Whether you need a compact car for the city or a spacious SUV for family trips, Al Watania Al Motahida can help you find the perfect car.', 'SHOWROOM ZARQAA FREE ZONE - T491 - JORDAN', '+971 48-839-261', 'info@fbb.ae', 'facebook.com/profile.php?id=100078030160180', 'المنطقة الحرة / الزرقاء، 36VC+85V, Zarqa, Jordan', '[\"\\/images\\/business\\/1683376636-gallery0.jpg\",\"\\/images\\/business\\/1683376636-gallery1.jpg\",\"\\/images\\/business\\/1683376636-gallery2.jpg\",\"\\/images\\/business\\/1683376636-gallery3.jpg\"]', 1, '2023-04-05 22:04:56', '2023-05-20 13:20:05'),
(4, 'Med Gate For Importing Electronical and Household appliances', 'med-gate-for-importing-electronical-and-household-appliances', 'ELECTRICS AND HOME APPLIANCES', '/images/business/1684316385-logo.png', '/images/business/1683377774-cover.jpg', '/images/business/1684491360-headimage.jpg', 'Med Gate For Importing Electronical and Household appliances  is a Libya based company that offers high-quality home appliances and electronics. They provide excellent customer service and competitive pricing on a wide range of products, making it easy to find the perfect household item.', 'MAIN BRANCH : AL-HAWARI STREET - BENGHAZI - LIBYA', '+218 91-666-3333', 'info@med-gate.ly', 'med-gate.ly', 'شركة بوابة المتوسط لتجارة المواد الكهربائية, G7QJ+WR3, Unnamed Road, Brak, Libya', '[\"\\/images\\/business\\/1683377810-gallery0.jpg\",\"\\/images\\/business\\/1683377810-gallery1.jpg\",\"\\/images\\/business\\/1683377810-gallery2.jpg\",\"\\/images\\/business\\/1683377810-gallery3.jpg\",\"\\/images\\/business\\/1683377810-gallery4.jpg\",\"\\/images\\/business\\/1683547807-gallery0.jpg\"]', 1, '2023-04-05 22:08:39', '2023-05-19 23:23:21'),
(5, 'BPG FOOD STUFF TRADING', 'bpg-food-stuff-trading', 'FOOD STUFF TRADING', '/images/business/1680682294-logo.png', '/images/business/1680682294-cover.jpg', '', 'BPG FOOD STUFF TRADING is the sole agent for  International Food Companies ( European products ) .\r\n\r\nOur mission is to provide the best international products of the best quality in the world and ship them to all our clients in the Middle East and Africa , allowing our clients to save both time and money so that they could develop their commercial activities inside the country , which helps to gain more profit and success.', 'Office No : 907 , 51 TOWER, BUSINESS BAY, DUBAI - UAE', '(+971) 4 328 0919', 'Info@bpgf.ae', 'www.bpgf.ae', 'Office 907, Fifty One Tower Marasi Drive, Business Bay Dubai, UAE', '[]', 1, '2023-04-05 22:11:33', '2023-05-19 23:23:29'),
(6, 'FKF TRADING L.L.C', 'fkf-trading-llc', 'FOOD STUFF TRADING, IMPORT AND EXPORT.', '/images/business/1684570783-logo.png', '/images/business/1680682491-cover.jpg', '/images/business/1683379334-headimage.jpg', 'FKF trading L.L.C is the exclusive and sole agent for all products of ALZOHOUR International Food Company ( European products ) .\r\n\r\nOur mission is to provide the best international products of the best quality in the world and ship them to all our clients in the Middle East and Africa , allowing our clients to save both time and money so that they could develop their commercial activities inside the country , which helps to gain more profit and success.', 'Office No : 1404 , BURLINGTON TOWER, BUSINESS BAY, DUBAI - UAE', '+971 56-958-3259', 'f.elgahmi@fkf.ae', 'fkf.ae', 'The Burlington Tower, Marasi Dr - Business Bay - Dubai', '{\"1\":\"\\/images\\/business\\/1684570872-gallery0.jpg\"}', 1, '2023-04-05 22:14:50', '2023-05-20 15:21:11'),
(7, 'AL ZOHOUR GROUP', 'al-zohour-group', 'FOOD STUFF MANUFACTURING AND TRADING', '/images/business/1680685473-logo.png', '/images/business/1680685473-cover.jpg', '/images/business/1684489012-headimage.png', 'Al-Zohour International Food Company (European Products) Al-Zohour Company was established in 2019 and since then we have been working with all our energy to provide the best and highest products in the European markets for the Libyan market and the African market in general\r\nAnd our goal is always to raise the nutritional quality within the market for better health and a better life for all.', 'LIBYA - UAE', '+971 56-958-3259', 'info@alzohourgroup.com', 'alzohourgroup.com', 'BENGHAZI, LIBYA', '[\"\\/images\\/business\\/1683379574-gallery0.jpg\",\"\\/images\\/business\\/1683379574-gallery1.jpg\",\"\\/images\\/business\\/1683379574-gallery2.jpg\",\"\\/images\\/business\\/1683379574-gallery3.jpg\",\"\\/images\\/business\\/1683379574-gallery4.jpg\",\"\\/images\\/business\\/1684489163-gallery0.png\",\"\\/images\\/business\\/1684489163-gallery1.png\",\"\\/images\\/business\\/1684489163-gallery2.png\"]', 1, '2023-04-05 23:04:32', '2023-05-19 23:23:37'),
(8, 'AL AMEER GROUP', 'al-ameer-group', 'BRANDED CLOTHES STORES', '/images/business/1680686090-logo.png', '/images/business/1683381283-cover.jpg', '', 'Al Ameer Group is a Benghazi-based branded clothing store chain that offers a wide range of high-quality clothing items from popular brands. They provide a unique shopping experience and excellent customer service at competitive prices.', 'BENGHAZI - LIBYA', '+971 48-839-261', 'info@alamir.ly', 'alamir.ly', 'Benghazi, Libya', '[\"\\/images\\/business\\/1683381283-gallery0.jpg\",\"\\/images\\/business\\/1683381283-gallery1.jpg\",\"\\/images\\/business\\/1683381283-gallery2.jpg\",\"\\/images\\/business\\/1683381283-gallery3.jpg\"]', 1, '2023-04-05 23:14:49', '2023-05-19 23:23:57'),
(9, 'AL FOWZ HEALTHCARE GROUP', 'al-fowz-healthcare-group', 'MEDICAL EQUIPMENT, MEDICAL SERVICES AND PHARMACEUTICAL', '/images/business/1680686276-logo.png', '/images/business/1680686276-cover.jpg', '/images/business/1684489679-headimage.png', 'Alfowz Healthcare Holding is the most trusted supplier of quality medical supplies, equipment, and Medications. Our company has branches in in three geographical locations to ensure that over 7 million people are provided access to the best medicine and the latest medical technologies.\r\n\r\nOur vision is to be the first choice for Oncology products and medical equipment supplies and services in North Africa. We deliver on our vision by striving for excellence every day, partner with world leading suppliers, constantly seeking to improve our service offerings.', 'Tripoli – Libya', '+218919711000', 'info@alfowz.ly', 'alfowz.ly', 'Tripoli , Libya ,Hay Alandulus', '[\"\\/images\\/business\\/1683381619-gallery0.jpg\",\"\\/images\\/business\\/1683381619-gallery1.jpg\",\"\\/images\\/business\\/1684489540-gallery0.jpg\",\"\\/images\\/business\\/1684489540-gallery1.jpg\",\"\\/images\\/business\\/1684489540-gallery2.jpg\"]', 1, '2023-04-05 23:17:55', '2023-05-20 15:25:17'),
(10, 'Gold Cost Medical Requisites Trading LLC', 'gold-cost-medical-requisites-trading-llc', 'MEDICAL REQUESITIES SUPPLY', '/images/business/1680686398-logo.png', '/images/business/1680686398-cover.jpg', '/images/business/1684570053-headimage.png', 'Gold Cost Medical Requisites Trading LLC is the most trusted supplier of quality medical supplies, equipment and medications in UAE and international market.\r\n\r\nOur commitment to excellence and quality guarantee that the products we deliver to our clients and to health care facilities is high-quality , exceptionally substantial and competitively priced.', 'OFFICE 606, BAY VIEW TOWER , MARASI DRIVE BUSINESS BAY, DUBAI - UAE', '+971 4 878 6469', 'info@gold-cost.ae', 'gold-cost.ae', 'Bay View Tower, Business Bay - Dubai', '[]', 1, '2023-04-05 23:19:57', '2023-05-20 15:07:32'),
(11, 'FBB Petroleum', 'fbb-petroleum', 'Petroleum', '/images/business/1680957524-logo.png', '/images/business/1680957524-cover.jpg', '/images/business/1684571560-headimage.jpg', 'FBB Petroleum LLC is a reputable trading group headquartered in Dubai, United Arab Emirates, which offers specialized services and supplies to both public and private sectors in emerging markets. Since its inception in 2021, the company has experienced remarkable growth. We have representative offices in UAE, Libya, Egypt, Cyprus, Bahrain, and Germany, covering a vast region that includes the Middle East, Africa, and Asia.', '51 Business Bay Office 707, Dubai UAE', '+971 4 327 0451', 'Info@fbb-og.ae', 'fbb-og.ae', '51 Business Bay Office 707, Dubai UAE', '[\"\\/images\\/business\\/1683382096-gallery0.jpg\",\"\\/images\\/business\\/1683382096-gallery1.jpg\",\"\\/images\\/business\\/1683382096-gallery2.jpg\",\"\\/images\\/business\\/1683382096-gallery3.jpg\",\"\\/images\\/business\\/1683382096-gallery4.jpg\",\"\\/images\\/business\\/1683382096-gallery5.jpg\",\"\\/images\\/business\\/1683382096-gallery6.jpg\"]', 1, '2023-04-09 02:38:43', '2023-05-20 15:32:39'),
(12, 'Altair Company For Handling  And Aviation Services', 'altair-company-for-handling-and-aviation-services', 'Handling  And Aviation Services', '/images/business/1684571771-logo.png', '/images/business/1681202862-cover.jpg', '/images/business/1684491775-headimage.png', 'Al-Tayer Handling and Aviation Services company is a local Libyan company founded in 2019 working in the field of handling and ground operations, the company officially launched this year from Benina International Airport, and also provides its services at Al-Abrak International Airport and Ma\'atiqa Airport, as well as the company has a fleet of all-new modern equipment that will meet all the logistics needs of the carriers locally and internationally, manages the company high expertise and competencies in the administrative and technical field for decades and Young cadres looking to provide unique and unique services to carriers at all airports in Libya', 'Benghazi, Libya', '+218 61-2241000', 'info@altair.ly', 'altair.ly', 'Benghazi, Libya, Near The Health Institute', '[\"\\/images\\/business\\/1683619985-gallery0.jpg\",\"\\/images\\/business\\/1683619985-gallery1.jpg\",\"\\/images\\/business\\/1683620179-gallery0.jpg\",\"\\/images\\/business\\/1683620179-gallery1.jpg\",\"\\/images\\/business\\/1683620179-gallery2.jpg\",\"\\/images\\/business\\/1683620179-gallery3.jpg\",\"\\/images\\/business\\/1683620179-gallery4.jpg\",\"\\/images\\/business\\/1684491775-gallery0.png\",\"\\/images\\/business\\/1684491775-gallery1.png\",\"\\/images\\/business\\/1684491775-gallery2.jpg\"]', 1, '2023-04-11 22:47:41', '2023-05-20 15:37:45'),
(13, 'F B B SHIPPING & LOGISTICS SERVICES L.L.C', 'f-b-b-shipping-logistics-services-llc', 'SHIPPING & LOGISTICS SERVICES', '/images/business/1684929411-logo.png', '/images/business/1682429773-cover.jpg', '/images/business/1684491157-headimage.jpg', 'FBB Shipping & Logistics Services, a shipping business based in Dubai, we offer a wide range of services to our customers, from shipping and logistics to warehousing and distribution. We have the experience and know-how to get your products and materials where they need to go on time and safely. We understand that the needs of our customers are unique and that\'s why our team of experts customize our services to meet the individual requirements of each shipment. We provide integrated solutions for all types of cargo, including air, sea and road transportation, as well as customs clearance, warehousing and distribution. Our commitment to customer service is what sets us apart from our competitors, and we strive to exceed our customers\' expectations every time. With our competitive rates and knowledgeable staff, you can trust FBB Shipping & Logistics Services to get the job done right.', 'Dubai-UAE', '+971 48-839-261', 'Info@fbbshipping.com', 'www.fbbshipping.com', NULL, '[]', 1, '2023-04-26 03:19:15', '2023-05-24 18:56:50'),
(14, 'FBB REAL ESTATE BROKERAGE LLC', 'fbb-real-estate-brokerage-llc', 'REAL ESTATE', '/images/business/1682429566-logo.png', '/images/business/1682429566-cover.jpg', '/images/business/1683382369-headimage.png', 'F BB Real Estate Brokerage L.L.C is an industry leader in property management, leasing, and brokerage services throughout the state of Florida. Our wide array of professional services combined with our commitment to customer satisfaction make F BB a full-service leader in the real estate industry. We have served as trusted advisors to thousands of commercial tenants and investors since 2005, providing personalized attention and specialized services across the entire spectrum of residential, retail, office, industrial and commercial properties throughout the state of Florida. Our mission is to make sure that all customers are taken care of with quality service and professional support from our knowledgeable staff and skilled team members. With broad access to expert resources in transactions related to acquisitions, investments,, loan financing & placement and special assignments - F BB is dedicated to helping clients reach their goals quickly and efficiently!', 'DUBAI-UAE', '+971 48-839-261', 'info@fbb.ae', 'www.fbb.ae', NULL, '[]', 1, '2023-04-26 03:32:45', '2023-06-20 18:51:15'),
(16, 'Paradise Travel and Tourism', 'paradise-travel-and-tourism', 'Travel & Tourism', '/images/business/1682927550-logo.png', '/images/business/1682927550-cover.png', '/images/business/1684570387-headimage.png', 'Paradise Travel and Tourism is a travel agency headquartered in the city of Amman established to provide comprehensive services to groups and individuals from and to the country. We launched the company in May 2018 aspiring to deliver a host of innovative and value-added services to our customers; ranging from travel, hotels, car rental services, to chartered fights along with account management services. We attribute our success to our team which is comprised of qualifed professionals who carry a wealth of international experience and are committed to deliver high quality customer safety and care.\r\n*Paradise Travel and Tourism is a fully licensed\r\nagency under license number (01581). We are\r\nan active member of the Jordan Society of\r\nTourism and Travel Agents (JSTA).\r\nOur Services\r\nInternational airline reservations and ticketing\r\nWorldwide hotel reservation\r\nWorldwide car rental\r\nGround handling services\r\nAll year excursions and itineraries\r\nConferences and MICE\r\nCruises\r\nPrivate Jets\r\nTravel insurance\r\nMeet and assist services\r\nLimousine & VIP treatment specialists\r\nFree ticketing delivery', 'AMMAN-JORDAN', '0096265522888', 'info@paradisejo.com', 'www.paradisejo.com', 'شارع حسام الدين القيمري، عمّان، الأردن', '{\"3\":\"\\/images\\/business\\/1684570489-gallery0.jpg\",\"4\":\"\\/images\\/business\\/1684570489-gallery1.jpg\",\"5\":\"\\/images\\/business\\/1684570489-gallery2.jpg\"}', 1, '2023-05-01 21:52:29', '2023-05-20 15:14:48'),
(18, 'Electronic Matrix', 'electronic-matrix', 'Financial Services', '/images/business/1683009511-logo.png', '/images/business/1683009511-cover.png', '/images/business/1683019335-headimage.png', 'The Matrix Company\'s vision is to select its employees by attracting talent and working to develop their talents by providing the necessary courses with the latest technology, which makes them add real value in their field of work.', 'Benghazi-Libya', '+218 91 5655562', 'info@emfs.ly', 'emfs.ly', '32CW+2XW، Unnamed Road, بنغازي،، بنغازي، ليبيا', '[]', 1, '2023-05-02 20:38:30', '2023-05-19 23:24:54'),
(19, 'SPEED GATE CAR RENTAL LLC', 'speed-gate-car-rental-llc', 'Car Rental', '/images/business/1684246008-logo.png', '/images/business/1683531222-cover.jpg', '/images/business/1683528860-headimage.png', 'Speed Gate Rental is a leading brand name renowned for quality and excellence in the UAE’s Automotive Market. Being the dealer and Car rental for high-end most premium and prestige brands like Bentley, Bugatti, Rolls Royce, Lamborghini, Audi, Mercedes, BMW and Range Rover as well as top global auto brands like Toyota, Mitsubishi, Volkswagen, Nissan, Hyundai, KIA, and Suzuki, Speed Gate Motors is successfully playing a vital role in meeting the needs of transportation for every segment of the market.', 'Dubai, UAE', '800742277', 'info@speedgaterental.com', 'speedgaterental.com', 'Danube Bayz', '[\"\\/images\\/business\\/1683531222-gallery1.png\",\"\\/images\\/business\\/1683531222-gallery2.jpg\",\"\\/images\\/business\\/1683531222-gallery3.jpg\",\"\\/images\\/business\\/1683531222-gallery4.jpg\"]', 1, '2023-05-08 13:54:19', '2023-05-19 23:24:55'),
(20, 'MED-GATE TRADING L.L.C', 'med-gate-trading-llc', 'ELECTRICS AND HOME APPLIANCES', '/images/business/1684316426-logo.png', '/images/business/1683549056-cover.jpg', '/images/business/1684491425-headimage.jpg', 'Med-Gate Trading L.L.C is Hisense authorized dealer that offers high-quality home appliances and electronics. They provide excellent customer service and competitive pricing on a wide range of products, making it easy to find the perfect household item.', 'Dubai, UAE', '056 725 3255', 'info@med-gate.ae', 'med-gate.ae', '14th Steert - شارع بني ياس - near Baniyas Metro Station', '[\"\\/images\\/business\\/1683549120-gallery0.jpg\",\"\\/images\\/business\\/1683549120-gallery1.jpg\",\"\\/images\\/business\\/1683549120-gallery2.jpg\",\"\\/images\\/business\\/1683549120-gallery3.jpg\",\"\\/images\\/business\\/1683549120-gallery4.jpg\"]', 1, '2023-05-08 19:12:35', '2023-05-19 23:24:57'),
(21, 'ZAMZAM for Drugs & Medical Equipments', 'zamzam-for-drugs-medical-equipments', 'Medical equipment', '/images/business/1683621071-logo.png', '/images/business/1683621071-cover.jpg', '/images/business/1684570002-headimage.png', 'Zamzam Co. founded in 2005 as a leading medical equipment distributor in Libya, with a head office in Benghazi, branch in Tripoli and a Rep. Office in Dubai.\r\nWe launched our services to support the ministry of health & private sector hospitals in Libya with extending high tech products and medical devices of well-known professional manufacturers from Europe, USA and Asia. ZamZam Co. invests to generate new products that help medical professionals to provide quality patient care with maximum cost-efficiency.', 'Benghazi-LIBYA', '+218925306679', 'info@zamzam-medical.ly', 'zamzam-medical.ly', 'Benghazi, Mega Building ALHAWARI Street Benghazi.', '[]', 1, '2023-05-09 15:31:10', '2023-05-20 15:06:41'),
(22, 'SPEEDCO BIKES RENTAL LLC', 'speedco-bikes-rental-llc', 'BIKES RENTAL', '/images/business/1684135753-logo.png', '/images/business/1684135967-cover.jpg', '', NULL, 'DUBAI-UAE', '+971 48-839-261', 'info@fbb.ae', 'fbb.ae', '51 tower business bay office 406', '[]', 1, '2023-05-15 14:28:51', '2023-05-19 23:25:02'),
(23, 'F T C COMPUTER SYSTEMS CONSULTANCIES L.L.C', 'f-t-c-computer-systems-consultancies-llc', 'COMPUTER CONSULTANCIES', '/images/business/1686756992-logo.png', '/images/business/1684144037-cover.png', '', 'FTC Computer Systems Consultancies L.L.C is a Dubai-based business specialising in computer systems and software solutions. With years of experience, they provide tailored, cost-effective solutions to meet clients\' needs, ranging from IT infrastructure and support to software development and IT consultancy. Their team of experts are committed to delivering superior customer service.', 'Dubai-UAE', '+971 48-839-261', 'info@ftconsulting.ae', 'ftconsulting.ae', '51 tower, BUSINESS BAY, office 406 ,DUBAI - UAE', '[]', 1, '2023-05-15 16:47:16', '2023-07-11 12:12:37'),
(24, 'FBB MOTORS LLC', 'fbb-motors-llc', 'NEW CARS EXPORT', '/images/business/1684317364-logo.png', '/images/business/1684316857-cover.jpg', '/images/business/1684490208-headimage.png', 'FBB MOTORS LLC is a dynamic trading company specializing in exporting a wide range of leading automobile brands, including HongQi, Toyota, Nissan, Mitsubishi, Lexus, BMW, Mercedes Benz Cars, Trucks, and Vehicle Conversions. Our company acts as an agent for several companies', 'DUBAI-UAE', '+97148839261', 'info@fbb.ae', 'fbb.ae', 'Fifty One Tower - Business Bay', '[]', 1, '2023-05-16 21:04:41', '2023-05-20 15:50:21'),
(25, 'Dar Elkhibra Almutatawera', 'dar-Elkhibra-Almutatawera', 'Contracting-Real Estate', '/images/business/1684744274-logo.png', '/images/business/1684738659-cover.jpg', '/images/business/1684743955-headimage.jpg', 'Dar Elkhibra Company, a general contracting company that works in construction, engineering, and real estate investment, overlooked the community and devoted itself to serving our society by providing urban services it needs, as well as developing parts of our beloved country with its departments of - experience - provide luck and share, which was of great importance in choosing the company\'s name.', 'Benghazi-libya', '00218919406000', 'info@darelkhibra.ly', 'darelkhibra.ly', '33CV+3RQ، شارع المعهد الصحي , بنغازي،, بنغازي،، بنغازي، ليبيا', '{\"4\":\"\\/images\\/business\\/1684744987-gallery0.jpg\",\"5\":\"\\/images\\/business\\/1684744987-gallery1.jpg\",\"6\":\"\\/images\\/business\\/1684744987-gallery2.jpg\",\"7\":\"\\/images\\/business\\/1684744987-gallery3.jpg\"}', 1, '2023-05-22 13:57:38', '2023-05-22 15:43:06'),
(26, 'Alriada-Alalamia', 'alriada-alalamia', 'Building Materials', '/images/business/1684739408-logo.png', '/images/business/1684739408-cover.jpg', '', 'Alriada-Alalamia Company was legally established in 2010, but the experience of its founders exceeds thirty years.\r\nWe are considered as an official reseller for Libyan Iron & steel company, in addition, Alriada-Alalamia deals with banks that have Islamic system such as Al-Wahda and Al-Sahari Bank.\r\nOur Services\r\nThe company\'s activity is focused primarily on importing building materials in general, specifically reinforced iron, industrial iron, cement and wood', 'Libya - Benghazi', '+218614719979', 'info@alriada-alalamia.ly', 'alriada-alalamia.ly', '236R+4V بنغازي، ليبيا', '[]', 1, '2023-05-22 14:10:07', '2023-05-22 14:12:23'),
(27, 'FBB BAHRAIN FOR INVESTMENTS W.L.L', 'fbb-bahrain-for-investments-wll', 'INVESTMENTS', '/images/business/1686663685-logo.png', '/images/business/1686663685-cover.jpg', NULL, NULL, 'BAHRAIN-MANAMA', NULL, 'INFO@FBB.AE', 'WWW.FBB.AE', 'BUILDING 2648, ROAD 5720, BLOCK257, BAHRAIN', '[]', 1, '2023-06-13 20:41:24', '2023-06-13 20:41:24'),
(28, 'Fayez Advanced Group for Industries FBB', 'fayez-advanced-group-for-industries-fbb', 'INVESTMENTS', '/images/business/1686728375-logo.png', '/images/business/1686728711-cover.jpg', '', 'Fayez Advanced Group for Industries FBB is a leading industries company that specializes in delivering innovative solutions to meet the diverse needs of its global customer base. Since its inception, we have remained committed to achieving excellence in all aspects of our operations and services, which has helped us become a go-to provider of high-quality products and services across various industries. Our extensive industry expertise enables us to offer end-to-end solutions, right from product conceptualization through to design, manufacturing, and delivery. Our team comprises highly skilled professionals who bring together unparalleled domain expertise, technical prowess, and customer-centric approach to deliver exceptional value to customers worldwide. We pride ourselves on being at the forefront of technological advancements in the industry, continually innovating and improving our systems and processes to ensure we remain one step ahead of the curve in meeting evolving market demands.', 'Egypt-Cairo', '+201009767209', 'info@fbb.com.eg', 'fbb.com.eg', 'almiraj alawi City,zahraa al-maadi', '[\"\\/images\\/business\\/1686728375-gallery0.jpg\",\"\\/images\\/business\\/1686728375-gallery1.jpg\",\"\\/images\\/business\\/1686728375-gallery2.jpg\"]', 1, '2023-06-14 14:39:34', '2023-06-14 14:47:32'),
(29, 'Eratiana Trading LTD', 'eratiana-trading-ltd', 'INVESTMENTS', '/images/business/1686731064-logo.png', '/images/business/1686731064-cover.png', NULL, 'Eratiana Trading LTD is a trading company, based in Cyprus. We specialize in facilitating trade transactions across various industries by connecting buyers and sellers from all over the world. Our team of experienced professionals helps our clients navigate international trade regulations and logistics to ensure seamless transactions. With a reputation for integrity and transparency, we have built strong relationships with suppliers, importers, exporters, manufacturers, and distributors globally. At Eratiana Trading LTD, we pride ourselves on delivering exceptional service and consistently exceeding customer expectations. Trust us to be your reliable partner in all your trading needs.', 'NICOSIA-CYPRUS', NULL, 'info@fbb.ae', 'www.fbb.ae', 'Leoforos Archiepiskopou Makariou Tritou 2', '[]', 1, '2023-06-14 15:24:23', '2023-06-14 15:24:23'),
(30, 'GENERAL GATE SA', 'general-gate-sa', 'INVESTMENTS', '/images/business/1686732342-logo.png', '/images/business/1686732342-cover.jpg', NULL, NULL, 'BRUXELLES-BELGIUM', NULL, NULL, NULL, 'AVENUE DE TERVUEREN, BRUXELLS', '[]', 1, '2023-06-14 15:45:41', '2023-06-14 15:45:41'),
(31, 'Middle East International For Cars & Spare Parts Import', 'middle-east-international-for-cars-spare-parts-import', 'BRAND NEW CARS TRADING', '/images/business/1689063359-logo.gif', '/images/business/1687268566-cover.jpg', '', NULL, 'TRIPOLI-LIBYA', '+218947955555', 'info@mideastint.com', 'www.mideastint.com', NULL, '[\"\\/images\\/business\\/1689058336-gallery0.jpg\",\"\\/images\\/business\\/1689058336-gallery1.jpg\",\"\\/images\\/business\\/1689058336-gallery2.jpg\"]', 1, '2023-06-20 20:42:45', '2023-07-11 12:15:58'),
(32, 'Kenaz Management AND Operation', 'kenaz-management-and-operation', 'Retail Business', '/images/business/1689060076-logo.png', '/images/business/1689060076-cover.jpg', '', 'Kenaz Management and Operation has truly made a mark in the cafe industry, using innovation to achieve incredible results. Our goal is to provide every customer with an experience that is exhilarating at all times.   perfection is at the very heart of Kenaz\'s culture; As we progress onward, we remain committed to creating timeless experiences where passion meets perception within the realm of cafe and hospitality.', 'Benghazi - Libya', '+218 91 1011012', 'info@kenaz.ly', 'kenaz.ly', 'Alhwari – Benghazi - Libya', '[]', 1, '2023-07-11 11:21:15', '2023-07-17 10:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(95, '2014_10_12_000000_create_users_table', 1),
(96, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(97, '2019_08_19_000000_create_failed_jobs_table', 1),
(98, '2023_03_16_130510_create_websites_table', 1),
(99, '2023_03_16_130529_create_sliders_table', 1),
(100, '2023_03_16_130547_create_pages_table', 1),
(101, '2023_03_16_130637_create_businesses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `image` longtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `subtitle`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'FBB Holding, a Trusted Global Family of Businesses', 'We are a diversified global holding company that specialises in the trade and ownership of businesses across the Middle East, Belgium, and Germany, and are committed to the sustainable growth and success of our holdings.', '/images/slider/1683185463.png', 1, '2023-04-29 17:02:46', '2023-06-08 15:12:21'),
(5, 'Unmatched Innovative Solutions for Your Business Needs', 'We offer innovative solutions for your business needs, from consulting to Growth.', '/images/slider/1684739600.png', 1, '2023-04-29 17:54:58', '2023-05-22 14:13:19'),
(6, 'Complete Suite of Services to Navigate the Modern Business World.', 'We offer a complete suite of services to help navigate the complexities of the modern business world.', '/images/slider/1684739613.png', 1, '2023-04-29 17:58:49', '2023-05-22 14:13:32'),
(7, 'Decades of Unmatched Expertise and Experience', 'Our team has decades of experience in various industries, providing comprehensive solutions for your business objectives.', '/images/slider/1684739622.png', 1, '2023-05-04 14:32:10', '2023-05-22 14:13:41');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `position` text NOT NULL,
  `image` longtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `position`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Karam Amareen', 'General Manager  (G.M)', '/images/team/1686215116.jpg', 1, '2023-04-25 08:55:27', '2023-06-08 16:05:15'),
(2, 'Mohamed Saleh', 'Chief Executive Officer (CEO)', '/images/team/1686236831.jpg', 1, '2023-04-25 08:58:57', '2023-06-08 22:07:10'),
(3, 'Omer Saeed', 'Administration Manager', '/images/team/1686214612.jpg', 1, '2023-04-25 08:59:01', '2023-06-08 15:56:51'),
(4, 'Eyad Ali', 'R&D Manager', '/images/team/1686215829.jpg', 1, '2023-04-26 13:20:12', '2023-06-08 16:17:08'),
(5, 'Mohaned Saeed', 'Public Relation manager', '/images/team/1686219264.jpg', 1, '2023-04-26 13:22:21', '2023-06-08 17:14:23'),
(6, 'Vanessa Malonzo-Espadero', 'Executive Secretary', '/images/team/1686215405.jpg', 1, '2023-04-26 13:22:55', '2023-06-08 16:10:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', NULL, '$2y$10$JZo5FZcV7.XpcGr1AW4ObO52FhxnGpirS/yuIB8KhAGOOaI..MRsS', NULL, '2023-04-03 06:39:28', '2023-04-03 06:39:28'),
(2, 'OMER', 'MOHAMED', 'omar.saeed@fbb.ae', NULL, '$2y$10$Vi6xF8lN6.t2xpvHV2ZTm..mTXWjvz5N6TF29AlCLpvXuY2D826Yi', NULL, '2023-04-06 18:51:11', '2023-04-06 18:51:11'),
(3, 'OMER', 'MOHAMED', 'omer4ever@gmail.com', NULL, '$2y$10$glrpZjocQuI81wbdsTKAU.zYdk6/zz.sDI/5WlqL/YSnhwe2farte', NULL, '2023-04-24 14:42:54', '2023-04-24 14:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `websitename` text NOT NULL,
  `websiteemail` text NOT NULL,
  `websitecontact` text NOT NULL,
  `websitetiming` text NOT NULL,
  `websitelocation` text NOT NULL,
  `websitelocationiframe` text NOT NULL,
  `websitelogo` text NOT NULL,
  `websitefav` text NOT NULL,
  `websitelogofooter` text NOT NULL,
  `websitefacebook` text NOT NULL,
  `websitetwitter` text NOT NULL,
  `websiteinstagram` text NOT NULL,
  `websiteyoutube` text NOT NULL,
  `globe_locations` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `websitename`, `websiteemail`, `websitecontact`, `websitetiming`, `websitelocation`, `websitelocationiframe`, `websitelogo`, `websitefav`, `websitelogofooter`, `websitefacebook`, `websitetwitter`, `websiteinstagram`, `websiteyoutube`, `globe_locations`, `created_at`, `updated_at`) VALUES
(1, 'FBB Holding L.L.C. - A step into the bright future', 'info@fbb.ae', '+971 48-839-261', 'Mon- Sat : 9:00 - 18:00', '51 Tower, office 406,407,408 ,BUSINESS BAY, DUBAI - UAE', '51 tower business bay', '/images/website/1680783096-websitelogo.png', '/images/website/1680783720-websitefav.png', '/images/website/1684141510-websitelogofooter.png', '#', '#', '#', '#', '[{\"name\":\"Cyprus\",\"lat\":12,\"lon\":261,\"status\":1},{\"name\":\"Jordan\",\"lat\":9,\"lon\":259.4,\"status\":1},{\"name\":\"Egypt\",\"lat\":7,\"lon\":266,\"status\":1},{\"name\":\"Libya\",\"lat\":10,\"lon\":273,\"status\":1},{\"name\":\"Bahrain\",\"lat\":3,\"lon\":251,\"status\":1},{\"name\":\"UAE\",\"lat\":0.3,\"lon\":248,\"status\":1},{\"name\":\"Belgium\",\"lat\":31,\"lon\":272,\"status\":1},{\"name\":\"Germany\",\"lat\":29,\"lon\":270,\"status\":1}]', '2023-04-03 06:39:28', '2023-05-24 17:41:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
