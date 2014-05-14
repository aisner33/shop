/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2014-05-13 19:22:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for brands
-- ----------------------------
DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(145) DEFAULT NULL,
  `description` text,
  `smallImage` varchar(250) DEFAULT NULL,
  `mediumImage` varchar(250) DEFAULT NULL,
  `largeImage` varchar(250) DEFAULT NULL,
  `importance` tinyint(4) DEFAULT '1' COMMENT 'Indica cuan importante es la marca, 1: Muy importante, 2:Importante, 3:Medio, 4:Poco importante, 5: Especial',
  `status` tinyint(4) DEFAULT '1' COMMENT 'Indica si está habilitada la marca',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of brands
-- ----------------------------

-- ----------------------------
-- Table structure for carts
-- ----------------------------
DROP TABLE IF EXISTS `carts`;
CREATE TABLE `carts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `added` datetime NOT NULL,
  `quantity` tinyint(4) NOT NULL DEFAULT '1',
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_carts_products_colors1_idx` (`color_id`),
  KEY `fk_carts_products_sizes1_idx` (`size_id`),
  KEY `fk_carts_products1_idx` (`product_id`),
  KEY `fk_carts_users1_idx` (`user_id`),
  CONSTRAINT `fk_carts_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_carts_products_colors1` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_carts_products_sizes1` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_carts_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of carts
-- ----------------------------

-- ----------------------------
-- Table structure for categorystores
-- ----------------------------
DROP TABLE IF EXISTS `categorystores`;
CREATE TABLE `categorystores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(145) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Indica el tipo de tienda. Boutique, ropa diseñador, casa de arte, interiorismo, decoraciones';

-- ----------------------------
-- Records of categorystores
-- ----------------------------

-- ----------------------------
-- Table structure for childsections
-- ----------------------------
DROP TABLE IF EXISTS `childsections`;
CREATE TABLE `childsections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(145) DEFAULT NULL,
  `description` text,
  `status` tinyint(4) DEFAULT NULL,
  `order` tinyint(4) DEFAULT NULL,
  `fathersection_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_child_sections_father_sections1_idx` (`fathersection_id`),
  CONSTRAINT `fk_child_sections_father_sections1` FOREIGN KEY (`fathersection_id`) REFERENCES `fathersections` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of childsections
-- ----------------------------

-- ----------------------------
-- Table structure for childsections_products
-- ----------------------------
DROP TABLE IF EXISTS `childsections_products`;
CREATE TABLE `childsections_products` (
  `childSection_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  KEY `fk_childSections_products_childSections1_idx` (`childSection_id`),
  KEY `fk_childSections_products_products1_idx` (`product_id`),
  CONSTRAINT `fk_childSections_products_childSections1` FOREIGN KEY (`childSection_id`) REFERENCES `childsections` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_childSections_products_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of childsections_products
-- ----------------------------

-- ----------------------------
-- Table structure for codetype
-- ----------------------------
DROP TABLE IF EXISTS `codetype`;
CREATE TABLE `codetype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of codetype
-- ----------------------------

-- ----------------------------
-- Table structure for colors
-- ----------------------------
DROP TABLE IF EXISTS `colors`;
CREATE TABLE `colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(145) NOT NULL,
  `hexaCode` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of colors
-- ----------------------------

