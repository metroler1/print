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

// получаем список выполняемых работ мастерами
	var getListTypeOfRepair = function(){

// получаем данные из сервера
		$.ajax({
			type: "PATCH",		
			url: "/cartridge/check/add",
	        cache: false,
	        headers: {
				'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
			},
	        success: function(response){ 
	            console.log($(response).first());
	            
	        }
		});		
		
	}

	getListTypeOfRepair();

	$('#sendAjaxData').bind('click',  function(e) {
		e.preventDefault();		
		var arr_type_of_repair = new Array();
		var arr_catridge_current_id = new Array();
		var arr_price = new Array();
		var arr_catridge_model = new Array();

		var i = 0;

		var influence = $('.influence').val();
		var master = $('.master').val();

		$('.type_of_repair').each(function (i) {
    	    arr_type_of_repair[i] = $(this).val();

    	});

		$('.catridge_current_id').each(function (i) {
    	    arr_catridge_current_id[i] = $(this).val();

    	});

    	$('.price').each(function (i) {
    	    arr_price[i] = $(this).val();

    	});    	

    	$('.catridge_model').each(function (i) {
    	    arr_catridge_model[i] = $(this).val();


    	});    	    	

    	while (i < arr_price.length)
            {
                
                var type_of_repair = arr_type_of_repair[i];
                var catridge_current_id = arr_catridge_current_id[i];
                var price = arr_price[i];
                var catridge_model = arr_catridge_model[i];
                console.log(master)	

                $.ajax({
                        type: "POST",
                        url: '/cartridge/check/add',
                        headers: {
                            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {influence: influence, master: master, type_of_repair: type_of_repair, catridge_current_id: catridge_current_id, price: price, catridge_model: catridge_model},
                        success: function () {
                            console.log('data was successfully send')
                        },
                        error: function (msg) {
                        	console.log(msg)
                        }
                });

                i++;

            }

        //после
        // window.location.reload();



	});




//	add new fields in bills

	$('#bill_addAttr').bind('click', function (e) {
		e.preventDefault();
		// собираем данные из формы и отправляем аяксом

		// var master = $('.master').val();
		// var influence = $('.influence').val();
		// var catridge_current_id = $('.catridge_current_id').val();
		// var catridge_model = $('.catridge_model').last().val();
		// var price = $('.price').last().val();
		// var type_of_repair = $('.type_of_repair').last().val();
		// $.ajax({
		// 	type: "POST",
		// 	url: '/cartridge/check/add',
		// 	headers: {
		// 		'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
		// 	},
		// 	data: {master: master, influence: influence, catridge_current_id: catridge_current_id, type_of_repair: type_of_repair, catridge_model: catridge_model, price: price}

		// });


		// var catridgeModelName = 'catridge_model';

		// форма для создания счета

		$('form').append('<div class="form-group form-inline">' +
                        '<select class="type_of_repair form-control" name="type_of_repair"<option value=""></option><option value="refil">Запрвка</option><option value="recover">Востоновление</option><option value="repair">Ремонт</option><option value="roll">Замена фотобрарабана</option></select>' +
						'<input class="catridge_current_id form-control"' +
						'name="catridge_current_id"' +

						'type="text" placeholder="Инв. номер" value="20410">' +

						' ' +
						'<input name="price" class="price form-control" type="text" placeholder="Цена">' +
						'<input class="catridge_model form-control"' +
						'name="catridge_model"' +
						'type="text" placeholder="Модель катриджа">' +
						'</div>');

	});



})();

// В статистике подбиваем сумму 
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


