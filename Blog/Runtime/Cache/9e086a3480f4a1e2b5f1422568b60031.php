<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>OOOO</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="青青子衿的PHP技术博客" />
<link href="__PUBLIC__/Css/index.css" rel="stylesheet" type="text/css"/>
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<style type="text/css">
	tr td{
		padding: 5px;
	}
</style>
</head>
<body>
	<div class="blog-header">
		<div class="blog-header-top">
			<div class="toplogo"></div>
			<div id="header-searchbox" class="searchexbutton">
				<input type="text" class="header-search"id="query">
				<input type="button" class="header-search-act"id="query">
			</div>
		</div>
		<div class="blog-header-menu-container">
			<div class="blog-header-menu">
				<ul>
					<li class="fstmenu"><a href="__URL__/index" target="_self">网站首页</a></li>
					<li class="fstmenu"><a href="__URL__/news" target="_self">互联网资讯</a></li>
					<li class="fstmenu"><a href="__URL__/frontTch" target="">前端技术</a>
						<ul class="dropdown-menu open">
							<li><a href="" target="_blank">HTML5</a></li>
							<li><a href="" target="_blank">ADJAX</a></li>
							<li><a href="" target="_blank">HTML/CSS</a></li>
							<li><a href="" target="_blank">JavaScript/jQuery</a></li>
						</ul>
					</li>
					<li class="fstmenu"><a href="__URL__/phpTch">PHP技术</a>
						<ul class="dropdown-menu">
							<li><a href="" target="_blank">PHP基础</a></li>
							<li><a href="" target="_blank">PHP框架</a></li>
							<li><a href="" target="_blank">PHP进阶</a></li>
						</ul>
					</li>
					<li class="fstmenu"><a href="__URL__/linux" target="_self">Linux</a>
					</li>
					<li class="fstmenu"><a href="__URL__/github" target="_self">Github</a>
					</li>
					<li class="fstmenu"><a href="__URL__/feelings" target="_self">随笔情怀</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
<!-- <p>以下是测试练习</p>
<table border="1" cellpadding="0" style="border-collapse:collapse;text-align:center;margin:0 auto;">
	<tr>
		<td>ID</td>
		<td>username</td>
		<td>regtime</td>
		<td>regtime</td>
		<td>操作</td>
	</tr>
	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			<td><?php echo ($vo["user_id"]); ?></td>
			<td><?php echo ($vo["username"]); ?></td>
			<td><?php echo ($vo["regtime"]); ?></td>
			<td><?php echo ($vo["lastlogin"]); ?></td>
			<td><span>删除|</span><span>修改</span></td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<p>以上是测试练习</p> -->
	<div class="blog-container">
		<div class="containerleft">
			<div class="photomsgth0"></div>
			<div class ="photomsg">
				<div class="photomsgth1"><img src="__ROOT__/Uploads/img/article1.jpg"></div>
				<div class="photomsgth2"><img src="__ROOT__/Uploads/img/article2.jpg"></div>
			</div>
			<div class="blogcontent">
				<div class="content-thumb"><img src="__ROOT__/Uploads/img/testest.jpg" style="width:180px;height:140px;"></div>
				<div class="content-body">
					<h2><a href="">PHP 关联数组的十大使用技巧</a></h2>
					<br />
					<p>关联数组是 PHP 中使用最广泛的一种数据类型，PHP 内置多种操作关联数组的函数，对开发人员来说，要从中找出最有效，最合适自己所开发程序的方法来操纵这些数组。</p>
					<div class="content-sub">分类|日期|全文|分享图标</div>
				</div>
			</div>
			<div class="blogcontent">
				<div class="content-thumb"><img src="__ROOT__/Uploads/img/testest.jpg" style="width:180px;height:140px;"></div>
				<div class="content-body">
					<h2><a href="">PHP 关联数组的十大使用技巧</a></h2>
					<br />
					<p>关联数组是 PHP 中使用最广泛的一种数据类型，PHP 内置多种操作关联数组的函数，对开发人员来说，要从中找出最有效，最合适自己所开发程序的方法来操纵这些数组。</p>
					<div class="content-sub">分类|日期|全文|分享图标</div>
				</div>
			</div>

		</div>
		<div class="containerright">
			<div class="rightbox"></div>
			<div class="rightbox"></div>
			<div class="rightbox"></div>
		</div>
	</div>
	<div class="blog-footer">
		<div class="blog-footer-top">About me| Contact me| Advertise | Contribute</div>
		<div class="blog-footer-bottom">©Copyright 2015 青青子衿 保留所有权利  Power by Yuqing</div>
	</div>
</body>
<script type="text/javascript" src="__PUBLIC__/Js/index.js"></script>
<script type="text/javascript" src="./jquery.mixhover.js"></script>
</html>