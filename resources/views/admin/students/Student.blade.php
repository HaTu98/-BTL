@extends('admin.adminLayout.adminLayout')

@section('content_header')
    <h1>Danh sách sinh viên</h1>
@endsection

@section('content')

    <div style="width: 30%; float: left">
        <button type="button" class="btn btn-vimeo" data-toggle="modal" data-target="#insertSingleStudent">Thêm sinh viên</button>
    </div>

    <div style="width: 30%; float: left">
        <button type="button" class="btn btn-vimeo" data-toggle="modal" data-target="#insertListStudent">Thêm danh sách sinh viên</button>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Mã sinh viên/Tên đăng nhập</th>
                <th>Mật khẩu</th>
                <th>Họ và tên</th>
                <th>VNU Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>15020881</td>
                <td>12345678</td>
                <td>Triệu Hoàng An</td>
                <td>15020881@vnu.edu.vn</td>
                <td>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#editSingleStudent">Sửa</button>
                    <a class="btn btn-default remove" href="#">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>15021394</td>
                <td>12345678</td>
                <td>Bùi Châu Anh</td>
                <td>15021394@vnu.edu.vn</td>
                <td>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#editSingleStudent">Sửa</button>
                    <a class="btn btn-default remove" href="#">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>15021606</td>
                <td>12345678</td>
                <td>Lưu Việt Anh</td>
                <td>15021606@vnu.edu.vn</td>
                <td>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#editSingleStudent">Sửa</button>
                    <a class="btn btn-default remove" href="#">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>15020881</td>
                <td>12345678</td>
                <td>Triệu Hoàng An</td>
                <td>15020881@vnu.edu.vn</td>
                <td>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#editSingleStudent">Sửa</button>
                    <a class="btn btn-default remove" href="#">Xóa</a>
                </td>
            </tr>
        </tbody>
    </table>

    @include('admin/students/InsertSingleStudentModal')

    @include('admin/students/EditSingleStudentModal')

    @include('admin.students.InsertListStudentModal')

@endsection
