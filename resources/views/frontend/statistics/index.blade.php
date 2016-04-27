@extends('layouts.app')

@section('styles')
    <link href="ggdfgdg.css" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-2">
            {!! Form::model(['method' => 'patch', 'action' => '']) !!}

            <div class="statistics filter">
                <div class="form-group">
                    {!! Form::label('Мастер') !!}
                    {!! Form::select('master', array('any' => 'Любой', 'maksim' => 'Максим'), null,  ['class' => 'master form-control']) !!}
                </div>

                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('fd', '', false) !!} {!! Form::label('Заправка') !!}
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('fd', '', false) !!} {!! Form::label('Ремонт') !!}
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('fd', '', false) !!} {!! Form::label('Востановление') !!}
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('fd', '', false) !!} {!! Form::label('Замена фотобарабана') !!}
                        </label>
                    </div>
                </div>



                <div class="form-group">
                    {!! Form::submit('ok', ['class' => 'btn btn-success']) !!}
                </div>
            </div>


            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('scripts')
    <script src="../js/pluginstable.js"></script>
@endsection