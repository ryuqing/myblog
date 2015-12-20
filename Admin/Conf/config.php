<?php
return array(
	//'配置项'=>'配置值'
	'APP_DEBUG'=>TRUE, 
	'TMPL_L_DELIM'=>'<{', //修改左定界符
	'TMPL_R_DELIM'=>'}>', //修改右定界符
	'DB_TYPE' => 'mysql',
	'DB_HOST' => 'localhost',
	'DB_USER' => 'root',
	'DB_NAME' => 'myblog',
	'DB_pwd' => '111111',
	'DB_PORT' => '3306',
	'DB_PREFIX'=>'blog_',  //设置表前缀
	'SHOW_PAGE_TRACE'=>true,//开启页面Trace
);
?>