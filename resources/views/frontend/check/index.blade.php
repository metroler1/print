@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="check/add" class="bills_add"><button type="button" class="btn btn-primary pull-right">Создать счет</button></a>

        <div class="row">
           <table class="table">
               <tr>
                   <td><h1>Максим</h1></td>
                   <td><h1>Владимир</h1></td>
               </tr>

               @foreach($checkCreate as $checkCreates)
                   <tr>
                       <td>
                           <a href="">{{ $checkCreates->influence }}</a>
                       </td>
                   </tr>
               @endforeach
           </table>
        </div>
    </div>
@endsection()