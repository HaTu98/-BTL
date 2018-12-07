<div class="modal fade" id="editSingleStudent" role="dialog">
    <link rel="stylesheet" href="{{ asset('css/adminView/modal.css') }}">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="form">
                <h2 id ="edit-header">Sửa thông tin sinh viên</h2>
                <form action="{{ url('/student/edit') }}" method="post" id="edit-student">
                    @csrf
                    <div class="form-group col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="username" id="username-edit" placeholder="Mã sinh viên" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="name" id="name-edit" placeholder="Họ và tên" required>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" class="form-control" name="email" id="email-edit" placeholder="Nhập VNU email" required>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
                            <input type="text" class="form-control" name="class" id="class-edit" placeholder="Khóa đào tạo" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="EditBtn">Submit</button>
                    <button type="button" class="btn btn-danger pull-right" id="closeEditBtn" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>

    </div>
</div>
