var app = (function(){
	catridgeList = $('select#CatridgeSelect.form-control');
	catridgeList.css({
		'display': 'none'
	});

	$('a.list-group-item.list-group-item-success').bind('click', function(e){
		e.preventDefault();
		var pressButtonValue = $(e.target).text();
		if (pressButtonValue != 'Принтер')
		{
			$('#transfer').val(pressButtonValue);
		}else
		{
			catridgeList.toggle();

			$(catridgeList).bind('click', function(e) {
				var catridgesElem = $(e.target).children();
			});
		}
	});

	$('select#CatridgeSelect>option').bind('click', function (e) {
		e.preventDefault();
		var clickOptionValue = $(e.target).val();

		$('#transfer').val(clickOptionValue);
	});

//	add new fields in bills

	$('#bill_addAttr').bind('click', function (e) {
		e.preventDefault();

		//$.ajaxSetup({
		//	headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
		//});

		var master = $('.master').val();
		var influence = $('.influence').val();
		var catridge_model = $('.catridge_model').last().val();
		var price = $('.price').last().val();
		$.ajax({
			type: "POST",
			url: '/catridge/check/add',
			headers: {
				'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
			},
			data: {master: master, influence: influence, catridge_model: catridge_model, price: price},
			success: function( msg ) {
				$("form").append("<div>"+msg+"</div>");
			}
		});


		var catridgeModelName = 'catridge_model';

		$('form').append('<div class="form-group">' +
						'<input class="catridge_model"' +
						'name="catridge_model"' +
						'type="text" placeholder="Модель катриджа">' +
						' ' +
						'<input name="price" type="text">' +
						'</div>');


	});




})();


