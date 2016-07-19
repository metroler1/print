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

        {!! Form::close() !!}
    </div>
@endsection()

@section('scripts')
    <script src="/../js/check.js"></script>
@endsection