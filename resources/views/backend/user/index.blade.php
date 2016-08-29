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
                @foreach($users as $key => $user)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{'users/' . $user->id . '/edit'}}" type="button"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="" type="button" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-remove-circle"></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>


        <div class="col-md-1">
            <a href="users/create" type="button" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-plus"></i></a>
        </div>

    </div>


@endsection
