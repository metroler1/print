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
            <a href="papers/create" type="button" class="btn btn-primary">Добавить</a>
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