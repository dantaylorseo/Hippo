
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `wp_usermeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_usermeta` WRITE;
/*!40000 ALTER TABLE `wp_usermeta` DISABLE KEYS */;
INSERT INTO `wp_usermeta` VALUES (1,1,'nickname','Dan Taylor'),(2,1,'first_name',''),(3,1,'last_name',''),(4,1,'description',''),(5,1,'rich_editing','true'),(6,1,'comment_shortcuts','false'),(7,1,'admin_color','fresh'),(8,1,'use_ssl','0'),(9,1,'show_admin_bar_front','true'),(10,1,'wp_capabilities','a:1:{s:13:\"administrator\";b:1;}'),(11,1,'wp_user_level','10'),(12,1,'dismissed_wp_pointers','wp360_locks,wp390_widgets,wp410_dfw'),(13,1,'show_welcome_panel','1'),(14,1,'session_tokens','a:1:{s:64:\"2a9d125652bb5f4412295bcaee05d6282a0aca236af55f7dfb69f7ad16da1083\";a:4:{s:10:\"expiration\";i:1432275009;s:2:\"ip\";s:14:\"188.222.186.45\";s:2:\"ua\";s:109:\"Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.152 Safari/537.36\";s:5:\"login\";i:1432102209;}}'),(15,1,'wp_dashboard_quick_press_last_post_id','506'),(16,1,'managenav-menuscolumnshidden','a:4:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";}'),(17,1,'metaboxhidden_nav-menus','a:3:{i:0;s:8:\"add-post\";i:1;s:12:\"add-post_tag\";i:2;s:15:\"add-post_format\";}'),(18,1,'nav_menu_recently_edited','3'),(19,2,'nickname','hannah'),(20,2,'first_name','Hannah'),(21,2,'last_name','Thorpe'),(22,2,'description',''),(23,2,'rich_editing','true'),(24,2,'comment_shortcuts','false'),(25,2,'admin_color','fresh'),(26,2,'use_ssl','0'),(27,2,'show_admin_bar_front','true'),(28,2,'wp_capabilities','a:1:{s:13:\"administrator\";b:1;}'),(29,2,'wp_user_level','10'),(30,2,'dismissed_wp_pointers','wp360_locks,wp390_widgets,wp410_dfw'),(53,2,'session_tokens','a:1:{s:64:\"15ff0f7267efca46e43a466bc27479b44ffedc7aedecf4ebf487d316aeb57ed9\";a:4:{s:10:\"expiration\";i:1435935704;s:2:\"ip\";s:14:\"77.233.134.108\";s:2:\"ua\";s:109:\"Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.130 Safari/537.36\";s:5:\"login\";i:1435762904;}}'),(32,2,'wp_dashboard_quick_press_last_post_id','600'),(33,2,'_yoast_wpseo_profile_updated','1426074813'),(34,2,'googleplus',''),(35,2,'twitter',''),(36,2,'facebook',''),(37,2,'wp_user-settings','editor=tinymce&libraryContent=browse&align=right&imgsize=full&advImgDetails=show&wplink=1&urlbutton=none&post_dfw=off'),(38,2,'wp_user-settings-time','1433518251'),(39,2,'closedpostboxes_page','a:1:{i:0;s:10:\"wpseo_meta\";}'),(40,2,'metaboxhidden_page','a:5:{i:0;s:10:\"postcustom\";i:1;s:16:\"commentstatusdiv\";i:2;s:11:\"commentsdiv\";i:3;s:7:\"slugdiv\";i:4;s:9:\"authordiv\";}'),(45,1,'closedpostboxes_revisr_commits','a:0:{}'),(46,1,'metaboxhidden_revisr_commits','a:1:{i:0;s:7:\"slugdiv\";}'),(41,1,'wp_user-settings','hidetb=1&libraryContent=browse&editor=tinymce&wplink=1'),(42,1,'wp_user-settings-time','1426496417'),(43,1,'meta-box-order_forms','a:3:{s:4:\"side\";s:9:\"submitdiv\";s:6:\"normal\";s:25:\"slugdiv,wp_comp_entry_raw\";s:8:\"advanced\";s:0:\"\";}'),(44,1,'screen_layout_forms','2'),(47,1,'meta-box-order_revisr_commits','a:3:{s:4:\"side\";s:33:\"revisr_save_commit,revisr_add_tag\";s:6:\"normal\";s:28:\"revisr_pending_files,slugdiv\";s:8:\"advanced\";s:0:\"\";}'),(48,1,'screen_layout_revisr_commits','2'),(49,2,'default_password_nag',''),(50,2,'nav_menu_recently_edited','2'),(51,2,'managenav-menuscolumnshidden','a:4:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";}'),(52,2,'metaboxhidden_nav-menus','a:4:{i:0;s:8:\"add-post\";i:1;s:18:\"add-revisr_commits\";i:2;s:9:\"add-forms\";i:3;s:12:\"add-post_tag\";}');
/*!40000 ALTER TABLE `wp_usermeta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

