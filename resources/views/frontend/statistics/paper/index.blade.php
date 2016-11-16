@extends('layouts.app')

@section('styles')
    <style src="../css/icheck/icheck.css"></style>
@endsection

@section('content')
    <div class="col-md-2">
        {!! Form::model(['method' => 'patch', 'action' => '']) !!}

        <div class="statistics filter">
            <div class="form-group">

                {!! Form::label('Период') !!}

                <div class="input-group date" data-provide="datepicker">
                    {!! Form::text('influence', null, ['class' => 'form-control influence', 'placeholder' => 'Дата счета']) !!}
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
                <br>
                <div class="input-group date" data-provide="datepicker">
                    {!! Form::text('influence', null, ['class' => 'form-control influence', 'placeholder' => 'Дата счета']) !!}
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
                <br>

                <p>Принтсервера</p>

                @foreach($filters2 as $key => $filter)
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('fd', '', true) !!} {!! Form::label( $filter->printservers) !!}
                        </label>
                    </div>
                @endforeach

                <div  id="disp" style="display: none">
                    <p>Пользователи</p>

                    @foreach($filters1 as $key => $filter)
                        <div class="checkbox">
                            <label>
                                {!! Form::checkbox('fd', '', true) !!} {!! Form::label( $filter->user_name) !!}
                            </label>
                        </div>
                    @endforeach
                </div>

                <a id="filt-show">Расширинный</a>


            </div>


            <div class="form-group">
                {!! Form::submit('ok', ['class' => 'btn btn-success']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>

    <div class="col-md-8">

        <table class="table table-striped _paper_filter report" id="paper_statistiks">
            <thead>
            <tr>
                <td>№</td>
                <td>Устройства</td>
                <td>Колличество</td>
                <td>Дата</td>
            </tr>
            </thead>
            <tbody>
                @foreach($statPaper as $key => $paper_counter)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $paper_counter->printer_name }}</td>
                    <td class="counts">{{ $paper_counter->pages }}</td>
                    <td class="date">{{ date('Y-m-d', $paper_counter->date) }}</td>
                </tr>
                @endforeach
                </tbody>
        </table>
    </div>

@endsection

@section('scripts')
    <script src="../js/pluginstable.js"></script>
    {{--<script src="../js/icheck/icheck.js"></script>--}}
    <script>
        $(document).ready( function () {
            $('#cost_statistiks').DataTable({
                "pageLength": 25
            });
        });

        $(document).ready( function () {
            $('#paper_statistiks').DataTable({
                "pageLength": 25
            });
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
    <script>
        $('#filt-show').click(function () {
           $('#disp').toggle();
        });
    </script>
@endsection