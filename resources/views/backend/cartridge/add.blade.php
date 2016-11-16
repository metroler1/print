@extends('backend.layouts.app')

@section('content')
@include('errors.list')

<div class="panel-body">
    <div class="row">
        <div class="col-md-6">
            {!! Form::open(array('action' => array('Backend\CartridgeController@store'), 'method' => 'post', 'class' => 'form-horizontal')) !!}

            <div class="form-group">
                <label for="current_id" class="col-sm-3 control-label">Инвертарный номер</label>
                <div class="col-sm-6">
                    {!! Form::text('current_id', null, ['class' => 'form-control', 'id' => 'current_id', 'required']) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="place" class="col-sm-3 control-label">Производитель</label>
                <div class="col-sm-6">
                    {!! Form::select('manifacture_id', $manifactures, null, ['class' => 'form-control master']) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="model" class="col-sm-3 control-label">Модель</label>
                <div class="col-sm-6">
                    {{--{!! Form::text('model', null, ['class' => 'form-control', 'id' => 'model', 'required']) !!}--}}
                    {!! Form::select('model', $cartModel, null, ['class' => 'form-control master']) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="place" class="col-sm-3 control-label">Тип</label>
                <div class="col-sm-6">
                    {!! Form::select('types_id', $type, null, ['class' => 'form-control office']) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="location" class="col-sm-3 control-label">Офис</label>
                <div class="col-sm-6">
                    {!! Form::select('location', $office_name, null, ['class' => 'form-control office']) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="place" class="col-sm-3 control-label">Мастер</label>
                <div class="col-sm-6">
                    {!! Form::select('master_id', $masters, null, ['class' => 'form-control master']) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="auxiliary" class="col-sm-3 control-label">Примечание</label>
                <div class="col-sm-6">
                    {!! Form::textarea('auxiliary', null, ['class' => 'form-control', 'id' => 'auxiliary']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    {!! Form::submit('add', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
</div>


@endsection