<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!-- BEGIN PLUGINS JS -->
<!-- <script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script> -->

<script src="<?= base_url()?>/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>/assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url()?>/assets/vendor/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>  
<!-- END PLUGINS JS -->

<!-- BEGIN PAGE LEVEL JS -->
<!-- <script src="<?= base_url()?>/assets/javascript/pages/dataTables.bootstrap.js"></script> -->
<script src="<?= base_url()?>/assets/javascript/pages/datatables-responsive-demo.js"></script> 
<!-- END PAGE LEVEL JS -->

<script>
    $(document).ready(function() {
        
        //$('#dt-responsive').DataTable({});

        
        //Deleting information
        $("#dt-responsive").on("click", ".confirm-delete", function() {
            confirmDialog = confirm("Are you sure?");

            if (confirmDialog) {
                var id = $(this).val();
                $.ajax({
                    type: "DELETE",
                    url: "<?= base_url('/employee/delete/') ?>" + id,
                    success: function(response) {
                        alert('Data deleted');
                        window.location.reload();
                    }
                });
            }

            return false;
        });
        //////////////////////////////

        // var elements= $("#fr").children()[1];
        // console.log("childs", elements);
        ///Modal edit button
        $("#dt-responsive").on("click", ".edit-modal", function(event) {
            event.preventDefault();
            id_global = $(this).val();

            $.ajax({
                    method: "GET",
                    url: "<?= base_url('/employee/edit_modal/') ?>" + id_global,
                    dataType: "json",
                    // beforeSend: function() {
                    //     $('#submit_create_modal').attr('disabled', 'disabled');
                    // },

                    success: function(data) {
                        $('#first_name_input').val(data.first_name);
                        $('#last_name_input').val(data.last_name);
                        $('#phone_input').val(data.phone);
                        $('#email_input').val(data.email);
                    }
                });
        });
        ////////////////////////////

        //Submit edited info
        $('#edit_form_modal').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: "<?= base_url('/employee/update/') ?>"+ id_global,
                method: "POST",
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $('#submit_edit_modal').attr('disabled', 'disabled');
                },

                success: function(data) {
                    if (data.error) {
                        if (data.first_name_error != '') {
                            $('#first_name_error_edit').html(data.first_name_error);
                        } else {
                            $('#first_name_error_edit').html('');
                        }
                        if (data.last_name_error != '') {
                            $('#last_name_error_edit').html(data.last_name_error);
                        } else {
                            $('#last_name_error_edit').html('');
                        }
                        if (data.phone_error != '') {
                            $('#phone_error_edit').html(data.phone_error);
                        } else {
                            $('#phone_error_edit').html('');
                        }
                        if (data.email_error != '') {
                            $('#email_error_edit').html(data.email_error);
                        } else {
                            $('#email_error_edit').html('');
                        }
                    }

                    if (data.success) {
                        window.location.reload();
                    }
                    $('#submit_edit_modal').attr('disabled', false);
                }
            })
        });

        //Submit and validate with modal 
        $('#create_edit_form_modal').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: "<?= base_url('/employee/store') ?>",
                method: "POST",
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $('#submit_create_modal').attr('disabled', 'disabled');
                },

                success: function(data) {
                    if (data.error) {
                        if (data.first_name_error != '') {
                            $('#first_name_error').html(data.first_name_error);
                        } else {
                            $('#first_name_error').html('');
                        }
                        if (data.last_name_error != '') {
                            $('#last_name_error').html(data.last_name_error);
                        } else {
                            $('#last_name_error').html('');
                        }
                        if (data.phone_error != '') {
                            $('#phone_error').html(data.phone_error);
                        } else {
                            $('#phone_error').html('');
                        }
                        if (data.email_error != '') {
                            $('#email_error').html(data.email_error);
                        } else {
                            $('#email_error').html('');
                        }
                    }

                    if (data.success) {
                        window.location.reload();
                    }
                    $('#submit_create_modal').attr('disabled', false);
                }
            })
        });
        ///////////////////////

    });
</script>