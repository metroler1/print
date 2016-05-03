<ul class="dropdown-menu sort">
    <li>
        {!! Form::open(array('method' => 'PATCH', 'action' => array('CatridgeController@index'))) !!}
            {!! Form::text('sort', 'asc', ['hidden']) !!}
            {!! Form::text('sortType', $sortType, ['hidden']) !!}
            {!! Form::submit('по возрастанию') !!}
        {!! Form::close() !!}
    </li>
    <li>
        {!! Form::open(array('method' => 'PATCH', 'action' => array('CatridgeController@index'))) !!}
            {!! Form::text('sort', 'desc', ['hidden']) !!}
            {!! Form::text('sortType', $sortType, ['hidden']) !!}
            {!! Form::submit('по убыванию') !!}
        {!! Form::close() !!}
    </li>
</ul>