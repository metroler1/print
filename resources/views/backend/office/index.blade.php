@extends('backend.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-5">
            <table class="table table-striped">
                <tr>
                    <td>#</td>
                    <td>Мастер</td>
                    <td>Действия</td>
                </tr>
                @foreach($offices as $key => $office)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td><a href="{{ action('Backend\OfficeController@show', [$office->id] ) . '/rooms' }}">{{ $office->office_name }}</a></td>
                        <td>
                            <a href="office/{{$office->id}}/edit" type="button"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="" type="button"><i class="glyphicon glyphicon-remove-circle"></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="col-md-1">
            <a href="" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#create-type"><i class="glyphicon glyphicon-plus"></i></a>
        </div>
    </div>
    @include('backend.office._create')
@endsection