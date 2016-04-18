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
		var i = 0;

		var catridgeModelName = 'catridge_model';
		$('form').append('<div class="form-group">' +
						'<input name="' + catridgeModelName + e.timeStamp +
						'" type="text" placeholder="Модель катриджа">' +
						' ' +
						'<input name="price" type="text">' +
						'</div>');

		var dddd;
		dddd.index(catridgeModelName);
		alert(dddd);
	});




})();


