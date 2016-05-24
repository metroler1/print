<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4>Элемент будет удален?</h4>
            </div>
            <div class="modal-footer">
                {!! Form::open(['method' => 'DELETE', 'route' => ['manager.type.destroy', $record->id]])  !!}
                    {!! Form::hidden('id', $record->id) !!}
                    <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
                    {!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>