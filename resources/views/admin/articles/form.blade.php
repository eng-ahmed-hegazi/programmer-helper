
<div class="modal" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static" style="border-radius: 10px">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="card" style="margin-bottom: 0;">
                <div class="card__body">
                    <form id="form-contact" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                        {{ csrf_field() }} {{ method_field('POST') }}
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"> &times; </span>
                            </button>
                            <h3 class="modal-title"></h3>
                        </div>

                        <div class="modal-body">
                            <input type="hidden" id="id" name="id">
                            <div class="form-group">
                                <label for="title" class="col-md-3 control-label">Title</label>
                                <div class="col-md-6">
                                    <input type="text" id="title" name="title" class="form-control" autofocus required>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="language_id" class="col-md-3 control-label" style="color: #ddd;">Language</label>
                                <div class="col-md-6">
                                    <select name="language_id" id="language_id" class="form-control" style="height: 35px">
                                        @foreach($languages as $language)
                                            <option value="{{$language->id}}">{{$language->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="photo" class="col-md-3 control-label">Photo</label>
                                <div class="col-md-6">
                                    <input type="file" id="photo" name="photo" class="form-control">
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="body" class="col-md-3 control-label">Body</label>
                            <div class="col-md-6">
                                <textarea id="body" name="body" row="300"class="form-control" required></textarea>
                                <span class="help-block with-errors"></span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-save">Submit</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
