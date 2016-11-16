@extends('backend.layouts.app')

@section('styles')
    <link rel="stylesheet" href="/../../plugins/Product/css/global.css">
@endsection

@section('content')

    <div class="row">
        <div class="col-md-5">
            <table class="table table-striped">
                <tr>
                    <td>#</td>
                    <td>Комнаты</td>
                    <td>Действия</td>
                </tr>
                @foreach($rooms as $key => $room)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td><a href="{{ $_SERVER['REQUEST_URI'] . '/' . $room->id }}">{{ $room->rooms }}</a></td>
                        <td>
                            <a href="rooms/{{ $room->id }}/edit" type="button"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="{{ $room->id }}" type="button" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-remove-circle"></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="col-md-1">
            <a href="" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#create-type"><i class="glyphicon glyphicon-plus"></i></a>

            <br>
            {{--<a href={{ $office->id . '/edit' }} class="edit"><button type="button" class="btn btn-primary">Редактировать</button></a>--}}
        </div>
        <div class="row">
            <div id="container">
                <div id="products_example">
                    <div id="products">
                        <div class="slides_container">
                            @foreach($officeImg as $key => $value)
                                <img src={{ $value->path }} height="800" alt="">
                            @endforeach
                        </div>
                        <ul class="pagination">
                            @foreach($officeImg as $key => $value)
                                <li><a href="#"><img src={{ $value->path }} width="55" alt=""></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
             </div>
            {{--@foreach($officeImg as $key => $value)--}}
                {{--<img src={{ $value->path }} alt="">--}}
            {{--@endforeach--}}
        </div>
    </div>
    @include('backend.office.room._create')

@endsection

@section('scripts')
    <script src="/../../plugins/Product/js/slides.min.jquery.js"></script>
    <script>
        $(function(){
            $('#products').slides({
                preload: true,
                preloadImage: 'img/loading.gif',
                effect: 'slide, fade',
                crossfade: true,
                slideSpeed: 200,
                fadeSpeed: 500,
                generateNextPrev: true,
                generatePagination: false
            });
        });
    </script>
@endsection