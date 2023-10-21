(function($) {

	$(document).ready(function() {
	  $('body').addClass('js');
	  var $menu = $('#menu'),
	    $menulink = $('.menu-link');
	  
	$menulink.click(function() {
	  $menulink.toggleClass('active');
	  $menu.toggleClass('active');
	  return false;
	});});


	videoPopup();


	$('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:30,
	    nav:true,
	    autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        550:{
	            items:2
	        },
	        750:{
	            items:3
	        },
	        1000:{
	            items:4
	        },
	        1200:{
	            items:5
	        }
	    }
	})


	$(".Modern-Slider").slick({
	    autoplay:true,
	    autoplaySpeed:10000,
	    speed:600,
	    slidesToShow:1,
	    slidesToScroll:1,
	    pauseOnHover:false,
	    dots:true,
	    pauseOnDotsHover:true,
	    cssEase:'fade',
	   // fade:true,
	    draggable:false,
	    prevArrow:'<button class="PrevArrow"></button>',
	    nextArrow:'<button class="NextArrow"></button>', 
	});


	$("div.features-post").hover(
	    function() {
	        $(this).find("div.content-hide").slideToggle("medium");
	    },
	    function() {
	        $(this).find("div.content-hide").slideToggle("medium");
	    }
	 );


	$( "#tabs" ).tabs();


	(function init() {
	  function getTimeRemaining(endtime) {
	    var t = Date.parse(endtime) - Date.parse(new Date());
	    var seconds = Math.floor((t / 1000) % 60);
	    var minutes = Math.floor((t / 1000 / 60) % 60);
	    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
	    var days = Math.floor(t / (1000 * 60 * 60 * 24));
	    return {
	      'total': t,
	      'days': days,
	      'hours': hours,
	      'minutes': minutes,
	      'seconds': seconds
	    };
	  }
	  
	  function initializeClock(endtime){
	  var timeinterval = setInterval(function(){
	    var t = getTimeRemaining(endtime);
	    document.querySelector(".days > .value").innerText=t.days;
	    document.querySelector(".hours > .value").innerText=t.hours;
	    document.querySelector(".minutes > .value").innerText=t.minutes;
	    document.querySelector(".seconds > .value").innerText=t.seconds;
	    if(t.total<=0){
	      clearInterval(timeinterval);
	    }
	  },1000);
	}
	initializeClock(((new Date()).getFullYear()+1) + "/1/1")
	})()

})(jQuery);

  // Event listener to handle tab clicks
  document.getElementById('popular-tab').addEventListener('click', function (e) {
    e.preventDefault();
    document.getElementById('popular').classList.add('active');
    document.getElementById('popular-tab').classList.add('active');
    document.getElementById('recent').classList.remove('active');
    document.getElementById('recent-tab').classList.remove('active');
  });

  document.getElementById('recent-tab').addEventListener('click', function (e) {
    e.preventDefault();
    document.getElementById('recent').classList.add('active');
    document.getElementById('recent-tab').classList.add('active');
    document.getElementById('popular').classList.remove('active');
    document.getElementById('popular-tab').classList.remove('active');
  });

  // Activate the 'popular' tab by default (optional)
  document.getElementById('popular-tab').click();



// Partner Carousel

const carousel = document.querySelector(".carousel");
const container = document.querySelector(".carousel-container");
const partnerCards = document.querySelectorAll(".partner-card");

let currentIndex = 0;
const cardWidth = partnerCards[0].offsetWidth;
const numCards = partnerCards.length;

function showCard(index) {
	const translateX = -index * cardWidth;
	container.style.transform = `translateX(${translateX}px)`;
}

function next() {
	currentIndex = (currentIndex + 1) % numCards;
	showCard(currentIndex);
}

function prev() {
	currentIndex = (currentIndex - 1 + numCards) % numCards;
	showCard(currentIndex);
}

const nextButton = document.getElementById("next-button");
const prevButton = document.getElementById("prev-button");

nextButton.addEventListener("click", next);
prevButton.addEventListener("click", prev);

carousel.addEventListener("mouseenter", () => {
	// Pause the automatic sliding when the carousel is hovered over
	clearInterval(interval);
});

carousel.addEventListener("mouseleave", () => {
	// Resume automatic sliding when the carousel is not hovered over
	startAutoSlide();
});

function startAutoSlide() {
	interval = setInterval(next, 2000); // Adjust the interval as needed (3 seconds in this example)
}

let interval;
startAutoSlide();


$(document).ready(function () {
	//according to loftblog tut
	$('.nav li:first').addClass('active');

	var showSection = function showSection(section, isAnimate) {
		var
		direction = section.replace(/#/, ''),
		reqSection = $('.section').filter('[data-section="' + direction + '"]'),
		reqSectionPos = reqSection.offset().top - 0;

		if (isAnimate) {
		$('body, html').animate({
			scrollTop: reqSectionPos },
		800);
		} else {
		$('body, html').scrollTop(reqSectionPos);
		}

	};

	var checkSection = function checkSection() {
		$('.section').each(function () {
		var
		$this = $(this),
		topEdge = $this.offset().top - 80,
		bottomEdge = topEdge + $this.height(),
		wScroll = $(window).scrollTop();
		if (topEdge < wScroll && bottomEdge > wScroll) {
			var
			currentId = $this.data('section'),
			reqLink = $('a').filter('[href*=\\#' + currentId + ']');
			reqLink.closest('li').addClass('active').
			siblings().removeClass('active');
		}
		});
	};

	// $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
	//   if($(e.target).hasClass('external')) {
	//     return;
	//   }
	//   e.preventDefault();
	//   $('#menu').removeClass('active');
	//   showSection($(this).attr('href'), true);
	// });

	$(window).scroll(function () {
		checkSection();
	});
});