<?php $__env->startSection('title'); ?>
    Manage Featured Partner
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <ul class="breadcrumb">
        <li><a href="<?php echo e(url('customer/dashboard')); ?>">Dashboard</a></li>
        <li><a href="javascript:void(0)">Manage Featured Partner</a></li>
    </ul>

    <?php if(Session::has('success')): ?>
        <span id="notification" data-type="success" data-msg="<?php echo e(Session::get('success')); ?>"></span>
    <?php endif; ?>

    <?php if(Session::has('error')): ?>
        <span id="notification_error" data-type="error" data-msg="<?php echo e(Session::get('error')); ?>"></span>
    <?php endif; ?>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Manage Featured Partner</h2>
                <div class="pull-right">
                    <a href="<?php echo e(url('/admin/featured-patner/create')); ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
                </div>
                <div class="clearfix"></div>

            </div>
            <div class="x_content">
                <table id="users" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Url</th>
                        <!-- <th>Description</th> -->
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    </thead>

                </table>


            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <script src="<?php echo e(url('/public/backend/js/jquery.dataTables.min.js')); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#users').DataTable({
                processing: true,
                serverSide: true,
                ajax: "<?php echo e(url('/admin/featured-patner/data')); ?>",
                columns: [
                    /* {data: 'image', name: 'image'},*/
                    {data: "image",
                        render: function (data, type, row) {
                            if (type === 'display') {

                                return '<img border="0" width="100" class="img-rounded" align="center" src="<?php echo e(url("storage/app/public/featured_partners/")); ?>/'+row.image+'">';
                            }
                            return data;
                        },
                        className: "dt-body-center",
                        orderable: false,
                        'defaultContent':'-'
                    },
                    {data: 'name', name: 'name'},
                    {data: 'url', name: 'url'},
                    /* {data: 'description', name: 'description'},*/
                    {data: "update",
                        render: function (data, type, row) {
                            if (type === 'display') {
                                return '<a class="btn btn-primary btn-xs" href="<?php echo e(url("admin/featured-patner/update")); ?>/' + row.id + '"><i class="fa fa-pencil"></i> Edit</a>';
                            }
                            return data;
                        },
                        className: "dt-body-center",
                        orderable: false,
                        'defaultContent':'-'
                    },
                    {data: "delete",
                        render: function (data, type, row) {
                            if (type === 'display') {
                                return '<form id="delete" action="<?php echo e(url("/admin/featured-patner/delete")); ?>/' + row.id + '"><button type="button" class="btn btn-danger btn-xs" onclick="confirmDelete()"><i class="fa fa-trash"></i> Delete</a></form>';
                            }
                            return data;
                        },
                        className: "dt-body-center",
                        orderable: false,
                        'defaultContent':'-'
                    }
                ]
            });
        });

        function confirmDelete(){
            if(confirm("Do you really want to delete this record"))
            {
                $('#delete').submit();
            }
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>