@extends('layouts.app')

@section('content')
    <table class="table table-hover" id="tableShow">
        <tr>
            <td class="title">#</td>
            <td class="title">
                <div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Инв. Номер <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="{{ action('PrinterController@index', ['sort' => 'asc']) }}">по убыванию</a></li>
                        <li><a href="{{ action('PrinterController@index', ['sort' => 'desc']) }}">по возростанию</a></li>
                    </ul>
                </div>
            </td>
            <td class="title">Имя</td> {{--manifacture + model--}}
            <td class="title">
                <div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Тип <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="{{ action('PrinterController@index', ['sort' => 'asc']) }}">по убыванию</a></li>
                        <li><a href="{{ action('PrinterController@index', ['sort' => 'desc']) }}">по возростанию</a></li>
                    </ul>
                </div>
            </td>
            <td class="title">Офис/Кабинет/Сотрудник</td>
            <td class="title">Уст катридж</td>
            <td class="title">Мастер</td>
            <td class="title">Примечание</td>

        </tr>
        @foreach($printer as $key => $printers)
            <tr>
                <td>
                   {{ ++$key }}
                </td>
                <td><a href="{{ action('PrinterController@show', [$printers->id]) }}">{{ $printers->current_id }}</a></td>
                <td>{{ $printers->manifacture }}</td>
                <td>{{ $printers->type }}</td>
                <td>{{ $printers->place }}</td>
                <td>{{ $printers->catridge_has }}</td>
                <td>{{ $printers->master }}</td>
                <td>{{ $printers->auxiliary }}</td>
            </tr>
        @endforeach
    </table>
@endsection
{{--@include('includes.table')--}}
@include('includes.modalForMoveObj')
