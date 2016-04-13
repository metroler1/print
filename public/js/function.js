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



})();


