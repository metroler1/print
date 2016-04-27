@extends('backend.layouts.app')

@section('content')
    @include('backend.include.right_menu')


        @include('errors.list')

        {!! Form::open(array('method' => 'POST', 'action' => array('Backend\PaperCountersController@store'))) !!}
        <div class="form-group form-inline">

            {!! Form::text('influence', time(), ['class' => 'influence', 'hidden']) !!}
            {!! Form::submit('add', ['id' => 'paper_addAttr', 'class' => 'btn btn-primary']) !!}
            {!! Form::submit('ok', ['class' => 'btn btn-success']) !!}
        </div>

        <div class="form-group form-inline">
            {!! Form::text('device_name', null, ['class' => 'device_name form-control', 'placeholder' => 'Машина']) !!}
            {!! Form::text('number_of', null, ['class' => 'number_of form-control', 'placeholder' => 'Колличество']) !!}
        </div>

        {!! Form::close() !!}

@endsection

@section('scripts')
    <script src="/../backend/js/addData.js"></script>
@endsection