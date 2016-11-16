@extends('backend.layouts.app')
@section('styles')
    <style>
        .img-thumbnail {
            height: 75px;
            border: 1px solid #000;
            margin: 10px 5px 0 0;
        }
        img{
            height: 150px;
            border: 1px solid #000;
            margin: 10px 5px 0 0;
        }
    </style>
@endsection
@section('content')
    {{--<h1>It's work</h1>--}}
    {{--{!! Form::open(array('method' => 'POST', 'enctype' => 'multipart/form-data')) !!}--}}
    {{--<div class="form-group form-inline">--}}
        {{--{!! Form::file('image_path', ['class' => 'form-control', 'multiple' => true]) !!}--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--{!! Form::submit('Загрузить', ['class' => 'btn btn-primary']) !!}--}}
    {{--</div>--}}
    {{--{!! Form::close() !!}--}}
    <div class="container">

        <div class="row">
            {{--{!! Form::model(array('method' => 'patch', action'enctype' => 'multipart/form-data')) !!}--}}
            {!! Form::model($office, ['method' => 'patch', 'enctype' => 'multipart/form-data', 'accept-charset' => 'utf-8', 'action' => ['Backend\OfficeController@update', $office->id]]) !!}
                <label>Мультизагрузка файлов:</label>
                <input type="file" id="fileMulti" name="fileMulti[]" multiple />
                <div>
                    <span id="outputMulti"></span>
                </div>
                {!! Form::submit('Загрузить', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>

        <tbale>
            @foreach($officeImg as $key => $value)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td><img src="{{ $value->path }}" alt=""></td>
                </tr>
            @endforeach
        </tbale>

    </div>
@endsection
@section('scripts')
    <script>
//        function handleFileSelectSingle(evt) {
//            var file = evt.target.files; // FileList object
//
//            var f = file[0]
//
//            // Only process image files.
//            if (!f.type.match('image.*')) {
//                alert("Только изображения....");
//            }
//
//            var reader = new FileReader();
//
//            // Closure to capture the file information.
//            reader.onload = (function(theFile) {
//                return function(e) {
//                    // Render thumbnail.
//                    var span = document.createElement('span');
//                    span.innerHTML = ['<img class="img-thumbnail" src="', e.target.result,
//                        '" title="', escape(theFile.name), '"/>'].join('');
//                    document.getElementById('output').innerHTML = "";
//                    document.getElementById('output').insertBefore(span, null);
//                };
//            })(f);
//
//            // Read in the image file as a data URL.
//            reader.readAsDataURL(f);
//        }


//        document.getElementById('file').addEventListener('change', handleFileSelectSingle, false);

        function handleFileSelectMulti(evt) {
            var files = evt.target.files; // FileList object
            document.getElementById('outputMulti').innerHTML = "";
            for (var i = 0, f; f = files[i]; i++) {

                // Only process image files.
                if (!f.type.match('image.*')) {
                    alert("Только изображения....");
                }

                var reader = new FileReader();

                // Closure to capture the file information.
                reader.onload = (function(theFile) {
                    return function(e) {
                        // Render thumbnail.
                        var span = document.createElement('span');
                        span.innerHTML = ['<img class="img-thumbnail" src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'].join('');
                        document.getElementById('outputMulti').insertBefore(span, null);
                    };
                })(f);

                // Read in the image file as a data URL.
                reader.readAsDataURL(f);
            }
        }

        document.getElementById('fileMulti').addEventListener('change', handleFileSelectMulti, false);

    </script>
@endsection