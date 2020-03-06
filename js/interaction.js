$(document).ready(function(){
	deselectItem();
	tabSelect();
	viewToggle();
	viewSelect();
	mobileDropDown();
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

viewToggle = () =>{
	let currentView = sessionStorage.getItem('viewMode') || null;
	if(currentView == "list" || null){
		$(".portfolio-list-detail").addClass("listview").removeClass("row gridview");
	}if(currentView == "grid"){
		$(".portfolio-list-detail").addClass("row gridview").removeClass("listview");
		$(".sort-icons .icon:nth-child(2)").addClass("active").siblings().removeClass("active");
	}
}

viewSelect = (e) =>{

	$(".sort-icons .icon").on("click",function(e){
		let id = $(this).index();
		if (id == 0 || null){
			$(this).addClass("active").siblings().removeClass("active");
			$(".portfolio-list-detail").addClass("listview").removeClass("row gridview");
			sessionStorage.setItem('viewMode','list');


		} else{
			$(this).addClass("active").siblings().removeClass("active");
			$(".portfolio-list-detail").addClass("row gridview").removeClass("listview");
			sessionStorage.setItem('viewMode','grid');
		}
	})

}

mobileDropDown = (e) =>{
	$("#nav-menu").on("click",function(e){
		$(".mobile-nav").slideToggle(200);
	})
}







