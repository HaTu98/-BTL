<div class="modal fade insertList" id="insertListStudent" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="form ">
                <h2>Chọn danh sách sinh viên</h2>
                <form action="{{ url('student-import') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-md-12">
                        <div class="input-group">
                            <input type="file" name="FILE" required="true">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="insertListBtn" >Submit</button>
                    <button type="button" class="btn btn-danger pull-right" id="closeInsertListBtn" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>

    </div>
</div>
