<?php $__env->startSection('title'); ?>
<?php echo e(__('user.Manage_'.Request::segment(4))); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>



<ul class="breadcrumb">
    <li><a href="<?php echo e(url('admin/dashboard')); ?>"><?php echo e(__('user.Dashboard')); ?></a></li>
    <li><a href="javascript:void(0)"><?php echo e(__('user.Manage_'.Request::segment(4))); ?></a></li>
</ul>

<?php if(Session::has('success')): ?>
    <span id="notification" data-type="success" data-msg="<?php echo e(Session::get('success')); ?>"></span>
<?php endif; ?>

   <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo e(__('user.Manage_'.Request::segment(4))); ?></h2>
                      <div class="pull-right">
                          <a href="<?php echo e(url('admin/user/create/'.Request::segment(4))); ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i> <?php echo e(__('user.addnew')); ?></a>
                          <a href="<?php echo e(url('admin/user/manage/artist-of-the-day/'.Request::segment(4))); ?>" class="btn btn-primary"> Manage Artist Of The Day</a>
                      </div>
                    <div class="clearfix"></div>

                  </div>
                  <div class="x_content">
                        <table id="users" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                            <th><?php echo e(__('user.Id')); ?></th>
                        <th><?php echo e(__('user.Name')); ?></th>
                        <th><?php echo e(__('user.Email')); ?></th>
                        <th><?php echo e(__('user.Mobile')); ?></th>
                        <th><?php echo e(__('user.Status')); ?></th>
                        <th><?php echo e(__('user.Update')); ?></th>
                        <th><?php echo e(__('user.Delete')); ?></th>
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
        ajax: "<?php echo e(url('admin/user/data/'.Request::segment(4))); ?>",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'mobile', name: 'mobile'},
            {data: 'status', name: 'status',orderable: false},
            {data: "update",
                render: function (data, type, row) {
                    if (type === 'display') {
                        return '<a class="btn btn-primary btn-xs" href="<?php echo e(url("admin/user/update/")); ?>/' + row.id + '"><i class="fa fa-pencil"></i> Edit</a>';
                    }
                    return data;
                },
                className: "dt-body-center",
                orderable: false,
            },
            {data: "delete",
                render: function (data, type, row) {
                    if (type === 'display') {
                        return '<form id="delete_'+row.id+'" method="post" action="<?php echo e(url("admin/user/delete")); ?>/' + row.id +'"> <?php echo e(method_field("DELETE")); ?> <?php echo csrf_field(); ?><button type="button" class="btn btn-danger btn-xs" onclick="confirmDelete('+row.id+')"><i class="fa fa-trash"></i> Delete</a></form>';
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

function confirmDelete(id){
    if(confirm("Do you really want to delete this record"))
    {
        $('#delete_'+id).submit();
    }
}
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>