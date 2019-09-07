
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
                            <h3 class="modal-title" style="color: #fff">
                            </h3>
                        </div>

                        <div class="modal-body">
                            <input type="hidden" id="id" name="id">
                            <div class="form-group">
                                <label for="question" class="col-md-3 control-label">Question</label>
                                <div class="col-md-6">
                                    <input type="text" id="question" name="question" class="form-control" autofocus required>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="answer" class="col-md-3 control-label">Answer</label>
                                <div class="col-md-6">
                                    <textarea rows="10" id="answer" name="answer" class="form-control" autofocus required></textarea>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="language" class="col-md-3 control-label" style="color: #ddd;">Category</label>
                                <div class="col-md-6">
                                    <select name="language" id="language" class="form-control" style="height: 35px">
                                        @foreach($languages as $language)
                                            <option value="{{$language->id}}">{{$language->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
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
