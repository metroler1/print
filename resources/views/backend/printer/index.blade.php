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
            <table class="table table-striped table-bordered" id="tableShow">
                <thead>
                <tr>
                    <td class="title">#</td>
                    <td class="title">Инв. Номер</td>
                    <td class="title">Имя</td> {{--manifacture + model--}}
                    {{--<td class="title">Модель</td>--}}
                    <td class="title">Тип</td>
                    <td class="title">Офис/Кабинет/Сотрудник</td>
                    <td class="title">ip</td>
                    <td class="title">Мастер</td>
                    <td class="title">Примечание</td>
                    <td class="title">Действие</td>

                </tr>
                </thead>
                <tbody>
                @foreach($printer as $key => $printers)
                    <tr>
                        <td>
                            {{ ++$key }}
                        </td>
                        <td><a href="{{ action('PrinterController@show', [$printers->id]) }}">{{ $printers->current_id }}</a></td>
                        <td>{{ $printers->manifacture . ' (' . $printers->model . ')'}}</td>
                        {{--<td>{{ $printers->model }}</td>--}}
                        <td>{{ $printers->type }}</td>
                        <td>{{ $printers->place }}/
                            {{--{{$printers->room}}/--}}
                            {{$printers->person}}
                        </td>
                        <td>{{ $printers->ip }}</td>
                        <td>{{ $printers->master_name }}</td>
                        <td>{{ $printers->auxiliary }}</td>
                        <td>
                            <a href={{ 'printer/' . $printers->id . '/edit' }}><i class="glyphicon glyphicon-edit"></i></a>
                        </td>
                    </tr>
                @endforeach
                <tbody>
            </table>
        </div>
        <div class="col-md-1">
            <div class="btn-group">
                <a href="printer/create" type="button" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-plus"></i></a>
            </div>
            <div class="btn-group">
                <a href="printer/models" type="button" class="btn btn-primary">Модели</a>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $(document).ready( function () {
            $('#tableShow').DataTable();
        } );
    </script>
@endsection