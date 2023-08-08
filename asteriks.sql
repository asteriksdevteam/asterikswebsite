# Host: localhost  (Version 8.0.30)
# Date: 2023-08-08 15:37:17
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "about_us"
#

DROP TABLE IF EXISTS `about_us`;
CREATE TABLE `about_us` (
  `id` int NOT NULL AUTO_INCREMENT,
  `slider_heading` varchar(255) DEFAULT NULL,
  `slider_heading_content` text,
  `our_story` text,
  `our_story_heading` varchar(255) DEFAULT NULL,
  `company_profile_heading` varchar(255) DEFAULT NULL,
  `company_profile` text,
  `mission_statment_heading` varchar(255) DEFAULT NULL,
  `mission_statment` text,
  `Vision_statment_heading` varchar(255) DEFAULT NULL,
  `Vision_statment` text,
  `project_complete` varchar(100) DEFAULT NULL,
  `happy_customer` varchar(100) DEFAULT NULL,
  `year_experience` varchar(100) DEFAULT NULL,
  `award_achievement` varchar(100) DEFAULT NULL,
  `work_image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

#
# Data for table "about_us"
#

INSERT INTO `about_us` VALUES (1,'sdssadassdsdsd2222222','sdssadassdsdsd','sdasd','sdsdsdsd','sadas','sdas','sdasd','sdsad','asdasd','asd','asdsa','a','asdsadsad','asdsad','1691057429.jpg','2023-08-03 05:10:29');

#
# Structure for table "agencies"
#

DROP TABLE IF EXISTS `agencies`;
CREATE TABLE `agencies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` text,
  `Image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "agencies"
#

/*!40000 ALTER TABLE `agencies` DISABLE KEYS */;
INSERT INTO `agencies` VALUES (1,1,NULL,'Demo',NULL,'2023-08-08 11:31:02','2023-08-08 11:33:56');
/*!40000 ALTER TABLE `agencies` ENABLE KEYS */;

#
# Structure for table "agency_category"
#

DROP TABLE IF EXISTS `agency_category`;
CREATE TABLE `agency_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_id` int DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "agency_category"
#

/*!40000 ALTER TABLE `agency_category` DISABLE KEYS */;
INSERT INTO `agency_category` VALUES (1,1,'Agency','2023-08-08 10:46:51',NULL),(2,1,'E-Commerce','2023-08-08 10:47:20',NULL),(3,1,'Agencysss','2023-08-08 11:08:58','2023-08-08 11:09:26'),(4,2,'asd','2023-08-08 11:09:38',NULL);
/*!40000 ALTER TABLE `agency_category` ENABLE KEYS */;

#
# Structure for table "awards"
#

DROP TABLE IF EXISTS `awards`;
CREATE TABLE `awards` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Heading` varchar(255) DEFAULT NULL,
  `Description` text,
  `Image` varchar(255) DEFAULT NULL,
  `Status` tinyint DEFAULT '1',
  `MetaTitle` varchar(255) DEFAULT NULL,
  `CreateDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `LastModified` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

#
# Data for table "awards"
#

/*!40000 ALTER TABLE `awards` DISABLE KEYS */;
INSERT INTO `awards` VALUES (1,'Award No 1','In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available','uploads/awards/1.jpg',1,'award','2023-08-04 02:29:05','2023-08-04 02:29:09'),(2,'Award No 2','In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available','uploads/awards/1.jpg',1,'award','2023-08-04 02:29:21','2023-08-04 02:29:40'),(3,'Award No 3','In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available','uploads/awards/1.jpg',1,'award','2023-08-04 02:29:21','2023-08-04 02:29:42'),(4,'Award No 4','In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available','uploads/awards/1.jpg',1,'award','2023-08-04 02:29:22','2023-08-04 02:29:56'),(6,'heakdad','asdas asd asd as','uploads/awards/1691129987.jpg',1,'asd','2023-08-04 11:19:47',NULL),(7,'ghjg','jhkj','uploads/awards/1691130080.png',1,'adsasd','2023-08-04 11:21:20',NULL),(8,'What Our Client Say','as','uploads/awards/1691130792.jpg',1,'asd','2023-08-04 11:33:12',NULL),(9,'asd','aewqesd','uploads/awards/1691131221.png',1,'adsasd','2023-08-04 11:40:21',NULL),(10,'asd','dddtdtrdtr','uploads/awards/1691145589.jpg',1,'hjuh','2023-08-04 15:39:49',NULL),(11,'asd','asdasd','uploads/awards/1691219751.jpg',1,NULL,'2023-08-05 12:15:51',NULL);
/*!40000 ALTER TABLE `awards` ENABLE KEYS */;

#
# Structure for table "blog_pages"
#

DROP TABLE IF EXISTS `blog_pages`;
CREATE TABLE `blog_pages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `slider_heading` varchar(255) DEFAULT NULL,
  `slider_heading_content` text,
  `work_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

#
# Data for table "blog_pages"
#

INSERT INTO `blog_pages` VALUES (1,'222','sadasd','sdasdas','2023-08-05 14:38:04','2023-08-05 14:39:06');

#
# Structure for table "blogs"
#

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id` int NOT NULL DEFAULT '1',
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category_id` int NOT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sort` int DEFAULT NULL,
  `short_description` mediumtext NOT NULL,
  `description` longtext,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_tags` varchar(255) DEFAULT NULL,
  `meta_description` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

#
# Data for table "blogs"
#

/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'Farrukh Salam','farrukh-salam',1,'169121740213822.jpg','169121740213822.jpg',NULL,'<p>ddqweqweqweqwdsdqwsdasdasdasdasdas</p>','<p>asdasdasdasdqwqdasdasdasdasdasdas</p>','2023-08-05 06:36:42','2023-08-05 06:36:42',1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;

#
# Structure for table "careers"
#

DROP TABLE IF EXISTS `careers`;
CREATE TABLE `careers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `slider_heading` varchar(255) DEFAULT NULL,
  `slider_heading_content` text,
  `apply` varchar(255) DEFAULT NULL,
  `review` varchar(255) DEFAULT NULL,
  `interviews` varchar(255) DEFAULT NULL,
  `onboarding` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

#
# Data for table "careers"
#

INSERT INTO `careers` VALUES (1,'adasd3','sadasd','asdasd','asdasd','asdasd3','assdasd','2023-08-03 07:40:35');

#
# Structure for table "categories"
#

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `category_image` varchar(255) DEFAULT NULL,
  `type_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

#
# Data for table "categories"
#

INSERT INTO `categories` VALUES (1,'UI UX','1691131440.jpg','1','2023-08-04 06:44:00','2023-08-04 12:09:59'),(2,'SEO','1691243996.jpg','1','2023-08-05 13:59:56','2023-08-07 12:38:18');

#
# Structure for table "category_types"
#

DROP TABLE IF EXISTS `category_types`;
CREATE TABLE `category_types` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type_name` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

#
# Data for table "category_types"
#

INSERT INTO `category_types` VALUES (1,'Blog'),(2,'Home Category');

#
# Structure for table "contact_us"
#

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE `contact_us` (
  `id` int NOT NULL AUTO_INCREMENT,
  `slider_heading` varchar(255) DEFAULT NULL,
  `slider_heading_content` varchar(255) DEFAULT NULL,
  `slider_image` varchar(255) DEFAULT NULL,
  `contactno` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `work_with_image_1` varchar(255) DEFAULT NULL,
  `work_with_image_2` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

#
# Data for table "contact_us"
#

INSERT INTO `contact_us` VALUES (1,'dsdasd','sdsd','1691089826.jpg','03111094114','adasdasd',NULL,'1691089966.jpg','1691089982.jpg','2023-08-03 19:13:25');

#
# Structure for table "failed_jobs"
#

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "failed_jobs"
#


#
# Structure for table "metas"
#

DROP TABLE IF EXISTS `metas`;
CREATE TABLE `metas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `page_slug` varchar(250) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_tags` varchar(255) DEFAULT NULL,
  `meta_description` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

#
# Data for table "metas"
#

INSERT INTO `metas` VALUES (2,'home','erjeljrl','ejreljr,eihroerjw,iherowrjwe,ehrowerwe','qejrlejrlejrlejrwer','2023-08-06 10:52:35','2023-08-06 10:52:35'),(3,'home','erjeljrl','ejreljr,eihroerjw,iherowrjwe,ehrowerwesdsdsdsds','\\\r\nqejrlejrlejrlejrwer','2023-08-06 11:13:16','2023-08-06 11:13:16'),(4,'home','erjeljrl','sdsd','qejrlejrlejrlejrwer','2023-08-06 11:13:33','2023-08-06 11:13:33');

#
# Structure for table "migrations"
#

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "migrations"
#

INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2014_10_12_100000_create_password_reset_tokens_table',2);

#
# Structure for table "pages"
#

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `page_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

#
# Data for table "pages"
#

INSERT INTO `pages` VALUES (1,'home',NULL,'home'),(2,'aboutus',NULL,'about-us'),(3,'carrer',NULL,'career'),(4,'blog',NULL,'blog'),(5,'services',NULL,'services');

#
# Structure for table "password_reset_tokens"
#

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "password_reset_tokens"
#


#
# Structure for table "password_resets"
#

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "password_resets"
#


#
# Structure for table "personal_access_tokens"
#

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "personal_access_tokens"
#


#
# Structure for table "roles"
#

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `section` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "roles"
#

INSERT INTO `roles` VALUES (1,'Super Admin','about-us,blog,services,career,home-pages,contact-us,testimonial,category,subcategory,service-category,seo,service-agency'),(2,'Blogger','blog'),(3,'SEO Specialist',NULL),(4,'Content Manager',NULL);

#
# Structure for table "service_categories"
#

DROP TABLE IF EXISTS `service_categories`;
CREATE TABLE `service_categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `category_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

#
# Data for table "service_categories"
#

INSERT INTO `service_categories` VALUES (1,'Content Services','1691253819.jpg','2023-08-05 16:43:39','2023-08-05 16:44:06'),(2,'Digital Marketing','1691253819.jpg','2023-08-05 16:43:39','2023-08-05 16:43:39'),(3,'IT Services','1691253909.jpg','2023-08-05 16:45:09','2023-08-05 16:45:09'),(4,'Design and Development','1691253934.jpg','2023-08-05 16:45:34','2023-08-05 16:45:34');

#
# Structure for table "services"
#

DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `main_heading` varchar(255) DEFAULT NULL,
  `main_desc` text,
  `header_image` varchar(255) DEFAULT NULL,
  `service_heading` varchar(255) DEFAULT NULL,
  `box1_heading` varchar(255) DEFAULT NULL,
  `box1_desc` text,
  `box1_image` varchar(255) DEFAULT NULL,
  `box2_heading` varchar(255) DEFAULT NULL,
  `box2_desc` text,
  `box2_image` varchar(255) DEFAULT NULL,
  `box3_heading` varchar(255) DEFAULT NULL,
  `box3_desc` text,
  `box3_image` varchar(255) DEFAULT NULL,
  `box4_heading` varchar(255) DEFAULT NULL,
  `box4_desc` text,
  `box4_image` varchar(255) DEFAULT NULL,
  `portfolio_heading` varchar(255) DEFAULT NULL,
  `portfolio_desc` text,
  `portfolio_image` varchar(255) DEFAULT NULL,
  `portfolio_logo` varchar(255) DEFAULT NULL,
  `company_heading` text,
  `company_desc` varchar(255) DEFAULT NULL,
  `choose_heading` varchar(255) DEFAULT '',
  `choose_desc` varchar(255) DEFAULT NULL,
  `choose_image` varchar(255) DEFAULT NULL,
  `process_heading` varchar(255) DEFAULT NULL,
  `process_desc` text,
  `service_desc` text,
  `category_id` int DEFAULT NULL,
  `sub_category_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

#
# Data for table "services"
#

INSERT INTO `services` VALUES (1,'This is main heading','This is main desc','uploads/service/1691253909.jpg','service heading','heading1','desc','uploads/service/1691253909.jpg','heading2','desc','uploads/service/1691253909.jpg','heading3','desc','uploads/service/1691253909.jpg','heading4','desc','uploads/service/1691253909.jpg','heading por','desc','uploads/service/1691253909.jpg','uploads/service/1691253909.jpg','heading',NULL,'heading choose','desc choose','uploads/service/1691253909.jpg','heading choose','desc choose','service descriptions',1,2,'2023-08-08 06:44:42','2023-08-08 02:31:25'),(3,'SEO Main Heaing','Seo description','uploads/service/header_image1691461546.jpg','Serviceeeee',NULL,NULL,NULL,NULL,NULL,'uploads/service/box2image1691461680.jpeg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'uploads/service/chooseimage1691461783.png',NULL,NULL,NULL,2,1,'2023-08-08 01:45:14','2023-08-08 06:45:06'),(4,'Web Development in USA','we are working with USA based companies','uploads/service/header_image1691462434.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,3,'2023-08-08 02:40:34','2023-08-08 02:40:34');

#
# Structure for table "sessions"
#

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "sessions"
#

INSERT INTO `sessions` VALUES ('svpoOXQ6vSBomra0uvtvdyjuv7nglSw4WdFTVj6W',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoicW01aWV0NFUwSkZ6YURxVUp0c0cxQ3lyOGliY2YwWWR1VncyWlc5MyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9hc3Rlcmlrcy50ZXN0L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1690978189);

#
# Structure for table "slider_image"
#

DROP TABLE IF EXISTS `slider_image`;
CREATE TABLE `slider_image` (
  `id` int NOT NULL AUTO_INCREMENT,
  `imageId` int DEFAULT NULL,
  `imagePath` varchar(255) DEFAULT NULL,
  `imageAlt` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

#
# Data for table "slider_image"
#

INSERT INTO `slider_image` VALUES (11,2,'uploads/slider/01691218843.png',NULL,'2023-08-05 07:00:43','2023-08-05 07:00:43'),(12,2,'uploads/slider/11691218843.png',NULL,'2023-08-05 07:00:43','2023-08-05 07:00:43'),(13,2,'uploads/slider/21691218843.png',NULL,'2023-08-05 07:00:43','2023-08-05 07:00:43'),(14,2,'uploads/slider/31691218843.png',NULL,'2023-08-05 07:00:43','2023-08-05 07:00:43'),(15,2,'uploads/slider/41691218843.png',NULL,'2023-08-05 07:00:43','2023-08-05 07:00:43'),(16,2,'uploads/slider/51691218843.png',NULL,'2023-08-05 07:00:43','2023-08-05 07:00:43'),(17,2,'uploads/slider/61691218843.png',NULL,'2023-08-05 07:00:43','2023-08-05 07:00:43'),(18,2,'uploads/slider/71691218843.png',NULL,'2023-08-05 07:00:43','2023-08-05 07:00:43'),(19,4,'uploads/slider/01691220486.jpg',NULL,'2023-08-05 07:28:06','2023-08-05 07:28:06'),(20,4,'uploads/slider/11691220486.jpg',NULL,'2023-08-05 07:28:06','2023-08-05 07:28:06'),(21,4,'uploads/slider/21691220486.jpg',NULL,'2023-08-05 07:28:06','2023-08-05 07:28:06'),(22,4,'uploads/slider/31691220486.jpg',NULL,'2023-08-05 07:28:06','2023-08-05 07:28:06'),(23,4,'uploads/slider/41691220486.jpg',NULL,'2023-08-05 07:28:06','2023-08-05 07:28:06'),(24,3,'uploads/slider/01691220695.mp4',NULL,'2023-08-05 07:31:35','2023-08-05 07:31:35');

#
# Structure for table "sliders"
#

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE `sliders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Slug` varchar(255) DEFAULT NULL,
  `Heading` varchar(255) DEFAULT NULL,
  `Description` text,
  `Status` tinyint DEFAULT '1',
  `MetaTitle` varchar(255) DEFAULT NULL,
  `CreateDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `LastModified` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "sliders"
#

/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` VALUES (1,'Banner','banner','Innovative Digital Marketing Ideas to Improve Growth','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',1,'banner','2023-08-03 13:07:13','2023-08-05 01:22:04'),(2,'Our Client','our-client','Several Selecte Client','In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.',1,'our-client','2023-08-04 00:09:52','2023-08-05 12:15:25'),(3,'About','about','Digital Marketing Agency since 2013','In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.',1,'about','2023-08-04 00:09:52','2023-08-04 00:53:21'),(4,'Our Team','our-team','Our Expert Team','In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.\n',1,NULL,'2023-08-05 12:25:26','2023-08-05 12:25:38');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;

#
# Structure for table "sub_categories"
#

DROP TABLE IF EXISTS `sub_categories`;
CREATE TABLE `sub_categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_id` int DEFAULT NULL,
  `imagePath` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;

#
# Data for table "sub_categories"
#

INSERT INTO `sub_categories` VALUES (1,2,'1691253999.jpg','SEO','2023-08-05 16:46:39','2023-08-05 16:46:39'),(2,1,'1691254070.jpg','Articles Writing','2023-08-05 16:47:50','2023-08-05 16:47:50'),(3,3,'1691462348.png','Web Development','2023-08-08 02:39:08','2023-08-08 02:39:08'),(4,4,'1691477187.jpg','e commerce','2023-08-08 06:46:27','2023-08-08 06:46:27');

#
# Structure for table "testimonials"
#

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE `testimonials` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  `Message` text,
  `Image` varchar(255) DEFAULT NULL,
  `MetaTitle` varchar(255) DEFAULT NULL,
  `Status` int DEFAULT NULL,
  `Description` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

#
# Data for table "testimonials"
#

INSERT INTO `testimonials` VALUES (1,'testimonial','asd3qwedasd','uploads/awards/1691221249.jpg','demo',1,'Serveral selected clients, who already believe our service.','2023-08-04 11:42:53',NULL),(2,'Client 1','Test','uploads/awards/1691221237.jpg','demo',1,'Serveral selected clients, who already believe our service.','2023-08-04 12:06:48',NULL),(3,'asda','aadasdasd','uploads/awards/1691221225.jpg',NULL,1,'Serveral selected clients, who already believe our service.','2023-08-05 12:15:06',NULL),(4,'New Cleint','Demo Message','uploads/awards/1691221204.jpg',NULL,1,'Serveral selected clients, who already believe our service.','2023-08-05 12:40:04',NULL);

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'Aslam','muhammad.aslam@asteriksdigital.com',NULL,'$2y$10$KgCR0Yx0BoAauW6auUyyRuUQ9AQuDVNjahtDwQ26tKK2GEjphW7Ua',NULL,'2023-08-02 09:47:02','2023-08-02 09:47:02',1),(2,'sami','sami@gmail.com',NULL,'$2y$10$KgCR0Yx0BoAauW6auUyyRuUQ9AQuDVNjahtDwQ26tKK2GEjphW7Ua',NULL,NULL,NULL,2),(3,'Demo User','demo@demo.com',NULL,'$2y$10$bjXmXOBCDctPWou/u3ODTe1D4OhImNud/AlPjQhSKlR5B.g40RiTe',NULL,'2023-08-03 10:18:34','2023-08-03 10:18:34',NULL);

#
# Structure for table "what_we_do"
#

DROP TABLE IF EXISTS `what_we_do`;
CREATE TABLE `what_we_do` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Slug` varchar(255) DEFAULT NULL,
  `Heading` varchar(255) DEFAULT NULL,
  `Description` text,
  `business_idea_heading` varchar(255) DEFAULT NULL,
  `business_idea_desc` text,
  `business_idea_image` varchar(255) DEFAULT NULL,
  `finance_planning_heading` varchar(255) DEFAULT NULL,
  `finance_planning_desc` text,
  `finance_planning_image` varchar(255) DEFAULT NULL,
  `develop_web_heading` varchar(255) DEFAULT NULL,
  `develop_web_desc` text,
  `develop_web_image` varchar(255) DEFAULT NULL,
  `market_analysis_heading` varchar(255) DEFAULT NULL,
  `market_analysis_desc` text,
  `market_analysis_image` varchar(255) DEFAULT NULL,
  `Status` tinyint DEFAULT '1',
  `MetaTitle` varchar(255) DEFAULT NULL,
  `CreateDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `LastModified` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "what_we_do"
#

/*!40000 ALTER TABLE `what_we_do` DISABLE KEYS */;
INSERT INTO `what_we_do` VALUES (1,'What We Do','what-we-do','How can we help your business','In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document ','Business Idea Planning','In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document ','uploads/what-we-do/11691180425.jpg','Financial Planning System','In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document \n','uploads/what-we-do/21691180425.jpg','Development Websites and App','In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document \n','uploads/what-we-do/31691180425.jpg','Market Analysis Project','In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document \n','uploads/what-we-do/41691180425.png',1,NULL,'2023-08-04 19:20:29','2023-08-05 01:20:25');
/*!40000 ALTER TABLE `what_we_do` ENABLE KEYS */;
