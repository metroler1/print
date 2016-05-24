@extends('backend.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-5">
            <table class="table table-striped">
                <tr>
                    <td>#</td>
                    <td>Тип</td>
                    <td>Действия</td>
                </tr>
                @foreach($data as $key => $record)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $record->type }}</td>
                        <td>
                            <a href="" type="button" data-toggle="modal" data-target="#editModal"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="" type="button" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-remove-circle"></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

        <!-- Modal delete-->
        @include('backend.type._delete')

        <div class="col-md-1">
            <a href="" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#create-type"><i class="glyphicon glyphicon-plus"></i></a>
        </div>

    </div>

    <!-- Modal create-->
    @include('backend.type._create')

    <!-- Modal edit -->
    @include('backend.type._edit')
@endsection