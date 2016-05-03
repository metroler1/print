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

		var master = $('.master').val();
		var influence = $('.influence').val();
		var catridge_current_id = $('.catridge_current_id').val();
		var catridge_model = $('.catridge_model').last().val();
		var price = $('.price').last().val();
		var type_of_repair = $('.type_of_repair').last().val();
		$.ajax({
			type: "POST",
			url: '/catridge/check/add',
			headers: {
				'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
			},
			data: {master: master, influence: influence, catridge_current_id: catridge_current_id, type_of_repair: type_of_repair, catridge_model: catridge_model, price: price}

		});


		var catridgeModelName = 'catridge_model';

		$('form').append('<div class="form-group form-inline">' +
                        '<select class="type_of_repair form-control" name="type_of_repair"<option value=""></option><option value="refil">Запрвка</option><option value="recover">Востоновление</option><option value="repair">Ремонт</option></select>' +
						'<input class="catridge_current_id form-control"' +
						'name="catridge_current_id"' +
						'type="text" placeholder="Инв. номер">' +
						' ' +
						'<input name="price" class="price form-control" type="text" placeholder="Цена">' +
						'<input class="catridge_model form-control"' +
						'name="catridge_model"' +
						'type="text" placeholder="Модель катриджа">' +
						'</div>');

	});






})();

$('document').ready(function () {

    var catridges_bills_counts =0;
    $('.report td.price').each(function() {
        catridges_bills_counts += parseFloat($(this).text());
    });
    $('#cost_statistiks').append('<h3> сумма: ' + catridges_bills_counts + '</h3>');


    var paper_counts =0;
    $('.report td.counts').each(function() {
        paper_counts += parseFloat($(this).text());
    });
    $('#paper_statistiks').append('<h3> сумма: ' + paper_counts + '</h3>');


});


