//==============================================================

//================================================================
//infonews tab	
	$(function(){
		// 預設顯示第一個 Tab
		var _showTab = 0;
		var $defaultLi = $('ul.infotabs li').eq(_showTab).addClass('active');
		$($defaultLi.find('a').attr('href')).siblings().hide();
		
		// 當 li 頁籤被點擊時...
		// 若要改成滑鼠移到 li 頁籤就切換時, 把 click 改成 mouseover
		$('ul.infotabs li').click(function() {
			// 找出 li 中的超連結 href(#id)
			var $this = $(this),
				_clickTab = $this.find('a').attr('href');
			// 把目前點擊到的 li 頁籤加上 .active
			// 並把兄弟元素中有 .active 的都移除 class
			$this.addClass('active').siblings('.active').removeClass('active');
			// 淡入相對應的內容並隱藏兄弟元素
			$(_clickTab).stop(false, true).fadeIn().siblings().hide();

			return false;
		}).find('a').focus(function(){
			this.blur();
		});
	});
//================================================================
//for all pages
    $(document).ready(function(){
    var gNavi = $("#gNavi-wrapper");
        // global navi
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 40) {
                   gNavi.addClass("fixed");
                } else {
                   gNavi.removeClass("fixed");
                }
            });
        });
    //});
	
	
	//back to top btn
	//$(document).ready(function(){   
        // hide #back-top first
        $("#back-top").hide();        
        // fade in #back-top
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('#back-top').fadeIn();
                } else {
                    $('#back-top').fadeOut();
                }
            });   
        // scroll body to 0px on click
        $('#back-top a').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 500);
                return false;
            });
        });
		
	//ナビゲーション
	$(".menu-toggle").on('click', function() {
	  $(this).toggleClass("on");
	  $('.menu-section').toggleClass("on");
	  $("nav ul").toggleClass('hidden');
	});
    
	//SCROLLBAR
	function changeSize() {
    var width = parseInt($("#Width").val());
    var height = parseInt($("#Height").val());
    $("#info-wrapper").width(width).height(height);
    // update scrollbars
    $('#info-wrapper').perfectScrollbar('update');
    // or even with vanilla JS!
    Ps.update(document.getElementById('info-wrapper'));
	}
	$(function() {
    $('#info-wrapper').perfectScrollbar();
    // with vanilla JS! Ps.initialize(document.getElementById('info-wrapper'));
	});

	
      $('.flexslider').flexslider({
        animation: "slide",
        controlsContainer: $(".custom-controls-container"),
        customDirectionNav: $(".custom-navigation a"),
        start: function(slider){
          $('body').removeClass('loading');
        }
      });

});

