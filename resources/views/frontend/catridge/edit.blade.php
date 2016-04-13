@extends('layouts.app')

@section('content')

@include('errors.list')

    {!! Form::model($catridges, ['method' => 'patch', 'action' => ['CatridgeController@update', $catridges->id]]) !!}
    <div class="container">
        <div class="col-md-5">
            <div class="form-group">
                {!! Form::label('current_id', 'Инвентарный номер') !!}
                {!! Form::text('current_id', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('manifacture', 'Производитель') !!}
                {!! Form::text('manifacture', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('modal', 'Модель') !!}
                {!! Form::text('modal', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('type', 'Тип') !!}
                {!! Form::text('type', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('place', 'Местонахождения') !!}
                {!! Form::text('place', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('location', 'Установленный катридж') !!}
                {!! Form::text('location', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('master', 'Мастер') !!}
                {!! Form::text('master', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('auxiliary', 'Примечание') !!}
                {!! Form::text('auxiliary', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Add', ['class' => 'btn btn-primary form-control']) !!}
            </div>


        </div>
    </div>



    {!! Form::close() !!}
@endsection