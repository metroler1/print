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
                @foreach($data as $key => $record)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $record->master_name }}</td>
                        <td>
                            <a href="{{ $record->id }}" type="button" data-toggle="modal" data-target="#editModal"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="{{ $record->id }}" type="button" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-remove-circle"></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

        <!-- Modal delete-->
        @include('backend.master._delete')

        <div class="col-md-1">
            <a href="" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#create-type"><i class="glyphicon glyphicon-plus"></i></a>
        </div>

    </div>

    <!-- Modal create-->
    @include('backend.master._create')

            <!-- Modal edit -->
    @include('backend.master._edit')
@endsection