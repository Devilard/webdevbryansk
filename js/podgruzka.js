$(function(){
	$("div.photo").slice(0, 2).show();
	$("#loadMore").on("click", function(e){
		e.preventDefault();
		$("div.photo:hidden").slice(0, 2).show();
	})
})