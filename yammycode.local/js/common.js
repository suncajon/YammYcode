/* Полноэкранный скроллинг */
$(document).ready(function() {
	$('#fullpage').fullpage({
		menu: true,
		anchors: ['main', 'reason-1', 'reason-2', 'reason-3', 'steps',  'portfolio-1', 'portfolio-2','portfolio-3', 'offer', 'contact'],
		menu: '#menu',
		scrollingSpeed: 900,
		controlArrows: false,
		slidesNavigation: true,
		scrollOverflow: true,
		afterLoad: function(anchorLink, index){
			var loadedSection = $(this);
				$('.active .animateBoom').css("visibility", "visible").addClass("bounceIn animated");
				$('.active .portfolioSite div i').each(function(i) {
				    $(this).delay((i++) * 350).fadeTo(800, 1); });
			if(anchorLink == 'portfolio-1'){$('.portfolio video').attr('autoplay', 'autoplay');}
			var changeColor = function(color){
				$("body").stop().animate({ backgroundColor: color}, 800);
			}
				if(anchorLink == 'reason-1'){changeColor("#546150");}
				if(anchorLink == 'reason-2'){changeColor("#6a5857");}
				if(anchorLink == 'reason-3'){changeColor("#69654e");}
				if(anchorLink == 'main'){changeColor("#909090");$('ul#navSlider').css('display', 'block');}
				if(anchorLink == 'steps'){changeColor("#909090");}
				if(anchorLink == 'portfolio-1'){changeColor("#464646");}
				if(anchorLink == 'portfolio-2'){changeColor("#464646");}
				if(anchorLink == 'portfolio-3'){changeColor("#464646");}
				if(anchorLink == 'offer'){changeColor("#464646");}
				if(anchorLink == 'contact'){changeColor("#464646");}
		},
		afterSlideLoad: function( anchorLink, index, slideAnchor, slideIndex){
			var loadedSlide = $(this);
				$('.fp-slides .active .carousel').css("visibility", "visible").addClass("fadeIn animated");
				if(slideIndex == 0){$('li#stepOne a').addClass("activeSlideStep");}
				if(slideIndex == 1){$('li#stepTwo a').addClass("activeSlideStep");}
				if(slideIndex == 2){$('li#stepThree a').addClass("activeSlideStep");}
				if(slideIndex == 3){$('li#stepFour a').addClass("activeSlideStep");}
				if(slideIndex == 4){$('li#stepFive a').addClass("activeSlideStep");}
		},
		onSlideLeave: function( anchorLink, index, slideIndex, direction, nextSlideIndex){
			var leavingSlide = $(this);
				$('#navSlider li a').removeClass('activeSlideStep');
		},
		afterResize: function(){
				location.reload();
		}
	});
});

/* Меню */
jQuery(function(){
	$.fatNav();
});

/* Анимация полей ввода */
jQuery(function() {
	if (!String.prototype.trim) {
		(function() {
			var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
			String.prototype.trim = function() {
				return this.replace(rtrim, '');
			};
		})();
	}
	[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
		if( inputEl.value.trim() !== '' ) {
			classie.add( inputEl.parentNode, 'input--filled' );
		}
		inputEl.addEventListener( 'focus', onInputFocus );
		inputEl.addEventListener( 'blur', onInputBlur );
	});
	function onInputFocus( ev ) {
		classie.add( ev.target.parentNode, 'input--filled' );
	}
	function onInputBlur( ev ) {
		if( ev.target.value.trim() === '' ) {
			classie.remove( ev.target.parentNode, 'input--filled' );
		}
	}
});

// Отступ заголовков
$(window).load(function(){
	function kiwi(){
	var screenWidth = $(window).width();
	var distance = $('.kiwi .article').offset().left;
	var articleWidth = $('.kiwi .article').outerWidth();
	var resultWidth = (screenWidth - distance - articleWidth - 25);
	$('.kiwi h1').css('padding-right', resultWidth);
	}
	function watermelon(){
	var distance = $('.watermelon .article').offset().left;
	var resultWidth = distance - 25;
	$('.watermelon h1').css('padding-left', resultWidth);
	}
	kiwi();
	watermelon();
});

// Ширина кнопок слайдера
jQuery(function(){
	var buttonWith = $('#navSlider li').outerWidth();
	var resultWidth = buttonWith * 5 + 30;
	$('#navSlider').css('width', resultWidth);
});

// Высота портфолио
jQuery(function(){
	var windowHeight = $(window).height();
	var resultHeight = windowHeight * 0.6;
	$('.portfolioSite').css('height', resultHeight);
});

/* Popover для иконок портфолио */
jQuery(function(){
	$('[data-toggle="popover"]').popover({
		delay: { "show": 100, "hide": 100 }
	});
});
