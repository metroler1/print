@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="check/add" class="bills_add"><button type="button" class="btn btn-primary pull-right">Создать счет</button></a>

        <div class="row">
            <div class="col-md-6">
                <table class="table bills">
                    <tr>
                        <td><h1>Максим</h1></td>
                    </tr>

                    @foreach($checkCreate as $key => $checkCreates)
                        <tr>
                            <td>
                                {{$key + 1}}
                            </td>
                            <td>
                                <a href="{{ action('CheckController@show', [$checkCreates->influence]) }}">{{ date('d-m-Y', $checkCreates->influence) }}</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>

            <div class="col-md-6">
                <table class="table">
                    <tr>
                        <td><h1>Владимир</h1></td>
                    </tr>

                    @foreach($checkCreateSecondMaster as $key => $checkCreateSecondMasters)
                        <tr>
                            <td>
                                {{$key + 1}}
                            </td>
                            <td>
                                <a href="{{ action('CheckController@show', [$checkCreateSecondMasters->influence]) }}">{{ date('d-m-Y',$checkCreateSecondMasters->influence) }}</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>
@endsection()
