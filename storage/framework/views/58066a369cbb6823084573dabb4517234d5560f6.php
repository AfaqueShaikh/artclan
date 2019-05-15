<?php $__env->startSection('title'); ?>
    Update Banner Image
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <ul class="breadcrumb">
        <li><a href="<?php echo e(url('admin/dashboard')); ?>">Dashboard</a></li>
        <li><a href="<?php echo e(url('/admin/banner/list')); ?>">Manage Banner Image</a></li>
        <li><a href="javascript:void(0)">Update Banner Image</a></li>
    </ul>
    <div class="">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Update Banner Image</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        <div class="col-md-6 center-margin">
                            <form class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group">
                                    <label>Banner Image</label>
                                    <input class="form-control" type="file" name="banner_image" id="banner_image">
                                    <?php if($errors->has('banner_image')): ?>
                                        <span><strong class="text-danger"><?php echo e($errors->first('banner_image')); ?></strong></span>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label>Button Position</label>
                                    <select class="form-control" type="text" name="button_position" id="button_position">
                                        <option value=""> -- Select Position -- </option>
                                        <option value="top" <?php if($banner_image->button_position == 'top'): ?>selected <?php endif; ?>>Top</option>
                                        <option value="middle" <?php if($banner_image->button_position == 'middle'): ?>selected <?php endif; ?>>Middle</option>
                                        <option value="down" <?php if($banner_image->button_position == 'down'): ?>selected <?php endif; ?>>Down</option>
                                    </select>
                                    <?php if($errors->has('button_position')): ?>
                                        <span><strong class="text-danger"><?php echo e($errors->first('button_position')); ?></strong></span>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label>Button Text</label>
                                    <input class="form-control" type="text" name="button_text" id="button_text" value="<?php echo e(old('button_text',$banner_image->button_text)); ?>">
                                    <?php if($errors->has('button_text')): ?>
                                        <span><strong class="text-danger"><?php echo e($errors->first('button_text')); ?></strong></span>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label>Button URL</label>
                                    <input class="form-control" type="text" name="button_url" id="button_url" value="<?php echo e(old('button_url',$banner_image->button_url)); ?>">
                                    <?php if($errors->has('button_url')): ?>
                                        <span><strong class="text-danger"><?php echo e($errors->first('button_url')); ?></strong></span>
                                    <?php endif; ?>
                                </div>

                                <div class="ln_solid"></div>

                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-5">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>