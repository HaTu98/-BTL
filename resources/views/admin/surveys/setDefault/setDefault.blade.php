@extends('admin.adminLayout.adminLayout')

@section('content_header')
    <h1>Danh sách đánh giá mặc định</h1>
@endsection

@section('content')
    <div class="main-button">
        <button type="button" class="btn btn-vimeo" data-toggle="modal" data-target="#insertCriterion">Thêm tiêu chí</button>
    </div>

    <div id="table">
        
    </div>


    @include('admin.surveys.setDefault.InsertCriterionModal')

    @include('admin.surveys.setDefault.editCriterionModal')

@endsection

@section('js')
    <script type="text/javascript">
    $(document).ready(function(e){
        var data = "";
        var url = "load-criterion";
        var method = "get";
        $.ajax({
            type : method,
            url : url,
            data : data,
            dataTy : 'json',
            success:function(data){
                $('#table').empty().html(data);
            }
        });
    });
        //-----------------edit-----------------
    $(document).on('click','#edit', function(){
        $('#editCriterion').modal('show');
        var id = $(this).data('id');
        var type = $(this).data('type');
        var name = $(this).data('name');
        $('#criterion').val(name);
        $('#type').val(type).change();
        $('#id').val(id);
        $('#edit-criterion').on('submit',function(e){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();
            var data = $(this).serialize();
            var url = $(this).attr('action');
            var method = $(this).attr('method');
            $.ajax({
                type : method,
                url : url,
                data : data,
                dataTy : 'json',
                success:function(data){
                    if ($.isEmptyObject(data.errors)) {
                        $('#table').empty().html(data);
                        $('#editCriterion').modal('hide');
                    } else {
                        alert('something errors');
                    }
                }
            }).fail(function(data) {
                alert('something error');
            });
        })
    });

    // insert survey
    $(document).on('submit','#insertCriterion', function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        e.preventDefault();
        var data = $(this).serialize();
        var url = $(this).attr('action');
        var method = $(this).attr('method');
        $('#insertCriterion').modal('hide');
        $.ajax({
            type : method,
            url : url,
            data : data,
            dataTy : 'json',
            success:function(data) {
                $('#insertCriterion').modal('hide');
                if ($.isEmptyObject(data.errors)) {
                    $('#table').empty().html(data);
                } else {
                    msgError("something errors");
                }
            }
        }).fail(function(data) {
            alert('something error');
            $('#insertCriterion').modal('hide');        
        });
    });
    // delete
    $(document).on('click', '#delete', function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        if(confirm('Are you sure?')){
            var id = $(this).data('id');
            $.post('{{URL::to("survey/delete-criterion")}}',{id:id}, function(data){
                if ($.isEmptyObject(data.errors)) {
                } else {
                    msgError(data.errors);
                }
            }).done(function(data) {
                    $('#list'+id).remove();
            }).fail(function() {
                alert( "delete error" );
            });
        }
    })

    
    function msgError(data) {
        var a = ""
        $.each(data, function(key, value){
            a += "- " +value+"\n";
        });
        alert(a);
    }

    </script>
@endsection