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


