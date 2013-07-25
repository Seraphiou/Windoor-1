$(document).ready(function(){
	$(function() {
		$("#news .news-wrapper").jCarouselLite({
			btnNext: ".news-arrow-right",
			btnPrev: ".news-arrow-left"
		});
		
		$("#nav2 .nav2-inner").jCarouselLite({
			btnNext: ".nav2-right",
			btnPrev: ".nav2-left",
			visible: 5
		});
	});
	tabsPageTabs();
})

function tabsPageTabs() {
	var leftTabs = $( "#tabs");
	
	// init
	$('.tabs-main article[id^="tab-"]', leftTabs).hide();
	$('.tabs-main #tab-1', leftTabs).show();
	$('.tabs-main #tab-1', leftTabs).addClass('tabs-content-current');
	$('.tabs-nav li[tab="tab-1"]', leftTabs).addClass('tabs-current');
	
	$('.tabs-nav li', leftTabs).click(function(){
		$('.tabs-main article[id^="tab-"]').hide();
		$('.tabs-main ' + $(this).attr('tab'), leftTabs).show();
		$('.tabs-main ' + $(this).attr('tab'), leftTabs).addClass('tabs-content-current');
		$('.tabs-nav li', leftTabs).removeClass('tabs-current');
		$(this).addClass('tabs-current');
		
		return false;
	});
}