-- ----------------------------
-- Table structure for colors_products
-- ----------------------------
DROP TABLE IF EXISTS `colors_products`;
CREATE TABLE `colors_products` (
  `color_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  KEY `fk_colors_products_colors1_idx` (`color_id`),
  KEY `fk_colors_products_products1_idx` (`product_id`),
  CONSTRAINT `fk_colors_products_colors1` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_colors_products_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of colors_products
-- ----------------------------

-- ----------------------------
-- Table structure for countrys
-- ----------------------------
DROP TABLE IF EXISTS `countrys`;
CREATE TABLE `countrys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(145) DEFAULT NULL,
  `value` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of countrys
-- ----------------------------

-- ----------------------------
-- Table structure for dealstypes
-- ----------------------------
DROP TABLE IF EXISTS `dealstypes`;
CREATE TABLE `dealstypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(145) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dealstypes
-- ----------------------------

-- ----------------------------
-- Table structure for deliverys
-- ----------------------------
DROP TABLE IF EXISTS `deliverys`;
CREATE TABLE `deliverys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recibeDay` datetime DEFAULT NULL COMMENT 'fecha en la que se recibe el pedido',
  `sendDay` datetime DEFAULT NULL COMMENT 'fecha en la que se envía el paquete',
  `service` varchar(45) DEFAULT NULL COMMENT 'Servicio de mensajería',
  `codeGuide` varchar(45) DEFAULT NULL,
  `user_id` int(11) NOT NULL COMMENT 'Usuario que autoriza la venta',
  PRIMARY KEY (`id`),
  KEY `fk_deliverys_users1_idx` (`user_id`),
  CONSTRAINT `fk_deliverys_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of deliverys
-- ----------------------------

-- ----------------------------
-- Table structure for deliverys_sales
-- ----------------------------
DROP TABLE IF EXISTS `deliverys_sales`;
CREATE TABLE `deliverys_sales` (
  `sale_id` int(11) NOT NULL,
  `delivery_id` int(11) NOT NULL,
  PRIMARY KEY (`sale_id`,`delivery_id`),
  KEY `fk_deliverys_sales_sales1_idx` (`sale_id`),
  KEY `fk_deliverys_sales_deliverys1_idx` (`delivery_id`),
  CONSTRAINT `fk_deliverys_sales_deliverys1` FOREIGN KEY (`delivery_id`) REFERENCES `deliverys` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_deliverys_sales_sales1` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of deliverys_sales
-- ----------------------------

-- ----------------------------
-- Table structure for deliverys_statusdeliverys
-- ----------------------------
DROP TABLE IF EXISTS `deliverys_statusdeliverys`;
CREATE TABLE `deliverys_statusdeliverys` (
  `modification` datetime DEFAULT NULL,
  `delivery_id` int(11) NOT NULL,
  `statusdelivery_id` int(11) NOT NULL,
  PRIMARY KEY (`delivery_id`,`statusdelivery_id`),
  KEY `fk_deliverys_statusDeliverys_deliverys1_idx` (`delivery_id`),
  KEY `fk_deliverys_statusDeliverys_statusDeliverys1_idx` (`statusdelivery_id`),
  CONSTRAINT `fk_deliverys_statusDeliverys_deliverys1` FOREIGN KEY (`delivery_id`) REFERENCES `deliverys` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_deliverys_statusDeliverys_statusDeliverys1` FOREIGN KEY (`statusdelivery_id`) REFERENCES `status_deliverys` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of deliverys_statusdeliverys
-- ----------------------------

-- ----------------------------
-- Table structure for devolutions
-- ----------------------------
DROP TABLE IF EXISTS `devolutions`;
CREATE TABLE `devolutions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `devolutionDate` datetime DEFAULT NULL,
  `acceptanceDate` datetime DEFAULT NULL,
  `devolutionsreason_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_devolutions_devolutionsReasons1_idx` (`devolutionsreason_id`),
  CONSTRAINT `fk_devolutions_devolutionsReasons1` FOREIGN KEY (`devolutionsreason_id`) REFERENCES `devolutions_reasons` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of devolutions
-- ----------------------------

-- ----------------------------
-- Table structure for devolutions_reasons
-- ----------------------------
DROP TABLE IF EXISTS `devolutions_reasons`;
CREATE TABLE `devolutions_reasons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reason` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of devolutions_reasons
-- ----------------------------

-- ----------------------------
-- Table structure for devolutions_users
-- ----------------------------
DROP TABLE IF EXISTS `devolutions_users`;
CREATE TABLE `devolutions_users` (
  `devolutions_id` int(11) NOT NULL,
  KEY `fk_devolutions_users_devolutions1_idx` (`devolutions_id`),
  CONSTRAINT `fk_devolutions_users_devolutions1` FOREIGN KEY (`devolutions_id`) REFERENCES `devolutions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of devolutions_users
-- ----------------------------

-- ----------------------------
-- Table structure for fathersections
-- ----------------------------
DROP TABLE IF EXISTS `fathersections`;
CREATE TABLE `fathersections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(145) NOT NULL,
  `description` text,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `order` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fathersections
-- ----------------------------

-- ----------------------------
-- Table structure for father_sections_products
-- ----------------------------
DROP TABLE IF EXISTS `father_sections_products`;
CREATE TABLE `father_sections_products` (
  `product_id` int(11) NOT NULL,
  `fathersection_id` int(11) NOT NULL,
  KEY `fk_fatherSections_products_products1_idx` (`product_id`),
  KEY `fk_fatherSections_products_fatherSections1_idx` (`fathersection_id`),
  CONSTRAINT `fk_fatherSections_products_fatherSections1` FOREIGN KEY (`fathersection_id`) REFERENCES `fathersections` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_fatherSections_products_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of father_sections_products
-- ----------------------------

-- ----------------------------
-- Table structure for freaturedproducts
-- ----------------------------
DROP TABLE IF EXISTS `freaturedproducts`;
CREATE TABLE `freaturedproducts` (
  `id` int(11) NOT NULL,
  `order` tinyint(4) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `childsection_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `fathersection_id` int(11) NOT NULL,
  `mastersection_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_freaturedProducts_products1_idx` (`product_id`),
  KEY `fk_freaturedProducts_childSections1_idx` (`childsection_id`),
  KEY `fk_freaturedProducts_sections1_idx` (`section_id`),
  KEY `fk_freaturedProducts_fatherSections1_idx` (`fathersection_id`),
  KEY `fk_freaturedProducts_masterSections1_idx` (`mastersection_id`),
  CONSTRAINT `fk_freaturedProducts_childSections1` FOREIGN KEY (`childsection_id`) REFERENCES `childsections` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_freaturedProducts_fatherSections1` FOREIGN KEY (`fathersection_id`) REFERENCES `fathersections` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_freaturedProducts_masterSections1` FOREIGN KEY (`mastersection_id`) REFERENCES `mastersections` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_freaturedProducts_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_freaturedProducts_sections1` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of freaturedproducts
-- ----------------------------

-- ----------------------------
-- Table structure for galleries
-- ----------------------------
DROP TABLE IF EXISTS `galleries`;
CREATE TABLE `galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(45) DEFAULT NULL COMMENT 'Descripción de la galería',
  `thumbnail1` varchar(45) DEFAULT NULL,
  `fullImage1` varchar(45) DEFAULT NULL,
  `thumbnail2` varchar(45) DEFAULT NULL,
  `fullImage2` varchar(45) DEFAULT NULL,
  `thumbnail3` varchar(45) DEFAULT NULL,
  `fullImage3` varchar(45) DEFAULT NULL,
  `thumbnail4` varchar(45) DEFAULT NULL,
  `fullImage4` varchar(45) DEFAULT NULL,
  `thumbnail5` varchar(45) DEFAULT NULL,
  `fullimage5` varchar(45) DEFAULT NULL,
  `thumbnail6` varchar(45) DEFAULT NULL,
  `fullImage6` varchar(45) DEFAULT NULL,
  `thumbnail7` varchar(45) DEFAULT NULL,
  `fullImage7` varchar(45) DEFAULT NULL,
  `thumbnail8` varchar(45) DEFAULT NULL,
  `fullImage8` varchar(45) DEFAULT NULL,
  `thumbnail9` varchar(45) DEFAULT NULL,
  `fullImage9` varchar(45) DEFAULT NULL,
  `thumbnail10` varchar(45) DEFAULT NULL,
  `fullImage10` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of galleries
-- ----------------------------

-- ----------------------------
-- Table structure for guests
-- ----------------------------
DROP TABLE IF EXISTS `guests`;
CREATE TABLE `guests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(145) DEFAULT NULL,
  `email` varchar(145) DEFAULT NULL,
  `genre` varchar(15) DEFAULT NULL,
  `invitedDate` datetime DEFAULT NULL,
  `aceptedInviatation` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of guests
-- ----------------------------

-- ----------------------------
-- Table structure for guests_users
-- ----------------------------
DROP TABLE IF EXISTS `guests_users`;
CREATE TABLE `guests_users` (
  `guest_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  KEY `fk_guests_users_guests1_idx` (`guest_id`),
  KEY `fk_guests_users_users1_idx` (`user_id`),
  CONSTRAINT `fk_guests_users_guests1` FOREIGN KEY (`guest_id`) REFERENCES `guests` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_guests_users_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of guests_users
-- ----------------------------

-- ----------------------------
-- Table structure for labels
-- ----------------------------
DROP TABLE IF EXISTS `labels`;
CREATE TABLE `labels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `composition` varchar(250) DEFAULT NULL,
  `madeIn` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of labels
-- ----------------------------

-- ----------------------------
-- Table structure for mailingadress
-- ----------------------------
DROP TABLE IF EXISTS `mailingadress`;
CREATE TABLE `mailingadress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) NOT NULL,
  `suburb` varchar(200) DEFAULT NULL,
  `street` varchar(200) DEFAULT NULL,
  `exteriorNumber` varchar(15) DEFAULT NULL,
  `interiorNumber` varchar(15) DEFAULT NULL,
  `reference` text,
  `cp` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_mailingAdress_states1_idx` (`state_id`),
  KEY `fk_mailingAdress_users1_idx` (`user_id`),
  CONSTRAINT `fk_mailingAdress_states1` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_mailingAdress_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mailingadress
-- ----------------------------

-- ----------------------------
-- Table structure for mastersections
-- ----------------------------
DROP TABLE IF EXISTS `mastersections`;
CREATE TABLE `mastersections` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` text,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `order` tinyint(4) NOT NULL DEFAULT '1',
  `section_id` int(11) NOT NULL AUTO_INCREMENT,
  `childsection_id` int(11) NOT NULL,
  `startValidity` datetime DEFAULT NULL,
  `endValidity` datetime DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `otherText` text,
  PRIMARY KEY (`id`),
  KEY `fk_masterSections_section1_idx` (`section_id`),
  KEY `fk_masterSections_childSections1_idx` (`childsection_id`),
  CONSTRAINT `fk_masterSections_childSections1` FOREIGN KEY (`childsection_id`) REFERENCES `childsections` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_masterSections_section1` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Indica una sección general para determinados productos en temporada, se relaciona directamente con la SECCION HIJO y con la SECCION. Para el "día de las madres" se generará una SECCION MASTER y se asignarán productos sin importal la SECCION PADRE pero si la HIJO y SECCION';

-- ----------------------------
-- Records of mastersections
-- ----------------------------

-- ----------------------------
-- Table structure for mastersections_products
-- ----------------------------
DROP TABLE IF EXISTS `mastersections_products`;
CREATE TABLE `mastersections_products` (
  `mastersections_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  KEY `fk_masterSections_products_masterSections1_idx` (`mastersections_id`),
  KEY `fk_masterSections_products_products1_idx` (`products_id`),
  CONSTRAINT `fk_masterSections_products_masterSections1` FOREIGN KEY (`mastersections_id`) REFERENCES `mastersections` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_masterSections_products_products1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mastersections_products
-- ----------------------------

-- ----------------------------
-- Table structure for offers
-- ----------------------------
DROP TABLE IF EXISTS `offers`;
CREATE TABLE `offers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(145) DEFAULT NULL,
  `description` text,
  `terms` text,
  `startValidity` datetime DEFAULT NULL,
  `endValidity` datetime DEFAULT NULL,
  `dealType` varchar(45) DEFAULT NULL,
  `discount` tinyint(4) DEFAULT NULL,
  `dealsType_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_deals_dealsTypes1_idx` (`dealsType_id`),
  CONSTRAINT `fk_deals_dealsTypes1` FOREIGN KEY (`dealsType_id`) REFERENCES `dealstypes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of offers
-- ----------------------------

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `smallDescription` varchar(200) NOT NULL,
  `largeDescription` text,
  `otherText` text COMMENT 'Cualquier otro texto que se requiera',
  `creationDate` datetime NOT NULL,
  `modificationDate` datetime NOT NULL,
  `userPrice` varchar(10) NOT NULL COMMENT 'Precio que se muestra al usuario',
  `storePrice` varchar(10) NOT NULL COMMENT 'Precio real del producto',
  `stock` varchar(45) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `barCode` varchar(16) DEFAULT NULL,
  `store_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `season_id` int(11) NOT NULL,
  `gallerie_id` int(11) NOT NULL,
  `offer_id` int(11) NOT NULL,
  `realsize_id` int(11) NOT NULL,
  `vegano` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_products_stores1_idx` (`store_id`),
  KEY `fk_products_brands1_idx` (`brand_id`),
  KEY `fk_products_seasons1_idx` (`season_id`),
  KEY `fk_products_galleries1_idx` (`gallerie_id`),
  KEY `fk_products_deals1_idx` (`offer_id`),
  KEY `fk_products_realSizes1_idx` (`realsize_id`),
  CONSTRAINT `fk_products_brands1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_deals1` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_galleries1` FOREIGN KEY (`gallerie_id`) REFERENCES `galleries` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_realSizes1` FOREIGN KEY (`realsize_id`) REFERENCES `realsizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_seasons1` FOREIGN KEY (`season_id`) REFERENCES `seasons` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_stores1` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Productos disponibles';

-- ----------------------------
-- Records of products
-- ----------------------------

-- ----------------------------
-- Table structure for products_sections
-- ----------------------------
DROP TABLE IF EXISTS `products_sections`;
CREATE TABLE `products_sections` (
  `section_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  KEY `fk_products_sections_sections1_idx` (`section_id`),
  KEY `fk_products_sections_products1_idx` (`product_id`),
  CONSTRAINT `fk_products_sections_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_sections_sections1` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of products_sections
-- ----------------------------

-- ----------------------------
-- Table structure for products_sizes
-- ----------------------------
DROP TABLE IF EXISTS `products_sizes`;
CREATE TABLE `products_sizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `size_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_products_sizes_sizes1_idx` (`size_id`),
  KEY `fk_products_sizes_products1_idx` (`product_id`),
  CONSTRAINT `fk_products_sizes_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_sizes_sizes1` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of products_sizes
-- ----------------------------

-- ----------------------------
-- Table structure for products_wishlists
-- ----------------------------
DROP TABLE IF EXISTS `products_wishlists`;
CREATE TABLE `products_wishlists` (
  `wishlists_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  PRIMARY KEY (`wishlists_id`,`products_id`),
  KEY `fk_products_wishlists_wishlists1_idx` (`wishlists_id`),
  KEY `fk_products_wishlists_products1_idx` (`products_id`),
  CONSTRAINT `fk_products_wishlists_products1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_wishlists_wishlists1` FOREIGN KEY (`wishlists_id`) REFERENCES `wishlists` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of products_wishlists
-- ----------------------------

-- ----------------------------
-- Table structure for promotioncodes
-- ----------------------------
DROP TABLE IF EXISTS `promotioncodes`;
CREATE TABLE `promotioncodes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(45) NOT NULL,
  `validityStart` datetime NOT NULL,
  `validityEnd` datetime NOT NULL,
  `value` varchar(15) NOT NULL DEFAULT '0',
  `origin` varchar(45) DEFAULT NULL,
  `status` varchar(45) NOT NULL DEFAULT '0',
  `codeType_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_promotionCodes_codeType1_idx` (`codeType_id`),
  CONSTRAINT `fk_promotionCodes_codeType1` FOREIGN KEY (`codeType_id`) REFERENCES `codetype` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of promotioncodes
-- ----------------------------

-- ----------------------------
-- Table structure for realsizes
-- ----------------------------
DROP TABLE IF EXISTS `realsizes`;
CREATE TABLE `realsizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `large` varchar(15) DEFAULT NULL,
  `width` varchar(15) DEFAULT NULL,
  `height` varchar(15) DEFAULT NULL,
  `mediumLarge` varchar(15) DEFAULT NULL,
  `mediumWidth` varchar(15) DEFAULT NULL,
  `weight` varchar(15) DEFAULT NULL,
  `comment` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of realsizes
-- ----------------------------

-- ----------------------------
-- Table structure for reviews
-- ----------------------------
DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text,
  `star` tinyint(4) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `sponsored` tinyint(4) NOT NULL DEFAULT '0',
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_reviews_products1_idx` (`product_id`),
  CONSTRAINT `fk_reviews_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of reviews
-- ----------------------------

-- ----------------------------
-- Table structure for sales
-- ----------------------------
DROP TABLE IF EXISTS `sales`;
CREATE TABLE `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `saleDate` datetime NOT NULL,
  `quantity` tinyint(4) NOT NULL DEFAULT '1',
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `totalCost` varchar(45) DEFAULT NULL,
  `promotioncode_id` int(11) NOT NULL,
  `offer_id` int(11) NOT NULL,
  `subTotal` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_carts_products_colors1_idx` (`color_id`),
  KEY `fk_carts_products_sizes1_idx` (`size_id`),
  KEY `fk_carts_products1_idx` (`product_id`),
  KEY `fk_carts_users1_idx` (`user_id`),
  KEY `fk_sales_promotionCodes1_idx` (`promotioncode_id`),
  KEY `fk_sales_offers1_idx` (`offer_id`),
  CONSTRAINT `fk_carts_products10` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_carts_products_colors10` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_carts_products_sizes10` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_carts_users10` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_sales_offers1` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_sales_promotionCodes1` FOREIGN KEY (`promotioncode_id`) REFERENCES `promotioncodes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sales
-- ----------------------------

-- ----------------------------
-- Table structure for seasons
-- ----------------------------
DROP TABLE IF EXISTS `seasons`;
CREATE TABLE `seasons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(145) NOT NULL,
  `startValidity` datetime NOT NULL,
  `endValidity` datetime NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seasons
-- ----------------------------

-- ----------------------------
-- Table structure for sections
-- ----------------------------
DROP TABLE IF EXISTS `sections`;
CREATE TABLE `sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(145) DEFAULT NULL,
  `description` text,
  `status` tinyint(4) DEFAULT NULL,
  `order` tinyint(4) DEFAULT NULL,
  `childsection_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_section_childSeccions1_idx` (`childsection_id`),
  CONSTRAINT `fk_section_childSeccions1` FOREIGN KEY (`childsection_id`) REFERENCES `childsections` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Sección que depende del "CHILDSECIONS". Ej. zapatos, vestidos, outfit, top, bottom, nightwear';

-- ----------------------------
-- Records of sections
-- ----------------------------

-- ----------------------------
-- Table structure for sizes
-- ----------------------------
DROP TABLE IF EXISTS `sizes`;
CREATE TABLE `sizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(10) NOT NULL,
  `country_id` int(11) NOT NULL,
  `equivalenceMX` varchar(10) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sizes
-- ----------------------------

-- ----------------------------
-- Table structure for states
-- ----------------------------
DROP TABLE IF EXISTS `states`;
CREATE TABLE `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `alias` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of states
-- ----------------------------

-- ----------------------------
-- Table structure for status_deliverys
-- ----------------------------
DROP TABLE IF EXISTS `status_deliverys`;
CREATE TABLE `status_deliverys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(45) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of status_deliverys
-- ----------------------------

-- ----------------------------
-- Table structure for stores
-- ----------------------------
DROP TABLE IF EXISTS `stores`;
CREATE TABLE `stores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `smallDescription` varchar(250) NOT NULL,
  `largeDescription` text,
  `phone1` varchar(13) NOT NULL,
  `phone2` varchar(13) DEFAULT NULL,
  `email1` varchar(145) NOT NULL,
  `email2` varchar(145) DEFAULT NULL,
  `city` varchar(145) DEFAULT NULL,
  `cp` varchar(6) DEFAULT NULL,
  `suburb` varchar(145) DEFAULT NULL,
  `street` varchar(150) DEFAULT NULL,
  `internalNumber` varchar(10) DEFAULT NULL,
  `externalNumber` varchar(10) DEFAULT NULL,
  `gallerie_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `categorystore_id` int(11) NOT NULL COMMENT 'Indica el tipo de tienda. Boutique, ropa diseñador, casa de arte, interiorismo, decoraciones',
  PRIMARY KEY (`id`),
  KEY `fk_stores_galleries1_idx` (`gallerie_id`),
  KEY `fk_stores_states1_idx` (`state_id`),
  KEY `fk_stores_categoryStores1_idx` (`categorystore_id`),
  CONSTRAINT `fk_stores_categoryStores1` FOREIGN KEY (`categorystore_id`) REFERENCES `categorystores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_stores_galleries1` FOREIGN KEY (`gallerie_id`) REFERENCES `galleries` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_stores_states1` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of stores
-- ----------------------------

-- ----------------------------
-- Table structure for userprofiles
-- ----------------------------
DROP TABLE IF EXISTS `userprofiles`;
CREATE TABLE `userprofiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(145) DEFAULT NULL,
  `lastname` varchar(145) DEFAULT NULL,
  `genre` varchar(10) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_userProfiles_users1_idx` (`user_id`),
  CONSTRAINT `fk_userProfiles_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of userprofiles
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(145) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------

-- ----------------------------
-- Table structure for wishlists
-- ----------------------------
DROP TABLE IF EXISTS `wishlists`;
CREATE TABLE `wishlists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  `visible` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wishlists
-- ----------------------------
