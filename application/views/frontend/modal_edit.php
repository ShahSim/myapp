<div class="modal" id="editeModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Employee Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form id="edit_form_modal" method="POST"> 
                                    <div class="form-group">
                                        <label for="">First Name</label>
                                        <input type="text" id="first_name_input" class="form-control" name="first_name">
                                        <small id="first_name_error_edit" class="text-danger"></small>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Last Name</label>
                                        <input type="text" id="last_name_input" class="form-control " name="last_name">
                                        <small id="last_name_error_edit" class="text-danger"></small>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="text" id="phone_input" class="form-control" name="phone" maxlength="14" size="14">
                                        <small id="phone_error_edit" class="text-danger"></small>
                                    </div>

                                    <div class="form-group">
                                        <label for="">EMail</label>
                                        <input type="text" id="email_input" class="form-control" name="email">
                                        <small id="email_error_edit" class="text-danger"></small>
                                    </div>

                                    <div class="form-group w-100 d-flex justify-content-end">
                                        <button type="submit" id="submit_edit_modal" class="btn btn-primary">SAVE</button>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>





