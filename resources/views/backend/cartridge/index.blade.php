@extends('backend.layouts.app')

@section('styles')
    <style>
        .btn-group{
            margin-bottom: 65%;
            display: block;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 right-button-line">
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <td class="title">#</td>
                    <td class="title">Инв. Номер</td>
                    <td class="title">Имя</td> {{--manifacture + model--}}
                    <td class="title">Тип</td>
                    <td class="title">Местоположения</td>
                    <td class="title">Мастер</td>
                    <td class="title">Примечание</td>

                </tr>
                <thead>
                <tbody>
                @foreach($catridges as $key => $catridge)
                    <tr>
                        <td>
                            {{ ++$key }}
                        </td>
                        <td><a href="{{ action('CatridgeController@show', [$catridge->id]) }}">{{ $catridge->current_id }}</a></td>
                        <td>{{ $catridge->manifacture}} ({{  $catridge->model }})</td>
                        <td>{{ $catridge->type }}</td>
                        <td>{{ $catridge->location }}</td>
                        <td>{{ $catridge->master }}</td>
                        <td>{{ $catridge->auxiliary }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-1">
            <div class="btn-group">
                <a href="cartridge/create" type="button" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-plus"></i></a>
            </div>
            <div class="btn-group">
                <a href="cartridge/service" type="button" class="btn btn-primary">Службы</a>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
@endsection