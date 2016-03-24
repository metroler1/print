@extends('layouts.app')

@section('content')
    <table class="table table-hover">
        <tr>
            <td class="title">#</td>
            <td class="title">Инв. Номер</td>
            <td class="title">Имя</td> {{--manifacture + model--}}
            <td class="title">Тип</td>
            <td class="title">Офис/Кабинет/Сотрудник</td>
            <td class="title">Уст в принетер</td>
            <td class="title">Мастер</td>
            <td class="title">Примечание</td>

        </tr>
        @foreach($catridges as $key => $catridge)
            <tr>
                <td>
                    {{ ++$key }}
                </td>
                <td>{{ $catridge->current_id }}</td>
                <td>{{ $catridge->manifacture }}</td>
                <td>{{ $catridge->type }}</td>
                <td>{{ $catridge->place }}</td>
                <td>{{ $catridge->catridge_has }}</td>
                <td>{{ $catridge->master }}</td>
                <td>{{ $catridge->auxiliary }}</td>
            </tr>
        @endforeach
    </table>
@endsection