@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Здесь будет подробная информация о счете</h1>
        <table class="table table-striped">
            <tr>
                <td>Инв. номер</td>
                <td>Цена</td>
                <td>Модель</td>
            </tr>
            @foreach($checkData as $oneData)
                <tr>
                    <td>{{ $oneData->catridge_current_id }}</td>
                    <td>{{ $oneData->price }}</td>
                    <td>{{ $oneData->catridge_model }}</td>
                </tr>

            @endforeach
        </table>

    </div>
@endsection
