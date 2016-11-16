@extends('backend.layouts.app')

@section('content')

@include('errors.list')

<div class="panel-body">
    <div class="row">
        <div class="col-md-6">
            {!! Form::model($printeres, ['method' => 'patch', 'action' => ['Backend\PrinterController@update', $printeres->id], 'class' => 'form-horizontal']) !!}

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
                    {!! Form::select('model', $printModel, null, ['class' => 'form-control master']) !!}
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
                    {!! Form::select('location', $office_name, null, ['class' => 'form-control location']) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="ip" class="col-sm-3 control-label">ip</label>
                <div class="col-sm-6">
                    {!! Form::text('ip', null, ['class' => 'form-control', 'id' => 'model', 'required']) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="master" class="col-sm-3 control-label">Мастер</label>
                <div class="col-sm-6">
                    {!! Form::select('master', $masters, null, ['class' => 'form-control master']) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="room" class="col-sm-3 control-label">Комната</label>
                <div class="col-sm-6">
                    {!! Form::select('room', $printer, null, ['class' => 'form-control master']) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="person" class="col-sm-3 control-label">Сотрудник</label>
                <div class="col-sm-6">
                    {{--{!! Form::select('person', $person, null, ['class' => 'form-control master']) !!}--}}
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
                    {!! Form::submit('edit', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>

            {!! Form::close() !!}


        </div>
    </div>
</div>
@endsection