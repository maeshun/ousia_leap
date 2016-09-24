(function(){
	$(function(){
		init();
	})

	function init() {
		$(".footerLink__list a, .rimNavi__list a").on("click", function(){

			var $target = "";
			if ($(this).attr("href") == "#") {
				$target = $("body");
			} else {
				$target = $($(this).attr("href"));
			}
			$("body, html").animate({
				scrollTop: $target.offset().top
			}, 500);
		})
	}

})()