
//用户表
create table blog_user(
	user_id int unsigned not null auto_increment primary key,
	username varchar(20) not null default '',
	passwd varchar(30) not null default '',
	regtime int unsigned not null default 0,
	lastlogin int unsigned not null default 0
) engine myisam charset utf8;


create table blog_content(
 `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT primary key,
 `post_title` text NOT NULL,
 `post_img` varchar(50) NOT NULL DEFAULT '',
 `post_thub_img` varchar(50) NOT NULL DEFAULT '',
 `post_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
 `post_content` longtext NOT NULL,
 `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
 `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
 `post_status` varchar(20) NOT NULL DEFAULT 'publish',
 `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
 `post_type` varchar(20) NOT NULL DEFAULT 'post',
 `post_comment` longtext NOT NULL,
 `comment_count` bigint(20) NOT NULL DEFAULT '0',
 `comment_status` varchar(20) NOT NULL DEFAULT 'open'
) engine myisam charset utf8;

