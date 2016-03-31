@extends('layouts.app')

@section('content')

    {!! Form::model($printeres, ['method' => 'patch', 'action' => ['PrinterController@update', $printeres->id]]) !!}
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
                {!! Form::label('catridge_has', 'Установленный катридж') !!}
                {!! Form::text('catridge_has', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('master', 'Мастер') !!}
                {!! Form::text('master', 'fdsf', ['class' => 'form-control']) !!}
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