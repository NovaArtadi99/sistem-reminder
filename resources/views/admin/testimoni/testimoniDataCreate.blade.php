<form action="{{ route('testimoniDataInsert') }}" method="post" class="form-send" enctype="multipart/form-data"
    data-alert-show="true" data-alert-field-message="false">
    {{ csrf_field() }}

    <input type="hidden" name="language_id" value="{{ $language_id }}">
    <div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="testi_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="testi_description" class="form-control tinymce"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Active ?</label>
                        <br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="testi_active_status" id="inlineRadio1"
                                value="yes">
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="testi_active_status" id="inlineRadio2"
                                value="no">
                            <label class="form-check-label" for="inlineRadio2">No</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Insert Data</button>
                </div>
            </div>
        </div>
    </div>
</form>
