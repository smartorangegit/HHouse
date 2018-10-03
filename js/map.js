function mapMaker(id, longt, lat) {
	var id = id;
	flag_item = 1;
	var
		contentString9 = '<div class="map__info-marker">' +
		'<svg fill="#ed1c24" height="60" viewBox="0 0 663.40003 154.60001" width="260" xmlns="http://www.w3.org/2000/svg"><g fill="#ed1c24"><g transform="translate(-73.6 -69.8)"><g><path d="m113.8 106.4c-6 0-10.9 1.9-14.8 5.8v-32.4h-14.7v81.6h14.7v-31.3c0-3.1 1-5.6 2.9-7.6 1.9-1.9 4.4-2.9 7.3-2.9 3 0 5.4 1 7.2 2.9s2.8 4.4 2.8 7.6v31.3h14.6v-33.4c0-6.5-1.8-11.8-5.4-15.7-3.7-4-8.5-5.9-14.6-5.9z"/><path d="m170 106.4c-9.4 0-17.3 3.7-23.5 11.1l7.6 9c4.7-4.9 9.5-7.4 14.3-7.4 3.3 0 5.7.8 7.4 2.5s2.6 4 2.6 7v2.4h-13.5c-6.2 0-11.2 1.4-14.8 4.2-3.7 2.8-5.5 6.6-5.5 11.5 0 4.7 1.7 8.6 5 11.6s7.9 4.5 13.6 4.5c6.8 0 12.3-2.2 16.4-6.5v5.2h13.5v-32c0-7.5-2.1-13.2-6.3-17.1-4.2-4.1-9.8-6-16.8-6zm8.4 34.9c0 3.1-1.1 5.7-3.3 7.7s-4.9 3-8 3c-2.3 0-4.2-.5-5.6-1.6-1.4-1-2.1-2.5-2.1-4.3 0-3.6 2.5-5.4 7.5-5.4h11.5z"/><path d="m238 106.4c-7.7 0-13.4 2.6-17.3 7.9v-6.7h-13.5v73.4h14.7v-24.8c4 4.4 9.4 6.5 16.1 6.5 7.6 0 13.9-2.7 18.8-8 4.9-5.4 7.3-12.1 7.3-20.2s-2.5-14.8-7.3-20.1c-4.9-5.4-11.2-8-18.8-8zm7.2 38.8c-2.7 2.7-6 4.1-9.9 4.1-3.8 0-7-1.3-9.6-3.9-2.7-2.6-4-6.3-4-11 0-4.9 1.3-8.5 4-11s5.9-3.8 9.6-3.8c4 0 7.3 1.4 10 4.1 2.6 2.7 4 6.3 4 10.8-.1 4.5-1.4 8-4.1 10.7z"/><path d="m306.4 106.4c-7.7 0-13.4 2.6-17.3 7.9v-6.7h-13.5v73.4h14.7v-24.8c4 4.4 9.4 6.5 16.1 6.5 7.6 0 13.9-2.7 18.8-8 4.9-5.4 7.3-12.1 7.3-20.2s-2.4-14.8-7.3-20.1c-4.9-5.4-11.2-8-18.8-8zm7.2 38.8c-2.7 2.7-6 4.1-9.9 4.1-3.8 0-7-1.3-9.6-3.9s-4-6.3-4-11c0-4.9 1.3-8.5 4-11s5.9-3.8 9.6-3.8c4 0 7.3 1.4 10 4.1 2.6 2.7 4 6.3 4 10.8-.1 4.5-1.4 8-4.1 10.7z"/><path d="m365.6 142.9-13.2-35.4h-15.6l20.7 50.7-1.6 3.6c-1.2 2.8-2.8 4.8-4.6 5.8s-4 1.5-6.6 1.5c-.9 0-3-.1-6.3-.4v12.3c3.3.9 6.4 1.3 9.5 1.3 5 0 9.2-1.3 12.6-3.9s6.4-6.7 8.8-12.3l25.8-58.5h-15.4z"/><path d="m483.6 161.4v-33.4c0-6.5-1.8-11.8-5.4-15.7-3.6-4-8.5-5.9-14.6-5.9-6 0-10.9 1.9-14.8 5.8v-32.4h-14.7v81.6h14.7v-31.3c0-3.1 1-5.6 2.9-7.6 1.9-1.9 4.4-2.9 7.3-2.9 3 0 5.4 1 7.2 2.9s2.8 4.4 2.8 7.6v31.3z"/><path d="m544 114.5c-5.7-5.4-12.5-8.1-20.5-8.1s-14.9 2.7-20.4 8.1c-5.6 5.4-8.4 12.1-8.4 20 0 8 2.8 14.7 8.3 20.1s12.3 8.1 20.4 8.1c8 0 14.9-2.7 20.6-8.2 5.7-5.4 8.5-12.1 8.5-20 0-8-2.8-14.6-8.5-20zm-10.5 30.5c-2.7 2.8-6 4.1-10 4.1-4.1 0-7.4-1.4-10-4.1s-3.9-6.2-3.9-10.5 1.3-7.8 3.9-10.6 5.9-4.2 10-4.2c4 0 7.3 1.4 10 4.2 2.6 2.8 4 6.3 4 10.6 0 4.2-1.3 7.7-4 10.5z"/><path d="m649.5 149.5c-1.3.8-2.9 1.1-4.9 1.1-5.4 0-10.4-2.4-15.1-7.3l-7.4 8.9c5.3 7 12.7 10.4 22.3 10.4 6.1 0 11.1-1.5 15.1-4.6 4-3 5.9-7.3 5.9-12.6 0-4-1.2-7.2-3.7-9.6-2.4-2.4-6.2-4.7-11.5-6.8l-5.2-2.2c-2.1-.8-3.6-1.5-4.4-2.2s-1.2-1.5-1.2-2.6c0-2.5 1.9-3.8 5.8-3.8 4.4 0 8.4 1.7 12.1 5.1l7.4-9c-4.9-5.4-11.3-8.2-19.4-8.2-5.9 0-10.6 1.4-14.3 4.3s-5.5 6.8-5.5 11.9c0 4 1.2 7.2 3.6 9.7s6.1 4.7 11 6.7l5.8 2.4c2 .9 3.5 1.6 4.3 2.2s1.3 1.5 1.3 2.7c0 1.6-.6 2.7-2 3.5z"/><path d="m719.9 113.5c-4.7-4.8-10.8-7.2-18.3-7.2-8 0-14.7 2.7-20.1 8.2-5.4 5.4-8.1 12.1-8.1 20 0 8 2.8 14.7 8.4 20.1s12.6 8.1 21.1 8.1c8 0 15.2-2.7 21.5-8l-6.1-10c-4.7 3.6-9.7 5.4-15 5.4-3.9 0-7.2-.9-9.8-2.8-2.6-1.8-4.4-4.5-5.4-7.9h37.9c.7-2.8 1-5.4 1-8 0-7.1-2.4-13.1-7.1-17.9zm-31.7 15.6c.9-3.3 2.5-6 4.8-7.9 2.3-2 5-2.9 8.2-2.9s5.9 1 8.2 2.9c2.2 2 3.4 4.6 3.5 7.9z"/><path d="m570.7 121c4.1 0 7.3-3.3 7.3-7.3s-3.3-7.3-7.3-7.3c-4.1 0-7.3 3.3-7.3 7.3 0 4.1 3.3 7.3 7.3 7.3z"/><path d="m605.5 131.9c-3.9 0-7.1 3.2-7.1 7.1-.4 5.3-4.8 9.5-10.3 9.5-5.4 0-9.8-4.2-10.3-9.5 0-3.9-3.2-7.1-7.1-7.1s-7.1 3.2-7.1 7.1v.8c.8 12.8 11.4 22.9 24.4 22.9s23.6-10.1 24.4-22.9c0-.3 0-.5 0-.8.3-3.9-2.9-7.1-6.9-7.1z"/><path d="m605.7 106.4c-4.1 0-7.3 3.3-7.3 7.3 0 4.1 3.3 7.3 7.3 7.3 4.1 0 7.3-3.3 7.3-7.3 0-4.1-3.3-7.3-7.3-7.3z"/></g><g><path d="m477.1 201.4-1.3 1.2c-.9-.9-2.1-1.4-3.5-1.4-2.5 0-4.5 1.9-4.5 4.6s2 4.6 4.5 4.6c1.4 0 2.6-.5 3.5-1.4l1.3 1.2c-1.2 1.3-2.9 2.1-4.8 2.1-3.5 0-6.4-2.9-6.4-6.4s2.9-6.4 6.4-6.4c2-.2 3.7.6 4.8 1.9z"/><path d="m487.6 204.7v1.8h-5.8v3.6h6.2v1.8h-8.2v-12.6h8.2v1.8h-6.2v3.5h5.8z"/><path d="m506.5 214.3v-2.3h-9.4v2.3h-1.9v-4.2h1.7l4.4-10.8h1.1l4.4 10.8h1.6v4.2zm-7.6-4.1h5.8l-2.9-7.2z"/><path d="m511.8 212h-2.1l5.2-12.6h1.1l5.1 12.6h-2.1l-3.6-9z"/><path d="m530.4 212v-3.3h-2c-1.3 0-1.7.3-2.8 1.9l-.9 1.4h-2.2l1.2-1.8c.8-1.2 1.4-1.8 2-2.1-1.8-.6-3-2-3-4 0-2.7 2.1-4.6 5.5-4.6h4.2v12.5zm-2.4-10.8c-1.9 0-3.4.9-3.4 2.8 0 2 1.5 2.8 3.4 2.8h2.4v-5.6z"/><path d="m552 201.4-1.3 1.2c-.9-.9-2.1-1.4-3.5-1.4-2.5 0-4.5 1.9-4.5 4.6s2 4.6 4.5 4.6c1.4 0 2.6-.5 3.5-1.4l1.3 1.2c-1.2 1.3-2.9 2.1-4.8 2.1-3.5 0-6.4-2.9-6.4-6.4s2.9-6.4 6.4-6.4c1.9-.2 3.6.6 4.8 1.9z"/><path d="m559.6 210.2v1.8h-4.9v-1.8h1.5v-8.9h-1.5v-1.8h4.9v1.8h-1.5v8.9z"/><path d="m573.5 212v-9l-4.2 5.3-4.3-5.3v9h-1.9v-12.6h1.1l5.1 6.4 5.1-6.4h1.1v12.6z"/><path d="m586.9 204.7v1.8h-5.8v3.6h6.2v1.8h-8.2v-12.6h8.2v1.8h-6.2v3.5h5.8z"/><path d="m597.7 212v-8.9l-6.7 8.9h-1.1v-12.6h1.9v8.9l6.7-8.9h1.1v12.6zm-5.6-16h1.3c0 .7.6 1.3 1.4 1.3s1.4-.6 1.4-1.3h1.3c0 1.5-1.2 2.5-2.7 2.5s-2.7-1.1-2.7-2.5z"/><path d="m610.7 212v-5.4h-5.8v5.4h-1.9v-12.6h1.9v5.3h5.8v-5.3h1.9v12.6z"/><path d="m628.2 205.7c0 3.6-2.9 6.4-6.4 6.4s-6.4-2.9-6.4-6.4 2.9-6.4 6.4-6.4 6.4 2.9 6.4 6.4zm-10.9 0c0 2.7 2 4.6 4.5 4.6s4.5-1.9 4.5-4.6-2-4.6-4.5-4.6-4.5 1.9-4.5 4.6z"/><path d="m633 212h-2v-12.6h8v1.8h-6z"/><path d="m653.3 205.7c0 3.6-2.9 6.4-6.4 6.4s-6.4-2.9-6.4-6.4 2.9-6.4 6.4-6.4 6.4 2.9 6.4 6.4zm-10.9 0c0 2.7 2 4.6 4.5 4.6s4.5-1.9 4.5-4.6-2-4.6-4.5-4.6-4.5 1.9-4.5 4.6z"/><path d="m676.6 214.3v-2.3h-14.9v-12.6h1.9v10.8h4.7v-10.8h1.9v10.8h4.7v-10.8h1.9v10.8h1.7v4.2h-1.9z"/><path d="m682.3 212h-2.1l5.2-12.6h1.1l5.1 12.6h-2.1l-1.1-2.8h-4.9zm1.8-4.7h3.6l-1.8-4.4z"/><path d="m703.3 201.4-1.3 1.2c-.9-.9-2.1-1.4-3.5-1.4-2.5 0-4.5 1.9-4.5 4.6s2 4.6 4.5 4.6c1.4 0 2.6-.5 3.5-1.4l1.3 1.2c-1.2 1.3-2.9 2.1-4.8 2.1-3.5 0-6.4-2.9-6.4-6.4s2.9-6.4 6.4-6.4c1.9-.2 3.6.6 4.8 1.9z"/><path d="m710.4 212h-1.9v-10.8h-3.7v-1.8h9.3v1.8h-3.7z"/><path d="m723.3 212v-3.3h-2c-1.3 0-1.7.3-2.8 1.9l-.9 1.4h-2.2l1.2-1.8c.8-1.2 1.4-1.8 2-2.1-1.8-.6-3-2-3-4 0-2.7 2.1-4.6 5.5-4.6h4.2v12.5zm-2.3-10.8c-1.9 0-3.4.9-3.4 2.8 0 2 1.5 2.8 3.4 2.8h2.4v-5.6z"/></g></g><path d="m388.42816 135.81954c1.01826-.51187 1.78197-1.27968 1.78197-2.81529 0-1.27966-.50914-3.32714-4.07307-3.32714h-4.83678v12.54079h4.83678c3.30936 0 4.5822-1.53561 4.5822-3.58309 0-1.5356-.76369-2.55934-2.2911-2.81527zm-5.09134-4.35089h3.05479c1.78197 0 2.03655.76781 2.03655 1.79154 0 .7678-.50914 1.79154-2.03655 1.79154h-3.05479zm3.30937 8.9577h-3.30937v-3.83901h3.30937c1.52739 0 2.2911.76781 2.2911 1.79154 0 1.27967-.50913 2.04747-2.2911 2.04747z" stroke-width="2.552499"/></g></svg>' +
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
		contentString23 = '<div class="map__info-marker">Відділ продажу ЖК <p>Адреса: проспект Перемоги, 67 </p></div>';

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
        		[contentString23, 50.457989, 30.405916, "/wp-content/themes/happy-house/assets/img/map/pin_sale-ua.png"],
						[contentString9, 50.458194, 30.428222, "/wp-content/themes/happy-house/assets/img/map/main.png"] //Сам Хэппи

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
	            // scaledSize: new google.maps.Size(30, 40)
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
