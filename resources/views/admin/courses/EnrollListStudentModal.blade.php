<div class="modal fade insertList" id="enrollListStudent" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="form">
                <h2>Chọn danh sách sinh viên</h2>
                <form action="{{url('import-course')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-md-12">
                        <div class="input-group">
                        <input type="file" name="FILE" id="FILE" required="true" accept=".xlsx, .xls, .csv">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary submitBtn">Submit</button>
                    <button type="button" class="btn btn-default closeBtn" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
