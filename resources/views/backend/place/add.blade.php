@extends('layouts.app')

@section('content')
    <div class="panel-body">
        <!-- Display Validation Errors -->
        {{--@include('common.errors')--}}

        <!-- New Task Form -->
        <form action="/manager/place/add" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <div class="col-sm-6">
                    <input type="text" name="name_place" id="name_place" class="form-control" placeholder="Первый уровень расположености">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-6">
                    <input type="text" name="end_pointer" id="end_pointer" class="form-control" placeholder="Второй уровень расположености">
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