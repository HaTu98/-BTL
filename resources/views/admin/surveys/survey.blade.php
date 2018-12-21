@extends('admin.adminLayout.adminLayout')

@section('content_header')
    <h1>Danh sách đánh giá</h1>
@endsection

@section('content')


    <div class="main-button">
        <a class="btn btn-vimeo" href="http://localhost/-BTL/public/generate">Tạo đánh giá chung</a>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th style="width:15%;text-align: center"><i class="fa fa-cog" aria-hidden="true"></i></th>
            <th style="width:30%;text-align: center">Title</th>
            <th style="width:15%;text-align: center">Code</th>
            <th style="width:20%;text-align: center">Created At</th>
            <th style="width:20%;text-align: center">Modified At</th>
        </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td style="width:15%;text-align: center">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#editSurvey"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#showSurvey"><i class="fa fa-eye" aria-hidden="true"></i></button>
                        <button type="button" href="" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </td>
                    <td style="width:30%;text-align: center">{{ $course->name }}</td>
                    <td style="width:15%;text-align: center">{{ $course->code}}</td>
                    <td style="width:20%;text-align: center">12/02/2222</td>
                    <td style="width:20%;text-align: center">12/02/2222</td>

                </tr>
            @endforeach
        </tbody>
    </table>


    <div class="modal fade" id="showSurvey" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <h2>Chi tiết đánh giá</h2>
                <div class="time">
                    <h3><b>Ngày bắt đầu:</b>  22/22/2222</h3>
                    <h3><b>Ngày kết thúc:</b>  22/22/2222</h3>
                </div>
                <div class="list-survey">
                    <h3><b>Các tiêu chí đánh giá:</b> </h3>
                    <div class="about-equipments">
                        <h5>1. Cơ sở vật chất</h5>
                        <ul>
                            <li>Tiêu chí 1Tiêu chí 1Tiêu chí 1Tiêu chí chí 1Tiêu chí 1Tiêu chí 1Tiêu chí 1Tiêu chí 1Tiêu chí 1Tiêu 1Tiêu chí 1Tiêu chí 1</li>
                            <li>Tiêu chí 1</li>
                            <li>Tiêu chí 1</li>
                        </ul>
                    </div>
                    <div class="about-subject">
                        <h5>2. Môn học</h5>
                        <ul>
                            <li>Tiêu chí 1Tiêu chí 1Tiêu chí 1Tiêu chí chí 1Tiêu chí 1Tiêu chí 1Tiêu chí 1Tiêu chí 1Tiêu chí 1Tiêu 1Tiêu chí 1Tiêu chí 1</li>
                            <li>Tiêu chí 1</li>
                            <li>Tiêu chí 1</li>
                            <li>Tiêu chí 1</li>
                        </ul>
                    </div>
                    <div class="about-teachers">
                        <h5>3. Hoạt động dạy hoc của giảng viên</h5>
                        <ul>
                            <li>Tiêu chí 1Tiêu chí 1Tiêu chí 1Tiêu chí chí 1Tiêu chí 1Tiêu chí 1Tiêu chí 1Tiêu chí 1Tiêu chí 1Tiêu 1Tiêu chí 1Tiêu chí 1</li>
                            <li>Tiêu chí 1</li>
                            <li>Tiêu chí 1</li>
                            <li>Tiêu chí 1</li>
                        </ul>
                    </div>
                    <div class="about-students">
                        <h5>4. Hoạt động học tập của sinh viên</h5>
                        <ul>
                            <li>Tiêu chí 1Tiêu chí 1Tiêu chí 1Tiêu chí chí 1Tiêu chí 1Tiêu chí 1Tiêu chí 1Tiêu chí 1Tiêu chí 1Tiêu 1Tiêu chí 1Tiêu chí 1</li>
                            <li>Tiêu chí 1</li>
                            <li>Tiêu chí 1</li>
                            <li>Tiêu chí 1</li>
                        </ul>
                    </div>
                </div>
                <button type="button" class="btn btn-danger"  data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>

    <div class="modal fade survey-content" id="editSurvey" role="dialog">
        <link rel="stylesheet" href="{{ asset('css/adminView/modal.css') }}">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <h2>Sửa đánh giá</h2>
                <div class="form" >
                    <form action="" method="post">
                        @csrf
                        <div class="form-group col-md-6 date">
                            <label for="start">Ngày bắt đầu:</label>
                            <input type="date" id="start" name="start" value="2018-07-22">
                        </div>
                        <div class="form-group col-md-6 date">
                            <label for="end">Ngày kết thúc:</label>
                            <input type="date" id="end" name="end" value="2018-07-22">
                        </div>
                        <div class="form-group col-md-12 survey">
                            <h4><b>Chọn tiêu chí:</b></h4>
                            <div class="survey-content">
                                <div class="about-equipments">
                                    <h5>1. Cơ sở vật chất</h5>
                                    <div class="row">
                                        <label><input type="checkbox" name="survey1" value="1"><span>Các trang thiết bị tại giảng đường đáp ứng nhu cầu giảng dạy và học tập đường có đáp ứng yêu cầu của môn học</span></label>
                                    </div>
                                </div>

                                <div class="about-subject">
                                    <h5>2. Môn học</h5>
                                    <div class="row">
                                        <label><input type="checkbox" name="survey1" value="1"><span>Giảng đường đáp ứng yêu cầu của môn học</span></label>
                                    </div>
                                </div>

                                <div class="about-teachers">
                                    <h5>3. Hoạt động dạy hoc của giảng viên</h5>
                                    <div class="row">
                                        <label><input type="checkbox" name="survey1" value="1"><span>Giảng đường đáp ứng yêu cầu của môn học</span></label>
                                    </div>
                                </div>

                                <div class="about-students">
                                    <h5>4. Hoạt động học tập của sinh viên</h5>
                                    <div class="row">
                                        <label><input type="checkbox" name="survey1" value="1"><span>Kết quả học tập của người học được đánh giá bằng nhiều hình thức phú hợp với tính chất và đặc thù môn học</span></label>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" id="submitBtn">Submit</button>
                        <button type="button" class="btn btn-danger" id="closeBtn" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection