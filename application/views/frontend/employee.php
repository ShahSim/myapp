<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <?php if($this->session->flashdata('status')):?>
                    <div class="alert alert-success">
                        <?= $this->session->flashdata('status')?>      
                    </div>
                    <?php endif;?>
                    <h5>Showing Employee Information
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#createModal">Add Employee</button>
                    </h5>

                </div>
                <div class="card-body">
                    <table id="fr" class="table ">
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
                                    <td><button type="button" value="<?= $key->id ?>" class="btn btn-success btn-sm float-right edit-modal" data-toggle="modal" data-target="#editeModal">Edit</button></td>
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

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('frontend\modal_create_edit.php') ?>

<?php $this->load->view('frontend\modal_edit.php') ?>