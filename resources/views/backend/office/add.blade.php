@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Офисные фичи</h1>
        {!! Form::open(array('method' => 'POST','action' => 'OfficeController@add', 'enctype' => 'multipart/form-data')) !!}
            <div class="form-group form-inline">
                {!! Form::text('office_name', null, ['class' => 'office_name form-control', 'placeholder' => 'Названия офиса']) !!}
                {!! Form::file('image_path', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('ok', ['class' => 'btn btn-default']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection