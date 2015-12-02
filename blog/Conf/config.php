<?php
return array(
	//'配置项'=>'配置值'
<<<<<<< HEAD
	'APP_DEBUG'=>TRUE, 
	'TMPL_L_DELIM' => '<{', //修改左定界符<{
	'TMPL_R_DELIM' => '}>', //修改右定界符}>
	'DB_TYPE' => 'mysql',
	'DB_HOST' => 'localhost',
	'DB_USER' => 'root',
	'DB_NAME' => 'myblog',
	'DB_pwd' => '111111',
	'DB_PORT' => '3306',
	'DB_PREFIX'=>'blog_',  //设置表前缀
	'SHOW_PAGE_TRACE'=>true,//开启页面Trace

=======
	'TMPL_L_DELIM'=>'<{', //修改左定界符
	'TMPL_R_DELIM'=>'}>', //修改右定界符
	'DB_DSN'=>'mysql://root:@localhost:3306/myblog',//DSN方法 
	'SHOW_PAGE_TRACE'=>true,//开启页面Trace 跟踪	
>>>>>>> 601398f79e2c589b0d0a33d81fc8855ac52741b7
);
?>