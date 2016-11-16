    <div class="col-md-2">
        {!! Form::model(['method' => 'patch', 'action' => '']) !!}

        <div class="statistics filter">
            <div class="form-group">
                @foreach($printeres as $key => $printer)
                    {{--<div class="checkbox">--}}
                        {{--<label>--}}
                            {{--{!! Form::checkbox('fd', '', true) !!} {!! Form::label( $printer->model) !!}--}}
                        {{--</label>--}}
                    {{--</div>--}}
                @endforeach

            </div>

            {!! Form::label('Период') !!}
            {{--<div class="form-group">--}}
                {{--{!! Form::text('datepickerfrom', date('Y-m-d'), ['class' => 'datepickerfrom from-control']) !!}--}}
                {{--{!! Form::text('datepickerto', date('Y-m-d'), ['class' => 'datepickerto from-control']) !!}--}}
            {{--</div>--}}
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
            <br>
            <br>


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
            {{--@foreach($paper_counters as $key => $paper_counter)--}}
                {{--<tr>--}}
                    {{--<td>{{ $key }}</td>--}}
                    {{--<td>{{ $paper_counter->device_name }}</td>--}}
                    {{--<td class="counts">{{ $paper_counter->number_of }}</td>--}}
                    {{--<td class="date">{{ date('Y-m-d', $paper_counter->influence) }}</td>--}}
                {{--</tr>--}}
            {{--@endforeach--}}
            </tbody>
        </table>
    </div>
