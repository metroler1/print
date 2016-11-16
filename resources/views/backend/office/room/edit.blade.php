@extends('backend.layouts.app')
@section('content')
    <h1>It's work</h1>
    {!! Form::open(array('method' => 'POST', 'enctype' => 'multipart/form-data')) !!}
    <div class="form-group form-inline">
        {!! Form::file('image_path', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Загрузить', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection