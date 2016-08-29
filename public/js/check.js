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
                var catridge_model = "";
                var manifacture = "";

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

                for(var i = 0; i < response[2].length; i++)
                {
                    catridge_model +=  '<li><a href="">' + response[2][i] + '</a></li>';
                }

                for (var i = 0; i < response[3].length; i++)
                {
                    manifacture +=  '<option value="'+ response[3][i] +'">' + response[3][i] + '</option>';
                }

                //рендим форму для заполнения счета
                $.when($('form').append(
                    '<div class="form-group form-inline this">' +
                        '<select class="type_of_repair form-control" name="type_of_repair"<option value=""></option>' + cartridge_service + '</select>' +
                        ' ' +
                        '<input class="catridge_current_id form-control" name="catridge_current_id" type="text" placeholder="Инв. номер" value="">' +
                        ' ' +
                        '<input name="price" class="price form-control" type="text" placeholder="Цена">' +
                        ' ' +
                        '<select class="manifacture form-control" name="manifacture" <option value=""></option>' + manifacture +'</select>' +
                        ' ' +
                        '<div class="btn-group" style="display: inline-block">' +
                            '<input class="catridge_model form-control" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' +
                                'name="catridge_model" type="text" placeholder="Модель катриджа">' +
                                '<ul id="check_autocomplete" class="dropdown-menu" aria-labelledby="dLabel">' + catridge_model + '</ul>' +
                        '</div>' +
                        ' ' +
                        '<select class="check_office form-control" name="office" <option value=""></option>' + office_name +'</select>' +
                        '<a id="" class="remove-button"><i class="glyphicon glyphicon-remove-circle"></i></a>' +
                    '</div>'
                )).done(function () {
                    console.log(catridge_model);

                    
                });
                //для удаление одной формы
                $('.remove-button:last').click(function (e) {
                    $(this).parent().remove();
                });


                // по клику из выпадающего списка input получаем значение
                var getUl = $('ul#check_autocomplete>li>a');
                var inputAuto = $('input.catridge_model:last');
                getUl.click(function (e) {
                    e.preventDefault();
                    var that = $(this).parent().parent().parent().find('input');
                    console.log(that);
                    var thisModel  = $(this).text();
                    inputAuto.val(thisModel);
                });


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
        var arr_manifacture = new Array();

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

        $('.check_office').each(function (i) {
            arr_office[i] = $(this).val();
        });

        $('.manifacture').each(function (i) {
            arr_manifacture[i] = $(this).val();
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
                var manifact = arr_manifacture[i];
                var catridge_model = arr_catridge_model[i];
                var office = arr_office[i];


                $.ajax({
                    type: "POST",
                    url: '/cartridge/check/add',
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    // async: false,
                    data: {
                        influence: influence,
                        master: master,
                        type_of_repair: type_of_repair,
                        catridge_current_id: catridge_current_id,
                        price: price,
                        manifact: manifact,
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
                        console.log(msg);
                        console.log(manifact);
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

        var input = $('input.catridge_model:last').val();

        //проверяем чтобы поле модель не было пустым при добавлении новой
        if (input.length > 0)
        {
            // форма для создания счета
            getListTypeOfRepair();
        }else{
            alert('Поле "Модель картриджа" должно быть заполнено ');
        }

    });

})();