<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register As Recruiter</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group<?php echo e($errors->has('represent') ? ' has-error' : ''); ?>">
                                <label for="name" class="col-md-4 control-label">I represent</label>

                                <div class="col-md-6">
                                    <select id="represent"  class="form-control" name="represent" required autofocus>
                                        <option value="">Select</option>
                                        <option value="film producer">Film Producer</option>
                                        <option value="casting director">Casting Director</option>
                                        <option value="fashion designer">Fashion Designer</option>
                                    </select>

                                    <?php if($errors->has('represent')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('represent')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('i_am_looking') ? ' has-error' : ''); ?>">
                                <label for="name" class="col-md-4 control-label">I am Looking</label>

                                <div class="col-md-6">
                                    <select id="i_am_looking"  class="form-control" name="i_am_looking" required autofocus>
                                        <option value="">Select</option>
                                        <option value="actor">Actor</option>
                                        <option value="singer">Singer</option>
                                        <option value="model">Model</option>
                                    </select>

                                    <?php if($errors->has('i_am_looking')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('i_am_looking')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>


                            <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                <label for="name" class="col-md-4 control-label"> Full Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                    <?php if($errors->has('name')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('company_name') ? ' has-error' : ''); ?>">
                                <label for="name" class="col-md-4 control-label"> Company Name</label>

                                <div class="col-md-6">
                                    <input id="company_name" type="text" class="form-control" name="company_name" value="<?php echo e(old('company_name')); ?>" required autofocus>

                                    <?php if($errors->has('company_name')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('company_name')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <label for="email" class="col-md-4 control-label">E-Mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>
                                    <input id="form_type"  type="hidden" class="form-control" name="form_type" value="recruiter_form">

                                    <?php if($errors->has('email')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('city') ? ' has-error' : ''); ?>">
                                <label for="email" class="col-md-4 control-label">City</label>

                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control" name="city" value="<?php echo e(old('city')); ?>" required>

                                    <?php if($errors->has('city')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('city')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    <?php if($errors->has('password')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('mobile') ? ' has-error' : ''); ?>">
                                <label for="mobile" class="col-md-4 control-label">Mobile Number</label>

                                <div class="col-md-6">
                                    <input id="mobile" type="text" class="form-control" name="mobile" value="<?php echo e(old('mobile')); ?>" required autofocus>

                                    <?php if($errors->has('mobile')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('mobile')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>