@extends('layouts.app')

@section('styles')
    <link href="css/icheck/icheck.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">

                <h2>Статистика</h2>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#price">Цена</a></li>
                    <li><a data-toggle="tab" href="#paper">Бумага</a></li>
                </ul>

                <div class="tab-content">

                    <div id="price" class="tab-pane fade in active">
                        {{--@include('frontend.statistics._cost_filter')--}}
                    </div>

                    <div id="paper" class="tab-pane fade">
                        @include('frontend.statistics._paper-filter')
                    </div>
                </div>
        </div>
    </div>


@endsection

@section('scripts')
    <script src="../js/pluginstable.js"></script>
    <script src="../js/icheck/icheck.js"></script>
    <script>
        $(document).ready( function () {
            $('#cost_statistiks').DataTable();
        });

        $(document).ready( function () {
            $('#paper_statistiks').DataTable();
        });

        // settings for icheck
        $(document).ready(function(){
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square',
                increaseArea: '20%' // optional
            });
        });
    </script>
@endsection