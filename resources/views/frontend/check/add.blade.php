@extends('layouts.app')

@section('content')
    <div class="container">
        @include('errors.list')

        {!! Form::open(array('method' => 'POST', 'action' => array('CheckController@store'))) !!}
            <div class="form-group form-inline">
                {!! Form::label('Мастер') !!}
                {!! Form::select('master', $masters, null, ['class' => 'master form-control', 'placeholder' => 'Имя мастера']) !!}
               <!-- Form::text('influence', time(), ['class' => 'influence', 'hidden'])-->
                <div class="input-group date" data-provide="datepicker">
                    {!! Form::text('influence', null, ['class' => 'form-control influence', 'placeholder' => 'Дата счета']) !!}
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
                {!! Form::submit('add', ['id' => 'bill_addAttr', 'class' => 'btn btn-primary']) !!}
                {!! Form::submit('ok', ['class' => 'btn btn-success', 'id' => 'sendAjaxData']) !!}
            </div>

            {{--<div class="form-group form-inline">--}}
                {{--{!! Form::select('type_of_repair', ['refil' => 'Запрвка', 'recover' => 'Востановление', 'repair' => 'Ремонт', 'roll' => 'Замена фотобарабана'], null,  ['class' => 'type_of_repair form-control']) !!}--}}
                {{--{!! Form::text('catridge_current_id', 	20410, ['class' => 'catridge_current_id form-control', 'placeholder' => 'Инв. номер']) !!}--}}
                {{--{!! Form::text('price', null, ['class' => 'price form-control', 'placeholder' => 'Цена']) !!}--}}
                {{--{!! Form::text('catridge_model', null, ['class' => 'catridge_model form-control', 'placeholder' => 'Модель катриджа']) !!}--}}
                {{--{!! Form::select('office', $office_name, null, ['class' => 'check_office form-control']) !!}--}}
            {{--</div>--}}





        {!! Form::close() !!}
    </div>
@endsection()

@section('scripts')
    <script src="/../js/check.js"></script>
@endsection