@include('errors.list')
<div class="row navbar-form">
    <div class="col-md-6">
        {!! Form::model($catridges, ['method' => 'patch', 'action' => ['CatridgeController@update', $catridges->id]]) !!}


        <div class="form-group">
            {!! Form::label('location', '') !!}
            {!! Form::text('location', null, ['class' => 'form-control', 'id' => 'transfer']) !!}
            {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>
</div>
<div class="row">
    <div class="col-md-5">
        @foreach($storageLocationCatridges as $storage)
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-success">{{$storage->category_name}}</a>
            </div>
        @endforeach
    </div>
    <div class="col-md-5">
        <select multiple class="form-control" id="CatridgeSelect">
            @foreach($storageLocationCatridges as $key => $storage)
            <option>{{ $key . 'fdsfds'}}</option>
            @endforeach
        </select>
    </div>
</div>
