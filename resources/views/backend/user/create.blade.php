@extends('backend.layouts.app')

@section('content')
    @include('errors.list')

    <div class="panel-body">
        <!-- Display Validation Errors -->
        {{--@include('common.errors')--}}
        <div class="row">
            <div class="col-md-6">
                {!! Form::open(array('action' => array('Backend\UserController@store'), 'method' => 'post', 'class' => 'form-horizontal')) !!}

                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Имя</label>
                    <div class="col-sm-6">
                        {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">email</label>
                    <div class="col-sm-6">
                        {!! Form::text('email', null, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="current_id" class="col-sm-3 control-label">пароль</label>
                    <div class="col-sm-6">
                        {!! Form::password('password', ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        {!! Form::submit('создать', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>


@endsection