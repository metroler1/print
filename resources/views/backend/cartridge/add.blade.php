@extends('backend.layouts.app')

@section('content')
    <div class="panel-body">
        <!-- Display Validation Errors -->
        {{--@include('common.errors')--}}

        <div class="row">
            <div class="col-md-6">
                <form action="/manager/cartridge" method="POST" class="form-horizontal">
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
                        <label for="location" class="col-sm-3 control-label">Местонахождение</label>

                        <div class="col-sm-6">
                            <input name="location" id="location" class="form-control" required="required">
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
        </div>
        <!-- New Task Form -->

    </div>

@endsection