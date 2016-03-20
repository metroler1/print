@extends('layouts.app')

@section('content')
    <div class="panel-body">
        <!-- Display Validation Errors -->
        {{--@include('common.errors')--}}

        <!-- New Task Form -->
        <form action="/manager/addmanifacture" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <div class="col-sm-6">
                    <input type="text" name="manifacture" id="manifacture" class="form-control" placeholder="Добавить производителя">
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