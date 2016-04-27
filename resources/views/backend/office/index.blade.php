@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>index office page</h1>
        @foreach($offices as $office)
            <img src="{{$office->image_path}}" alt="" width="100" height="100">
            {{  $office->office_name }}
        @endforeach
    </div>
@endsection