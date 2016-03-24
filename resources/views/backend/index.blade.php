@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Принтера</button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="manager/addprinter">Добавить принтер</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Катриджи</button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="manager/addcatridge">Добавить катридж</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Тип</button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="manager/add">Добавить тип</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Мастер</button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="manager/master/add">Добавить мастера</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Местоположение</button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="manager/place/add">Добавить местоположение</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection