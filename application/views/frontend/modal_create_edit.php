<div class="modal" id="createModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 id="modal_title" class="modal-title">Insert Employee Information</h5>
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
                                <form id="create_edit_form_modal" method="POST"> 
                                    <div class="form-group">
                                        <label for="">First Name</label>
                                        <input type="text" class="form-control" name="first_name">
                                        <small id="first_name_error" class="text-danger"></small>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control " name="last_name">
                                        <small id="last_name_error" class="text-danger"></small>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="text" class="form-control" name="phone" maxlength="14" size="14">
                                        <small id="phone_error" class="text-danger"></small>
                                    </div>

                                    <div class="form-group">
                                        <label for="">EMail</label>
                                        <input type="text" class="form-control" name="email">
                                        <small id="email_error" class="text-danger"></small>
                                    </div>

                                    <div class="form-group w-100 d-flex justify-content-center">
                                        <button type="submit" id="submit_create_modal" class="btn btn-primary">Create</button>
                                        
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





