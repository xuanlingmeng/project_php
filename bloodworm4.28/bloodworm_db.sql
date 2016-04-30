-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-04-28 14:43:54
-- 服务器版本： 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodworm_db`
--

DELIMITER $$
--
-- 存储过程
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `pro_new` (IN `_Account_Name` VARCHAR(10), IN `Account_Password` VARCHAR(20), IN `Person_Name` VARCHAR(10), IN `Person_Sex` VARCHAR(5), IN `Person_Organization` VARCHAR(20), IN `Person_Business` VARCHAR(50), IN `Person_Address` VARCHAR(120))  Label_NewAccount:

BEGIN



DECLARE Id_Now int;



IF EXISTS (SELECT 1 FROM tb_e_account WHERE Account_Name = _Account_Name) 

THEN LEAVE Label_NewAccount;

END IF;


INSERT INTO tb_e_person

VALUES(NULL,Person_Name,Person_Sex,Person_Organization,Person_Business,Person_Address,NULL,NULL,NULL,NULL);



SELECT LAST_INSERT_ID() INTO Id_Now;



INSERT INTO tb_e_account

VALUES(NULL,Id_Now,_Account_Name,Account_Password,NULL);

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- 表的结构 `tb_e_account`
--

CREATE TABLE `tb_e_account` (
  `Account_Id` int(4) NOT NULL COMMENT '账号ID',
  `Account_Name` varchar(20) NOT NULL COMMENT '账号名',
  `Account_Password` varchar(25) NOT NULL COMMENT '账号密码',
  `Account_Privilege` int(1) NOT NULL DEFAULT '1' COMMENT '账号权限',
  `Account_Status` varchar(32) DEFAULT '0',
  `Account_Email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_e_account`
--

INSERT INTO `tb_e_account` (`Account_Id`, `Account_Name`, `Account_Password`, `Account_Privilege`, `Account_Status`, `Account_Email`) VALUES
(1, 'cathy', '1', 4, '0', '741397656@qq.com'),
(2, 'john', '2', 2, '0', '2432153255@qq.com'),
(3, 'kevin', '15', 1, '0', '3409620475@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `tb_e_account_temporarily`
--

CREATE TABLE `tb_e_account_temporarily` (
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `privilege` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `tb_e_eliminatesnail`
--

CREATE TABLE `tb_e_eliminatesnail` (
  `EliTask_Id` int(4) NOT NULL,
  `Task_Id` varchar(15) NOT NULL,
  `Method` int(6) DEFAULT NULL COMMENT '灭螺方法',
  `Verification` bit(1) DEFAULT b'0' COMMENT '是否进行位置验证（0否1是）',
  `ProRange_Long` double(10,4) DEFAULT NULL COMMENT '工程范围长',
  `ProRange_Wide` double(10,4) DEFAULT NULL COMMENT '工程范围宽',
  `Area` double(10,4) DEFAULT NULL COMMENT '面积',
  `TuFang` double(10,4) DEFAULT NULL COMMENT '土方',
  `ShiFang` double(10,4) DEFAULT NULL COMMENT '石方',
  `HaveSlope` bit(1) DEFAULT b'1' COMMENT '潭面是否有护坡（0无1有）',
  `SlopeLength` double(10,4) DEFAULT NULL COMMENT '护坡长度',
  `Manpower` int(4) DEFAULT NULL COMMENT '投入人工',
  `Medicine_Method` int(2) DEFAULT NULL,
  `Medicine_Name` varchar(50) DEFAULT NULL COMMENT '使用药物名称',
  `Medicine_Dose` varchar(10) DEFAULT NULL,
  `HG` varchar(50) DEFAULT NULL COMMENT '环改(一级、二级(若二级没有则为0))',
  `Hardening_Length` double(10,4) DEFAULT NULL COMMENT '硬化长度',
  `Hardening_Area` double(10,4) DEFAULT NULL COMMENT '硬化面积',
  `Improve` varchar(255) DEFAULT NULL COMMENT '其他改善项目',
  `Money` double(10,4) DEFAULT NULL COMMENT '工程实际支出费用',
  `Date_Start` date DEFAULT NULL COMMENT '工程起始日期',
  `Date_End` date DEFAULT NULL,
  `CompleteTimes` int(4) DEFAULT NULL COMMENT '完成次数'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_e_eliminatesnail`
--

