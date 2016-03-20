@extends('layouts.app')

@section('content')
    <div class="panel-body">
        <!-- Display Validation Errors -->
        {{--@include('common.errors')--}}

        <!-- New Task Form -->
        <form action="/addcatridge" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="current_id" class="col-sm-3 control-label">Инвертарный номер</label>

                <div class="col-sm-6">
                    <input type="text" name="current_id" id="current_id" class="form-control" required="required">
                </div>
            </div>

            <div class="form-group">
                <label for="manifacture" class="col-sm-3 control-label">Производитель</label>

                <div class="col-sm-6">
                    <select type="text" name="manifacture" id="manifacture" class="form-control">
                        @foreach($manifactures as $manifacture)
                            <option>{{ $manifacture->manifacture }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="model" class="col-sm-3 control-label">Модель</label>

                <div class="col-sm-6">
                    <input name="model" id="model" class="form-control" required="required">
                </div>
            </div>

            <div class="form-group">
                <label for="type" class="col-sm-3 control-label">Тип</label>

                <div class="col-sm-6">
                    <select name="type" id="type" class="form-control">
                        @foreach($types as $type)
                            <option>{{$type->type}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="printer_has" class="col-sm-3 control-label">Утст. в принтере</label>

                <div class="col-sm-6">
                    <select name="printer_has" id="printer_has" class="form-control">

                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="master" class="col-sm-3 control-label">Мастер</label>

                <div class="col-sm-6">
                    <select name="master" id="master" class="form-control" >
                        @foreach($masters as $master)
                            <option>{{$master->master_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="auxiliary" class="col-sm-3 control-label">Примечание</label>

                <div class="col-sm-6">
                    <textarea name="auxiliary" id="auxiliary" class="form-control"></textarea>
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection