@extends('backend.layouts.app')

@section('content')
@include('errors.list')

    <div class="panel-body">
        <!-- Display Validation Errors -->
        {{--@include('common.errors')--}}
        <div class="row">
            <diw class="col-md-6">
                <form action="/manager/printer" method="POST" class="form-horizontal">
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
                                    <option>{{$manifacture->manifacture}}</option>
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
                                @foreach($printer as $printers)
                                    <option>{{$printers->type}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="place" class="col-sm-3 control-label">Местонахождение</label>

                        <div class="col-sm-6">
                            <select name="place" id="place" class="form-control">
                                @foreach($places as $place)
                                    <option>{{$place->name_place . '->' . $place->end_pointer}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="catridge_has" class="col-sm-3 control-label">Установленный катридж</label>

                        <div class="col-sm-6">
                            <select name="catridge_has" id="catridge_has" class="form-control">

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
            </diw>
        </div>
    </div>


@endsection