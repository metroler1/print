@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Подробная информация о счете</h1>
        <table class="table table-striped">
            <tr>
                <td>#</td>
                <td>Инв. номер</td>
                <td>Цена</td>
                <td>Модель</td>
                <td>Служба</td>
                <td>Офис</td>
            </tr>
            @foreach($checkData as $key => $oneData)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $oneData->catridge_current_id }}</td>
                    <td>{{ $oneData->price }}</td>
                    <td>{{ $oneData->catridge_model }}</td>
                    <td>{{ $oneData->type_of_repair }}</td>
                    <td>{{ $oneData->office }}</td>
                </tr>

            @endforeach
        </table>

    </div>
@endsection
