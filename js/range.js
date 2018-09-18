// tmas=['room','floor','area'];
// var slider=[];
// var $range=[];
// 	for(i=0; i<tmas.length; i++){
// 		$range[i]= $("#"+tmas[i]);
// 	}
//
// //Кнопка reset
// $('#reset').click(function(){
//
// for(i=0; i<tmas.length; i++){
// slider[i] = $range[i].data("ionRangeSlider");
// }
// slider[0].reset();
// slider[1].reset();
// slider[2].reset();
// });
//
// function AddFilter(){
// 	console.log(1111);
// 	var n=[];
// 	for(i=0; i<tmas.length; i++){
// str=document.getElementById(tmas[i]+"_min_max").value;
//
// n[tmas[i]]=str.split('/');
// n[tmas[i]][0]=Number(n[tmas[i]][0]);
// n[tmas[i]][1]=Number(n[tmas[i]][1]);
//
// 			$range[i].ionRangeSlider( {
// 			min: n[tmas[i]][0],
//             max: n[tmas[i]][1],
//             from: n[tmas[i]][0],
//             to: n[tmas[i]][1],
//             type: 'double',
// 		   hide_min_max: true,
// 			 onChange: function(data){
// 				 $('.results_box').addClass('blured');
//
// 	     },
// 			onFinish: function(data){
// 				$('.results_box').removeClass('blured');
//
// 				updateInputs()
// 			},
// 			onUpdate: updateInputs
//
// 			}
// );
// }
//
// 	function updateInputs (data) {
// 	var vals=[];
// 	for(i=0; i<tmas.length; i++){
// 		vals[i]=$("#"+tmas[i]).data("ionRangeSlider");
// }
// 	data = $('.sort');
// 	for(i=0; i<data.length; i++){
//
// 	if(	data[i].dataset.room>=vals[0].old_from  && data[i].dataset.room<=vals[0].old_to &&
// 		data[i].dataset.floor>=vals[1].old_from && data[i].dataset.floor<=vals[1].old_to &&
// 		data[i].dataset.area>=vals[2].old_from && data[i].dataset.area<=vals[2].old_to
//
// 		){
// 	data[i].style.display='table-row';
// 	}else{
// 	data[i].style.display='none';
// 	}}
// 		}
// }
//  AddFilter();

//берем данные для границ ползунков .Mate
// var v_entrance = $("#val_entrance").val();
// var entrance =  v_entrance.split('/');
// var entrance_min = entrance[0];
// var entrance_max = entrance[1];


//  $("#price").ionRangeSlider({
//     type: "double",
//     grid: true,
//     min: entrance_min,
//     max: entrance_max,
//     from: entrance_min,
//     to: entrance_max,
//     hide_min_max: true,
//     grid: false
// });
// $("#square").ionRangeSlider({
// 	 type: "double",
// 	 grid: true,
// 	 min: 44,
// 	 max: 172,
// 	 from: 44,
// 	 to: 172,
// 	 hide_min_max: true,
// 	 grid: false
// });
// $("#priceM").ionRangeSlider({
// 	 type: "double",
// 	 grid: true,
// 	 min: 3,
// 	 max: 25,
// 	 from: 3,
// 	 to: 25,
// 	 hide_min_max: true,
// 	 grid: false
// });
// $("#squareLiv").ionRangeSlider({
// 	type: "double",
// 	grid: true,
// 	min: 12,
// 	max: 154,
// 	from: 12,
// 	to: 154,
// 	hide_min_max: true,
// 	grid: false
// });

  // скрипт для выравнивания последней строки флекс-бокса в разделе filter.php /Anna/
var emptyCells, i;

$('.with-empty-cells').each(function() {
emptyCells = [];
for (i = 0; i < $(this).find('.cell').length; i++) {
emptyCells.push($('<li>', {
class: 'cell is-empty'
}));
}
$(this).append(emptyCells);
});



