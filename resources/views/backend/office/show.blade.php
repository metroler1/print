@extends('backend.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-8">
            {!! Form::open(array('method' => 'POST', 'enctype' => 'multipart/form-data')) !!}
            <div class="form-group form-inline">
                {!! Form::file('image_path', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Загрузить', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-md-1">
            <a href={{ $office->id . '/edit' }} class="edit"><button type="button" class="btn btn-primary">Редактировать</button></a>
        </div>
    </div>
@endsection