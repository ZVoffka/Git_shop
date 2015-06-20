$(document).ready(function() {

$("#newsticker") .jCarouselLite({
	vertical:   true,
	hoverPause: true,
	btnPrev:    "#news-prev",
	btnNext:    "#news-next",
	visible:    3,
	auto:       3000,
	speed:      500,
      });


$("#style-grid").click(function(){

$("#block-tovar-grid").show();
$("#block-tovar-list").hide();

$("#style-grid").attr("src","/images/icon-grid-active.png");
$("#style-list").attr("src","/images/icon-list.png");

$.cookie('select_style','grid');
});

$("#style-list").click(function(){

$("#block-tovar-grid").hide();
$("#block-tovar-list").show();

$("#style-list").attr("src","/images/icon-list-active.png");
$("#style-grid").attr("src","/images/icon-grid.png");

$.cookie('select_style','list');
});


if ($.cookie('select_style') == 'grid')
{
$("#block-tovar-grid").show();
$("#block-tovar-list").hide();

$("#style-grid").attr("src","/images/icon-grid-active.png");
$("#style-list").attr("src","/images/icon-list.png");
}
else
{
$("#block-tovar-grid").hide();
$("#block-tovar-list").show();

$("#style-list").attr("src","/images/icon-list-active.png");
$("#style-grid").attr("src","/images/icon-grid.png");
}


$("#select-sort").click(function(){


 	$("#sorting-list").slideToggle(200);


	});
});
