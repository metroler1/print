@extends('backend.layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <td class="title">#</td>
                </tr>
                <thead>
                <tbody>
                @foreach($data as $key => $record)
                    <tr>
                        <td>
                            {{ ++$key }}
                        </td>
                        <td>
                            <a href="{{ '/manager/papers/' . $record->id }}">{{ date('Y-m-d', $record->influence) }}</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-1">
            <!-- Single button -->
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Добавить <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="papers/create">Добавить вручную</a></li>
                    <li><a href="papers/xml">Импортировать из csv</a></li>
                </ul>
            </div>

        </div>
    </div>



@endsection

@section('scripts')
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
@endsection