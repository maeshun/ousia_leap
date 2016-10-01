(function(){
	$(function(){
		init();
		openOverlay.init();
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


	var openOverlay = {
		init : function() {
			$(".work__thumbnail").on("click", function(){
				var hash = $(this).attr("href");
				openOverlay.open(hash);
			})
			$("#modalCloseBtn").on("click", function(){
				openOverlay.close();
			})
			openOverlay.changeOverlayContents();
		},
		open : function(hash) {
			$('body').addClass("isOverlayOpen");
			$(hash).addClass("isShow");
			$("#modalBg, " + hash).fadeIn(100);
			openOverlay.checkEdgeOfOverlay();
		},
		close : function() {
			$('body').removeClass("isOverlayOpen");
			$(".workDetail").removeClass("isShow");
			$("#modalBg, .workDetail").fadeOut(100);
		},
		changeOverlayContents : function() {
			$(".workDetail__changeBtn").on("click", function() {
				var $currentDetail = $(".isShow");
				var $changeContents = '';

				if ($(this).hasClass("workDetail__changeBtn--prev")) {
					$changeContents = $currentDetail.prev();
				} else {
					$changeContents = $currentDetail.next();					
				}

				$currentDetail.removeClass("isShow");
				$changeContents.addClass("isShow");
				$currentDetail.fadeOut(100, function() {
					$changeContents.fadeIn(100);
					openOverlay.checkEdgeOfOverlay();
				});
			})
		},
		checkEdgeOfOverlay : function() {
			if ($(".workDetail:last").hasClass("isShow")) {
				$("#nextBtn").hide();
			} else {
				$("#nextBtn").show();
			}
			if ($(".workDetail:first").hasClass("isShow")) {
				$("#prevBtn").hide();
			} else {
				$("#prevBtn").show();
			}
		}
	}
})()