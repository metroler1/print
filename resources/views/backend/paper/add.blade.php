@extends('backend.layouts.app')

@section('content')

    <div class="col-md-offset-4">
        @include('errors.list')

        {!! Form::open(array('method' => 'POST', 'action' => array('Backend\PaperCountersController@store'))) !!}

        @foreach($printeres as $key => $printer)

            <div class="form-group form-inline" id="add-paper-count">
                {!! Form::text('device_name', $printer->manifacture . ' ' .$printer->model . ' (' . $printer->current_id .')', ['class' => 'device_name form-control', 'placeholder' => 'Машина']) !!}
                {!! Form::text('number_of', null, ['class' => 'number_of form-control', 'placeholder' => 'Колличество', 'required']) !!}
                {!! Form::text('influence', time(), ['class' => 'influence', 'hidden']) !!}
            </div>
        @endforeach

        <div class="form-group form-inline">
            {!! Form::text('influence', time(), ['class' => 'influence', 'hidden']) !!}

            {!! Form::submit('ok', ['class' => 'btn btn-success']) !!}
        </div>
        {!! Form::close() !!}
    </div>



@endsection

@section('scripts')
    <script src="/../backend/js/addData.js"></script>
@endsection