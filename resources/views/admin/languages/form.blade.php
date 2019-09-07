
<div class="modal" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static" style="border-radius: 10px">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="card" style="margin-bottom: 0;">
                <div class="card__body">
                    <form id="form-contact" method="post" class="form-horizontal" data-toggle="validator">
                {{ csrf_field() }} {{ method_field('POST') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title" style="color: #fff;"></h3>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label for="name" class="col-md-3 control-label" style="color: #ddd;">Name</label>
                        <div class="col-md-6">
                            <input type="text" id="name" name="name" class="form-control" autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-md-3 control-label" style="color: #ddd;">Description</label>
                        <div class="col-md-6">
                            <textarea rows="10" id="description" name="description" class="form-control" required></textarea>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category" class="col-md-3 control-label" style="color: #ddd;">Category</label>
                        <div class="col-md-6">
                            <select name="category" id="category" class="form-control" style="height: 35px">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{--<div class="form-group">
                        <label for="category" class="col-md-3 control-label" style="color: #ddd;">Tags</label>
                        <div class="col-md-6">
                            @foreach($tags as $tag)
                                <label class="checkbox-inline">
                                    <input type="checkbox" value="{{$tag->id}}" name="tags[]" id="tags[]">
                                    <i class="input-helper"></i>
                                    {{$tag->name}}
                                </label>
                            @endforeach
                        </div>
                    </div>--}}
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
</div>
</div>