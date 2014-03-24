$(document).ready(function(){
	
	$('ul li:last-child, p:last-child').addClass('last');
	
	$('ul li:first-child').addClass('first');

	 $( "#menuid" ).click(function() {
		$( "#nav .nav ul" ).toggleClass("show" );
		return false;
	});
	
	
	$(window).load(function() {
		$('.footer .footerMembers ul li a img').hoverizr();
	});
	 
});
	 
	 

