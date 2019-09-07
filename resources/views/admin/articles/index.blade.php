@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{asset('css/summernote.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
@endsection
@section('content')
        <div class="row">
            <div class="col-md-11">
                <div class="card">
                    <div class="card__header">
                        @if($languages->count()!=0)
                            <h4>Articles list
                                <a onclick="addForm()" class="btn btn-primary pull-right" style="margin-top: -8px;">Add Article</a>
                            </h4>
                        @else
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
                                <small>
                                    Please! <a href="{{route('languages.index')}}" class="alert-link">Add Some Languages</a>
                                </small>
                            </div>
                            <h4>Interview Questions

                                <a class="btn btn-primary pull-right" style="margin-top: -8px;" disabled="">Add Article</a>
                            </h4>
                        @endif

                    </div>
                    <div class="card__body">
                        <table id="article-table" class="table table-striped">

                            <thead>
                            <tr>
                                <th width="30">No</th>
                                <th>Photo</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Language_id</th>
                                <th width="60"></th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.articles.form')
    </div>
</div>
@endsection
@section('scripts')
    <script src="{{asset('js/summernote.js')}}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('#body').summernote();
        });
    </script>
    <script type="text/javascript">
        var table = $('#article-table').DataTable({
            /*
            dom: 'Bfrtip',
            button: [{
                    extend : 'pdf',
                    oriented : 'potrait',
                    pageSize : 'Legal',
                    download : 'open',
                    title : 'Hamada'
                },'copy', 'csv', 'excel', 'print'
            ],
            */
            processing: true,
            serverSide: true,
            ajax: "{{ route('api.articles') }}",

            columns: [
                {data: 'id', name: 'id'},
                {data: 'photo', name: 'photo'},
                {data: 'title', name: 'title'},
                {data: 'body', name: 'body'},
                {data: 'language_id', name: 'language_id'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ],



        });

        function addForm() {
            save_method = "add";
            $('input[name=_method]').val('POST');
            $('#modal-form').modal('show');
            $('#modal-form form')[0].reset();
            $('.modal-title').text('Add Article');
        }

        function editForm(id) {
            save_method = 'edit';
            $('input[name=_method]').val('PATCH');
            $('#modal-form form')[0].reset();
            $.ajax({
                url: "{{ url('admin/articles') }}" + '/' + id + "/edit",
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('#modal-form').modal('show');
                    $('.modal-title').text('Edit Article');

                    $('#id').val(data.id);
                    $('#title').val(data.title);
                    $('#body').val(data.body);
                    $('#language_id').val(data.language_id);
                },
                error : function() {
                    alert("Nothing Data");
                }
            });
        }
        /*delete*/
        function deleteData(id){
            var csrf_token = $('meta[name="csrf-token"]').attr('content');
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#d33',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then(function () {
                $.ajax({
                    url : "{{ url('admin/articles') }}" + '/' + id,
                    type : "POST",
                    data : {'_method' : 'DELETE', '_token' : csrf_token},
                    success : function(data) {
                        table.ajax.reload();
                        swal({
                            title: 'Success!',
                            text: data.message,
                            type: 'success',
                            timer: '1500'
                        })
                    },
                    error : function () {
                        swal({
                            title: 'Oops...',
                            text: data.message,
                            type: 'error',
                            timer: '1500'
                        })
                    }
                });
            });
        }
        /* add function*/
        $(function(){
            $('#modal-form form').validator().on('submit', function (e) {
                if (!e.isDefaultPrevented()){
                    var id = $('#id').val();
                    if (save_method == 'add') url = "{{ url('admin/articles') }}";
                    else url = "{{ url('admin/articles') . '/' }}" + id;

                    $.ajax({
                        url : url,
                        type : "POST",
//                        data : $('#modal-form form').serialize(),
                        data: new FormData($("#modal-form form")[0]),
                        contentType: false,
                        processData: false,
                        success : function(data) {
                            $('#modal-form').modal('hide');
                            table.ajax.reload();
                            swal({
                                title: 'Success!',
                                text: data.message,
                                type: 'success',
                                timer: '1500'
                            })
                        },
                        error : function(data){
                            swal({
                                title: 'Oops...',
                                text: data.message,
                                type: 'error',
                                timer: '1500'
                            })
                        }
                    });
                    return false;
                }
            });
        });

    </script>
@endsection