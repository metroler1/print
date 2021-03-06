@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="btn-group index_button">
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Владимир <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li>@include('includes.catridge.form._fromMaster', ['master' => 'Володя', 'flag' => 0])</li>
                <li role="separator" class="divider"></li>
                <li>@include('includes.catridge.form._toMaster', ['master' => 'Володя', 'flag' => 1])</li>
            </ul>
        </div>
        <div class="btn-group index_button">
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Максим <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li>@include('includes.catridge.form._fromMaster', ['master' => 'Максим', 'flag' => 0])</li>
                <li role="separator" class="divider"></li>
                <li>@include('includes.catridge.form._toMaster', ['master' => 'Максим', 'flag' => 1])</li>
            </ul>
        </div>

        <div class="btn-group index_button pull-right">
            <a href="check"><button type="button" class="btn btn-success">Счета</button></a>
        </div>
    </div>

    {{--<table id="table_id" class="table table-hover" id="tableShow">--}}
    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <td class="title">#</td>
            <td class="title">Инв. Номер</td>
            {{--<td class="title">--}}
            {{--<div class="btn-group">--}}
            {{--<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
            {{--Инв. Номер <span class="caret"></span>--}}
            {{--</button>--}}
            {{--@include('frontend.catridge._sort', ['sortType' => 'current_id'])--}}
            {{--</div>--}}
            {{--</td>--}}
            <td class="title">Имя</td> {{--manifacture + model--}}
            <td class="title">Тип</td>
            {{--<td class="title">--}}
                {{--<div class="btn-group">--}}
                    {{--<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--Тип <span class="caret"></span>--}}
                    {{--</button>--}}
                    {{--@include('frontend.catridge._sort', ['sortType' => 'type'])--}}
                {{--</div>--}}
            {{--</td>--}}
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
                <td>{{ $catridge->manifacture }} ({{  $catridge->model }})</td>
                <td>{{ $catridge->type }}</td>
                <td>{{ $catridge->location }}</td>
                <td>{{ $catridge->master_name }}</td>
                <td>{{ $catridge->auxiliary }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@section('scripts')
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
@endsection