<div class="modal fade insertList" id="insertListLecturer" role="dialog">
    <link rel="stylesheet" href="http://localhost/Laravel/public/css/admin_view/form.css">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="form">
                <h2>Chọn danh sách giảng viên</h2>
                <form action="{{ url('teacher-import') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-md-12">
                        <div class="input-group">
                            <input type="file" name="FILE" required="true">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="submitBtn">Submit</button>
                    <button type="button" class="btn btn-default" id="closeBtn" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>

    </div>
</div>