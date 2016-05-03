var app = (function(){

    //	add new fields in bills

    $('#paper_addAttr').bind('click', function (e) {
        e.preventDefault();
        var arr_number_of = new Array();
        var arr_device_name = new Array();

        var i = 0;

        //wrote data to array from machine textarea
            $('.device_name').each(function (i) {
                arr_device_name[i] = $(this).val();

            });
            //wrote data to array from count textarea
            $('.number_of').each(function (i) {
                arr_number_of[i] = $(this).val();
            });
        // just timestamp in unix format
            var influence = $('.influence').val();

            // for (var i = 0; i < arr_number_of.length; i++)
            while (i < arr_number_of.length)
            {
                var influence = $('.influence').val();
                var number_of = arr_number_of[i];
                var device_name = arr_device_name[i];

                $.ajax({
                        type: "POST",
                        url: '/manager/papers/add',
                        headers: {
                            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {device_name: device_name, number_of: number_of, influence: influence},
                        success: function () {
                            console.log('data was successfully send')
                        }
                });

                i++;

            }

        //после
        window.location.reload();




        // $('form').append('<div class="form-group form-inline">' +
        //     '<input class="device_name form-control"' +
        //     'name="device_name"' +
        //     'type="text" placeholder="Машина">' +
        //     ' ' +
        //     '<input name="number_of" class="number_of form-control" type="text" placeholder="Колличество">' +
        //     '</div>');

    });

})();


