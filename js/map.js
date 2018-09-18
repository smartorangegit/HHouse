function mapMaker(id, longt, lat) {
	var id = id;
	flag_item = 1;
	var
		contentString9 = '<div class="map__info-marker">' +
		'<svg height="60" viewBox="0 0 260 59.999998" width="260" xmlns="http://www.w3.org/2000/svg"><g fill="#ed1c24" transform="matrix(.99465781 0 0 1 -166.4667 -390.3246)"><path d="m311.8 444.2c.4-.2.7-.5.7-1.1 0-.5-.2-1.3-1.6-1.3h-1.9v4.9h1.9c1.3 0 1.8-.6 1.8-1.4 0-.6-.3-1-.9-1.1zm-2-1.7h1.2c.7 0 .8.3.8.7 0 .3-.2.7-.8.7h-1.2zm1.3 3.5h-1.3v-1.5h1.3c.6 0 .9.3.9.7 0 .5-.2.8-.9.8z"/><path d="m316.1 442.5c.5 0 1 .2 1.4.6l.5-.5c-.5-.5-1.1-.8-1.8-.8-1.4 0-2.5 1.1-2.5 2.5s1.1 2.5 2.5 2.5c.7 0 1.4-.3 1.8-.8l-.5-.5c-.3.4-.8.6-1.4.6-1 0-1.7-.7-1.7-1.8-.1-1.1.7-1.8 1.7-1.8z"/><path d="m320.3 441.1c0-.2-.2-.4-.4-.4s-.4.2-.4.4.2.4.4.4.4-.2.4-.4z"/><path d="m321.8 441.1c0-.2-.2-.4-.4-.4s-.4.2-.4.4.2.4.4.4.4-.2.4-.4z"/><path d="m319.8 442.5h2.4v-.7h-3.2v4.9h3.2v-.7h-2.4v-1.4h2.3v-.7h-2.3z"/><path d="m328 441.8h-.4l-1.7 4.2h-.6v1.6h.8v-.9h3.7v.9h.8v-1.6h-.6zm-1.4 4.2 1.1-2.8 1.1 2.8z"/><path d="m330.9 446.7h.8l1.4-3.5 1.4 3.5h.8l-2-4.9h-.4z"/><path d="m336 443.6c0 .8.4 1.3 1.2 1.6-.2.1-.5.4-.8.8l-.5.7h.9l.4-.6c.4-.6.6-.7 1.1-.7h.8v1.3h.8v-4.9h-1.6c-1.4 0-2.3.8-2.3 1.8zm3 1.1h-.9c-.7 0-1.3-.3-1.3-1.1 0-.7.6-1.1 1.3-1.1h.9z"/><path d="m345.8 442.5c.5 0 1 .2 1.4.6l.5-.5c-.5-.5-1.1-.8-1.8-.8-1.4 0-2.5 1.1-2.5 2.5s1.1 2.5 2.5 2.5c.7 0 1.4-.3 1.8-.8l-.5-.5c-.3.4-.8.6-1.4.6-1 0-1.7-.7-1.7-1.8-.1-1.1.7-1.8 1.7-1.8z"/><path d="m349.5 442.5h2.5v-.7h-3.2v4.9h3.2v-.7h-2.5v-1.4h2.3v-.7h-2.3z"/><path d="m357.1 446.7h.8v-4.9h-.4l-2 2.5-2-2.5h-.4v4.9h.7v-3.5l1.7 2.1 1.6-2.1z"/><path d="m360.2 442.5h2.4v-.7h-3.2v4.9h3.2v-.7h-2.4v-1.4h2.2v-.7h-2.2z"/><path d="m367.5 441.8h-.4l-2.6 3.5v-3.5h-.8v4.9h.5l2.6-3.4v3.4h.7z"/><path d="m366.7 440.5h-.5c0 .3-.2.5-.6.5-.3 0-.6-.2-.6-.5h-.5c0 .6.5 1 1.1 1s1.1-.4 1.1-1z"/><path d="m371.9 446.7h.8v-4.9h-.8v2.1h-2.2v-2.1h-.8v4.9h.8v-2.1h2.2z"/><path d="m376.3 441.8c-1.4 0-2.5 1.1-2.5 2.5s1.1 2.5 2.5 2.5 2.5-1.1 2.5-2.5-1.1-2.5-2.5-2.5zm0 4.3c-1 0-1.7-.7-1.7-1.8 0-1 .8-1.8 1.7-1.8 1 0 1.7.7 1.7 1.8 0 1-.7 1.8-1.7 1.8z"/><path d="m380.8 442.5h2.3v-.7h-3.1v4.9h.8z"/><path d="m386.3 441.8c-1.4 0-2.5 1.1-2.5 2.5s1.1 2.5 2.5 2.5 2.5-1.1 2.5-2.5-1.2-2.5-2.5-2.5zm0 4.3c-1 0-1.7-.7-1.7-1.8 0-1 .8-1.8 1.7-1.8 1 0 1.7.7 1.7 1.8 0 1-.8 1.8-1.7 1.8z"/><path d="m394.4 442.5c.5 0 1 .2 1.4.6l.5-.5c-.5-.5-1.1-.8-1.8-.8-1.4 0-2.5 1.1-2.5 2.5s1.1 2.5 2.5 2.5c.7 0 1.4-.3 1.8-.8l-.5-.5c-.3.4-.8.6-1.4.6-1 0-1.7-.7-1.7-1.8s.8-1.8 1.7-1.8z"/><path d="m400.1 443.6c0 .9-.6 1.2-1.1 1.2-.6 0-1.2-.3-1.2-1.2v-1.8h-.8v1.7c0 1.5.8 2 1.8 2 .5 0 1-.2 1.2-.7v1.9h.8v-4.9h-.8v1.8z"/><path d="m403.8 441.8-2 4.9h.8l.4-1.1h1.9l.4 1.1h.8l-2-4.9zm-.4 3.1.7-1.7.7 1.7z"/><path d="m409.1 442.5c.5 0 1 .2 1.4.6l.5-.5c-.5-.5-1.1-.8-1.8-.8-1.4 0-2.5 1.1-2.5 2.5s1.1 2.5 2.5 2.5c.7 0 1.4-.3 1.8-.8l-.5-.5c-.3.4-.8.6-1.4.6-1 0-1.7-.7-1.7-1.8-.1-1.1.7-1.8 1.7-1.8z"/><path d="m411.6 442.5h1.4v4.2h.8v-4.2h1.4v-.7h-3.6z"/><path d="m418.3 443.7h-1.3v-1.9h-.8v4.9h2c1.2 0 1.7-.6 1.7-1.5.1-.9-.5-1.5-1.6-1.5zm0 2.3h-1.3v-1.6h1.3c.6 0 .9.3.9.8s-.2.8-.9.8z"/><path d="m420.7 443.6c0 .8.4 1.3 1.2 1.6-.2.1-.5.4-.8.8l-.5.7h.9l.4-.6c.4-.6.6-.7 1.1-.7h.8v1.3h.8v-4.9h-1.6c-1.5 0-2.3.8-2.3 1.8zm3 1.1h-.9c-.7 0-1.3-.3-1.3-1.1 0-.7.6-1.1 1.3-1.1h.9z"/><path d="m181.8 404.8c-2.4 0-4.3.8-5.9 2.3v-12.8h-5.8v32.4h5.8v-12.4c0-1.2.4-2.2 1.1-3 .8-.8 1.7-1.1 2.9-1.1s2.1.4 2.9 1.1c.7.8 1.1 1.8 1.1 3v12.4h5.8v-13.3c0-2.6-.7-4.7-2.2-6.2-1.4-1.6-3.3-2.4-5.7-2.4z"/><path d="m204.1 404.8c-3.7 0-6.9 1.5-9.3 4.4l3 3.6c1.9-2 3.8-2.9 5.7-2.9 1.3 0 2.3.3 3 1s1 1.6 1 2.8v1h-5.4c-2.5 0-4.4.6-5.9 1.7s-2.2 2.6-2.2 4.6c0 1.9.7 3.4 2 4.6s3.1 1.8 5.4 1.8c2.7 0 4.9-.9 6.5-2.6v2.1h5.4v-12.7c0-3-.8-5.2-2.5-6.8-1.7-1.8-3.9-2.6-6.7-2.6zm3.3 13.9c0 1.2-.4 2.3-1.3 3-.9.8-1.9 1.2-3.2 1.2-.9 0-1.7-.2-2.2-.6-.6-.4-.8-1-.8-1.7 0-1.4 1-2.2 3-2.2h4.6v.3z"/><path d="m231.1 404.8c-3.1 0-5.3 1-6.9 3.2v-2.7h-5.4v29.1h5.8v-9.8c1.6 1.7 3.7 2.6 6.4 2.6 3 0 5.5-1.1 7.4-3.2s2.9-4.8 2.9-8-1-5.9-2.9-8c-1.8-2.2-4.3-3.2-7.3-3.2zm2.8 15.4c-1.1 1.1-2.4 1.6-3.9 1.6s-2.8-.5-3.8-1.5c-1.1-1-1.6-2.5-1.6-4.4s.5-3.4 1.6-4.4 2.3-1.5 3.8-1.5c1.6 0 2.9.5 4 1.6 1 1.1 1.6 2.5 1.6 4.3-.1 1.8-.6 3.2-1.7 4.3z"/><path d="m258.3 404.8c-3.1 0-5.3 1-6.9 3.2v-2.7h-5.4v29.1h5.8v-9.8c1.6 1.7 3.7 2.6 6.4 2.6 3 0 5.5-1.1 7.4-3.2s2.9-4.8 2.9-8-1-5.9-2.9-8c-1.8-2.2-4.3-3.2-7.3-3.2zm2.8 15.4c-1.1 1.1-2.4 1.6-3.9 1.6s-2.8-.5-3.8-1.5-1.6-2.5-1.6-4.4.5-3.4 1.6-4.4 2.3-1.5 3.8-1.5c1.6 0 2.9.5 4 1.6s1.6 2.5 1.6 4.3c-.1 1.8-.6 3.2-1.7 4.3z"/><path d="m281.8 419.3-5.2-14h-6.2l8.2 20.1-.6 1.4c-.5 1.1-1.1 1.9-1.8 2.3s-1.6.6-2.6.6c-.3 0-1.2-.1-2.5-.2v4.9c1.3.3 2.5.5 3.8.5 2 0 3.7-.5 5-1.6 1.4-1 2.5-2.7 3.5-4.9l10.2-23.2h-6.1z"/><path d="m328.6 426.6v-13.3c0-2.6-.7-4.7-2.2-6.2-1.4-1.6-3.4-2.4-5.8-2.4s-4.3.8-5.9 2.3v-12.8h-5.7v32.4h5.8v-12.4c0-1.2.4-2.2 1.1-3 .8-.8 1.7-1.1 2.9-1.1s2.1.4 2.9 1.1c.7.8 1.1 1.8 1.1 3v12.4z"/><path d="m352.6 408c-2.2-2.1-5-3.2-8.1-3.2-3.2 0-5.9 1.1-8.1 3.2s-3.3 4.8-3.3 7.9c0 3.2 1.1 5.8 3.3 8s4.9 3.2 8.1 3.2 5.9-1.1 8.2-3.2c2.2-2.2 3.4-4.8 3.4-7.9-.2-3.2-1.3-5.8-3.5-8zm-4.2 12.1c-1.1 1.1-2.4 1.6-4 1.6s-2.9-.5-4-1.6c-1-1.1-1.6-2.5-1.6-4.2s.5-3.1 1.6-4.2c1-1.1 2.4-1.7 4-1.7s2.9.6 4 1.7c1 1.1 1.6 2.5 1.6 4.2s-.5 3.1-1.6 4.2z"/><path d="m394.5 421.9c-.5.3-1.2.5-1.9.5-2.1 0-4.1-1-6-2.9l-2.9 3.5c2.1 2.8 5.1 4.1 8.9 4.1 2.4 0 4.4-.6 6-1.8s2.4-2.9 2.4-5c0-1.6-.5-2.9-1.4-3.8-1-1-2.5-1.9-4.6-2.7l-2.1-.9c-.8-.3-1.4-.6-1.8-.9-.3-.3-.5-.6-.5-1 0-1 .8-1.5 2.3-1.5 1.8 0 3.4.7 4.8 2l2.9-3.6c-1.9-2.2-4.5-3.2-7.7-3.2-2.3 0-4.2.6-5.7 1.7s-2.2 2.7-2.2 4.7c0 1.6.5 2.9 1.4 3.8 1 1 2.4 1.9 4.4 2.7l2.3.9c.8.3 1.4.6 1.7.9.3.2.5.6.5 1.1-.1.7-.3 1.1-.8 1.4z"/><path d="m422.4 407.6c-1.9-1.9-4.3-2.8-7.3-2.8-3.2 0-5.8 1.1-8 3.2-2.1 2.2-3.2 4.8-3.2 7.9 0 3.2 1.1 5.8 3.3 8 2.2 2.1 5 3.2 8.4 3.2 3.2 0 6-1.1 8.5-3.2l-2.4-4c-1.9 1.4-3.9 2.2-6 2.2-1.6 0-2.9-.4-3.9-1.1-1.1-.7-1.8-1.8-2.1-3.1h15c.3-1.1.4-2.2.4-3.2.1-2.8-.8-5.2-2.7-7.1zm-12.6 6.2c.3-1.3 1-2.4 1.9-3.2s2-1.2 3.2-1.2c1.3 0 2.3.4 3.2 1.2s1.4 1.8 1.4 3.2z"/><path d="m363.2 410.6c1.6 0 2.9-1.3 2.9-2.9s-1.3-2.9-2.9-2.9-2.9 1.3-2.9 2.9 1.3 2.9 2.9 2.9z"/><path d="m377 414.9c-1.6 0-2.8 1.3-2.8 2.8-.2 2.1-1.9 3.8-4.1 3.8s-3.9-1.7-4.1-3.8c0-1.6-1.3-2.8-2.8-2.8-1.6 0-2.8 1.3-2.8 2.8.2 5.2 4.4 9.4 9.7 9.4s9.5-4.2 9.7-9.4c0-1.5-1.2-2.8-2.8-2.8z"/><path d="m377 404.8c-1.6 0-2.9 1.3-2.9 2.9s1.3 2.9 2.9 2.9 2.9-1.3 2.9-2.9-1.3-2.9-2.9-2.9z"/></g></svg>' +
		// '<h3 style="font-size: 30px;text-align: center;">Happy House</h3>' +
		// '<p>Київ, вул.Предславинська, 35 </p>' +
		'</div>',
		contentString2 = '<div class="map__info-marker">Парк Нивки</div>',
		contentString3 = '<div class="map__info-marker">Берестейська</div>',
		contentString4 = '<div class="map__info-marker">Спеціалізована школа №82</div>',
		contentString5 = '<div class="map__info-marker">Мотузковий парк</div>',
		contentString6 = '<div class="map__info-marker">Київська дитяча залізниця</div>',
		contentString7 = '<div class="map__info-marker">Сирецький парк</div>',
		contentString8 = '<div class="map__info-marker">КНЕУ</div>';
		contentString10 = '<div class="map__info-marker">Шулявська</div>';
		contentString11 = '<div class="map__info-marker">Парк імені Пушкіна</div>';
		contentString12 = '<div class="map__info-marker">Київський зоопарк</div>';
		contentString13 = '<div class="map__info-marker">Політехнічний інститут</div>';
		contentString14 = '<div class="map__info-marker">НМУ</div>';
		contentString15 = '<div class="map__info-marker">Парк КПI</div>';
		contentString16 = '<div class="map__info-marker">ТЦ "Аркадiя"</div>';
		contentString17 = '<div class="map__info-marker">ТЦ "Мармелад"</div>';
		contentString18 = '<div class="map__info-marker">ТЦ "Космополiт"</div>';
		contentString19 = '<div class="map__info-marker">Парк “Орлятко”</div>';
		contentString20 = '<div class="map__info-marker">НАУ</div>';
		contentString21 = '<div class="map__info-marker">Мамаєва Слобода</div>';
		contentString22 = '<div class="map__info-marker">Парк “ Відрадний”</div>';

// 50.437010, 30.541347

	var locations = [
				[contentString2, 50.461922, 30.418754, "/wp-content/themes/happy-house/assets/img/map/park.png"],
				[contentString3, 50.458609, 30.419816, "/wp-content/themes/happy-house/assets/img/map/metro.png"],
				[contentString4, 50.459435, 30.431500, "/wp-content/themes/happy-house/assets/img/map/school.png"],
				[contentString5, 50.465274, 30.438023, "/wp-content/themes/happy-house/assets/img/map/rope.png"],
				[contentString6, 50.467398, 30.434836, "/wp-content/themes/happy-house/assets/img/map/train.png"],
				[contentString7, 50.467692, 30.438924, "/wp-content/themes/happy-house/assets/img/map/park.png"],
				[contentString8, 50.456413, 30.440894, "/wp-content/themes/happy-house/assets/img/map/school.png"],
				// [contentString8, 50.439367, 30.544927, "/img/map/bank.png"],
        		[contentString10, 50.454856, 30.445475, "/wp-content/themes/happy-house/assets/img/map/metro.png"],
        		[contentString11, 50.455751, 30.454406, "/wp-content/themes/happy-house/assets/img/map/park.png"],
        		[contentString12, 50.454850, 30.463805, "/wp-content/themes/happy-house/assets/img/map/zoo.png"],
        		[contentString13, 50.450854, 30.466487, "/wp-content/themes/happy-house/assets/img/map/metro.png"],
        		[contentString14, 50.453341, 30.458784, "/wp-content/themes/happy-house/assets/img/map/school.png"],
        		[contentString15, 50.450957, 30.460561, "/wp-content/themes/happy-house/assets/img/map/park.png"],
        		[contentString16, 50.445013, 30.443826, "/wp-content/themes/happy-house/assets/img/map/shop.png"],
        		[contentString17, 50.446161, 30.443204, "/wp-content/themes/happy-house/assets/img/map/shop.png"],
        		[contentString18, 50.450226, 30.442507, "/wp-content/themes/happy-house/assets/img/map/shop.png"],
        		[contentString19, 50.444565, 30.427656, "/wp-content/themes/happy-house/assets/img/map/park.png"],
        		[contentString20, 50.440390, 30.430285, "/wp-content/themes/happy-house/assets/img/map/school.png"],
        		[contentString21, 50.435532, 30.428987, "/wp-content/themes/happy-house/assets/img/map/park.png"],
        		[contentString22, 50.435163, 30.425961, "/wp-content/themes/happy-house/assets/img/map/park.png"],
				[contentString9, 50.458194, 30.428222] //Сам Хэппи

			];
	var centerX = 50.454661;
	var centerY = 30.445264;

	if($(window).width() < 748) {
		centerY = locations[0][2];
	}
	var map = new google.maps.Map(document.getElementById(id), {
			zoom: 14,
			scrollwheel: false,
			center: new google.maps.LatLng( centerX, centerY),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});

	var infowindow = new google.maps.InfoWindow();
	var marker, i;

	for (i = 0; i < locations.length; i++) {
	    marker = new google.maps.Marker({
	        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
	        map: map,
	        icon: {
	            url: locations[i][3],
	            scaledSize: new google.maps.Size(30, 40)
	        }
	    });
	    infowindow.setContent(locations[i][0]);
	    infowindow.open(map, marker);
	    google.maps.event.addListener(marker, 'click', (function(marker, i) {
	        return function() {
	            infowindow.setContent(locations[i][0]);
				infowindow.open(map, marker);
	        }
	    })(marker, i));
	}

	$.getJSON("/wp-content/themes/happy-house/assets/js/mapStyle.json", function(data) {
         map.setOptions({styles: data});
     });

}
if (document.getElementById('map')) {
	mapMaker('map', 50.423854);
}

// if (document.getElementById('map')) {
// 	mapMaker('map');
// }
