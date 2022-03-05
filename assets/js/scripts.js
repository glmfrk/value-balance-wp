;(function ($) {
	'use strict'

	/* Testimonial Carousel */
	$('.tsm-slider').owlCarousel({
		loop: false,
		margin: 0,
		center: false,
		items: 1,
		autoplay: false,
		nav: false,
		dots: true,
	})

	/* Dynamic service background */
	const services = $('.service-item')
	Array.from(services, (service) => {
		const bgColor = $(service).data('bg')
		$(service).css('backgroundColor', bgColor)
	})

	// Mobile menu toggler
	$('#menu-toogler-btn').on('click', function () {
		$('.nav').slideToggle(300)
		$(this).toggleClass('menu-open')
	})

	// menu sticky
	$(window).scroll(function () {
		var scroll = $(window).scrollTop()
		if (scroll > 0) {
			$('.header').addClass('sticky-top')
		} else {
			$('.header').removeClass('sticky-top')
		}
	})

	function init() {
		var locations = [['Value Balance', 48.43215, -123.36959]]

		var map = new google.maps.Map(document.getElementById('map-canvas'), {
			zoom: 10,
			center: new google.maps.LatLng(48.43215, -123.36959),
			mapTypeId: google.maps.MapTypeId.ROADMAP,

			styles: [
				{ featureType: 'water', elementType: 'geometry', stylers: [{ color: '#e9e9e9' }, { lightness: 17 }] },
				{ featureType: 'landscape', elementType: 'geometry', stylers: [{ color: '#f5f5f5' }, { lightness: 20 }] },
				{ featureType: 'road.highway', elementType: 'geometry.fill', stylers: [{ color: '#ffffff' }, { lightness: 17 }] },
				{ featureType: 'road.highway', elementType: 'geometry.stroke', stylers: [{ color: '#ffffff' }, { lightness: 29 }, { weight: 0.2 }] },
				{ featureType: 'road.arterial', elementType: 'geometry', stylers: [{ color: '#ffffff' }, { lightness: 18 }] },
				{ featureType: 'road.local', elementType: 'geometry', stylers: [{ color: '#ffffff' }, { lightness: 16 }] },
				{ featureType: 'poi', elementType: 'geometry', stylers: [{ color: '#f5f5f5' }, { lightness: 21 }] },
				{ featureType: 'poi.park', elementType: 'geometry', stylers: [{ color: '#dedede' }, { lightness: 21 }] },
				{ elementType: 'labels.text.stroke', stylers: [{ visibility: 'on' }, { color: '#ffffff' }, { lightness: 16 }] },
				{ elementType: 'labels.text.fill', stylers: [{ saturation: 36 }, { color: '#333333' }, { lightness: 40 }] },
				{ elementType: 'labels.icon', stylers: [{ visibility: 'off' }] },
				{ featureType: 'transit', elementType: 'geometry', stylers: [{ color: '#f2f2f2' }, { lightness: 19 }] },
				{ featureType: 'administrative', elementType: 'geometry.fill', stylers: [{ color: '#fefefe' }, { lightness: 20 }] },
				{ featureType: 'administrative', elementType: 'geometry.stroke', stylers: [{ color: '#fefefe' }, { lightness: 17 }, { weight: 1.2 }] },
			],
		})

		var infowindow = new google.maps.InfoWindow()

		var marker, i

		for (i = 0; i <= locations.length; i++) {
			marker = new google.maps.Marker({
				position: new google.maps.LatLng(locations[i][1], locations[i][2]),
				map: map,
				icon: 'assets/images/marker.png',
			})

			google.maps.event.addListener(
				marker,
				'click',
				(function (marker, i) {
					return function () {
						infowindow.setContent(locations[i][0])
						infowindow.open(map, marker)
					}
				})(marker, i)
			)
		}
	}

	if ($('#map-canvas').length > 0) {
		google.maps.event.addDomListener(window, 'load', init)
	}

	// Pricing Switch togger
	$('.pricing-switch').on('click', function () {
		$('.pricing-switch-active').toggleClass('hourly')
		$('.hourly-section, .monthly-section').toggle()
	})
})(jQuery)
