@extends('backend.layouts.app')

@section('styles')
    {{--<link rel="stylesheet" href="../../backend/css/style.css">--}}
    <link rel="stylesheet" href="../../backend/css/style.css">
@endsection

@section('content')

    <div class="container">
        <a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>

        <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ URL::to('/manager/papers/importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label for="printserver" class="col-sm-3 control-label">Производитель</label>
                <div class="col-sm-6">
                    {!! Form::select('printserver', $printserver, null, ['class' => 'form-control master']) !!}
                </div>
            </div>

            <input type="file" name="import_file" />
            <br/>
            <button class="btn btn-primary">Import File</button>
        </form>
    </div>
@endsection


@section('scripts')
    {{--<script src="/../backend/js/addData.js"></script>--}}
    <script>
        (function() {
            var dropzone = document.getElementById("dropzone");
            dropzone.ondragover = function() {
                this.className = 'dropzone dragover';
                this.innerHTML = 'Отпустите мышку';
                return false;
            };

            dropzone.ondragleave = function() {
                this.className = 'dropzone';
                this.innerHTML = 'Перетащите файлы сюда';
                return false;
            };

            dropzone.ondrop = function(e) {
                this.className = 'dropzone';
                this.innerHTML = 'Перетащите файлы сюда';
                e.preventDefault();
            };
        })();
    </script>
@endsection