// Andrey 2018/08/16
(function() {

	var filter = {
		val_entrance: {
			min: '',
			max: ''
		},
		val_square: {
			min: '',
			max: ''
		},
		val_floor: {
			min: '',
			max: ''
		},
		val_squareLiv: {
			min: '',
			max: ''
		},
		rooms: []
	};

	function setFilter(ionRange, range) {
		filter[range.id].min = Number(ionRange.from);
		filter[range.id].max = Number(ionRange.to);
	};

	function setValue(el, val) {
		$('.js_' + el.id + '_min').val(val.from);
		$('.js_' + el.id + '_max').val(val.to);
	}

	var ranges = document.querySelectorAll('.range-init');

	var sliders = [];

	ranges.forEach(function(range) {
		$(range).ionRangeSlider({
			type: "double",
			grid: true,
			values_separator: '-',
			min: range.value.split('/')[0],
			max: range.value.split('/')[1],
			from: range.value.split('/')[0],
			to: range.value.split('/')[1],
			hide_min_max: true,
			grid: false,
			onStart: function(ionRange) {
				setFilter(ionRange, range);
			},
			onChange: function(ionRange) {
				setFilter(ionRange, range);
				setValue(range, ionRange);
			}
		})
		sliders.push($(range).data("ionRangeSlider"));

	});

	var checkboxesConainer = document.querySelector('.js_checkboxes__rooms');
	var checkboxes = document.querySelectorAll('.checkbox__room');

	checkboxesConainer.addEventListener('change', function() {
		filter.rooms = [];
		checkboxes.forEach(function(checkbox) {
			if(checkbox.checked) {
				filter.rooms.push(parseInt(checkbox.value));
			}
		})
	});

	var rows = document.querySelectorAll('.result__item');

	function Appartment(app) {
		this.selector = app;
		this.val_entrance = parseInt(app.dataset.build);
		this.val_square = parseInt(app.dataset.area);
		this.val_squareLiv = parseInt(app.dataset.larea);
		this.val_floor = parseInt(app.dataset.floor);
		this.rooms = parseInt(app.dataset.rooms);
	}

	var appartments = [];
	rows.forEach(function(row){
		appartments.push(new Appartment(row))
	});

	var searchBtn = document.querySelector('.button_search_js');
	var resetBtn = document.querySelector('#reset_button');

	document.querySelector(".number_flats").innerHTML = appartments.length;
	document.querySelector(".count_filter").innerHTML = appartments.length;

	searchBtn.addEventListener('click', function() {
		var totalAppartments = appartments.length;
		var i = 0;
		appartments.forEach(function(appartment){
			appartment.selector.style.display = 'block';
			for(var key in filter) {
				if(key === 'rooms' && filter[key].length > 0) {
					if(!filter[key].includes(appartment[key])) {
						appartment.selector.style.display = 'none';
						i++;
						break;
					}
				}
				if(filter[key].min > appartment[key] || filter[key].max < appartment[key]) {
					appartment.selector.style.display = 'none';
					i++;
					break;
				}
			}
		});
		document.querySelector(".number_flats").innerHTML = totalAppartments - i <= 0 ? 0 : totalAppartments - i;
		document.querySelector(".count_filter").innerHTML = totalAppartments - i <= 0 ? 0 : totalAppartments - i;
	});

	resetBtn.addEventListener('click', function(e) {
		e.preventDefault();
		sliders.forEach(function(slider) {
			slider.update({
				from: slider.options.min,
				to: slider.options.max
			});
			setFilter({from: slider.old_from, to: slider.old_to}, slider.input);
			setValue(slider.input, {from: slider.old_from, to: slider.old_to});
		});
		checkboxes.forEach(function(checkbox) {
			checkbox.checked = false;
		})
		filter.rooms = [];
	});


	var minInputs = document.querySelectorAll('.slider__currentMin');

	function setMinSliderFromInput(id, val) {
		for(var i = 0; i < sliders.length; i++) {
			if(sliders[i].input.id === id) {
				if(sliders[i].options.min <= Number(val) && sliders[i].options.max >= Number(val)) {
					sliders[i].update({from: val, to: sliders[i].old_to});
					setFilter({from: val, to: sliders[i].old_to}, {id: id});
				} else {
					sliders[i].update({from: sliders[i].options.min, to: sliders[i].old_to});
					setFilter({from: sliders[i].options.min, to: sliders[i].old_to}, {id: id})
				}
				break;
			}
		}
	};

	minInputs.forEach(function(input) {
		input.addEventListener('keyup', function(e) {
			setMinSliderFromInput($(this).siblings('.range-init')[0].id, e.target.value);
		});
	});

	var maxInputs = document.querySelectorAll('.slider__currentMax');

	function setMaxSliderFromInput(id, val) {
		for(var i = 0; i < sliders.length; i++) {
			if(sliders[i].input.id === id) {
				if(sliders[i].options.max >= Number(val) && sliders[i].options.min <= Number(val)) {
					sliders[i].update({from: sliders[i].old_from, to: val});
					setFilter({from: sliders[i].old_from, to: val}, {id: id});
				} else {
					sliders[i].update({from: sliders[i].old_from, to: sliders[i].options.max});
					setFilter({from: sliders[i].old_from, to: sliders[i].options.max}, {id: id});
				}
				break;
			}
		}
	};

	maxInputs.forEach(function(input) {
		input.addEventListener('keyup', function(e) {
			setMaxSliderFromInput($(this).siblings('.range-init')[0].id, e.target.value);
		});
	});


})();