<?php 
/*前台入口文件*/

//1.应用名称 Home  所有目录名称首字母都要大写
define('APP_NAME', 'Blog');//这边创建前台应用文件夹
//2.确定应用路径 /很重要
define('APP_PATH', './Blog/');

//3.引用核心文件
require('./ThinkPHP/ThinkPHP.php');

?>