/*! Smart Xfields Search Engine
* Подготовил для вас: DomiTori
* http://dle.press
* Заходите в мой блог о DLE, там выложены полезные мелочи */

function move_Fvalue(e,ui0,ui1){
	$(e+' .val1').stop().animate({left:$(e+' .ui-slider-handle').eq(0).css('left')},200).html( ui0?ui0:(e=='#xf_kinopoisk'?$( e ).slider( "values", 0 ).toFixed(1):$( e ).slider( "values", 0 )) );
	$(e+' .val2').stop().animate({left:$(e+' .ui-slider-handle').eq(1).css('left')},200).html( ui1?ui1:(e=='#xf_kinopoisk'?$( e ).slider( "values", 1 ).toFixed(1):$( e ).slider( "values", 1 )) );
}

$(document).ready(function() {
	$( "#xf_price" ).slider({
		range: true,
		min: 20000,
		max: 500000,
		step: 1,
		values: [ 56000,200000 ],
		slide: function( event, ui ) {
			move_Fvalue('#xf_price',ui.values[ 0 ],ui.values[ 1 ]);
		},
		stop: function( event, ui ) {
			move_Fvalue('#xf_price',ui.values[ 0 ],ui.values[ 1 ]);
			$('#xf_price .ui-slider-handle').each(function(i){
				i++;
				if($(this).hasClass('ui-state-focus')) {
					$('#xf_price .filter-value').css({'z-index':0});
					$('#xf_price .val'+i).css({'z-index':1});
				}
			});
		}
	})
	.append('<div class="steps"><span class="s1">'+45757+'</span><span class="s2">'+156682+'</span><span class="s3">'+261338+'</span><span class="s4">'+400000+'</span><span class="s5">'+500000+'</span></div>');
	move_Fvalue('#xf_price');
	
	
	
	$('.filter-buttons .masha_index').remove();
	
	$('.filter-buttons .cbtn').click(function(){
		$(this).toggleClass('active');
	})
	.mouseleave(function(){
		$(this).blur();
	});
	
	// $('.filter-buttons .butt > span').click(function(){
	// 	list=$(this).parent().children('.list');
	// 	if( list.css('display')=='none' ) {
			
	// 		$('.filter-buttons .list').hide();
	// 		$('.filter-buttons .butt > span').removeClass('active');
	// 		$('.filter-buttons .butt .fa').removeClass('fa-rotate-180');
	// 		$(this).addClass('active').children('.fa').addClass('fa-rotate-180');
	// 		list.show();
	// 		} else {
			
	// 		$('.filter-buttons .list').hide();
	// 		$('.filter-buttons .butt > span').removeClass('active');
	// 		$('.filter-buttons .butt .fa').removeClass('fa-rotate-180');
	// 	}
	// });
	
	$('.filter-buttons .offin #one-genre, .filter-buttons .offin #all-genres').click(function(){
		$('.filter-buttons .offin span').removeClass('active');
		$(this).addClass('active');
	});
	
})
.click(function(e){
    if($('.filter-buttons .butt .active').length==0)
	return;
    e=e||window.event;
    var target=e.target||e.srcElement;
    while(target)
    {
        if(target==$('.filter-buttons').get(0))
		return;
        target=target.parentNode;
	}
	$('.filter-buttons .list').hide();
	$('.filter-buttons .butt > span').removeClass('active');
	$('.filter-buttons .butt .fa').removeClass('fa-rotate-180');
})
.on('click', '.filter-buttons .butt.red, #filter-next', function() {
	$('#dle-content').remove();

		var genre = [],
		xf_power = [],
		xf_brand = [],
		xf_cylinders = [],
		xf_wd = [],
		xf_weels = [],
		xf_cabin = [],
		cstart = $(this).data('cstart');
		if($('#filter-next').length==0) $('#content').prepend('<div class="navigation-button"><a id="filter-next"></a></div>');
		nextBtn = $('#filter-next');
		i = 0;
		$('#genre-id .cbtn').each(function(){
			if( $(this).hasClass('active') ) {
				genre[i] = $(this).data('id');
				i++;
			}
		});
		i = 0;
		$('#xf_power .cbtn').each(function(){
			if( $(this).hasClass('active') ) {
				xf_power[i] = $(this).html();
				i++;
			}
		});
		i = 0;
        $('#xf_brand .cbtn').each(function(){
            if( $(this).hasClass('active') ) {
                xf_brand[i] = $(this).html();
                i++;
            }
		});
		$('#xf_cylinders .cbtn').each(function(){
            if( $(this).hasClass('active') ) {
                xf_cylinders[i] = $(this).html();
                i++;
            }
		});
		$('#xf_wd .cbtn').each(function(){
            if( $(this).hasClass('active') ) {
                xf_wd[i] = $(this).html();
                i++;
            }
		});
		$('#xf_weels .cbtn').each(function(){
            if( $(this).hasClass('active') ) {
                xf_weels[i] = $(this).html();
                i++;
            }
		});
		$('#xf_cabin .cbtn').each(function(){
            if( $(this).hasClass('active') ) {
                xf_cabin[i] = $(this).html();
                i++;
            }
        });
		if( !cstart ) cstart = 0;
		xf_price_start = $('#xf_price .val1').html();
		xf_price_end = $('#xf_price .val2').html();
		
		gf = $('.filter-buttons .offin .active').index();
		nextBtn.css({'text-indent':'-9999px','position':'relative','margin':'4px 0 -10px',backgroundColor:'#eee'}).animate({height:3,border:0,width:'100%'},'fast',function(){
		$(this).append('<span></span>').children('span').animate({width:'50%'},'slow');
		$.get("/engine/ajax/filter.php", {genre:genre,genre_filter:gf,xf_power:xf_power,xf_brand:xf_brand,xf_cylinders:xf_cylinders,xf_wd:xf_wd,xf_weels:xf_weels,xf_cabin:xf_cabin,xf_price_start:xf_price_start,xf_price_end:xf_price_end,cstart:cstart},
		function(data){
			nextBtn.children('span').animate({width:'100%'},'slow',function(){
			if( cstart > 0 ) $('#content').append(data);
			else $('#content').html(data);
			$(this).parents('.navigation-button').fadeOut(200,function(){$(this).remove()});
			});
		}
		);
		});

	
		return false;
		
	});
	

$(window).resize(function(){
	move_Fvalue('#xf_price');
	
});