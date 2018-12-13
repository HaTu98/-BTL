@extends('admin.adminLayout.adminLayout')

@section('content_header')
    <h1>Danh sách quản trị viên </h1>
@endsection

@section('content')

    <div class="main-button">
        <button type="button" class="btn btn-vimeo" data-toggle="modal" data-target="#insertSingleAdmin">Thêm admin</button>
    </div>

    <div class="main-button2">
        <button type="button" class="btn btn-vimeo" data-toggle="modal" data-target="#insertListAdmin">Thêm danh sách admin</button>
    </div>
    <div>
        @include('admin/admins/ListAdmin')
    </div>

    @include('admin/admins/InsertSingleAdminModal')

    @include('admin/admins/EditSingleAdminModal')

    @include('admin/admins/InsertListAdminModal')
@endsection
