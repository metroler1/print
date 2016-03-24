@extends('layouts.app')

@section('content')
    <table class="table table-hover" id="tableShow">
        <tr>
            <td class="title">#</td>
            <td class="title">Инв. Номер</td>
            <td class="title">Имя</td> {{--manifacture + model--}}
            <td class="title">Тип</td>
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
                <td>{{ $printers->current_id }}</td>
                <td>{{ $printers->manifacture }}</td>
                <td>{{ $printers->type }}</td>
                <td>{{ $printers->place }}</td>
                <td>{{ $printers->catridge_has }}</td>
                <td>{{ $printers->master }}</td>
                <td>{{ $printers->auxiliary }}</td>
            </tr>
        @endforeach
    </table>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


@endsection
@include('includes.table')