<?php $__env->startSection('title'); ?>
    Edit User
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body" style="display: flex; justify-content: center;">
                    <img width="300px" class="img-thumbnail" src="<?php if(empty($data->photo)): ?>
                        <?php echo e(url('img/default-image.png')); ?>

                    <?php else: ?>
                        <?php echo e(url('')); ?>/photo/<?php echo e($data->photo); ?>

                    <?php endif; ?>" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="card-title">Edit Users</h4>
                        </div>
                        <div class="col-6 text-right">
                            <a href="<?php echo e(route('user.index')); ?>" class="btn btn-dark">Back</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?php if($errors->any()): ?>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div><?php echo e($error); ?></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <form action="<?php echo e(route('user.update', $data->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Photo</label>
                            <input type="file" class="form-control" name="photo">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" class="form-control" value="<?php echo e(old('name', $data->name)); ?>" name="name" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control"  value="<?php echo e(old('email', $data->email)); ?>" name="email" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Role Name</label>
                            <select name="role_name" class="form-control" id="">
                                <option value="Admin" <?php if($data->role_name == 'Admin'): ?> selected <?php endif; ?>>Admin</option>
                                <option value="Member" <?php if($data->role_name == 'Member'): ?> selected <?php endif; ?>>Member</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Domicile</label>
                            <input type="text" class="form-control" value="<?php echo e(old('domicile', $data->domicile)); ?>" name="domicile" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" value="<?php echo e(old('phone_number', $data->phone_number)); ?>" name="phone_number" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" value="<?php echo e(old('alamat', $data->domicile)); ?>" id="exampleFormControlTextarea1" rows="3"><?php echo old('alamat', $data->domicile); ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="col-form-label text-md-end"><?php echo e(__('Password')); ?></label>
                            <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password"  autocomplete="new-password">
                        </div>
                        <small></small>
                        <div class="mb-3">
                            <label for="password-confirm" class="col-form-label text-md-end"><?php echo e(__('Confirm Password')); ?></label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/fm/Downloads/AM/gigs-am/resources/views/backend/user/edit.blade.php ENDPATH**/ ?>