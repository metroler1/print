var app = (function(){

    //инициализируем переменную для счетчика функции success в ajax
    var currentCount = 0;

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
                //Записываем ответ от сервера office_lists

                console.log(response);
                var office_name = "";
                var cartridge_service = "";
                for(var i = 0; i < response[0].length; i++)
                {
                    //спиоск офисов получаемых из сервера
                    office_name += '<option value="'+ response[0][i] +'">' + response[0][i] + '</option>';
                }
                for(var i = 0; i < response[1].length; i++)
                {
                    //список действий над картриджами
                    cartridge_service += '<option value="'+ response[1][i] +'">' + response[1][i] + '</option>';
                }
                //
                $('form').append(
                    '<div class="form-group form-inline">' +
                    '<select class="type_of_repair form-control" name="type_of_repair"<option value=""></option>' + cartridge_service + '</select>' +
                    '<input class="catridge_current_id form-control"' +
                    'name="catridge_current_id"' +
                    'type="text" placeholder="Инв. номер" value="20410">' +
                    ' ' +
                    '<input name="price" class="price form-control" type="text" placeholder="Цена">' +
                    '<input class="catridge_model form-control"' +
                    'name="catridge_model"' +
                    'type="text" placeholder="Модель катриджа">' +
                    '<select class="check_office form-control" name="office" <option value=""></option>' + office_name +'</select>' +
                    '</div>'
                );
            }
        });
    }

    console.log(getListTypeOfRepair());


    //создания счета
    $('#sendAjaxData').bind('click',  function(e) {
        e.preventDefault();
        var arr_type_of_repair = new Array();
        var arr_catridge_current_id = new Array();
        var arr_price = new Array();
        var arr_catridge_model = new Array();
        var arr_office = new Array();

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
            console.log(i);
        });

        $('.check_office').each(function (i) {
            arr_office[i] = $(this).val();
        });

        if (!influence)
        {
            alert('поле дата обязательно для заполнения');
        }else {
            while (i < arr_price.length)
            {

                var type_of_repair = arr_type_of_repair[i];
                var catridge_current_id = arr_catridge_current_id[i];
                var price = arr_price[i];
                var catridge_model = arr_catridge_model[i];
                var office = arr_office[i];

                $.ajax({
                    type: "POST",
                    url: '/cartridge/check/add',
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        influence: influence,
                        master: master,
                        type_of_repair: type_of_repair,
                        catridge_current_id: catridge_current_id,
                        price: price,
                        catridge_model: catridge_model,
                        office: office
                    },
                    success: function (data) {
                        currentCount++;
                        console.log(data.response);

                        if (i === currentCount)
                        {
                            //в случаем если счетчик success равен счетичку цикла делаем redirect на cartridge/check
                            var url = window.location.href;
                            console.log("Ура");
                            window.location.href = url.replace('/add', '');
                        }
                    },
                    error: function (msg) {
                        console.log(msg)
                    }
                });

                console.log(i);
                i++;

            }
        }

    });


//	add new fields in bills

    $('#bill_addAttr').bind('click', function (e) {
        e.preventDefault();

        // форма для создания счета
        getListTypeOfRepair();

    });

})();