<ul class="dropdown-menu sort">
     {{--<li><a href="{{ action('CatridgeController@index', ['sort' => 'asc']) }}">по убыванию</a></li>--}}
    {{--<li><a href="{{ action('CatridgeController@index', ['sort' => 'desc']) }}">по возростанию</a></li>--}}
    {{--<li data-sort="asc">по убыванию</li>--}}
    {{--<li data-sort="desc">по возростанию</li>--}}
    <li>
        {!! Form::open(array('method' => 'POST', 'action' => array('CatridgeController@index'))) !!}
            {!! Form::text('master', 'desc', ['hidden']) !!}
            {!! Form::checkbox('flag', 1, true, ['hidden']) !!}
             <a href="">{!! Form::submit('rrr') !!}</a>
        {!! Form::close() !!}
    </li>
</ul>