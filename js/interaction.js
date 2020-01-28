$(document).ready(function(){
	$(".feature-project-window a").hover(function(){
		$(this).parent().removeClass("deselect");
		$(this).parent().siblings().addClass("deselect");
	},function(){
		$(this).parent().siblings().removeClass("deselect");
	});

})



