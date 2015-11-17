$(function(){
	/*只要给li标签添加 fstmenuclass 就可以做无限级*/
	var menu = $(".blog-header-menu .fstmenu");
	menu.hover(function(){
		$(this).children("ul").stop(true,true).slideDown('slow');//slow 让菜单徐徐向下 也可以用.fadeIn()（渐入渐出）
	},function(){
		$(this).children("ul").stop(true,true).slideUp('slow');
	});
});