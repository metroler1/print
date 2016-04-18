@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::open(array('method' => 'POST', 'action' => array('CheckController@store'))) !!}
            <div class="form-group">
                {!! Form::label('Мастер') !!}
                {!! Form::text('master') !!}
                {!! Form::submit('add', ['id' => 'bill_addAttr']) !!}
            </div>

            <div class="form-group">
                {!! Form::text('catridge_model') !!}
                {!! Form::text('price') !!}
            </div>

            <div class="form-group">
                {!! Form::submit('ok') !!}
            </div>


        {!! Form::close() !!}
    </div>
@endsection()