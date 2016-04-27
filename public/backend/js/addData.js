var app = (function(){

    //	add new fields in bills

    $('#paper_addAttr').bind('click', function (e) {
        e.preventDefault();

        var device_name = $('.device_name').last().val();
        var number_of = $('.number_of').last().val();
        $.ajax({
            type: "POST",
            url: '/manager/papers/add',
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            data: {device_name: device_name, number_of: number_of}
            // success: function( msg ) {
            // 	$("form").append("<div>"+msg+"</div>");
            // }
        });

        $('form').append('<div class="form-group form-inline">' +
            '<input class="device_name form-control"' +
            'name="device_name"' +
            'type="text" placeholder="Машина">' +
            ' ' +
            '<input name="number_of" class="number_of form-control" type="text" placeholder="Колличество">' +
            '</div>');

    });
    
})();


