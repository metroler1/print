@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="row">
	        <div class="col-md-10">
	            <a href="printer/show" class="printer"><button type="button" class="btn btn-primary">Принтеры</button></a>
	            <a href="catridge/show" class="printer"><button type="button" class="btn btn-primary">Катриджи</button></a>
	        </div>
	        <div class="col-md-2">
	            <a href="manager" class="manager"><button type="button" class="btn btn-primary">Админка</button></a>
	        </div>
	    </div>
	</div>
@endsection