$(document).ready(function ($) {						
	if($(".sp-slides .sp-slide").length==1){
		var ht1=$(".sp-slides").html();
		$(".sp-slides").html(ht1+ht1+ht1);
	}					
		
	$( '#my-slider' ).sliderPro({
		width: 870,
		height: 350,
		arrows: true,
		
		visibleSize: '100%',
		aspectRatio: -1,
		forceSize: 'auto',
		slideDistance: 0,
		autoplay: true,
		waitForLayers: true,
		arrows: true,
		buttons: false,
		gotoSlide: function( event ) {
			$(".slidetab a").removeClass('act99');
			$(".slidetab a").eq(event.index).addClass('act99');
		}
	});
	
	$(".slidetab a").click(function(){
		$(this).parent().find("a").removeClass('act99');
		$(this).addClass('act99');
		
		
		var slider = $( '#my-slider' ).data( 'sliderPro' );
		slider.gotoSlide( $(this).attr('did') );
		return false;
	});
	
	$(".pitab1 a").click(function () {
		$(".pitab1sdiv").css("display", "none");
		$(".pitab1 a").removeClass("act3");
		$(this).addClass("act3");
		$($(this).attr("href")).css("display", "block");
		return false;
	});
	
	$(".pitab12 a").click(function () {
		$(".pitab12sdiv").css("display", "none");
		$(".pitab12 a").removeClass("act3");
		$(this).addClass("act3");
		$($(this).attr("href")).css("display", "block");
		return false;
	});
	$(window).scroll(function(){
		if($(window).scrollTop() > 160 ){
			$('.hea12').addClass('mcsactive');
		}else{
			$('.hea12').removeClass('mcsactive');
		};
	});
});