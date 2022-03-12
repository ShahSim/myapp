<!-- .page-title-bar -->
<header class="page-title-bar">
    <?php if($this->session->flashdata('status')):?>
      <div class="alert alert-success">
          <?= $this->session->flashdata('status')?>      
      </div>
    <?php endif;?>
                <!-- .breadcrumb -->
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                      <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Tables</a>
                    </li>
                  </ol>
                </nav><!-- /.breadcrumb -->
                <!-- title -->
                <h1 class="page-title"> Showing Employee Information 
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#createModal">Add Employee</button>
                </h1>
                <p class="text-muted"> Resize your browser window to see it in action. </p><!-- /title -->
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .card -->
                <div class="card card-fluid">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .table -->
                    <table id="dt-responsive" class="table dt-responsive nowrap w-100">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Phone Number</th>
                          <th>EMail</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php foreach ($employee as $key) { ?>
                              <tr>
                                  <?php
                                  foreach ($key as $value) {
                                      echo "<td>$value</td>";
                                  }
                                  ?>
                                  <td><button type="button" value="<?= $key->id ?>" class="btn btn-sm btn-icon btn-secondary edit-modal" data-toggle="modal" data-target="#editeModal"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></button></td>
                                  <td><button type="button" value="<?= $key->id ?>" class="btn btn-danger btn-sm float-right confirm-delete">Delete</button></td>
                              </tr>
                          <?php } ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>ID</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Phone Number</th>
                          <th>EMail</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </tfoot>
                    </table><!-- /.table -->
                  </div><!-- /.card-body -->
                </div><!-- /.card -->
              </div><!-- /.page-section -->

              <?php $this->load->view('frontend\modal_create_edit.php') ?>

              <?php $this->load->view('frontend\modal_edit.php') ?>