INSERT INTO `tb_e_eliminatesnail` (`EliTask_Id`, `Task_Id`, `Method`, `Verification`, `ProRange_Long`, `ProRange_Wide`, `Area`, `TuFang`, `ShiFang`, `HaveSlope`, `SlopeLength`, `Manpower`, `Medicine_Method`, `Medicine_Name`, `Medicine_Dose`, `HG`, `Hardening_Length`, `Hardening_Area`, `Improve`, `Money`, `Date_Start`, `Date_End`, `CompleteTimes`) VALUES
(1, '1003', NULL, b'0', NULL, NULL, NULL, NULL, NULL, b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `tb_e_examinesnail`
--

CREATE TABLE `tb_e_examinesnail` (
  `ExaTask_Id` int(11) NOT NULL COMMENT 'ID',
  `Task_Id` varchar(15) NOT NULL,
  `Verification` bit(1) DEFAULT b'0' COMMENT '是否进行位置验证(0否1是）',
  `Investigation_Method` int(2) DEFAULT '1' COMMENT '调查方法（1、2）',
  `Investigation_Area` double(10,4) DEFAULT NULL COMMENT '调查面积',
  `SnailSituation_SnailArea` double(10,4) DEFAULT NULL COMMENT '查出有螺面积总面积',
  `NewOrAgain` bit(1) DEFAULT b'1' COMMENT '是否为新发现（0否1是）',
  `SchistosomaArea` double(10,4) DEFAULT NULL COMMENT '其中感染性钉螺面积',
  `LastInspectionTime` date DEFAULT NULL COMMENT '最近查螺日期',
  `ExamineBox` double(10,4) DEFAULT NULL COMMENT '调查框数',
  `SnailBox` double(10,4) DEFAULT NULL COMMENT '有螺框数',
  `SumSnail` double(10,4) DEFAULT NULL COMMENT '捕获总螺数',
  `LivingSnail` double(10,4) DEFAULT NULL COMMENT '活螺数',
  `LivingSnailBox` double(10,4) DEFAULT NULL COMMENT '活螺框数',
  `Stool` double(10,4) DEFAULT NULL COMMENT '野粪总份数',
  `Times` int(4) DEFAULT NULL COMMENT '完成次数'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_e_examinesnail`
--

INSERT INTO `tb_e_examinesnail` (`ExaTask_Id`, `Task_Id`, `Verification`, `Investigation_Method`, `Investigation_Area`, `SnailSituation_SnailArea`, `NewOrAgain`, `SchistosomaArea`, `LastInspectionTime`, `ExamineBox`, `SnailBox`, `SumSnail`, `LivingSnail`, `LivingSnailBox`, `Stool`, `Times`) VALUES
(1, '1001', b'0', 1, NULL, NULL, b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `tb_e_mobilphoneuser`
--

CREATE TABLE `tb_e_mobilphoneuser` (
  `MobilPhoneUser_Id` int(4) NOT NULL COMMENT '人员ID',
  `MobilPhoneUser_Number` varchar(11) NOT NULL COMMENT '手机号',
  `Account_Id` int(4) NOT NULL COMMENT '当前登录账号ID',
  `Terminal_Imei` varchar(15) NOT NULL COMMENT '终端手机Imei号',
  `SIMCard_Number` varchar(20) NOT NULL COMMENT 'SIM卡号码'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tb_e_person`
--

CREATE TABLE `tb_e_person` (
  `Person_Id` int(4) NOT NULL COMMENT '用户ID',
  `Person_username` varchar(20) NOT NULL,
  `Person_Name` varchar(20) NOT NULL COMMENT '用户姓名',
  `Person_field` varchar(125) NOT NULL,
  `Person_Sex` bit(1) NOT NULL COMMENT '用户性别（0男1女）',
  `Person_MobilePhone` varchar(11) NOT NULL COMMENT '用户手机',
  `Person_Birthday` date DEFAULT NULL COMMENT '用户出生日期',
  `Person_Address` varchar(120) DEFAULT NULL COMMENT '用户联系地址',
  `Person_EMail` varchar(50) DEFAULT NULL COMMENT '用户邮箱',
  `Account_Id` int(11) DEFAULT NULL,
  `Person_Fax` varchar(15) DEFAULT NULL COMMENT '用户传真'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_e_person`
--

INSERT INTO `tb_e_person` (`Person_Id`, `Person_username`, `Person_Name`, `Person_field`, `Person_Sex`, `Person_MobilePhone`, `Person_Birthday`, `Person_Address`, `Person_EMail`, `Account_Id`, `Person_Fax`) VALUES
(1, 'cathy', 'æŽè‰º', 'æ±Ÿè‹å—äº¬æ±Ÿå®åŒº', b'1', '18965231232', NULL, NULL, NULL, NULL, NULL),
(2, 'kevin', 'å´é£ž', 'æ±Ÿè‹è‹å·ž', b'0', '13895641255', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `tb_e_privilege`
--

CREATE TABLE `tb_e_privilege` (
  `Privilege_Id` int(4) NOT NULL COMMENT '权限ID',
  `Privilege_Name` varchar(20) NOT NULL COMMENT '权限名称'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_e_privilege`
--

INSERT INTO `tb_e_privilege` (`Privilege_Id`, `Privilege_Name`) VALUES
(1, '查、灭螺人员'),
(2, '管理员'),
(3, '实验室人员'),
(4, '终极管理员');

-- --------------------------------------------------------

--
-- 表的结构 `tb_e_snailid`
--

CREATE TABLE `tb_e_snailid` (
  `id` int(11) NOT NULL,
  `taskid` varchar(15) NOT NULL COMMENT '任务编号',
  `Snail_Id` varchar(15) NOT NULL COMMENT '螺框数编号',
  `Longitude` double(10,4) DEFAULT NULL COMMENT '经度',
  `Latitude` double(10,4) DEFAULT NULL COMMENT '纬度'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tb_e_task`
--

CREATE TABLE `tb_e_task` (
  `_Id` int(11) NOT NULL,
  `Environment_Id` varchar(20) NOT NULL COMMENT '环境编号',
  `Task_Id` varchar(15) NOT NULL COMMENT '任务编号',
  `Type_WL` bit(1) NOT NULL COMMENT '围栏类型（1多0圆）',
  `Area` double(10,4) NOT NULL COMMENT '围栏面积',
  `Latitude_e` double(10,5) DEFAULT NULL COMMENT '最东纬度',
  `Latitude_w` double(10,5) DEFAULT NULL COMMENT '最西经度',
  `Longitude_n` double(10,5) DEFAULT NULL COMMENT '最北经度',
  `Longitude_s` double(10,5) DEFAULT NULL COMMENT '最南经度',
  `ExaOrEli` bit(1) NOT NULL COMMENT '是否需要查螺（查0灭1）',
  `Eliminateperson` varchar(50) NOT NULL COMMENT '灭螺负责人员',
  `Examineperson` varchar(50) NOT NULL COMMENT '查螺负责人员',
  `le` int(2) NOT NULL COMMENT '任务紧急程度(1-3,高中低）',
  `NewOrEnd` bit(1) NOT NULL DEFAULT b'1' COMMENT '是否是新任务（0否1是）',
  `TaskTime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_e_task`
--

INSERT INTO `tb_e_task` (`_Id`, `Environment_Id`, `Task_Id`, `Type_WL`, `Area`, `Latitude_e`, `Latitude_w`, `Longitude_n`, `Longitude_s`, `ExaOrEli`, `Eliminateperson`, `Examineperson`, `le`, `NewOrEnd`, `TaskTime`) VALUES
(3, '340041', '1001', b'0', 180037.1239, NULL, NULL, NULL, NULL, b'0', 'Cats', 'Cats', 1, b'1', '2016-04-12'),
(4, '340042', '1002', b'1', 350398.6953, NULL, NULL, NULL, NULL, b'1', 'Cats', 'Cats', 1, b'1', '2016-03-29'),
(5, '340043', '1003', b'1', 655553.7852, NULL, NULL, NULL, NULL, b'1', 'Cats', 'Cats', 1, b'1', '2016-04-05');

-- --------------------------------------------------------

--
-- 表的结构 `tb_e_webseveruser`
--

CREATE TABLE `tb_e_webseveruser` (
  `WebSeverUser_id` int(4) NOT NULL,
  `WebSeverUser_IP` varchar(15) NOT NULL COMMENT '用户IP',
  `WebSeverUser_RegisteredData` datetime(6) DEFAULT NULL COMMENT '注册数据'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tb_his_beachchanges`
--

CREATE TABLE `tb_his_beachchanges` (
  `_Id` int(4) NOT NULL,
  `SludgeLandfill_Year` int(4) DEFAULT NULL COMMENT '吸淤填埋年份',
  `SludgeLandfill_Area` double(10,4) DEFAULT NULL COMMENT '吸淤填埋面积',
  `SludgeLandfill_Depth` double(10,4) DEFAULT NULL COMMENT '吸淤填埋深度',
  `Factory_Year` int(4) DEFAULT NULL COMMENT '建厂占地年份',
  `Factory_Area` double(10,4) DEFAULT NULL COMMENT '建厂占地面积',
  `Wharf_Year` int(4) DEFAULT NULL COMMENT '港口/码头占地年份',
  `Wharf_Area` double(10,4) DEFAULT NULL COMMENT '港口/码头占地面积',
  `Others_Name` varchar(50) DEFAULT NULL COMMENT '其他项目名称',
  `Others_Year` int(4) DEFAULT NULL COMMENT '其他项目年份',
  `Others_Area` double(10,4) DEFAULT NULL COMMENT '其他项目面积'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_his_beachchanges`
--

INSERT INTO `tb_his_beachchanges` (`_Id`, `SludgeLandfill_Year`, `SludgeLandfill_Area`, `SludgeLandfill_Depth`, `Factory_Year`, `Factory_Area`, `Wharf_Year`, `Wharf_Area`, `Others_Name`, `Others_Year`, `Others_Area`) VALUES
(2, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `tb_his_beachsituation`
--

CREATE TABLE `tb_his_beachsituation` (
  `_Id` int(4) NOT NULL,
  `Height` double(10,4) NOT NULL COMMENT '滩面高程',
  `PlantType` varchar(50) NOT NULL COMMENT '植被种类',
  `HighestLevel` double(10,4) DEFAULT NULL COMMENT '历史最高水位',
  `SurfaceWaterStart` int(2) DEFAULT NULL COMMENT '滩面上水时间（月份）',
  `SurfaceWaterEnd` int(2) DEFAULT NULL COMMENT '滩面退水时间（月份）',
  `FloodingTime` int(3) DEFAULT NULL COMMENT '水淹时间（天数）',
  `BeachArea_Count` double(10,4) DEFAULT NULL COMMENT '滩地面积_计',
  `BeachArea_CultivatedSpecies` double(10,4) DEFAULT NULL COMMENT '滩地面积_垦种',
  `BeachArea_Cultivation` double(10,4) DEFAULT NULL COMMENT '滩地面积_养殖',
  `BeachArea_Planting` double(10,4) DEFAULT NULL COMMENT '滩地面积_植树',
  `BeachArea_Marsh` double(10,4) DEFAULT NULL COMMENT '草滩',
  `BeachArea_LuBeach` double(10,4) DEFAULT NULL COMMENT '芦滩'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_his_beachsituation`
--

INSERT INTO `tb_his_beachsituation` (`_Id`, `Height`, `PlantType`, `HighestLevel`, `SurfaceWaterStart`, `SurfaceWaterEnd`, `FloodingTime`, `BeachArea_Count`, `BeachArea_CultivatedSpecies`, `BeachArea_Cultivation`, `BeachArea_Planting`, `BeachArea_Marsh`, `BeachArea_LuBeach`) VALUES
(2, 1.7000, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 7.8000, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `tb_his_beachsituationsum`
--

CREATE TABLE `tb_his_beachsituationsum` (
  `_Id` int(10) NOT NULL,
  `Environment_Id` varchar(20) NOT NULL COMMENT '环境编号',
  `envirName` varchar(50) NOT NULL COMMENT '环境名称',
  `BeachType` int(4) NOT NULL COMMENT '环境类型',
  `BeachSituation_Id` int(4) DEFAULT NULL COMMENT '环境情况（外键）',
  `BeachChanges_SludgeLandfill` int(4) DEFAULT NULL COMMENT '吸淤清理年份（外键）',
  `Epidemic_Id` int(4) DEFAULT NULL COMMENT '相关疫情_有无渔船民活动（外键）',
  `Eliminate_Id` int(4) DEFAULT NULL COMMENT '末次灭螺年份（外键）',
  `SnailSituation_Id` int(4) DEFAULT NULL COMMENT '历史螺情_首次有螺年份（外键）',
  `Beach_BelongToCounty` varchar(100) NOT NULL COMMENT '所属县、乡（镇、街道）、村'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_his_beachsituationsum`
--

INSERT INTO `tb_his_beachsituationsum` (`_Id`, `Environment_Id`, `envirName`, `BeachType`, `BeachSituation_Id`, `BeachChanges_SludgeLandfill`, `Epidemic_Id`, `Eliminate_Id`, `SnailSituation_Id`, `Beach_BelongToCounty`) VALUES
(2, '340041', 'åŽæ²»æ»©2å·', 1, 2, 2, 3, 2, 2, 'æ±Ÿè‹æ— é”¡'),
(3, '340042', 'è”åˆæ»©2å·', 1, 3, 3, 4, 3, 3, 'æ±Ÿè‹æ— é”¡');

-- --------------------------------------------------------

--
-- 表的结构 `tb_his_eliminate`
--

CREATE TABLE `tb_his_eliminate` (
  `_Id` int(4) NOT NULL,
  `Medicine_Method` int(2) DEFAULT NULL COMMENT '药物灭螺方法',
  `Medicine_Name` varchar(50) DEFAULT NULL COMMENT '药物灭螺药物名称',
  `Medicine_Area` varchar(50) DEFAULT NULL,
  `EnviromentChange_Year` int(4) DEFAULT NULL COMMENT '环改年份',
  `EnviromentChange_Method` varchar(100) DEFAULT NULL COMMENT '环改方法',
  `EnviromentChange_Area` double(10,4) DEFAULT NULL COMMENT '环改面积',
  `Final_Year` int(4) DEFAULT NULL COMMENT '末次灭螺年份',
  `Final_Method` int(4) DEFAULT NULL COMMENT '末次灭螺方法',
  `Final_Area` double(10,4) DEFAULT NULL COMMENT '末次灭螺面积'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_his_eliminate`
--

INSERT INTO `tb_his_eliminate` (`_Id`, `Medicine_Method`, `Medicine_Name`, `Medicine_Area`, `EnviromentChange_Year`, `EnviromentChange_Method`, `EnviromentChange_Area`, `Final_Year`, `Final_Method`, `Final_Area`) VALUES
(2, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `tb_his_epidemic`
--

CREATE TABLE `tb_his_epidemic` (
  `_Id` int(4) NOT NULL,
  `LivestockGrazing_YesNo` bit(1) DEFAULT NULL COMMENT '有/无家畜放牧',
  `LivestockGrazing_Type` varchar(50) DEFAULT NULL COMMENT '家畜放牧种类',
  `FishingActivity` bit(1) DEFAULT NULL COMMENT '有无渔船民活动',
  `Emergency_Year` int(4) DEFAULT NULL COMMENT '发生急感年份',
  `Emergency_NumOfPeople` int(4) DEFAULT NULL COMMENT '发生急感人数',
  `SnailYearRecently` int(4) DEFAULT NULL COMMENT '最近哨螺阳性年份',
  `MouseYearRecently` int(4) DEFAULT NULL COMMENT '最近哨鼠年份'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_his_epidemic`
--

INSERT INTO `tb_his_epidemic` (`_Id`, `LivestockGrazing_YesNo`, `LivestockGrazing_Type`, `FishingActivity`, `Emergency_Year`, `Emergency_NumOfPeople`, `SnailYearRecently`, `MouseYearRecently`) VALUES
(3, b'0', NULL, NULL, NULL, NULL, NULL, NULL),
(4, b'1', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `tb_his_snailsituation_history`
--

CREATE TABLE `tb_his_snailsituation_history` (
  `_Id` int(4) NOT NULL,
  `FirsSnailYear` int(4) DEFAULT NULL COMMENT '历史螺情_首次有螺年份',
  `LastSnailYear` int(4) DEFAULT NULL COMMENT '末次有螺年份',
  `Years` int(4) DEFAULT NULL COMMENT '有螺年数',
  `Area` double(10,4) DEFAULT NULL COMMENT '历史有螺面积',
  `SchistosomaArea` double(10,4) DEFAULT NULL COMMENT '其中感染性钉螺面积'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_his_snailsituation_history`
--

INSERT INTO `tb_his_snailsituation_history` (`_Id`, `FirsSnailYear`, `LastSnailYear`, `Years`, `Area`, `SchistosomaArea`) VALUES
(2, 3, NULL, NULL, NULL, NULL),
(3, 4, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `tb_is_diffusioneffect`
--

CREATE TABLE `tb_is_diffusioneffect` (
  `_id` int(4) NOT NULL,
  `direct_Positive_distance` double(10,4) DEFAULT NULL,
  `direct_Positive_year` int(4) DEFAULT NULL,
  `direct_Negative_distance` double(10,4) DEFAULT NULL,
  `direct_Negative_year` int(4) DEFAULT NULL,
  `indirect_Positive_distance` double(10,4) DEFAULT NULL,
  `indirect_Positive_year` int(4) DEFAULT NULL,
  `indirect_Negative_distance` double(10,4) DEFAULT NULL,
  `indirect_Negative_year` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tb_is_infectionreason`
--

CREATE TABLE `tb_is_infectionreason` (
  `_Id` int(4) NOT NULL,
  `AcuteInfectionsSampleid` varchar(15) DEFAULT NULL COMMENT '急性感染生物样品号',
  `DeterminationOfContaminatedWater` int(4) DEFAULT NULL COMMENT '疫水测定',
  `StoolDensity` double(10,3) DEFAULT NULL COMMENT '野粪密度',
  `StoolRatio` double(10,3) DEFAULT NULL COMMENT '野粪阳性率'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tb_is_reason`
--

CREATE TABLE `tb_is_reason` (
  `_Id` int(4) NOT NULL,
  `CrowdActivities` int(4) DEFAULT NULL COMMENT '人群活动',
  `RiskProject` int(4) DEFAULT NULL COMMENT '风险项目',
  `RiverFlood` int(4) DEFAULT NULL COMMENT '长江汛情',
  `LocalTemperature` double(10,3) DEFAULT NULL COMMENT '当地气温'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tb_is_sample`
--

CREATE TABLE `tb_is_sample` (
  `_id` int(5) NOT NULL,
  `sampleid` varchar(15) DEFAULT NULL COMMENT '生物样品号',
  `taskid` varchar(15) DEFAULT NULL COMMENT '任务编号',
  `AcuteInfections` int(4) DEFAULT NULL COMMENT '急性感染'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tb_is_snail`
--

CREATE TABLE `tb_is_snail` (
  `_Id` int(4) NOT NULL,
  `SnailIS_LivingSnailAVGDensity` double(10,3) DEFAULT NULL COMMENT '活螺平均密度',
  `SnailIS_InfectiousSchistosomaAVGDensity` double(10,3) DEFAULT NULL COMMENT '感染性钉螺平均密度',
  `SnailIS_SchistosomaInfection` double(10,3) DEFAULT NULL COMMENT '钉螺感染率',
  `SnailIS_SnailArea` double(10,3) DEFAULT NULL COMMENT '钉螺面积'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tb_is_sum`
--

CREATE TABLE `tb_is_sum` (
  `Is_Id` int(5) NOT NULL,
  `Task_Id` varchar(15) NOT NULL COMMENT '围栏编号',
  `InfectionSnail` double(10,4) DEFAULT NULL COMMENT '感染螺数',
  `InfectionBox` double(10,4) DEFAULT NULL COMMENT '感染螺框数',
  `InfectiongArea` double(10,4) DEFAULT NULL COMMENT '感染螺面积',
  `StoolBox` double(10,3) DEFAULT NULL COMMENT '野粪份数',
  `Stoolsnail` double(10,3) DEFAULT NULL COMMENT '野粪中检测出阳性毛蚴、或血吸虫卵',
  `StoolSum` double(10,3) DEFAULT NULL COMMENT '总粪数',
  `RiskIndex` varchar(100) DEFAULT NULL COMMENT '综合风险指数',
  `HJ_LivingSnail` double(10,4) DEFAULT NULL COMMENT '环介导等温扩增技术检测_活螺数',
  `HJ_MixSample` double(10,4) DEFAULT NULL COMMENT '环介导等温扩增技术检测_混合样本数',
  `HJ_MixPositiveSample` double(10,4) DEFAULT NULL COMMENT '环介导等温扩增技术检测_阳性混合样本数',
  `snail_Id` int(4) DEFAULT NULL COMMENT '钉螺表id（外键）',
  `diffusioneffect_Id` int(4) DEFAULT NULL COMMENT '扩散影响（外键）',
  `reason_Id` int(4) DEFAULT NULL COMMENT '影响因素ID（外键）',
  `infectionreason_Id` int(4) DEFAULT NULL COMMENT '感染因素（外键）'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tb_r_account_mobile_web`
--

CREATE TABLE `tb_r_account_mobile_web` (
  `_Id` int(4) NOT NULL,
  `Account_Id` int(4) NOT NULL,
  `MobilePhoneUser_Id` int(4) NOT NULL,
  `WebSeverUser_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tb_r_webphone`
--

CREATE TABLE `tb_r_webphone` (
  `_id` int(4) NOT NULL,
  `WebSeverUser_id` int(4) DEFAULT NULL,
  `MobilPhoneUser_Id` int(4) DEFAULT NULL,
  `Beach_Id` int(11) DEFAULT NULL,
  `Task_Id` int(11) DEFAULT NULL,
  `is_id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tb_wlo_`
--

CREATE TABLE `tb_wlo_` (
  `O_Id` int(11) NOT NULL,
  `Task_Id` varchar(15) NOT NULL COMMENT '环境编号',
  `longitude_latitude` varchar(1000) NOT NULL,
  `Radius` double(10,4) NOT NULL COMMENT '半径',
  `wltype` int(1) NOT NULL,
  `GPSstate` bit(1) DEFAULT NULL COMMENT 'GPS定位状态',
  `Longitude_real` double(10,4) DEFAULT NULL COMMENT '纠偏后的经度',
  `Latitude_real` double(10,4) DEFAULT NULL COMMENT '纠偏后的纬度',
  `GPS_OnorOff` bit(1) DEFAULT b'1' COMMENT 'GPS是否打开'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_wlo_`
--

INSERT INTO `tb_wlo_` (`O_Id`, `Task_Id`, `longitude_latitude`, `Radius`, `wltype`, `GPSstate`, `Longitude_real`, `Latitude_real`, `GPS_OnorOff`) VALUES
(3, '1001', '120.001733, 31.80446 |120.000871, 31.806485 |', 239.4508, 0, NULL, NULL, NULL, b'1'),
(4, '1002', '120.000727, 31.807927 |120.004141, 31.804061 |119.995553, 31.801821 |119.99275, 31.803508 |119.99275, 31.803508 |', 0.0000, 1, NULL, NULL, NULL, b'1'),
(5, '1003', '119.998535, 31.807406 |120.0045, 31.810965 |120.004141, 31.801575 |119.990594, 31.803171 |119.990594, 31.803171 |', 0.0000, 1, NULL, NULL, NULL, b'1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_e_account`
--
ALTER TABLE `tb_e_account`
  ADD PRIMARY KEY (`Account_Id`),
  ADD KEY `Account_Id` (`Account_Id`) USING BTREE,
  ADD KEY `Account_Privilege` (`Account_Privilege`) USING BTREE,
  ADD KEY `Account_Name` (`Account_Name`);

--
-- Indexes for table `tb_e_eliminatesnail`
--
ALTER TABLE `tb_e_eliminatesnail`
  ADD PRIMARY KEY (`EliTask_Id`),
  ADD KEY `fk_eli` (`Task_Id`);

--
-- Indexes for table `tb_e_examinesnail`
--
ALTER TABLE `tb_e_examinesnail`
  ADD PRIMARY KEY (`ExaTask_Id`),
  ADD KEY `fk_exa` (`Task_Id`);

--
-- Indexes for table `tb_e_mobilphoneuser`
--
ALTER TABLE `tb_e_mobilphoneuser`
  ADD PRIMARY KEY (`MobilPhoneUser_Id`),
  ADD KEY `MobilPhoneUser_Id` (`MobilPhoneUser_Id`) USING BTREE;

--
-- Indexes for table `tb_e_person`
--
ALTER TABLE `tb_e_person`
  ADD PRIMARY KEY (`Person_Id`),
  ADD KEY `fk_Account_Person` (`Account_Id`),
  ADD KEY `name` (`Person_username`);

--
-- Indexes for table `tb_e_privilege`
--
ALTER TABLE `tb_e_privilege`
  ADD PRIMARY KEY (`Privilege_Id`),
  ADD KEY `Privilege_Id` (`Privilege_Id`) USING BTREE;

--
-- Indexes for table `tb_e_snailid`
--
ALTER TABLE `tb_e_snailid`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_taskid` (`taskid`);

--
-- Indexes for table `tb_e_task`
--
ALTER TABLE `tb_e_task`
  ADD PRIMARY KEY (`_Id`),
  ADD KEY `fk_WLO` (`Task_Id`);

--
-- Indexes for table `tb_e_webseveruser`
--
ALTER TABLE `tb_e_webseveruser`
  ADD PRIMARY KEY (`WebSeverUser_id`);

--
-- Indexes for table `tb_his_beachchanges`
--
ALTER TABLE `tb_his_beachchanges`
  ADD PRIMARY KEY (`_Id`);

--
-- Indexes for table `tb_his_beachsituation`
--
ALTER TABLE `tb_his_beachsituation`
  ADD PRIMARY KEY (`_Id`);

--
-- Indexes for table `tb_his_beachsituationsum`
--
ALTER TABLE `tb_his_beachsituationsum`
  ADD PRIMARY KEY (`_Id`),
  ADD KEY `idx_fk_BeachChanges_Sum` (`BeachChanges_SludgeLandfill`) USING BTREE,
  ADD KEY `idx_fk_SnailSituation_Sum` (`SnailSituation_Id`) USING BTREE,
  ADD KEY `idx_fk_Eliminate_Sum` (`Eliminate_Id`) USING BTREE,
  ADD KEY `fk_beachsituation` (`BeachSituation_Id`),
  ADD KEY `fk_epidemic` (`Epidemic_Id`);

--
-- Indexes for table `tb_his_eliminate`
--
ALTER TABLE `tb_his_eliminate`
  ADD PRIMARY KEY (`_Id`);

--
-- Indexes for table `tb_his_epidemic`
--
ALTER TABLE `tb_his_epidemic`
  ADD PRIMARY KEY (`_Id`);

--
-- Indexes for table `tb_his_snailsituation_history`
--
ALTER TABLE `tb_his_snailsituation_history`
  ADD PRIMARY KEY (`_Id`);

--
-- Indexes for table `tb_is_diffusioneffect`
--
ALTER TABLE `tb_is_diffusioneffect`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `tb_is_infectionreason`
--
ALTER TABLE `tb_is_infectionreason`
  ADD PRIMARY KEY (`_Id`),
  ADD KEY `fk_AcuteInfections` (`AcuteInfectionsSampleid`);

--
-- Indexes for table `tb_is_reason`
--
ALTER TABLE `tb_is_reason`
  ADD PRIMARY KEY (`_Id`);

--
-- Indexes for table `tb_is_sample`
--
ALTER TABLE `tb_is_sample`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `sampleid` (`sampleid`);

--
-- Indexes for table `tb_is_snail`
--
ALTER TABLE `tb_is_snail`
  ADD PRIMARY KEY (`_Id`);

--
-- Indexes for table `tb_is_sum`
--
ALTER TABLE `tb_is_sum`
  ADD PRIMARY KEY (`Is_Id`),
  ADD KEY `snail_Id` (`snail_Id`),
  ADD KEY `fk_de` (`diffusioneffect_Id`),
  ADD KEY `fk_reason` (`reason_Id`),
  ADD KEY `fk_ir` (`infectionreason_Id`);

--
-- Indexes for table `tb_r_account_mobile_web`
--
ALTER TABLE `tb_r_account_mobile_web`
  ADD PRIMARY KEY (`_Id`),
  ADD KEY `Account_Id` (`Account_Id`) USING BTREE,
  ADD KEY `MobilePhoneUser_Id` (`MobilePhoneUser_Id`) USING BTREE,
  ADD KEY `fk_mob_web` (`WebSeverUser_id`);

--
-- Indexes for table `tb_r_webphone`
--
ALTER TABLE `tb_r_webphone`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `fk_mob` (`MobilPhoneUser_Id`),
  ADD KEY `fk_web` (`WebSeverUser_id`),
  ADD KEY `fk_BeachId` (`Beach_Id`),
  ADD KEY `fk_task` (`Task_Id`),
  ADD KEY `fk_is` (`is_id`);

--
-- Indexes for table `tb_wlo_`
--
ALTER TABLE `tb_wlo_`
  ADD PRIMARY KEY (`O_Id`),
  ADD KEY `Task_Id` (`Task_Id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `tb_e_account`
--
ALTER TABLE `tb_e_account`
  MODIFY `Account_Id` int(4) NOT NULL AUTO_INCREMENT COMMENT '账号ID', AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `tb_e_eliminatesnail`
--
ALTER TABLE `tb_e_eliminatesnail`
  MODIFY `EliTask_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `tb_e_examinesnail`
--
ALTER TABLE `tb_e_examinesnail`
  MODIFY `ExaTask_Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `tb_e_mobilphoneuser`
--
ALTER TABLE `tb_e_mobilphoneuser`
  MODIFY `MobilPhoneUser_Id` int(4) NOT NULL AUTO_INCREMENT COMMENT '人员ID';
--
-- 使用表AUTO_INCREMENT `tb_e_person`
--
ALTER TABLE `tb_e_person`
  MODIFY `Person_Id` int(4) NOT NULL AUTO_INCREMENT COMMENT '用户ID', AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `tb_e_snailid`
--
ALTER TABLE `tb_e_snailid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `tb_e_task`
--
ALTER TABLE `tb_e_task`
  MODIFY `_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `tb_e_webseveruser`
--
ALTER TABLE `tb_e_webseveruser`
  MODIFY `WebSeverUser_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `tb_his_beachchanges`
--
ALTER TABLE `tb_his_beachchanges`
  MODIFY `_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `tb_his_beachsituation`
--
ALTER TABLE `tb_his_beachsituation`
  MODIFY `_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `tb_his_beachsituationsum`
--
ALTER TABLE `tb_his_beachsituationsum`
  MODIFY `_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `tb_his_eliminate`
--
ALTER TABLE `tb_his_eliminate`
  MODIFY `_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `tb_his_epidemic`
--
ALTER TABLE `tb_his_epidemic`
  MODIFY `_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `tb_his_snailsituation_history`
--
ALTER TABLE `tb_his_snailsituation_history`
  MODIFY `_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `tb_is_infectionreason`
--
ALTER TABLE `tb_is_infectionreason`
  MODIFY `_Id` int(4) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `tb_is_reason`
--
ALTER TABLE `tb_is_reason`
  MODIFY `_Id` int(4) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `tb_is_sample`
--
ALTER TABLE `tb_is_sample`
  MODIFY `_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `tb_is_snail`
--
ALTER TABLE `tb_is_snail`
  MODIFY `_Id` int(4) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `tb_is_sum`
--
ALTER TABLE `tb_is_sum`
  MODIFY `Is_Id` int(5) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `tb_r_account_mobile_web`
--
ALTER TABLE `tb_r_account_mobile_web`
  MODIFY `_Id` int(4) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `tb_r_webphone`
--
ALTER TABLE `tb_r_webphone`
  MODIFY `_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `tb_wlo_`
--
ALTER TABLE `tb_wlo_`
  MODIFY `O_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 限制导出的表
--

--
-- 限制表 `tb_e_account`
--
ALTER TABLE `tb_e_account`
  ADD CONSTRAINT `fk_Account_Privilege` FOREIGN KEY (`Account_Privilege`) REFERENCES `tb_e_privilege` (`Privilege_Id`);

--
-- 限制表 `tb_e_eliminatesnail`
--
ALTER TABLE `tb_e_eliminatesnail`
  ADD CONSTRAINT `fk_eli` FOREIGN KEY (`Task_Id`) REFERENCES `tb_e_task` (`Task_Id`);

--
-- 限制表 `tb_e_examinesnail`
--
ALTER TABLE `tb_e_examinesnail`
  ADD CONSTRAINT `fk_exa` FOREIGN KEY (`Task_Id`) REFERENCES `tb_e_task` (`Task_Id`);

--
-- 限制表 `tb_e_person`
--
ALTER TABLE `tb_e_person`
  ADD CONSTRAINT `name` FOREIGN KEY (`Person_username`) REFERENCES `tb_e_account` (`Account_Name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- 限制表 `tb_e_snailid`
--
ALTER TABLE `tb_e_snailid`
  ADD CONSTRAINT `fk_taskid` FOREIGN KEY (`taskid`) REFERENCES `tb_e_examinesnail` (`Task_Id`);

--
-- 限制表 `tb_e_task`
--
ALTER TABLE `tb_e_task`
  ADD CONSTRAINT `fk_WLO` FOREIGN KEY (`Task_Id`) REFERENCES `tb_wlo_` (`Task_Id`);

--
-- 限制表 `tb_his_beachsituationsum`
--
ALTER TABLE `tb_his_beachsituationsum`
  ADD CONSTRAINT `fk_beachchanges` FOREIGN KEY (`BeachChanges_SludgeLandfill`) REFERENCES `tb_his_beachchanges` (`_Id`),
  ADD CONSTRAINT `fk_beachsituation` FOREIGN KEY (`BeachSituation_Id`) REFERENCES `tb_his_beachsituation` (`_Id`),
  ADD CONSTRAINT `fk_elimnateId` FOREIGN KEY (`Eliminate_Id`) REFERENCES `tb_his_eliminate` (`_Id`),
  ADD CONSTRAINT `fk_epidemic` FOREIGN KEY (`Epidemic_Id`) REFERENCES `tb_his_epidemic` (`_Id`),
  ADD CONSTRAINT `fk_snailsit` FOREIGN KEY (`SnailSituation_Id`) REFERENCES `tb_his_snailsituation_history` (`_Id`);

--
-- 限制表 `tb_is_infectionreason`
--
ALTER TABLE `tb_is_infectionreason`
  ADD CONSTRAINT `fk_AcuteInfections` FOREIGN KEY (`AcuteInfectionsSampleid`) REFERENCES `tb_is_sample` (`sampleid`);

--
-- 限制表 `tb_is_sum`
--
ALTER TABLE `tb_is_sum`
  ADD CONSTRAINT `fk_ir` FOREIGN KEY (`infectionreason_Id`) REFERENCES `tb_is_infectionreason` (`_Id`),
  ADD CONSTRAINT `fk_reason` FOREIGN KEY (`reason_Id`) REFERENCES `tb_is_reason` (`_Id`),
  ADD CONSTRAINT `fk_snail` FOREIGN KEY (`snail_Id`) REFERENCES `tb_is_snail` (`_Id`);

--
-- 限制表 `tb_r_account_mobile_web`
--
ALTER TABLE `tb_r_account_mobile_web`
  ADD CONSTRAINT `fk_Account_Id` FOREIGN KEY (`Account_Id`) REFERENCES `tb_e_account` (`Account_Id`),
  ADD CONSTRAINT `fk_mob_MobilePhoneUser_Id` FOREIGN KEY (`MobilePhoneUser_Id`) REFERENCES `tb_e_mobilphoneuser` (`MobilPhoneUser_Id`),
  ADD CONSTRAINT `fk_mob_web` FOREIGN KEY (`WebSeverUser_id`) REFERENCES `tb_e_webseveruser` (`WebSeverUser_id`);

--
-- 限制表 `tb_r_webphone`
--
ALTER TABLE `tb_r_webphone`
  ADD CONSTRAINT `fk_BeachId` FOREIGN KEY (`Beach_Id`) REFERENCES `tb_his_beachsituationsum` (`_Id`),
  ADD CONSTRAINT `fk_is` FOREIGN KEY (`is_id`) REFERENCES `tb_is_sum` (`Is_Id`),
  ADD CONSTRAINT `fk_mob` FOREIGN KEY (`MobilPhoneUser_Id`) REFERENCES `tb_e_mobilphoneuser` (`MobilPhoneUser_Id`),
  ADD CONSTRAINT `fk_task` FOREIGN KEY (`Task_Id`) REFERENCES `tb_e_task` (`_Id`),
  ADD CONSTRAINT `fk_web` FOREIGN KEY (`WebSeverUser_id`) REFERENCES `tb_e_webseveruser` (`WebSeverUser_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
