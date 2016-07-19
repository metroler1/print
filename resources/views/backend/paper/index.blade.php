@extends('backend.layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <td class="title">#</td>
                    <td class="">имя пользователя</td>
                    <td class="">кол-во страниц</td>
                    <td class="">кол-во копий</td>
                    <td class="">дата печати</td>
                    <td class="">имя компьютера</td>
                    <td class="">имя принтера</td>
                </tr>
                <thead>
                <tbody>
                @foreach($data as $key => $record)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $record->user_name }}</td>
                        <td>{{ $record->pages }}</td>
                        <td>{{ $record->copies }}</td>
                        <td>{{ $record->date_dispatch }}</td>
                        <td>{{ $record->computer_name }}</td>
                        <td>{{ $record->printer_name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-1">
            <!-- Single button -->
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Добавить <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="papers/create">Добавить вручную</a></li>
                    <li><a href="papers/xml">Импортировать из txt</a></li>
                </ul>
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