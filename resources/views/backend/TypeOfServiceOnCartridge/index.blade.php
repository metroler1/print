@extends('backend.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-5">
            <table class="table table-striped">
                <tr>
                    <td>#</td>
                    <td id="this">Тип</td>
                    <td>Действия</td>
                </tr>
                @foreach($data as $key => $record)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $record->name }}</td>
                        <td>
                            <a href="" type="button" data-toggle="modal" data-target="#editModal"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="{{ $record->id }}" type="button" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-remove-circle"></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

        <div class="col-md-1">
            <a href="cartridge/service" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#create-type"><i class="glyphicon glyphicon-plus"></i></a>
        </div>

    </div>

    {{--Modal create--}}
    @include('backend.TypeOfServiceOnCartridge._create')
@endsection
