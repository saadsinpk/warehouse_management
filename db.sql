-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts` (
  `account_id` varchar(220) NOT NULL,
  `account_table_name` varchar(255) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `account_2`;
CREATE TABLE `account_2` (
  `account_id` int(11) NOT NULL,
  `account_name` varchar(40) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `parent_id` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `account_2` (`account_id`, `account_name`, `created_at`, `parent_id`) VALUES
(47,	'Mohammad Jami',	'2022-07-01 10:03:07',	3);

DROP TABLE IF EXISTS `bank_add`;
CREATE TABLE `bank_add` (
  `bank_id` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `ac_name` varchar(250) DEFAULT NULL,
  `ac_number` varchar(250) DEFAULT NULL,
  `branch` varchar(250) DEFAULT NULL,
  `signature_pic` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `bank_summary`;
CREATE TABLE `bank_summary` (
  `bank_id` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `deposite_id` varchar(250) DEFAULT NULL,
  `date` varchar(250) DEFAULT NULL,
  `ac_type` varchar(50) DEFAULT NULL,
  `dr` float DEFAULT NULL,
  `cr` float DEFAULT NULL,
  `ammount` float DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `cheque_manger`;
CREATE TABLE `cheque_manger` (
  `cheque_id` varchar(100) NOT NULL,
  `transection_id` varchar(100) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `bank_id` varchar(100) NOT NULL,
  `cheque_no` varchar(100) NOT NULL,
  `date` varchar(250) DEFAULT NULL,
  `transection_type` varchar(100) NOT NULL,
  `cheque_status` int(11) NOT NULL,
  `amount` float NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `company_information`;
CREATE TABLE `company_information` (
  `company_id` varchar(250) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `website` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `company_information` (`company_id`, `company_name`, `email`, `address`, `mobile`, `website`, `status`) VALUES
('NOILG8EGCRXXBWUEUQBM',	'DIGONTO LTD',	'Test@testing2.com',	'shop no; 203 & 204 sokoto central market.',	'08067783791',	'https://www.abc.com',	1);

DROP TABLE IF EXISTS `customer_information`;
CREATE TABLE `customer_information` (
  `id` bigint(20) NOT NULL,
  `customer_id` varchar(250) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_mobile` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=paid,2=credit'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `customer_information` (`id`, `customer_id`, `customer_name`, `customer_address`, `customer_mobile`, `customer_email`, `status`) VALUES
(1,	'TGIB8CZGQKY8MT8',	'walking customer',	'',	'',	'',	1),
(194,	'WHNCY3JMJMHJFBG',	'Customer',	'N/A ',	'',	'',	1);

DROP TABLE IF EXISTS `customer_ledger`;
CREATE TABLE `customer_ledger` (
  `id` int(11) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `invoice_no` varchar(100) DEFAULT NULL,
  `receipt_no` varchar(50) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `cheque_no` varchar(255) NOT NULL,
  `date` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `d_c` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `customer_ledger` (`id`, `transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES
(1,	'QY3CZH54P1',	'TGIB8CZGQKY8MT8',	'Adjustment',	NULL,	0,	'Previous adjustment with software',	'NA',	'NA',	'2019-11-06',	1,	'd'),
(1722,	'ASSV1Z26NN',	'WHNCY3JMJMHJFBG',	'Adjustment',	NULL,	0,	'Previous adjustment with software',	'NA',	'NA',	'2022-07-05',	1,	'd'),
(1810,	'DULSL1V3UX7FF77',	'TGIB8CZGQKY8MT8',	NULL,	'F79LXXJM62',	127,	'Cash Paid By Customer',	'1',	'',	'2022-07-26',	1,	'c'),
(1809,	'DULSL1V3UX7FF77',	'TGIB8CZGQKY8MT8',	'3311385914',	NULL,	127,	'Total bill this invoice',	'',	'',	'2022-07-26',	1,	'd'),
(1808,	'79ZKODD6QJHM4IJ',	'TGIB8CZGQKY8MT8',	'9357512156',	NULL,	81,	'',	'',	'',	'2022-07-26',	1,	'd'),
(1807,	'79ZKODD6QJHM4IJ',	'TGIB8CZGQKY8MT8',	NULL,	'UAPOKTJALB',	81,	'Cash Paid By Customer',	'1',	'',	'2022-07-26',	1,	'c');

DROP TABLE IF EXISTS `custom_sms_tbl`;
CREATE TABLE `custom_sms_tbl` (
  `id` int(11) NOT NULL,
  `gateway` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `from` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `to` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `custom_sms_tbl` (`id`, `gateway`, `from`, `to`, `message`, `created_date`, `created_by`) VALUES
(1,	'NEXMO',	'Md. Shahab udin',	'',	'Dear walking customer, Your invoice is successfully done. Your Invoice ID 1287191483, Total Amount 0 and Paid Amount 2!',	'2022-05-16 09:56:50',	1),
(2,	'NEXMO',	'Md. Shahab udin',	'',	'Dear walking customer, Your invoice is successfully done. Your Invoice ID 7693897212, Total Amount 0 and Paid Amount 0!',	'2022-06-04 03:22:40',	1),
(3,	'NEXMO',	'Md. Shahab udin',	'',	'Dear Mohammad Jami, Your invoice is successfully done. Your Invoice ID 4335878495, Total Amount 2 and Paid Amount 2!',	'2022-07-05 04:55:00',	1),
(4,	'NEXMO',	'Md. Shahab udin',	'',	'Dear walking customer, Your invoice is successfully done. Your Invoice ID 2562433349, Total Amount 24 and Paid Amount 22!',	'2022-07-05 05:24:33',	1),
(5,	'NEXMO',	'Md. Shahab udin',	'',	'Dear walking customer, Your invoice is successfully done. Your Invoice ID 3287287119, Total Amount 12 and Paid Amount 12!',	'2022-07-05 05:39:14',	1),
(6,	'NEXMO',	'Md. Shahab udin',	'',	'Dear walking customer, Your invoice is successfully done. Your Invoice ID 2717558897, Total Amount 12 and Paid Amount 12!',	'2022-07-05 05:39:59',	1),
(7,	'NEXMO',	'Md. Shahab udin',	'',	'Dear walking customer, Your invoice is successfully done. Your Invoice ID 1979687423, Total Amount 12 and Paid Amount 12!',	'2022-07-07 02:08:05',	1),
(8,	'NEXMO',	'Md. Shahab udin',	'',	'Dear walking customer, Your invoice is successfully done. Your Invoice ID 9271164435, Total Amount 12 and Paid Amount 12!',	'2022-07-14 12:43:55',	0),
(9,	'NEXMO',	'Md. Shahab udin',	'',	'Dear walking customer, Your invoice is successfully done. Your Invoice ID 5759825369, Total Amount 36 and Paid Amount 36!',	'2022-07-19 12:22:06',	1),
(10,	'NEXMO',	'Md. Shahab udin',	'',	'Dear walking customer, Your invoice is successfully done. Your Invoice ID 8687287832, Total Amount 72 and Paid Amount 72!',	'2022-07-19 12:23:08',	0),
(11,	'NEXMO',	'Md. Shahab udin',	'',	'Dear walking customer, Your invoice is successfully done. Your Invoice ID , Total Amount  and Paid Amount !',	'2022-07-26 01:21:48',	1),
(12,	'NEXMO',	'Md. Shahab udin',	'',	'Dear walking customer, Your invoice is successfully done. Your Invoice ID , Total Amount  and Paid Amount !',	'2022-07-26 01:26:42',	1),
(13,	'NEXMO',	'Md. Shahab udin',	'',	'Dear walking customer, Your invoice is successfully done. Your Invoice ID , Total Amount  and Paid Amount !',	'2022-07-26 01:29:25',	1),
(14,	'NEXMO',	'Md. Shahab udin',	'',	'Dear walking customer, Your invoice is successfully done. Your Invoice ID , Total Amount  and Paid Amount !',	'2022-07-26 01:30:53',	1),
(15,	'NEXMO',	'Md. Shahab udin',	'',	'Dear walking customer, Your invoice is successfully done. Your Invoice ID , Total Amount  and Paid Amount !',	'2022-07-26 01:32:03',	1),
(16,	'NEXMO',	'Md. Shahab udin',	'',	'Dear walking customer, Your invoice is successfully done. Your Invoice ID 9357117424, Total Amount 80 and Paid Amount 80!',	'2022-07-26 01:35:34',	1),
(17,	'NEXMO',	'Md. Shahab udin',	'',	'Dear walking customer, Your invoice is successfully done. Your Invoice ID 2827232197, Total Amount 60 and Paid Amount 60!',	'2022-07-26 01:53:10',	1),
(18,	'NEXMO',	'Md. Shahab udin',	'',	'Dear walking customer, Your invoice is successfully done. Your Invoice ID 9675875769, Total Amount 48 and Paid Amount 48!',	'2022-07-26 02:13:41',	1),
(19,	'NEXMO',	'Md. Shahab udin',	'',	'Dear walking customer, Your invoice is successfully done. Your Invoice ID 8298664169, Total Amount 60 and Paid Amount 60!',	'2022-07-26 02:18:22',	1),
(20,	'NEXMO',	'Md. Shahab udin',	'',	'Dear walking customer, Your invoice is successfully done. Your Invoice ID 9357512156, Total Amount 36 and Paid Amount 36!',	'2022-07-26 02:20:13',	1),
(21,	'NEXMO',	'Md. Shahab udin',	'',	'Dear walking customer, Your invoice is successfully done. Your Invoice ID 3311385914, Total Amount 127 and Paid Amount 127!',	'2022-07-26 07:47:27',	1);

DROP TABLE IF EXISTS `daily_banking_add`;
CREATE TABLE `daily_banking_add` (
  `banking_id` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `bank_id` varchar(100) NOT NULL,
  `deposit_type` varchar(255) NOT NULL,
  `transaction_type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `amount` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `daily_closing`;
CREATE TABLE `daily_closing` (
  `closing_id` varchar(255) NOT NULL,
  `last_day_closing` float NOT NULL,
  `cash_in` float NOT NULL,
  `cash_out` float NOT NULL,
  `date` varchar(250) NOT NULL,
  `amount` float NOT NULL,
  `adjustment` float NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `designation`;
CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `designation` varchar(150) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `designation` (`id`, `designation`, `details`) VALUES
(1,	'Sales Person',	''),
(2,	'Manager',	'Manage all the sales and purchase work'),
(4,	'Designer',	'Graphic Designer'),
(5,	'Programmer',	'');

DROP TABLE IF EXISTS `employee_history`;
CREATE TABLE `employee_history` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `rate_type` int(11) NOT NULL,
  `hrate` float NOT NULL,
  `email` varchar(50) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `address_line_1` text NOT NULL,
  `address_line_2` text NOT NULL,
  `image` text DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `employee_ledger`;
CREATE TABLE `employee_ledger` (
  `transaction_id` varchar(100) NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `chalan_no` varchar(100) DEFAULT NULL,
  `deposit_no` varchar(50) DEFAULT NULL,
  `amount` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `cheque_no` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `d_c` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `expense_item_tbl`;
CREATE TABLE `expense_item_tbl` (
  `id` int(11) NOT NULL,
  `item_id` varchar(50) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `expense_item_tbl` (`id`, `item_id`, `item_name`, `created_by`, `created_date`, `status`) VALUES
(3,	'1653593983',	'item 1',	'1',	'2022-05-26 19:39:43',	1),
(5,	'1653594297',	'item 3',	'1',	'2022-05-26 19:44:57',	1),
(8,	'1653913078',	'test',	'1',	'2022-05-30 12:17:58',	1),
(9,	'1654178338',	'testt',	'1',	'2022-06-02 13:58:58',	1);

DROP TABLE IF EXISTS `expense_tbl`;
CREATE TABLE `expense_tbl` (
  `id` int(11) NOT NULL,
  `expense_id` varchar(20) NOT NULL,
  `item_id` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `head_office_deposit`;
CREATE TABLE `head_office_deposit` (
  `transection_id` varchar(200) NOT NULL,
  `tracing_id` varchar(200) NOT NULL,
  `payment_type` varchar(10) NOT NULL,
  `date` datetime NOT NULL,
  `amount` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `inflow_92mizdldrv`;
CREATE TABLE `inflow_92mizdldrv` (
  `transection_id` varchar(200) NOT NULL,
  `tracing_id` varchar(200) NOT NULL,
  `payment_type` varchar(10) NOT NULL,
  `date` datetime NOT NULL,
  `amount` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `inflow_92mizdldrv` (`transection_id`, `tracing_id`, `payment_type`, `date`, `amount`, `description`, `status`) VALUES
('31GWY3JKOHUCLSX',	'TGIB8CZGQKY8MT8',	'1',	'2022-07-19 00:00:00',	36,	'ITP',	1),
('4CJ82Q6MWV5G2WR',	'TGIB8CZGQKY8MT8',	'1',	'2022-07-19 00:00:00',	72,	'ITP',	1),
('6QDM3L7N1JLRBAY',	'TGIB8CZGQKY8MT8',	'1',	'2022-07-26 00:00:00',	60,	'ITP',	1),
('6TE7PZS3HYQ7SL6',	'TGIB8CZGQKY8MT8',	'1',	'2022-07-05 00:00:00',	12,	'ITP',	1),
('7F8TCP2CWTGJU5M',	'TGIB8CZGQKY8MT8',	'1',	'2022-07-26 00:00:00',	60,	'ITP',	1),
('7PI3JTKE6URPXAY',	'TGIB8CZGQKY8MT8',	'1',	'2022-07-26 00:00:00',	40,	'ITP',	1),
('7XISERPZLST261S',	'TGIB8CZGQKY8MT8',	'1',	'2022-07-05 00:00:00',	12,	'ITP',	1),
('DULSL1V3UX7FF77',	'TGIB8CZGQKY8MT8',	'1',	'2022-07-26 00:00:00',	127,	'ITP',	1),
('HSG8JWY4RSEK7ZS',	'WHNCY3JMJMHJFBG',	'1',	'2022-07-05 00:00:00',	2,	'ITP',	1),
('JAA2AW6XD7822WX',	'TGIB8CZGQKY8MT8',	'1',	'2022-07-26 00:00:00',	36,	'ITP',	1),
('KJ3VFX413NJD1NZ',	'TGIB8CZGQKY8MT8',	'1',	'2022-06-04 00:00:00',	0,	'ITP',	1),
('LUPZ7QIA9U36QN2',	'TGIB8CZGQKY8MT8',	'1',	'2022-07-14 00:00:00',	12,	'ITP',	1),
('MNJJNMCQR46EO11',	'TGIB8CZGQKY8MT8',	'1',	'2022-07-26 00:00:00',	60,	'ITP',	1),
('O29K53N3MSMZAFH',	'TGIB8CZGQKY8MT8',	'1',	'2022-07-26 00:00:00',	80,	'ITP',	1),
('Q4MQ7TGS7GKSC9O',	'TGIB8CZGQKY8MT8',	'1',	'2022-07-26 00:00:00',	48,	'ITP',	1),
('RAMLPMBJMD1U2AM',	'TGIB8CZGQKY8MT8',	'1',	'2022-07-26 00:00:00',	60,	'ITP',	1),
('RPIFJ3G48DR3UWM',	'TGIB8CZGQKY8MT8',	'1',	'2022-05-18 00:00:00',	2,	'ITP',	1),
('UBPB8FR5E5MH3UP',	'TGIB8CZGQKY8MT8',	'1',	'2022-07-07 00:00:00',	12,	'ITP',	1),
('WD5V83677TPMDZE',	'TGIB8CZGQKY8MT8',	'1',	'2022-07-26 00:00:00',	60,	'ITP',	1),
('XEX2J6Y32FRG1JA',	'TGIB8CZGQKY8MT8',	'1',	'2022-07-05 00:00:00',	22,	'ITP',	1),
('ZP6E6BYUGQBHCCZ',	'TGIB8CZGQKY8MT8',	'1',	'2022-07-26 00:00:00',	80,	'ITP',	1);

DROP TABLE IF EXISTS `inflow_yh5i8w9oea`;
CREATE TABLE `inflow_yh5i8w9oea` (
  `transection_id` varchar(200) NOT NULL,
  `tracing_id` varchar(200) NOT NULL,
  `payment_type` varchar(10) NOT NULL,
  `date` varchar(255) NOT NULL,
  `amount` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `invoice`;
CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `invoice_id` varchar(100) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `store_id` varchar(250) NOT NULL,
  `date` varchar(50) DEFAULT NULL,
  `total_amount` float NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `total_discount` float DEFAULT NULL COMMENT 'total invoice discount',
  `status` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `store_id`, `date`, `total_amount`, `invoice`, `total_discount`, `status`, `created_by`) VALUES
(660,	'1287191483',	'TGIB8CZGQKY8MT8',	'',	'2022-05-18',	0,	'1000',	0,	1,	'1'),
(661,	'7693897212',	'TGIB8CZGQKY8MT8',	'',	'2022-06-04',	0,	'1001',	0,	1,	'1'),
(662,	'4335878495',	'WHNCY3JMJMHJFBG',	'',	'2022-07-05',	2,	'1002',	0,	1,	'1'),
(663,	'2562433349',	'TGIB8CZGQKY8MT8',	'',	'2022-07-05',	24,	'1003',	0,	1,	'1'),
(664,	'3287287119',	'TGIB8CZGQKY8MT8',	'1654179452',	'2022-07-06',	12,	'1004',	0,	1,	'1'),
(665,	'2717558897',	'TGIB8CZGQKY8MT8',	'1653644372',	'2022-07-06',	12,	'1005',	0,	1,	'1'),
(666,	'1979687423',	'TGIB8CZGQKY8MT8',	'1654179452',	'2022-07-07',	12,	'1006',	0,	1,	'1'),
(679,	'9357512156',	'TGIB8CZGQKY8MT8',	'1654179452',	'2022-07-26',	81,	'1010',	0,	0,	'1'),
(668,	'5759825369',	'TGIB8CZGQKY8MT8',	'1654179452',	'2022-07-19',	15000,	'1008',	0,	1,	'1'),
(669,	'8687287832',	'TGIB8CZGQKY8MT8',	'1654179452',	'2022-07-19',	36,	'1009',	0,	1,	'Rj6pL90yugYUqjA'),
(680,	'3311385914',	'TGIB8CZGQKY8MT8',	'1654179452',	'2022-07-26',	127,	'1011',	0,	1,	'1');

DROP TABLE IF EXISTS `invoice_details`;
CREATE TABLE `invoice_details` (
  `invoice_details_id` varchar(100) NOT NULL,
  `invoice_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `cartoon` float DEFAULT NULL,
  `quantity` float NOT NULL DEFAULT 0,
  `rate` float NOT NULL,
  `supplier_rate` float DEFAULT NULL,
  `total_price` float NOT NULL,
  `discount` float DEFAULT NULL,
  `tax` float DEFAULT NULL,
  `paid_amount` float DEFAULT 0,
  `due_amount` float NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `invoice_details` (`invoice_details_id`, `invoice_id`, `product_id`, `cartoon`, `quantity`, `rate`, `supplier_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES
('212597767718721',	'1287191483',	'',	0,	0,	2,	NULL,	0,	0,	NULL,	2,	-2,	1),
('591885861517863',	'7693897212',	'123',	0,	0,	12,	10,	0,	0,	NULL,	0,	0,	1),
('839127624232265',	'4335878495',	'234',	0,	2,	1,	1,	2,	0,	NULL,	2,	0,	1),
('175175548596177',	'2562433349',	'123',	2,	2,	12,	10,	24,	0,	NULL,	22,	2,	1),
('826887733725297',	'3287287119',	'123',	1,	1,	12,	NULL,	12,	0,	NULL,	12,	0,	0),
('624587894728527',	'2717558897',	'123',	1,	1,	12,	10,	12,	0,	NULL,	12,	0,	1),
('777165192913841',	'1979687423',	'123',	1,	1,	12,	10,	12,	0,	NULL,	12,	0,	1),
('877583412953126',	'9357512156',	'123',	3,	3,	15,	NULL,	45,	0,	NULL,	81,	0,	0),
('223621174219676',	'5759825369',	'43',	3,	1500,	10,	NULL,	15000,	0,	NULL,	15000,	0,	0),
('375598576235725',	'9357512156',	'37',	3,	3,	12,	NULL,	36,	0,	NULL,	81,	0,	0),
('882636433462236',	'8687287832',	'123',	3,	3,	12,	NULL,	36,	0,	NULL,	36,	0,	0),
('274336717633837',	'3311385914',	'9960',	1,	1,	55,	NULL,	55,	0,	NULL,	127,	0,	1),
('367584665155152',	'3311385914',	'123',	6,	6,	12,	10,	72,	0,	NULL,	127,	0,	1);

DROP TABLE IF EXISTS `language`;
CREATE TABLE `language` (
  `id` int(10) unsigned NOT NULL,
  `phrase` text NOT NULL,
  `english` text DEFAULT NULL,
  `bangla` text DEFAULT NULL,
  `arabic` text DEFAULT NULL,
  `thai` text DEFAULT NULL,
  `espaol` text DEFAULT NULL,
  `portuguese` text DEFAULT NULL,
  `dsdfgfd` text DEFAULT NULL,
  `french` text DEFAULT NULL,
  `espa` text DEFAULT NULL,
  `idid` text DEFAULT NULL,
  `hebrew` text DEFAULT NULL,
  `german` text DEFAULT NULL,
  `tamil` text DEFAULT NULL,
  `trke` text DEFAULT NULL,
  `china` text DEFAULT NULL,
  `jpan` text DEFAULT NULL,
  `dutch` text DEFAULT NULL,
  `examplefile` text DEFAULT NULL,
  `add_location` text DEFAULT NULL,
  `productreturn` text DEFAULT NULL,
  `approveproducts` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`, `arabic`, `thai`, `espaol`, `portuguese`, `dsdfgfd`, `french`, `espa`, `idid`, `hebrew`, `german`, `tamil`, `trke`, `china`, `jpan`, `dutch`, `examplefile`, `add_location`, `productreturn`, `approveproducts`) VALUES
(1,	'user_profile',	'User Profile',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'×“×ž×”×—',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(2,	'setting',	'Setting',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(3,	'language',	'Language',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(4,	'manage_users',	'Manage Users',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(5,	'add_user',	'Add User',	'',	'',	'',	'Agregar Usuario',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(6,	'manage_company',	'Manage Company',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(7,	'web_settings',	'Software Settings',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(8,	'manage_accounts',	'Manage Accounts',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(9,	'create_accounts',	'Create Office Account',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(10,	'manage_bank',	'Manage Bank',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(11,	'add_new_bank',	'Add New Bank',	'',	'',	'',	'',	'Adicionar Banco',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(12,	'settings',	'Bank',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(13,	'closing_report',	'Closing Report',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(14,	'closing',	'Closing',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(15,	'cheque_manager',	'Cheque Manager',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(16,	'accounts_summary',	'Accounts Summary',	'',	'',	'',	'',	'Resumo de Contas',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'ã‚¢ã‚«ã‚¦ãƒ³ãƒˆæ¦‚???',	NULL,	NULL,	NULL,	NULL,	NULL),
(17,	'expense',	'Expense',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(18,	'income',	'Income',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(19,	'accounts',	'Accounts',	'',	'',	'',	'',	'Contas',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'ã‚¢ã‚«ã‚¦ãƒ³ãƒˆ',	NULL,	NULL,	NULL,	NULL,	NULL),
(20,	'stock_report',	'Stock Report',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(21,	'stock',	'Stock',	'à¦¸???à¦Ÿà¦•',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(22,	'pos_invoice',	'Add PO',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(23,	'manage_invoice',	'Manage PO',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(24,	'new_invoice',	'New Sell',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(25,	'invoice',	'PO',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(26,	'manage_purchase',	'Manage Purchase',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(27,	'add_purchase',	'Add Purchase',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(28,	'purchase',	'Purchase',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(29,	'paid_customer',	'Paid Customer',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(30,	'manage_customer',	'Manage Customer',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(31,	'add_customer',	'Add Customer',	'Zahid Rahman',	'',	'',	'',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(32,	'customer',	'Customer',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(33,	'supplier_payment_actual',	'Supplier Payment Ledger',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(34,	'supplier_sales_summary',	'Supplier Sales Summary',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(35,	'supplier_sales_details',	'Supplier Sales Details',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(36,	'supplier_ledger',	'Supplier Ledger',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(37,	'manage_supplier',	'Manage Supplier',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(38,	'add_supplier',	'Add Supplier',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(39,	'supplier',	'Supplier',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(40,	'product_statement',	'Product Statement',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(41,	'manage_product',	'Manage Product',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(42,	'add_product',	'Add Product',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(43,	'product',	'Product',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(44,	'manage_category',	'Manage Category',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(45,	'add_category',	'Category toevoegen',	'',	'',	'',	'',	'Adicionar Categoria',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(46,	'category',	'Category',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(47,	'sales_report_product_wise',	'Sales Report (Product Wise)',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(48,	'purchase_report',	'Purchase Report',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(49,	'sales_report',	'Sales Report',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(50,	'todays_report',	'Todays Report',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(51,	'report',	'Report',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(52,	'dashboard',	'Dashboard',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'Dashbor',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(53,	'online',	'Online',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(54,	'logout',	'Logout',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(55,	'change_password',	'Change Password',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(56,	'total_purchase',	'Total Purchase',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(57,	'total_amount',	'Total Amount',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(58,	'supplier_name',	'Supplier Name',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(59,	'invoice_no',	'Sell No',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(60,	'purchase_date',	'Purchase Date',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(61,	'todays_purchase_report',	'Todays Purchase Report',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(62,	'total_sales',	'Total Sales',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(63,	'customer_name',	'Customer Name',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(64,	'sales_date',	'Sales Date',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(65,	'todays_sales_report',	'Todays Sales Report',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(66,	'home',	'Home',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(67,	'todays_sales_and_purchase_report',	'Todays sales and purchase report',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(68,	'total_ammount',	'Total Amount',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(69,	'rate',	'Rate',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(70,	'product_model',	'Product Model',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(71,	'product_name',	'Product Name',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(72,	'search',	'Search',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(73,	'end_date',	'End Date',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(74,	'start_date',	'Start Date',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(75,	'total_purchase_report',	'Total Purchase Report',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(76,	'total_sales_report',	'Total Sales Report',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(77,	'total_seles',	'Total Sales',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(78,	'all_stock_report',	'All Stock Report',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(79,	'search_by_product',	'Search By Product',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(80,	'date',	'Date',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(81,	'print',	'Print',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(82,	'stock_date',	'Stock Date',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(83,	'print_date',	'Print Date',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(84,	'sales',	'Sales',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(85,	'price',	'Price',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(86,	'sl',	'SL.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(87,	'add_new_category',	'Add new category',	'',	'',	'',	'',	'Adicionar Categoria',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(88,	'category_name',	'Category Name',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(89,	'save',	'Save',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(90,	'delete',	'Delete',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(91,	'update',	'Update',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'×“×ž×”×—',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(92,	'action',	'Action',	'',	'',	'',	'',	'AÃ§Ã£o',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(93,	'manage_your_category',	'Manage your category ',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(94,	'category_edit',	'Category Edit',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(95,	'status',	'Status',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(96,	'active',	'Active',	'',	'',	'',	'',	'Ativo',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(97,	'inactive',	'Inactive',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(98,	'save_changes',	'Save Changes',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(99,	'save_and_add_another',	'Save And Add Another',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(100,	'model',	'Model',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(101,	'supplier_price',	'Supplier Price',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(102,	'sell_price',	'Sell Price',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'è²©å£²ä¾¡æ ¼',	NULL,	NULL,	NULL,	NULL,	NULL),
(103,	'image',	'Image',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(104,	'select_one',	'Select One',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(105,	'details',	'Details',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(106,	'new_product',	'New Product',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(107,	'add_new_product',	'Add new product',	'',	'Add new product 111',	'à¹€à¸žà¸´à¹ˆà¹ˆà¸¡à¸ªà¸´à¸™à¸„à¹‰à¸²à¹ƒà¸«à¸¡à¹ˆ',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(108,	'barcode',	'Barcode',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(109,	'qr_code',	'Qr-Code',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(110,	'product_details',	'Product Details',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(111,	'manage_your_product',	'Manage your product',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(112,	'product_edit',	'Product Edit',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(113,	'edit_your_product',	'Edit your product',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(114,	'cancel',	'Cancel',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(115,	'incl_vat',	'Incl. Vat',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(116,	'money',	'TK',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(117,	'grand_total',	'Grand Total',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(118,	'quantity',	'Quantity',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(119,	'product_report',	'Product Report',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(120,	'product_sales_and_purchase_report',	'Product sales and purchase report',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(121,	'previous_stock',	'Previous Stock',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(122,	'out',	'Out',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(123,	'in',	'In',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(124,	'to',	'To',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(125,	'previous_balance',	'Previous Balance',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(126,	'customer_address',	'Customer Address',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(127,	'customer_mobile',	'Customer Mobile',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(128,	'customer_email',	'Customer Email',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(129,	'add_new_customer',	'Add new customer',	'',	'',	'',	'',	'Adicionar Cliente',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(130,	'balance',	'Balance',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(131,	'mobile',	'Mobile',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(132,	'address',	'Address',	'',	'',	'',	'',	'EndereÃ§o',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(133,	'manage_your_customer',	'Manage your customer',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(134,	'customer_edit',	'Customer Edit',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(135,	'paid_customer_list',	'Paid Customer List',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(136,	'ammount',	'Amount',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(137,	'customer_ledger',	'Customer Ledger',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(138,	'manage_customer_ledger',	'Manage Customer Ledger',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(139,	'customer_information',	'Customer Information',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(140,	'debit_ammount',	'Debit Amount',	'à¦œà¦®à¦¾à¦•à§ƒà¦¤ à¦Ÿà¦¾à¦•à¦¾à¦° à¦ªà¦°à¦¿à¦®à¦¾à¦¨',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(141,	'credit_ammount',	'Credit Amount',	'à¦–à¦°à¦œ',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(142,	'balance_ammount',	'Balance Amount',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(143,	'receipt_no',	'Receipt NO',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(144,	'description',	'Description',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(145,	'debit',	'Debit',	'à¦œà¦®à¦¾',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(146,	'credit',	'Credit',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(147,	'item_information',	'Item Information',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(148,	'total',	'Total',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(149,	'please_select_supplier',	'Please Select Supplier',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(150,	'submit',	'Submit',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(151,	'submit_and_add_another',	'Submit And Add Another One',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(152,	'add_new_item',	'Add New Item',	'',	'',	'',	'',	'Adicionar Item',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(153,	'manage_your_purchase',	'Manage your purchase',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(154,	'purchase_edit',	'Purchase Edit',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(155,	'purchase_ledger',	'Purchase Ledger',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(156,	'invoice_information',	'Invoice Information',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(157,	'paid_ammount',	'Paid Amount',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(158,	'discount',	'Discount/Pcs.',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(159,	'save_and_paid',	'Save And Paid',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(160,	'payee_name',	'Payee Name',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(161,	'manage_your_invoice',	'Manage your invoice',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(162,	'invoice_edit',	'PO Edit',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(163,	'new_pos_invoice',	'New PO',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(164,	'add_new_pos_invoice',	'Add New PO',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(165,	'product_id',	'Product ID',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(166,	'paid_amount',	'Paid Amount',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(167,	'authorised_by',	'Authorised By',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(168,	'checked_by',	'Checked By',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(169,	'received_by',	'Received By',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(170,	'prepared_by',	'Prepared By',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(171,	'memo_no',	'Memo No',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(172,	'website',	'Website',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(173,	'email',	'Email',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(174,	'invoice_details',	'Invoice Details',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(175,	'reset',	'Reset',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(176,	'payment_account',	'Payment Account',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(177,	'bank_name',	'Bank Name',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(178,	'cheque_or_pay_order_no',	'Cheque/Pay Order No',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(179,	'payment_type',	'Payment Type',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(180,	'payment_from',	'Payment From',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(181,	'payment_date',	'Payment Date',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(182,	'add_income',	'Add Income',	'',	'',	'',	'',	'Adicionar Renda',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(183,	'cash',	'Cash',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(184,	'cheque',	'Cheque',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(185,	'pay_order',	'Pay Order',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(186,	'payment_to',	'Payment To',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(187,	'total_outflow_ammount',	'Total Expense Amount',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(188,	'transections',	'Transections',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(189,	'accounts_name',	'Accounts Name',	'',	'',	'',	'',	'Nome das Contas',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'ã‚¢ã‚«ã‚¦ãƒ³ãƒˆ???',	NULL,	NULL,	NULL,	NULL,	NULL),
(190,	'outflow_report',	'Expense Report',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(191,	'inflow_report',	'Income Report',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(192,	'all',	'All',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(193,	'account',	'Account',	'',	'',	'',	'',	'Conta',	'',	'',	'Cuenta',	NULL,	NULL,	NULL,	NULL,	'',	'',	'ã‚¢ã‚«ã‚¦ãƒ³ãƒˆ',	NULL,	NULL,	NULL,	NULL,	NULL),
(194,	'from',	'From',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(195,	'account_summary_report',	'Account Summary Report',	'',	'',	'',	'',	'RelatÃ³rio do resumo ',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(196,	'search_by_date',	'Search By Date',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(197,	'cheque_no',	'Cheque No',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(198,	'name',	'Name',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(199,	'closing_account',	'Closing Account',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(200,	'close_your_account',	'Close your account',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(201,	'last_day_closing',	'Last Day Closing',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(202,	'cash_in',	'Cash In',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(203,	'cash_out',	'Cash Out',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(204,	'cash_in_hand',	'Cash In Hand',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(205,	'add_new_bank',	'Add New Bank',	'',	'',	'',	'',	'Adicionar Banco',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(206,	'day_closing',	'Day Closing',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(207,	'account_closing_report',	'Account Closing Report',	'',	'',	'',	'',	'RelatÃ³rio de fechamento de conta',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(208,	'last_day_ammount',	'Last Day Amount',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(209,	'adjustment',	'Adjustment',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(210,	'pay_type',	'Pay Type',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(211,	'customer_or_supplier',	'Customer,Supplier Or Others',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(212,	'transection_id',	'Transections ID',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(213,	'accounts_summary_report',	'Accounts Summary Report',	'',	'',	'',	'',	'RelatÃ³rio de cContas',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'ã‚¢ã‚«ã‚¦ãƒ³ãƒˆæ¦‚???ãƒ¬???ãƒ¼ãƒˆ',	NULL,	NULL,	NULL,	NULL,	NULL),
(214,	'bank_list',	'Bank List',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(215,	'bank_edit',	'Bank Edit',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(216,	'debit_plus',	'Debit (+)',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(217,	'credit_minus',	'Credit (-)',	'à¦–à¦°à¦œ à¦¬à¦¿à§Ÿà§‹à¦—',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(218,	'account_name',	'Account Name',	'',	'',	'',	'',	'Nome da conta',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(219,	'account_type',	'Account Type',	'',	'',	'',	'',	'Tipo de Conta',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(220,	'account_real_name',	'Account Real Name',	'',	'',	'',	'',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(221,	'manage_account',	'Manage Account',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(222,	'company_name',	'Bdtask Limited',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(223,	'edit_your_company_information',	'Edit your company information',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(224,	'company_edit',	'Company Edit',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(225,	'admin',	'Admin',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(226,	'user',	'User',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'×“×ž×”×—',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(227,	'password',	'Password',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(228,	'last_name',	'Last Name',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(229,	'first_name',	'First Name',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(230,	'add_new_user_information',	'Add new user information',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(231,	'user_type',	'User Type',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'×“×ž×”×—',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(232,	'user_edit',	'User Edit',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'×“×ž×”×—',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(233,	'rtr',	'RTR',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(234,	'ltr',	'LTR',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(235,	'ltr_or_rtr',	'LTR/RTR',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(236,	'footer_text',	'Footer Text',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(237,	'favicon',	'Favicon',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(238,	'logo',	'Logo',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(239,	'update_setting',	'Update Setting',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'×“×ž×”×—',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(240,	'update_your_web_setting',	'Update your web setting',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'×“×ž×”×—',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(241,	'login',	'Login',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(242,	'your_strong_password',	'Your strong password',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(243,	'your_unique_email',	'Your unique email',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(244,	'please_enter_your_login_information',	'Please enter your login information.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(245,	'update_profile',	'Update Profile',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'×“×ž×”×—',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(246,	'your_profile',	'Your Profile',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(247,	're_type_password',	'Re-Type Password',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(248,	'new_password',	'New Password',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(249,	'old_password',	'Old Password',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(250,	'new_information',	'New Information',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(251,	'old_information',	'Old Information',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(252,	'change_your_information',	'Change your information',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(253,	'change_your_profile',	'Change your profile',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(254,	'profile',	'Profile',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(255,	'wrong_username_or_password',	'Wrong User Name Or Password !',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(256,	'successfully_updated',	'Successfully Updated.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(257,	'blank_field_does_not_accept',	'Blank Field Does Not Accept !',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(258,	'successfully_changed_password',	'Successfully changed password.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(259,	'you_are_not_authorised_person',	'You are not authorised person !',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(260,	'password_and_repassword_does_not_match',	'Passwor and re-password does not match !',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(261,	'new_password_at_least_six_character',	'New Password At Least 6 Character.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(262,	'you_put_wrong_email_address',	'You put wrong email address !',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(263,	'cheque_ammount_asjusted',	'Cheque amount adjusted.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(264,	'successfully_payment_paid',	'Successfully Payment Paid.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(265,	'successfully_added',	'Successfully Added.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(266,	'successfully_updated_2_closing_ammount_not_changeale',	'Successfully Updated -2. Note: Closing Amount Not Changeable.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(267,	'successfully_payment_received',	'Successfully Payment Received.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(268,	'already_inserted',	'Already Inserted !',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(269,	'successfully_delete',	'Successfully Delete.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(270,	'successfully_created',	'Successfully Created.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(271,	'logo_not_uploaded',	'Logo not uploaded !',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(272,	'favicon_not_uploaded',	'Favicon not uploaded !',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(273,	'supplier_mobile',	'Supplier Mobile',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(274,	'supplier_address',	'Supplier Address',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(275,	'supplier_details',	'Supplier Details',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(276,	'add_new_supplier',	'Add New Supplier',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(277,	'manage_suppiler',	'Manage Supplier',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(278,	'manage_your_supplier',	'Manage your supplier',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(279,	'manage_supplier_ledger',	'Manage supplier ledger',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(280,	'invoice_id',	'Invoice ID',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(281,	'deposite_id',	'Deposite ID',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(282,	'supplier_actual_ledger',	'Supplier Actual Ledger',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(283,	'supplier_information',	'Supplier Information',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(284,	'event',	'Event',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(285,	'add_new_income',	'Add New Income',	'',	'',	'',	'',	'Adicionar Renda',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(286,	'add_expese',	'Add Expense',	'',	'',	'',	'',	'Adicionar Despesa',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(287,	'add_new_expense',	'Add New Expense',	'',	'',	'',	'',	'Adicionar Despesa',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(288,	'total_inflow_ammount',	'Total Income Amount',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(289,	'create_new_invoice',	'Create New Invoice',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(290,	'create_pos_invoice',	'Create PO Invoice',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(291,	'total_profit',	'Total Profit',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(292,	'monthly_progress_report',	'Monthly Progress Report',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(293,	'total_invoice',	'Total Invoice',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(294,	'account_summary',	'Account Summary',	'',	'',	'',	'',	'Resumo da conta',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(295,	'total_supplier',	'Total Supplier',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(296,	'total_product',	'Total Product',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(297,	'total_customer',	'Total Customer',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(298,	'supplier_edit',	'Supplier Edit',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(299,	'add_new_invoice',	'Add New Invoice',	'',	'',	'',	'',	'Adicionar Fatura',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(300,	'add_new_purchase',	'Add new purchase',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(301,	'currency',	'Currency',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(302,	'currency_position',	'Currency Position',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(303,	'left',	'Left',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(304,	'right',	'Right',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(305,	'add_tax',	'Add Tax',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(306,	'manage_tax',	'Manage Tax',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(307,	'add_new_tax',	'Add new tax',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(308,	'enter_tax',	'Enter Tax',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(309,	'already_exists',	'Already Exists !',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(310,	'successfully_inserted',	'Successfully Inserted.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(311,	'tax',	'Tax',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(312,	'tax_edit',	'Tax Edit',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(313,	'product_not_added',	'Product not added !',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(314,	'total_tax',	'Total Tax',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(315,	'manage_your_supplier_details',	'Manage your supplier details.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(316,	'invoice_description',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s                                       standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(317,	'thank_you_for_choosing_us',	'Thank you very much for choosing us.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(318,	'billing_date',	'Billing Date',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(319,	'billing_to',	'Billing To',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(320,	'billing_from',	'Billing From',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(321,	'you_cant_delete_this_product',	'Sorry !!  You can\'t delete this product.This product already used in calculation system!',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(322,	'old_customer',	'Old Customer',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(323,	'new_customer',	'New Customer',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(324,	'new_supplier',	'New Supplier',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(325,	'old_supplier',	'Old Supplier',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(326,	'credit_customer',	'Credit Customer',	'à¦¬à¦•à§‡à§Ÿà¦¾ à¦—???à¦°à¦¾à¦¹à¦•',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(327,	'account_already_exists',	'This Account Already Exists !',	'',	'',	'',	'',	'Esta Conta jÃ¡ existe',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(328,	'edit_income',	'Edit Income',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(329,	'you_are_not_access_this_part',	'You are not authorised person !',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(330,	'account_edit',	'Account Edit',	'',	'',	'',	'',	'Editar Conta',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(331,	'due',	'Due',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(332,	'expense_edit',	'Expense Edit',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(333,	'please_select_customer',	'Please select customer !',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(334,	'profit_report',	'Profit Report (Invoice Wise)',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(335,	'total_profit_report',	'Total profit report',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(336,	'please_enter_valid_captcha',	'Please enter valid captcha.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(337,	'category_not_selected',	'Category not selected.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(338,	'supplier_not_selected',	'Supplier not selected.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(339,	'please_select_product',	'Please select product.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(340,	'product_model_already_exist',	'Product model already exist !',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(341,	'invoice_logo',	'Invoice Logo',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(342,	'available_ctn',	'Available Ctn.',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(343,	'you_can_not_buy_greater_than_available_cartoon',	'You can not select grater than available cartoon !',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(344,	'customer_details',	'Customer details',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(345,	'manage_customer_details',	'Manage customer details.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(346,	'site_key',	'Captcha Site Key',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(347,	'secret_key',	'Captcha Secret Key',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(348,	'captcha',	'Captcha',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(349,	'cartoon_quantity',	'Product Per Cartoon',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(350,	'total_cartoon',	'Total Cartoon',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(351,	'cartoon',	'Carton',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(352,	'item_cartoon',	'Item/Cartoon',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(353,	'product_and_supplier_did_not_match',	'Product and supplier did not match !',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(354,	'if_you_update_purchase_first_select_supplier_then_product_and_then_cartoon',	'If you update purchase,first select supplier then product and then update cartoon.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(355,	'item',	'Item',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(356,	'manage_your_credit_customer',	'Manage your credit customer',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(357,	'total_quantity',	'Total Quantity',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(358,	'quantity_per_cartoon',	'Quantity per carton',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(359,	'barcode_qrcode_scan_here',	'Barcode or QR-code scan here',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(360,	'synchronizer_setting',	'Synchronizer Setting',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(361,	'data_synchronizer',	'Software Backup',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(362,	'hostname',	'Host name',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(363,	'username',	'User Name',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'×“×ž×”×—',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(364,	'ftp_port',	'FTP Port',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(365,	'ftp_debug',	'FTP Debug',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(366,	'project_root',	'Project Root',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(367,	'please_try_again',	'Please try again',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(368,	'save_successfully',	'Save successfully',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(369,	'synchronize',	'Synchronize',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(370,	'internet_connection',	'Internet Connection',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(371,	'outgoing_file',	'Outgoing File',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(372,	'incoming_file',	'Incoming File',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(373,	'ok',	'Ok',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(374,	'not_available',	'Not Available',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(375,	'available',	'Available',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(376,	'download_data_from_server',	'Download data from server',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(377,	'data_import_to_database',	'Data import to database',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(378,	'data_upload_to_server',	'Data uplod to server',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(379,	'please_wait',	'Please Wait',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(380,	'ooops_something_went_wrong',	'Oooops Something went wrong !',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(381,	'upload_successfully',	'Upload successfully',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'×“×ž×”×—',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(382,	'unable_to_upload_file_please_check_configuration',	'Unable to upload file please check configuration',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(383,	'please_configure_synchronizer_settings',	'Please configure synchronizer settings',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(384,	'download_successfully',	'Download successfully',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(385,	'unable_to_download_file_please_check_configuration',	'Unable to download file please check configuration',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(386,	'data_import_first',	'Data import past',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(387,	'data_import_successfully',	'Data import successfully',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(388,	'unable_to_import_data_please_check_config_or_sql_file',	'Unable to import data please check config or sql file',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(389,	'total_sale_ctn',	'Total Sale Ctn',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(390,	'in_ctn',	'In Ctn.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(391,	'out_ctn',	'Out Ctn.',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(392,	'stock_report_supplier_wise',	'Stock Report (Supplier Wise)',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(393,	'all_stock_report_supplier_wise',	'Stock Report (Suppler Wise)',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(394,	'select_supplier',	'Select Supplier',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(395,	'stock_report_product_wise',	'Stock Report (Product Wise)',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(396,	'phone',	'Phone',	'ÃƒÂ Ã‚Â¦Ã‚Â«ÃƒÂ Ã‚Â§Ã¢â‚¬Â¹ÃƒÂ Ã‚Â¦Ã‚Â¨',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(397,	'select_product',	'Select Product',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(398,	'in_quantity',	'In Qnty.',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(399,	'out_quantity',	'Out Qnty.',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(400,	'in_taka',	'In TK.',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(401,	'out_taka',	'Out TK.',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(402,	'commission',	'Commission',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(403,	'generate_commission',	'Generate Commssion',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(404,	'commission_rate',	'Commission Rate',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(405,	'total_ctn',	'Total Ctn.',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(406,	'per_pcs_commission',	'Per PCS Commission',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(407,	'total_commission',	'Total Commission',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(408,	'enter',	'Enter',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(409,	'please_add_walking_customer_for_default_customer',	'Please add \'Walking Customer\' for default customer.',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(410,	'supplier_ammount',	'Supplier Amount',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(411,	'my_sale_ammount',	'My Sale Amount',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(412,	'signature_pic',	'Signature Picture',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(413,	'branch',	'Branch',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(414,	'ac_no',	'A/C Number',	'',	'',	'',	'',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(415,	'ac_name',	'A/C Name',	'',	'',	'',	'',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(416,	'bank_debit_credit_manage',	'Bank Dr. And Cr. Manage',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(417,	'bank',	'Bank',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(418,	'withdraw_deposite_id',	'Withdraw / Deposite ID',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(419,	'bank_ledger',	'Bank Ledger',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(420,	'note_name',	'Note Name',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(421,	'pcs',	'Pcs.',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(422,	'1',	'',	'à§§',	'',	'à¸«à¸™à¸¶à¹ˆà¸‡',	'',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'1',	NULL,	NULL,	NULL,	NULL,	NULL),
(423,	'2',	'2',	'à§¨',	'',	'',	'',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'2',	NULL,	NULL,	NULL,	NULL,	NULL),
(424,	'5',	'5',	'à§«',	'',	'',	'',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'5',	NULL,	NULL,	NULL,	NULL,	NULL),
(425,	'10',	'10',	'à§§à§¦',	'',	'',	'',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'10',	NULL,	NULL,	NULL,	NULL,	NULL),
(426,	'20',	'20',	'à§¨à§¦',	'',	'',	'',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'20',	NULL,	NULL,	NULL,	NULL,	NULL),
(427,	'50',	'50',	'à§«à§¦',	'',	'',	'',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'50',	NULL,	NULL,	NULL,	NULL,	NULL),
(428,	'100',	'100',	'à§§à§¦à§¦',	'',	'',	'',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'100',	NULL,	NULL,	NULL,	NULL,	NULL),
(429,	'500',	'500',	'à§«à§¦à§¦',	'',	'',	'',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'500',	NULL,	NULL,	NULL,	NULL,	NULL),
(430,	'1000',	'1000',	'à§§à§¦à§¦à§¦',	'',	'',	'',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'1000',	NULL,	NULL,	NULL,	NULL,	NULL),
(431,	'total_discount',	'Total Discount',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(432,	'product_not_found',	'Product not found !',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(433,	'this_is_not_credit_customer',	'This is not credit customer !',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(434,	'personal_loan',	'Personal Loan',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(435,	'add_person',	'Add Person',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(436,	'add_loan',	'Add Loan',	'à¦²à§‹à¦¨',	'',	'',	'',	'Adicionar  Emprestimo',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(437,	'add_payment',	'Add Payment',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(438,	'manage_person',	'Manage Person',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(439,	'personal_edit',	'Person Edit',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(440,	'person_ledger',	'Person Ledger',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(441,	'backup_restore',	'Backup and restore',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(442,	'database_backup',	'Database backup',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(443,	'file_information',	'File information',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(444,	'filename',	'Filename',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(445,	'size',	'Size',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(446,	'backup_date',	'Backup date',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(447,	'backup_now',	'Backup now',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(448,	'restore_now',	'Restore now',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(449,	'are_you_sure',	'Are you sure ?',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(450,	'download',	'Download',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(451,	'backup_and_restore',	'Backup and restore',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(452,	'backup_successfully',	'Backup successfully',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(453,	'delete_successfully',	'Delete successfully',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(454,	'stock_ctn',	'Stock/Qnt',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(455,	'unit',	'Unit',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'×“×ž×”×—',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(456,	'meter_m',	'Meter (M)',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(457,	'piece_pc',	'Piece (Pc)',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(458,	'kilogram_kg',	'Kilogram (Kg)',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(459,	'stock_cartoon',	'Stock Cartoon',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(460,	'add_product_csv',	'Add Product (CSV)',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(461,	'import_product_csv',	'Import product (CSV)',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(462,	'close',	'Close',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(463,	'download_example_file',	'Download example file.',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(464,	'upload_csv_file',	'Upload CSV File',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'×“×ž×”×—',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(465,	'csv_file_informaion',	'CSV File Information',	'à¦¸à¦¿???à¦¸à¦­à¦¿ à¦«à¦¾à¦‡à¦² à¦¤à¦¥???à¦¯',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(466,	'out_of_stock',	'Out Of Stock',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(467,	'others',	'Others',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(468,	'full_paid',	'Full Paid',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(469,	'successfully_saved',	'Your Data Successfully Saved',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(470,	'manage_loan',	'Manage Loan',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(471,	'receipt',	'Receipt',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(472,	'payment',	'Payment',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(473,	'cashflow',	'Daily Cash Flow',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(474,	'signature',	'Signature',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(475,	'supplier_reports',	'Supplier Reports',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(476,	'generate',	'Generate',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(477,	'save_change',	'Save Change',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(478,	'loan_edit',	'Edit loan',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(479,	'ac_number',	'A/C Number',	'',	'',	'',	'',	'NÃºmero',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(480,	'bank_transection',	'Bank transaction',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(481,	'total_purch_ctn',	'Total P Cartoon',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(482,	'supplier_actual_saleprice',	'Supplier Actual sales',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(483,	'supplier_payment_ledger',	'Supplier Payment',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(484,	'supplier_actual_ledger_sale',	'Supplier Actual Ledger(sale)',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(485,	'supplier_actual_ledger_sup',	'Supplier Actual Ledger(supplier)',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(486,	'supplier_payment',	'Supplier Payment',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(487,	'supplier_summary',	'Supplier Summary',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(488,	'create_account',	'Create Account',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(489,	'manage_transaction',	'Manage transaction',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(490,	'daily_summary',	'Daily Summary',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(491,	'daily_cashflow',	'Daily Cashflow',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(492,	'custom_report',	'Cutom report',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(493,	'transaction',	'Transaction',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(494,	'add_new_payment',	'Add new payment',	'',	'',	'',	'',	'Adicionar Pagamento',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(495,	'add_receipt',	'Add receipt',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(496,	'add_new_receipt',	'Add new receipt',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(497,	'receipt_amount',	'Receipt amount',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(498,	'transaction_details',	'Transaction details',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(499,	'choose_transaction',	'Choose transaction',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(500,	'transaction_categry',	'Transaction Category',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(501,	'select_account',	'Select Account',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(502,	'transaction_mood',	'Transaction Mood',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(503,	'payment_amount',	'Payment Amount',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(504,	'personal_loan1',	'Personal Loan',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(505,	'company_name_label',	'Company name',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(506,	'root_account',	'Root Account',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(507,	'cash_receipt',	'Cash Receipt',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(508,	'customer_copy',	'Customer Copy',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(509,	'office_copy',	'Office Copy',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(510,	'role_permission',	'Role Permission',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(511,	'add_menu',	'Add Menu',	'',	'',	'',	'',	'Novo Menu',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(512,	'add_role',	'Add Role',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(513,	'role_list',	'Role List',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(514,	'user_assign_role',	'User Assign Role',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'×“×ž×”×—',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(515,	'menu_name',	'Menu Name',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(516,	'menu_url',	'Menu URL',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(517,	'menu_setup',	'Menusetup',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(518,	'menu_entry',	'Menu Entry',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(519,	'menu_list',	'Menu List',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(520,	'module',	'Module',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(521,	'order',	'Order',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(522,	'parent_menu',	'Parent Menu',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(523,	'icon',	'Icon',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(524,	'data_not_found',	'Record not found!',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(525,	'menu_edit',	'Menu Edit',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(526,	'role_name',	'Role Name',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(527,	'back',	'Back',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(528,	'role_edit',	'Role Edit',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(529,	'user_name',	'User Name',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'×“×ž×”×—',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(530,	'assign_user_role',	'Assign User Role',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(531,	'assigned_role',	'Assigned Role',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(532,	'access_role',	'Access Role',	'',	'',	'',	'',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'ã‚¢ã‚¯ã‚»ã‚¹ãƒ­ãƒ¼ãƒ«',	NULL,	NULL,	NULL,	NULL,	NULL),
(533,	'edit_information',	'Edit Information',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(534,	'account_report',	'Account Report',	'',	'',	'',	'',	'RelatÃ³rio da conta',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(535,	'office_loan',	'Office Loan',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(536,	'backup',	'Database Export',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(537,	'daily_summery',	'Daily Summery',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(538,	'manage_user',	'Manage User',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(539,	'forgot_password',	'Forgot Password',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(540,	'password_recovery',	'Password Recovery',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(541,	'database_import',	'Database Import',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(542,	'import',	'Import',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(543,	'db_import',	'Database Import',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(544,	'hrm',	'HRM',	NULL,	'Ø§Ù„Ù…ÙˆØ§Ø±Ø¯ Ø§Ù„Ø¨Ø´Ø±ÙŠØ©',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(545,	'designation',	'Designation',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(546,	'add_employee',	'Add Employee',	'',	'',	'',	'',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(547,	'manage_employee',	'Manage Employee',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(548,	'manage_designation',	'Manage Designation',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(549,	'salary',	'Salary',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(550,	'blood_group',	'Blood Group',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(551,	'country',	'Country',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(552,	'city',	'City',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(553,	'zip',	'Zip',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(554,	'address_line_1',	'Address 1',	'',	'',	'',	'',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(555,	'address_line_2',	'Address 2',	'',	'',	'',	'',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(556,	'picture',	'Picture',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(557,	'employee_ledger',	'Employee Ledger',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(558,	'employee',	'Employee',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(559,	'office',	'Office',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(560,	'loan',	'Loan',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(561,	'employee_name',	'Employee Name',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(562,	'select_supplier',	'Select Supplier',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(563,	'update_transaction',	'Update Transaction',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'×“×ž×”×—',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(564,	'expense_item',	'Expense Item',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(565,	'add_expense',	'Add Expense',	'',	'',	'',	'',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(566,	'manage_expense',	'Manage Expense',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(567,	'expense_item_list',	'Manage Expense Item',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(568,	'check',	'Check',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(569,	'amount',	'Amount',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(570,	'expense_statement',	'Expense Statement',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(571,	'barcode_or_qrcode',	'Barcode/QR-code',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(572,	'manual_barcode_input',	'Manual Barcode Input',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(573,	'employee_update',	'Employee Update',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(574,	'edit',	'Edit',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(575,	'can_create',	'Can Create',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(576,	'can_read',	'Can Read',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(577,	'can_edit',	'Can Edit',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(578,	'can_delete',	'Can Delete',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(579,	'add_office_person',	'Add Office Person',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(580,	'manage_office_loan',	'Manage Office Loan',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(581,	'all',	'All',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(582,	'designation_update_form',	'Designation Update',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(583,	'assign_user_role_edit',	'User Assign Role Edit',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(584,	'layout',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(585,	'add_phrase',	'Add Phrase',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(586,	'footer',	'',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(587,	'select_option',	'-- select one --',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(588,	'already_close',	'Already Closed',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(589,	'header_bgcolor',	'Header Bgcolor',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(590,	'sidebar_bgcolor',	'Sidebar Bgcolor',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(591,	'logo_bgcolor',	'Logo Bgcolor',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(592,	'treeview_bgcolor',	'Treeview Bgcolor',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(593,	'link_hover',	'Linkhover Bgcolor',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(594,	'font_color',	'Font Color',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(595,	'all_icon',	'All Icon',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(596,	'total_debit',	'Total Debit',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(597,	'total_credit',	'Total Credit',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(598,	'total_balance',	'Total Balance',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(599,	'library',	'Library',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(600,	'qty',	'Qnty',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(601,	'purchase_id',	'Purchase ID',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(602,	'social_network',	'Social Network',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(603,	'mini_logo',	'Mini Logo',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(604,	'security_character',	'@!#$%^&*()_+[]{}?:;|\'`/><',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(605,	'invoice_total',	'Invoice Total',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(606,	'total_purchase_tk',	'Total Purchase',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(607,	'total_sales_tk',	'Total Sales',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(608,	'add_expense_item',	'Add Expense Item',	'',	'',	'',	'',	'',	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(609,	'admin_login_area',	'Admin Login Area',	NULL,	'',	'',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(610,	'sms_configuration',	'SMS Configuration',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(611,	'sender_name',	'Sender Name',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(612,	'receiver_name',	'Receiver Name',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(613,	'provider_name',	'Provider Name',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(614,	'update_successfully',	'Update successfully',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'×“×ž×”×—',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(615,	'customer_receive',	'Customer Receive',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(616,	'quantity_box',	'Quantity/Box',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(617,	'mail_configuration',	'Mail Configuration',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(618,	'protocol',	'Protocol',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(619,	'smtp_host',	'SMTP HOST',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(620,	'smtp_port',	'SMTP Port',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(621,	'sender_mail',	'Sender Mail',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL),
(622,	'mail_type',	'Mail Type',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(623,	'html',	'HTML',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(624,	'text',	'TEXT',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(625,	'please_configure_your_mail',	'Please Configure Your Mail',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(626,	'find',	'Find',	NULL,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(627,	'purchase_no',	'Purchase No',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(628,	'pashto',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(629,	'french',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(630,	'wacu',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'×“×ž×”×—',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(631,	'date_format',	'Date Format',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(632,	'personal_information',	'Personal Information',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(633,	'positional_information',	'Positional Information',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(634,	'store',	'Store',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(635,	'add_store',	'Add Store',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(636,	'manage_store',	'Manage Store',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(637,	'add_new_store',	'Add New Store',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(638,	'add_warehouse',	'Add Warehouse',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(639,	'manage_warehouse',	'Manage Warehouse',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(640,	'add_new_warehouse',	'Add New Warehouse',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(641,	'warehouse',	'Warehouse',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(642,	'approve_product',	'Approve Product',	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL);

DROP TABLE IF EXISTS `locations_tbl`;
CREATE TABLE `locations_tbl` (
  `id` int(11) NOT NULL,
  `location_id` varchar(50) NOT NULL,
  `location_name` varchar(255) NOT NULL,
  `location_email` varchar(255) NOT NULL DEFAULT 'test@test.com',
  `created_by` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `locations_tbl` (`id`, `location_id`, `location_name`, `location_email`, `created_by`, `created_date`, `status`) VALUES
(2,	'1653644402',	'test',	'test@test.com',	'1',	'2022-05-27 09:40:02',	1),
(3,	'1653644412',	'dfas faff',	'test@test.com',	'1',	'2022-05-27 09:40:12',	1),
(4,	'1653644924',	'dfas faff',	'test@test.com',	'1',	'2022-05-27 09:48:44',	1),
(5,	'1653646210',	'test',	'test@test.com',	'1',	'2022-05-27 10:10:10',	1),
(6,	'1653646644',	'test',	'test@test.com',	'1',	'2022-05-27 10:17:24',	1),
(7,	'1653647903',	'test',	'test@test.com',	'1',	'2022-05-27 10:38:23',	1),
(10,	'1654179452',	'tetetete das 2',	'mjsidtechno@gmail.com',	'1',	'2022-07-20 11:34:43',	1);

DROP TABLE IF EXISTS `mail_config_tbl`;
CREATE TABLE `mail_config_tbl` (
  `id` int(11) NOT NULL,
  `protocol` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `smtp_host` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `smtp_port` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `smtp_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `smtp_pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mailtype` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_invoice` int(11) NOT NULL,
  `is_purchase` int(11) NOT NULL,
  `is_receive` int(11) NOT NULL,
  `is_payment` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `mail_config_tbl` (`id`, `protocol`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `mailtype`, `is_invoice`, `is_purchase`, `is_receive`, `is_payment`, `updated_by`, `updated_date`, `status`) VALUES
(1,	'smtp',	'ssl://smtp.gmail.com',	'465',	'khs2010welfares102@gmail.com',	'bvrayygbwwmxnkdj2010',	'html',	1,	0,	1,	0,	1,	'2019-07-08 18:50:01',	1);

DROP TABLE IF EXISTS `menusetup_tbl`;
CREATE TABLE `menusetup_tbl` (
  `id` int(11) NOT NULL,
  `menu_title` varchar(200) NOT NULL,
  `page_url` varchar(200) NOT NULL,
  `module` varchar(200) NOT NULL,
  `ordering` int(11) DEFAULT NULL,
  `parent_menu` int(11) NOT NULL,
  `is_report` tinyint(1) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `menusetup_tbl` (`id`, `menu_title`, `page_url`, `module`, `ordering`, `parent_menu`, `is_report`, `icon`, `status`, `created_by`, `create_date`) VALUES
(1,	'dashboard',	'',	'dashboard',	1,	0,	0,	'ti-dashboard',	1,	1,	'2019-09-16 16:25:39'),
(2,	'invoice',	'',	'invoice',	2,	0,	0,	'ti-layout-accordion-list',	1,	1,	'2019-09-16 16:26:18'),
(3,	'new_invoice',	'Cinvoice',	'invoice',	1,	2,	0,	'',	0,	1,	'2019-09-16 16:27:33'),
(4,	'manage_invoice',	'Cinvoice/manage_invoice',	'invoice',	2,	2,	0,	'',	1,	1,	'2019-09-16 18:19:41'),
(5,	'pos_invoice',	'Cinvoice/pos_invoice',	'invoice',	3,	2,	0,	'',	1,	1,	'2019-09-16 18:20:12'),
(6,	'category',	'Ccategory',	'product',	1,	9,	0,	'ti-tag',	1,	1,	'2019-09-16 18:20:59'),
(7,	'add_category',	'Ccategory',	'category',	1,	6,	0,	'',	0,	1,	'2019-09-16 18:21:26'),
(8,	'manage_category',	'Ccategory/manage_category',	'category',	2,	6,	0,	'',	0,	1,	'2019-09-16 18:22:50'),
(9,	'product',	'',	'product',	4,	0,	0,	'ti-bag',	1,	1,	'2019-09-16 18:23:56'),
(10,	'add_product',	'Cproduct',	'product',	1,	9,	0,	'',	1,	1,	'2019-09-16 18:24:22'),
(11,	'manage_product',	'Cproduct/manage_product',	'product',	2,	9,	0,	'',	1,	1,	'2019-09-16 18:26:22'),
(12,	'customer',	'',	'customer',	5,	0,	0,	'fa fa-handshake-o',	1,	1,	'2019-09-16 18:27:45'),
(13,	'add_customer',	'Ccustomer',	'customer',	1,	12,	0,	'',	1,	1,	'2019-09-16 18:28:35'),
(14,	'manage_customer',	'Ccustomer/manage_customer',	'customer',	2,	12,	0,	'',	1,	1,	'2019-09-16 18:29:09'),
(15,	'credit_customer',	'Ccustomer/credit_customer',	'customer',	3,	12,	0,	'',	1,	1,	'2019-09-16 18:29:42'),
(16,	'paid_customer',	'Ccustomer/paid_customer',	'customer',	4,	12,	0,	'',	1,	1,	'2019-09-16 18:30:01'),
(17,	'supplier',	'',	'supplier',	6,	0,	0,	'ti-user',	1,	1,	'2019-09-16 18:30:56'),
(18,	'add_supplier',	'Csupplier',	'supplier',	1,	17,	0,	'',	1,	1,	'2019-09-16 18:31:17'),
(19,	'manage_supplier',	'Csupplier/manage_supplier',	'supplier',	2,	17,	0,	'',	1,	1,	'2019-09-16 18:31:43'),
(20,	'supplier_ledger',	'Csupplier/supplier_ledger_report',	'supplier',	3,	17,	0,	'',	1,	1,	'2019-09-16 18:32:21'),
(21,	'supplier_actual_ledger_sale',	'Csupplier/supplier_actual_ledger_sales_price',	'supplier',	4,	17,	0,	'',	1,	1,	'2019-09-16 18:33:21'),
(22,	'supplier_payment_ledger',	'Csupplier/supplier_payment',	'supplier',	5,	17,	0,	'',	1,	1,	'2019-09-16 18:42:06'),
(23,	'supplier_sales_details',	'Csupplier/supplier_sales_details_all',	'supplier',	6,	17,	0,	'',	1,	1,	'2019-09-16 18:42:39'),
(24,	'purchase',	'',	'purchase',	7,	0,	0,	'ti-shopping-cart',	1,	1,	'2019-09-16 18:43:19'),
(25,	'add_purchase',	'Cpurchase',	'purchase',	1,	24,	0,	'',	1,	1,	'2019-09-16 18:43:44'),
(26,	'manage_purchase',	'Cpurchase/manage_purchase',	'purchase',	2,	24,	0,	'',	1,	1,	'2019-09-16 18:44:17'),
(27,	'accounts',	'',	'accounts',	8,	0,	0,	'fa fa-money',	0,	1,	'2019-09-16 18:45:18'),
(38,	'stock',	'',	'stock',	9,	0,	0,	'ti-bar-chart',	1,	1,	'2019-09-16 19:56:14'),
(39,	'stock_report',	'Creport',	'stock',	1,	38,	0,	'',	1,	1,	'2019-09-16 19:57:03'),
(40,	'stock_report_supplier_wise',	'Creport/stock_report_supplier_wise',	'stock',	2,	38,	0,	'',	1,	1,	'2019-09-16 19:57:26'),
(41,	'stock_report_product_wise',	'Creport/stock_report_product_wise',	'stock',	3,	38,	0,	'',	1,	1,	'2019-09-16 19:57:57'),
(42,	'report',	'',	'report',	10,	0,	0,	'ti-book',	1,	1,	'2019-09-16 19:59:32'),
(43,	'todays_report',	'Admin_dashboard/all_report',	'report',	1,	42,	0,	'',	1,	1,	'2019-09-16 20:00:43'),
(44,	'sales_report',	'Admin_dashboard/todays_sales_report',	'report',	2,	42,	0,	'',	1,	1,	'2019-09-16 20:01:16'),
(45,	'purchase_report',	'Admin_dashboard/todays_purchase_report',	'report',	0,	42,	0,	'',	1,	1,	'2019-09-16 20:06:54'),
(46,	'sales_report_product_wise',	'Admin_dashboard/product_sales_reports_date_wise',	'report',	0,	42,	0,	'',	1,	1,	'2019-09-16 20:08:08'),
(47,	'profit_report',	'Admin_dashboard/total_profit_report',	'report',	0,	42,	0,	'',	1,	1,	'2019-09-16 20:08:25'),
(48,	'bank',	'',	'bank',	11,	0,	0,	'ti-briefcase',	0,	1,	'2019-09-16 20:09:14'),
(49,	'add_new_bank',	'Csettings/index',	'bank',	1,	48,	0,	'',	0,	1,	'2019-09-16 20:09:37'),
(50,	'bank_transection',	'Csettings/bank_transaction',	'bank',	2,	48,	0,	'',	0,	1,	'2019-09-16 20:10:02'),
(51,	'manage_bank',	'Csettings/bank_list',	'bank',	3,	48,	0,	'',	0,	1,	'2019-09-16 20:10:24'),
(52,	'commission',	'',	'commission',	12,	0,	0,	'ti-layout-grid2',	0,	1,	'2019-09-16 20:11:44'),
(53,	'generate_commission',	'Csettings/commission',	'commission',	0,	52,	0,	'',	1,	1,	'2019-09-16 20:12:14'),
(54,	'office_loan',	'',	'office_loan',	13,	0,	0,	'fa fa-university',	0,	1,	'2019-09-16 20:15:40'),
(55,	'add_office_person',	'Cloan/add1_person',	'office_loan',	0,	54,	0,	'',	0,	1,	'2019-09-16 20:16:35'),
(56,	'manage_office_loan',	'Cloan/manage1_person',	'office_loan',	2,	54,	0,	'',	0,	1,	'2019-09-16 20:19:51'),
(57,	'personal_loan',	'',	'personal_loan',	14,	0,	0,	'fa fa-user-circle',	0,	1,	'2019-09-16 20:25:01'),
(58,	'add_person',	'Csettings/add_person',	'personal_loan',	1,	57,	0,	'',	0,	1,	'2019-09-16 20:27:16'),
(59,	'manage_person',	'Csettings/manage_person',	'personal_loan',	2,	57,	0,	'',	0,	1,	'2019-09-16 20:27:47'),
(60,	'add_loan',	'Csettings/add_loan',	'personal_loan',	3,	57,	0,	'',	0,	1,	'2019-09-16 20:28:16'),
(61,	'manage_loan',	'Csettings/manage_loan',	'personal_loan',	4,	57,	0,	'',	0,	1,	'2019-09-16 20:28:39'),
(62,	'add_payment',	'Csettings/add_payment',	'personal_loan',	5,	57,	0,	'',	0,	1,	'2019-09-16 20:29:26'),
(63,	'data_synchronizer',	'',	'data_synchronizer',	15,	0,	0,	'ti-reload',	0,	1,	'2019-09-16 20:29:52'),
(64,	'backup',	'Backup_restore',	'data_synchronizer',	1,	63,	0,	'',	1,	1,	'2019-09-16 20:30:31'),
(65,	'role_permission',	'',	'role_permission',	16,	0,	0,	'ti-settings',	1,	1,	'2019-09-16 20:31:13'),
(66,	'add_menu',	'CRole/menu_setup',	'role_permission',	1,	65,	0,	'',	1,	1,	'2019-09-16 20:31:40'),
(67,	'add_role',	'CRole/role_permission',	'role_permission',	2,	65,	0,	'',	1,	1,	'2019-09-16 20:31:59'),
(68,	'role_list',	'CRole/role_list',	'role_permission',	3,	65,	0,	'',	1,	1,	'2019-09-16 20:32:21'),
(69,	'user_assign_role',	'CRole/user_role',	'role_permission',	4,	65,	0,	'',	1,	1,	'2019-09-16 20:32:49'),
(70,	'assigned_role',	'CRole/access_role',	'role_permission',	5,	65,	0,	'',	1,	1,	'2019-09-16 20:33:10'),
(71,	'web_settings',	'',	'web_settings',	17,	0,	0,	'ti-settings',	1,	1,	'2019-09-16 20:33:53'),
(72,	'manage_company',	'Company_setup/manage_company',	'web_settings',	1,	71,	0,	'',	1,	1,	'2019-09-16 20:34:15'),
(73,	'add_user',	'User',	'web_settings',	2,	71,	0,	'',	1,	1,	'2019-09-16 20:34:33'),
(74,	'manage_user',	'User/manage_user',	'web_settings',	3,	71,	0,	'',	1,	1,	'2019-09-16 20:34:54'),
(75,	'language',	'Language',	'web_settings',	4,	71,	0,	'',	1,	1,	'2019-09-16 20:35:38'),
(76,	'setting',	'Cweb_setting',	'web_settings',	5,	71,	0,	'',	1,	1,	'2019-09-16 20:36:05'),
(77,	'create_account',	'Account_Controller',	'accounts',	1,	27,	0,	'',	1,	1,	'2019-09-16 21:16:05'),
(78,	'manage_account',	'Account_Controller/manage_account',	'accounts',	2,	27,	0,	'',	1,	1,	'2019-09-16 21:18:48'),
(79,	'payment',	'Cpayment',	'accounts',	3,	27,	0,	'',	1,	1,	'2019-09-16 21:19:57'),
(80,	'receipt',	'Cpayment/receipt_transaction',	'accounts',	4,	27,	0,	'',	1,	1,	'2019-09-16 21:20:41'),
(81,	'manage_transaction',	'Cpayment/manage_payment',	'accounts',	5,	27,	0,	'',	1,	1,	'2019-09-16 21:22:07'),
(82,	'closing',	'Cpayment/closing',	'accounts',	6,	27,	0,	'',	1,	1,	'2019-09-16 21:23:13'),
(83,	'account_report',	'',	'accounts',	7,	27,	0,	'',	1,	1,	'2019-09-16 21:25:32'),
(84,	'daily_summery',	'Cpayment/summaryy',	'accounts',	0,	83,	0,	'',	1,	1,	'2019-09-16 21:26:23'),
(85,	'daily_cashflow',	'Cpayment/date_summary',	'accounts',	0,	83,	0,	'',	1,	1,	'2019-09-16 21:27:33'),
(86,	'closing_report',	'Cpayment/closing_report',	'accounts',	0,	83,	0,	'',	1,	1,	'2019-09-16 21:28:07'),
(87,	'database_import',	'Backup_restore/import_form',	'data_synchronizer',	0,	63,	0,	'',	1,	1,	'2019-09-20 19:05:31'),
(88,	'hrm',	'',	'hrm',	11,	0,	0,	'fa fa-user',	0,	1,	'2019-09-22 02:31:22'),
(89,	'designation',	'Chrm/manage_designation',	'hrm',	0,	88,	0,	'',	0,	1,	'2019-09-22 02:33:39'),
(90,	'add_employee',	'Chrm/add_employee',	'hrm',	0,	88,	0,	'',	0,	1,	'2019-09-22 02:35:13'),
(91,	'manage_employee',	'Chrm/manage_employee',	'hrm',	0,	88,	0,	'',	0,	1,	'2019-09-22 02:35:45'),
(92,	'expense',	'',	'expense',	12,	0,	0,	'fa fa-credit-card',	0,	1,	'2019-09-23 21:44:43'),
(93,	'expense_item',	'CExpense/expense_item',	'expense',	0,	92,	0,	'',	0,	1,	'2019-09-23 21:45:47'),
(94,	'add_expense',	'CExpense/add_expense',	'expense',	0,	92,	0,	'',	0,	1,	'2019-09-23 21:46:21'),
(95,	'manage_expense',	'CExpense/manage_expense',	'expense',	0,	92,	0,	'',	0,	1,	'2019-09-23 21:46:53'),
(96,	'expense_statement',	'CExpense/expense_statement',	'expense',	0,	92,	0,	'',	0,	1,	'2019-09-23 21:57:59'),
(98,	'sms_configuration',	'Cweb_setting/sms_configuration',	'Web settings',	0,	71,	0,	'',	1,	1,	'2019-10-31 03:36:58'),
(99,	'mail_configuration',	'Cweb_setting/mail_configuration',	'Web settings',	0,	71,	0,	'',	1,	1,	'2019-10-31 03:37:34'),
(100,	'Store',	'',	'store',	1,	0,	0,	'fa fa-map-marker',	1,	1,	'2019-09-16 18:43:19'),
(101,	'add_store',	'Clocation',	'store',	1,	100,	0,	'',	1,	1,	'2019-09-16 18:24:22'),
(102,	'manage_store',	'Clocation/manage_location',	'store',	2,	100,	0,	'',	1,	1,	'2019-09-16 18:24:22'),
(103,	'dispatch',	'',	'dispatch',	3,	0,	0,	'hvr-buzz-out fa fa-send',	0,	1,	'2022-06-02 23:00:04'),
(104,	'View',	'Cdispatch/view',	'dispatch',	3,	103,	0,	'',	1,	1,	'2022-06-02 23:01:51'),
(105,	'Warehouse',	'',	'warehouse',	1,	0,	0,	'glyphicon glyphicon-briefcase',	0,	1,	'2022-07-01 12:56:08'),
(106,	'add_warehouse',	'CWarehouse',	'warehouse',	2,	105,	0,	'',	1,	1,	'2022-07-01 12:58:36'),
(107,	'manage_warehouse',	'CWarehouse/manage_warehouse',	'web_settings',	3,	105,	0,	'',	1,	1,	'2019-09-16 18:24:22'),
(108,	'manage_warehouse',	'CWarehouse/manage_warehouse',	'warehouse',	0,	71,	0,	'',	1,	1,	'2019-10-31 03:37:34'),
(109,	'approve_product',	'Cproduct/approve_product',	'product',	2,	9,	0,	'',	1,	1,	'2019-09-16 18:26:22');

DROP TABLE IF EXISTS `new_product_approve`;
CREATE TABLE `new_product_approve` (
  `approve_pid` int(11) NOT NULL,
  `approve_product` int(11) NOT NULL,
  `approve_product_price` int(11) NOT NULL,
  `warehouseid` varchar(255) NOT NULL,
  `approvestatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `notes`;
CREATE TABLE `notes` (
  `note_id` int(11) NOT NULL,
  `cash_date` varchar(20) DEFAULT NULL,
  `1000n` varchar(11) DEFAULT NULL,
  `500n` varchar(11) DEFAULT NULL,
  `100n` varchar(11) DEFAULT NULL,
  `50n` varchar(11) DEFAULT NULL,
  `20n` varchar(11) DEFAULT NULL,
  `10n` varchar(11) DEFAULT NULL,
  `5n` varchar(11) DEFAULT NULL,
  `2n` varchar(11) DEFAULT NULL,
  `1n` varchar(30) DEFAULT NULL,
  `grandtotal` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `outflow_1td1fz8uvv`;
CREATE TABLE `outflow_1td1fz8uvv` (
  `transection_id` varchar(200) NOT NULL,
  `tracing_id` varchar(200) NOT NULL,
  `payment_type` varchar(10) NOT NULL,
  `date` varchar(255) NOT NULL,
  `amount` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `outflow_pt3vxiow9x`;
CREATE TABLE `outflow_pt3vxiow9x` (
  `transection_id` varchar(200) NOT NULL,
  `tracing_id` varchar(200) NOT NULL,
  `payment_type` varchar(10) NOT NULL,
  `date` varchar(255) NOT NULL,
  `amount` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `personal_loan`;
CREATE TABLE `personal_loan` (
  `per_loan_id` int(11) NOT NULL,
  `transaction_id` varchar(30) NOT NULL,
  `person_id` varchar(30) NOT NULL,
  `debit` float NOT NULL,
  `credit` float NOT NULL,
  `date` varchar(30) NOT NULL,
  `details` varchar(100) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=no paid,2=paid'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `person_information`;
CREATE TABLE `person_information` (
  `person_id` varchar(50) NOT NULL,
  `person_name` varchar(50) NOT NULL,
  `person_phone` varchar(50) NOT NULL,
  `person_address` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `person_ledger`;
CREATE TABLE `person_ledger` (
  `transaction_id` varchar(50) NOT NULL,
  `person_id` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `debit` float NOT NULL,
  `credit` float NOT NULL,
  `details` text NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=no paid,2=paid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `pesonal_loan_information`;
CREATE TABLE `pesonal_loan_information` (
  `person_id` varchar(50) NOT NULL,
  `person_name` varchar(50) NOT NULL,
  `person_phone` varchar(30) NOT NULL,
  `person_address` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `product_category`;
CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `product_category` (`id`, `category_id`, `category_name`, `status`) VALUES
(80,	'E58KHWWEH7DHCHB',	'test',	1),
(81,	'WN4BNZFVE9O59K9',	'ex',	1),
(0,	'OU7HNLA5IP3E5EE',	'DRY',	1);

DROP TABLE IF EXISTS `product_information`;
CREATE TABLE `product_information` (
  `id` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `supplier_id` varchar(255) NOT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `supplier_price` float DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `cartoon_quantity` int(11) DEFAULT NULL,
  `tax` float DEFAULT NULL,
  `product_model` varchar(100) NOT NULL,
  `product_details` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `product_information` (`id`, `product_id`, `supplier_id`, `category_id`, `product_name`, `price`, `supplier_price`, `unit`, `cartoon_quantity`, `tax`, `product_model`, `product_details`, `image`, `status`) VALUES
(269,	'123',	'6R9SE15QTXH7AR3MTVIN',	'',	'test',	12,	10,	NULL,	1,	0,	'1',	'',	'http://phpstack-539799-2543039.cloudwaysapps.com/my-assets/image/product.png',	1),
(270,	'375',	'6R9SE15QTXH7AR3MTVIN',	'E58KHWWEH7DHCHB',	'Saad Test',	1,	1,	NULL,	100,	NULL,	'123',	'',	'http://phpstack-539799-2543039.cloudwaysapps.com/my-assets/image/product.png',	1),
(271,	'62271465',	'GKEI2YBJU263DD778V6H',	'WN4BNZFVE9O59K9',	'product testi',	0,	NULL,	NULL,	100,	NULL,	'123-Model',	'detail',	'http://phpstack-539799-2543039.cloudwaysapps.com/my-assets/image/product.png',	1),
(272,	'37',	'GKEI2YBJU263DD778V6H',	'E58KHWWEH7DHCHB',	'name 2 2 2',	0,	NULL,	NULL,	100,	NULL,	'213456677',	'asdad',	'http://phpstack-539799-2543039.cloudwaysapps.com/my-assets/image/product.png',	1),
(273,	'43728798',	'GKEI2YBJU263DD778V6H',	'E58KHWWEH7DHCHB',	'Mobile',	0,	NULL,	NULL,	100,	0,	'New Model',	'this is mobile',	'http://phpstack-539799-2543039.cloudwaysapps.com/my-assets/image/product.png',	1),
(274,	'new',	'GKEI2YBJU263DD778V6H',	'E58KHWWEH7DHCHB',	'new product',	0,	NULL,	NULL,	10,	0,	'abc',	'new product',	'http://phpstack-539799-2543039.cloudwaysapps.com/my-assets/image/product.png',	1),
(275,	'43',	'6R9SE15QTXH7AR3MTVIN',	'E58KHWWEH7DHCHB',	'snk bx',	0,	NULL,	NULL,	500,	0,	'snk',	'',	'http://phpstack-539799-2543039.cloudwaysapps.com/my-assets/image/product.png',	1),
(280,	'9960',	'GKEI2YBJU263DD778V6H',	'E58KHWWEH7DHCHB',	'T-shirt',	54,	NULL,	NULL,	12,	NULL,	'12',	'55',	'http://phpstack-539799-2543039.cloudwaysapps.com/my-assets/image/product.png',	1),
(281,	'39488651',	'6R9SE15QTXH7AR3MTVIN',	'',	'Dinner Bx',	0,	NULL,	NULL,	500,	0,	'Dinner',	'',	'http://www.kfcdry.online/my-assets/image/product.png',	1);

DROP TABLE IF EXISTS `product_location_tbl`;
CREATE TABLE `product_location_tbl` (
  `id` int(11) NOT NULL,
  `warehouseid` varchar(250) NOT NULL,
  `product_id` varchar(250) NOT NULL,
  `location_id` varchar(250) NOT NULL,
  `price_one` int(11) NOT NULL,
  `price_two` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `product_location_tbl` (`id`, `warehouseid`, `product_id`, `location_id`, `price_one`, `price_two`, `created_by`, `status`) VALUES
(15,	'1656944045',	'37392785',	'1654179452',	55,	66,	1,	1),
(16,	'1656944045',	'23412321',	'1654179452',	88,	90,	1,	1),
(17,	'1656944045',	'234',	'1654179452',	74,	99,	1,	1),
(18,	'1656944045',	'123',	'1654179452',	44,	55,	1,	1),
(19,	'1656944045',	'234',	'1653875431',	55,	77,	1,	1);

DROP TABLE IF EXISTS `product_purchase`;
CREATE TABLE `product_purchase` (
  `id` bigint(20) NOT NULL,
  `purchase_id` varchar(100) NOT NULL,
  `chalan_no` varchar(100) NOT NULL,
  `supplier_id` varchar(100) NOT NULL,
  `grand_total_amount` float NOT NULL,
  `purchase_date` varchar(50) NOT NULL,
  `purchase_details` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `product_purchase` (`id`, `purchase_id`, `chalan_no`, `supplier_id`, `grand_total_amount`, `purchase_date`, `purchase_details`, `status`) VALUES
(249,	'20220512212324',	'1',	'6R9SE15QTXH7AR3MTVIN',	20,	'2022-05-12',	'',	1),
(250,	'20220516064636',	'11',	'6R9SE15QTXH7AR3MTVIN',	0,	'2022-05-16',	'',	1),
(251,	'20220516111105',	'11',	'6R9SE15QTXH7AR3MTVIN',	0,	'2022-05-16',	'test',	1),
(252,	'20220520174059',	'444',	'6R9SE15QTXH7AR3MTVIN',	0,	'2022-05-20',	'',	1),
(253,	'20220520174116',	'444',	'6R9SE15QTXH7AR3MTVIN',	0,	'2022-05-20',	'',	1),
(254,	'20220521021923',	'1',	'6R9SE15QTXH7AR3MTVIN',	0,	'2022-05-21',	'',	1),
(255,	'20220524031646',	'444',	'6R9SE15QTXH7AR3MTVIN',	10,	'2022-05-24',	'',	1),
(256,	'20220608032342',	'1234',	'6R9SE15QTXH7AR3MTVIN',	100,	'2022-06-08',	'',	1),
(257,	'20220707121945',	'8900',	'GKEI2YBJU263DD778V6H',	50000,	'2022-07-07',	'8900',	1),
(258,	'20220707172407',	'5600',	'',	12,	'2022-07-07',	'5600',	1),
(259,	'20220707172632',	'9000',	'',	48,	'2022-07-07',	'9000',	1),
(260,	'20220707175425',	'5233',	'6R9SE15QTXH7AR3MTVIN',	12,	'2022-07-07',	'5233',	1),
(261,	'20220707175553',	'5255',	'6R9SE15QTXH7AR3MTVIN',	36,	'2022-07-07',	'5255',	1),
(262,	'20220707182831',	'550022',	'6R9SE15QTXH7AR3MTVIN',	224,	'2022-07-07',	'550022',	1),
(263,	'20220707191539',	'656511',	'6R9SE15QTXH7AR3MTVIN',	45000,	'2022-07-07',	'656511',	1),
(264,	'20220707192422',	'5525',	'6R9SE15QTXH7AR3MTVIN',	15000,	'2022-07-07',	'5525',	1),
(265,	'20220726181213',	'6300',	'6R9SE15QTXH7AR3MTVIN',	72,	'2022-07-26',	'6300',	1);

DROP TABLE IF EXISTS `product_purchase_details`;
CREATE TABLE `product_purchase_details` (
  `id` int(11) NOT NULL,
  `purchase_detail_id` varchar(100) NOT NULL,
  `purchase_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rate` float NOT NULL,
  `total_amount` float NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `product_purchase_details` (`id`, `purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `status`) VALUES
(261,	'alGeIed4WUpd0eJ',	'20220512212324',	'123',	2,	10,	20,	1),
(262,	'Fnr7SlMUZReD2LE',	'20220516064636',	'123',	0,	222,	0,	1),
(263,	'inOpOS5duotLzCq',	'20220516111105',	'123',	0,	1,	0,	1),
(264,	'cefa7zIdLe7vHHH',	'20220520174059',	'123',	0,	0,	0,	1),
(265,	'xXhEtRoMRLekQUv',	'20220520174116',	'123',	0,	0,	0,	1),
(266,	'BNapyqt5Lygsn8Y',	'20220521021923',	'123',	0,	1,	0,	1),
(267,	'VCu9zOp8H85NVkc',	'20220524031646',	'123',	1,	10,	10,	1),
(268,	'cyAj9eC5HewwGHD',	'20220608032342',	'234',	1,	100,	100,	1),
(269,	'4GrzrUwGTJd3p',	'20220707121945',	'37392785',	500,	100,	50000,	1),
(270,	'CfFZHKeohDMAEjf',	'20220707172407',	'123',	1,	12,	12,	1),
(271,	'nKLGmhKZf2ILgqh',	'20220707172632',	'123',	4,	12,	48,	1),
(272,	'DNDdzvPz5C3TuxO',	'20220707175425',	'123',	1,	12,	12,	1),
(273,	'8cvGZuUuNbUQPin',	'20220707175553',	'123',	3,	12,	36,	1),
(274,	'HtC1QQ73xmVsDVs',	'20220707182831',	'123',	2,	12,	24,	1),
(275,	'iSUZts1LHt3tll2',	'20220707182831',	'375',	200,	1,	200,	1),
(276,	'tRtmN3gv8UL6Llw',	'20220707191539',	'123',	1,	50,	50,	1),
(277,	'h2nUHB3QDMKilAK',	'20220707191539',	'375',	100,	1,	100,	1),
(278,	'2KvO0FGkzDue9O7',	'20220707192422',	'375',	100,	150,	15000,	1),
(279,	'RYqmhczhvgmScsj',	'20220726181213',	'123',	6,	12,	72,	1),
(289,	'',	'',	'9960',	59,	0,	0,	1);

DROP TABLE IF EXISTS `product_report`;
CREATE TABLE `product_report` (
  `date` varchar(50) DEFAULT NULL,
  `product_id` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `rate` float DEFAULT NULL,
  `total_amount` float DEFAULT NULL,
  `account` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `product_supplier`;
CREATE TABLE `product_supplier` (
  `product_id` varchar(100) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `supplier_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `purchase_report`;
CREATE TABLE `purchase_report` (
  `purchase_date` varchar(50) DEFAULT NULL,
  `chalan_no` varchar(100) DEFAULT NULL,
  `supplier_id` varchar(100) DEFAULT NULL,
  `purchase_detail_id` varchar(100) DEFAULT NULL,
  `purchase_id` varchar(100) DEFAULT NULL,
  `product_id` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `rate` float DEFAULT NULL,
  `total_amount` float DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `return_goods`;
CREATE TABLE `return_goods` (
  `returnId` int(11) NOT NULL,
  `invoiceid` varchar(100) NOT NULL,
  `return_type` varchar(250) NOT NULL,
  `returnGoodId` int(11) NOT NULL,
  `totalQty` int(11) NOT NULL,
  `totalRate` int(11) NOT NULL,
  `goodQuantity` float NOT NULL,
  `storeId` int(11) NOT NULL,
  `acceptStatus` int(11) NOT NULL,
  `createdby` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `return_goods` (`returnId`, `invoiceid`, `return_type`, `returnGoodId`, `totalQty`, `totalRate`, `goodQuantity`, `storeId`, `acceptStatus`, `createdby`) VALUES
(159,	'3311385914',	'product',	9960,	1,	55,	0,	1654179452,	0,	'Rj6pL90yugYUqjA'),
(160,	'3311385914',	'product',	123,	6,	12,	2,	1654179452,	1,	'Rj6pL90yugYUqjA');

DROP TABLE IF EXISTS `role_permission_tbl`;
CREATE TABLE `role_permission_tbl` (
  `id` bigint(20) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `can_access` tinyint(1) NOT NULL,
  `can_create` tinyint(1) NOT NULL,
  `can_edit` tinyint(1) NOT NULL,
  `can_delete` tinyint(1) NOT NULL,
  `created_by` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `role_permission_tbl` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `created_by`, `create_date`) VALUES
(2395,	12,	1,	1,	1,	0,	1,	1,	'2022-06-02 22:43:20'),
(2396,	12,	100,	1,	1,	1,	1,	1,	'2022-06-02 22:43:20'),
(2397,	12,	101,	1,	1,	1,	1,	1,	'2022-06-02 22:43:20'),
(2398,	12,	102,	1,	1,	1,	1,	1,	'2022-06-02 22:43:20'),
(2399,	12,	2,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2400,	12,	3,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2401,	12,	4,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2402,	12,	5,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2403,	12,	6,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2404,	12,	9,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2405,	12,	10,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2406,	12,	11,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2407,	12,	12,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2408,	12,	13,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2409,	12,	14,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2410,	12,	15,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2411,	12,	16,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2412,	12,	17,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2413,	12,	18,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2414,	12,	19,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2415,	12,	20,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2416,	12,	21,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2417,	12,	22,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2418,	12,	23,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2419,	12,	24,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2420,	12,	25,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2421,	12,	26,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2422,	12,	27,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2423,	12,	77,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2424,	12,	78,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2425,	12,	79,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2426,	12,	80,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2427,	12,	81,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2428,	12,	82,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2429,	12,	83,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2430,	12,	84,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2431,	12,	85,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2432,	12,	86,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2433,	12,	38,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2434,	12,	39,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2435,	12,	40,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2436,	12,	41,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2437,	12,	42,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2438,	12,	43,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2439,	12,	44,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2440,	12,	45,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2441,	12,	46,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2442,	12,	47,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2443,	12,	48,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2444,	12,	49,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2445,	12,	50,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2446,	12,	51,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2447,	12,	88,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2448,	12,	89,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2449,	12,	90,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2450,	12,	91,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2451,	12,	92,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2452,	12,	93,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2453,	12,	94,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2454,	12,	95,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2455,	12,	96,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2456,	12,	54,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2457,	12,	55,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2458,	12,	56,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2459,	12,	57,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2460,	12,	58,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2461,	12,	59,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2462,	12,	60,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2463,	12,	61,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2464,	12,	62,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2465,	12,	65,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2466,	12,	66,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2467,	12,	67,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2468,	12,	68,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2469,	12,	69,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2470,	12,	70,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2471,	12,	71,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2472,	12,	72,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2473,	12,	73,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2474,	12,	74,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2475,	12,	75,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2476,	12,	76,	0,	0,	0,	0,	1,	'2022-06-02 22:43:20'),
(2630,	12,	105,	1,	1,	1,	1,	1,	'2022-06-02 22:43:20'),
(2631,	12,	106,	1,	1,	1,	1,	1,	'2022-06-02 22:43:20'),
(2980,	15,	1,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(2981,	15,	100,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(2982,	15,	101,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(2983,	15,	102,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(2984,	15,	2,	1,	1,	0,	1,	1,	'2022-07-07 09:52:54'),
(2985,	15,	3,	1,	1,	0,	1,	1,	'2022-07-07 09:52:54'),
(2986,	15,	4,	1,	1,	0,	1,	1,	'2022-07-07 09:52:54'),
(2987,	15,	5,	1,	1,	0,	1,	1,	'2022-07-07 09:52:54'),
(2988,	15,	6,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(2989,	15,	9,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(2990,	15,	10,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(2991,	15,	11,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(2992,	15,	12,	1,	1,	1,	1,	1,	'2022-07-07 09:52:54'),
(2993,	15,	13,	1,	1,	1,	1,	1,	'2022-07-07 09:52:54'),
(2994,	15,	14,	1,	1,	1,	1,	1,	'2022-07-07 09:52:54'),
(2995,	15,	15,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(2996,	15,	16,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(2997,	15,	17,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(2998,	15,	18,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(2999,	15,	19,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3000,	15,	20,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3001,	15,	21,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3002,	15,	22,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3003,	15,	23,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3004,	15,	24,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3005,	15,	25,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3006,	15,	26,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3007,	15,	38,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3008,	15,	39,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3009,	15,	40,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3010,	15,	41,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3011,	15,	42,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3012,	15,	43,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3013,	15,	44,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3014,	15,	45,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3015,	15,	46,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3016,	15,	47,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3017,	15,	65,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3018,	15,	66,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3019,	15,	67,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3020,	15,	68,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3021,	15,	69,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3022,	15,	70,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3023,	15,	71,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3024,	15,	72,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3025,	15,	73,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3026,	15,	74,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3027,	15,	75,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3028,	15,	76,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3029,	15,	107,	0,	0,	0,	0,	1,	'2022-07-07 09:52:54'),
(3129,	14,	1,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3130,	14,	100,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3131,	14,	101,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3132,	14,	102,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3133,	14,	2,	1,	0,	1,	1,	1,	'2022-07-20 10:46:02'),
(3134,	14,	4,	1,	1,	0,	0,	1,	'2022-07-20 10:46:02'),
(3135,	14,	5,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3136,	14,	6,	1,	1,	1,	1,	1,	'2022-07-20 10:46:02'),
(3137,	14,	9,	1,	1,	1,	1,	1,	'2022-07-20 10:46:02'),
(3138,	14,	10,	1,	1,	1,	1,	1,	'2022-07-20 10:46:02'),
(3139,	14,	11,	1,	1,	1,	1,	1,	'2022-07-20 10:46:02'),
(3140,	14,	12,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3141,	14,	13,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3142,	14,	14,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3143,	14,	15,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3144,	14,	16,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3145,	14,	17,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3146,	14,	18,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3147,	14,	19,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3148,	14,	20,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3149,	14,	21,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3150,	14,	22,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3151,	14,	23,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3152,	14,	24,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3153,	14,	25,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3154,	14,	26,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3155,	14,	38,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3156,	14,	39,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3157,	14,	40,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3158,	14,	41,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3159,	14,	42,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3160,	14,	43,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3161,	14,	44,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3162,	14,	45,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3163,	14,	46,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3164,	14,	47,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3165,	14,	65,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3166,	14,	66,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3167,	14,	67,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3168,	14,	68,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3169,	14,	69,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3170,	14,	70,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3171,	14,	71,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3172,	14,	72,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3173,	14,	73,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3174,	14,	74,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3175,	14,	75,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3176,	14,	76,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02'),
(3177,	14,	107,	0,	0,	0,	0,	1,	'2022-07-20 10:46:02');

DROP TABLE IF EXISTS `role_tbl`;
CREATE TABLE `role_tbl` (
  `id` int(11) NOT NULL,
  `role_name` text CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `created_by` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `role_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `role_tbl` (`id`, `role_name`, `description`, `created_by`, `create_date`, `role_status`) VALUES
(12,	'test',	'',	1,	'2022-06-02 22:42:52',	1),
(14,	'Warehouse manager',	'this is Warehouse manager',	1,	'2022-07-01 12:06:13',	1),
(15,	'Store Manager',	'this is Store Manager',	1,	'2022-07-05 13:40:32',	1);

DROP TABLE IF EXISTS `sales_actual`;
CREATE TABLE `sales_actual` (
  `DATE` varchar(50) DEFAULT NULL,
  `supplier_id` varchar(100) DEFAULT NULL,
  `sub_total` double DEFAULT NULL,
  `no_transection` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `sales_report`;
CREATE TABLE `sales_report` (
  `date` varchar(50) DEFAULT NULL,
  `invoice_id` varchar(100) DEFAULT NULL,
  `invoice_details_id` varchar(100) DEFAULT NULL,
  `customer_id` varchar(100) DEFAULT NULL,
  `supplier_id` varchar(100) DEFAULT NULL,
  `product_id` varchar(100) DEFAULT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `cartoon` float DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `sell_rate` float DEFAULT NULL,
  `supplier_rate` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `sms_gateway`;
CREATE TABLE `sms_gateway` (
  `gateway_id` int(11) NOT NULL,
  `provider_name` text NOT NULL,
  `user` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `authentication` text NOT NULL,
  `link` text NOT NULL,
  `default_status` int(11) NOT NULL DEFAULT 0,
  `is_invoice` int(11) NOT NULL,
  `is_purchase` int(11) NOT NULL,
  `is_receive` int(11) NOT NULL,
  `is_payment` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `sms_gateway` (`gateway_id`, `provider_name`, `user`, `password`, `phone`, `authentication`, `link`, `default_status`, `is_invoice`, `is_purchase`, `is_receive`, `is_payment`, `status`) VALUES
(1,	'NEXMO',	'8a980366',	'ZYGqzDp07oUeMUWQ',	'880170313686989',	'Md. Shahab udin',	'',	0,	1,	0,	1,	0,	1);

DROP TABLE IF EXISTS `stock_history`;
CREATE TABLE `stock_history` (
  `vdate` varchar(50) DEFAULT NULL,
  `product_id` varchar(100) DEFAULT NULL,
  `sell` double DEFAULT NULL,
  `Purchase` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `supplier_information`;
CREATE TABLE `supplier_information` (
  `id` bigint(20) NOT NULL,
  `supplier_id` varchar(100) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `details` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `supplier_information` (`id`, `supplier_id`, `supplier_name`, `address`, `mobile`, `details`, `status`) VALUES
(54,	'6R9SE15QTXH7AR3MTVIN',	'test',	'address',	'123',	'',	1),
(55,	'GKEI2YBJU263DD778V6H',	'New supplier',	'',	'123',	'',	1);

DROP TABLE IF EXISTS `supplier_ledger`;
CREATE TABLE `supplier_ledger` (
  `transaction_id` varchar(100) NOT NULL,
  `supplier_id` varchar(100) NOT NULL,
  `chalan_no` varchar(100) DEFAULT NULL,
  `deposit_no` varchar(50) DEFAULT NULL,
  `amount` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `cheque_no` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `d_c` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `supplier_ledger` (`transaction_id`, `supplier_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES
('2022051255',	'6R9SE15QTXH7AR3MTVIN',	'Adjustment',	NULL,	0,	'Previous Balance',	'',	'',	'2022-05-12',	1,	'c'),
('20220512212324',	'6R9SE15QTXH7AR3MTVIN',	'1',	NULL,	20,	'',	'',	'',	'2022-05-12',	1,	'c'),
('20220516064636',	'6R9SE15QTXH7AR3MTVIN',	'11',	NULL,	0,	'',	'',	'',	'2022-05-16',	1,	'c'),
('20220516111105',	'6R9SE15QTXH7AR3MTVIN',	'11',	NULL,	0,	'test',	'',	'',	'2022-05-16',	1,	'c'),
('20220520174059',	'6R9SE15QTXH7AR3MTVIN',	'444',	NULL,	0,	'',	'',	'',	'2022-05-20',	1,	'c'),
('20220520174116',	'6R9SE15QTXH7AR3MTVIN',	'444',	NULL,	0,	'',	'',	'',	'2022-05-20',	1,	'c'),
('20220521021923',	'6R9SE15QTXH7AR3MTVIN',	'1',	NULL,	0,	'',	'',	'',	'2022-05-21',	1,	'c'),
('20220524031646',	'6R9SE15QTXH7AR3MTVIN',	'444',	NULL,	10,	'',	'',	'',	'2022-05-24',	1,	'c'),
('2022060822',	'GKEI2YBJU263DD778V6H',	'Adjustment',	NULL,	0,	'Previous Balance',	'',	'',	'2022-06-08',	1,	'c'),
('20220608032342',	'6R9SE15QTXH7AR3MTVIN',	'1234',	NULL,	100,	'',	'',	'',	'2022-06-08',	1,	'c'),
('20220707121945',	'GKEI2YBJU263DD778V6H',	'8900',	NULL,	50000,	'8900',	'',	'',	'2022-07-07',	1,	'c'),
('20220707172407',	'',	'5600',	NULL,	12,	'5600',	'',	'',	'2022-07-07',	1,	'c'),
('20220707172632',	'',	'9000',	NULL,	48,	'9000',	'',	'',	'2022-07-07',	1,	'c'),
('20220707175425',	'6R9SE15QTXH7AR3MTVIN',	'5233',	NULL,	12,	'5233',	'',	'',	'2022-07-07',	1,	'c'),
('20220707175553',	'6R9SE15QTXH7AR3MTVIN',	'5255',	NULL,	36,	'5255',	'',	'',	'2022-07-07',	1,	'c'),
('20220707182831',	'6R9SE15QTXH7AR3MTVIN',	'550022',	NULL,	224,	'550022',	'',	'',	'2022-07-07',	1,	'c'),
('20220707191539',	'6R9SE15QTXH7AR3MTVIN',	'656511',	NULL,	45000,	'656511',	'',	'',	'2022-07-07',	1,	'c'),
('20220707192422',	'6R9SE15QTXH7AR3MTVIN',	'5525',	NULL,	15000,	'5525',	'',	'',	'2022-07-07',	1,	'c'),
('20220726181213',	'6R9SE15QTXH7AR3MTVIN',	'6300',	NULL,	72,	'6300',	'',	'',	'2022-07-26',	1,	'c');

DROP TABLE IF EXISTS `synchronizer_setting`;
CREATE TABLE `synchronizer_setting` (
  `id` int(11) NOT NULL,
  `hostname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `port` varchar(10) NOT NULL,
  `debug` varchar(10) NOT NULL,
  `project_root` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `synchronizer_setting` (`id`, `hostname`, `username`, `password`, `port`, `debug`, `project_root`) VALUES
(8,	'70.35.198.244',	'softest3bdtask',	'Ux5O~MBJ#odK',	'21',	'true',	'./public_html/niha/');

DROP TABLE IF EXISTS `tax_information`;
CREATE TABLE `tax_information` (
  `tax_id` varchar(15) NOT NULL,
  `tax` float DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `transection`;
CREATE TABLE `transection` (
  `id` int(11) NOT NULL,
  `transaction_id` varchar(30) NOT NULL,
  `date_of_transection` varchar(30) NOT NULL,
  `transection_type` varchar(30) NOT NULL,
  `transection_category` varchar(30) NOT NULL,
  `transection_mood` varchar(25) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `pay_amount` int(11) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `relation_id` varchar(30) NOT NULL,
  `is_transaction` int(11) NOT NULL COMMENT '0 = invoice and 1 = transaction',
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `transection` (`id`, `transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`, `is_transaction`, `create_date`) VALUES
(1030,	'79ZKODD6QJHM4IJ',	'2022-07-26',	'2',	'2',	'1',	'81',	NULL,	'Cash Paid By Customer',	'TGIB8CZGQKY8MT8',	0,	'2022-07-26 09:21:08'),
(1031,	'DULSL1V3UX7FF77',	'2022-07-26',	'2',	'2',	'1',	'127',	NULL,	'Cash Paid By Customer',	'TGIB8CZGQKY8MT8',	0,	'2022-07-26 14:47:27');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` varchar(15) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `users` (`user_id`, `last_name`, `first_name`, `gender`, `date_of_birth`, `logo`, `status`) VALUES
('ujNH9VHXjR82baZ',	'Manager',	'Warehouse',	NULL,	NULL,	'',	1),
('2SYEY0B7Qdjq8mL',	'new',	'developer',	NULL,	NULL,	NULL,	1),
('Rj6pL90yugYUqjA',	'Old',	'Developer',	NULL,	NULL,	'',	1),
('1',	'Admin',	'Admin',	NULL,	NULL,	'http://phpstack-539799-2543039.cloudwaysapps.com/assets/dist/img/profile_picture/9d23f0ac002b0812ccc61ae57b8b1fb7.jpg',	1);

DROP TABLE IF EXISTS `user_access_tbl`;
CREATE TABLE `user_access_tbl` (
  `role_acc_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_id` varchar(50) CHARACTER SET utf8 NOT NULL,
  `store_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_by` varchar(11) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `user_access_tbl` (`role_acc_id`, `role_id`, `user_id`, `store_id`, `created_by`) VALUES
(91,	1,	'1',	'0',	'1'),
(102,	14,	'ujNH9VHXjR82baZ',	'0',	'1'),
(111,	15,	'Rj6pL90yugYUqjA',	'1654179452',	'1'),
(114,	15,	'2SYEY0B7Qdjq8mL',	'1653875431',	'1');

DROP TABLE IF EXISTS `user_login`;
CREATE TABLE `user_login` (
  `user_id` varchar(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` int(11) DEFAULT NULL,
  `security_code` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `user_login` (`user_id`, `username`, `password`, `user_type`, `security_code`, `status`) VALUES
('ujNH9VHXjR82baZ',	'warehouse@mail.com',	'2ce21bc3082c3b873621e73ec2747177',	2,	NULL,	1),
('2SYEY0B7Qdjq8mL',	'developernew@mail.com',	'2ce21bc3082c3b873621e73ec2747177',	2,	NULL,	1),
('Rj6pL90yugYUqjA',	'developer@mail.com',	'2ce21bc3082c3b873621e73ec2747177',	2,	NULL,	1),
('1',	'admin@mail.com',	'4e60d9a85007ef394d4ddf650ffe1fb8',	1,	NULL,	1);

DROP TABLE IF EXISTS `view_customer_transection`;
CREATE TABLE `view_customer_transection` (
  `transaction_id` varchar(30) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `invoice_no` varchar(100) DEFAULT NULL,
  `receipt_no` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `view_person_transection`;
CREATE TABLE `view_person_transection` (
  `transaction_id` varchar(30) DEFAULT NULL,
  `person_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `view_supplier_transection`;
CREATE TABLE `view_supplier_transection` (
  `transaction_id` varchar(30) DEFAULT NULL,
  `supplier_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `view_transection`;
CREATE TABLE `view_transection` (
  `transaction_id` varchar(30) DEFAULT NULL,
  `date_of_transection` varchar(30) DEFAULT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `pay_amount` int(11) DEFAULT NULL,
  `invoice_no` varchar(100) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `supplier_name` varchar(255) DEFAULT NULL,
  `person_name` varchar(50) DEFAULT NULL,
  `transection_category` varchar(30) DEFAULT NULL,
  `transection_type` varchar(30) DEFAULT NULL,
  `transection_mood` varchar(25) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `relation_id` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `warehouse_tbl`;
CREATE TABLE `warehouse_tbl` (
  `id` int(11) NOT NULL,
  `warehouse_id` varchar(50) NOT NULL,
  `warehouse_name` varchar(250) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `warehouse_tbl` (`id`, `warehouse_id`, `warehouse_name`, `created_by`, `created_date`, `status`) VALUES
(25,	'1656944045',	'SID Techno',	'1',	'2022-07-06 12:59:40',	1);

DROP TABLE IF EXISTS `web_setting`;
CREATE TABLE `web_setting` (
  `setting_id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `mini_logo` varchar(255) DEFAULT NULL,
  `invoice_logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `currency` varchar(10) DEFAULT NULL,
  `currency_position` varchar(10) DEFAULT NULL,
  `footer_text` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `date_format` varchar(20) DEFAULT NULL,
  `rtr` varchar(255) DEFAULT NULL,
  `captcha` int(11) DEFAULT 1 COMMENT '0=active,1=inactive',
  `site_key` varchar(250) DEFAULT NULL,
  `secret_key` varchar(250) DEFAULT NULL,
  `header_bgcolor` varchar(20) DEFAULT NULL,
  `logo_bgcolor` varchar(20) DEFAULT NULL,
  `sidebar_bgcolor` varchar(20) DEFAULT NULL,
  `treeview_bgcolor` varchar(20) DEFAULT NULL,
  `link_hover` varchar(20) DEFAULT NULL,
  `font_color` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `web_setting` (`setting_id`, `logo`, `mini_logo`, `invoice_logo`, `favicon`, `currency`, `currency_position`, `footer_text`, `language`, `date_format`, `rtr`, `captcha`, `site_key`, `secret_key`, `header_bgcolor`, `logo_bgcolor`, `sidebar_bgcolor`, `treeview_bgcolor`, `link_hover`, `font_color`) VALUES
(1,	'my-assets/image/logo/1e9aa5a0b9f83b463e75f7701bfed2be.png',	'my-assets/image/logo/06773a07399aaf5dd7f972976b593928.png',	'my-assets/image/logo/691d54f055b35e1297a0b91256a07ad2.png',	'my-assets/image/logo/9038250defc136c076f11bcc022c1e4d.png',	'$',	'0',	'Copyright by Admin :P',	'english',	'3',	'0',	1,	'6LdiKhsUAAAAAMV4jQRmNYdZy2kXEuFe1HrdP5tt',	'6LdiKhsUAAAAABH4BQCIvBar7Oqe-2LwDKxMSX-t',	'#f5f5f5',	'#002447',	'#003366',	'#012c56',	'#043d75',	'#ffffff');

-- 2022-10-31 11:04:21
