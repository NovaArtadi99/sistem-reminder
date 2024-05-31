<form action="{{ route('admin.masterAdminInsert') }}"
      method="post"
      class="form-send"
      enctype="multipart/form-data"
      data-alert-show="true"
      data-alert-field-message="false">
    {{ csrf_field() }}
    <div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="adm_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Active ?</label>
                        <br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="adm_active_status" id="inlineRadio1" value="yes">
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="adm_active_status" id="inlineRadio2" value="no">
                            <label class="form-check-label" for="inlineRadio2">No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" name="adm_email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="adm_password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password Confirmation</label>
                        <input type="password" name="adm_password_confirmation" class="form-control">
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
