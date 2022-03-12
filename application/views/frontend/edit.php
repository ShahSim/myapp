

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Information
                    <a href="<?php echo base_url('employee')?>" class="btn btn-danger float-right">Back</a>
                    </h5> 
                    
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('employee/update/'.$employee->id)?>" method="POST"> 
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" class="form-control" name="first_name" value="<?= $employee->first_name?>">
                            <small><?php echo form_error('first_name'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control " name="last_name" value="<?= $employee->last_name?>">
                            <small><?php echo form_error('last_name'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" name="phone" maxlength="14" size="14" value="<?= $employee->phone?>">
                            <small><?php echo form_error('phone'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="">EMail</label>
                            <input type="text" class="form-control" name="email" value="<?= $employee->email?>"> 
                            <small><?php echo form_error('email'); ?></small>
                        </div>

                        <div class="form-group w-100 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
