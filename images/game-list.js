//================================================================
//game list
/*
$(document).ready(function() {
	
	$('#xSlideBox .scrollable').scrollable({
		size:7
	});
});
*/

/*Game list Show Hide*/
$(document).ready(function(){
  
  $('.topBar-right li.topNav_1').mousemove(function(){
		$(this).find('#gamelist').show();
		$(this).find('.linkItem').addClass('active');
	}).mouseleave(function(){
		$(this).find('#gamelist').hide();
		$(this).find('.linkItem').removeClass('active');
  });
  
  
});

$(function(){
	$('#xSlideBox .item').each(function(){
		var $this = $(this)
		$this.mouseover(function() {
    		$this.addClass('active');
  		}).mouseout(function(){
			$this.removeClass('active');
  		});
	})
});
