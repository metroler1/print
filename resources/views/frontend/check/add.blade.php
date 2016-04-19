@extends('layouts.app')

@section('content')
    <div class="container">
        @include('errors.list')

        {!! Form::open(array('method' => 'POST', 'action' => array('CheckController@store'))) !!}
            <div class="form-group">
                {!! Form::label('Мастер') !!}
                {!! Form::text('master', null, ['class' => 'master', 'placeholder' => 'Имя мастера']) !!}
                {!! Form::text('influence', time(), ['class' => 'influence', 'hidden']) !!}
                {!! Form::submit('add', ['id' => 'bill_addAttr']) !!}
            </div>

            <div class="form-group">
                {!! Form::text('catridge_model', null, ['class' => 'catridge_model', 'placeholder' => 'Модель катриджа']) !!}
                {!! Form::text('price', null, ['class' => 'price', 'placeholder' => 'Цена']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('ok') !!}
            </div>


        {!! Form::close() !!}
    </div>
@endsection()