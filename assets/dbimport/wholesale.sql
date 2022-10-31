

CREATE TABLE `accounts` (
  `account_id` varchar(220) NOT NULL,
  `account_table_name` varchar(255) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `account_table_name`, `account_name`, `status`) VALUES
('R4YJJ3MXRC', 'outflow_pt3vxiow9x', 'Customer', 1),
('ZVWPEP1J1W', 'inflow_yh5i8w9oea', 'customar payment', 2),
('RE248GHTEZ', 'outflow_1td1fz8uvv', 'Supplier Payment', 1);

-- --------------------------------------------------------

--
-- Table structure for table `account_2`
--

CREATE TABLE `account_2` (
  `account_id` int(11) NOT NULL,
  `account_name` varchar(40) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `parent_id` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_2`
--

INSERT INTO `account_2` (`account_id`, `account_name`, `created_at`, `parent_id`) VALUES
(1, 'Supplier', '2017-10-10 12:09:21', 1),
(2, 'Customer', '2017-10-10 12:09:35', 2),
(3, 'Office', '2017-10-10 12:10:14', 3),
(4, 'Loan', '2017-10-10 12:13:24', 4),
(5, 'Labor Bill', '2017-10-25 14:37:48', 3),
(6, 'Office Rent', '2017-10-25 14:38:15', 3),
(7, 'ddd', '2017-10-31 11:14:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bank_add`
--

CREATE TABLE `bank_add` (
  `bank_id` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `ac_name` varchar(250) DEFAULT NULL,
  `ac_number` varchar(250) DEFAULT NULL,
  `branch` varchar(250) DEFAULT NULL,
  `signature_pic` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank_add`
--

INSERT INTO `bank_add` (`bank_id`, `bank_name`, `ac_name`, `ac_number`, `branch`, `signature_pic`, `status`) VALUES
('DCMHATDNVW', 'Duchbangla Banks', 'fgdfg dfgdfg', 'test12354567', 'Dhanmondi', 'http://farukandbrothers.com/my-assets/image/logo/91846f062bfda8d0d4eb2aee02f39437.jpg', 1),
('U72XGTBMTE', 'Agrani bank', 'bdtask123', 'bdt1263456', 'Kawran Bazar', 'http://farukandbrothers.com/my-assets/image/logo/340c5b6661391a9efd57aef74fb8933b.jpg', 1),
('873GO7X38D', 'islami Bnak', 'gddfgd', '43534563456345', 'Dhakas', 'http://farukandbrothers.com/my-assets/image/logo/2b5c4be0d187cede95e3489f0e786db7.png', 1),
('8XRLB6YVU8', 'uttara', 'dfgdsfg', '34523452345', 'dfgdfgsdas', '', 1),
('DJTQEQH2WR', 'City Bank', 'bdtask', '4534534634634', 'Dhaka', 'http://farukandbrothers.com/my-assets/image/logo/356121f59e3ce8f91bf5148ec7c1cafe.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bank_summary`
--

CREATE TABLE `bank_summary` (
  `bank_id` varchar(250) DEFAULT NULL,
  `description` text,
  `deposite_id` varchar(250) DEFAULT NULL,
  `date` varchar(250) DEFAULT NULL,
  `ac_type` varchar(50) DEFAULT NULL,
  `dr` float DEFAULT NULL,
  `cr` float DEFAULT NULL,
  `ammount` float DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank_summary`
--

INSERT INTO `bank_summary` (`bank_id`, `description`, `deposite_id`, `date`, `ac_type`, `dr`, `cr`, `ammount`, `status`) VALUES
('LM3YIYOKQ2', '', '3426565', '23-10-2017', 'Debit(+)', 543, NULL, 543, 1),
('FRUH5553OV', 'dfg', '121', '23-10-2017', 'Credit(-)', NULL, 4500, 4500, 1),
('U72XGTBMTE', '', '5345324523', '23-10-2017', 'Debit(+)', 45, NULL, 45, 1),
('DJTQEQH2WR', '', '45646546', '31-10-2017', 'Debit(+)', 7000, NULL, 7000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cheque_manger`
--

CREATE TABLE `cheque_manger` (
  `cheque_id` varchar(100) NOT NULL,
  `transection_id` varchar(100) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `bank_id` varchar(100) NOT NULL,
  `cheque_no` varchar(100) NOT NULL,
  `date` varchar(250) DEFAULT NULL,
  `transection_type` varchar(100) NOT NULL,
  `cheque_status` int(10) NOT NULL,
  `amount` float NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `company_information`
--

CREATE TABLE `company_information` (
  `company_id` varchar(250) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `website` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company_information`
--

INSERT INTO `company_information` (`company_id`, `company_name`, `email`, `address`, `mobile`, `website`, `status`) VALUES
('NOILG8EGCRXXBWUEUQBM', 'BDTASK', 'bdtask@gmail.com', '98,Green Road,Dhaka', '0730164623', 'http://www.bdtask.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_information`
--

CREATE TABLE `customer_information` (
  `customer_id` varchar(250) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_mobile` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `status` int(2) NOT NULL COMMENT '1=paid,2=credit'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_information`
--

INSERT INTO `customer_information` (`customer_id`, `customer_name`, `customer_address`, `customer_mobile`, `customer_email`, `status`) VALUES
('8ZBLA3COJM2NT49', 'Shahidul Islam', 'Mirpur', '01714287187', 'shahidul@gmail.com', 1),
('JMVQJWU1FAEQHI5', 'Universal Electic', '', '', '', 1),
('F34YNOU3TJSAO67', 'S.S Enterprise', 'Sundorban Squre Super Market\r\nFirst Floor ,Shop # A15/16A ', '0235145454', '', 1),
('HS28Q2LCDZHWDS5', 'S.R Enterprise ', 'Sundorban Squre Super Market\r\nFirst Floor ,Shop # A18/19 ', '015646868678', '', 1),
('YWYINLCAIU4Z7YA', 'Hannan Traders', 'Sundorban Squre Super Market First Floor ,Shop # Nai', '', '', 1),
('6UDTC3KDE166G4C', 'Johan Doye', '98 Green Road,Farmgate', '908764566789', 'johan@gmail.com', 2),
('XIYGDEV8HIT1GPD', 'MDSU', 'dhaka', '165465465', 'mdsu@gmail.com', 1),
('8L156ORDQGJW32T', 'Walking Customer', 'Dhaka', '8801703136868', 'walkingcustomer@gmail.com', 1),
('D8B2MDGRIWVPO1A', 'Md. Tuhin', 'Gaibandha', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_ledger`
--

CREATE TABLE `customer_ledger` (
  `transaction_id` varchar(100) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `invoice_no` varchar(100) DEFAULT NULL,
  `receipt_no` varchar(50) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `cheque_no` varchar(255) NOT NULL,
  `date` varchar(250) DEFAULT NULL,
  `status` int(2) NOT NULL,
  `d_c` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_ledger`
--

INSERT INTO `customer_ledger` (`transaction_id`, `customer_id`, `invoice_no`, `receipt_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES
('KZHL6UU4VO', 'JMVQJWU1FAEQHI5', 'NA', NULL, 50000, 'Previous adjustment with software', 'NA', 'NA', '25-10-2017', 1, ''),
('5TJARPM6IN', 'F34YNOU3TJSAO67', 'NA', NULL, 61250, 'Previous adjustment with software', 'NA', 'NA', '25-10-2017', 1, ''),
('2ZVLDR3IJ5', 'HS28Q2LCDZHWDS5', 'NA', NULL, 365840, 'Previous adjustment with software', 'NA', 'NA', '25-10-2017', 1, ''),
('R1C5ETPYMI', 'YWYINLCAIU4Z7YA', 'NA', NULL, 0, 'Previous adjustment with software', 'NA', 'NA', '25-10-2017', 1, ''),
('PNOBOTZCL9OWBP5', 'YWYINLCAIU4Z7YA', '6678792612', NULL, 111600, 'ITP', '1', '', '25-10-2017', 1, ''),
('VH112LNS1EJJK75', 'JMVQJWU1FAEQHI5', '123', NULL, 2000, 'Cash', '1', '', '25-10-2017', 1, ''),
('L2FOE13IDSYADC3', 'HS28Q2LCDZHWDS5', '123', NULL, 3000, 'no des', '1', '', '25-10-2017', 1, ''),
('FSQ9O99EGHTRE9F', 'F34YNOU3TJSAO67', '123', NULL, 1000, '', '1', '', '25-10-2017', 1, ''),
('WQVYCRJMN86GI17', 'JMVQJWU1FAEQHI5', '1979956835', NULL, 25800, 'ITP', '1', '', '26-10-2017', 1, ''),
('2IXO5N7VJFSJ7W3', 'F34YNOU3TJSAO67', '2191413693', NULL, 45720, 'ITP', '1', '', '26-10-2017', 1, ''),
('KTASGDEO2EVT8FP', 'HS28Q2LCDZHWDS5', '6476889255', NULL, 35200, 'ITP', '1', '', '26-10-2017', 1, ''),
('FCW4MH999Y3A75X', 'HS28Q2LCDZHWDS5', '1441514161', NULL, 35200, 'ITP', '1', '', '26-10-2017', 1, ''),
('C5JJ9CNCRQN6ZQR', 'HS28Q2LCDZHWDS5', '1161734131', NULL, 35200, 'ITP', '1', '', '26-10-2017', 1, ''),
('G36CPLKONRDN18L', 'HS28Q2LCDZHWDS5', '4672383343', NULL, 35200, 'ITP', '1', '', '26-10-2017', 1, ''),
('T71A2WYSBL1OQFJ', 'F34YNOU3TJSAO67', '9455792915', NULL, 1074140, 'ITP', '1', '', '26-10-2017', 1, ''),
('UPV5HNEO3MK8ZOW', 'F34YNOU3TJSAO67', '4981452674', NULL, 1074140, 'ITP', '1', '', '26-10-2017', 1, ''),
('GVH6YY7265ISKCI', 'F34YNOU3TJSAO67', '4124575573', NULL, 73080, 'ITP', '1', '', '26-10-2017', 1, ''),
('78SO49VW5EWVQLG', 'F34YNOU3TJSAO67', '1824634358', NULL, 73080, 'ITP', '1', '', '26-10-2017', 1, ''),
('6WBA2S3PR7B5KOU', 'F34YNOU3TJSAO67', '5866553993', NULL, 58800, 'ITP', '1', '', '26-10-2017', 1, ''),
('VNCC412Q9ORNR2F', 'JMVQJWU1FAEQHI5', '2827821423', NULL, 81600, 'ITP', '1', '', '26-10-2017', 1, ''),
('8GX996WGH6AH12O', '8ZBLA3COJM2NT49', '5696739753', NULL, 34500, 'ITP', '1', '', '26-10-2017', 1, ''),
('CDXCOWXKMR3YAYO', 'JMVQJWU1FAEQHI5', '8771668649', NULL, 71760, 'ITP', '1', '', '26-10-2017', 1, ''),
('AGVJG2Y23Q8AHZD', 'JMVQJWU1FAEQHI5', '3276699692', NULL, 71960, 'ITP', '1', '', '27-10-2017', 1, ''),
('UED29RCG1321ZZO', 'F34YNOU3TJSAO67', '1612663242', NULL, 71960, 'ITP', '1', '', '27-10-2017', 1, ''),
('YF8XXXZX1ACGXY3', 'F34YNOU3TJSAO67', '2838558471', NULL, 119400, 'ITP', '1', '', '27-10-2017', 1, ''),
('7ZW9G3F6A3ZBAA8', 'F34YNOU3TJSAO67', '8332727433', NULL, 777777, 'ITP', '1', '', '27-10-2017', 1, ''),
('5CUCOA9L3HXZTZ3', 'JMVQJWU1FAEQHI5', '8861346923', NULL, 15200, 'ITP', '1', '', '27-10-2017', 1, ''),
('P3YOLNTKI1R13YT', '8ZBLA3COJM2NT49', '1315834339', NULL, 7600, 'ITP', '1', '', '27-10-2017', 1, ''),
('BM1RD29M3U7VQ1B', '8ZBLA3COJM2NT49', '6812413211', NULL, 33600, 'ITP', '1', '', '27-10-2017', 1, ''),
('4BPPVCALP98XOOY', 'JMVQJWU1FAEQHI5', '2841757611', NULL, 151200, 'ITP', '1', '', '27-10-2017', 1, ''),
('37W1572K5SAS3SK', '8ZBLA3COJM2NT49', NULL, '', 450, 'dfgdsgf', '1', '', '31-10-2017', 1, ''),
('PDPYVAPZXT3ALZF', '8ZBLA3COJM2NT49', '2955339992', NULL, 48960, 'ITP', '1', '', '01-11-2017', 1, ''),
('3FL6WVVYBJ2IXTG', '8ZBLA3COJM2NT49', '7774413469', NULL, 10000, 'ITP', '1', '', '01-11-2017', 1, ''),
('KECMDNQWIW9UI7L', '8ZBLA3COJM2NT49', '8829776633', NULL, 8000, 'ITP', '1', '', '01-11-2017', 1, ''),
('VAH59FVGOXCI2KV', '8ZBLA3COJM2NT49', NULL, '6R7MP8LNFF', 70000, 'ITP', '1', '', '02-11-2017', 1, ''),
('VAH59FVGOXCI2KV', '8ZBLA3COJM2NT49', '9928459451', NULL, 70560, '', '', '', '02-11-2017', 1, ''),
('QAO1QIY19Q7RKTH', '', NULL, 'CT2U6E74D8', 46000, 'ITP', '1', '', '02-11-2017', 1, ''),
('QAO1QIY19Q7RKTH', '', '4991415829', NULL, 46000, '', '', '', '02-11-2017', 1, ''),
('DU843BZYE76XUHX', '', NULL, '828U4QGHEK', 46000, 'ITP', '1', '', '02-11-2017', 1, ''),
('DU843BZYE76XUHX', '', '6471686685', NULL, 46000, '', '', '', '02-11-2017', 1, ''),
('XA89GZE1P5V51DE', '', NULL, '6NJUFLJTAH', 46000, 'ITP', '1', '', '02-11-2017', 1, ''),
('XA89GZE1P5V51DE', '', '7579931679', NULL, 46000, '', '', '', '02-11-2017', 1, ''),
('1MZZRFMMRXQ37VJ', '8ZBLA3COJM2NT49', NULL, 'B63HSVBSXM', 63000, 'ITP', '1', '', '04-11-2017', 1, ''),
('1MZZRFMMRXQ37VJ', '8ZBLA3COJM2NT49', '8914637431', NULL, 63000, '', '', '', '04-11-2017', 1, ''),
('YB2DKLKGZPJ5YF2', 'JMVQJWU1FAEQHI5', NULL, 'BHRAJTKKIT', 120920, 'ITP', '1', '', '04-11-2017', 1, ''),
('5FRS96LV79KHSBV', 'JMVQJWU1FAEQHI5', NULL, '6UDF17YDNQ', 125000, 'Cash Paid By Customer', '1', '', '06-11-2017', 1, 'c'),
('OK5UDZV15MSWLLL', 'JMVQJWU1FAEQHI5', NULL, 'G1ETNT5ZWT', 110000, 'ITP', '1', '', '04-11-2017', 1, ''),
('5FRS96LV79KHSBV', 'JMVQJWU1FAEQHI5', '3245145265', NULL, 125000, '', '', '', '06-11-2017', 1, 'd'),
('AXLIJM3ZRU', '6UDTC3KDE166G4C', 'NA', NULL, 500, 'Previous adjustment with software', 'NA', 'NA', '06-11-2017', 1, ''),
('GL19RQLXGG', 'XIYGDEV8HIT1GPD', 'NA', NULL, 0, 'Previous adjustment with software', 'NA', 'NA', '18-09-2019', 1, 'd'),
('SG2T9N9AAF7V615', 'XIYGDEV8HIT1GPD', '2253177622', NULL, 2000, '', '', '', '2019-09-18', 1, 'd'),
('SG2T9N9AAF7V615', 'XIYGDEV8HIT1GPD', NULL, 'W3SMSFPZ76', 2000, 'Cash Paid By Customer', '1', '', '2019-09-18', 1, 'c'),
('5LEXIECC7F', '8L156ORDQGJW32T', 'NA', NULL, 0, 'Previous adjustment with software', 'NA', 'NA', '19-09-2019', 1, 'd'),
('1QW33TW9VOLXYVO', '8L156ORDQGJW32T', '6255554553', NULL, 1249280, '', '', '', '2019-09-19', 1, 'd'),
('1QW33TW9VOLXYVO', '8L156ORDQGJW32T', NULL, 'UDWZ8EX3CG', 20000, 'Cash Paid By Customer', '1', '', '2019-09-19', 1, 'c'),
('5LCY99HINWSCVHZ', '8L156ORDQGJW32T', '8597711896', NULL, 35750, '', '', '', '2019-09-19', 1, 'd'),
('5LCY99HINWSCVHZ', '8L156ORDQGJW32T', NULL, 'HIYB3IGIGH', 3500, 'Cash Paid By Customer', '1', '', '2019-09-19', 1, 'c'),
('374DMZY5JD', 'D8B2MDGRIWVPO1A', 'NA', NULL, 0, 'Previous adjustment with software', 'NA', 'NA', '19-09-2019', 1, 'd'),
('WJI3Q3BD9VSLBO7', 'D8B2MDGRIWVPO1A', '4347554122', NULL, 97400, '', '', '', '2019-09-19', 1, 'd'),
('WJI3Q3BD9VSLBO7', 'D8B2MDGRIWVPO1A', NULL, '1AVBZTZXRK', 5000, 'Cash Paid By Customer', '1', '', '2019-09-19', 1, 'c'),
('QWVONSZD7YQ8TLN', '8L156ORDQGJW32T', '3399534593', NULL, 48000, '', '', '', '2019-09-19', 1, 'd'),
('QWVONSZD7YQ8TLN', '8L156ORDQGJW32T', NULL, 'MYZLNDBXKM', 35000, 'Cash Paid By Customer', '1', '', '2019-09-19', 1, 'c'),
('VV7GPXMTAU21XAV', 'XIYGDEV8HIT1GPD', '2557736495', NULL, 49700, '', '', '', '2019-09-21', 1, 'd'),
('VV7GPXMTAU21XAV', 'XIYGDEV8HIT1GPD', NULL, 'SWI65P4RLE', 40000, 'Cash Paid By Customer', '1', '', '2019-09-21', 1, 'c'),
('97B9VW9BIC6BCA1', '8L156ORDQGJW32T', '3595384555', NULL, 83220, '', '', '', '2019-09-21', 1, 'd'),
('97B9VW9BIC6BCA1', '8L156ORDQGJW32T', NULL, '8SDVAA3CKM', 3220, 'Cash Paid By Customer', '1', '', '2019-09-21', 1, 'c');

-- --------------------------------------------------------

--
-- Stand-in structure for view `customer_transection_summary`
-- (See below for the actual view)
--
CREATE TABLE `customer_transection_summary` (
`customer_name` varchar(255)
,`customer_id` varchar(100)
,`type` varchar(6)
,`amount` double
);

-- --------------------------------------------------------

--
-- Table structure for table `daily_banking_add`
--

CREATE TABLE `daily_banking_add` (
  `banking_id` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `bank_id` varchar(100) NOT NULL,
  `deposit_type` varchar(255) NOT NULL,
  `transaction_type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `amount` int(11) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `daily_closing`
--

CREATE TABLE `daily_closing` (
  `closing_id` varchar(255) NOT NULL,
  `last_day_closing` float NOT NULL,
  `cash_in` float NOT NULL,
  `cash_out` float NOT NULL,
  `date` varchar(250) NOT NULL,
  `amount` float NOT NULL,
  `adjustment` float NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `head_office_deposit`
--

CREATE TABLE `head_office_deposit` (
  `transection_id` varchar(200) NOT NULL,
  `tracing_id` varchar(200) NOT NULL,
  `payment_type` varchar(10) NOT NULL,
  `date` datetime NOT NULL,
  `amount` int(10) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `inflow_92mizdldrv`
--

CREATE TABLE `inflow_92mizdldrv` (
  `transection_id` varchar(200) NOT NULL,
  `tracing_id` varchar(200) NOT NULL,
  `payment_type` varchar(10) NOT NULL,
  `date` datetime NOT NULL,
  `amount` int(10) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inflow_92mizdldrv`
--

INSERT INTO `inflow_92mizdldrv` (`transection_id`, `tracing_id`, `payment_type`, `date`, `amount`, `description`, `status`) VALUES
('1HYPUVX21YN9PKG', '8L156ORDQGJW32T', '1', '2019-09-19 00:00:00', 20000, 'ITP', 1),
('1MZZRFMMRXQ37VJ', '8ZBLA3COJM2NT49', '1', '2017-10-10 12:09:21', 63000, 'ITP', 1),
('2IXO5N7VJFSJ7W3', 'F34YNOU3TJSAO67', '1', '2017-10-10 12:09:21', 45720, 'ITP', 1),
('3FL6WVVYBJ2IXTG', '8ZBLA3COJM2NT49', '1', '2017-10-10 12:09:21', 10000, 'ITP', 1),
('43DXTMZASI4BTMN', 'JMVQJWU1FAEQHI5', '1', '2017-10-10 12:09:21', 125000, 'ITP', 1),
('4BPPVCALP98XOOY', 'JMVQJWU1FAEQHI5', '1', '2017-10-10 12:09:21', 151200, 'ITP', 1),
('5CUCOA9L3HXZTZ3', 'JMVQJWU1FAEQHI5', '1', '2017-10-10 12:09:21', 15200, 'ITP', 1),
('5LCY99HINWSCVHZ', '8L156ORDQGJW32T', '1', '2019-09-19 00:00:00', 3500, 'ITP', 1),
('6WBA2S3PR7B5KOU', 'F34YNOU3TJSAO67', '1', '2017-10-10 12:09:21', 58800, 'ITP', 1),
('78SO49VW5EWVQLG', 'F34YNOU3TJSAO67', '1', '2017-10-10 12:09:21', 73080, 'ITP', 1),
('7ZW9G3F6A3ZBAA8', 'F34YNOU3TJSAO67', '1', '2017-10-10 12:09:21', 777777, 'ITP', 1),
('8GX996WGH6AH12O', '8ZBLA3COJM2NT49', '1', '2017-10-10 12:09:21', 34500, 'ITP', 1),
('97B9VW9BIC6BCA1', '8L156ORDQGJW32T', '1', '2019-09-21 00:00:00', 3220, 'ITP', 1),
('AGVJG2Y23Q8AHZD', 'JMVQJWU1FAEQHI5', '1', '2017-10-10 12:09:21', 71960, 'ITP', 1),
('BM1RD29M3U7VQ1B', '8ZBLA3COJM2NT49', '1', '2017-10-10 12:09:21', 33600, 'ITP', 1),
('C5JJ9CNCRQN6ZQR', 'HS28Q2LCDZHWDS5', '1', '2017-10-10 12:09:21', 35200, 'ITP', 1),
('CDXCOWXKMR3YAYO', 'JMVQJWU1FAEQHI5', '1', '2017-10-10 12:09:21', 71760, 'ITP', 1),
('DU843BZYE76XUHX', '', '1', '2017-10-10 12:09:21', 46000, 'ITP', 1),
('FCW4MH999Y3A75X', 'HS28Q2LCDZHWDS5', '1', '2017-10-10 12:09:21', 35200, 'ITP', 1),
('FSQ9O99EGHTRE9F', 'F34YNOU3TJSAO67', '1', '2017-10-10 12:09:21', 1000, 'ITP', 1),
('G36CPLKONRDN18L', 'HS28Q2LCDZHWDS5', '1', '2017-10-10 12:09:21', 35200, 'ITP', 1),
('GVH6YY7265ISKCI', 'F34YNOU3TJSAO67', '1', '2017-10-10 12:09:21', 73080, 'ITP', 1),
('KECMDNQWIW9UI7L', '8ZBLA3COJM2NT49', '1', '2017-10-10 12:09:21', 8000, 'ITP', 1),
('KTASGDEO2EVT8FP', 'HS28Q2LCDZHWDS5', '1', '2017-10-10 12:09:21', 35200, 'ITP', 1),
('L2FOE13IDSYADC3', 'HS28Q2LCDZHWDS5', '1', '2017-10-10 12:09:21', 3000, 'ITP', 1),
('OK5UDZV15MSWLLL', 'JMVQJWU1FAEQHI5', '1', '2017-10-10 12:09:21', 110000, 'ITP', 1),
('P3YOLNTKI1R13YT', '8ZBLA3COJM2NT49', '1', '2017-10-10 12:09:21', 7600, 'ITP', 1),
('PDPYVAPZXT3ALZF', '8ZBLA3COJM2NT49', '1', '2017-10-10 12:09:21', 48960, 'ITP', 1),
('PNOBOTZCL9OWBP5', 'YWYINLCAIU4Z7YA', '1', '2017-10-10 12:09:21', 111600, 'ITP', 1),
('QAO1QIY19Q7RKTH', '', '1', '2017-10-10 12:09:21', 46000, 'ITP', 1),
('QWVONSZD7YQ8TLN', '8L156ORDQGJW32T', '1', '2019-09-19 00:00:00', 35000, 'ITP', 1),
('SG2T9N9AAF7V615', 'XIYGDEV8HIT1GPD', '1', '2019-09-18 00:00:00', 2000, 'ITP', 1),
('T71A2WYSBL1OQFJ', 'F34YNOU3TJSAO67', '1', '2017-10-10 12:09:21', 1074140, 'ITP', 1),
('UED29RCG1321ZZO', 'F34YNOU3TJSAO67', '1', '2017-10-10 12:09:21', 71960, 'ITP', 1),
('UPV5HNEO3MK8ZOW', 'F34YNOU3TJSAO67', '1', '2017-10-10 12:09:21', 1074140, 'ITP', 1),
('VAH59FVGOXCI2KV', '8ZBLA3COJM2NT49', '1', '2017-10-10 12:09:21', 70000, 'ITP', 1),
('VH112LNS1EJJK75', 'JMVQJWU1FAEQHI5', '1', '2017-10-10 12:09:21', 2000, 'ITP', 1),
('VNCC412Q9ORNR2F', 'JMVQJWU1FAEQHI5', '1', '2017-10-10 12:09:21', 81600, 'ITP', 1),
('VV7GPXMTAU21XAV', 'XIYGDEV8HIT1GPD', '1', '2019-09-21 00:00:00', 40000, 'ITP', 1),
('WJI3Q3BD9VSLBO7', 'D8B2MDGRIWVPO1A', '1', '2019-09-19 00:00:00', 5000, 'ITP', 1),
('WQVYCRJMN86GI17', 'JMVQJWU1FAEQHI5', '1', '2017-10-10 12:09:21', 25800, 'ITP', 1),
('XA89GZE1P5V51DE', '', '1', '2017-10-10 12:09:21', 46000, 'ITP', 1),
('YB2DKLKGZPJ5YF2', 'JMVQJWU1FAEQHI5', '1', '2017-10-10 12:09:21', 120920, 'ITP', 1),
('YF8XXXZX1ACGXY3', 'F34YNOU3TJSAO67', '1', '2017-10-10 12:09:21', 119400, 'ITP', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inflow_yh5i8w9oea`
--

CREATE TABLE `inflow_yh5i8w9oea` (
  `transection_id` varchar(200) NOT NULL,
  `tracing_id` varchar(200) NOT NULL,
  `payment_type` varchar(10) NOT NULL,
  `date` varchar(255) NOT NULL,
  `amount` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `invoice_id` varchar(100) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `date` varchar(50) DEFAULT NULL,
  `total_amount` float NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `total_discount` float DEFAULT NULL COMMENT 'total invoice discount',
  `status` int(2) NOT NULL,
  `created_by` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `invoice_id`, `customer_id`, `date`, `total_amount`, `invoice`, `total_discount`, `status`, `created_by`) VALUES
(1, '5352642796', 'JMVQJWU1FAEQHI5', '25-10-2017', 312400, '1000', 0, 1, ''),
(2, '2212884554', 'HS28Q2LCDZHWDS5', '25-10-2017', 183860, '1001', 0, 1, ''),
(3, '1662246136', 'F34YNOU3TJSAO67', '25-10-2017', 168000, '1002', 3400, 1, ''),
(4, '6678792612', 'YWYINLCAIU4Z7YA', '25-10-2017', 111600, '1003', 6000, 1, ''),
(5, '1979956835', 'JMVQJWU1FAEQHI5', '26-10-2017', 25800, '1004', 600, 1, ''),
(6, '2191413693', 'F34YNOU3TJSAO67', '26-10-2017', 45720, '1005', 3240, 1, ''),
(7, '6476889255', 'HS28Q2LCDZHWDS5', '26-10-2017', 35200, '1006', 0, 1, ''),
(8, '1441514161', 'HS28Q2LCDZHWDS5', '26-10-2017', 35200, '1007', 0, 1, ''),
(9, '1161734131', 'HS28Q2LCDZHWDS5', '26-10-2017', 35200, '1008', 0, 1, ''),
(10, '4672383343', 'HS28Q2LCDZHWDS5', '26-10-2017', 35200, '1009', 0, 1, ''),
(11, '9455792915', 'F34YNOU3TJSAO67', '26-10-2017', 1074140, '1010', 37840, 1, ''),
(12, '4981452674', 'F34YNOU3TJSAO67', '26-10-2017', 1074140, '1011', 37840, 1, ''),
(13, '6391267778', '8ZBLA3COJM2NT49', '26-10-2017', 132000, '1012', 0, 1, ''),
(14, '5717642987', '8ZBLA3COJM2NT49', '26-10-2017', 132000, '1013', 0, 1, ''),
(15, '4124575573', 'F34YNOU3TJSAO67', '26-10-2017', 73080, '1014', 0, 1, ''),
(16, '1824634358', 'F34YNOU3TJSAO67', '26-10-2017', 73080, '1015', 0, 1, ''),
(17, '5866553993', 'F34YNOU3TJSAO67', '26-10-2017', 58800, '1016', 0, 1, ''),
(18, '2827821423', 'JMVQJWU1FAEQHI5', '26-10-2017', 81600, '1017', 0, 1, ''),
(19, '1593665589', 'JMVQJWU1FAEQHI5', '26-10-2017', 55440, '1018', 0, 1, ''),
(20, '5696739753', '8ZBLA3COJM2NT49', '26-10-2017', 34500, '1019', 0, 1, ''),
(21, '5577868966', 'F34YNOU3TJSAO67', '26-10-2017', 202440, '1020', 0, 1, ''),
(22, '8771668649', 'JMVQJWU1FAEQHI5', '26-10-2017', 71760, '1021', 0, 1, ''),
(23, '3276699692', 'JMVQJWU1FAEQHI5', '27-10-2017', 71960, '1022', 0, 1, ''),
(24, '1612663242', 'F34YNOU3TJSAO67', '27-10-2017', 71960, '1023', 0, 1, ''),
(25, '2838558471', 'F34YNOU3TJSAO67', '27-10-2017', 119400, '1024', 0, 1, ''),
(26, '8332727433', 'F34YNOU3TJSAO67', '27-10-2017', 35280, '1025', 0, 1, ''),
(27, '8861346923', 'JMVQJWU1FAEQHI5', '27-10-2017', 15200, '1026', 0, 1, ''),
(28, '1315834339', '8ZBLA3COJM2NT49', '27-10-2017', 7600, '1027', 0, 1, ''),
(29, '6812413211', '8ZBLA3COJM2NT49', '27-10-2017', 33600, '1028', 0, 1, ''),
(30, '2841757611', 'JMVQJWU1FAEQHI5', '27-10-2017', 151200, '1029', 0, 1, ''),
(31, '4895264789', '8ZBLA3COJM2NT49', '01-11-2017', 23000, '1030', 0, 1, ''),
(32, '6766863919', '8ZBLA3COJM2NT49', '01-11-2017', 23000, '1031', 0, 1, ''),
(33, '3524631422', '8ZBLA3COJM2NT49', '01-11-2017', 32640, '1032', 0, 1, ''),
(34, '2955339992', '8ZBLA3COJM2NT49', '01-11-2017', 48960, '1033', 0, 1, ''),
(35, '7774413469', '8ZBLA3COJM2NT49', '01-11-2017', 48960, '1034', 0, 1, ''),
(36, '8829776633', '8ZBLA3COJM2NT49', '01-11-2017', 23000, '1035', 0, 1, ''),
(37, '9928459451', '8ZBLA3COJM2NT49', '02-11-2017', 70560, '1036', 0, 1, ''),
(38, '7192698317', '8ZBLA3COJM2NT49', '02-11-2017', 46000, '1037', 0, 1, ''),
(39, '7336959223', '', '02-11-2017', 46000, '1038', 0, 1, ''),
(40, '4991415829', '', '02-11-2017', 46000, '1039', 0, 1, ''),
(41, '6471686685', '', '02-11-2017', 46000, '1040', 0, 1, ''),
(42, '7579931679', '', '02-11-2017', 46000, '1041', 0, 1, ''),
(43, '1732878644', '8ZBLA3COJM2NT49', '02-11-2017', 81600, '1042', 0, 1, ''),
(44, '4336416796', 'JMVQJWU1FAEQHI5', '02-11-2017', 34500, '1043', 0, 1, ''),
(45, '3517883984', '8ZBLA3COJM2NT49', '02-11-2017', 11500, '1044', 0, 1, ''),
(46, '8914637431', '8ZBLA3COJM2NT49', '04-11-2017', 63000, '1045', 0, 1, ''),
(47, '3245145265', 'JMVQJWU1FAEQHI5', '06-11-2017', 125000, '1046', 0, 1, ''),
(48, '2253177622', 'XIYGDEV8HIT1GPD', '2019-09-18', 2000, '1047', 0, 1, '1'),
(49, '6255554553', '8L156ORDQGJW32T', '2019-09-19', 1249280, '1048', 15, 1, '1'),
(50, '8597711896', '8L156ORDQGJW32T', '2019-09-19', 35750, '1049', 450, 1, '1'),
(51, '4347554122', 'D8B2MDGRIWVPO1A', '2019-09-19', 97400, '1050', 1900, 1, '1'),
(52, '3818123235', 'XIYGDEV8HIT1GPD', '2019-09-19', 34500, '1051', 0, 1, '1'),
(53, '7284699262', 'XIYGDEV8HIT1GPD', '2019-09-19', 34500, '1052', 0, 1, '1'),
(54, '3399534593', '8L156ORDQGJW32T', '2019-09-19', 48000, '1053', 0, 1, '1'),
(55, '2557736495', 'XIYGDEV8HIT1GPD', '2019-09-21', 49700, '1054', 300, 1, '1'),
(56, '3595384555', '8L156ORDQGJW32T', '2019-09-21', 83220, '1055', 880, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_details`
--

CREATE TABLE `invoice_details` (
  `invoice_details_id` varchar(100) NOT NULL,
  `invoice_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `cartoon` float DEFAULT NULL,
  `quantity` float NOT NULL,
  `rate` float NOT NULL,
  `supplier_rate` float DEFAULT NULL,
  `total_price` float NOT NULL,
  `discount` float DEFAULT NULL,
  `tax` float DEFAULT NULL,
  `paid_amount` float DEFAULT '0',
  `due_amount` float NOT NULL DEFAULT '0',
  `status` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice_details`
--

INSERT INTO `invoice_details` (`invoice_details_id`, `invoice_id`, `product_id`, `cartoon`, `quantity`, `rate`, `supplier_rate`, `total_price`, `discount`, `tax`, `paid_amount`, `due_amount`, `status`) VALUES
('322178286179275', '5352642796', '63853613', 3, 120, 220, 210, 26400, 0, 0, 0, 312400, 1),
('461138664737916', '5352642796', '19226752', 2, 120, 210, 200, 25200, 0, 0, 0, 312400, 1),
('538746555262178', '5352642796', '63775648', 3, 180, 210, 200, 37800, 0, 0, 0, 312400, 1),
('515528485757447', '5352642796', '83517747', 5, 120, 680, 670, 81600, 0, 0, 0, 312400, 1),
('191964519925133', '5352642796', '13177442', 10, 500, 230, 220, 115000, 0, 0, 0, 312400, 1),
('974425263638473', '5352642796', '97255764', 2, 80, 190, 180, 15200, 0, 0, 0, 312400, 1),
('172267628511124', '5352642796', '67197783', 2, 40, 280, 260, 11200, 0, 0, 0, 312400, 1),
('341884428717359', '2212884554', '63853613', 1, 40, 220, 210, 8800, 0, 0, 0, 183860, 1),
('828275396474739', '2212884554', '19226752', 1, 60, 210, 200, 12600, 0, 0, 0, 183860, 1),
('253232673444278', '2212884554', '83517747', 2, 48, 680, 670, 32640, 0, 0, 0, 183860, 1),
('151868497135417', '2212884554', '43238874', 2, 240, 98, 90, 23520, 0, 0, 0, 183860, 1),
('323645793137454', '2212884554', '97255764', 2, 80, 190, 180, 15200, 0, 0, 0, 183860, 1),
('359346175888428', '2212884554', '19226752', 3, 60, 280, 200, 16800, 0, 0, 0, 183860, 1),
('259414983286931', '2212884554', '67197783', 3, 60, 280, 260, 16800, 0, 0, 0, 183860, 1),
('355388986574316', '2212884554', '13177442', 5, 250, 230, 220, 57500, 0, 0, 0, 183860, 1),
('958533333455387', '1662246136', '19226752', 10, 600, 210, 200, 126000, 5, 0, 0, 168000, 1),
('149154221344846', '1662246136', '63775648', 3, 180, 210, 200, 37800, 2, 0, 0, 168000, 1),
('531484717942579', '1662246136', '97255764', 1, 40, 190, 180, 7600, 1, 0, 0, 168000, 1),
('636596177883366', '6678792612', '43238874', 10, 1200, 98, 90, 117600, 5, 0, 111600, 0, 1),
('155631728614396', '1979956835', '63853613', 3, 120, 220, 210, 26400, 5, 0, 25800, 0, 1),
('722242451482752', '2191413693', '83517747', 3, 72, 680, 670, 48960, 45, 0, 45720, 0, 1),
('885926554243267', '6476889255', '63853613', 4, 160, 220, 210, 35200, 0, 0, 35200, 0, 1),
('444871815965462', '1441514161', '63853613', 4, 160, 220, 210, 35200, 0, 0, 35200, 0, 1),
('322374389453755', '1161734131', '63853613', 4, 160, 220, 210, 35200, 0, 0, 35200, 0, 1),
('556411868186321', '4672383343', '63853613', 4, 160, 220, 210, 35200, 0, 0, 35200, 0, 1),
('826966992472672', '9455792915', '63853613', 88, 3520, 220, 210, 774400, 10, 0, 1074140, 0, 1),
('994156449435622', '6391267778', '13177442', 1, 50, 230, 220, 11500, 0, 0, 0, 132000, 1),
('966516411331947', '5717642987', '13177442', 1, 50, 230, 220, 11500, 0, 0, 0, 132000, 1),
('338971382639286', '4124575573', '43238874', 3, 360, 98, 90, 35280, 0, 0, 73080, 0, 1),
('855473555817233', '1824634358', '43238874', 3, 360, 98, 90, 35280, 0, 0, 73080, 0, 1),
('854171667212512', '5866553993', '43238874', 3, 360, 98, 90, 35280, 0, 0, 58800, 0, 1),
('861626717588631', '2827821423', '83517747', 2, 48, 680, 670, 32640, 0, 0, 81600, 0, 1),
('773365631369671', '1593665589', '83517747', 2, 48, 680, 670, 32640, 0, 0, 0, 55440, 1),
('273843313886851', '5696739753', '13177442', 3, 150, 230, 220, 34500, 0, 0, 34500, 0, 1),
('795182712765868', '5577868966', '83517747', 3, 72, 680, 670, 48960, 0, 0, 0, 202440, 1),
('478889756713676', '8771668649', '83517747', 3, 72, 680, 670, 48960, 0, 0, 71760, 0, 1),
('693281518267137', '3276699692', '83517747', 3, 72, 680, 670, 48960, 0, 0, 71960, 0, 1),
('238761538477495', '3276699692', '13177442', 2, 100, 230, 220, 23000, 0, 0, 71960, 0, 1),
('927958128274588', '1612663242', '83517747', 3, 72, 680, 670, 48960, 0, 0, 71960, 0, 1),
('649728331918776', '1612663242', '13177442', 2, 100, 230, 220, 23000, 0, 0, 71960, 0, 1),
('149766959794642', '2838558471', '63775648', 3, 180, 210, 200, 37800, 0, 0, 119400, 0, 1),
('713779457157324', '2838558471', '83517747', 5, 120, 680, 670, 81600, 0, 0, 119400, 0, 1),
('454162994166898', '8332727433', '43238874', 3, 360, 98, 90, 35280, 0, 0, 777777, -742497, 1),
('536964741874475', '8861346923', '97255764', 2, 80, 190, 180, 15200, 0, 0, 15200, 0, 1),
('838522543126448', '1315834339', '97255764', 1, 40, 190, 180, 7600, 0, 0, 7600, 0, 1),
('715781472513723', '6812413211', '67197783', 6, 120, 280, 260, 33600, 0, 0, 33600, 0, 1),
('587342536611462', '2841757611', '63775648', 3, 180, 210, 200, 37800, 0, 0, 151200, 0, 1),
('442888991481135', '2841757611', '63775648', 5, 300, 210, 200, 63000, 0, 0, 151200, 0, 1),
('773417659329356', '2841757611', '63775648', 4, 240, 210, 200, 50400, 0, 0, 151200, 0, 1),
('678866231252864', '4895264789', '13177442', 2, 100, 230, 220, 23000, 0, 0, 0, 23000, 1),
('795166525155278', '6766863919', '13177442', 2, 100, 230, 220, 23000, 0, 0, 0, 23000, 1),
('631275173539193', '3524631422', '83517747', 2, 48, 680, 670, 32640, 0, 0, 0, 32640, 1),
('445173368791781', '2955339992', '83517747', 3, 72, 680, 670, 48960, 0, 0, 48960, 0, 1),
('811287854294549', '7774413469', '83517747', 3, 72, 680, 670, 48960, 0, 0, 10000, 38960, 1),
('476215996973536', '8829776633', '13177442', 2, 100, 230, 220, 23000, 0, 0, 8000, 15000, 1),
('771221723624248', '9928459451', '43238874', 6, 720, 98, 90, 70560, 0, 0, 70000, 560, 1),
('325134538371951', '4991415829', '', 4, 200, 230, NULL, 46000, 0, 0, 46000, 0, 1),
('718484544434195', '6471686685', '', 4, 200, 230, NULL, 46000, 0, 0, 46000, 0, 1),
('533212811838913', '7579931679', '', 4, 200, 230, NULL, 46000, 0, 0, 46000, 0, 1),
('291532368921455', '8914637431', '19226752', 5, 300, 210, 200, 63000, 0, 0, 63000, 0, 1),
('311179349359716', '3245145265', '94999792', 5, 250, 500, NULL, 125000, 0, NULL, 125000, 0, 0),
('557575896449765', '2253177622', '38518544', 1, 10, 200, 150, 2000, 0, NULL, 2000, 0, 1),
('572973189344974', '8597711896', '94999792', 1, 50, 500, 480, 25000, 5, NULL, 3500, 32250, 1),
('683344595445829', '6255554553', '84662895', 3, 180, 6000, NULL, 1080000, 3, NULL, 20000, 1229280, 0),
('666623288713392', '6255554553', '86815584', 4, 240, 500, NULL, 120000, 5, NULL, 20000, 1229280, 0),
('287275825159489', '6255554553', '19226752', 3, 180, 210, NULL, 37800, 5, NULL, 20000, 1229280, 0),
('365636187655872', '6255554553', '13177442', 1, 50, 230, NULL, 11500, 2, NULL, 20000, 1229280, 0),
('533718218426484', '8597711896', '67197783', 2, 40, 280, 260, 11200, 5, NULL, 3500, 32250, 1),
('556433524679553', '4347554122', '13177442', 1, 50, 230, 220, 11500, 10, NULL, 5000, 92400, 1),
('415529399485931', '4347554122', '94999792', 2, 100, 500, 480, 50000, 5, NULL, 5000, 92400, 1),
('332579774296729', '4347554122', '19226752', 3, 180, 210, 200, 37800, 5, NULL, 5000, 92400, 1),
('139314561641358', '3818123235', '13177442', 3, 150, 230, 220, 34500, 0, NULL, 0, 34500, 1),
('666248611382512', '7284699262', '13177442', 3, 150, 230, 220, 34500, 0, NULL, 0, 34500, 1),
('987815921537836', '3399534593', '94999792', 1, 50, 500, 480, 25000, 0, NULL, 35000, 13000, 1),
('381112938447457', '3399534593', '13177442', 2, 100, 230, 220, 23000, 0, NULL, 35000, 13000, 1),
('712561598435158', '2557736495', '94999792', 2, 100, 500, 480, 50000, 3, NULL, 40000, 9700, 1),
('256238971759949', '3595384555', '13177442', 1, 50, 230, 220, 11500, 2, NULL, 3220, 80000, 1),
('148748797728853', '3595384555', '19226752', 1, 60, 210, 200, 12600, 5, NULL, 3220, 80000, 1),
('496813423928211', '3595384555', '86815584', 2, 120, 500, 460, 60000, 4, NULL, 3220, 80000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) UNSIGNED NOT NULL,
  `phrase` text NOT NULL,
  `english` text,
  `bangla` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `phrase`, `english`, `bangla`) VALUES
(1, 'user_profile', 'User Profile', ''),
(2, 'setting', 'Setting', ''),
(3, 'language', 'Language', ''),
(4, 'manage_users', 'Manage Users', ''),
(5, 'add_user', 'Add User', ''),
(6, 'manage_company', 'Manage Company', ''),
(7, 'web_settings', 'Software Settings', ''),
(8, 'manage_accounts', 'Manage Accounts', ''),
(9, 'create_accounts', 'Create Office Account', ''),
(10, 'manage_bank', 'Manage Bank', ''),
(11, 'add_new_bank', 'Add New Bank', ''),
(12, 'settings', 'Bank', ''),
(13, 'closing_report', 'Closing Report', ''),
(14, 'closing', 'Closing', ''),
(15, 'cheque_manager', 'Cheque Manager', ''),
(16, 'accounts_summary', 'Accounts Summary', ''),
(17, 'expense', 'Expense', ''),
(18, 'income', 'Income', ''),
(19, 'accounts', 'Accounts', ''),
(20, 'stock_report', 'Stock Report', ''),
(21, 'stock', 'Stock', ''),
(22, 'pos_invoice', 'POS Sale', ''),
(23, 'manage_invoice', 'Manage Sales', ''),
(24, 'new_invoice', 'New Sale', ''),
(25, 'invoice', 'Sales', ''),
(26, 'manage_purchase', 'Manage Purchase', ''),
(27, 'add_purchase', 'Add Purchase', ''),
(28, 'purchase', 'Purchase', ''),
(29, 'paid_customer', 'Paid Customer', ''),
(30, 'manage_customer', 'Manage Customer', ''),
(31, 'add_customer', 'Add Customer', ''),
(32, 'customer', 'Customer', ''),
(33, 'supplier_payment_actual', 'Supplier Payment Ledger', ''),
(34, 'supplier_sales_summary', 'Supplier Sales Summary', ''),
(35, 'supplier_sales_details', 'Supplier Sales Details', ''),
(36, 'supplier_ledger', 'Supplier Ledger', ''),
(37, 'manage_supplier', 'Manage Supplier', ''),
(38, 'add_supplier', 'Add Supplier', ''),
(39, 'supplier', 'Supplier', ''),
(40, 'product_statement', 'Product Statement', ''),
(41, 'manage_product', 'Manage Product', ''),
(42, 'add_product', 'Add Product', ''),
(43, 'product', 'Product', ''),
(44, 'manage_category', 'Manage Category', ''),
(45, 'add_category', 'Add Category', ''),
(46, 'category', 'Category', ''),
(47, 'sales_report_product_wise', 'Sales Report (Product Wise)', ''),
(48, 'purchase_report', 'Purchase Report', ''),
(49, 'sales_report', 'Sales Report', ''),
(50, 'todays_report', 'Todays Report', ''),
(51, 'report', 'Report', ''),
(52, 'dashboard', 'Dashboard', ''),
(53, 'online', 'Online', ''),
(54, 'logout', 'Logout', ''),
(55, 'change_password', 'Change Password', ''),
(56, 'total_purchase', 'Total Purchase', ''),
(57, 'total_amount', 'Total Amount', ''),
(58, 'supplier_name', 'Supplier Name', ''),
(59, 'invoice_no', 'Sale No', ''),
(60, 'purchase_date', 'Purchase Date', ''),
(61, 'todays_purchase_report', 'Todays Purchase Report', ''),
(62, 'total_sales', 'Total Sales', ''),
(63, 'customer_name', 'Customer Name', ''),
(64, 'sales_date', 'Sales Date', ''),
(65, 'todays_sales_report', 'Todays Sales Report', ''),
(66, 'home', 'Home', ''),
(67, 'todays_sales_and_purchase_report', 'Todays sales and purchase report', ''),
(68, 'total_ammount', 'Total Amount', ''),
(69, 'rate', 'Rate', ''),
(70, 'product_model', 'Product Model', ''),
(71, 'product_name', 'Product Name', ''),
(72, 'search', 'Search', ''),
(73, 'end_date', 'End Date', ''),
(74, 'start_date', 'Start Date', ''),
(75, 'total_purchase_report', 'Total Purchase Report', ''),
(76, 'total_sales_report', 'Total Sales Report', ''),
(77, 'total_seles', 'Total Sales', ''),
(78, 'all_stock_report', 'All Stock Report', ''),
(79, 'search_by_product', 'Search By Product', ''),
(80, 'date', 'Date', ''),
(81, 'print', 'Print', ''),
(82, 'stock_date', 'Stock Date', ''),
(83, 'print_date', 'Print Date', ''),
(84, 'sales', 'Sales', ''),
(85, 'price', 'Price', ''),
(86, 'sl', 'SL.', ''),
(87, 'add_new_category', 'Add new category', ''),
(88, 'category_name', 'Category Name', ''),
(89, 'save', 'Save', ''),
(90, 'delete', 'Delete', ''),
(91, 'update', 'Update', ''),
(92, 'action', 'Action', ''),
(93, 'manage_your_category', 'Manage your category ', ''),
(94, 'category_edit', 'Category Edit', ''),
(95, 'status', 'Status', ''),
(96, 'active', 'Active', ''),
(97, 'inactive', 'Inactive', ''),
(98, 'save_changes', 'Save Changes', ''),
(99, 'save_and_add_another', 'Save And Add Another', ''),
(100, 'model', 'Model', ''),
(101, 'supplier_price', 'Supplier Price', ''),
(102, 'sell_price', 'Sell Price', ''),
(103, 'image', 'Image', ''),
(104, 'select_one', 'Select One', ''),
(105, 'details', 'Details', ''),
(106, 'new_product', 'New Product', ''),
(107, 'add_new_product', 'Add new product', ''),
(108, 'barcode', 'Barcode', ''),
(109, 'qr_code', 'Qr-Code', ''),
(110, 'product_details', 'Product Details', ''),
(111, 'manage_your_product', 'Manage your product', ''),
(112, 'product_edit', 'Product Edit', ''),
(113, 'edit_your_product', 'Edit your product', ''),
(114, 'cancel', 'Cancel', ''),
(115, 'incl_vat', 'Incl. Vat', ''),
(116, 'money', 'TK', ''),
(117, 'grand_total', 'Grand Total', ''),
(118, 'quantity', 'Quantity', ''),
(119, 'product_report', 'Product Report', ''),
(120, 'product_sales_and_purchase_report', 'Product sales and purchase report', ''),
(121, 'previous_stock', 'Previous Stock', ''),
(122, 'out', 'Out', ''),
(123, 'in', 'In', ''),
(124, 'to', 'To', ''),
(125, 'previous_balance', 'Previous Balance', ''),
(126, 'customer_address', 'Customer Address', ''),
(127, 'customer_mobile', 'Customer Mobile', ''),
(128, 'customer_email', 'Customer Email', ''),
(129, 'add_new_customer', 'Add new customer', ''),
(130, 'balance', 'Balance', ''),
(131, 'mobile', 'Mobile', ''),
(132, 'address', 'Address', ''),
(133, 'manage_your_customer', 'Manage your customer', ''),
(134, 'customer_edit', 'Customer Edit', ''),
(135, 'paid_customer_list', 'Paid Customer List', ''),
(136, 'ammount', 'Amount', ''),
(137, 'customer_ledger', 'Customer Ledger', ''),
(138, 'manage_customer_ledger', 'Manage Customer Ledger', ''),
(139, 'customer_information', 'Customer Information', ''),
(140, 'debit_ammount', 'Debit Amount', ''),
(141, 'credit_ammount', 'Credit Amount', ''),
(142, 'balance_ammount', 'Balance Amount', ''),
(143, 'receipt_no', 'Receipt NO', ''),
(144, 'description', 'Description', ''),
(145, 'debit', 'Debit', ''),
(146, 'credit', 'Credit', ''),
(147, 'item_information', 'Item Information', ''),
(148, 'total', 'Total', ''),
(149, 'please_select_supplier', 'Please Select Supplier', ''),
(150, 'submit', 'Submit', ''),
(151, 'submit_and_add_another', 'Submit And Add Another One', ''),
(152, 'add_new_item', 'Add New Item', ''),
(153, 'manage_your_purchase', 'Manage your purchase', ''),
(154, 'purchase_edit', 'Purchase Edit', ''),
(155, 'purchase_ledger', 'Purchase Ledger', ''),
(156, 'invoice_information', 'Invoice Information', ''),
(157, 'paid_ammount', 'Paid Amount', ''),
(158, 'discount', 'Discount/Pcs.', ''),
(159, 'save_and_paid', 'Save And Paid', ''),
(160, 'payee_name', 'Payee Name', ''),
(161, 'manage_your_invoice', 'Manage your invoice', ''),
(162, 'invoice_edit', 'Invoice Edit', ''),
(163, 'new_pos_invoice', 'New POS invoice', ''),
(164, 'add_new_pos_invoice', 'Add new pos invoice', ''),
(165, 'product_id', 'Product ID', ''),
(166, 'paid_amount', 'Paid Amount', ''),
(167, 'authorised_by', 'Authorised By', ''),
(168, 'checked_by', 'Checked By', ''),
(169, 'received_by', 'Received By', ''),
(170, 'prepared_by', 'Prepared By', ''),
(171, 'memo_no', 'Memo No', ''),
(172, 'website', 'Website', ''),
(173, 'email', 'Email', ''),
(174, 'invoice_details', 'Invoice Details', ''),
(175, 'reset', 'Reset', ''),
(176, 'payment_account', 'Payment Account', ''),
(177, 'bank_name', 'Bank Name', ''),
(178, 'cheque_or_pay_order_no', 'Cheque/Pay Order No', ''),
(179, 'payment_type', 'Payment Type', ''),
(180, 'payment_from', 'Payment From', ''),
(181, 'payment_date', 'Payment Date', ''),
(182, 'add_income', 'Add Income', ''),
(183, 'cash', 'Cash', ''),
(184, 'cheque', 'Cheque', ''),
(185, 'pay_order', 'Pay Order', ''),
(186, 'payment_to', 'Payment To', ''),
(187, 'total_outflow_ammount', 'Total Expense Amount', ''),
(188, 'transections', 'Transections', ''),
(189, 'accounts_name', 'Accounts Name', ''),
(190, 'outflow_report', 'Expense Report', ''),
(191, 'inflow_report', 'Income Report', ''),
(192, 'all', 'All', ''),
(193, 'account', 'Account', ''),
(194, 'from', 'From', ''),
(195, 'account_summary_report', 'Account Summary Report', ''),
(196, 'search_by_date', 'Search By Date', ''),
(197, 'cheque_no', 'Cheque No', ''),
(198, 'name', 'Name', ''),
(199, 'closing_account', 'Closing Account', ''),
(200, 'close_your_account', 'Close your account', ''),
(201, 'last_day_closing', 'Last Day Closing', ''),
(202, 'cash_in', 'Cash In', ''),
(203, 'cash_out', 'Cash Out', ''),
(204, 'cash_in_hand', 'Cash In Hand', ''),
(205, 'add_new_bank', 'Add New Bank', ''),
(206, 'day_closing', 'Day Closing', ''),
(207, 'account_closing_report', 'Account Closing Report', ''),
(208, 'last_day_ammount', 'Last Day Amount', ''),
(209, 'adjustment', 'Adjustment', ''),
(210, 'pay_type', 'Pay Type', ''),
(211, 'customer_or_supplier', 'Customer,Supplier Or Others', ''),
(212, 'transection_id', 'Transections ID', ''),
(213, 'accounts_summary_report', 'Accounts Summary Report', ''),
(214, 'bank_list', 'Bank List', ''),
(215, 'bank_edit', 'Bank Edit', ''),
(216, 'debit_plus', 'Debit (+)', ''),
(217, 'credit_minus', 'Credit (-)', ''),
(218, 'account_name', 'Account Name', ''),
(219, 'account_type', 'Account Type', ''),
(220, 'account_real_name', 'Account Real Name', ''),
(221, 'manage_account', 'Manage Account', ''),
(222, 'company_name', 'Niha International', ''),
(223, 'edit_your_company_information', 'Edit your company information', ''),
(224, 'company_edit', 'Company Edit', ''),
(225, 'admin', 'Admin', ''),
(226, 'user', 'User', ''),
(227, 'password', 'Password', ''),
(228, 'last_name', 'Last Name', ''),
(229, 'first_name', 'First Name', ''),
(230, 'add_new_user_information', 'Add new user information', ''),
(231, 'user_type', 'User Type', ''),
(232, 'user_edit', 'User Edit', ''),
(233, 'rtr', 'RTR', ''),
(234, 'ltr', 'LTR', ''),
(235, 'ltr_or_rtr', 'LTR/RTR', ''),
(236, 'footer_text', 'Footer Text', ''),
(237, 'favicon', 'Favicon', ''),
(238, 'logo', 'Logo', ''),
(239, 'update_setting', 'Update Setting', ''),
(240, 'update_your_web_setting', 'Update your web setting', ''),
(241, 'login', 'Login', ''),
(242, 'your_strong_password', 'Your strong password', ''),
(243, 'your_unique_email', 'Your unique email', ''),
(244, 'please_enter_your_login_information', 'Please enter your login information.', ''),
(245, 'update_profile', 'Update Profile', ''),
(246, 'your_profile', 'Your Profile', ''),
(247, 're_type_password', 'Re-Type Password', ''),
(248, 'new_password', 'New Password', ''),
(249, 'old_password', 'Old Password', ''),
(250, 'new_information', 'New Information', ''),
(251, 'old_information', 'Old Information', ''),
(252, 'change_your_information', 'Change your information', ''),
(253, 'change_your_profile', 'Change your profile', ''),
(254, 'profile', 'Profile', ''),
(255, 'wrong_username_or_password', 'Wrong User Name Or Password !', ''),
(256, 'successfully_updated', 'Successfully Updated.', ''),
(257, 'blank_field_does_not_accept', 'Blank Field Does Not Accept !', ''),
(258, 'successfully_changed_password', 'Successfully changed password.', ''),
(259, 'you_are_not_authorised_person', 'You are not authorised person !', ''),
(260, 'password_and_repassword_does_not_match', 'Passwor and re-password does not match !', ''),
(261, 'new_password_at_least_six_character', 'New Password At Least 6 Character.', ''),
(262, 'you_put_wrong_email_address', 'You put wrong email address !', ''),
(263, 'cheque_ammount_asjusted', 'Cheque amount adjusted.', ''),
(264, 'successfully_payment_paid', 'Successfully Payment Paid.', ''),
(265, 'successfully_added', 'Successfully Added.', ''),
(266, 'successfully_updated_2_closing_ammount_not_changeale', 'Successfully Updated -2. Note: Closing Amount Not Changeable.', ''),
(267, 'successfully_payment_received', 'Successfully Payment Received.', ''),
(268, 'already_inserted', 'Already Inserted !', ''),
(269, 'successfully_delete', 'Successfully Delete.', ''),
(270, 'successfully_created', 'Successfully Created.', ''),
(271, 'logo_not_uploaded', 'Logo not uploaded !', ''),
(272, 'favicon_not_uploaded', 'Favicon not uploaded !', ''),
(273, 'supplier_mobile', 'Supplier Mobile', ''),
(274, 'supplier_address', 'Supplier Address', ''),
(275, 'supplier_details', 'Supplier Details', ''),
(276, 'add_new_supplier', 'Add New Supplier', ''),
(277, 'manage_suppiler', 'Manage Supplier', ''),
(278, 'manage_your_supplier', 'Manage your supplier', ''),
(279, 'manage_supplier_ledger', 'Manage supplier ledger', ''),
(280, 'invoice_id', 'Invoice ID', ''),
(281, 'deposite_id', 'Deposite ID', ''),
(282, 'supplier_actual_ledger', 'Supplier Actual Ledger', ''),
(283, 'supplier_information', 'Supplier Information', ''),
(284, 'event', 'Event', ''),
(285, 'add_new_income', 'Add New Income', ''),
(286, 'add_expese', 'Add Expense', ''),
(287, 'add_new_expense', 'Add New Expense', ''),
(288, 'total_inflow_ammount', 'Total Income Amount', ''),
(289, 'create_new_invoice', 'Create New Invoice', ''),
(290, 'create_pos_invoice', 'Create POS Invoice', ''),
(291, 'total_profit', 'Total Profit', ''),
(292, 'monthly_progress_report', 'Monthly Progress Report', ''),
(293, 'total_invoice', 'Total Invoice', ''),
(294, 'account_summary', 'Account Summary', ''),
(295, 'total_supplier', 'Total Supplier', ''),
(296, 'total_product', 'Total Product', ''),
(297, 'total_customer', 'Total Customer', ''),
(298, 'supplier_edit', 'Supplier Edit', ''),
(299, 'add_new_invoice', 'Add New Invoice', ''),
(300, 'add_new_purchase', 'Add new purchase', ''),
(301, 'currency', 'Currency', ''),
(302, 'currency_position', 'Currency Position', ''),
(303, 'left', 'Left', ''),
(304, 'right', 'Right', ''),
(305, 'add_tax', 'Add Tax', ''),
(306, 'manage_tax', 'Manage Tax', ''),
(307, 'add_new_tax', 'Add new tax', ''),
(308, 'enter_tax', 'Enter Tax', ''),
(309, 'already_exists', 'Already Exists !', ''),
(310, 'successfully_inserted', 'Successfully Inserted.', ''),
(311, 'tax', 'Tax', ''),
(312, 'tax_edit', 'Tax Edit', ''),
(313, 'product_not_added', 'Product not added !', ''),
(314, 'total_tax', 'Total Tax', ''),
(315, 'manage_your_supplier_details', 'Manage your supplier details.', ''),
(316, 'invoice_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s                                       standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', ''),
(317, 'thank_you_for_choosing_us', 'Thank you very much for choosing us.', ''),
(318, 'billing_date', 'Billing Date', ''),
(319, 'billing_to', 'Billing To', ''),
(320, 'billing_from', 'Billing From', ''),
(321, 'you_cant_delete_this_product', 'Sorry !!  You can\'t delete this product.This product already used in calculation system!', ''),
(322, 'old_customer', 'Old Customer', ''),
(323, 'new_customer', 'New Customer', ''),
(324, 'new_supplier', 'New Supplier', ''),
(325, 'old_supplier', 'Old Supplier', ''),
(326, 'credit_customer', 'Credit Customer', ''),
(327, 'account_already_exists', 'This Account Already Exists !', ''),
(328, 'edit_income', 'Edit Income', ''),
(329, 'you_are_not_access_this_part', 'You are not authorised person !', ''),
(330, 'account_edit', 'Account Edit', ''),
(331, 'due', 'Due', ''),
(332, 'expense_edit', 'Expense Edit', ''),
(333, 'please_select_customer', 'Please select customer !', ''),
(334, 'profit_report', 'Profit Report (Invoice Wise)', ''),
(335, 'total_profit_report', 'Total profit report', ''),
(336, 'please_enter_valid_captcha', 'Please enter valid captcha.', ''),
(337, 'category_not_selected', 'Category not selected.', ''),
(338, 'supplier_not_selected', 'Supplier not selected.', ''),
(339, 'please_select_product', 'Please select product.', ''),
(340, 'product_model_already_exist', 'Product model already exist !', ''),
(341, 'invoice_logo', 'Invoice Logo', ''),
(342, 'available_ctn', 'Available Ctn.', ''),
(343, 'you_can_not_buy_greater_than_available_cartoon', 'You can not select grater than available cartoon !', ''),
(344, 'customer_details', 'Customer details', ''),
(345, 'manage_customer_details', 'Manage customer details.', ''),
(346, 'site_key', 'Captcha Site Key', ''),
(347, 'secret_key', 'Captcha Secret Key', ''),
(348, 'captcha', 'Captcha', ''),
(349, 'cartoon_quantity', 'Carton Quantity', ''),
(350, 'total_cartoon', 'Total Cartoon', ''),
(351, 'cartoon', 'Carton', ''),
(352, 'item_cartoon', 'Item/Cartoon', ''),
(353, 'product_and_supplier_did_not_match', 'Product and supplier did not match !', ''),
(354, 'if_you_update_purchase_first_select_supplier_then_product_and_then_cartoon', 'If you update purchase,first select supplier then product and then update cartoon.', ''),
(355, 'item', 'Item', ''),
(356, 'manage_your_credit_customer', 'Manage your credit customer', ''),
(357, 'total_quantity', 'Total Quantity', ''),
(358, 'quantity_per_cartoon', 'Quantity per carton', ''),
(359, 'barcode_qrcode_scan_here', 'Barcode or QR-code scan here', ''),
(360, 'synchronizer_setting', 'Synchronizer Setting', ''),
(361, 'data_synchronizer', 'Software Backup', ''),
(362, 'hostname', 'Host name', ''),
(363, 'username', 'User Name', ''),
(364, 'ftp_port', 'FTP Port', ''),
(365, 'ftp_debug', 'FTP Debug', ''),
(366, 'project_root', 'Project Root', ''),
(367, 'please_try_again', 'Please try again', ''),
(368, 'save_successfully', 'Save successfully', ''),
(369, 'synchronize', 'Synchronize', ''),
(370, 'internet_connection', 'Internet Connection', ''),
(371, 'outgoing_file', 'Outgoing File', ''),
(372, 'incoming_file', 'Incoming File', ''),
(373, 'ok', 'Ok', ''),
(374, 'not_available', 'Not Available', ''),
(375, 'available', 'Available', ''),
(376, 'download_data_from_server', 'Download data from server', ''),
(377, 'data_import_to_database', 'Data import to database', ''),
(378, 'data_upload_to_server', 'Data uplod to server', ''),
(379, 'please_wait', 'Please Wait', ''),
(380, 'ooops_something_went_wrong', 'Oooops Something went wrong !', ''),
(381, 'upload_successfully', 'Upload successfully', ''),
(382, 'unable_to_upload_file_please_check_configuration', 'Unable to upload file please check configuration', ''),
(383, 'please_configure_synchronizer_settings', 'Please configure synchronizer settings', ''),
(384, 'download_successfully', 'Download successfully', ''),
(385, 'unable_to_download_file_please_check_configuration', 'Unable to download file please check configuration', ''),
(386, 'data_import_first', 'Data import past', ''),
(387, 'data_import_successfully', 'Data import successfully', ''),
(388, 'unable_to_import_data_please_check_config_or_sql_file', 'Unable to import data please check config or sql file', ''),
(389, 'total_sale_ctn', 'Total Sale Ctn', ''),
(390, 'in_ctn', 'In Ctn.', ''),
(391, 'out_ctn', 'Out Ctn.', ''),
(392, 'stock_report_supplier_wise', 'Stock Report (Supplier Wise)', ''),
(393, 'all_stock_report_supplier_wise', 'Stock Report (Suppler Wise)', ''),
(394, 'select_supplier', 'Select Supplier', ''),
(395, 'stock_report_product_wise', 'Stock Report (Product Wise)', ''),
(396, 'phone', 'Phone', 'Ã Â¦Â«Ã Â§â€¹Ã Â¦Â¨'),
(397, 'select_product', 'Select Product', NULL),
(398, 'in_quantity', 'In Qnty.', NULL),
(399, 'out_quantity', 'Out Qnty.', NULL),
(400, 'in_taka', 'In TK.', NULL),
(401, 'out_taka', 'Out TK.', NULL),
(402, 'commission', 'Commission', NULL),
(403, 'generate_commission', 'Generate Commssion', NULL),
(404, 'commission_rate', 'Commission Rate', NULL),
(405, 'total_ctn', 'Total Ctn.', NULL),
(406, 'per_pcs_commission', 'Per PCS Commission', NULL),
(407, 'total_commission', 'Total Commission', NULL),
(408, 'enter', 'Enter', NULL),
(409, 'please_add_walking_customer_for_default_customer', 'Please add \'Walking Customer\' for default customer.', NULL),
(410, 'supplier_ammount', 'Supplier Amount', NULL),
(411, 'my_sale_ammount', 'My Sale Amount', NULL),
(412, 'signature_pic', 'Signature Picture', NULL),
(413, 'branch', 'Branch', NULL),
(414, 'ac_no', 'A/C Number', NULL),
(415, 'ac_name', 'A/C Name', NULL),
(416, 'bank_debit_credit_manage', 'Bank Dr. And Cr. Manage', NULL),
(417, 'bank', 'Bank', NULL),
(418, 'withdraw_deposite_id', 'Withdraw / Deposite ID', NULL),
(419, 'bank_ledger', 'Bank Ledger', NULL),
(420, 'note_name', 'Note Name', NULL),
(421, 'pcs', 'Pcs.', NULL),
(422, '1', '1', NULL),
(423, '2', '2', NULL),
(424, '5', '5', NULL),
(425, '10', '10', NULL),
(426, '20', '20', NULL),
(427, '50', '50', NULL),
(428, '100', '100', NULL),
(429, '500', '500', NULL),
(430, '1000', '1000', NULL),
(431, 'total_discount', 'Total Discount', NULL),
(432, 'product_not_found', 'Product not found !', NULL),
(433, 'this_is_not_credit_customer', 'This is not credit customer !', NULL),
(434, 'personal_loan', 'Personal Loan', NULL),
(435, 'add_person', 'Add Person', NULL),
(436, 'add_loan', 'Add Loan', NULL),
(437, 'add_payment', 'Add Payment', NULL),
(438, 'manage_person', 'Manage Person', NULL),
(439, 'personal_edit', 'Person Edit', NULL),
(440, 'person_ledger', 'Person Ledger', NULL),
(441, 'backup_restore', 'Backup and restore', NULL),
(442, 'database_backup', 'Database backup', NULL),
(443, 'file_information', 'File information', NULL),
(444, 'filename', 'Filename', NULL),
(445, 'size', 'Size', NULL),
(446, 'backup_date', 'Backup date', NULL),
(447, 'backup_now', 'Backup now', NULL),
(448, 'restore_now', 'Restore now', NULL),
(449, 'are_you_sure', 'Are you sure ?', NULL),
(450, 'download', 'Download', NULL),
(451, 'backup_and_restore', 'Backup and restore', NULL),
(452, 'backup_successfully', 'Backup successfully', NULL),
(453, 'delete_successfully', 'Delete successfully', NULL),
(454, 'stock_ctn', 'Stock/Qnt', NULL),
(455, 'unit', 'Unit', NULL),
(456, 'meter_m', 'Meter (M)', NULL),
(457, 'piece_pc', 'Piece (Pc)', NULL),
(458, 'kilogram_kg', 'Kilogram (Kg)', NULL),
(459, 'stock_cartoon', 'Stock Cartoon', NULL),
(460, 'add_product_csv', 'Add Product (CSV)', NULL),
(461, 'import_product_csv', 'Import product (CSV)', NULL),
(462, 'close', 'Close', NULL),
(463, 'download_example_file', 'Download example file.', NULL),
(464, 'upload_csv_file', 'Upload CSV File', NULL),
(465, 'csv_file_informaion', 'CSV File Information', NULL),
(466, 'out_of_stock', 'Out Of Stock', NULL),
(467, 'others', 'Others', NULL),
(468, 'full_paid', 'Full Paid', NULL),
(469, 'successfully_saved', 'Your Data Successfully Saved', NULL),
(470, 'manage_loan', 'Manage Loan', NULL),
(471, 'receipt', 'Receipt', NULL),
(472, 'payment', 'Payment', NULL),
(473, 'cashflow', 'Daily Cash Flow', NULL),
(474, 'signature', 'Signature', NULL),
(475, 'supplier_reports', 'Supplier Reports', NULL),
(476, 'generate', 'Generate', NULL),
(477, 'save_change', 'Save Change', NULL),
(478, 'loan_edit', 'Edit loan', NULL),
(479, 'ac_number', 'A/C Number', NULL),
(480, 'bank_transection', 'Bank transaction', NULL),
(481, 'total_purch_ctn', 'Total P Cartoon', NULL),
(482, 'supplier_actual_saleprice', 'Supplier Actual sales', NULL),
(483, 'supplier_payment_ledger', 'Supplier Payment', NULL),
(484, 'supplier_actual_ledger_sale', 'Supplier Actual Ledger(sale)', NULL),
(485, 'supplier_actual_ledger_sup', 'Supplier Actual Ledger(supplier)', NULL),
(486, 'supplier_payment', 'Supplier Payment', NULL),
(487, 'supplier_summary', 'Supplier Summary', NULL),
(488, 'create_account', 'Create Account', NULL),
(489, 'manage_transaction', 'Manage transaction', NULL),
(490, 'daily_summary', 'Daily Summary', NULL),
(491, 'daily_cashflow', 'Daily Cashflow', NULL),
(492, 'custom_report', 'Cutom report', NULL),
(493, 'transaction', 'Transaction', NULL),
(494, 'add_new_payment', 'Add new payment', NULL),
(495, 'add_receipt', 'Add receipt', NULL),
(496, 'add_new_receipt', 'Add new receipt', NULL),
(497, 'receipt_amount', 'Receipt amount', NULL),
(498, 'transaction_details', 'Transaction details', NULL),
(499, 'choose_transaction', 'Choose transaction', NULL),
(500, 'transaction_categry', 'Transaction Category', NULL),
(501, 'select_account', 'Select Account', NULL),
(502, 'transaction_mood', 'Transaction Mood', NULL),
(503, 'payment_amount', 'Payment Amount', NULL),
(504, 'personal_loan1', 'Personal Loan', NULL),
(505, 'company_name_label', 'Company name', NULL),
(506, 'root_account', 'Root Account', NULL),
(507, 'cash_receipt', 'Cash Receipt', NULL),
(508, 'customer_copy', 'Customer Copy', NULL),
(509, 'office_copy', 'Office Copy', NULL),
(510, 'role_permission', 'Role Permission', NULL),
(511, 'add_menu', 'Add Menu', NULL),
(512, 'add_role', 'Add Role', NULL),
(513, 'role_list', 'Role List', NULL),
(514, 'user_assign_role', 'User Assign Role', NULL),
(515, 'menu_name', 'Menu Name', NULL),
(516, 'menu_url', 'Menu URL', NULL),
(517, 'menu_setup', 'Menusetup', NULL),
(518, 'menu_entry', 'Menu Entry', NULL),
(519, 'menu_list', 'Menu Entry', NULL),
(520, 'module', 'Module', NULL),
(521, 'order', 'Order', NULL),
(522, 'parent_menu', 'Parent Menu', NULL),
(523, 'icon', 'Icon', NULL),
(524, 'data_not_found', 'Record not found!', NULL),
(525, 'menu_edit', 'Menu Edit', NULL),
(526, 'role_name', 'Role Name', NULL),
(527, 'back', 'Back', NULL),
(528, 'role_edit', 'Role Edit', NULL),
(529, 'user_name', 'User Name', NULL),
(530, 'assign_user_role', 'Assign User Role', NULL),
(531, 'assigned_role', 'Assigned Role', NULL),
(532, 'access_role', 'Access Role', NULL),
(533, 'edit_information', 'Edit Information', NULL),
(534, 'account_report', 'Account Report', NULL),
(535, 'office_loan', 'Office Loan', NULL),
(536, 'backup', 'Database Export', NULL),
(537, 'daily_summery', 'Daily Summery', NULL),
(538, 'manage_user', 'Manage User', NULL),
(539, 'forgot_password', 'Forgot Password', NULL),
(540, 'password_recovery', 'Password Recovery', NULL),
(541, 'database_import', 'Database Import', NULL),
(542, 'import', 'Import', NULL),
(543, 'db_import', 'Database Import', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mail_config_tbl`
--

CREATE TABLE `mail_config_tbl` (
  `id` int(11) NOT NULL,
  `protocol` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `smtp_host` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `smtp_port` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `smtp_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `smtp_pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mailtype` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mail_config_tbl`
--

INSERT INTO `mail_config_tbl` (`id`, `protocol`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `mailtype`, `updated_by`, `updated_date`, `status`) VALUES
(1, 'smtp', 'ssl://smtp.gmail.com', '465', 'khs2010welfare@gmail.com', 'bvrayygbwwmxnkdj', 'html', 1, '2019-07-09 06:50:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menusetup_tbl`
--

CREATE TABLE `menusetup_tbl` (
  `id` int(11) NOT NULL,
  `menu_title` varchar(200) NOT NULL,
  `page_url` varchar(200) NOT NULL,
  `module` varchar(200) NOT NULL,
  `ordering` int(3) DEFAULT NULL,
  `parent_menu` int(11) NOT NULL,
  `is_report` tinyint(1) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `created_by` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menusetup_tbl`
--

INSERT INTO `menusetup_tbl` (`id`, `menu_title`, `page_url`, `module`, `ordering`, `parent_menu`, `is_report`, `icon`, `status`, `created_by`, `create_date`) VALUES
(1, 'dashboard', '', 'dashboard', 1, 0, 0, 'ti-dashboard', 1, 1, '2019-09-17 06:25:39'),
(2, 'invoice', '', 'invoice', 2, 0, 0, 'ti-layout-accordion-list', 1, 1, '2019-09-17 06:26:18'),
(3, 'new_invoice', 'Cinvoice', 'invoice', 1, 2, 0, '', 1, 1, '2019-09-17 06:27:33'),
(4, 'manage_invoice', 'Cinvoice/manage_invoice', 'invoice', 2, 2, 0, '', 1, 1, '2019-09-17 08:19:41'),
(5, 'pos_invoice', 'Cinvoice/pos_invoice', 'invoice', 3, 2, 0, '', 1, 1, '2019-09-17 08:20:12'),
(6, 'category', 'Ccategory', 'product', 1, 9, 0, 'ti-tag', 1, 1, '2019-09-17 08:20:59'),
(7, 'add_category', 'Ccategory', 'category', 1, 6, 0, '', 0, 1, '2019-09-17 08:21:26'),
(8, 'manage_category', 'Ccategory/manage_category', 'category', 2, 6, 0, '', 0, 1, '2019-09-17 08:22:50'),
(9, 'product', '', 'product', 4, 0, 0, 'ti-bag', 1, 1, '2019-09-17 08:23:56'),
(10, 'add_product', 'Cproduct', 'product', 1, 9, 0, '', 1, 1, '2019-09-17 08:24:22'),
(11, 'manage_product', 'Cproduct/manage_product', 'product', 2, 9, 0, '', 1, 1, '2019-09-17 08:26:22'),
(12, 'customer', '', 'customer', 5, 0, 0, 'fa fa-handshake-o', 1, 1, '2019-09-17 08:27:45'),
(13, 'add_customer', 'Ccustomer', 'customer', 1, 12, 0, '', 1, 1, '2019-09-17 08:28:35'),
(14, 'manage_customer', 'Ccustomer/manage_customer', 'customer', 2, 12, 0, '', 1, 1, '2019-09-17 08:29:09'),
(15, 'credit_customer', 'Ccustomer/credit_customer', 'customer', 3, 12, 0, '', 1, 1, '2019-09-17 08:29:42'),
(16, 'paid_customer', 'Ccustomer/paid_customer', 'customer', 4, 12, 0, '', 1, 1, '2019-09-17 08:30:01'),
(17, 'supplier', '', 'supplier', 6, 0, 0, 'ti-user', 1, 1, '2019-09-17 08:30:56'),
(18, 'add_supplier', 'Csupplier', 'supplier', 1, 17, 0, '', 1, 1, '2019-09-17 08:31:17'),
(19, 'manage_supplier', 'Csupplier/manage_supplier', 'supplier', 2, 17, 0, '', 1, 1, '2019-09-17 08:31:43'),
(20, 'supplier_ledger', 'Csupplier/supplier_ledger_report', 'supplier', 3, 17, 0, '', 1, 1, '2019-09-17 08:32:21'),
(21, 'supplier_actual_ledger_sale', 'Csupplier/supplier_actual_ledger_sales_price', 'supplier', 4, 17, 0, '', 1, 1, '2019-09-17 08:33:21'),
(22, 'supplier_payment_ledger', 'Csupplier/supplier_payment', 'supplier', 5, 17, 0, '', 1, 1, '2019-09-17 08:42:06'),
(23, 'supplier_sales_details', 'Csupplier/supplier_sales_details_all', 'supplier', 6, 17, 0, '', 1, 1, '2019-09-17 08:42:39'),
(24, 'purchase', '', 'purchase', 7, 0, 0, 'ti-shopping-cart', 1, 1, '2019-09-17 08:43:19'),
(25, 'add_purchase', 'Cpurchase', 'purchase', 1, 24, 0, '', 1, 1, '2019-09-17 08:43:44'),
(26, 'manage_purchase', 'Cpurchase/manage_purchase', 'purchase', 2, 24, 0, '', 1, 1, '2019-09-17 08:44:17'),
(27, 'accounts', '', 'accounts', 8, 0, 0, 'fa fa-money', 1, 1, '2019-09-17 08:45:18'),
(38, 'stock', '', 'stock', 9, 0, 0, 'ti-bar-chart', 1, 1, '2019-09-17 09:56:14'),
(39, 'stock_report', 'Creport', 'stock', 1, 38, 0, '', 1, 1, '2019-09-17 09:57:03'),
(40, 'stock_report_supplier_wise', 'Creport/stock_report_supplier_wise', 'stock', 2, 38, 0, '', 1, 1, '2019-09-17 09:57:26'),
(41, 'stock_report_product_wise', 'Creport/stock_report_product_wise', 'stock', 3, 38, 0, '', 1, 1, '2019-09-17 09:57:57'),
(42, 'report', '', 'report', 10, 0, 0, 'ti-book', 1, 1, '2019-09-17 09:59:32'),
(43, 'todays_report', 'Admin_dashboard/all_report', 'report', 1, 42, 0, '', 1, 1, '2019-09-17 10:00:43'),
(44, 'sales_report', 'Admin_dashboard/todays_sales_report', 'report', 2, 42, 0, '', 1, 1, '2019-09-17 10:01:16'),
(45, 'purchase_report', 'Admin_dashboard/todays_purchase_report', 'report', 0, 42, 0, '', 1, 1, '2019-09-17 10:06:54'),
(46, 'sales_report_product_wise', 'Admin_dashboard/product_sales_reports_date_wise', 'report', 0, 42, 0, '', 1, 1, '2019-09-17 10:08:08'),
(47, 'profit_report', 'Admin_dashboard/total_profit_report', 'report', 0, 42, 0, '', 1, 1, '2019-09-17 10:08:25'),
(48, 'bank', '', 'bank', 11, 0, 0, 'ti-briefcase', 1, 1, '2019-09-17 10:09:14'),
(49, 'add_new_bank', 'Csettings/index', 'bank', 1, 48, 0, '', 1, 1, '2019-09-17 10:09:37'),
(50, 'bank_transection', 'Csettings/bank_transaction', 'bank', 2, 48, 0, '', 1, 1, '2019-09-17 10:10:02'),
(51, 'manage_bank', 'Csettings/bank_list', 'bank', 3, 48, 0, '', 1, 1, '2019-09-17 10:10:24'),
(52, 'commission', '', 'commission', 12, 0, 0, 'ti-layout-grid2', 1, 1, '2019-09-17 10:11:44'),
(53, 'generate_commission', 'Csettings/commission', 'commission', 0, 52, 0, '', 1, 1, '2019-09-17 10:12:14'),
(54, 'office_loan', '', 'office_loan', 13, 0, 0, 'fa fa-university', 1, 1, '2019-09-17 10:15:40'),
(55, 'add_person', 'Cloan/add1_person', 'office_loan', 0, 54, 0, '', 1, 1, '2019-09-17 10:16:35'),
(56, 'manage_loan', 'Cloan/manage1_person', 'office_loan', 2, 54, 0, '', 1, 1, '2019-09-17 10:19:51'),
(57, 'personal_loan', '', 'personal_loan', 14, 0, 0, 'fa fa-user-circle', 1, 1, '2019-09-17 10:25:01'),
(58, 'add_person', 'Csettings/add_person', 'personal_loan', 1, 57, 0, '', 1, 1, '2019-09-17 10:27:16'),
(59, 'manage_person', 'Csettings/manage_person', 'personal_loan', 2, 57, 0, '', 1, 1, '2019-09-17 10:27:47'),
(60, 'add_loan', 'Csettings/add_loan', 'personal_loan', 3, 57, 0, '', 1, 1, '2019-09-17 10:28:16'),
(61, 'manage_loan', 'Csettings/manage_loan', 'personal_loan', 4, 57, 0, '', 1, 1, '2019-09-17 10:28:39'),
(62, 'add_payment', 'Csettings/add_payment', 'personal_loan', 5, 57, 0, '', 1, 1, '2019-09-17 10:29:26'),
(63, 'data_synchronizer', '', 'data_synchronizer', 15, 0, 0, 'ti-reload', 1, 1, '2019-09-17 10:29:52'),
(64, 'backup', 'Backup_restore', 'data_synchronizer', 1, 63, 0, '', 1, 1, '2019-09-17 10:30:31'),
(65, 'role_permission', '', 'role_permission', 16, 0, 0, 'ti-settings', 1, 1, '2019-09-17 10:31:13'),
(66, 'add_menu', 'CRole/menu_setup', 'role_permission', 1, 65, 0, '', 1, 1, '2019-09-17 10:31:40'),
(67, 'add_role', 'CRole/role_permission', 'role_permission', 2, 65, 0, '', 1, 1, '2019-09-17 10:31:59'),
(68, 'role_list', 'CRole/role_list', 'role_permission', 3, 65, 0, '', 1, 1, '2019-09-17 10:32:21'),
(69, 'user_assign_role', 'CRole/user_role', 'role_permission', 4, 65, 0, '', 1, 1, '2019-09-17 10:32:49'),
(70, 'assigned_role', 'CRole/access_role', 'role_permission', 5, 65, 0, '', 1, 1, '2019-09-17 10:33:10'),
(71, 'web_settings', '', 'web_settings', 17, 0, 0, 'ti-settings', 1, 1, '2019-09-17 10:33:53'),
(72, 'manage_company', 'Company_setup/manage_company', 'web_settings', 1, 71, 0, '', 1, 1, '2019-09-17 10:34:15'),
(73, 'add_user', 'User', 'web_settings', 2, 71, 0, '', 1, 1, '2019-09-17 10:34:33'),
(74, 'manage_user', 'User/manage_user', 'web_settings', 3, 71, 0, '', 1, 1, '2019-09-17 10:34:54'),
(75, 'language', 'Language', 'web_settings', 4, 71, 0, '', 1, 1, '2019-09-17 10:35:38'),
(76, 'setting', 'Cweb_setting', 'web_settings', 5, 71, 0, '', 1, 1, '2019-09-17 10:36:05'),
(77, 'create_account', 'Account_Controller', 'accounts', 1, 27, 0, '', 1, 1, '2019-09-17 11:16:05'),
(78, 'manage_account', 'Account_Controller/manage_account', 'accounts', 2, 27, 0, '', 1, 1, '2019-09-17 11:18:48'),
(79, 'payment', 'Cpayment', 'accounts', 3, 27, 0, '', 1, 1, '2019-09-17 11:19:57'),
(80, 'receipt', 'Cpayment/receipt_transaction', 'accounts', 4, 27, 0, '', 1, 1, '2019-09-17 11:20:41'),
(81, 'manage_transaction', 'Cpayment/manage_payment', 'accounts', 5, 27, 0, '', 1, 1, '2019-09-17 11:22:07'),
(82, 'closing', 'Cpayment/closing', 'accounts', 6, 27, 0, '', 1, 1, '2019-09-17 11:23:13'),
(83, 'account_report', '', 'accounts', 7, 27, 0, '', 1, 1, '2019-09-17 11:25:32'),
(84, 'daily_summery', 'Cpayment/summaryy', 'accounts', 0, 83, 0, '', 1, 1, '2019-09-17 11:26:23'),
(85, 'daily_cashflow', 'Cpayment/date_summary', 'accounts', 0, 83, 0, '', 1, 1, '2019-09-17 11:27:33'),
(86, 'closing_report', 'Cpayment/closing_report', 'accounts', 0, 83, 0, '', 1, 1, '2019-09-17 11:28:07'),
(87, 'database_import', 'Backup_restore/import_form', 'data_synchronizer', 0, 63, 0, '', 1, 1, '2019-09-21 09:05:31');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `note_id` int(11) NOT NULL,
  `cash_date` varchar(20) NOT NULL,
  `1000n` varchar(11) NOT NULL,
  `500n` varchar(11) NOT NULL,
  `100n` varchar(11) NOT NULL,
  `50n` varchar(11) NOT NULL,
  `20n` varchar(11) NOT NULL,
  `10n` varchar(11) NOT NULL,
  `5n` varchar(11) NOT NULL,
  `2n` varchar(11) NOT NULL,
  `1n` varchar(30) NOT NULL,
  `grandtotal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `outflow_1td1fz8uvv`
--

CREATE TABLE `outflow_1td1fz8uvv` (
  `transection_id` varchar(200) NOT NULL,
  `tracing_id` varchar(200) NOT NULL,
  `payment_type` varchar(10) NOT NULL,
  `date` varchar(255) NOT NULL,
  `amount` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `outflow_pt3vxiow9x`
--

CREATE TABLE `outflow_pt3vxiow9x` (
  `transection_id` varchar(200) NOT NULL,
  `tracing_id` varchar(200) NOT NULL,
  `payment_type` varchar(10) NOT NULL,
  `date` varchar(255) NOT NULL,
  `amount` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal_loan`
--

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

--
-- Dumping data for table `personal_loan`
--

INSERT INTO `personal_loan` (`per_loan_id`, `transaction_id`, `person_id`, `debit`, `credit`, `date`, `details`, `status`) VALUES
(1, 'GNQS3SFKNQ', 'L1PMD8G982', 10000, 0, '25-10-2017', 'Cash', 1);

-- --------------------------------------------------------

--
-- Table structure for table `person_information`
--

CREATE TABLE `person_information` (
  `person_id` varchar(50) NOT NULL,
  `person_name` varchar(50) NOT NULL,
  `person_phone` varchar(50) NOT NULL,
  `person_address` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `person_information`
--

INSERT INTO `person_information` (`person_id`, `person_name`, `person_phone`, `person_address`, `status`) VALUES
('ZS9HP78AKG', 'Hannan', '0546546546', 'Sundorban Squre Super Market\r\nFirst Floor ,Shop # A15/16A ', 1),
('JGC4153QPL', 'Faruk', '0184646516', 'Sundorban Squre Super Market\r\n', 1),
('X396ZOTDXS', 'Test', '8768767657', '', 1),
('KU4VAMILU6', 'ahmads', '43535345345', 'dfgdfgd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `person_ledger`
--

CREATE TABLE `person_ledger` (
  `transaction_id` varchar(50) NOT NULL,
  `person_id` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `debit` float NOT NULL,
  `credit` float NOT NULL,
  `details` text NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=no paid,2=paid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `person_ledger`
--

INSERT INTO `person_ledger` (`transaction_id`, `person_id`, `date`, `debit`, `credit`, `details`, `status`) VALUES
('B41QDCC3A2TY5JM', 'JGC4153QPL', '26-10-2017', 0, 12000, '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pesonal_loan_information`
--

CREATE TABLE `pesonal_loan_information` (
  `person_id` varchar(50) NOT NULL,
  `person_name` varchar(50) NOT NULL,
  `person_phone` varchar(30) NOT NULL,
  `person_address` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesonal_loan_information`
--

INSERT INTO `pesonal_loan_information` (`person_id`, `person_name`, `person_phone`, `person_address`, `status`) VALUES
('L1PMD8G982', 'Tarek Vai', '0187774634', 'Farmgate,Dhaka', 1),
('1VVO7PVPIQ', 'Tanzil Ahmads', '3453456345634', '76 Newyork, Denmark', 1),
('TIT1QLU8H3', 'johan', '53463456', '98 Green Road,Farmgate', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `category_id` varchar(255) DEFAULT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category_id`, `category_name`, `status`) VALUES
('B7DFWBPPJM8X3OG', 'Electronics', 1),
('NIIYM6HERG6F57O', 'Food', 1),
('HOTLTE7GVXUDAB9', 'Cloths', 1),
('JWVIQBI1CIRUWJC', 'Mobile', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_information`
--

CREATE TABLE `product_information` (
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
  `status` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_information`
--

INSERT INTO `product_information` (`product_id`, `supplier_id`, `category_id`, `product_name`, `price`, `supplier_price`, `unit`, `cartoon_quantity`, `tax`, `product_model`, `product_details`, `image`, `status`) VALUES
('63853613', 'E674MTLPNV55PK67QHT4', '', 'Sunmoon', 220, 210, NULL, 40, 0, 'SM-771', '30 LED', 'http://www.farukandbrothers.com/my-assets/image/product.png', 1),
('83517747', 'E674MTLPNV55PK67QHT4', '', 'Sunmoon', 680, 670, NULL, 24, 0, 'SM-781', '63 LED', 'http://www.farukandbrothers.com/my-assets/image/product.png', 1),
('43238874', 'E674MTLPNV55PK67QHT4', '', 'Sunmoon', 98, 90, NULL, 120, 0, 'SM-8607', 'Torch', 'http://www.farukandbrothers.com/my-assets/image/product.png', 1),
('13177442', 'E674MTLPNV55PK67QHT4', '', 'Sunmoon', 230, 220, NULL, 50, 0, 'SM-378A', 'BAT ', 'http://www.farukandbrothers.com/my-assets/image/product.png', 1),
('19226752', '5I6N5LC8ZXDREA9CC3ZW', '', 'FOCUS', 210, 200, NULL, 60, 0, 'SF-6901', '48 LED ', 'http://www.farukandbrothers.com/my-assets/image/product.png', 1),
('63775648', '5I6N5LC8ZXDREA9CC3ZW', '', 'FOCUS', 210, 200, NULL, 60, 0, 'SF-7602T', '48 LED', 'http://www.farukandbrothers.com/my-assets/image/product.png', 1),
('97255764', '5I6N5LC8ZXDREA9CC3ZW', '', 'FOCUS', 190, 180, NULL, 40, 0, 'SF-6904', '30 LED', 'http://www.farukandbrothers.com/my-assets/image/product.png', 1),
('67197783', '5I6N5LC8ZXDREA9CC3ZW', '', 'FOCUS', 280, 260, NULL, 20, 0, 'SF-6905', '70 LED', 'http://www.farukandbrothers.com/my-assets/image/product.png', 1),
('94999792', 'V2GZ82OM42GWVKKCMIHN', 'NIIYM6HERG6F57O', 'Apple', 500, 480, NULL, 50, 0, 'DE453', '', 'http://wholesalenew.bdtask.com/my-assets/image/product/600fddeea44a61d533367704e7c66091.jpg', 1),
('86815584', 'PQXZV8ZUXUZPN3N4S2WC', 'B7DFWBPPJM8X3OG', 'light', 500, 460, NULL, 60, 0, 'SED675', '', 'http://wholesalenew.bdtask.com/my-assets/image/product/b776823e01ebcac8d7b945620f6fca4d.jpeg', 1),
('84662895', 'IOYDTFVIFMD8JQ7Z38OO', 'JWVIQBI1CIRUWJC', 'Mobile', 6000, 5600, NULL, 60, 0, 'GTY543', '', 'http://wholesalenew.bdtask.com/my-assets/image/product/b13be8233444ebf4d63f13475192136c.png', 1),
('67988258', 'E674MTLPNV55PK67QHT4', 'B7DFWBPPJM8X3OG', 'Laptop', 7000, 6000, NULL, 30, 0, 'VFR453', '', 'http://wholesalenew.bdtask.com/my-assets/image/product/34620917a7a18bbbd62ea0a59aba06dd.jpg', 1),
('38518544', 'V2GZ82OM42GWVKKCMIHN', 'NIIYM6HERG6F57O', 'Mum', 200, 150, NULL, 10, 0, '1111', 'demo', 'http://localhost/bdtask/wholesale/my-assets/image/product.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_purchase`
--

CREATE TABLE `product_purchase` (
  `purchase_id` varchar(100) NOT NULL,
  `chalan_no` varchar(100) NOT NULL,
  `supplier_id` varchar(100) NOT NULL,
  `grand_total_amount` float NOT NULL,
  `purchase_date` varchar(50) NOT NULL,
  `purchase_details` text NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_purchase`
--

INSERT INTO `product_purchase` (`purchase_id`, `chalan_no`, `supplier_id`, `grand_total_amount`, `purchase_date`, `purchase_details`, `status`) VALUES
('20171025135016', '1213', 'E674MTLPNV55PK67QHT4', 8322000, '25-10-2017', 'Dimond Transport', 1),
('20171025135107', '10212', '5I6N5LC8ZXDREA9CC3ZW', 1560000, '25-10-2017', 'Moon light Transport', 1),
('20171025135549', '10213', '5I6N5LC8ZXDREA9CC3ZW', 3021200, '25-10-2017', 'moon Light Tranort', 1),
('20171026123424', '46567', 'E674MTLPNV55PK67QHT4', 108000, '26-10-2017', 'No des', 1),
('20171106140319', '56756', 'E674MTLPNV55PK67QHT4', 50400000, '06-11-2017', '', 1),
('20171106141024', '6457', 'V2GZ82OM42GWVKKCMIHN', 12000000, '06-11-2017', '', 1),
('20171106141503', '6578', 'E674MTLPNV55PK67QHT4', 54000, '06-11-2017', '', 1),
('20171106141537', '7563', 'PQXZV8ZUXUZPN3N4S2WC', 1932000, '06-11-2017', '', 1),
('20171106141736', '6756', 'IOYDTFVIFMD8JQ7Z38OO', 235200000, '06-11-2017', '', 1),
('20190918133121', '159263', 'V2GZ82OM42GWVKKCMIHN', 37500, '2019-09-18', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_purchase_details`
--

CREATE TABLE `product_purchase_details` (
  `purchase_detail_id` varchar(100) NOT NULL,
  `purchase_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rate` float NOT NULL,
  `total_amount` float NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_purchase_details`
--

INSERT INTO `product_purchase_details` (`purchase_detail_id`, `purchase_id`, `product_id`, `quantity`, `rate`, `total_amount`, `status`) VALUES
('BT9MiKFBw9efW6l', '20171025135016', '63853613', 4440, 210, 932400, 1),
('EctpylCsUdsHjvb', '20171025135016', '83517747', 2880, 670, 1929600, 1),
('rxxqBT1GXnF2Jcw', '20171025135016', '43238874', 24000, 90, 2160000, 1),
('ugPeLDFOvZrehQQ', '20171025135016', '13177442', 15000, 220, 3300000, 1),
('tzqQ0xSYfuzHta7', '20171025135107', '19226752', 7800, 200, 1560000, 1),
('WheTkojPqigoex6', '20171025135549', '63775648', 9000, 200, 1800000, 1),
('UxN7M3FofIS42fh', '20171025135549', '97255764', 400, 180, 72000, 1),
('N2FqNpTv6CVbqyP', '20171025135549', '67197783', 4420, 260, 1149200, 1),
('t1QtO6j65NZO09R', '20171026123424', '43238874', 1200, 90, 108000, 1),
('bG7pIeDWHY3zeFu', '20171106140319', '63853613', 240000, 210, 50400000, 1),
('8tMJPpR7FH7VcrF', '20171106141024', '94999792', 25000, 480, 12000000, 1),
('1cZYAghmI5GJfRa', '20171106141503', '43238874', 600, 90, 54000, 1),
('quqnJgDIlyaJoCB', '20171106141537', '86815584', 4200, 460, 1932000, 1),
('chIdDo51AO2WA0S', '20171106141736', '84662895', 42000, 5600, 235200000, 1),
('ZTMqyQwxIbBrEQM', '20190918133121', '38518544', 250, 150, 37500, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_report`
-- (See below for the actual view)
--
CREATE TABLE `product_report` (
`date` varchar(50)
,`product_id` varchar(100)
,`quantity` double
,`rate` float
,`total_amount` double
,`account` varchar(1)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_supplier`
-- (See below for the actual view)
--
CREATE TABLE `product_supplier` (
`product_id` varchar(100)
,`product_name` varchar(255)
,`product_model` varchar(100)
,`supplier_id` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `purchase_report`
-- (See below for the actual view)
--
CREATE TABLE `purchase_report` (
`purchase_date` varchar(50)
,`chalan_no` varchar(100)
,`supplier_id` varchar(100)
,`purchase_detail_id` varchar(100)
,`purchase_id` varchar(100)
,`product_id` varchar(100)
,`quantity` int(11)
,`rate` float
,`total_amount` float
,`status` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `role_permission_tbl`
--

CREATE TABLE `role_permission_tbl` (
  `id` bigint(20) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `can_access` tinyint(1) NOT NULL,
  `can_create` tinyint(1) NOT NULL,
  `can_edit` tinyint(1) NOT NULL,
  `can_delete` tinyint(1) NOT NULL,
  `created_by` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_permission_tbl`
--

INSERT INTO `role_permission_tbl` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `created_by`, `create_date`) VALUES
(5, 2, 2, 1, 1, 0, 1, 1, '2019-09-16 11:42:00'),
(6, 2, 3, 1, 1, 0, 1, 1, '2019-09-16 11:42:00'),
(7, 1, 1, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(8, 1, 2, 1, 1, 0, 0, 1, '2019-09-18 05:32:36'),
(9, 1, 3, 1, 1, 1, 0, 1, '2019-09-18 05:32:36'),
(10, 1, 4, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(11, 1, 5, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(12, 1, 6, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(13, 1, 7, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(14, 1, 8, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(15, 1, 9, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(16, 1, 10, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(17, 1, 11, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(18, 1, 12, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(19, 1, 13, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(20, 1, 14, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(21, 1, 15, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(22, 1, 16, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(23, 1, 17, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(24, 1, 18, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(25, 1, 19, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(26, 1, 20, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(27, 1, 21, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(28, 1, 22, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(29, 1, 23, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(30, 1, 24, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(31, 1, 25, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(32, 1, 26, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(33, 1, 27, 0, 1, 0, 0, 1, '2019-09-18 05:32:36'),
(34, 1, 77, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(35, 1, 78, 0, 1, 0, 0, 1, '2019-09-18 05:32:36'),
(36, 1, 79, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(37, 1, 80, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(38, 1, 81, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(39, 1, 82, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(40, 1, 83, 0, 1, 0, 0, 1, '2019-09-18 05:32:36'),
(41, 1, 84, 1, 1, 1, 1, 1, '2019-09-18 05:32:36'),
(42, 1, 85, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(43, 1, 86, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(44, 1, 38, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(45, 1, 39, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(46, 1, 40, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(47, 1, 41, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(48, 1, 42, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(49, 1, 43, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(50, 1, 44, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(51, 1, 45, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(52, 1, 46, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(53, 1, 47, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(54, 1, 48, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(55, 1, 49, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(56, 1, 50, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(57, 1, 51, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(58, 1, 52, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(59, 1, 53, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(60, 1, 54, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(61, 1, 55, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(62, 1, 56, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(63, 1, 57, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(64, 1, 58, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(65, 1, 59, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(66, 1, 60, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(67, 1, 61, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(68, 1, 62, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(69, 1, 63, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(70, 1, 64, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(71, 1, 65, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(72, 1, 66, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(73, 1, 67, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(74, 1, 68, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(75, 1, 69, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(76, 1, 70, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(77, 1, 71, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(78, 1, 72, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(79, 1, 73, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(80, 1, 74, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(81, 1, 75, 0, 0, 0, 0, 1, '2019-09-18 05:32:36'),
(82, 1, 76, 0, 0, 0, 0, 1, '2019-09-18 05:32:36');

-- --------------------------------------------------------

--
-- Table structure for table `role_tbl`
--

CREATE TABLE `role_tbl` (
  `id` int(11) NOT NULL,
  `role_name` text CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `created_by` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role_status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_tbl`
--

INSERT INTO `role_tbl` (`id`, `role_name`, `description`, `created_by`, `create_date`, `role_status`) VALUES
(1, 'Role one', 'demo', 1, '2019-09-16 07:03:27', 1),
(2, 'Role two', 'description', 1, '2019-09-16 11:42:00', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sales_actual`
-- (See below for the actual view)
--
CREATE TABLE `sales_actual` (
`DATE` varchar(50)
,`supplier_id` varchar(100)
,`sub_total` double
,`no_transection` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sales_report`
-- (See below for the actual view)
--
CREATE TABLE `sales_report` (
`date` varchar(50)
,`invoice_id` varchar(100)
,`invoice_details_id` varchar(100)
,`customer_id` varchar(100)
,`supplier_id` varchar(100)
,`product_id` varchar(100)
,`product_model` varchar(100)
,`product_name` varchar(255)
,`cartoon` float
,`quantity` float
,`sell_rate` float
,`supplier_rate` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `stock_history`
-- (See below for the actual view)
--
CREATE TABLE `stock_history` (
`vdate` varchar(50)
,`product_id` varchar(100)
,`sell` double
,`Purchase` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `supplier_information`
--

CREATE TABLE `supplier_information` (
  `supplier_id` varchar(100) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `details` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier_information`
--

INSERT INTO `supplier_information` (`supplier_id`, `supplier_name`, `address`, `mobile`, `details`, `status`) VALUES
('5I6N5LC8ZXDREA9CC3ZW', 'Easy Global Trading Ltd.', 'Uttara,Dhaka\r\nBangladesh', '05114645651', 'Focus', 1),
('E674MTLPNV55PK67QHT4', 'Al Faisal International', 'Chittagong ', '1352412454', 'Sunmoon', 1),
('PQXZV8ZUXUZPN3N4S2WC', 'Moral Kemi', '76 Newyork, Denmark', '187654345767', '', 1),
('IOYDTFVIFMD8JQ7Z38OO', 'Johan Doye', '98 Green Road,Farmgate', '569856784357', '', 1),
('V2GZ82OM42GWVKKCMIHN', 'ibram Kholi', '78 Green Road, Dhaka', '880178965423', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `supplier_ledger`
--

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
  `status` int(2) NOT NULL,
  `d_c` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier_ledger`
--

INSERT INTO `supplier_ledger` (`transaction_id`, `supplier_id`, `chalan_no`, `deposit_no`, `amount`, `description`, `payment_type`, `cheque_no`, `date`, `status`, `d_c`) VALUES
('20171025135016', 'E674MTLPNV55PK67QHT4', '1213', NULL, 8322000, 'Dimond Transport', '', '', '25-10-2017', 1, ''),
('20171025135107', '5I6N5LC8ZXDREA9CC3ZW', '10212', NULL, 0, 'Moon light Transport', '', '', '25-10-2017', 1, ''),
('20171025135549', '5I6N5LC8ZXDREA9CC3ZW', '10213', NULL, 1872000, 'moon Light Tranort', '', '', '25-10-2017', 1, ''),
('4LZA5EQOJKEMMS4', 'E674MTLPNV55PK67QHT4', NULL, 'C7LLC9GMYH', 500, '', '1', '', '25-10-2017', 1, ''),
('PJP3UHZDMOFPK66', '5I6N5LC8ZXDREA9CC3ZW', NULL, 'VPQCLLSV2L', 200, '', '1', '', '25-10-2017', 1, ''),
('20171026123424', 'E674MTLPNV55PK67QHT4', '46567', NULL, 108000, 'No des', '', '', '26-10-2017', 1, ''),
('D4PDQL36WENO5YE', '5I6N5LC8ZXDREA9CC3ZW', NULL, 'RQUHUDKOSM', 2017, '', '1', '', '27-10-2017', 1, ''),
('VHLV1CJWVRVNR2J', 'E674MTLPNV55PK67QHT4', NULL, 'B4UPMTBV8T', 300, 'This is supplier payment test', '1', '', '30-10-2017', 1, ''),
('20171106140319', 'E674MTLPNV55PK67QHT4', '56756', NULL, 50400000, '', '', '', '06-11-2017', 1, ''),
('20171106141024', 'V2GZ82OM42GWVKKCMIHN', '6457', NULL, 12000000, '', '', '', '06-11-2017', 1, ''),
('20171106141503', 'E674MTLPNV55PK67QHT4', '6578', NULL, 54000, '', '', '', '06-11-2017', 1, ''),
('20171106141537', 'PQXZV8ZUXUZPN3N4S2WC', '7563', NULL, 1932000, '', '', '', '06-11-2017', 1, ''),
('20171106141736', 'IOYDTFVIFMD8JQ7Z38OO', '6756', NULL, 235200000, '', '', '', '06-11-2017', 1, ''),
('20190918133121', 'V2GZ82OM42GWVKKCMIHN', '159263', NULL, 37500, '', '', '', '2019-09-18', 1, 'c');

-- --------------------------------------------------------

--
-- Table structure for table `synchronizer_setting`
--

CREATE TABLE `synchronizer_setting` (
  `id` int(11) NOT NULL,
  `hostname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `port` varchar(10) NOT NULL,
  `debug` varchar(10) NOT NULL,
  `project_root` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `synchronizer_setting`
--

INSERT INTO `synchronizer_setting` (`id`, `hostname`, `username`, `password`, `port`, `debug`, `project_root`) VALUES
(8, '70.35.198.244', 'softest3bdtask', 'Ux5O~MBJ#odK', '21', 'true', './public_html/niha/');

-- --------------------------------------------------------

--
-- Table structure for table `tax_information`
--

CREATE TABLE `tax_information` (
  `tax_id` varchar(15) NOT NULL,
  `tax` float DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transection`
--

CREATE TABLE `transection` (
  `id` int(11) NOT NULL,
  `transaction_id` varchar(30) NOT NULL,
  `date_of_transection` varchar(30) NOT NULL,
  `transection_type` varchar(30) NOT NULL,
  `transection_category` varchar(30) NOT NULL,
  `transection_mood` varchar(25) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `pay_amount` int(30) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `relation_id` varchar(30) NOT NULL,
  `is_transaction` int(2) NOT NULL COMMENT '0 = invoice and 1 = transaction',
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transection`
--

INSERT INTO `transection` (`id`, `transaction_id`, `date_of_transection`, `transection_type`, `transection_category`, `transection_mood`, `amount`, `pay_amount`, `description`, `relation_id`, `is_transaction`, `create_date`) VALUES
(1, 'PNOBOTZCL9OWBP5', '25-10-2017', '2', '2', '1', '111600', NULL, 'ITP', 'YWYINLCAIU4Z7YA', 0, '2019-07-15 11:50:11'),
(2, 'VH112LNS1EJJK75', '25-10-2017', '2', '2', '1', '2000', 0, 'Cash', 'JMVQJWU1FAEQHI5', 0, '2019-07-15 11:50:11'),
(3, 'L2FOE13IDSYADC3', '25-10-2017', '2', '2', '1', '3000', 0, 'no des', 'HS28Q2LCDZHWDS5', 0, '2019-07-15 11:50:11'),
(4, '4LZA5EQOJKEMMS4', '25-10-2017', '1', '1', '1', '', 500, '', 'E674MTLPNV55PK67QHT4', 0, '2019-07-15 11:50:11'),
(5, 'PJP3UHZDMOFPK66', '25-10-2017', '1', '1', '1', '', 200, '', '5I6N5LC8ZXDREA9CC3ZW', 0, '2019-07-15 11:50:11'),
(6, 'FSQ9O99EGHTRE9F', '25-10-2017', '2', '2', '1', '1000', 0, '', 'F34YNOU3TJSAO67', 0, '2019-07-15 11:50:11'),
(7, '9IFRDZW8DBQ262A', '25-10-2017', '1', '3', '1', '', 10, '', 'Office Rent', 0, '2019-07-15 11:50:11'),
(8, 'TT176B5VPH76HLF', '25-10-2017', '1', '3', '1', '', 5, '', 'Office Rent', 0, '2019-07-15 11:50:11'),
(9, 'WQVYCRJMN86GI17', '26-10-2017', '2', '2', '1', '25800', NULL, 'ITP', 'JMVQJWU1FAEQHI5', 0, '2019-07-15 11:50:11'),
(10, '2IXO5N7VJFSJ7W3', '26-10-2017', '2', '2', '1', '45720', NULL, 'ITP', 'F34YNOU3TJSAO67', 0, '2019-07-15 11:50:11'),
(11, 'KTASGDEO2EVT8FP', '26-10-2017', '2', '2', '1', '35200', NULL, 'ITP', 'HS28Q2LCDZHWDS5', 0, '2019-07-15 11:50:11'),
(12, 'FCW4MH999Y3A75X', '26-10-2017', '2', '2', '1', '35200', NULL, 'ITP', 'HS28Q2LCDZHWDS5', 0, '2019-07-15 11:50:11'),
(13, 'C5JJ9CNCRQN6ZQR', '26-10-2017', '2', '2', '1', '35200', NULL, 'ITP', 'HS28Q2LCDZHWDS5', 0, '2019-07-15 11:50:11'),
(14, 'G36CPLKONRDN18L', '26-10-2017', '2', '2', '1', '35200', NULL, 'ITP', 'HS28Q2LCDZHWDS5', 0, '2019-07-15 11:50:11'),
(15, 'T71A2WYSBL1OQFJ', '26-10-2017', '2', '2', '1', '1074140', NULL, 'ITP', 'F34YNOU3TJSAO67', 0, '2019-07-15 11:50:11'),
(16, 'UPV5HNEO3MK8ZOW', '26-10-2017', '2', '2', '1', '1074140', NULL, 'ITP', 'F34YNOU3TJSAO67', 0, '2019-07-15 11:50:11'),
(17, 'GVH6YY7265ISKCI', '26-10-2017', '2', '2', '1', '73080', NULL, 'ITP', 'F34YNOU3TJSAO67', 0, '2019-07-15 11:50:11'),
(18, '78SO49VW5EWVQLG', '26-10-2017', '2', '2', '1', '73080', NULL, 'ITP', 'F34YNOU3TJSAO67', 0, '2019-07-15 11:50:11'),
(19, '6WBA2S3PR7B5KOU', '26-10-2017', '2', '2', '1', '58800', NULL, 'ITP', 'F34YNOU3TJSAO67', 0, '2019-07-15 11:50:11'),
(20, 'VNCC412Q9ORNR2F', '26-10-2017', '2', '2', '1', '81600', NULL, 'ITP', 'JMVQJWU1FAEQHI5', 0, '2019-07-15 11:50:11'),
(21, '8GX996WGH6AH12O', '26-10-2017', '2', '2', '1', '34500', NULL, 'ITP', '8ZBLA3COJM2NT49', 0, '2019-07-15 11:50:11'),
(22, 'B41QDCC3A2TY5JM', '26-10-2017', '1', '4', '1', '', 12000, '', 'JGC4153QPL', 0, '2019-07-15 11:50:11'),
(23, 'CDXCOWXKMR3YAYO', '26-10-2017', '2', '2', '1', '71760', NULL, 'ITP', 'JMVQJWU1FAEQHI5', 0, '2019-07-15 11:50:11'),
(24, 'AGVJG2Y23Q8AHZD', '27-10-2017', '2', '2', '1', '71960', NULL, 'ITP', 'JMVQJWU1FAEQHI5', 0, '2019-07-15 11:50:11'),
(25, 'UED29RCG1321ZZO', '27-10-2017', '2', '2', '1', '71960', NULL, 'ITP', 'F34YNOU3TJSAO67', 0, '2019-07-15 11:50:11'),
(26, 'YF8XXXZX1ACGXY3', '27-10-2017', '2', '2', '1', '119400', NULL, 'ITP', 'F34YNOU3TJSAO67', 0, '2019-07-15 11:50:11'),
(27, '7ZW9G3F6A3ZBAA8', '27-10-2017', '2', '2', '1', '777777', NULL, 'ITP', 'F34YNOU3TJSAO67', 0, '2019-07-15 11:50:11'),
(28, '5CUCOA9L3HXZTZ3', '27-10-2017', '2', '2', '1', '15200', NULL, 'ITP', 'JMVQJWU1FAEQHI5', 0, '2019-07-15 11:50:11'),
(29, 'P3YOLNTKI1R13YT', '27-10-2017', '2', '2', '1', '7600', NULL, 'ITP', '8ZBLA3COJM2NT49', 0, '2019-07-15 11:50:11'),
(30, 'D4PDQL36WENO5YE', '27-10-2017', '2', '1', '1', '2017', 0, '', '5I6N5LC8ZXDREA9CC3ZW', 0, '2019-07-15 11:50:11'),
(31, 'BM1RD29M3U7VQ1B', '27-10-2017', '2', '2', '1', '33600', NULL, 'ITP', '8ZBLA3COJM2NT49', 0, '2019-07-15 11:50:11'),
(32, '4BPPVCALP98XOOY', '27-10-2017', '2', '2', '1', '151200', NULL, 'ITP', 'JMVQJWU1FAEQHI5', 0, '2019-07-15 11:50:11'),
(33, 'VHLV1CJWVRVNR2J', '30-10-2017', '1', '1', '1', '', 300, 'This is supplier payment test', 'E674MTLPNV55PK67QHT4', 0, '2019-07-15 11:50:11'),
(34, '37W1572K5SAS3SK', '31-10-2017', '1', '2', '1', '', 450, 'dfgdsgf', '8ZBLA3COJM2NT49', 0, '2019-07-15 11:50:11'),
(35, 'PDPYVAPZXT3ALZF', '01-11-2017', '2', '2', '1', '48960', NULL, 'ITP', '8ZBLA3COJM2NT49', 0, '2019-07-15 11:50:11'),
(36, '3FL6WVVYBJ2IXTG', '01-11-2017', '2', '2', '1', '10000', NULL, 'ITP', '8ZBLA3COJM2NT49', 0, '2019-07-15 11:50:11'),
(37, 'KECMDNQWIW9UI7L', '01-11-2017', '2', '2', '1', '8000', NULL, 'ITP', '8ZBLA3COJM2NT49', 0, '2019-07-15 11:50:11'),
(38, 'VAH59FVGOXCI2KV', '02-11-2017', '2', '2', '1', '70000', NULL, 'ITP', '8ZBLA3COJM2NT49', 0, '2019-07-15 11:50:11'),
(39, 'QAO1QIY19Q7RKTH', '02-11-2017', '2', '2', '1', '46000', NULL, 'ITP', '', 0, '2019-07-15 11:50:11'),
(40, 'DU843BZYE76XUHX', '02-11-2017', '2', '2', '1', '46000', NULL, 'ITP', '', 0, '2019-07-15 11:50:11'),
(41, 'XA89GZE1P5V51DE', '02-11-2017', '2', '2', '1', '46000', NULL, 'ITP', '', 0, '2019-07-15 11:50:11'),
(42, '1MZZRFMMRXQ37VJ', '04-11-2017', '2', '2', '1', '63000', NULL, 'ITP', '8ZBLA3COJM2NT49', 0, '2019-07-15 11:50:11'),
(43, 'YB2DKLKGZPJ5YF2', '04-11-2017', '2', '2', '1', '120920', NULL, 'ITP', 'JMVQJWU1FAEQHI5', 0, '2019-07-15 11:50:11'),
(44, 'OK5UDZV15MSWLLL', '04-11-2017', '2', '2', '1', '110000', NULL, 'ITP', 'JMVQJWU1FAEQHI5', 0, '2019-07-15 11:50:11'),
(46, 'SG2T9N9AAF7V615', '2019-09-18', '2', '2', '1', '2000', NULL, 'Cash Paid By Customer', 'XIYGDEV8HIT1GPD', 0, '2019-09-18 11:32:18'),
(51, '5FRS96LV79KHSBV', '06-11-2017', '2', '2', '1', '125000', NULL, 'Cash Paid By Customer', 'JMVQJWU1FAEQHI5', 0, '2019-09-19 10:14:42'),
(52, '1QW33TW9VOLXYVO', '2019-09-19', '2', '2', '1', '20000', NULL, 'Cash Paid By Customer', '8L156ORDQGJW32T', 0, '2019-09-19 11:15:26'),
(53, '5LCY99HINWSCVHZ', '2019-09-19', '2', '2', '1', '3500', NULL, 'Cash Paid By Customer', '8L156ORDQGJW32T', 0, '2019-09-19 11:35:05'),
(54, 'WJI3Q3BD9VSLBO7', '2019-09-19', '2', '2', '1', '5000', NULL, 'Cash Paid By Customer', 'D8B2MDGRIWVPO1A', 0, '2019-09-19 12:06:06'),
(55, 'QWVONSZD7YQ8TLN', '2019-09-19', '2', '2', '1', '35000', NULL, 'Cash Paid By Customer', '8L156ORDQGJW32T', 0, '2019-09-19 13:47:39'),
(56, 'VV7GPXMTAU21XAV', '2019-09-21', '2', '2', '1', '40000', NULL, 'Cash Paid By Customer', 'XIYGDEV8HIT1GPD', 0, '2019-09-21 06:55:04'),
(57, '97B9VW9BIC6BCA1', '2019-09-21', '2', '2', '1', '3220', NULL, 'Cash Paid By Customer', '8L156ORDQGJW32T', 0, '2019-09-21 08:47:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(15) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `gender` int(2) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `status` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `last_name`, `first_name`, `gender`, `date_of_birth`, `logo`, `status`) VALUES
('1', 'User', 'Admin', 0, '', NULL, 1),
('EGlAlfuMQfXJ9S8', 'one', 'user ', 0, '', NULL, 1),
('aidStkhANxU788r', 'two', 'User ', 0, '', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_tbl`
--

CREATE TABLE `user_access_tbl` (
  `role_acc_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_id` varchar(50) CHARACTER SET utf8 NOT NULL,
  `created_by` varchar(11) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_access_tbl`
--

INSERT INTO `user_access_tbl` (`role_acc_id`, `role_id`, `user_id`, `created_by`) VALUES
(2, 1, 'EGlAlfuMQfXJ9S8', '1'),
(3, 2, 'EGlAlfuMQfXJ9S8', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` varchar(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` int(2) NOT NULL,
  `security_code` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `username`, `password`, `user_type`, `security_code`, `status`) VALUES
('1', 'test@test.com', '41d99b369894eb1ec3f461135132d8bb', 1, '190918103527', 1),
('EGlAlfuMQfXJ9S8', 'userone@gmail.com', '41d99b369894eb1ec3f461135132d8bb', 2, '', 1),
('aidStkhANxU788r', 'usertwo@gmail.com', '41d99b369894eb1ec3f461135132d8bb', 2, '', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_customer_transection`
-- (See below for the actual view)
--
CREATE TABLE `view_customer_transection` (
`transaction_id` varchar(30)
,`customer_name` varchar(255)
,`invoice_no` varchar(100)
,`receipt_no` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_person_transection`
-- (See below for the actual view)
--
CREATE TABLE `view_person_transection` (
`transaction_id` varchar(30)
,`person_name` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_supplier_transection`
-- (See below for the actual view)
--
CREATE TABLE `view_supplier_transection` (
`transaction_id` varchar(30)
,`supplier_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_transection`
-- (See below for the actual view)
--
CREATE TABLE `view_transection` (
`transaction_id` varchar(30)
,`date_of_transection` varchar(30)
,`amount` varchar(20)
,`pay_amount` int(30)
,`invoice_no` varchar(100)
,`customer_name` varchar(255)
,`supplier_name` varchar(255)
,`person_name` varchar(50)
,`transection_category` varchar(30)
,`transection_type` varchar(30)
,`transection_mood` varchar(25)
,`description` varchar(255)
,`relation_id` varchar(30)
);

-- --------------------------------------------------------

--
-- Table structure for table `web_setting`
--

CREATE TABLE `web_setting` (
  `setting_id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `invoice_logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `currency` varchar(10) DEFAULT NULL,
  `currency_position` varchar(10) DEFAULT NULL,
  `footer_text` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `rtr` varchar(255) DEFAULT NULL,
  `captcha` int(11) DEFAULT '1' COMMENT '0=active,1=inactive',
  `site_key` varchar(250) DEFAULT NULL,
  `secret_key` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web_setting`
--

INSERT INTO `web_setting` (`setting_id`, `logo`, `invoice_logo`, `favicon`, `currency`, `currency_position`, `footer_text`, `language`, `rtr`, `captcha`, `site_key`, `secret_key`) VALUES
(1, 'my-assets/image/logo/ed7aceea729e273e46626397db06d797.png', 'my-assets/image/logo/691d54f055b35e1297a0b91256a07ad2.png', 'my-assets/image/logo/9038250defc136c076f11bcc022c1e4d.png', 'Rs', '0', 'Copyright by Admin :P', 'english', '0', 1, '6LdiKhsUAAAAAMV4jQRmNYdZy2kXEuFe1HrdP5tt', '6LdiKhsUAAAAABH4BQCIvBar7Oqe-2LwDKxMSX-t');

-- --------------------------------------------------------

--
-- Structure for view `customer_transection_summary`
--
DROP TABLE IF EXISTS `customer_transection_summary`;

CREATE VIEW `customer_transection_summary`  AS  select `customer_information`.`customer_name` AS `customer_name`,`customer_ledger`.`customer_id` AS `customer_id`,'credit' AS `type`,sum(-(`customer_ledger`.`amount`)) AS `amount` from (`customer_ledger` join `customer_information` on((`customer_information`.`customer_id` = `customer_ledger`.`customer_id`))) where (isnull(`customer_ledger`.`receipt_no`) and (`customer_ledger`.`status` = 1)) group by `customer_ledger`.`customer_id` union all select `customer_information`.`customer_name` AS `customer_name`,`customer_ledger`.`customer_id` AS `customer_id`,'debit' AS `type`,sum(`customer_ledger`.`amount`) AS `amount` from (`customer_ledger` join `customer_information` on((`customer_information`.`customer_id` = `customer_ledger`.`customer_id`))) where (isnull(`customer_ledger`.`invoice_no`) and (`customer_ledger`.`status` = 1)) group by `customer_ledger`.`customer_id` ;

-- --------------------------------------------------------

--
-- Structure for view `product_report`
--
DROP TABLE IF EXISTS `product_report`;

CREATE VIEW `product_report`  AS  select `purchase_report`.`purchase_date` AS `date`,`purchase_report`.`product_id` AS `product_id`,`purchase_report`.`quantity` AS `quantity`,`purchase_report`.`rate` AS `rate`,`purchase_report`.`total_amount` AS `total_amount`,'a' AS `account` from `purchase_report` union all select `sales_report`.`date` AS `date`,`sales_report`.`product_id` AS `product_id`,-(`sales_report`.`quantity`) AS `-quantity`,`sales_report`.`supplier_rate` AS `rate`,(`sales_report`.`quantity` * `sales_report`.`supplier_rate`) AS `total_amount`,'b' AS `account` from `sales_report` ;

-- --------------------------------------------------------

--
-- Structure for view `product_supplier`
--
DROP TABLE IF EXISTS `product_supplier`;

CREATE VIEW `product_supplier`  AS  select `b`.`product_id` AS `product_id`,`c`.`product_name` AS `product_name`,`c`.`product_model` AS `product_model`,`a`.`supplier_id` AS `supplier_id` from ((`product_purchase` `a` join `product_purchase_details` `b`) join `product_information` `c`) where ((`a`.`purchase_id` = `b`.`purchase_id`) and (`c`.`product_id` = `b`.`product_id`)) group by `b`.`product_id` ;

-- --------------------------------------------------------

--
-- Structure for view `purchase_report`
--
DROP TABLE IF EXISTS `purchase_report`;

CREATE VIEW `purchase_report`  AS  select `product_purchase`.`purchase_date` AS `purchase_date`,`product_purchase`.`chalan_no` AS `chalan_no`,`product_purchase`.`supplier_id` AS `supplier_id`,`product_purchase_details`.`purchase_detail_id` AS `purchase_detail_id`,`product_purchase_details`.`purchase_id` AS `purchase_id`,`product_purchase_details`.`product_id` AS `product_id`,`product_purchase_details`.`quantity` AS `quantity`,`product_purchase_details`.`rate` AS `rate`,`product_purchase_details`.`total_amount` AS `total_amount`,`product_purchase_details`.`status` AS `status` from (`product_purchase_details` left join `product_purchase` on((`product_purchase_details`.`purchase_id` = `product_purchase`.`purchase_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `sales_actual`
--
DROP TABLE IF EXISTS `sales_actual`;

CREATE VIEW `sales_actual`  AS  select `sales_report`.`date` AS `DATE`,`sales_report`.`supplier_id` AS `supplier_id`,sum((`sales_report`.`quantity` * -(`sales_report`.`supplier_rate`))) AS `sub_total`,sum(`sales_report`.`cartoon`) AS `no_transection` from `sales_report` group by `sales_report`.`date`,`sales_report`.`supplier_id` union all select `supplier_ledger`.`date` AS `date`,`supplier_ledger`.`supplier_id` AS `supplier_id`,`supplier_ledger`.`amount` AS `sub_total`,`supplier_ledger`.`description` AS `no_transection` from `supplier_ledger` where isnull(`supplier_ledger`.`chalan_no`) group by `supplier_ledger`.`date`,`supplier_ledger`.`description`,`supplier_ledger`.`supplier_id` ;

-- --------------------------------------------------------

--
-- Structure for view `sales_report`
--
DROP TABLE IF EXISTS `sales_report`;

CREATE VIEW `sales_report`  AS  select `b`.`date` AS `date`,`b`.`invoice_id` AS `invoice_id`,`a`.`invoice_details_id` AS `invoice_details_id`,`b`.`customer_id` AS `customer_id`,`c`.`supplier_id` AS `supplier_id`,`a`.`product_id` AS `product_id`,`c`.`product_model` AS `product_model`,`c`.`product_name` AS `product_name`,`a`.`cartoon` AS `cartoon`,`a`.`quantity` AS `quantity`,`a`.`rate` AS `sell_rate`,`a`.`supplier_rate` AS `supplier_rate` from ((`invoice_details` `a` join `invoice` `b`) join `product_supplier` `c`) where ((`a`.`invoice_id` = `b`.`invoice_id`) and (`a`.`product_id` = `c`.`product_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `stock_history`
--
DROP TABLE IF EXISTS `stock_history`;

CREATE VIEW `stock_history`  AS  select `invoice`.`date` AS `vdate`,`invoice_details`.`product_id` AS `product_id`,sum(`invoice_details`.`quantity`) AS `sell`,0 AS `Purchase` from (`invoice_details` join `invoice` on((`invoice_details`.`invoice_id` = `invoice`.`invoice_id`))) group by `invoice_details`.`product_id`,`invoice`.`date` union select `product_purchase`.`purchase_date` AS `purchase_date`,`product_purchase_details`.`product_id` AS `product_id`,0 AS `0`,sum(`product_purchase_details`.`quantity`) AS `purchase` from (`product_purchase_details` join `product_purchase` on((`product_purchase_details`.`purchase_id` = `product_purchase`.`purchase_id`))) group by `product_purchase_details`.`product_id`,`product_purchase`.`purchase_date` ;

-- --------------------------------------------------------

--
-- Structure for view `view_customer_transection`
--
DROP TABLE IF EXISTS `view_customer_transection`;

CREATE VIEW `view_customer_transection`  AS  (select `i`.`transaction_id` AS `transaction_id`,`j`.`customer_name` AS `customer_name`,`q`.`invoice_no` AS `invoice_no`,`q`.`receipt_no` AS `receipt_no` from ((`transection` `i` left join `customer_information` `j` on((convert(`i`.`relation_id` using utf8) = `j`.`customer_id`))) left join `customer_ledger` `q` on((convert(`i`.`transaction_id` using utf8) = `q`.`transaction_id`)))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_person_transection`
--
DROP TABLE IF EXISTS `view_person_transection`;

CREATE VIEW `view_person_transection`  AS  (select `i`.`transaction_id` AS `transaction_id`,`j`.`person_name` AS `person_name` from (`transection` `i` left join `person_information` `j` on((convert(`i`.`relation_id` using utf8) = `j`.`person_id`)))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_supplier_transection`
--
DROP TABLE IF EXISTS `view_supplier_transection`;

CREATE VIEW `view_supplier_transection`  AS  (select `i`.`transaction_id` AS `transaction_id`,`j`.`supplier_name` AS `supplier_name` from (`transection` `i` left join `supplier_information` `j` on((convert(`i`.`relation_id` using utf8) = `j`.`supplier_id`)))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_transection`
--
DROP TABLE IF EXISTS `view_transection`;

CREATE VIEW `view_transection`  AS  (select `i`.`transaction_id` AS `transaction_id`,`i`.`date_of_transection` AS `date_of_transection`,`i`.`amount` AS `amount`,`i`.`pay_amount` AS `pay_amount`,`f`.`invoice_no` AS `invoice_no`,`g`.`customer_name` AS `customer_name`,`h`.`supplier_name` AS `supplier_name`,`j`.`person_name` AS `person_name`,`i`.`transection_category` AS `transection_category`,`i`.`transection_type` AS `transection_type`,`i`.`transection_mood` AS `transection_mood`,`i`.`description` AS `description`,`i`.`relation_id` AS `relation_id` from ((((`transection` `i` left join `customer_ledger` `f` on((convert(`i`.`transaction_id` using utf8) = `f`.`transaction_id`))) left join `customer_information` `g` on((convert(`i`.`relation_id` using utf8) = `f`.`customer_id`))) left join `supplier_information` `h` on((convert(`i`.`relation_id` using utf8) = `h`.`supplier_id`))) left join `person_information` `j` on((convert(`i`.`relation_id` using utf8) = `j`.`person_id`)))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_2`
--
ALTER TABLE `account_2`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `cheque_manger`
--
ALTER TABLE `cheque_manger`
  ADD PRIMARY KEY (`cheque_id`);

--
-- Indexes for table `customer_information`
--
ALTER TABLE `customer_information`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_ledger`
--
ALTER TABLE `customer_ledger`
  ADD KEY `receipt_no` (`receipt_no`),
  ADD KEY `receipt_no_2` (`receipt_no`),
  ADD KEY `receipt_no_3` (`receipt_no`),
  ADD KEY `receipt_no_4` (`receipt_no`);

--
-- Indexes for table `daily_closing`
--
ALTER TABLE `daily_closing`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `head_office_deposit`
--
ALTER TABLE `head_office_deposit`
  ADD PRIMARY KEY (`transection_id`);

--
-- Indexes for table `inflow_92mizdldrv`
--
ALTER TABLE `inflow_92mizdldrv`
  ADD PRIMARY KEY (`transection_id`);

--
-- Indexes for table `inflow_yh5i8w9oea`
--
ALTER TABLE `inflow_yh5i8w9oea`
  ADD PRIMARY KEY (`transection_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invoice_id` (`invoice_id`) USING BTREE;

--
-- Indexes for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`invoice_details_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_config_tbl`
--
ALTER TABLE `mail_config_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menusetup_tbl`
--
ALTER TABLE `menusetup_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`note_id`);

--
-- Indexes for table `outflow_pt3vxiow9x`
--
ALTER TABLE `outflow_pt3vxiow9x`
  ADD PRIMARY KEY (`transection_id`);

--
-- Indexes for table `personal_loan`
--
ALTER TABLE `personal_loan`
  ADD PRIMARY KEY (`per_loan_id`);

--
-- Indexes for table `product_information`
--
ALTER TABLE `product_information`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_model` (`product_model`),
  ADD UNIQUE KEY `product_model_2` (`product_model`);

--
-- Indexes for table `product_purchase`
--
ALTER TABLE `product_purchase`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `role_permission_tbl`
--
ALTER TABLE `role_permission_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_tbl`
--
ALTER TABLE `role_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_information`
--
ALTER TABLE `supplier_information`
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `supplier_ledger`
--
ALTER TABLE `supplier_ledger`
  ADD KEY `receipt_no` (`deposit_no`),
  ADD KEY `receipt_no_2` (`deposit_no`),
  ADD KEY `receipt_no_3` (`deposit_no`),
  ADD KEY `receipt_no_4` (`deposit_no`);

--
-- Indexes for table `synchronizer_setting`
--
ALTER TABLE `synchronizer_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_information`
--
ALTER TABLE `tax_information`
  ADD PRIMARY KEY (`tax_id`);

--
-- Indexes for table `transection`
--
ALTER TABLE `transection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_access_tbl`
--
ALTER TABLE `user_access_tbl`
  ADD PRIMARY KEY (`role_acc_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `web_setting`
--
ALTER TABLE `web_setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_2`
--
ALTER TABLE `account_2`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=544;

--
-- AUTO_INCREMENT for table `mail_config_tbl`
--
ALTER TABLE `mail_config_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menusetup_tbl`
--
ALTER TABLE `menusetup_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_loan`
--
ALTER TABLE `personal_loan`
  MODIFY `per_loan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role_permission_tbl`
--
ALTER TABLE `role_permission_tbl`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `role_tbl`
--
ALTER TABLE `role_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `synchronizer_setting`
--
ALTER TABLE `synchronizer_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transection`
--
ALTER TABLE `transection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `user_access_tbl`
--
ALTER TABLE `user_access_tbl`
  MODIFY `role_acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `web_setting`
--
ALTER TABLE `web_setting`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
