@extends('layouts.app')

@section('content')

@include('errors.list')

    {!! Form::model($printeres, ['method' => 'patch', 'action' => ['PrinterController@update', $printeres->id]]) !!}
    <div class="container">
        <div class="col-md-5">
            @include('partials.printeres.form')
            <div class="form-group">
                {!! Form::submit('Add', ['class' => 'btn btn-primary form-control']) !!}
            </div>


        </div>
    </div>



    {!! Form::close() !!}
@endsection