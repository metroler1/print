<div class="modal fade" id="create-type" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>


            <form action="/manager/cartridge/service" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <!-- Task Name -->
                    <div class="form-group">
                        <div class="col-sm-6">
                            <input type="text" name="name" id="cartridge_service_name" class="form-control" placeholder="Добавить службу" required>
                        </div>
                    </div>

                    <!-- Add Task Button -->

                </div>
                <div class="modal-footer type">
                    <button type="button" class="btn btn-default" data-dismiss="modal">закрыть</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-plus"></i> сохранить
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>