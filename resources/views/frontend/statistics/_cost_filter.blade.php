<div class="col-md-2">
    {!! Form::model(['method' => 'patch', 'action' => '']) !!}

    <div class="statistics filter">
        <div class="form-group">
            {!! Form::label('Мастер') !!}
            {{--{!! Form::select('master', array('Любой', 'Максим' => 'Максим', 'Владимир' => 'Владимир'), null,  ['class' => 'master form-control']) !!}--}}
            <div class="checkbox">
                <label>
                    {!! Form::checkbox('maksim', 'Максим', true) !!} {!! Form::label('Максим') !!}
                </label>
            </div>
            <div class="checkbox">
                <label>
                    {!! Form::checkbox('vladimir', 'Владимир', true) !!} {!! Form::label('Владимир') !!}
                </label>
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('Тип ремонта') !!}
            <div class="checkbox">
                <label>
                    {!! Form::checkbox('refil', 'refil', true) !!} {!! Form::label('Заправка') !!}
                </label>
            </div>

            <div class="checkbox">
                <label>
                    {!! Form::checkbox('recover', 'recover', true) !!} {!! Form::label('Ремонт') !!}
                </label>
            </div>

            <div class="checkbox">
                <label>
                    {!! Form::checkbox('repair', 'repair', true) !!} {!! Form::label('Востановление') !!}
                </label>
            </div>

            <div class="checkbox">
                <label>
                    {!! Form::checkbox('replacement-photobaraban', '', true) !!} {!! Form::label('Замена фотобарабана') !!}
                </label>
            </div>
        </div>
{{--

        <div class="form-group">
            {!! Form::label('Офис') !!}

            <div class="checkbox">
                <label>
                    {!! Form::checkbox('', '', true) !!} {!! Form::label('Сторожевская') !!}
                </label>
            </div>

        </div>
--}}


        {!! Form::label('Период') !!}
        <div class="form-group">
            {!! Form::text('datepickerfrom', date('Y-m-d'), ['class' => 'datepickerfrom from-control']) !!}
            {!! Form::text('datepickerto', date('Y-m-d'), ['class' => 'datepickerto from-control']) !!}
        </div>



        <div class="form-group">
            {!! Form::submit('ok', ['class' => 'btn btn-success']) !!}
        </div>
    </div>
    {!! Form::close() !!}
</div>


<div class="col-md-8">

    <table class="table table-striped cost report" id="cost_statistiks">
        <thead>
        <tr>
                <td>Тип</td>
                <td>Цена</td>
                <td>Дата</td>
                <td>Мастер</td>
        </tr>
        </thead>
        <tbody>
            @foreach($checks as $key => $check)
                <tr>
                    <td>{{ $check->type_of_repair }}</td>
                    <td class="price">{{ $check->price }}</td>
                    <td>{{ date('Y-m-d', $check->influence) }}</td>
                    <td>{{ $check->master }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
