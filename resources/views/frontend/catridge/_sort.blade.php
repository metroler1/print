<ul class="dropdown-menu">
    <li><a href="{{ action('CatridgeController@index', ['sort' => 'asc']) }}">по убыванию</a></li>
    <li><a href="{{ action('CatridgeController@index', ['sort' => 'desc']) }}">по возростанию</a></li>
</ul>