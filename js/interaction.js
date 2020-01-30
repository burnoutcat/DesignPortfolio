$(document).ready(function(){
	deselectItem();
	tabSelect();
})

deselectItem = () =>{
	$(".feature-project-window a ,.project-list a").hover(function(){
		$(this).parent().removeClass("deselect");
		$(this).parent().siblings().addClass("deselect");
	},function(){
		$(this).parent().siblings().removeClass("deselect");
	})
}

tabSelect = (e) =>{
	$(".skill-tabs .tab").on("click",function(e){
		let id = $(this).index();
		console.log(id);

		$(this).addClass("active").siblings().removeClass("active");
		$(".skill-tabs-content .content").eq(id).addClass("active animated fadeIn").siblings().removeClass("active animated fadeIn");
	})
} 





