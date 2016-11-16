@extends('layouts.app')

@section('styles')

@endsection

@section('content')



    <div class="col-md-2">
        {!! Form::model(['method' => 'patch', 'action' => '']) !!}
        <div class="statistics filter">

                {!! Form::label('Офисы') !!}
                @foreach($filters as $key => $filter)
                    @if(isset($filter->office_name))
                        <div class="checkbox">
                            <label>
                                {!! Form::checkbox($filter->office_name, '', true) !!} {!! Form::label( $filter->office_name) !!}
                            </label>
                        </div>
                    @endif
                @endforeach

                {!! Form::label('Работы') !!}
                @foreach($filters as $key => $filter)
                    @if(isset($filter->service))
                        <div class="checkbox">
                            <label>
                                {!! Form::checkbox($filter->service, '', true) !!} {!! Form::label( $filter->service) !!}
                            </label>
                        </div>
                    @endif
                @endforeach
            </div>

            <br />
            <br />

    </div>

    </div>

    <div id="guestbook" >





    <div class="col-md-8">

        <input type="text" v-model="search">

            <label for="Период">Период</label>

            <div class="input-group date" data-provide="datepicker">
                <input v-model="date1" class="form-control influence" placeholder="Дата счета" name="influence" type="text">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
            <br>
            <div class="input-group date" data-provide="datepicker">
                <input v-model="date1" class="form-control influence" placeholder="Дата счета" name="influence" type="text">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>

        <form>
            <div class="form-group">
                <button v-on:click="handleIt" class="btn btn-success" type="submit">
                    fds
                </button>
            </div>
        </form>


        <greeting messages="тест сообщение"></greeting>

            <div class="form-group">
                {!! Form::label('Мастер') !!}
                <br>

                @foreach($filters as $key => $filter)
                    @if(isset($filter->master_name))
                        <input v-on:click="fetchMessages()" type="checkbox" checked="checked" id="{{ $filter->master_name }}" value="{{ $filter->master_name }}" v-model="checkedNames">
                        <label for="{{ $filter->master_name }}">{{ $filter->master_name }}</label>
                    @endif
                @endforeach

            </div>

            <span>Checked names: @{{ checkedNames | json }}</span>

            <table class="table table-striped cost report">
                <tr>
                    <td>Модель</td>
                    <td>Цена</td>
                    <td>Дата</td>
                    <td>Мастер</td>
                    <td>Офис</td>
                    <td>Услуга</td>
                </tr>
                <tr v-for="me in messages
                            | selection">

                        <td>@{{ me.price }}</td>
                        <td>@{{ me.catridge_model }}</td>
                        <td>@{{ me.influence | moment(date, 'YY-MM-DD')}}</td>
                        <td>@{{ me.master }}</td>
                        <td>@{{ me.office_name }}</td>
                        <td>@{{ me.service }}</td>


                </tr>
            </table>
            {{--<pre>--}}
                {{--@{{ messages | json }}--}}
            {{--</pre>--}}




    </div>

    </div>

@endsection

@section('scripts')
    <script src="../js/pluginstable.js"></script>

    {{--<script src="../js/icheck/icheck.js"></script>--}}
    <script>
        $(document).ready( function () {
            $('#cost_statistiks').DataTable({
                "pageLength": 20
            });
        });

        $(document).ready( function () {
            $('#paper_statistiks').DataTable();
        });

        // settings for icheck
        $(document).ready(function(){
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square',
                increaseArea: '20%' // optional
            });
        });
    </script>
    <script>

        Vue.filter('selection', function (value) {
            for (var key in value)
            {
                if(value[key]['master'] == 'Максим')
                {
                    return value[key];
                }
            }
        });

        Vue.component('greeting', {
           template: '<h1>@{{ messages }}</h1>',
           props: ['messages']
        });

        var vm = new Vue({
            el: '#guestbook',

            data: {
                search: '',
                checkedNames: [],
                master: ''
            },
//
            ready: function(){
                this.fetchMessages();
            },

            methods: {
                fetchMessages: function() {
                    this.$http.get('price/api', function (messages) {
                        for (var key in messages)
                        {
                            this.master += messages[key]['master'];

                        }
                        this.$set('messages', messages);

                    });
                }

            }
        });

    </script>
@endsection