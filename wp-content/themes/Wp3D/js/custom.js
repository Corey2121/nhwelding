// <![CDATA[
$(function() {

	// Slider
	$('#slideshow').cycle({
        fx:     'fade',
        speed:  'slow',
        timeout: 5000,
        pager:  '#slider_nav',
        pagerAnchorBuilder: function(idx, slide) {
            // return sel string for existing anchor
            return '#slider_nav li:eq(' + (idx) + ') a';
        }
    });
	
	/*
	$('.topnav ul').children('li').each(function() {
		$(this).children('a').html('<span>'+$(this).children('a').text()+'</span>'); // add tags span to a href
	});
	*/
	
	$('#search span, .blog_title,.slider, .cs-buttons,.wp-pagenavi a,.wp-pagenavi .current,#slider_controls ul li a,.bordered,#index a,#index img.news2,.columns_bg,.pic img,.post-leav a').css({"border-radius": "5px", "-moz-border-radius":"5px", "-webkit-border-radius":"5px"});
	$('.topnav ul li ul, .block_top').css({"border-radius": "10px", "-moz-border-radius":"10px", "-webkit-border-radius":"10px"});
	$('.post-data').css({"border-radius": "25px", "-moz-border-radius":"25px", "-webkit-border-radius":"25px"});
	
	
	
});
// ]]>