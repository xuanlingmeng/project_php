/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50610
Source Host           : localhost:3306
Source Database       : blood worm

Target Server Type    : MYSQL
Target Server Version : 50610
File Encoding         : 65001

Date: 2016-03-04 15:44:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_e_account
-- ----------------------------
DROP TABLE IF EXISTS `tb_e_account`;
CREATE TABLE `tb_e_account` (
  `Account_Id` int(4) NOT NULL AUTO_INCREMENT COMMENT '账号ID',
  `Account_Name` varchar(20) NOT NULL COMMENT '账号名',
  `Account_Password` varchar(25) NOT NULL COMMENT '账号密码',
  `Account_Privilege` int(4) NOT NULL DEFAULT '1' COMMENT '账号权限',
  `Account_Status` varchar(32) DEFAULT '0',
  PRIMARY KEY (`Account_Id`),
  KEY `Account_Id` (`Account_Id`) USING BTREE,
  KEY `Account_Privilege` (`Account_Privilege`) USING BTREE,
  CONSTRAINT `fk_Account_Privilege` FOREIGN KEY (`Account_Privilege`) REFERENCES `tb_e_privilege` (`Privilege_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_e_account
-- ----------------------------

-- ----------------------------
-- Table structure for tb_e_eliminatesnail
-- ----------------------------
DROP TABLE IF EXISTS `tb_e_eliminatesnail`;
CREATE TABLE `tb_e_eliminatesnail` (
  `EliTask_Id` int(4) NOT NULL AUTO_INCREMENT,
  `Task_Id` varchar(15) NOT NULL,
  `Method` int(6) DEFAULT NULL COMMENT '灭螺方法',
  `Verification` bit(1) NOT NULL DEFAULT b'0' COMMENT '是否进行位置验证（0否1是）',
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
  `CompleteTimes` int(4) DEFAULT NULL COMMENT '完成次数',
  PRIMARY KEY (`EliTask_Id`),
  KEY `fk_eli` (`Task_Id`),
  CONSTRAINT `fk_eli` FOREIGN KEY (`Task_Id`) REFERENCES `tb_e_task` (`Task_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_e_eliminatesnail
-- ----------------------------

-- ----------------------------
-- Table structure for tb_e_examinesnail
-- ----------------------------
DROP TABLE IF EXISTS `tb_e_examinesnail`;
CREATE TABLE `tb_e_examinesnail` (
  `ExaTask_Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `Task_Id` varchar(15) NOT NULL,
  `Verification` bit(1) NOT NULL DEFAULT b'0' COMMENT '是否进行位置验证(0否1是）',
  `Snail_Id` varchar(15) NOT NULL COMMENT '螺框数编号',
  `Investigation_Method` int(2) NOT NULL DEFAULT '1' COMMENT '调查方法（1、2）',
  `Investigation_Area` double(10,4) NOT NULL COMMENT '调查面积',
  `SnailSituation_SnailArea` double(10,4) NOT NULL COMMENT '查出有螺面积总面积',
  `NewOrAgain` bit(1) NOT NULL DEFAULT b'1' COMMENT '是否为新发现（0否1是）',
  `SchistosomaArea` double(10,4) DEFAULT NULL COMMENT '其中感染性钉螺面积',
  `LastInspectionTime` date DEFAULT NULL COMMENT '最近查螺日期',
  `ExamineBox` double(10,4) NOT NULL COMMENT '调查框数',
  `SnailBox` double(10,4) NOT NULL COMMENT '有螺框数',
  `SumSnail` double(10,4) NOT NULL COMMENT '捕获总螺数',
  `LivingSnail` double(10,4) NOT NULL COMMENT '活螺数',
  `LivingSnailBox` double(10,4) NOT NULL COMMENT '活螺框数',
  `Stool` double(10,4) DEFAULT NULL COMMENT '野粪总份数',
  `Times` int(4) DEFAULT NULL COMMENT '完成次数',
  PRIMARY KEY (`ExaTask_Id`),
  KEY `fk_exa` (`Task_Id`),
  CONSTRAINT `fk_exa` FOREIGN KEY (`Task_Id`) REFERENCES `tb_e_task` (`Task_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_e_examinesnail
-- ----------------------------

-- ----------------------------
-- Table structure for tb_e_mobilphoneuser
-- ----------------------------
DROP TABLE IF EXISTS `tb_e_mobilphoneuser`;
CREATE TABLE `tb_e_mobilphoneuser` (
  `MobilPhoneUser_Id` int(4) NOT NULL AUTO_INCREMENT COMMENT '人员ID',
  `MobilPhoneUser_Number` varchar(11) NOT NULL COMMENT '手机号',
  `Account_Id` int(4) NOT NULL COMMENT '当前登录账号ID',
  `Terminal_Imei` varchar(15) NOT NULL COMMENT '终端手机Imei号',
  `SIMCard_Number` varchar(20) NOT NULL COMMENT 'SIM卡号码',
  PRIMARY KEY (`MobilPhoneUser_Id`),
  KEY `MobilPhoneUser_Id` (`MobilPhoneUser_Id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_e_mobilphoneuser
-- ----------------------------

-- ----------------------------
-- Table structure for tb_e_person
-- ----------------------------
DROP TABLE IF EXISTS `tb_e_person`;
CREATE TABLE `tb_e_person` (
  `Person_Id` int(4) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `Person_Name` varchar(20) NOT NULL COMMENT '用户姓名',
  `Person_Sex` bit(1) NOT NULL COMMENT '用户性别（0男1女）',
  `Person_Birthday` date NOT NULL COMMENT '用户出生日期',
  `Person_Organization` varchar(100) NOT NULL COMMENT '用户所属部门',
  `Person_Business` varchar(50) NOT NULL COMMENT '用户职务',
  `Person_Address` varchar(120) NOT NULL COMMENT '用户联系地址',
  `Person_MobilePhone` varchar(11) NOT NULL COMMENT '用户手机',
  `Person_EMail` varchar(50) DEFAULT NULL COMMENT '用户邮箱',
  `Account_Id` int(11) NOT NULL,
  `Person_Fax` varchar(15) DEFAULT NULL COMMENT '用户传真',
  PRIMARY KEY (`Person_Id`),
  KEY `fk_Account_Person` (`Account_Id`),
  CONSTRAINT `fk_Account_Person` FOREIGN KEY (`Account_Id`) REFERENCES `tb_e_account` (`Account_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_e_person
-- ----------------------------

-- ----------------------------
-- Table structure for tb_e_privilege
-- ----------------------------
DROP TABLE IF EXISTS `tb_e_privilege`;
CREATE TABLE `tb_e_privilege` (
  `Privilege_Id` int(4) NOT NULL COMMENT '权限ID',
  `Privilege_Name` varchar(20) NOT NULL COMMENT '权限名称',
  PRIMARY KEY (`Privilege_Id`),
  KEY `Privilege_Id` (`Privilege_Id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_e_privilege
-- ----------------------------
INSERT INTO `tb_e_privilege` VALUES ('1', '手机查、灭螺人员');
INSERT INTO `tb_e_privilege` VALUES ('2', '管理员');
INSERT INTO `tb_e_privilege` VALUES ('3', '终极管理员');

-- ----------------------------
-- Table structure for tb_e_task
-- ----------------------------
DROP TABLE IF EXISTS `tb_e_task`;
CREATE TABLE `tb_e_task` (
  `_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Environment_Id` varchar(20) NOT NULL COMMENT '环境编号',
  `Task_Id` varchar(15) NOT NULL COMMENT '任务编号',
  `Type_WL` bit(1) NOT NULL COMMENT '围栏类型（1多0圆）',
  `Area` double(10,4) NOT NULL COMMENT '围栏面积',
  `Latitude_e` double(10,5) NOT NULL COMMENT '最东纬度',
  `Latitude_w` double(10,5) NOT NULL COMMENT '最西经度',
  `Longitude_n` double(10,5) NOT NULL COMMENT '最北经度',
  `Longitude_s` double(10,5) NOT NULL COMMENT '最南经度',
  `ExaOrEli` bit(1) NOT NULL COMMENT '是否需要查螺（查0灭1）',
  `Eliminateperson` varchar(50) DEFAULT NULL COMMENT '灭螺负责人员',
  `Examineperson` varchar(50) DEFAULT NULL COMMENT '查螺负责人员',
  `Level` int(2) NOT NULL COMMENT '任务紧急程度(1-3,高中低）',
  `NewOrEnd` bit(1) NOT NULL DEFAULT b'1' COMMENT '是否是新任务（0否1是）',
  `TaskTime` date NOT NULL,
  PRIMARY KEY (`_Id`),
  KEY `fk_WLO` (`Task_Id`),
  CONSTRAINT `fk_WLO` FOREIGN KEY (`Task_Id`) REFERENCES `tb_wlo_` (`Task_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_e_task
-- ----------------------------

-- ----------------------------
-- Table structure for tb_e_webseveruser
-- ----------------------------
DROP TABLE IF EXISTS `tb_e_webseveruser`;
CREATE TABLE `tb_e_webseveruser` (
  `WebSeverUser_id` int(4) NOT NULL AUTO_INCREMENT,
  `WebSeverUser_IP` varchar(15) NOT NULL COMMENT '用户IP',
  `WebSeverUser_RegisteredData` datetime(6) DEFAULT NULL COMMENT '注册数据',
  PRIMARY KEY (`WebSeverUser_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_e_webseveruser
-- ----------------------------

-- ----------------------------
-- Table structure for tb_his_beachchanges
-- ----------------------------
DROP TABLE IF EXISTS `tb_his_beachchanges`;
CREATE TABLE `tb_his_beachchanges` (
  `_ID` int(4) NOT NULL AUTO_INCREMENT,
  `SludgeLandfill_Year` int(4) DEFAULT NULL COMMENT '吸淤填埋年份',
  `SludgeLandfill_Area` double(10,4) DEFAULT NULL COMMENT '吸淤填埋面积',
  `SludgeLandfill_Depth` double(10,4) DEFAULT NULL COMMENT '吸淤填埋深度',
  `Factory_Year` int(4) DEFAULT NULL COMMENT '建厂占地年份',
  `Factory_Area` double(10,4) DEFAULT NULL COMMENT '建厂占地面积',
  `Wharf_Year` int(4) DEFAULT NULL COMMENT '港口/码头占地年份',
  `Wharf_Area` double(10,4) DEFAULT NULL COMMENT '港口/码头占地面积',
  `Others_Name` varchar(50) DEFAULT NULL COMMENT '其他项目名称',
  `Others_Year` int(4) DEFAULT NULL COMMENT '其他项目年份',
  `Others_Area` double(10,4) DEFAULT NULL COMMENT '其他项目面积',
  PRIMARY KEY (`_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_his_beachchanges
-- ----------------------------

-- ----------------------------
-- Table structure for tb_his_beachsituation
-- ----------------------------
DROP TABLE IF EXISTS `tb_his_beachsituation`;
CREATE TABLE `tb_his_beachsituation` (
  `_Id` int(4) NOT NULL,
  `Height` double(10,4) NOT NULL COMMENT '滩面高程',
  `PlantType` varchar(50) NOT NULL COMMENT '植被种类',
  `HighestLevel` double(10,4) NOT NULL COMMENT '历史最高水位',
  `SurfaceWaterStart` int(2) NOT NULL COMMENT '滩面上水时间（月份）',
  `SurfaceWaterEnd` int(2) NOT NULL COMMENT '滩面退水时间（月份）',
  `FloodingTime` int(3) NOT NULL COMMENT '水淹时间（天数）',
  `BeachArea_Count` double(10,4) NOT NULL COMMENT '滩地面积_计',
  `BeachArea_CultivatedSpecies` double(10,4) NOT NULL COMMENT '滩地面积_垦种',
  `BeachArea_Cultivation` double(10,4) NOT NULL COMMENT '滩地面积_养殖',
  `BeachArea_Planting` double(10,4) NOT NULL COMMENT '滩地面积_植树',
  `BeachArea_Marsh` double(10,4) NOT NULL COMMENT '草滩',
  `BeachArea_LuBeach` double(10,4) NOT NULL COMMENT '芦滩',
  PRIMARY KEY (`_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_his_beachsituation
-- ----------------------------

-- ----------------------------
-- Table structure for tb_his_beachsituationsum
-- ----------------------------
DROP TABLE IF EXISTS `tb_his_beachsituationsum`;
CREATE TABLE `tb_his_beachsituationsum` (
  `_Id` int(10) NOT NULL AUTO_INCREMENT,
  `Environment_Id` varchar(20) NOT NULL COMMENT '环境编号',
  `Name` varchar(50) NOT NULL COMMENT '环境名称',
  `BeachType` int(4) NOT NULL COMMENT '环境类型',
  `BeachSituation_Id` int(4) DEFAULT '1' COMMENT '环境情况（外键）',
  `BeachChanges_SludgeLandfill` int(4) DEFAULT NULL COMMENT '吸淤清理年份（外键）',
  `Epidemic_Id` int(4) DEFAULT NULL COMMENT '相关疫情_有无渔船民活动（外键）',
  `Eliminate_Id` int(4) DEFAULT NULL COMMENT '末次灭螺年份（外键）',
  `SnailSituation_Id` int(4) DEFAULT NULL COMMENT '历史螺情_首次有螺年份（外键）',
  `Beach_BelongToCounty` varchar(100) NOT NULL COMMENT '所属县、乡（镇、街道）、村',
  PRIMARY KEY (`_Id`),
  KEY `idx_fk_BeachChanges_Sum` (`BeachChanges_SludgeLandfill`) USING BTREE,
  KEY `idx_fk_SnailSituation_Sum` (`SnailSituation_Id`) USING BTREE,
  KEY `idx_fk_Eliminate_Sum` (`Eliminate_Id`) USING BTREE,
  KEY `fk_epidemic` (`Epidemic_Id`),
  KEY `fk_beachsituation` (`BeachSituation_Id`),
  CONSTRAINT `fk_BeachChanges_Sum` FOREIGN KEY (`BeachChanges_SludgeLandfill`) REFERENCES `tb_his_beachchanges` (`_ID`),
  CONSTRAINT `fk_beachsituation` FOREIGN KEY (`BeachSituation_Id`) REFERENCES `tb_his_beachsituation` (`_Id`),
  CONSTRAINT `fk_elimnateId` FOREIGN KEY (`Eliminate_Id`) REFERENCES `tb_his_eliminate` (`_Id`),
  CONSTRAINT `fk_epidemic` FOREIGN KEY (`Epidemic_Id`) REFERENCES `tb_his_epidemic` (`_Id`),
  CONSTRAINT `fk_snailsituation` FOREIGN KEY (`SnailSituation_Id`) REFERENCES `tb_his_snailsituation_history` (`_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_his_beachsituationsum
-- ----------------------------

-- ----------------------------
-- Table structure for tb_his_eliminate
-- ----------------------------
DROP TABLE IF EXISTS `tb_his_eliminate`;
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
  `Final_Area` double(10,4) DEFAULT NULL COMMENT '末次灭螺面积',
  PRIMARY KEY (`_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_his_eliminate
-- ----------------------------

-- ----------------------------
-- Table structure for tb_his_epidemic
-- ----------------------------
DROP TABLE IF EXISTS `tb_his_epidemic`;
CREATE TABLE `tb_his_epidemic` (
  `_Id` int(4) NOT NULL,
  `LivestockGrazing_YesNo` bit(1) DEFAULT NULL COMMENT '有/无家畜放牧',
  `LivestockGrazing_Type` varchar(50) DEFAULT NULL COMMENT '家畜放牧种类',
  `FishingActivity` bit(1) DEFAULT NULL COMMENT '有无渔船民活动',
  `Emergency_Year` int(4) DEFAULT NULL COMMENT '发生急感年份',
  `Emergency_NumOfPeople` int(4) DEFAULT NULL COMMENT '发生急感人数',
  `SnailYearRecently` int(4) DEFAULT NULL COMMENT '最近哨螺阳性年份',
  `MouseYearRecently` int(4) DEFAULT NULL COMMENT '最近哨鼠年份',
  PRIMARY KEY (`_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_his_epidemic
-- ----------------------------

-- ----------------------------
-- Table structure for tb_his_snailsituation_history
-- ----------------------------
DROP TABLE IF EXISTS `tb_his_snailsituation_history`;
CREATE TABLE `tb_his_snailsituation_history` (
  `_Id` int(4) NOT NULL,
  `FirsSnailYear` int(4) DEFAULT NULL COMMENT '历史螺情_首次有螺年份',
  `LastSnailYear` int(4) DEFAULT NULL COMMENT '末次有螺年份',
  `Years` int(4) DEFAULT NULL COMMENT '有螺年数',
  `Area` double(10,4) DEFAULT NULL COMMENT '历史有螺面积',
  `SchistosomaArea` double(10,4) DEFAULT NULL COMMENT '其中感染性钉螺面积',
  PRIMARY KEY (`_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_his_snailsituation_history
-- ----------------------------

-- ----------------------------
-- Table structure for tb_is_diffusioneffect
-- ----------------------------
DROP TABLE IF EXISTS `tb_is_diffusioneffect`;
CREATE TABLE `tb_is_diffusioneffect` (
  `_id` int(4) NOT NULL,
  `direct_Positive_distance` double(10,4) DEFAULT NULL,
  `direct_Positive_year` int(4) DEFAULT NULL,
  `direct_Negative_distance` double(10,4) DEFAULT NULL,
  `direct_Negative_year` int(4) DEFAULT NULL,
  `indirect_Positive_distance` double(10,4) DEFAULT NULL,
  `indirect_Positive_year` int(4) DEFAULT NULL,
  `indirect_Negative_distance` double(10,4) DEFAULT NULL,
  `indirect_Negative_year` int(4) DEFAULT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_is_diffusioneffect
-- ----------------------------

-- ----------------------------
-- Table structure for tb_is_infectionreason
-- ----------------------------
DROP TABLE IF EXISTS `tb_is_infectionreason`;
CREATE TABLE `tb_is_infectionreason` (
  `_Id` int(4) NOT NULL AUTO_INCREMENT,
  `AcuteInfections` int(4) DEFAULT NULL COMMENT '急性感染',
  `DeterminationOfContaminatedWater` int(4) DEFAULT NULL COMMENT '疫水测定',
  `StoolDensity` double(10,3) DEFAULT NULL COMMENT '野粪密度',
  `StoolRatio` double(10,3) DEFAULT NULL COMMENT '野粪阳性率',
  PRIMARY KEY (`_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_is_infectionreason
-- ----------------------------

-- ----------------------------
-- Table structure for tb_is_reason
-- ----------------------------
DROP TABLE IF EXISTS `tb_is_reason`;
CREATE TABLE `tb_is_reason` (
  `_Id` int(4) NOT NULL AUTO_INCREMENT,
  `CrowdActivities` int(4) DEFAULT NULL COMMENT '人群活动',
  `RiskProject` int(4) DEFAULT NULL COMMENT '风险项目',
  `RiverFlood` int(4) DEFAULT NULL COMMENT '长江汛情',
  `LocalTemperature` double(10,3) DEFAULT NULL COMMENT '当地气温',
  PRIMARY KEY (`_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_is_reason
-- ----------------------------

-- ----------------------------
-- Table structure for tb_is_snail
-- ----------------------------
DROP TABLE IF EXISTS `tb_is_snail`;
CREATE TABLE `tb_is_snail` (
  `_Id` int(4) NOT NULL AUTO_INCREMENT,
  `SnailIS_LivingSnailAVGDensity` double(10,3) DEFAULT NULL COMMENT '活螺平均密度',
  `SnailIS_InfectiousSchistosomaAVGDensity` double(10,3) DEFAULT NULL COMMENT '感染性钉螺平均密度',
  `SnailIS_SchistosomaInfection` double(10,3) DEFAULT NULL COMMENT '钉螺感染率',
  `SnailIS_SnailArea` double(10,3) DEFAULT NULL COMMENT '钉螺面积',
  PRIMARY KEY (`_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_is_snail
-- ----------------------------

-- ----------------------------
-- Table structure for tb_is_sum
-- ----------------------------
DROP TABLE IF EXISTS `tb_is_sum`;
CREATE TABLE `tb_is_sum` (
  `Is_Id` int(5) NOT NULL AUTO_INCREMENT,
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
  `infectionreason_Id` int(4) DEFAULT NULL COMMENT '感染因素（外键）',
  PRIMARY KEY (`Is_Id`),
  KEY `snail_Id` (`snail_Id`),
  KEY `fk_de` (`diffusioneffect_Id`),
  KEY `fk_reason` (`reason_Id`),
  KEY `fk_ir` (`infectionreason_Id`),
  CONSTRAINT `fk_de` FOREIGN KEY (`diffusioneffect_Id`) REFERENCES `tb_is_diffusioneffect` (`_id`),
  CONSTRAINT `fk_ir` FOREIGN KEY (`infectionreason_Id`) REFERENCES `tb_is_infectionreason` (`_Id`),
  CONSTRAINT `fk_reason` FOREIGN KEY (`reason_Id`) REFERENCES `tb_is_reason` (`_Id`),
  CONSTRAINT `fk_snail` FOREIGN KEY (`snail_Id`) REFERENCES `tb_is_snail` (`_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_is_sum
-- ----------------------------

-- ----------------------------
-- Table structure for tb_r_account_mobile_web
-- ----------------------------
DROP TABLE IF EXISTS `tb_r_account_mobile_web`;
CREATE TABLE `tb_r_account_mobile_web` (
  `_Id` int(4) NOT NULL AUTO_INCREMENT,
  `Account_Id` int(4) NOT NULL,
  `MobilePhoneUser_Id` int(4) NOT NULL,
  `WebSeverUser_id` int(4) NOT NULL,
  PRIMARY KEY (`_Id`),
  KEY `Account_Id` (`Account_Id`) USING BTREE,
  KEY `MobilePhoneUser_Id` (`MobilePhoneUser_Id`) USING BTREE,
  KEY `fk_mob_web` (`WebSeverUser_id`),
  CONSTRAINT `fk_Account_Id` FOREIGN KEY (`Account_Id`) REFERENCES `tb_e_account` (`Account_Id`),
  CONSTRAINT `fk_mob_MobilePhoneUser_Id` FOREIGN KEY (`MobilePhoneUser_Id`) REFERENCES `tb_e_mobilphoneuser` (`MobilPhoneUser_Id`),
  CONSTRAINT `fk_mob_web` FOREIGN KEY (`WebSeverUser_id`) REFERENCES `tb_e_webseveruser` (`WebSeverUser_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_r_account_mobile_web
-- ----------------------------

-- ----------------------------
-- Table structure for tb_r_webphone
-- ----------------------------
DROP TABLE IF EXISTS `tb_r_webphone`;
CREATE TABLE `tb_r_webphone` (
  `_id` int(4) NOT NULL AUTO_INCREMENT,
  `WebSeverUser_id` int(4) DEFAULT NULL,
  `MobilPhoneUser_Id` int(4) DEFAULT NULL,
  `Beach_Id` int(11) DEFAULT NULL,
  `Task_Id` int(11) DEFAULT NULL,
  `is_id` int(4) DEFAULT NULL,
  PRIMARY KEY (`_id`),
  KEY `fk_mob` (`MobilPhoneUser_Id`),
  KEY `fk_web` (`WebSeverUser_id`),
  KEY `fk_BeachId` (`Beach_Id`),
  KEY `fk_task` (`Task_Id`),
  KEY `fk_is` (`is_id`),
  CONSTRAINT `fk_BeachId` FOREIGN KEY (`Beach_Id`) REFERENCES `tb_his_beachsituationsum` (`_Id`),
  CONSTRAINT `fk_is` FOREIGN KEY (`is_id`) REFERENCES `tb_is_sum` (`Is_Id`),
  CONSTRAINT `fk_mob` FOREIGN KEY (`MobilPhoneUser_Id`) REFERENCES `tb_e_mobilphoneuser` (`MobilPhoneUser_Id`),
  CONSTRAINT `fk_task` FOREIGN KEY (`Task_Id`) REFERENCES `tb_e_task` (`_Id`),
  CONSTRAINT `fk_web` FOREIGN KEY (`WebSeverUser_id`) REFERENCES `tb_e_webseveruser` (`WebSeverUser_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_r_webphone
-- ----------------------------

-- ----------------------------
-- Table structure for tb_wlo_
-- ----------------------------
DROP TABLE IF EXISTS `tb_wlo_`;
CREATE TABLE `tb_wlo_` (
  `O_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Task_Id` varchar(15) NOT NULL COMMENT '环境编号',
  `Longitude` double(10,4) NOT NULL COMMENT '经度',
  `Latitude` double(10,4) NOT NULL COMMENT '纬度',
  `Longitude_real` double(10,4) DEFAULT NULL COMMENT '纠偏后的经度',
  `Latitude_real` double(10,4) DEFAULT NULL COMMENT '纠偏后的纬度',
  `Radius` double(10,4) DEFAULT NULL COMMENT '半径',
  `GPSstate` bit(1) DEFAULT NULL COMMENT 'GPS定位状态',
  `GPS_OnorOff` bit(1) DEFAULT b'1' COMMENT 'GPS是否打开',
  PRIMARY KEY (`O_Id`),
  KEY `Task_Id` (`Task_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_wlo_
-- ----------------------------

-- ----------------------------
-- Procedure structure for pro_new
-- ----------------------------
DROP PROCEDURE IF EXISTS `pro_new`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `pro_new`(IN `_Account_Name` varchar(10),IN `Account_Password` varchar(20),IN `Person_Name` varchar(10),IN `Person_Sex` varchar(5),IN `Person_Organization` varchar(20),IN `Person_Business` varchar(50),IN `Person_Address` varchar(120))
Label_NewAccount:

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

END
;;
DELIMITER ;
