
//用户表
create table blog_user(
	user_id int unsigned not null auto_increment primary key,
	username varchar(20) not null default '',
	passwd varchar(30) not null default '',
	regtime int unsigned not null default 0,
	lastlogin int unsigned not null default 0
) engine myisam charset utf8;

//blog table
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
 `comment_status` varchar(20) NOT NULL DEFAULT 'open',
 `cat_id` smallint(6) NOT NULL DEFAULT '0',
 `is_hot` tinyint(4) NOT NULL DEFAULT '0',
 `is_new` tinyint(4) NOT NULL DEFAULT '0',
  `is_top` tinyint(4) NOT NULL DEFAULT '0',
) engine myisam charset utf8;

#栏目表
create table blog_category (
cat_id int auto_increment primary key,
cat_name varchar(20) not null default'',
intro varchar(100) not null default '',
parent_id int not null default 0
)engine myisam charset utf8;