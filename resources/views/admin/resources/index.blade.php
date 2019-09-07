@extends('layouts.app')
@section('content')
        <div class="row">
            <div class="col-md-11">
                <div class="card">
                    <div class="card__header">
                        @if($languages->count()!=0 && $types->count()!=0)
                            <h4>Resource List
                                <a onclick="addForm()" class="btn btn-primary pull-right" style="margin-top: -8px;">Add Resource</a>
                            </h4>
                        @else
                            @if($languages->count()==0)
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
                                    <small>
                                        Please! <a href="{{route('languages.index')}}" class="alert-link">Add Some Languages</a>
                                    </small>
                                </div>
                            @endif

                            @if($types->count()==0)
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
                                    <small>
                                        Please! <a href="{{route('types.index')}}" class="alert-link">Add Some Types</a>
                                    </small>
                                </div>
                            @endif
                            <h4>Resource List

                                <a class="btn btn-primary pull-right" style="margin-top: -8px;" disabled="">Add Resource</a>
                            </h4>
                        @endif
                    </div>
                    <div class="card__body">
                        <table id="resources-table" class="table table-striped">
                            <thead>
                            <tr>
                                <th width="30">No</th>
                                <th>Name</th>
                                <th>url</th>
                                <th>Type</th>
                                <th>Language</th>
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
        @include('admin.resources.form')
@endsection
@section('scripts')
    <script type="text/javascript">
        var table = $('#resources-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('api.resources') }}",

            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'url', name: 'url'},
                {data: 'type', name: 'type'},
                {data: 'language', name: 'language'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ],
        });

        function addForm() {
            save_method = "add";
            $('input[name=_method]').val('POST');
            $('#modal-form').modal('show');
            $('#modal-form form')[0].reset();
            $('.modal-title').text('Add Resource');
        }

        function editForm(id) {
            save_method = 'edit';
            $('input[name=_method]').val('PATCH');
            $('#modal-form form')[0].reset();
            $.ajax({
                url: "{{ url('admin/resources') }}" + '/' + id + "/edit",
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('#modal-form').modal('show');
                    $('.modal-title').text('Edit Resource');

                    $('#id').val(data.id);
                    $('#name').val(data.name);
                    $('#description').val(data.description);
                    $('#url').val(data.url);
                    $('#type').val(data.types);
                    $('#language').val(data.language);
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
                    url : "{{ url('admin/resources') }}" + '/' + id,
                    type : "POST",
                    data : {'_method' : 'DELETE', '_token' : csrf_token},
                    success : function(data) {
                        table.ajax.reload();
                        swal({
                            title: 'Success!',
                            text: data.message,
                            type: 'success',
                            timer: '750'
                        })
                    },
                    error : function () {
                        swal({
                            title: 'Oops...',
                            text: data.message,
                            type: 'error',
                            timer: '750'
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
                    if (save_method == 'add') url = "{{ url('admin/resources') }}";
                    else url = "{{ url('admin/resources') . '/' }}" + id;

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
                                timer: '750'
                            })
                        },
                        error : function(data){
                            swal({
                                title: 'Oops...',
                                text: data.message,
                                type: 'error',
                                timer: '750'
                            })
                        }
                    });
                    return false;
                }
            });
        });

    </script>
@endsection